<?php


class Order extends Model
{
    public static $ADMIN_TYPE = 1;
    public static $CLIENT_TYPE = 2;

//    public static $MY_TYPE = 3;

    public function __construct()
    {
        parent::__construct();
        $this->db->query('SET NAMES utf8');
//        $this->db-> query ('SET CHARACTER_SET utf8_unicode_ci');
    }


    public function buyVerification()
    {
        if (!isset($_COOKIE['id'])) {
            return false;
            exit();
        }
        $id_sesja = trim($_POST["id_sesja"]);
        $kwota = trim($_POST["kwota_do_zaplaty"]);

        $query = "select id_uzyt from sesja where id = :id and ip = :REMOTE_ADDR  AND web = :HTTP_USER_AGENT;";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $_COOKIE['id']);
        $stmt->bindParam(':REMOTE_ADDR', $_SERVER['REMOTE_ADDR']);
        $stmt->bindParam(':HTTP_USER_AGENT', $_SERVER['HTTP_USER_AGENT']);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!empty($result['id_uzyt'])) {
            try {
                $this->db->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
                $this->db->beginTransaction();

                $time_now = (new \DateTime())->format('Y-m-d H:i:s');
                $id_uzyt = $result['id_uzyt'];
                $sql = "SELECT DISTINCT\n"
                    . "oferta.id_oferta\n"
                    . "FROM\n"
                    . "Oferta\n"
                    . "INNER JOIN koszyk ON koszyk.id_oferta = oferta.id_oferta\n"
                    . "WHERE oferta.data_zakonczenia IS NULL AND koszyk.id_uzyt = :idUzyt for UPDATE";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':idUzyt', $id_uzyt);
                if( !$stmt->execute() )
                {
                    echo "Błąd przy aktualizacji1";
                    return 0;
                }
                $data = [];
                $data_place = 0;

                if ($stmt->rowCount() > 0)
                {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        $data[$data_place]['id_oferta'] = $row['id_oferta'];
                        $data_place++;
                    }
                }

                $sql_update_offer = "UPDATE oferta SET oferta.data_zakonczenia= :dataZ WHERE oferta.id_oferta = :idOferta;";
                $stmt = $this->db->prepare($sql_update_offer);
                for($i = 0; $i <$data_place; $i++ )
                {
                    $stmt->bindParam(':dataZ', $time_now);
                    $stmt->bindParam(':idOferta', $data[$i]['id_oferta']);

                    if( !$stmt->execute() )
                    {
                        echo "Błąd przy aktualizacji2";
                        $this->db->rollback();
                        return 0;
                    }
                }


                $sql_in = "insert into transakcja(id_kupujacego, kwota, data_transakcji) values(:idUzyt, :kwota, :dataZ);";
                $stmt = $this->db->prepare($sql_in);
                $stmt->bindParam(':dataZ', $time_now);
                $stmt->bindParam(':idUzyt', $id_uzyt);
                $stmt->bindParam(':kwota', $kwota);
                if( !$stmt->execute() )
                {
                    echo "Błąd przy aktualizacji3";
                    $this->db->rollback();
                    return 0;
                }
                $lastIdTrans = $this->db->lastInsertId();


                $sql_in_pos ="INSERT INTO posrednia(id_oferta,id_transakcja) VALUES (:idOferta,:idTrans);";
                $stmt = $this->db->prepare($sql_in_pos);
                for($i = 0; $i <$data_place; $i++ )
                {
                    $stmt->bindParam(':idOferta', $data[$i]['id_oferta']);
                    $stmt->bindParam(':idTrans', $lastIdTrans);

                    if( !$stmt->execute())
                    {
                        echo "Błąd przy aktualizacji";
                        $this->db->rollback();
                        return 0;
                    }
                }

                echo json_encode($data);
                $this->db->commit();
                echo "Gratulację! Zakup przebiegł poprawnie.";
                return true;


            } catch (PDOExecption $e) {
                $this->db->rollback();
                print "Error!: " . $e->getMessage() . "</br>";
                echo "no sory1";
                return false;
            }
        } else {
            echo "no sory2";
            return false;
        }

        echo "no sory3";
        return false;
    }


}




<br><br><br>

<section class="listings">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div id="listing">


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<script>

var build2 =
{
    buildListing2: function(result, listing )
        {
            
            listing.html('');
            var count = 0;
            var whole_cost = 0;
            
            if(result != '')
            {
                
                $.each(result, function(k, v) {
                    
                    ++count;
                    whole_cost += Number(v.cena);

                    listing.append(

                        '<div class ="listing_box" id ="oferta'+v.id_oferta+'" >'+
                        '                        <div class="row mb-3">'+
                        '                            <div class="col-md-12">'+
                        '                                <div class="card">'+
                        '                                    <div class="card-body">'+
                        '                                        <div class="row">'+
                        '                                            <div class="col-md-4">'+
                        '<img src="'+ v.zdjecie + '"/>'+
                        '                                            </div>'+
                        '                                            <div class="col-md-6  card-body">'+
                        '                                                <div class="list-title">'+
                        '                                                    <ul class="list-inline list-unstyled">'+
                        '                                                        <li class="list-inline-item"><a href="/user/offer?oferta='+v.id_oferta+'"><h4>'+ v.marka+' '+v.model +'</h4></a></li>'+
                        '                                                    </ul>'+
                        '                                                </div>'+
                        '                                                <div class="list-location">'+
                        '                                                    <a href="#"><i class="fa fa-map-marker"></i><small> '+ v.kraj+' '+v.data_zlozenia +'</small> </a>'+
                        '                                                </div>'+
                        '                                                <div class="list-descrip">'+
                        '                                                    <small>'+v.opis.substring(0,137)+'...<br /><br />'+
                        '                                                </div>'+
                        '</small>'+
                        ''+
                        ''+
                        '                                            </div>'+
                        '                                            <div class="col-md-2 border-left h-100 ">'+
                        '                                                <ul class="list-unstyled">'+
                        '                                                    <li><h3>'+ Number(v.cena).toLocaleString() +' zł '+'</h3></li>'+
                        '                                                    <li class="text-secondary"><small>'+ v.wyswietlenia +' Reviews</small></li>'+
                        '                                                    <li style="left: 0;"><br><a onclick="usun_z_koszyka('+v.id_oferta+','+Number(v.cena)+')" class="btn btn-success pull-right">Usuń z koszyka</a></li>'+
                        '                                                </ul>'+
                        '                                            </div>'+
                        '                                        </div>'+
                        '                                    </div>'+
                        '                                </div>'+
                        '                            </div>'+
                        '                        </div>'+
                        '                        </div>'

                    );




                });
            }
            else
            {
                listing.append(
                        '                        <div class="row">'+
                        '                            <div class="col">'+
                        '                                <div class="card">'+
                        '                                    <div class="card-body" style="text-align: center;">'+
                        '                                       <div>Brak produktów w koszyku</div>'+                                        
                        '                                    </div>'+
                        '                                </div>'+
                        '                            </div>'+
                        '                        </div>'
                )
            }

            listing.append(
                '<div class="card" style="padding: 10px;">'+
                    '<div class="d-flex justify-content-between">'+
                    '    <div style="margin: 5px">Ilość produktów w koszyku: '+count+'</div>'+
                    '    <div>'+
                    '        <a href="" class="btn btn-success pull-right">Kup teraz</a>'+
                    '        <div class="pull-right" style="margin: 5px">'+
                    '            Cena końcowa: <b id="koszt1">'+whole_cost.toLocaleString() +'</b><b>zł '+'</b>'+
                    '             <div id="koszt2" style="display: none;">'+whole_cost+'</div'+
                    '        </div>'+
                '       </div>'+
                    '</div>'+
                '</div>'
                );
        }
}

$(document).ready(function() {
    var cia  = "<?php if(isset($_COOKIE['id'])) echo $_COOKIE['id']; else echo -1; ?>";
    $.ajax({
            type: "POST",
            url: '../app/views/main/cart_show_items.php',
            data: {id_sesja: cia},

            success: function(data)
            {
                build2.buildListing2(
                    jQuery.parseJSON(data),
                    $('#listing'),
                );
            }
        });
});


function usun_z_koszyka(id,cena) 
{
    var txt = 0;
    var oferta ="oferta"+id;
    if (confirm("Czy na pewno chcesz ofertę o id: " + id + "?")) {
        txt = 1;
    } else {
        txt = 0;
    }

    
    var koszt = document.getElementById("koszt2").innerHTML;

    if (parseInt(txt) == 1)
    {
        $.ajax({
            type: "POST",
            url: '../app/views/main/cart_delete.php',
            data: {id_oferta: id},

            success: function (data) 
            {
                alert(data);
                document.getElementById(oferta).innerHTML = '';
                document.getElementById("koszt1").innerHTML = (koszt - cena).toLocaleString();
                document.getElementById("koszt2").innerHTML = (koszt - cena);
            }
        });
    }
}
</script>


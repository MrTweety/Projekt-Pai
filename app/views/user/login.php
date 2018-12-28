
<form class="modal-content animate" action="/action_page.php">

    <span onclick="document.getElementById('log_form').style.display='none';  document.getElementById('indicators').style.display='block';" class="close" title="Zamknij formularz">&times;</span>
    
    <div class="log_container">
        <label for="uname"><b>Nazwa użytkownika</b></label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="Podaj nazwę użytkownika" name="uname" required>
        </div>

        <label for="psw"><b>Hasło</b></label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" placeholder="Podaj hasło" name="psw" required>
        </div>

      <div class="log_margins">
        <button type="submit" class="btn btn-primary btn-block">Zaloguj</button>
      </div>
    </div>

    <div class="log_margins">
      <button class="btn btn-danger" onclick="document.getElementById('log_form').style.display='none';document.getElementById('indicators').style.display='block';">Anuluj</button>
      <span class="psw">Nie masz konta? <a href="#">Zarejestruj się</a></span>
    </div>
  </form>


<form class="modal-content animate" action="/action_page.php">

    <span onclick="document.getElementById('log_form').style.display='none';  document.getElementById('indicators').style.display='block';" class="close" title="Zamknij formularz">&times;</span>
    
    <div class="log_container">
      <label for="uname"><b>Nazwa użytkownika</b></label>
      <input type="text" class="form-control" placeholder="Podaj nazwę użytkownika" name="uname" required>

      <label for="psw"><b>Hasło</b></label>
      <input type="password" class="form-control" placeholder="Podaj hasło" name="psw" required>

      <div class="log_margins">
        <button type="submit" class="btn btn-primary btn-block">Zaloguj</button>
      <div>
    </div>

    <div class="log_margins">
      <button class="btn btn-danger" onclick="document.getElementById('log_form').style.display='none';document.getElementById('indicators').style.display='block';">Anuluj</button>
      <span class="psw">Nie masz konta? <a href="#">Zarejestruj się</a></span>
    </div>
  </form>

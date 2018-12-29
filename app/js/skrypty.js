




function load_login_form()
{
    $("#log_form").load("user/login");
}

$(document).ready( function() {
    $("#load_login_form").on("click", function() {
        document.getElementById('log_form').style.display='block';
        document.getElementById('indicators').style.display='none';
    });
});



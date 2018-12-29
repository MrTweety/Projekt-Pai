


















<script>



    $('#mark').ready(function() {

        $.ajax({
            type: "POST",
            url: 'search_marka.php',

            success: function(data)
            {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#mark'),
                    'Marka Pojazdu'

                );
            }
        });

    });

    $('#model').ready(function() {

        $.ajax({
            type: "POST",
            url: 'search_model.php',

            success: function(data)
            {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#model'),
                    'Model Pojazdu'

                );
            }
        });

    });


    $('#mark').change(function() {


        $.ajax({
            type: "POST",
            url: 'search_model.php',
            data: {marka :$('#mark').val()},

            success: function(data)
            {
                helpers.buildDropdown(
                    jQuery.parseJSON(data),
                    $('#model'),
                    'Model Pojazdu'

                );
            }
        });

    });





    var helpers =
        {
            buildDropdown: function(result, dropdown, emptyMessage)
            {
                // Remove current options
                dropdown.html('');
                // Add the empty option with the empty message
                dropdown.append('<option value="-1">' + emptyMessage + '</option>');
                // Check result isnt empty
                if(result != '')
                {
                    // Loop through each of the results and append the option to the dropdown
                    $.each(result, function(k, v) {
                        dropdown.append('<option value="' + v.id_tab + '">' + v.name_tab + '</option>');
                    });
                }
            }
        }

</script>


<script>

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

</script>





</body>
</html>
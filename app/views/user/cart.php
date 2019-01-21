<br><br><br>

<section class="listings">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row ">
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

            listing.append(
                '<div class="card" style="padding: 10px;">'+
                    '<div class="d-flex justify-content-between">'+
                    '    <div style="margin: 5px">Ilość produktów w koszyku: '+count+'</div>'+
                    '    <div>'+
                    '        <a href="" class="btn btn-success pull-right">Kup teraz</a>'+
                    '        <div class="pull-right" style="margin: 5px">'+
                    '            Cena końcowa: <b>'+whole_cost.toLocaleString() +' zł '+'</b>'+
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



</script>


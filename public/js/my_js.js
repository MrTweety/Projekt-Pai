

function load_login_form()
{
    $("#log_form").load("/user/login");
}

$(document).ready( function() {
    $("#load_login_form").on("click", function() {
        document.getElementById('log_form').style.display='block';
        document.getElementById('indicators').style.display='none';
    });
});




var helpers =
    {
        buildDropdown: function(result, dropdown, emptyMessage, def = -1)
        {

            dropdown.html('');
            dropdown.append('<option value="-1">' + emptyMessage + '</option>');
            if(result != '' )
            {
                $.each(result, function(k, v) {
                    if (v.id_tab!= def)
                        dropdown.append('<option value="' + v.id_tab + '">' + v.name_tab + '</option>');
                    else
                        dropdown.append('<option selected="selected" value="' + v.id_tab + '">' + v.name_tab + '</option>');

                });
            }
        }
    }



var helpers2 =
    {
        buildDropdown: function(result, dropdown,dropdown2, emptyMessage,emptyMessage2, def = -1, def2 = -1,inter = 1,start = 0)
        {

            dropdown.html('');
            dropdown2.html('');
            dropdown.append('<option value="-1">' + emptyMessage + '</option>');
            dropdown2.append('<option value="-1">' + emptyMessage2 + '</option>');
            if(result != '' )
            {



                inter= parseInt(inter);
                $.each(result, function(k, v) {
                    var Maxx = parseInt(v.id_tab);
                    var Minn = parseInt(v.name_tab);
console.log("strt: "+parseInt(start));


                    if(parseInt(start)!=0){
                        console.log("strtt: "+parseInt(start));
                        start=parseInt(start);
                        if(start<0) start = Minn;
                        else if(Minn>start){
                            Minn = start;
                        }else Minn = 0;
                        console.log("strttt: "+parseInt(start));
                    }

                    console.log("Min: "+Minn);
                    console.log("Max: "+Maxx);
                    // console.log(start);

                    while(Minn <= (Maxx+inter) ) {

                        if (Minn != def)
                            dropdown.append('<option value="' + Minn + '">' + Minn + '</option>');
                        else
                            dropdown.append('<option selected="selected" value="' + Minn + '">' + Minn + '</option>');

                        if (Minn != def2)
                            dropdown2.append('<option value="' + Minn + '">' + Minn + '</option>');
                        else
                            dropdown2.append('<option selected="selected" value="' + Minn + '">' + Minn + '</option>');

                        Minn+=inter;
                    }

                });
            }
        }
    }


var build =
    {



        buildListing: function(result, listing )
        {
            // Remove current options
            listing.html('');
            var count = 0;
            // Check result isnt empty
            if(result != '')
            {
                // Loop through each of the results and append the option to the dropdown
                $.each(result, function(k, v) {
                    //listing.append('<div class="ada"><img src="../../../public/img/'+v.imga +'.jpg"/></div>');
                    ++count;
                    listing.append(

                        '<div class ="listing_box" id ="oferta'+v.id_oferta+'" >'+
                        '                        <div class="row mb-3">'+
                        '                            <div class="col-md-12">'+
                        '                                <div class="card">'+
                        '                                    <div class="card-body">'+
                        '                                        <div class="row">'+
                        '                                            <div class="col-md-4">'+
                        '<img src="'+ v.imgg + '"/>'+
                        '                                            </div>'+
                        '                                            <div class="col-md-6  card-body">'+
                        '                                                <div class="list-title">'+
                        '                                                    <ul class="list-inline list-unstyled">'+
                        '                                                        <li class="list-inline-item"><a href="/user/offer?oferta='+v.id_oferta+'"><h4>'+ v.marka+' '+v.model +'</h4></a></li>'+
                        // '                                                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>'+
                        // '                                                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>'+
                        '                                                    </ul>'+
                        '                                                </div>'+
                        '                                                <div class="list-location">'+
                        '                                                    <a href="#"><i class="fa fa-map-marker"></i><small> '+ v.kraj+' '+v.data_zlozenia +'</small> </a>'+
                        '                                                </div>'+
                        '                                                <div class="list-descrip">'+
                        '                                                    <small>'+v.opis.substring(0,137)+'...<br /><br />'+
                        v.cechy +
                        '                                                </div>'+
                        '</small>'+
                        ''+
                        ''+
                        '                                            </div>'+
                        '                                            <div class="col-md-2 border-left h-100 ">'+
                        '                                                <ul class="list-unstyled">'+
                        '                                                    <li><h3>'+ Number(v.cena_netto).toLocaleString() +' zł '+'</h3></li>'+
                        '                                                    <li class="text-secondary"><small>'+ v.wyswietlenia +' Reviews</small></li>'+
                        '                                                </ul>'+
                        '                                                <a href="/user/offer?oferta='+v.id_oferta+'" class="btn btn-outline-primary">Buy Now</a>'+
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

            listing.append('<div class="row mb-3">'+
                '                        <div class="col-md-12">'+
                '                            <small>'+ count +' properties found in Classic4you.  </small><br /><br />'+
                '                        </div>'+
                '                    </div>');



        },



        buildIndexOffer: function(result, listing )
        {
            // Remove current options
            listing.html('');
            var count = 0;
            // Check result isnt empty
            if(result != '')
            {
                // Loop through each of the results and append the option to the dropdown
                $.each(result, function(k, v) {
                    //listing.append('<div class="ada"><img src="../../../public/img/'+v.imga +'.jpg"/></div>');
                    ++count;
                    if(count <= 9)
                    listing.append(

                        '<div class="col-md-6 col-lg-4 item zoom-on-hover" id ="oferta'+v.id_oferta+'">'+
                        '                    <a class="lightbox" href="'+ v.imgg + '">'+
                        '                        <img class="img-fluid image" src="'+ v.imgg + '">'+
                        '                        <span class="description">'+
                        '                            <span class="description-heading">'+ v.marka+' '+v.model +'</span>'+
                        '                            <span class="description-body">'+v.opis.substring(0,137)+'...</span>'+
                        '                        </span>'+
                        '                    </a>'+
                        '                </div>'



                );

                });
            }
        },


        buildIndexSlider: function(result, listing )
        {
            // Remove current options
            listing.html('');
            var count = 0;
            // Check result isnt empty
            if(result != '')
            {
                // Loop through each of the results and append the option to the dropdown
                $.each(result, function(k, v) {
                    //listing.append('<div class="ada"><img src="../../../public/img/'+v.imga +'.jpg"/></div>');
                    ++count;
                    if(count<=1)
                    listing.append(
                        '        <div  class="carousel-item  active" >'+
                        '            <a href="'+v.goToHref+'">'+
                         '            <img class="d-block " src="../../../'+v.imga+'" alt="Los Angeles"  >'+
                        '            <div class="carousel-caption">'+
                        '                <h3>'+v.tytul+'</h3>'+
                        '                <p>'+v.opis+'</p>'+
                        '            </div>'+
                        '            </a>'+
                        '        </div>'




                ); else listing.append(
                        '        <div  class="carousel-item " >'+
                        '            <a href="'+v.goToHref+'">'+
                        '            <img class="d-block " src="../../../'+v.imga+'" alt="Los Angeles"  >'+
                        '            <div class="carousel-caption">'+
                        '                <h3>'+v.tytul+'</h3>'+
                        '                <p>'+v.opis+'</p>'+
                        '            </div>'+
                        '            </a>'+
                        '        </div>')




                });

                var toSlider = $('#indexToSlider');
                toSlider.html('');
                for (i = 0; i < count ; i++) {
                    if(i==0) {
                        toSlider.append('<li data-target="#myCarousel" data-slide-to="'+i+'" class="active"></li>');
                    } else{
                        toSlider.append('<li data-target="#myCarousel" data-slide-to="'+i+'"></li>');
                    }
                }



            }
        }




    }
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAFEklEQVRoge2ZW2gcVRjH/2c22SQ1aZLNRXNraFATvKFs0QdfTPTFiKCIQUwFwZQYkqIY8cELrKLFF2+0G4yVgpBgm4q0oO2DJvpgVUICKohtUFuSzcZoLrK7uezOzPn7kLRddmZ2ZjJJfGg+WHZ2zjnf/P7nfOc7c84CO7Zj17aJTfEyRF/TSvxuAM0SCIJsAlFFsJAECCQoGQVwgeQ4wZFL04FRhIT0+mhPAm77dLlO12Q3yf0kawCAJEgAWPte+xAmZRFKDug5Ijx9oCyyrQJuHIpX+JN4k8DTJPwWgNng0+4jBfKY7lNfi3ZWz225gFsHEk9KicMQDGQHdASfXmeeFD3RnorjWyIg2M/c1cJEn5SiwwjiGf5qHaB/JrfyIDqFumkCgv3ctXLd0mckHtxS+Kvtz/jy5ePRzuplOzbFAXzuNsMDQKu2itMI/er3LGC1MNG3zfBrZVI8UF5S+oEdX9YQumUw0U6JAS/wCoiWej/urc5FfbGCkjwFKZ1QdSKWIn6MpvDxTyuW7SX5xEJvzQnXApo+iZUJRTkPsHyj8HdW+vBecyH2FvssO+lcJIXHPl+08E0AWEhRNMZfNE+xliGkKOKQF/i7Kn0Yenh3Vvh0yxJ2gRzK1y05zW7eMbBcu75IbQjeJ4jD9xfB73OWpR3MmY7St6N7HAtQKXvoYYVtbchDbZFtfkgTkBUeJP1S0bvM2uYY7oSokIl2L9mmuS7XFHQypqN3OI5f/lavkKuSdvBrzyCfwhBfRZvQswpo2hu/h0TtRuFJ4PYKY78AwAvDcXw3lbRtb7FC1+y+GAnGgNF0n2bj3OwFniTKC4xu/1qSOLdReF7+LVsy/ZoJ2Od1kSryGyfvZEwHPcADACWCtgIkebMXeJJQTJJPPCm9wRMgZGOmX0OwkqjyAr9+aTBJR9kmax1SVGX6NQmh9W3ghuEtFMArPACwKNOj2Qi4cvzD/oAh5s1C6L76PEw8e73h/snfVvDS14tO4E1H15jviATJgBN4ACjOE6aTNtNyFaAk3zjg0bjmGJ5kPLO92SSecQpPsy5xaRPzmlN4CGDGVgCICa8T1o39vqA6ggcACVywFUBwzFW28ACvSeDPRc0R/Pr1WKYP4yQGR4zA1pP6ua9iyLncDetlRx8qMWw0fp5V8f5o/EodAFjViKQmncKDCkZsBVyaDozuqVqYAllnB08CZ/9YNZR9xBKIDAWzSzpOnV92M2EzO29SlQ3jmbzGORASEpKDTuCtyqzMAzwADJodRZq+tOs5Ikwi5eWVejPhCSZTqhY282sqYPpAWQTksc2CB4x1HMOTkMRRvNU47VgAANDvf4XknFv47CHkHp7EvC50d3tiAIh0FC+Q4qBbeLvFzSU8CHYh1Gh56Jt14xrtqThOoP9/hA/rb9x0MptP2533TGVlN8FTTuEtRbiEB/ClrkSet+OzPzpoE7ovT7aDPOPi4Wb8zuHJLzRlVxtCzZp3AQCindXLswU3PELBD+3h3Wei9PYEw5ov8ihC9ifTgNnrtJV1CnUO6Aq8M/2tAhyRRPlGFrIs8P8Q7LaL+Uxzfvq0bgu9NSeSSTaR7AOQdLMWWC1SEjiiKckmt/CAmxFIs/jLtfMAusvenTqkaegB2E6iziX8FIABVdXDVouUE9ucv1lDVHYXRPaRsoUSwe+fqWoN5Iv80gKfIgTw74qUwxeXFztOz31DcowCI6psGN+Mv1l3bMeudfsPP8EkRZOLDr8AAAAASUVORK5CYII=">


    <title>{{ config('app.name') }}</title>
        <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




</head>
<body>

    <main class="">
        @yield('content')
    </main>

    <div class="overlay"></div>

    <script type="text/javascript">
        $(document).on({
            ajaxStart: function(){
                $("body").addClass("loading"); 
            },
            ajaxStop: function(){ 
                $("body").removeClass("loading"); 
            }    
        });
    </script>

    <script type="text/javascript">


        $('#lounchtemplate').click(function(event) {
               $('#normalpost').hide('slow');
               $('#Templatepost').show('slow');
            });
        $('#cancelTemplate').click(function(event) {
               $('#normalpost').show('slow');
               $('#Templatepost').hide('slow');
            });


        $(document).ready(function () {
          $('#post_now').on("submit",function (e) {
             e.preventDefault();
            var bodytemplate=$("textarea[name=bodytemplate]").val();
            var bodynormal=$("textarea[name=bodynormal]").val();
            var username=$("input[name=username]").val(); 
            var _token=$("input[name=_token]").val();
            var datee=new Date();
            var btndate=((datee.getMinutes())- datee.getMinutes());


            $.ajax({
                type: "POST",
                url: "{{route('post.store')}}",
                data:{
                    bodytemplate:bodytemplate,
                    username:username,
                    bodynormal:bodynormal,
                    _token:_token
                },
                success: function (response) {
              
                    if (bodytemplate == "" && bodynormal =="" ) {
                        $("#alretmessage").show("slow");

                    }else if (bodynormal =="") {
                        
                     $("#alretmessagework").show("slow");
                    $('#post_now')[0].reset();
                    $("#contentpost").prepend('<div class="row bg-white appendedposts rounded-lg mb-3  shadow-sm">'+'<div class="col-lg-12">'+'<div class="row">'+'<div class="col-lg-12 p-3">'+'<div class="d-flex flex-row">'+'<div class="p-1">'+'<a href="">'+'<img src="https://avataaars.io/?avatarStyle=Circle&topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black" width="40px" />'+'</a>'+'</div>'+'<div class="flex-grow-1 text-truncate ml-1">'+'<div class="row text-truncate">'+'<div class="col-lg-12 text-truncate">'+username+'</div>'+'<div class="col-lg-12 ">'+'<p class="text-muted text-truncate">'+ btndate +' minutes'+'</p>'+'</div>'+'</div>'+'</div>'+'</div>'+'</div>'+'<div class="col-lg-12 postcontent bg-info">'+'<div class="">'+'<div class=" text-break">'+'<p class="showless">'+ bodytemplate+'</p>'+'</div>'+'</div>'+'</div>'+'</div>'+'</div>'+'<div class="col-lg-12"><hr></div><div class="col-lg-12"><div class="d-flex bd-highlight"><div class="p-2 flex-fill text-muted text-truncate bd-highlight"><div class="d-flex flex-row text-truncate"><div class=" flex-fill"><svg width="30px" viewBox="0 0 1222.000000 1280.000000" ><g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="none"><path d="M7258 12774 c-60 -19 -84 -33 -112 -64 -42 -47 -52 -83 -61 -215 -18 -291 -98 -951 -150 -1240 -83 -456 -247 -909 -432 -1190 -133 -201 -233 -303 -568 -576 -331 -269 -493 -448 -600 -664 -30 -60 -115 -254 -188 -430 -257 -610 -395 -906 -578 -1235 -404 -727 -746 -1118 -1086 -1242 -49 -18 -85 -21 -227 -24 -93 -2 -173 -7 -177 -11 -12 -12 -12 -5224 -1 -5235 5 -5 27 -13 48 -18 45 -10 716 -135 1129 -210 273 -50 946 -176 1312 -246 101 -19 242 -39 315 -44 73 -6 207 -17 298 -25 486 -43 917 -65 1910 -96 766 -24 1478 9 1851 85 274 57 469 154 729 363 180 145 414 400 478 522 63 119 64 127 66 466 1 290 2 313 22 361 39 95 98 168 305 374 271 270 347 373 385 520 35 137 13 235 -134 600 -89 221 -112 303 -112 400 0 124 41 189 315 505 188 215 237 315 217 433 -14 85 -60 177 -209 425 -192 319 -223 400 -199 517 15 72 49 128 208 343 71 95 145 206 165 247 36 71 38 80 38 170 -1 85 -5 108 -42 216 -51 148 -119 286 -210 424 -159 239 -329 429 -465 518 -174 113 -368 154 -883 187 -515 33 -1594 45 -2222 25 -467 -15 -452 -15 -475 8 -46 46 -62 256 -33 428 51 296 167 579 558 1361 209 416 250 524 327 847 60 254 64 294 64 636 1 339 -3 384 -56 600 -87 361 -195 573 -396 776 -140 141 -304 254 -468 321 -73 30 -143 49 -351 98 -94 23 -214 18 -305 -11z"/><path d="M435 6135 c-94 -18 -145 -37 -210 -81 -94 -62 -179 -178 -200 -271 -3 -18 -11 -35 -16 -38 -12 -8 -12 -5078 0 -5090 5 -6 16 -35 25 -66 41 -143 202 -284 364 -318 37 -8 310 -11 880 -11 911 0 896 -1 1016 63 139 73 234 211 259 377 3 19 7 1146 9 2505 2 2373 2 2473 -16 2540 -51 194 -178 328 -360 379 -68 20 -104 20 -876 23 -638 1 -820 -1 -875 -12z"/></g></svg></div><div class="flex-fill text-truncate">'+'Like'+'</div></div></div><div class="p-2 flex-fill text-truncate text-muted bd-highlight"><div class="d-flex flex-row text-truncate"><div class="text-truncate flex-fill"><svg class="svg-icon" viewBox="0 0 20 20" width="30px"><path d="M17.211,3.39H2.788c-0.22,0-0.4,0.18-0.4,0.4v9.614c0,0.221,0.181,0.402,0.4,0.402h3.206v2.402c0,0.363,0.429,0.533,0.683,0.285l2.72-2.688h7.814c0.221,0,0.401-0.182,0.401-0.402V3.79C17.612,3.569,17.432,3.39,17.211,3.39M16.811,13.004H9.232c-0.106,0-0.206,0.043-0.282,0.117L6.795,15.25v-1.846c0-0.219-0.18-0.4-0.401-0.4H3.189V4.19h13.622V13.004z"></path></svg><span>'+'Comment'+'</span></div></div></div><div class="p-2 flex-fill bd-highlight text-truncate text-muted"><div class="d-flex flex-row text-truncate"><div class=" flex-fill text-truncate"><svg class="svg-icon" viewBox="0 0 20 20" width="30px"><path d="M16.76,7.51l-5.199-5.196c-0.234-0.239-0.633-0.066-0.633,0.261v2.534c-0.267-0.035-0.575-0.063-0.881-0.063c-3.813,0-6.915,3.042-6.915,6.783c0,2.516,1.394,4.729,3.729,5.924c0.367,0.189,0.71-0.266,0.451-0.572c-0.678-0.793-1.008-1.645-1.008-2.602c0-2.348,1.93-4.258,4.303-4.258c0.108,0,0.215,0.003,0.321,0.011v2.634c0,0.326,0.398,0.5,0.633,0.262l5.199-5.193C16.906,7.891,16.906,7.652,16.76,7.51 M11.672,12.068V9.995c0-0.185-0.137-0.341-0.318-0.367c-0.219-0.032-0.49-0.05-0.747-0.05c-2.78,0-5.046,2.241-5.046,5c0,0.557,0.099,1.092,0.292,1.602c-1.261-1.111-1.979-2.656-1.979-4.352c0-3.331,2.77-6.041,6.172-6.041c0.438,0,0.886,0.067,1.184,0.123c0.231,0.043,0.441-0.134,0.441-0.366V3.472l4.301,4.3L11.672,12.068z"></path></svg><span>'+'Share'+'</span></div></div></div></div></div> <div class="col-lg-12 mb-2"><div class="d-flex flex-row"><div class="p-1"><a href=""><img src="https://avataaars.io/?avatarStyle=Circle&topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black" width="40px" /></a></div><div class="flex-grow-1 p-1 mt-2"><input type="text" class="form-control" placeholder="Write a Comment, '+username+'"></div></div></div>'+'</div>');

                }
                else if (bodytemplate==""){
                    $("#alretmessagework").show("slow");
                    $('#post_now')[0].reset();
                          $("#contentpost").prepend('<div class="row bg-white appendedposts rounded-lg mb-3  shadow-sm">'+'<div class="col-lg-12">'+'<div class="row">'+'<div class="col-lg-12 p-3">'+'<div class="d-flex flex-row">'+'<div class="p-1">'+'<a href="">'+'<img src="https://avataaars.io/?avatarStyle=Circle&topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black" width="40px" />'+'</a>'+'</div>'+'<div class="flex-grow-1 text-truncate ml-1">'+'<div class="row text-truncate">'+'<div class="col-lg-12 text-truncate">'+username+'</div>'+'<div class="col-lg-12 ">'+'<p class="text-muted text-truncate">'+ btndate +' minutes'+'</p>'+'</div>'+'</div>'+'</div>'+'</div>'+'</div>'+'<div class="col-lg-12">'+'<div class="">'+'<div class=" text-break">'+'<p class="showlessnormal">'+ bodynormal+'</p>'+'</div>'+'</div>'+'</div>'+'</div>'+'</div>'+'<div class="col-lg-12"><hr></div><div class="col-lg-12"><div class="d-flex bd-highlight"><div class="p-2 flex-fill text-muted text-truncate bd-highlight"><div class="d-flex flex-row text-truncate"><div class=" flex-fill"><svg width="30px" viewBox="0 0 1222.000000 1280.000000" ><g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="none"><path d="M7258 12774 c-60 -19 -84 -33 -112 -64 -42 -47 -52 -83 -61 -215 -18 -291 -98 -951 -150 -1240 -83 -456 -247 -909 -432 -1190 -133 -201 -233 -303 -568 -576 -331 -269 -493 -448 -600 -664 -30 -60 -115 -254 -188 -430 -257 -610 -395 -906 -578 -1235 -404 -727 -746 -1118 -1086 -1242 -49 -18 -85 -21 -227 -24 -93 -2 -173 -7 -177 -11 -12 -12 -12 -5224 -1 -5235 5 -5 27 -13 48 -18 45 -10 716 -135 1129 -210 273 -50 946 -176 1312 -246 101 -19 242 -39 315 -44 73 -6 207 -17 298 -25 486 -43 917 -65 1910 -96 766 -24 1478 9 1851 85 274 57 469 154 729 363 180 145 414 400 478 522 63 119 64 127 66 466 1 290 2 313 22 361 39 95 98 168 305 374 271 270 347 373 385 520 35 137 13 235 -134 600 -89 221 -112 303 -112 400 0 124 41 189 315 505 188 215 237 315 217 433 -14 85 -60 177 -209 425 -192 319 -223 400 -199 517 15 72 49 128 208 343 71 95 145 206 165 247 36 71 38 80 38 170 -1 85 -5 108 -42 216 -51 148 -119 286 -210 424 -159 239 -329 429 -465 518 -174 113 -368 154 -883 187 -515 33 -1594 45 -2222 25 -467 -15 -452 -15 -475 8 -46 46 -62 256 -33 428 51 296 167 579 558 1361 209 416 250 524 327 847 60 254 64 294 64 636 1 339 -3 384 -56 600 -87 361 -195 573 -396 776 -140 141 -304 254 -468 321 -73 30 -143 49 -351 98 -94 23 -214 18 -305 -11z"/><path d="M435 6135 c-94 -18 -145 -37 -210 -81 -94 -62 -179 -178 -200 -271 -3 -18 -11 -35 -16 -38 -12 -8 -12 -5078 0 -5090 5 -6 16 -35 25 -66 41 -143 202 -284 364 -318 37 -8 310 -11 880 -11 911 0 896 -1 1016 63 139 73 234 211 259 377 3 19 7 1146 9 2505 2 2373 2 2473 -16 2540 -51 194 -178 328 -360 379 -68 20 -104 20 -876 23 -638 1 -820 -1 -875 -12z"/></g></svg></div><div class="flex-fill text-truncate">'+'Like'+'</div></div></div><div class="p-2 flex-fill text-truncate text-muted bd-highlight"><div class="d-flex flex-row text-truncate"><div class="text-truncate flex-fill"><svg class="svg-icon" viewBox="0 0 20 20" width="30px"><path d="M17.211,3.39H2.788c-0.22,0-0.4,0.18-0.4,0.4v9.614c0,0.221,0.181,0.402,0.4,0.402h3.206v2.402c0,0.363,0.429,0.533,0.683,0.285l2.72-2.688h7.814c0.221,0,0.401-0.182,0.401-0.402V3.79C17.612,3.569,17.432,3.39,17.211,3.39M16.811,13.004H9.232c-0.106,0-0.206,0.043-0.282,0.117L6.795,15.25v-1.846c0-0.219-0.18-0.4-0.401-0.4H3.189V4.19h13.622V13.004z"></path></svg><span>'+'Comment'+'</span></div></div></div><div class="p-2 flex-fill bd-highlight text-truncate text-muted"><div class="d-flex flex-row text-truncate"><div class=" flex-fill text-truncate"><svg class="svg-icon" viewBox="0 0 20 20" width="30px"><path d="M16.76,7.51l-5.199-5.196c-0.234-0.239-0.633-0.066-0.633,0.261v2.534c-0.267-0.035-0.575-0.063-0.881-0.063c-3.813,0-6.915,3.042-6.915,6.783c0,2.516,1.394,4.729,3.729,5.924c0.367,0.189,0.71-0.266,0.451-0.572c-0.678-0.793-1.008-1.645-1.008-2.602c0-2.348,1.93-4.258,4.303-4.258c0.108,0,0.215,0.003,0.321,0.011v2.634c0,0.326,0.398,0.5,0.633,0.262l5.199-5.193C16.906,7.891,16.906,7.652,16.76,7.51 M11.672,12.068V9.995c0-0.185-0.137-0.341-0.318-0.367c-0.219-0.032-0.49-0.05-0.747-0.05c-2.78,0-5.046,2.241-5.046,5c0,0.557,0.099,1.092,0.292,1.602c-1.261-1.111-1.979-2.656-1.979-4.352c0-3.331,2.77-6.041,6.172-6.041c0.438,0,0.886,0.067,1.184,0.123c0.231,0.043,0.441-0.134,0.441-0.366V3.472l4.301,4.3L11.672,12.068z"></path></svg><span>'+'Share'+'</span></div></div></div></div></div> <div class="col-lg-12 mb-2"><div class="d-flex flex-row"><div class="p-1"><a href=""><img src="https://avataaars.io/?avatarStyle=Circle&topType=LongHairMiaWallace&accessoriesType=Round&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Black" width="40px" /></a></div><div class="flex-grow-1 p-1 mt-2"><input type="text" class="form-control" placeholder="Write a Comment, '+username+'"></div></div></div>'+'</div>');
                };

                },
                error:function(error){
                    $("#alretmessage").show("slow");
                    },

             });


          });
        });


        //show whole post

        $(document).ready(function(){
            $( ".postcontent" ).one( "click", function() {

            $(".showdescription").show("slow");
            $(".postcontent").toggleClass("postcontenttt");
            $(".postcontent").removeClass("postcontent");
            $(".showless").hide("slow");
            $("#showmore").hide("slow");
        });

        });
        </script>

</body>
</html>

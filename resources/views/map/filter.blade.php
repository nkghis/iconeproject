{{--
@extends('layouts.app')

--}}
{{--Title content.--}}{{--

--}}
{{--
@extends('layouts.app)

@section('contents')
   <div id="map">

   </div>
@endsection--}}
{{--   <!doctype html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Gmap </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <style>
       /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
       #map {
           height: 100%;
       }
       /* Optional: Makes the sample page fill the window. */
       html, body {
           height: 100%;
           margin: 0;
           padding: 0;
       }
   </style>
</head>

<body>

   <div class="container">
       <h1>test</h1>
       <div id="map">

       </div>
   </div>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBr7LVwlhB3VL1ikL2URAoyVIzwREACSqk" async defer></script>
   <script src="{{ asset('js/mapscript.js') }}"></script>
</body>
</html>
--}}

        <!DOCTYPE html>
<html>
<head><meta name="viewport" content="initial-scale=1.0"><meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Simple Map</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- My own Styles -->
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

    <style>

        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
<br>
<div class="container">
    <div class="row">

        <div class="col-md-8">
            <form method="GET" action="{{ route('maps.bycommune') }}">
                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label text-right">Commune</label>
                <div class="col-sm-4">
                    <select id="com" name="commune" class="form-control">

                        @if($commune->count())

                            <option value="0">-- Toutes les communes --</option>

                            @foreach ($commune as $communes)
                                <option value="{{$communes->id}}" {{ $communes->id == $cs->id ? 'selected' : '' }}  >{{$communes->name}}</option>
                            @endforeach

                        @endif


                    </select>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-md btn-primary btn-block" type="submit">Filtrer</button>
                </div>

            </div>
            </form>
        </div>

        {{--<div class="col-md-4">

        </div>--}}

        <div class="col-md-4 page-action text-right">
            <a href="{{ route('home') }}" class="btn btn-default btn-sm"> <i class="material-icons">backspace</i> Retour</a>
        </div>
    </div>
</div>

<div id="map" class="container"></div>

<script src="{{ asset('js/app.js') }}"></script>
<script>
    var markers = @json($visuel);

    var map;
    var infowindows;
    var e = document.getElementById('com');
    var id = e.options[e.selectedIndex].value;
   console.log(id);


    var init = @json($cs);

    if (id != 0)
    {

        function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
             center: { lat: init.lat, lng: init.lng},

             zoom: init.zoom

             });




            var marker = [];


            var contentString =[];


            var infowindow = [];
            var url = '{{asset('storage/mesimages/')}}';


            for(var i =0; i < markers.length; i++ ){
                var location = new google.maps.LatLng(markers[i].latitude, markers[i].longitude);

                marker[i] = new google.maps.Marker({

                    position : location,
                    title : markers[i].adresse,
                    map:map

                });
                contentString[i] = '<div id="content">' +
                    '<div id = "site"' +
                    '</div>'+
                    '<h1 id = "firsthead" class="firstHeading">'+ markers[i].adresse +'</h1>'+
                    '<div id ="bodycontent">'+
                    '<p><b>Commune : </b>'  + markers[i].name +
                    '<br>'+
                    '<br>'+
                    '<img width="200" src="'+ url +'/'+markers[i].nameimage+'"/>'+
                    '</div>'+
                    '</div>';
                infowindow[i] = new google.maps.InfoWindow({

                    content : contentString[i]
                });

                var monevent = marker[i];
                google.maps.event.addListener(marker[i], 'click', (function (monevent, i) {

                    return function (){
                        infowindow[i].open(map, marker[i]);
                    }
                })(marker[i], i))

            }

        }

    }
    else
    {
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {

                center: { lat: 5.3819324, lng: -3.9192513},
                zoom: 11
            });
            var marker = [];


            var contentString =[];


            var infowindow = [];
            var url = '{{asset('storage/mesimages/')}}';


            for(var i =0; i < markers.length; i++ ){
                var location = new google.maps.LatLng(markers[i].latitude, markers[i].longitude);

                marker[i] = new google.maps.Marker({

                    position : location,
                    title : markers[i].adresse,
                    map:map

                });
                contentString[i] = '<div id="content">' +
                    '<div id = "site"' +
                    '</div>'+
                    '<h1 id = "firsthead" class="firstHeading">'+ markers[i].adresse +'</h1>'+
                    '<div id ="bodycontent">'+
                    '<p><b>Commune : </b>'  + markers[i].name +
                    '<br>'+
                    '<br>'+
                    '<img width="200" src="'+ url +'/'+markers[i].nameimage+'"/>'+
                    '</div>'+
                    '</div>';
                infowindow[i] = new google.maps.InfoWindow({

                    content : contentString[i]
                });

                var monevent = marker[i];
                google.maps.event.addListener(marker[i], 'click', (function (monevent, i) {

                    return function (){
                        infowindow[i].open(map, marker[i]);
                    }
                })(marker[i], i))

            }
        }

    }


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFFwXNKrYiQnaL-6kPhBxqn3SPsZE7mr0&callback=initMap" async defer></script>

<script>



    //console.log(visuels);
</script>


</body>
</html>

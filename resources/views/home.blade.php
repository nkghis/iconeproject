@extends('layouts.app')

{{--Title content.--}}
{{--Change 'Home' by Title of this page.--}}
@section('title', 'Home')

{{--Css content.--}}
@section('bootstrap')

    {{--Css for Autocompleted--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
    <link href="{{ asset('select2/css/select2.min.css') }}" rel="stylesheet">

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

@endsection

{{--Body content.--}}
@section('content')
<div class="container">

    {{--<div class="card">
                <div class="card-header">
                    --}}{{--Titre Panel. Change 'Titre panel.' to your panel title.--}}{{--
                    <div class="col-md-8">
                        <h3>Titre panel.</h3>
                    </div>

                    --}}{{--Bouton à droite du titre. Decommenter le contenu du div si vous souhaiter ajouter un bouton a droite du titre du panel.--}}{{--
                    --}}{{--Si vous utiliser les droit d'acces d'acces ajouter les droit que vous voulez octroyer a ce dernier.--}}{{--
                    <div class="col-md-4 page-action text-right">

                        --}}{{--@can('add_artistes')
                            <a href="#" class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#artisteModal"> <i class="material-icons">open_in_new</i> <b>Nouveau artiste</b></a>
                        @endcan--}}{{--
                    </div>
                 </div>

                <div class="card-body">



                </div>
    </div>--}}

    <div id="map">

    </div>

</div>
@endsection

{{--Javascript content.--}}
@section('jquery')


    {{--Autocompleted JavaScript--}}
  {{--  <script src="{{ asset('select2/js/select2.min.js') }}"></script>--}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

    <script src="{{ asset('js/mapscript.js') }}"></script>

@endsection

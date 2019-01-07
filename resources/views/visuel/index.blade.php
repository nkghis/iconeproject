@extends('layouts.app')

{{--Title content.--}}
{{--Change 'Home' by Title of this page.--}}
@section('title', 'Visuel')

{{--Css content.--}}
@section('bootstrap')

    {{--Css for Datepicker--}}
    {{--    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />--}}

    <link href="{{ asset('datepicker/css/gijgo.min.css') }}" rel="stylesheet">

    {{--Css for Datatables--}}
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">--}}

    <link href="{{ asset('datatables/css/CssDatatables.css') }}" rel="stylesheet">

    {{--Css for Autocompleted--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
    <link href="{{ asset('select2/css/select2.min.css') }}" rel="stylesheet">

@endsection

{{--Body content.--}}
@section('content')

    {{-- Client Modal --}}
    {{-- <div class="modal fade" id="visuelModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
         <div class="modal-dialog" role="document">
             {!! Form::open(['route' => ['visuels.store'] ]) !!}
             {{ csrf_field() }}
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="clientModalLabel">Nouveau Visuel</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                 </div>
                 <div class="modal-body">
                     @include('visuel._Form')
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                     <!-- Submit Form Button -->
                     {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                 </div>
                 {!! Form::close() !!}
             </div>
         </div>
     </div>--}}


    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    {{--Titre Panel. Change 'Titre panel.' to your panel title.--}}
                    <div class="col-md-8">
                        <h3>Liste des visuels.</h3>
                    </div>

                    {{--Bouton à droite du titre. Decommenter le contenu du div si vous souhaiter ajouter un bouton a droite du titre du panel.--}}
                    {{--Si vous utiliser les droit d'acces d'acces ajouter les droit que vous voulez octroyer a ce dernier.--}}
                    <div class="col-md-4 page-action text-right">

                       {{-- @can('add_visuels','view_visuel', 'edit_visuels', 'delete_visuels')
                            <a href="#" class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#visuelModal"> <i class="material-icons">open_in_new</i> <b>Nouveau Visuel</b></a>
                        @endcan--}}
                    </div>
                </div>
            </div>


            <div class="card-body">


                {!! Form::open(['route' => ['visuels.store'], 'enctype' => 'multipart/form-data','files' => 'true']) !!}
                {{ csrf_field() }}
                @include('visuel._form')

                <!-- Submit Form Button -->
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

      {{--  <div class="row">
            <img src="{{asset('storage/mesimages/alibi.jpg')}}" alt="">

        </div>--}}

        </div>

    </div>
@endsection

{{--Javascript content.--}}
@section('jquery')

    {{--Datepicker JavaScript--}}
    {{--<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/messages/messages.fr-fr.js" type="text/javascript"></script>--}}
    <script src="{{ asset('datepicker/js/gijgo.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datepicker/js/messages/messages.fr-fr.js') }}" type="text/javascript"></script>

    {{--DataTable JavaScript--}}
    {{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}
    <script src="{{ asset('datatables/js/jQueryDatatables.js') }}" type="text/javascript"></script>

    {{--Autocompleted JavaScript--}}
    <script src="{{ asset('select2/js/select2.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

    <script type="text/javascript">
        $(document).ready(function(){

            /* Select2 autocompleted source server route. if you want to use select2 uncomment line below and change route name 'artistes.atcartiste'*/

            {{--src = "{{ route('artistes.atcartiste') }}";--}}



            /* Select2 autocompleted Script. if you want to use select2 uncomment method block and change part below :
             * 'artiste' to select input id
             * placeholder
             * text : item.data_file_name
             * id   : item.data_id
             * */
            /*$("#artiste").select2({
             placeholder: 'Selectionner un artiste',
             ajax: {
             url: src,
             dataType: 'json',
             delay: 250,
             processResults: function (data) {
             return {
             results:  $.map(data, function (item) {
             return {
             text: item.nom,
             id: item.id
             }
             })
             };
             },
             cache: true
             }
             });*/

            /* Change 'index-ticket' by id of table*/
            $('#index-client').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json'
                },
                order: [[ 0, "desc" ]],

                columnDefs : [
                    {
                        'searchable'    : false,
                        'targets'       : [0,1,3,4,5]
                    },
                    /*{
                     "targets": [ 0 ],
                     "visible": false
                     }*/
                ],
                pageLength: 5
            });
        });

        /* Function*/
        {{--Function get quantity of tranche field--}}{{--
        function getvalues() {
            var debut = 0;
            var fin = 0;
            var quantite = 0;

            debut = parseInt(document.getElementById('debut').value);
            fin = parseInt(document.getElementById('fin').value);
            quantite = fin - debut +1;

            if(quantite > 0){
                document.getElementById('quantite').value = quantite;
            }
            else{
                alert("Verifier les champs Tranche!!!!. Champs: (Tranche fin) doit etre supérieur à Champs : (Tranche Début)");
                document.getElementById('fin').value = "";
                document.getElementById('debut').focus();

            }
        }
--}}

        /* Datepicker Script*/
        /* Change 'enlevement' by id of date-picker input*/
        $('#enlevement').datepicker({
            uiLibrary: 'bootstrap4',
            locale: 'fr-fr',
            format: 'dd-mm-yyyy'
        });

    </script>

    {{--Script to show modal if validation return error--}}
    <script type="text/javascript">

        {{--@if ($errors->has('lib_souprefecture'))
        $('#clientModal').modal('show');
        @endif--}}

        @if (count($errors) > 0)
        $('#clientModal').modal('show');
        @endif


    </script>

@endsection

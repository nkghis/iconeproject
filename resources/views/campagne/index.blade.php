@extends('layouts.app')

@section('title', 'Campagne')

@section('bootstrap')

    {{--Css for Datatables--}}
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">--}}

    {{--<link href="{{ asset('datatables/css/CssDatatables.css') }}" rel="stylesheet">--}}

@endsection

@section('content')

my campagne

@endsection

@section('jquery')

    {{--DataTable JavaScript--}}
    {{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}
   {{-- <script src="{{ asset('datatables/js/jQueryDatatables.js') }}" type="text/javascript"></script>--}}


    {{--Autocompleted Script--}}
   {{-- <script type="text/javascript">
        $(document).ready(function(){

            $('#data-table').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json'
                },
                order: [[ 0, "desc" ]],
                pageLength: 5
            });
        });
    </script>
--}}
    {{--Script to show modal if validation return error--}}
    {{--<script type="text/javascript">
        @if (count($errors) > 0)
        $('#artisteModal').modal('show');
        @endif
    </script>--}}
@endsection

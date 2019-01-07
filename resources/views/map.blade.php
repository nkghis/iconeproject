<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Map</title>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

</head>
{{--<img src="{{asset('storage/mesimages/aaa.jpg')}}" alt="">--}}


<body>
    <select id="com" class="form-control">


    <option value="">-- Commune --</option>

    <option value="1"  >Abobo</option>
    <option value="2"  >Adjame</option>
    <option value="3"  >Cocody</option>
    <option value="4"  >Yopougon</option>

</select>
    {{--<script>
        $(document).ready(function () {

            $('#com').change(function () {

                var idcommune = $(this).val();
                console.log(idcommune);
            })

        })
    </script>--}}

    <script>
        $(function() {
            $('#com').change(function() {
                var id = $(this).val();

                //console.log(idcommune);

                $.ajax({
                    url: 'maps/bycommune',
                    type: 'GET',
                    data: { id: id }
                    /*success: function(response)
                    {
                        $('#something').html(response);
                    }*/
                });
            })
        });
    </script>

</body>
</html>
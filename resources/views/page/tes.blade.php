<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div class="">
        <input type="text" id="searchbox" onkeyup="read()">

    </div>
    <div id="page"></div>

    {{-- select servis.*, transaksis.* FROM servis
LEFT OUTER JOIN transaksis on servis.id = transaksis.servis_id
where  servis.status =1 
AND
transaksis.servis_id is NULL --}}

    <script>
        $(document).ready(function() {
            read()

        });

        function read() {
            $.get("{{ url('tesdata') }}", {},
                function(data, status) {
                    $('#page').html(data);
                },

            );
        }
    </script>
</body>

</html>

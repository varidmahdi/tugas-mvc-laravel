<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome-SanberBook</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1>SELAMAT DATANG! {{ $data->firstname }} {{ $data->lastname }}</h1>
	    <h3>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h3>
    </body>
</html>

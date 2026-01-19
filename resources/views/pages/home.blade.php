<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title }}</title>

</head>
<body>
        <h1>HOME</h1>

        @if (isset($_SESSION['user']))

             <p>user connected : {{$_SESSION['user']->nom}}</p>
             <p>roll user : {{$_SESSION['user']->role}}</p>
        @endif
</body>
</html>

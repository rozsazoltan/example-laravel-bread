<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Létrehozás</h1>
    <form action="{{ route('phonebook.store') }}" method="POST">
        {{ csrf_field() }}

        <label for="name">Név</label>
        <input type="text" id="name" name="name" max="50">

        <input type="submit" value="Mentés">
    </form>
</body>
</html>
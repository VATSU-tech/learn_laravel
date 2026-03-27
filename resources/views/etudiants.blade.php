<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>etudians</title>
</head>
<body>
    @csrf
    <h1>etudians</h1>
    <form action="/store" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="name">Nom : <input type="text" name="name" id="name"></label><br><br>
        <label for="age">Age : <input type="number" name="age" id="age"></label><br><br>
        <label for="phone">Telephone : <input type="number" name="phone" id="phone"></label><br><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
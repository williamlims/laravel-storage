<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/photo" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="photo">Photo</label><br>
    <input type="file" name="photo" id="photo">
    <button type="submit">ENVIAR</button>
    </form>
</body>
</html>
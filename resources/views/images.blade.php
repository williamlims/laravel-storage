<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/images" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="image1">Imagem 1</label><br>
    <input type="file" name="image1" id="image1"><br>
    <label for="image2">Imagem 2</label><br>
    <input type="file" name="image2" id="image2"><br>
    <button type="submit">ENVIAR</button>
    </form>
</body>
</html>
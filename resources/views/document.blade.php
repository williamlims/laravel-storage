<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/document" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="file">File</label><br>
    <input type="file" name="file" id="file" accept=".pdf">
    <button type="submit">ENVIAR</button>
    </form>
</body>
</html>
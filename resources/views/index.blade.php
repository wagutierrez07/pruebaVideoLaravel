<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba de video</title>
</head>
<body>
    <form action="{{Route('insert.file')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="video"/>
        <p>
         @if($errors->has('video'))
           {{ $errors->first('video') }}
         @endif
        </p>
        <input type="submit" name="click"/>
</form>
</body>
</html>
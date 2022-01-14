<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Testing Google drive filesystem</title>
</head>
<body>
  <form action="{{ route('upload.file', app()->getLocale()) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <input type="submit" value="Submit">
  </form>
  @if(Session::has('url'))
    <img src="{{ session()->get('url') }}" alt="">
  @endif
</body>
</html>
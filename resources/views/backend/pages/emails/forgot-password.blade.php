<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MPC Method | Forget Password</title>
</head>
<body>
  <h2>{{ $details['title'] }}</h2>
  <p>{{ $details['body'] }}</p>
  <a href="{{ route('show.reset.password', ['language'=>app()->getLocale(), 'username'=>$details['username']]) }}">{{ route('show.reset.password', ['language'=>app()->getLocale(), 'username'=>$details['username']]) }}</a>
</body>
</html>
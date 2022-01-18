<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Verify Your Email Address</title>
</head>
<body>
  <h2>{{ $details['title'] }}</h2>
  <p>{{ $details['body'] }}</p>
  <a href="{{ route('verify.email.address', ['language'=>app()->getLocale(), 'username'=>Auth::user()->username]) }}">{{ route('verify.email.address', ['language'=>app()->getLocale(), 'username'=>Auth::user()->username]) }}</a>
</body>
</html>
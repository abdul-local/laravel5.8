<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('subscribe') }}" method="POST">
    @csrf
    <input type="text" name='email'>
    @if ($errors->has('email'))
    {{$errors->first()}}

    @endif
   <input type="submit" value="Subscribe">
    </form>
</body>
</html>
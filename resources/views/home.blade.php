<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br>
<br>
    <div class="container">
    <form action="{{ route('subscribe') }}" method="POST">
    @csrf
    <div class="form-group">
    <input type="text" name="email" class="form-control {{$errors->has('email') ? 'is-invalid':''}}" placeholder="masukan email anda">
    @if ($errors->has('email'))
    <div class="invalid-feedback">
    {{$errors->first()}}
    </div>
    @endif
    </div>
    
    <input type="submit" value="subscribe" class="btn btn-primary"></input>
    </div>
    </div>
    
    </form>
    </div>
</body>
</html>
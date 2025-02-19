<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h3>ĐĂNG NHẬP</h3>
        @if(session('messageError'))
            <h4 class="text-danger" >{{session('messageError')}}</h4>
        @endif
    <form action="{{ route('postLogin') }}" method="post" >
        @csrf
        <div class="mt-3">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
           @error('email')
            <span class="text-danger" >{{ $message  }}</span>
           @enderror
        </div>
        <div class="mt-3">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">
            @error('password')
            <span class="text-danger" >{{ $message  }}</span>
           @enderror
        </div>
        <button type="submit" class="btn btn-success mt-3" >Login</button>
    </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
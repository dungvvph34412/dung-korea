<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <style>
    body {
    background-color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login {
    position: relative;
    width: 260px; /* Reducimos el ancho del formulario */
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px; /* Reducimos el espacio entre los elementos */
}

.login h2 {
    font-size: 1.8em; /* Reducimos un poco el tamaño del título */
    color: #fff;
    text-align: center;
}

.login .inputBx {
    position: relative;
    width: 100%;
}

.login .inputBx input {
    position: relative;
    width: 100%;
    padding: 10px 0px; /* Reducimos el padding */
    background: transparent;
    border: 2px solid #fff;
    border-radius: 30px; /* Ajustamos el borde para que sea proporcional al tamaño */
    font-size: 1em; /* Reducimos el tamaño de fuente */
    color: #fff;
    box-shadow: none;
    outline: none;
    text-align: center; /* Para centrar el texto dentro del input */
}

.login .inputBx input[type="submit"] {
    width: 100%; /* Aseguramos que sea del mismo ancho que los inputs */
    padding: 10px 15px; /* Igual que los demás inputs */
    background: linear-gradient(45deg, #ff357a, #fff172);
    border: none;
    border-radius: 30px; /* Igual que los demás inputs */
    font-size: 1em; /* Igual que los demás inputs */
    cursor: pointer;
}

.login .inputBx input::placeholder {
    color: rgba(255, 255, 255, 0.759);
}

.login .links {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 10px; /* Reducimos un poco el padding */
}

.login .links a {
    color: #fff;
    text-decoration: none;
    font-size: 0.9em; /* Reducimos el tamaño de fuente */
}

.ring {
    position: relative;
    width: 400px; /* Reducimos el tamaño del anillo */
    height: 400px; /* Reducimos el tamaño del anillo */
    display: flex;
    justify-content: center;
    align-items: center;
}

.ring i {
    position: absolute;
    inset: 0;
    border: 2px solid #fff;
    transition: 0.5s;
}

.ring i:nth-child(1) {
    border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
    animation: animate 6s linear infinite;
}

.ring i:nth-child(2) {
    border-radius: 41% 44% 56% 59% / 38% 62% 63% 37%;
    animation: animate 4s linear infinite;
}

.ring i:nth-child(3) {
    border-radius: 41% 44% 56% 59% / 38% 62% 63% 37%;
    animation: animate2 10s linear infinite;
}

.ring:hover i {
    border: 6px solid var(--clr);
    filter: drop-shadow(0 0 20px var(--clr));
}

@keyframes animate {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate2 {
    0% {
        transform: rotate(360deg);
    }

    100% {
        transform: rotate(0deg);
    }
}
   </style>
</head>
<body>
    <div class="ring">
    <i style="--clr:#00ff0a"></i>
        <i style="--clr:#ff0057"></i>
        <i style="--clr:#fffd44"></i>
        <div class="login">
        <h2>Login</h2>
        @if(session('messageError'))
            <h4 class="text-danger" >{{session('messageError')}}</h4>
        @endif
    <form action="{{ route('postLogin') }}" method="post" >
        @csrf
        <div class="inputBx">
            <input  type="email" name="email" id="email" placeholder="email" >
           @error('email')
            <span class="text-danger" >{{ $message  }}</span>
           @enderror
        </div>
        <div class="inputBx">
            <input type="password" name="password" id="password" placeholder="password"  >
            @error('password')
            <span class="text-danger" >{{ $message  }}</span>
           @enderror
        </div>
        <div class="inputBx">
           <input type="submit" value="Login" >
    </div>
    </form>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
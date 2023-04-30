<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
</head>
<body>
    <div>
        {{-- ketika form tersebut tersubmit maka akan menuju rute post checklogin --}}
        {{-- dimana nanti data yang dikirim pada form dapat ditampilkan --}}
        <form action="/proseslogin" method="POST">
            {{-- Pada laravel, wajib menambahkan @csrf pada form --}}
            @csrf
            <h1>Login Page</h1>
            <ul>
                <tr><input name="username" placeholder="Masukkan Username" type="text"></tr>
            </ul>
            <ul>
                <tr><input name="password" placeholder="Masukkan Password" type="password"></tr>
                <button type="submit">Login</button>
            </ul>


        </form>
    </div>
</body>
</html>

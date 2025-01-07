<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
    <p>Congrats you are logged in !!!!</p>

    <form action="/logout" method="post">
        @csrf
        <button>Logout</button>
    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="post">
        @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button>Register</button>
        </form>
       </div>

    @endauth



</body>
</html>

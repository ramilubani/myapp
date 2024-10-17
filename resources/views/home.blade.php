<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document3</title>
</head>
<body>

    @auth
       <p>you are logged in</p>
       <form action="/logout" method="post">
        @csrf
        <button>logout</button>
    </form>
            
    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
    <form action="/register" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="name">
        <input type="email" name="email" id=""placeholder="email">
        <input type="password" name="password" id="" placeholder="password">
        <button>Register</button>
    </form>

</div>     
    
    @endauth





    
</body>
</html>
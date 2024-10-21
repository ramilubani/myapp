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
       <p>Congrats you are logged in</p>
       <form action="/logout" method="post">
        @csrf
        <button>logout</button>
    </form>

    <div style="border: 3px solid black;">
        <h2>Create a New Post</h2>
        <form action="/create-post" method="post">
            @csrf
            <input type="text" name="title" placeholder="post title">
            <textarea type="text "name="body" placeholder="body content ..."></textarea>
            <button>Save Post</button>
        
        
        </form>
    </div>    
            
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
    <div style="border: 3px solid black;">
        <h2>Login</h2>
    <form action="/login" method="post">
        @csrf
        <input type="text" name="loginname" id="" placeholder="name">
        <input type="password" name="loginpassword" id="" placeholder="password">
        <button>Log in</button>
    </form>

</div>     

</div>     
    
    @endauth





    
</body>
</html>
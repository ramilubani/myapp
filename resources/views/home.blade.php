<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f0e1; /* Light brown background for the whole page */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            background-color: #e2d1b3; /* Light brown background for the container */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #4e3b31;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #c8a68a;
            border-radius: 5px;
            font-size: 16px;
            color: #4e3b31;
            background-color: #fff;
        }

        button {
            padding: 12px;
            background-color: #9e7b56;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #8c6a4e; /* Darker brown on hover */
        }

        .auth-container {
            margin-bottom: 20px;
        }

        .form-container {
            border: 3px solid #4e3b31;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .auth-container p {
            text-align: center;
            color: #4e3b31;
        }
    </style>
</head>
<body>
    <div class="container">
        @auth
            <div class="auth-container">
                <p>Congrats, you are logged in!</p>

                <form action="/logout" method="post">
                    @csrf
                    <button>Logout</button>
                </form>
            </div>

            <div class="form-container">
                <h2>Create New Post</h2>
                <form action="/create-post" method="post">
                    @csrf
                    <input type="text" name="title" placeholder="Post Title" required>
                    <textarea name="body" placeholder="Post Content..." required></textarea>
                    <button>Save Post</button>
                </form>
            </div>
        @else
            <div class="form-container">
                <h2>Register</h2>
                <form action="/register" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button>Register</button>
                </form>
            </div>

            <div class="form-container">
                <h2>Login</h2>
                <form action="/login" method="post">
                    @csrf
                    <input type="text" name="loginname" placeholder="Username" required>
                    <input type="password" name="loginpassword" placeholder="Password" required>
                    <button>Login</button>
                </form>
            </div>
        @endauth
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modern Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #f7f8fa;
            --primary-color: #4a90e2;
            --secondary-color: #ffffff;
            --text-color: #333;
            --border-color: #ddd;
            --input-bg: #fefefe;
            --button-hover: #357abd;
        }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            background-color: var(--secondary-color);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: var(--text-color);
            font-size: 24px;
            margin-bottom: 15px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 12px; /* Reduced gap for compact layout */
        }

        input, textarea {
            width: 100%;
            padding: 8px; /* Smaller padding for compact fields */
            font-size: 14px; /* Slightly smaller font size */
            border: 1px solid var(--border-color);
            border-radius: 5px;
            background-color: var(--input-bg);
            transition: border-color 0.2s ease;
        }

        input:focus, textarea:focus {
            border-color: var(--primary-color);
            outline: none;
        }

        textarea {
            resize: none; /* Disable resizing for a cleaner UI */
        }

        button {
            padding: 10px; /* Smaller button size */
            font-size: 14px;
            background-color: var(--primary-color);
            color: var(--secondary-color);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: var(--button-hover);
        }

        .auth-container p {
            text-align: center;
            color: var(--text-color);
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        @auth
            <div class="auth-container">
                <p>Welcome back! You are logged in.</p>

                <form action="/logout" method="post">
                    @csrf
                    <button>Logout</button>
                </form>
            </div>

            <div class="form-container">
                <h2>Create a New Post</h2>
                <form action="/create-post" method="post">
                    @csrf
                    <input type="text" name="title" placeholder="Post Title" required>
                    <textarea name="body" placeholder="Write your content here..." rows="4" required></textarea>
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

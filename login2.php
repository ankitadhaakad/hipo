<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-color: antiquewhite;
        margin: 0%;
        padding: 20px;
    }
    .container{
        max-width: 400px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(red, green, blue, alpha);
    }
    h2{
        text-align: center;
    }
    label{
        display: block;
    }
    input{
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    button{
        width: 100%;
        padding: 10px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;

    }
    button:hover{
        background-color: #218838;
    }
    p{
        text-align: center;
    }
</style>
<body>
    <div class="container">
        <h2>Login</h2>
            <form id="LoginForm" onsubmit="returnvalidLogin()">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account?<a href="registration.html">Register here</a></p>
    </div>
    <script>
        function validateLogin(){
            return type;
        }
    </script>
    
</body>
</html>
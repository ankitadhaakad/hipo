<?php
    $conn = new mysqli("localhost:4307","root","","project");
    if($conn){
        echo "connected";
    }

    if(isset($_REQUEST['btn_sub']))
    {
        $username=$_REQUEST['username'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];

        $insert ="INSERT into user_data values('$username','$email','$password')";
        mysqli_query($conn,$insert);
        echo "data inserted successfully";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form id="registrationForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit" name="btn_sub">Register</button>
        </form>
        <p>Already have an account? <a href="login.html">Login here</a></p>
    </div>
    <div id="forgot-password-form" class="form-container" style="display: none;">
        <h2>Forgot Password</h2>
        <form>
            <input type="email" id="Forgot-email" placeholder="Enter your email" required>
                <button type="submit">Send Reset Link</button>
                <p><a href="#" onclick="showLogin()">Back to Login</a></p>
        </form>
    </div>
    <div id="change-password-form" class="form-container" style="display: none;">
        <h2>Change Password</h2>
        <form>
            <input type="password" id="current-password" placeholder="Current Password" required>
            <input type="password" id="new-password" placeholder="New Password" required>
            <input type="password" id="confirm-new-password" placeholder="Confirm New Password" required>
            <button type="submit">Change Password</button>
        </form>
    </div>
</div>
    
</body>
</html>
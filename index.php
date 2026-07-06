<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full stack login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-box active" id="login-form">
            <form action="">
                <h2>Login</h2>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Passwoord" required>
                <button type="submit" name="login">Login</button>
                <p>Don't have an account? <a href="#" onclick="showform('register-form')">Register</a></p>
            </form>
        </div>

        <div class="form-box" id="register-form">
            <form action="">
                <h2>Register</h2>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Passwoord" required>
                <select name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>

                <button type="submit" name="login">Register</button>
                <p>Already have an account? <a href="#" onclick="showform('login-form')">Login</a></p>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
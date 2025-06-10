<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $success = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register | Interiors</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f1ee url('https://images.unsplash.com/photo-1618220179428-22790b461013?auto=format&fit=crop&w=1500&q=80') no-repeat center center;
            background-size: cover;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 80px auto;
        }
        h3 {
            color: #5b4c40;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3 class="text-center mb-4">Create Your Account</h3>
        <?php if (isset($success) && $success): ?>
            <div class="alert alert-success">Registered successfully. <a href='login.php'>Login here</a></div>
        <?php elseif (isset($success)): ?>
            <div class="alert alert-danger">Registration failed. Please try again.</div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required />
            </div>
            <button type="submit" class="btn btn-dark w-100">Register</button>
            <p class="mt-3 text-center">Already a member? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>

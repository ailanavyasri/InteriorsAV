<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 text-center">
    <div class="card shadow-sm mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <h3>Welcome, <?php echo $_SESSION["username"]; ?>!</h3>
            <p>You are now logged in.</p>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>
</body>
</html>

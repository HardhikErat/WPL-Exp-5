<?php
function sanitize($data) {
    return htmlspecialchars(trim($data));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "Not Selected";

    if (empty($name) || empty($email) || empty($password)) {
        die("All fields are required!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format!");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>POST Output</title>
<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #1e3c72, #2a5298);
    }

    .card {
        width: 400px;
        margin: 80px auto;
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    h2 {
        text-align: center;
        color: #2a5298;
    }

    p {
        font-size: 16px;
        margin: 10px 0;
    }

    .label {
        font-weight: bold;
    }

    a {
        display: block;
        margin-top: 15px;
        text-align: center;
        text-decoration: none;
        color: white;
        background: #2a5298;
        padding: 8px;
        border-radius: 6px;
    }
</style>
</head>

<body>
<div class="card">
    <h2>POST Method Output</h2>
    <p><span class="label">Name:</span> <?php echo $name; ?></p>
    <p><span class="label">Email:</span> <?php echo $email; ?></p>
    <p><span class="label">Password:</span> <?php echo $password; ?></p>
    <p><span class="label">Gender:</span> <?php echo $gender; ?></p>

    <a href="registration.html">⬅ Back</a>
</div>
</body>
</html>
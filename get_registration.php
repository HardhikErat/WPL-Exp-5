<?php
function sanitize($data) {
    return htmlspecialchars(trim($data));
}

$name = sanitize($_GET['name']);
$email = sanitize($_GET['email']);
$password = sanitize($_GET['password']);

if (empty($name) || empty($email) || empty($password)) {
    die("All fields are required!");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format!");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>GET Output</title>
<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #11998e, #38ef7d);
    }

    .card {
        width: 400px;
        margin: 80px auto;
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    h2 { text-align: center; }

    p { margin: 10px 0; }

    .label { font-weight: bold; }

    a {
        display: block;
        margin-top: 15px;
        text-align: center;
        background: #11998e;
        color: white;
        padding: 8px;
        border-radius: 6px;
        text-decoration: none;
    }
</style>
</head>

<body>
<div class="card">
    <h2>GET Method Output</h2>
    <p><span class="label">Name:</span> <?php echo $name; ?></p>
    <p><span class="label">Email:</span> <?php echo $email; ?></p>
    <p><span class="label">Password:</span> <?php echo $password; ?></p>

    <a href="registration.html">⬅ Back</a>
</div>
</body>
</html>
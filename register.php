<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Hash the password (good practice)
  $hashed = password_hash($password, PASSWORD_DEFAULT);

  // Insert new user
  $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $username, $hashed);

  if ($stmt->execute()) {
    // ✅ Redirect to gate.php (login page) automatically!
    header("Location: gitae.php");
    exit();
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Register New User</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at center, #0a0a1a 0%, #000000 100%);
      color: #e0e0f7;
      font-family: 'Cinzel Decorative', serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      overflow: hidden;
      position: relative;
    }

    body::before {
      content: "";
      position: absolute;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.02) 1px, transparent 1px);
      background-size: 50px 50px;
      animation: drift 80s linear infinite;
    }

    @keyframes drift {
      from { transform: translate(0,0); }
      to { transform: translate(-50px,-50px); }
    }

    .card {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 0 60px rgba(180, 180, 255, 0.1);
      max-width: 500px;
      width: 90%;
      position: relative;
    }

    h2 {
      text-align: center;
      font-weight: 700;
      letter-spacing: 2px;
      color: #e6e6fa;
      text-shadow: 0 0 10px rgba(200, 200, 255, 0.3);
      margin-bottom: 30px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    input[type="text"],
    input[type="password"] {
      background: rgba(255, 255, 255, 0.05);
      border: none;
      border-bottom: 2px solid #e6e6fa;
      color: #e6e6fa;
      padding: 12px;
      font-size: 16px;
      font-family: 'Cinzel Decorative', serif;
      transition: all 0.4s ease;
      width: 100%;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      outline: none;
      border-bottom: 2px solid #c0c0ff;
      background: rgba(255, 255, 255, 0.1);
    }

    button {
      background: rgba(255, 255, 255, 0.05);
      border: 2px solid #e6e6fa;
      color: #e6e6fa;
      padding: 12px 24px;
      font-family: 'Cinzel Decorative', serif;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.4s ease;
      letter-spacing: 1px;
      box-shadow: 0 0 10px rgba(180, 180, 255, 0.1);
    }

    button:hover {
      background: rgba(168, 85, 247, 0.4);
      box-shadow: 0 0 20px rgba(200, 200, 255, 0.2);
      border-color: #c0c0ff;
      color: #ffffff;
    }

    nav p {
      text-align: center;
      margin-top: 20px;
    }

    nav a {
      color: #dcdcf7;
      text-decoration: none;
      font-size: 14px;
      letter-spacing: 1px;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: rgba(168, 85, 247, 0.8);
      text-shadow: 0 0 5px rgba(200, 200, 255, 0.5);
    }

  </style>
</head>
<body>
  <div class="card">
    <h2>👤 Create New User</h2>
    <form method="POST">
      <label>Username: <input type="text" name="username" required></label>
      <label>Password: <input type="password" name="password" required></label>
      <button type="submit" onclick="location.href='login.php'">Register</button>
    </form>
    <nav>
      <p><a href="index.php">← Back to Gate</a></p>
    </nav>
  </div>
</body>
</html>

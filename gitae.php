<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
      $_SESSION["username"] = $username;
      header("Location: anthe.php");
      exit();
    } else {
      echo "Invalid password!";
    }
  } else {
    echo "No user found!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<style>
    body {
    background-color: #0b0b1f; /* Deep dark background */
    color: #f5f5f5; /* Soft light text */
    font-family: 'Cinzel Decorative', serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.card {
    background: rgba(20, 20, 40, 0.85);
    border: 2px solid #f5f5f5;
    border-radius: 12px;
    padding: 40px;
    box-shadow: 0 0 30px rgba(255, 255, 200, 0.1);
    max-width: 400px;
    width: 100%;
}

.container h2 {
    text-align: center;
    font-weight: 700;
    letter-spacing: 2px;
    color: #f5f5f5;
    text-shadow: 0 0 5px #fff8dc;
    margin-bottom: 30px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

input[type="text"],
input[type="password"] {
    background: rgba(255, 255, 255, 0.1);
    border: none;
    border-bottom: 2px solid #f5f5f5;
    color: #f5f5f5;
    padding: 10px;
    font-size: 16px;
    font-family: 'Cinzel Decorative', serif;
    transition: border 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
    outline: none;
    border-bottom: 2px solid #fff8dc;
}

.enter-button {
    text-align: center;
    margin-top: 20px;
}

button {
    background: none;
    border: 2px solid #f5f5f5;
    color: #f5f5f5;
    padding: 10px 20px;
    font-family: 'Cinzel Decorative', serif;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    letter-spacing: 1px;
}

button:hover {
    background: #60a5fa;
    color: #0b0b1f;
}
nav a {
  color: #dcdcf7; /* Same soft neon */
  text-decoration: none; /* Removes underline */
  font-size: 14px;
  letter-spacing: 1px;
  transition: color 0.3s ease;
}

nav a:hover {
  color: rgba(255, 255, 255, 0.8);
  text-shadow: 0 0 5px rgba(200, 200, 255, 0.5);
  text-decoration: none; /* Also no underline on hover */
}
nav a:active {
            background-color: #fff;
        }
.create-user {
  cursor: pointer;
  text-decoration: none; /* no underline */
  color: inherit; /* same text color as parent */
}

.create-user:hover {
  text-shadow: 0 0 5px rgba(200, 200, 255, 0.5); /* optional hover effect */
}
</style>
<body>
    <div class="card">
        <div class="container">
	    <h2>LOGIN</h2>
            <form method="POST">
                Username: <input type="text" name="username" required /><br>
                Password: <input type="password" name="password" required /><br>
                    <div class="enter-button">
                        <button onclick="location.href='anthe.php'"><b>SUBMIT</b></button>
                        <button onclick="location.href='index.php'"><b>BACK</b></button>
                        <nav>
                            <p>
                                <span class="create-user" onclick="window.location.href='register.php'">
                                Create New User
                                </span>
                            </p>
                        </nav>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>
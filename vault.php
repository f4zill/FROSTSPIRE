<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>The Vault</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<style>
  body {
    background: radial-gradient(circle, #3b2f2f 0%, #1e1a1a 100%);
    color: #e0d3b8; /* aged parchment */
    font-family: 'Cinzel Decorative', serif;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    min-height: 100vh;
    margin: 0;
    overflow: hidden;
    position: relative;
  }

  .container {
    max-width: 1100px;
    padding: 2rem;
    background: rgba(40, 30, 20, 0.8);
    border: 3px solid #7a5c3e;
    box-shadow: 0 0 60px rgba(0, 0, 0, 0.6);
    border-radius: 20px;
  }

  .vault-title {
    font-size: 2.8rem;
    letter-spacing: 0.3rem;
    margin: 0;
    color: #d4af37; /* gold */
    text-shadow: 0 0 15px #b8860b, 0 0 30px #d4af37;
  }

  .vault-desc {
    margin-top: 0.5rem;
    max-width: 750px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
    font-size: 1rem;
    color: #f2e8c9;
  }

  .vault-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 3rem;
    margin-top: 3rem;
    flex-wrap: wrap;
  }

  .boxes {
    display: grid;
    grid-template-columns: repeat(2, 150px);
    grid-gap: 2rem;
  }

  .box a, .box p {
    display: block;
    background: #5c4033;
    border: 2px solid #a18867;
    padding: 20px 30px;
    border-radius: 10px;
    color: #f5f5dc;
    text-decoration: none;
    box-shadow: inset 0 0 10px #000, 0 0 15px rgba(0,0,0,0.4);
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .box a:hover, .box p:hover {
    background: #7b5e43;
    box-shadow: inset 0 0 15px #000, 0 0 20px rgba(255, 215, 0, 0.3);
  }

  .scroll {
    background: #f5f5dc;
    color: #3b2f2f;
    padding: 2rem;
    width: 250px;
    border-radius: 10px;
    text-align: left;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.05);
    position: relative;
    border: 2px solid #7a5c3e;
  }

  .scroll::after {
    content: "";
    position: absolute;
    bottom: -15px;
    left: 0;
    right: 0;
    height: 15px;
    background: #f5f5dc;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  .scroll h2 {
    margin-top: 0;
    margin-bottom: 1rem;
    font-size: 1.4rem;
  }

  .guardians-list {
    list-style: none;
    padding: 0;
  }

  .guardians-list li {
    margin-bottom: 1rem;
    font-size: 0.95rem;
  }

  body::before, body::after {
    content: '🔒';
    position: absolute;
    font-size: 4rem;
    color: #d4af37;
    opacity: 0.2;
  }

  body::before {
    top: 0;
    left: 0;
  }

  body::after {
    bottom: 0;
    right: 0;
  }

  .list {
    margin-top: 30px;
    width: 100%;
  }

  .list-item {
    background: rgba(255, 255, 255, 0.05);
    padding: 10px 20px;
    margin: 5px auto;
    border-radius: 4px;
    max-width: 400px;
    text-align: left;
    border-left: 4px solid #d4af37;
  }

  .back-button {
    margin-top: 2.5rem;
  }

  .back-button button {
    background: transparent;
    border: 2px solid #d4af37;
    color: #d4af37;
    padding: 0.6rem 1.5rem;
    font-size: 1rem;
    font-family: 'Cinzel Decorative', serif;
    cursor: pointer;
    border-radius: 999px;
    transition: background 0.3s, color 0.3s;
  }

  .back-button button:hover {
    background: #d4af37;
    color: #3b2f2f;
  }

  @media (max-width: 900px) {
    .vault-content {
      flex-direction: column;
      align-items: center;
    }

    .boxes {
      grid-template-columns: repeat(2, 120px);
    }

    .scroll {
      margin-top: 2rem;
    }
  }
</style>
<body>
  <div class="container">
    <header class="header">
      <h1 class="vault-title">T H E &nbsp; <span>VAULT</span></h1>
      <p class="vault-desc">
        Within these timbered and cobblestone walls, the Archivist seals all that time would bury — 
        thoughts, drafts, echoes that drift no longer but rest in quiet shadows. 
        Tread softly — not every lock unseals.
      </p>
    </header>

    <div class="vault-content">
      <div class="boxes">
        <div class="box">
          <a href="vault.php?view=users">Users</a>
        </div>
        <div class="box">
          <a href="vault.php?view=posts">Posts</a>
        </div>
        <div class="box">
          <p>Admin</p>
        </div>
        <div class="box">
          <p>Guardians</p>
        </div>
      </div>
      <div class="scroll">
        <h2>Guardians</h2>
        <ul class="guardians-list">
          <li>🗝️ The Gatekeeper — Guardian of the Antechamber</li>
          <li>🕯️ The Whisperer — Guardian of Echoes</li>
          <li>🔒 The Archivist — Guardian of the Vault</li>
          <li>📯 The Herald — Guardian of the Gate</li>
        </ul>
      </div>
    </div>

    <div class="list">
      <?php
      if (isset($_GET['view']) && $_GET['view'] === 'users') {
        $result = $conn->query("SELECT id, username FROM users");
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<div class='list-item'>ID: " . $row['id'] . " | " . htmlspecialchars($row['username']) . "</div>";
          }
        } else {
          echo "<p>No users found.</p>";
        }
      } elseif (isset($_GET['view']) && $_GET['view'] === 'posts') {
        $result = $conn->query("SELECT id, title FROM posts");
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<div class='list-item'>ID: " . $row['id'] . " | " . htmlspecialchars($row['title']) . "</div>";
          }
        } else {
          echo "<p>No posts found.</p>";
        }
      }
      ?>
    </div>

    <div class="back-button">
      <button onclick="location.href='anthe.php'">← Return to Antechamber</button>
    </div>
  </div>
</body>
</html>

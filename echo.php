<?php
include 'config.php';
$result = $conn->query("SELECT * FROM posts ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>The Echos</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at top, #0a0814 40%, #070512 100%);
      color: #f0e6ff;
      font-family: 'Cinzel Decorative', serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      min-height: 100vh;
      margin: 0;
      overflow-x: hidden;
      position: relative;
    }

    body::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(168, 85, 247, 0.03) 1px, transparent 1px);
      background-size: 80px 80px;
      animation: mist 80s linear infinite;
      z-index: 0;
    }

    @keyframes mist {
      from { transform: translate(0, 0); }
      to { transform: translate(-80px, -80px); }
    }

    body::after {
      content: '🕯️';
      position: fixed;
      top: 30px;
      left: 30px;
      font-size: 5rem;
      color: #a855f7;
      text-shadow: 0 0 20px #a855f7, 0 0 40px #9333ea;
      animation: flicker 3s infinite;
    }

    @keyframes flicker {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.8; }
    }

    .container {
      max-width: 1100px;
      padding: 2rem;
      z-index: 1;
    }

    .echos-title {
      font-size: 3rem;
      letter-spacing: 0.4rem;
      margin: 0;
      text-shadow: 0 0 20px #c084fc, 0 0 40px #a855f7;
    }

    .echos-title span {
      color: #c084fc;
    }

    .echos-desc {
      margin: 1rem auto 2rem auto;
      max-width: 700px;
      line-height: 1.6;
      font-size: 1.1rem;
      color: #f0e6ff;
    }

    .grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      margin-top: 2rem;
      position: relative;
    }

    .echo-card {
      background: linear-gradient(180deg, #a855f7 30%, #6b21a8 100%);
      border-radius: 15px;
      padding: 1rem;
      width: 220px;
      box-shadow: 0 0 15px rgba(168, 85, 247, 0.4);
      transform: rotate(calc(-5deg + 10deg * random()));
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      z-index: 2;
    }

    .echo-card:nth-child(even) {
      transform: rotate(-3deg);
    }

    .echo-card:nth-child(odd) {
      transform: rotate(3deg);
    }

    .echo-card:hover {
      transform: scale(1.05) rotate(0deg);
      box-shadow: 0 0 30px rgba(168, 85, 247, 0.7);
      z-index: 3;
    }

    .echo-card h3 {
      margin: 0 0 0.5rem 0;
      font-size: 1.2rem;
      text-shadow: 0 0 5px #f0e6ff;
    }

    .echo-card p {
      font-size: 0.9rem;
      line-height: 1.4;
    }

    .see-more {
      margin-top: auto;
      background: rgba(240, 230, 255, 0.1);
      border: 1px solid #f0e6ff;
      color: #f0e6ff;
      padding: 0.4rem 0.8rem;
      cursor: pointer;
      font-family: 'Cinzel Decorative', serif;
      transition: background 0.3s, box-shadow 0.3s;
    }

    .see-more:hover {
      background: #a855f7;
      box-shadow: 0 0 10px #f0e6ff;
      color: #fff;
    }

    .echo-card.add-post {
      background: #9333ea;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 0 20px rgba(147, 51, 234, 0.6);
    }

    .add-post-btn {
      background: #0a0814;
      color: #f0e6ff;
      border: 1px solid #f0e6ff;
      padding: 0.8rem 1.5rem;
      border-radius: 8px;
      cursor: pointer;
      font-family: 'Cinzel Decorative', serif;
      transition: background 0.3s, box-shadow 0.3s;
    }

    .add-post-btn:hover {
      background: #3b0764;
      box-shadow: 0 0 10px #a855f7;
    }

    .back-button {
      margin: 3rem 0 2rem;
      z-index: 2;
    }

    .back-button button {
      background: transparent;
      border: 2px solid #a855f7;
      color: #a855f7;
      padding: 0.6rem 1.5rem;
      font-size: 1rem;
      font-family: 'Cinzel Decorative', serif;
      cursor: pointer;
      border-radius: 999px;
      transition: background 0.3s, color 0.3s;
    }

    .back-button button:hover {
      background: #a855f7;
      color: #0a0814;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="echos-title"><span>T H E E C H O S</span></h1>
    <p class="echos-desc">Here the Whisperer gathers drifting thoughts — let the frost keep them echoing forever.</p>

    <div class="grid">
      <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
          <div class="echo-card">
            <h3><?= htmlspecialchars($row['title']) ?></h3>
            <p><?= nl2br(htmlspecialchars(substr($row['content'], 0, 80))) ?>...</p>
            <button class="see-more">See More</button>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No echoes yet... whisper your first thought.</p>
      <?php endif; ?>

      <div class="echo-card add-post">
        <button class="add-post-btn" onclick="location.href='create.php'">Add Post</button>
      </div>
    </div>
  </div>

  <div class="back-button">
    <button onclick="location.href='anthe.php'">← Return to Antechamber</button>
  </div>
</body>
</html>

<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Frostspire</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<style>
  /* Frostspire Base Styles */
body {
  background-color: #0b0f2b; /* deep frost midnight */
  color: #f0f4ff;
  font-family: 'Cinzel Decorative', serif;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
  position: relative;
  text-align: center;
  overflow: hidden;
}

.container {
  max-width: 1200px;
  padding: 2rem;
}

/* Header */
.header {
  display: flex;
  justify-content: center;
  align-items: baseline;
  gap: 1rem;
  font-size: 2.5rem;
}

.title {
    color: #60a5fa;
  text-shadow: 0 0 20px #3b82f6, 0 0 40px #60a5fa;
}


.subtitle {
  color: #60a5fa;
  text-shadow: 0 0 20px #3b82f6, 0 0 40px #60a5fa;
}

/* Main Content: Rules + Description side by side */
.main-content {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: 4rem;
  margin-top: 2rem;
  flex-wrap: wrap; /* mobile responsive */
}

/* Rules Card */
.rules-card {
  background: #f9f5e7;
  color: #1f2937;
  padding: 2rem;
  width: 320px;
  border-radius: 12px;
  text-align: left;
  box-shadow: 0 0 15px rgba(255,255,255,0.1);
}

.rules-title {
  font-size: 1.4rem;
  margin-bottom: 1rem;
}

.rules-list {
  list-style: none;
  padding: 0;
}

.rules-list li {
  margin-bottom: 1rem;
}

/* Frosty Description */
.description {
  max-width: 500px;
  font-size: 1rem;
  line-height: 1.6;
  text-align: left;
  color: #e0f2fe;
}

/* Enter Button */
.enter-button {
  margin-top: 3rem;
}

.enter-button button {
  background: #38bdf8;
  border: none;
  color: #0f172a;
  padding: 0.8rem 2rem;
  font-size: 1rem;
  border-radius: 999px;
  cursor: pointer;
  transition: background 0.3s, transform 0.3s;
  font-family: 'Cinzel Decorative', serif;
}

.enter-button button:hover {
  background: #0ea5e9;
  transform: translateY(-3px);
}

/* Frosty Snowflakes in corners */
body::before,
body::after {
  content: '❄️';
  position: absolute;
  font-size: 5rem;
  color: #93c5fd;
}

body::before {
  top: 0;
  left: 0;
}

body::after {
  top: 0;
  right: 0;
}
nav a {
  color: #dcdcf7; /* Same neon shade */
  text-decoration: none;
  font-size: 14px;
  letter-spacing: 1px;
  transition: color 0.3s ease;
}

nav a:hover {
  color: rgba(168, 85, 247, 0.8);
  text-shadow: 0 0 5px rgba(200, 200, 255, 0.5);
  text-decoration: none;
}


</style>
<body>
  <div class="container">
    <header class="header">
      <h1 class="title">FROST'S</h1>
      <h1 class="subtitle">FROSTSPIRE</h1>
    </header>

    <div class="main-content">
      <div class="rules-card">
        <h2 class="rules-title">THE QUIET RULES</h2>
        <ul class="rules-list">
          <li>❄️ Take your time. There’s no rush inside these walls.</li>
          <li>🕯️ Respect ideas — yours, mine, and the silence that holds them.</li>
          <li>🔍 Bring curiosity. Leave noise at the door.</li>
          <li>🧹 No clutter, no spam, no haste.</li>
        </ul>
      </div>

      <div class="description">
        <p>
          A quiet spire standing alone in the frost. A place for thoughts to echo, drift, and settle in their own time.
          This space was built slowly, piece by piece. It’s part blog, part vault, part quiet retreat — where words are carved carefully and ideas are left out in the cold, waiting for anyone curious enough to find them.
        </p>
      </div>
    </div>

    <div class="enter-button">
      <button><b><a href="gitae.php">Enter</a></b></button>
    </div>
  </div>
</body>
</html>

<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>The Spire</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="spire.css">
</head>
<style>
  body {
  background: #000; /* pure void */
  color: #e11d48;   /* blood red */
  font-family: 'Cinzel Decorative', serif;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 100vh;
  margin: 0;
  overflow-x: hidden;
  padding: 0 1rem;
}

.container {
  max-width: 800px;
  padding: 2rem;
  position: relative;
}

.spire-title {
  font-size: 2.8rem;
  letter-spacing: 0.3rem;
  margin: 0;
  color: #e11d48;
  text-shadow: 0 0 20px #b91c1c, 0 0 40px #991b1b;
}

.spire-intro {
  margin: 1rem auto 2rem;
  line-height: 1.5;
  font-size: 1rem;
  max-width: 600px;
  border-bottom: 1px solid #991b1b;
  padding-bottom: 1rem;
}

.spire-line {
  position: absolute;
  top: 150px;
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  height: 400px;
  background: linear-gradient(to bottom, #991b1b, transparent);
}

.spire-signals h2 {
  font-size: 1.5rem;
  margin-bottom: 1rem;
  color: #f43f5e;
}

.signal-list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.signal-item {
  background: #111; /* dark stone slab */
  border: 1px solid #991b1b;
  padding: 1.2rem 1.5rem;
  border-radius: 10px;
  box-shadow: 0 0 10px #991b1b;
  font-size: 1rem;
}

.spire-call {
  margin-top: 3rem;
}

.spire-call h2 {
  font-size: 1.3rem;
  margin-bottom: 0.5rem;
}

.spire-call p {
  font-size: 0.95rem;
  margin-bottom: 1rem;
}

.spire-button {
  background: #111;
  border: 2px solid #e11d48;
  color: #e11d48;
  padding: 0.7rem 1.7rem;
  font-size: 1rem;
  cursor: pointer;
  border-radius: 999px;
  font-family: 'Cinzel Decorative', serif;
  box-shadow: 0 0 10px #991b1b;
  transition: background 0.3s, color 0.3s;
}

.spire-button:hover {
  background: #e11d48;
  color: #000;
}

.back-button {
  margin-top: 3rem;
}

.back-button button {
  background: #111;
  border: 2px solid #e11d48;
  color: #e11d48;
  padding: 0.6rem 1.5rem;
  font-size: 1rem;
  font-family: 'Cinzel Decorative', serif;
  cursor: pointer;
  border-radius: 999px;
  box-shadow: 0 0 10px #991b1b;
  transition: background 0.3s, color 0.3s;
}

.back-button button:hover {
  background: #e11d48;
  color: #000;
}
body::before,
body::after {
  content: '🧨';
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
</style>
<body>
  <div class="container">
    <h1 class="spire-title">T H E &nbsp; S P I R E</h1>
    <p class="spire-intro">
      The Spire stands as a watchtower above the frost.  
      New fires are lit here first — signals for what waits below.
    </p>

    <div class="spire-line"></div>

    <div class="spire-signals">
      <h2>Signal Fires</h2>
      <div class="signal-list">
        <div class="signal-item">🔥 A hidden passage will open in The Vault.</div>
        <div class="signal-item">🕯️ New Echoes will drift in next moon cycle.</div>
        <div class="signal-item">📜 A secret scroll for trusted Guardians.</div>
        <div class="signal-item">🌌 The Frostkeeper's Chronicle — first pages soon.</div>
      </div>
    </div>

    <div class="spire-call">
      <h2>Keep Watch</h2>
      <p>If you wish to be called when the next flame is lit — leave your mark below.</p>
      <button class="spire-button">Join the Watch</button>
    </div>

    <div class="back-button">
      <button onclick="location.href='anthe.php'">← Return to Antechamber</button>
    </div>
  </div>
</body>
</html>

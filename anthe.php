<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>The Antechamber</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at center, #0f0a1a 0%, #000000 100%);
      color: #fbbf24;
      font-family: 'Cinzel Decorative', serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      overflow: hidden;
    }

    h1 {
      font-size: 3rem;
      letter-spacing: 0.3rem;
      margin-bottom: 50px;
      text-shadow: 0 0 10px #f59e0b, 0 0 30px #fbbf24;
    }

    .spire {
      margin-bottom: 80px;
    }

    .spire button {
      background: linear-gradient(145deg, rgba(251,191,36,0.2), rgba(251,191,36,0.05));
      border: 3px solid #fbbf24;
      color: #fbbf24;
      padding: 20px 60px;
      font-size: 1.5rem;
      cursor: pointer;
      border-radius: 999px;
      box-shadow: 0 0 40px rgba(251,191,36,0.1);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .spire button::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(251,191,36,0.2) 0%, transparent 70%);
      animation: pulse 4s infinite;
      z-index: 0;
    }

    .spire button span {
      position: relative;
      z-index: 1;
    }

    .spire button:hover {
      background: rgba(251,191,36,0.2);
      box-shadow: 0 0 60px rgba(251,191,36,0.4);
      transform: scale(1.05);
    }

    @keyframes pulse {
      0% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.2); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }

    .chamber-buttons {
      display: flex;
      gap: 40px;
    }

    .chamber-buttons button {
      background: linear-gradient(145deg, rgba(251,191,36,0.15), rgba(251,191,36,0.05));
      border: 2px solid #fbbf24;
      color: #fbbf24;
      padding: 15px 40px;
      font-size: 1.1rem;
      cursor: pointer;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(251,191,36,0.1);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .chamber-buttons button::after {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(251,191,36,0.1);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .chamber-buttons button:hover::after {
      opacity: 1;
    }

    .chamber-buttons button:hover {
      box-shadow: 0 12px 30px rgba(251,191,36,0.2);
      transform: translateY(-3px);
    }
    body::before,
body::after {
  content: '🕯️';
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
.logout-button {
  margin-top: 2rem; /* Space from second layer */
  text-align: center;
}

.logout-button button {
  background: transparent;
  border: 2px solid #c084fc; /* match your vibe */
  color: #c084fc;
  padding: 0.6rem 1.5rem;
  font-family: 'Cinzel Decorative', serif;
  font-size: 1rem;
  border-radius: 999px;
  cursor: pointer;
  transition: background 0.3s, color 0.3s;
}

.logout-button button:hover {
  background: #c084fc;
  color: #0f0a1a; /* your obsidian background */
}


  </style>
</head>
<body>
  <h1>The Antechamber</h1>
      <p>
     Here stands the threshold to Frost's Frostspire. Four doors wait — each watched by its keeper. Take your time. Choose your path. Step where you will.
  </p>
  <div class="spire">
    <button onclick="location.href='spire.php'"><span>Spire</span></button>
  </div>
  <div class="chamber-buttons">
    <button onclick="location.href='vault.php'">Vault</button>
    <button onclick="location.href='echo.php'">Echo</button>
    <button onclick="location.href='index.php'">Gate</button>
  </div>
  <div class="logout-button">
    <form action="logout.php" method="post">
      <button type="submit">Log Out</button>
    </form>
  </div>

</body>
</html>

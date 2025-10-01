<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Surprise Card</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #ffafbd, #ffc3a0);
      font-family: 'Comic Sans MS', cursive, sans-serif;
      overflow: hidden;
    }
    .card {
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      text-align: center;
      transform: scale(0);
      animation: popIn 1s forwards;
    }
    @keyframes popIn {
      to { transform: scale(1); }
    }
    h1 {
      color: #ff5e78;
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    p {
      font-size: 1.2rem;
      color: #444;
    }
    .hearts {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      overflow: hidden;
      pointer-events: none;
    }
    .heart {
      position: absolute;
      bottom: -20px;
      color: #ff5e78;
      font-size: 24px;
      animation: floatUp 5s linear infinite;
    }
    @keyframes floatUp {
      0% { transform: translateY(0); opacity: 1; }
      100% { transform: translateY(-100vh); opacity: 0; }
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Happy Surprise 💖</h1>
    <p>Dear Bestie,<br>
    You’re the most amazing person in my life.<br>
    This little card is just for you! 🌸</p>
  </div>
  <div class="hearts"></div>

  <script>
    const heartsContainer = document.querySelector('.hearts');
    function createHeart() {
      const heart = document.createElement('div');
      heart.classList.add('heart');
      heart.innerHTML = '❤️';
      heart.style.left = Math.random() * 100 + 'vw';
      heart.style.animationDuration = (3 + Math.random() * 2) + 's';
      heartsContainer.appendChild(heart);
      setTimeout(() => heart.remove(), 5000);
    }
    setInterval(createHeart, 300);
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Style Surprise</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #f6d365, #fda085);
      font-family: 'Georgia', serif;
      overflow: hidden;
    }

    .book {
      width: 600px;
      height: 400px;
      perspective: 2000px;
      cursor: pointer;
    }

    .cover {
      width: 100%;
      height: 100%;
      background: #ff5e78;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2rem;
      font-weight: bold;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
      transform-origin: left;
      transition: transform 1s ease;
      position: absolute;
    }

    .open .cover {
      transform: rotateY(-180deg);
    }

    .pages {
      width: 100%;
      height: 100%;
      display: flex;
      background: white;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      overflow: hidden;
      position: relative;
      z-index: -1;
    }

    .left, .right {
      flex: 1;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .left {
      background: #fafafa;
    }

    .left img {
      max-width: 100%;
      max-height: 100%;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .right {
      flex-direction: column;
      text-align: center;
    }

    .right h1 {
      color: #ff5e78;
      margin-bottom: 15px;
    }

    .right p {
      font-size: 1.2rem;
      color: #444;
    }
  </style>
</head>
<body>
  <div class="book" id="book">
    <div class="cover">💝 Tap to Open 💝</div>
    <div class="pages">
      <div class="left">
        <img src="https://picsum.photos/250/350" alt="Bestie Picture">
      </div>
      <div class="right">
        <h1>To My Bestie 💖</h1>
        <p>You are my sunshine, my laughter, my safe space.<br>
        I’m so lucky to have you in my life 🌸</p>
      </div>
    </div>
  </div>

  <script>
    const book = document.getElementById('book');
    book.addEventListener('click', () => {
      book.classList.toggle('open');
    });
  </script>
</body>
</html>

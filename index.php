<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric</title>
    <!-- Menghubungkan ke Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black; /* Latar belakang hitam */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            font-family: 'Courier New', Courier, monospace; /* Font programmer */
            color: white; /* Warna teks putih */
        }

        img {
            max-width: 50%;
            height: auto;
        }

        .text {
            font-size: 20px;
            margin-top: 20px;
            text-align: center;
        }

        .telegram-button {
            margin-top: 30px;
            background-color: #0088cc; /* Warna biru Telegram */
            padding: 15px 30px;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            font-size: 18px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .telegram-button:hover {
            background-color: #0077b3; /* Warna biru lebih gelap saat hover */
        }

        .telegram-button i {
            margin-right: 10px;
            font-size: 24px;
        }

        /* Sembunyikan pemutar audio */
        #background-music {
            display: none;
        }
    </style>
</head>
<body>
    <img src="https://i.ibb.co.com/DPJG0VWY/20250223-143327.png" alt="Logo">
    <div class="text">
       We are Numeric, We Are Numero Uno!!!
    </div>
<div class="text">
	Hacking is fun, Hacking is not crime
    <!-- Tombol Telegram -->
    <a href="https://t.me/GloryIsUno" class="telegram-button" target="_blank">
        <i class="fab fa-telegram-plane"></i> Join Telegram
    </a>

    <!-- Elemen Audio untuk Auto-Play -->
    <audio id="background-music" autoplay loop>
        <source src="https://cdn.prinsh.com/data-1/mp3/best-hacker-music.mp3" type="audio/mpeg">
        Browser Anda tidak mendukung pemutar audio.
    </audio>

    <script>
        // Script untuk memastikan audio diputar setelah interaksi pengguna
        document.addEventListener('click', function() {
            var audio = document.getElementById('background-music');
            audio.play();
        });
    </script>
</body>
</html>
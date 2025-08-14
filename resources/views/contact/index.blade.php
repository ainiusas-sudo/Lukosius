<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Susisiekite - Bernvakaris</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Playfair Display', serif;
            background: linear-gradient(135deg, #8B4513 0%, #DEB887 50%, #F4A460 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #FDF5E6;
            border-radius: 20px;
            border: 3px solid #DEB887;
            box-shadow: 0 10px 30px rgba(139, 69, 19, 0.3);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #DEB887 0%, #F4A460 100%);
            padding: 30px;
            text-align: center;
            border-bottom: 3px solid #8B4513;
        }

        .header h1 {
            color: #8B4513;
            font-size: 2.2em;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.2);
        }

        .content {
            padding: 40px;
        }

        .contact-section {
            margin-bottom: 40px;
        }

        .contact-section h2 {
            color: #8B4513;
            font-size: 1.6em;
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-card {
            background: #FFF8DC;
            border: 2px solid #DEB887;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.1);
        }

        .contact-card h3 {
            color: #8B4513;
            font-size: 1.2em;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-card p {
            color: #8B4513;
            font-size: 1em;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .contact-info {
            background: rgba(139, 69, 19, 0.1);
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
        }

        .contact-info p {
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 0.95em;
        }

        .back-button {
            display: inline-block;
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%);
            color: #FDF5E6;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 700;
            font-size: 1.1em;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
        }

        .back-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.4);
        }

        .emergency {
            background: #FFF8DC;
            border: 2px solid #DEB887;
        }

        .future-wife {
            background: #FFF8DC;
            border: 2px solid #DEB887;
            position: relative;
            overflow: hidden;
        }

        .blurred {
            filter: blur(8px);
            user-select: none;
            pointer-events: none;
            transition: filter 0.5s ease;
        }

        .timer {
            background: rgba(139, 69, 19, 0.1);
            color: #8B4513;
            padding: 8px 12px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-weight: 700;
            font-size: 1em;
            text-align: center;
        }

        .available {
            filter: none !important;
            user-select: auto !important;
            pointer-events: auto !important;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.8em;
            }
            
            .content {
                padding: 25px;
            }
            
            .contact-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📞 Susisiekite</h1>
        </div>
        
        <div class="content">
            <div class="contact-section">
                <h2>💍 Future Wife Kontaktai</h2>
                
                <div class="contact-card future-wife">
                    <div class="timer" id="wifeTimer">
                        🔒 Available on 17th
                    </div>
                    <h3>👰 Gintautė (Future Lukose or Lukosiene)</h3>
                    <p>Special contact - blocked till 17th of August!</p>
                    <div class="contact-info blurred" id="wifeContact">
                        <p>📞 +37063380714</p>
                        <p>📧 gintauterusteikaite11@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="contact-section">
                <h2>📱 Draugų Kontaktai</h2>

                <div class="contact-card">
                    <h3>👥 Chebra</h3>
                    <div class="contact-info">
                        <p>📞 +370 63383783 Ainius</p>
                        <p>📞 +370 67462267 Karlas</p>
                        <p>📞 +370 63383783 Driukas</p>
                        <p>📞 +370 63383783 Jonas</p>
                        <p>📞 +370 63383783 Arturka</p>

                    </div>
                </div>
            </div>

            <div class="contact-section">
                <h2>🏨 Naudingi Kontaktai</h2>
                
                <div class="contact-card emergency">
                    <h3>🆘 Emergency</h3>
                    <div class="contact-info">
                        <p>📞 112 (Emergency)</p>

                        <p>🌍 Visiškai nemokama</p>
                    </div>
                </div>

                <div class="contact-card">
                    <h3>🚕 Taxi</h3>
                    <p>Jei reikia grįžti namo</p>
                    <div class="contact-info">
                        <p>📞 +48 22 19626 (Warszawa Taxi)</p>
                        <p>📱 Uber app</p>
                    </div>
                </div>

                <div class="contact-card">
                    <h3>🏨 Viešbutis</h3>
                    <p>Jei pamiršote kur gyvenate</p>
                    <div class="contact-info">
                        <p>📍 Automat Paczkowy, Skaryszewska 4, 03-731, Warsaw, Masovian Voivodeship, Poland</p>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('dashboard') }}" class="back-button">← Grįžti į Pagrindinį</a>
            </div>
        </div>
    </div>

    <script>
        function updateWifeTimer() {
            const now = new Date();
            const targetDate = new Date(now.getFullYear(), now.getMonth(), 17, 0, 0, 0);
            
            // If we're past the 17th of this month, set target to next month's 17th
            if (now.getDate() > 17) {
                targetDate.setMonth(targetDate.getMonth() + 1);
            }
            
            const timeLeft = targetDate - now;
            
            if (timeLeft <= 0) {
                // It's the 17th! Unlock the contact
                document.getElementById('wifeTimer').innerHTML = '🎉 UNLOCKED! Happy Wedding Day! 💍';
                document.getElementById('wifeTimer').style.background = 'rgba(34, 139, 34, 0.2)';
                document.getElementById('wifeTimer').style.color = '#228B22';
                document.getElementById('wifeContact').classList.remove('blurred');
                document.getElementById('wifeContact').classList.add('available');
            } else {
                // Calculate time remaining
                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                
                document.getElementById('wifeTimer').innerHTML = 
                    `🔒 Available on 17th day - time remaining:<br><small>${days}d ${hours}h ${minutes}m ${seconds}s</small>`;
            }
        }
        
        // Update timer every second
        updateWifeTimer();
        setInterval(updateWifeTimer, 1000);
    </script>
</body>
</html>

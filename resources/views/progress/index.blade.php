<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Progress - Bachelor Party</title>
    <style>
        * { box-sizing: border-box; }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 25%, #CD853F 50%, #DEB887 75%, #F5DEB3 100%);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .header {
            background: #FDF5E6;
            padding: 30px 20px;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 25px;
            box-shadow: 0 15px 30px rgba(139, 69, 19, 0.3);
            border: 3px solid #8B4513;
        }
        
        h1 {
            color: #8B4513;
            margin: 0 0 15px 0;
            font-size: 2.2em;
            font-weight: 700;
            background: linear-gradient(45deg, #8B4513, #A0522D, #CD853F);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .progress-card {
            background: #FFF8DC;
            padding: 30px 20px;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 25px;
            border: 3px solid #8B4513;
            box-shadow: 0 15px 30px rgba(139, 69, 19, 0.3);
        }
        
        .progress-emoji {
            font-size: 4em;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 60%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            80% { transform: translateY(-5px); }
        }
        
        @keyframes shine {
            0% { transform: scale(1) rotate(0deg); }
            50% { transform: scale(1.1) rotate(5deg); }
            100% { transform: scale(1) rotate(0deg); }
        }
        
        .progress-message {
            font-size: 1.3em;
            color: #8B4513;
            font-weight: 600;
            margin-bottom: 25px;
            line-height: 1.4;
        }
        
        .progress-circle {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: conic-gradient(#228B22 0deg {{ $overallPercentage * 3.6 }}deg, #DEB887 {{ $overallPercentage * 3.6 }}deg 360deg);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            position: relative;
            border: 8px solid #8B4513;
        }
        
        .progress-circle::before {
            content: '';
            width: 160px;
            height: 160px;
            background: #FFF8DC;
            border-radius: 50%;
            position: absolute;
        }
        
        .progress-percentage {
            font-size: 2.5em;
            font-weight: 700;
            color: #8B4513;
            z-index: 1;
            position: relative;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        
        .stat-card {
            background: #FDF5E6;
            padding: 20px;
            border-radius: 15px;
            border: 2px solid #DEB887;
            text-align: center;
        }
        
        .stat-number {
            font-size: 2em;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 5px;
        }
        
        .stat-label {
            color: #8B4513;
            font-weight: 600;
            opacity: 0.8;
        }
        
        .back-btn {
            background: linear-gradient(45deg, #8B4513, #A0522D, #CD853F);
            color: #FDF5E6;
            padding: 15px 25px;
            border: none;
            border-radius: 12px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.3);
            transition: all 0.3s ease;
        }
        
        .back-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(139, 69, 19, 0.4);
            background: linear-gradient(45deg, #A0522D, #CD853F, #8B4513);
        }
        
        /* Mobile optimizations */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }
            
            .header {
                padding: 25px 15px;
                margin-bottom: 20px;
            }
            
            h1 {
                font-size: 1.8em;
                margin-bottom: 12px;
            }
            
            .progress-card {
                padding: 25px 15px;
                margin-bottom: 20px;
            }
            
            .progress-emoji {
                font-size: 3em;
                margin-bottom: 15px;
            }
            
            .progress-message {
                font-size: 1.1em;
                margin-bottom: 20px;
            }
            
            .progress-circle {
                width: 150px;
                height: 150px;
                margin-bottom: 20px;
            }
            
            .progress-circle::before {
                width: 120px;
                height: 120px;
            }
            
            .progress-percentage {
                font-size: 2em;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
                gap: 15px;
                margin: 20px 0;
            }
            
            .back-btn {
                padding: 14px 20px;
                font-size: 14px;
                margin-top: 15px;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            
            .header {
                padding: 20px 12px;
            }
            
            h1 {
                font-size: 1.6em;
            }
            
            .progress-card {
                padding: 20px 12px;
            }
            
            .progress-emoji {
                font-size: 2.5em;
            }
            
            .progress-circle {
                width: 120px;
                height: 120px;
            }
            
            .progress-circle::before {
                width: 90px;
                height: 90px;
            }
            
            .progress-percentage {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📊 PROGRESAS</h1>
            <p>Kaip sekasi tavo kelionė į legendą?</p>
        </div>

        <div class="progress-card">
            <div class="progress-circle">
                <div class="progress-percentage">{{ $overallPercentage }}%</div>
            </div>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">{{ $totalTasks }}</div>
                    <div class="stat-label">Iš viso užduočių</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">{{ $completedTasks }}</div>
                    <div class="stat-label">Baigta</div>
                </div>
            </div>
            
            <div class="award-section" style="background: #FDF5E6; padding: 25px; border-radius: 15px; border: 2px solid #DEB887; margin: 25px 0; text-align: center;">
                <h3 style="color: #8B4513; margin-bottom: 20px; font-size: 1.4em;">🎬 Tavo Apdovanojimas</h3>
                
                <div class="award-display" style="margin-bottom: 20px;">
                    <div class="award-emoji" style="font-size: 4em; margin-bottom: 15px; animation: shine 2s infinite;">{{ $award['emoji'] }}</div>
                    <div class="award-name" style="font-size: 1.8em; font-weight: 700; color: #8B4513; margin-bottom: 10px;">{{ $award['name'] }}</div>
                    <div class="award-description" style="font-size: 1.1em; color: #8B4513; opacity: 0.8;">{{ $award['description'] }}</div>
                </div>
                
                @if($overallPercentage < 100)
                    <div style="color: #8B4513; font-weight: 600; margin-top: 15px; padding: 10px; background: rgba(139, 69, 19, 0.1); border-radius: 8px;">
                        Atlikti dar {{ $tasksToNextAward }} užduotis iki {{ $nextAwardName }} Apdovanojimo!
                    </div>
                @else
                    <div style="color: #228B22; font-weight: 600; margin-top: 15px; padding: 10px; background: rgba(34, 139, 34, 0.1); border-radius: 8px;">
                        🏆 Tu gavai OSCARĄ! Tu - LEGENDA! 👑
                    </div>
                @endif
            </div>
        </div>

        <a href="{{ route('dashboard') }}" class="back-btn">← Grįžti į pagrindinį</a>
    </div>
</body>
</html>

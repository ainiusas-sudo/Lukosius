<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Bachelor Party - Task Center</title>
    <style>
        * {
            box-sizing: border-box;
        }
        
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
            padding: 20px;
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
            line-height: 1.2;
        }
        
        .subtitle {
            color: #8B4513;
            font-size: 1.1em;
            margin: 0;
            font-weight: 600;
            line-height: 1.4;
            opacity: 0.8;
        }
        
        .content {
            background: #FDF5E6;
            padding: 30px 20px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 30px rgba(139, 69, 19, 0.3);
            border: 3px solid #8B4513;
        }
        
        .success-message {
            background: rgba(34, 139, 34, 0.1);
            color: #228B22;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 25px;
            border: 2px solid #228B22;
            font-weight: 600;
            font-size: 16px;
        }
        
        .navigation {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        
        .nav-card {
            background: #FFF8DC;
            padding: 25px 20px;
            border-radius: 15px;
            border: 2px solid #DEB887;
            transition: all 0.3s ease;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 140px;
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.2);
        }
        
        .nav-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(139, 69, 19, 0.3);
            border-color: #8B4513;
            background: #FDF5E6;
        }
        
        .nav-icon {
            font-size: 2.5em;
            margin-bottom: 15px;
            filter: sepia(0.3);
        }
        
        .nav-title {
            color: #8B4513;
            margin: 0 0 8px 0;
            font-size: 1.3em;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }
        
        .nav-description {
            color: #8B4513;
            margin: 0;
            font-size: 13px;
            font-weight: 500;
            line-height: 1.4;
            opacity: 0.8;
        }
        
        .logout-btn {
            background: linear-gradient(45deg, #8B4513, #A0522D, #CD853F);
            color: #FDF5E6;
            padding: 18px 25px;
            border: none;
            border-radius: 12px;
            text-decoration: none;
            display: inline-block;
            margin-top: 25px;
            transition: all 0.3s ease;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.3);
            min-height: 55px;
            font-size: 16px;
        }
        
        .logout-btn:hover, .logout-btn:active {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(139, 69, 19, 0.4);
            background: linear-gradient(45deg, #A0522D, #CD853F, #8B4513);
        }
        
        /* Mobile optimizations */
        @media (max-width: 768px) {
            .container {
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
            
            .subtitle {
                font-size: 1em;
            }
            
            .content {
                padding: 25px 15px;
            }
            
            .navigation {
                grid-template-columns: 1fr;
                gap: 15px;
                margin-top: 25px;
            }
            
            .nav-card {
                padding: 20px 15px;
                min-height: 120px;
            }
            
            .nav-icon {
                font-size: 2.2em;
                margin-bottom: 12px;
            }
            
            .nav-title {
                font-size: 1.2em;
                margin-bottom: 6px;
            }
            
            .nav-description {
                font-size: 12px;
            }
            
            .logout-btn {
                padding: 16px 20px;
                font-size: 15px;
                min-height: 50px;
                margin-top: 20px;
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
            
            .content {
                padding: 20px 12px;
            }
            
            .nav-card {
                padding: 18px 12px;
            }
            
            .nav-icon {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>⚽🎬🎉 BACHELOR TASK CENTER 🎉🎬⚽</h1>
            <p class="subtitle">Complete your missions and earn your party rewards!</p>
        </div>

        <div class="content">
            @if(session('success'))
                <div class="success-message">
                    🎉 {{ session('success') }} 🎉
                </div>
            @endif

            <h2 style="color: #8B4513; font-size: 1.8em; margin-bottom: 25px; text-transform: uppercase; letter-spacing: 1px; line-height: 1.2; font-weight: 700;">MISSION CONTROL</h2>
            
            <div class="navigation">
                <a href="{{ route('tasks.index') }}" class="nav-card">
                    <div class="nav-icon">📋</div>
                    <div class="nav-title">Mokslai(užduotys)</div>
                    <div class="nav-description">Atlikite užduotis ir gaukite tašku</div>
                </a>

                <a href="{{ route('progress.index') }}" class="nav-card">
                    <div class="nav-icon">📊</div>
                    <div class="nav-title">Progresas</div>
                    <div class="nav-description">Kiek iš viso taskų atliko</div>
                </a>
                
                <a href="{{ route('faq.index') }}" class="nav-card">
                    <div class="nav-icon">❓</div>
                    <div class="nav-title">DUK</div>
                    <div class="nav-description">Dažniausiai užduodami klausimai</div>
                </a>
                
                <a href="{{ route('contact.index') }}" class="nav-card">
                    <div class="nav-icon">📞</div>
                    <div class="nav-title">Susisiekite</div>
                    <div class="nav-description">Susisiekite su organizatoriais</div>
                </a>
            </div>

            <a href="{{ route('welcome') }}" class="logout-btn">🚪 EXIT VIP ZONE</a>
        </div>
    </div>

    <script>
        function showSection(section) {
            // For now, just show an alert. You can expand this later
            const messages = {
                'tasks': 'Tasks section coming soon! 🎯',
                'faq': 'FAQ section coming soon! ❓',
                'contact': 'Contact section coming soon! 📞'
            };
            alert(messages[section]);
        }
    </script>
</body>
</html> 
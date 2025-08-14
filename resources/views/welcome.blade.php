<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Ultimate Bachelor Party - Access</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .container {
            background: #FDF5E6;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 20px 40px rgba(139, 69, 19, 0.3);
            border: 3px solid #8B4513;
        }
        
        h1 {
            color: #8B4513;
            margin-bottom: 20px;
            font-size: 2.2em;
            font-weight: 700;
            background: linear-gradient(45deg, #8B4513, #A0522D, #CD853F);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .form-group {
            margin-bottom: 25px;
            text-align: left;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #8B4513;
            font-weight: 600;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 18px 16px;
            border: 2px solid #DEB887;
            border-radius: 12px;
            font-size: 18px;
            box-sizing: border-box;
            background: #FFF8DC;
            transition: all 0.3s ease;
            -webkit-appearance: none;
            color: #8B4513;
        }
        
        input[type="text"]::placeholder {
            color: #A0522D;
            opacity: 0.7;
        }
        
        input[type="text"]:focus {
            outline: none;
            border-color: #8B4513;
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.1);
            background: #FFF8DC;
        }
        
        button {
            background: linear-gradient(45deg, #8B4513, #A0522D, #CD853F);
            color: #FDF5E6;
            padding: 20px 30px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(139, 69, 19, 0.3);
        }
        
        button:hover, button:active {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.4);
            background: linear-gradient(45deg, #A0522D, #CD853F, #8B4513);
        }
        
        .error {
            color: #8B0000;
            margin-top: 15px;
            font-size: 14px;
            background: rgba(139, 0, 0, 0.1);
            padding: 12px;
            border-radius: 8px;
            border-left: 4px solid #8B0000;
        }
        
        .success {
            color: #228B22;
            margin-top: 15px;
            font-size: 14px;
            background: rgba(34, 139, 34, 0.1);
            padding: 12px;
            border-radius: 8px;
            border-left: 4px solid #228B22;
        }
        
        .theme-icons {
            font-size: 2.5em;
            margin-bottom: 20px;
            filter: sepia(0.3);
        }
        
        .subtitle {
            color: #8B4513;
            margin-bottom: 30px;
            font-style: italic;
            font-size: 16px;
            line-height: 1.4;
            opacity: 0.8;
        }
        
        /* Mobile optimizations */
        @media (max-width: 480px) {
            body {
                padding: 15px;
            }
            
            .container {
                padding: 30px 20px;
                width: 100%;
            }
            
            h1 {
                font-size: 1.8em;
                margin-bottom: 15px;
            }
            
            .theme-icons {
                font-size: 2em;
                margin-bottom: 15px;
            }
            
            .subtitle {
                font-size: 14px;
                margin-bottom: 25px;
            }
            
            input[type="text"] {
                padding: 16px 14px;
                font-size: 16px;
            }
            
            button {
                padding: 18px 20px;
                font-size: 16px;
                min-height: 55px;
            }
            
            .form-group {
                margin-bottom: 20px;
            }
        }
        
        /* Prevent zoom on input focus for iOS */
        @media screen and (-webkit-min-device-pixel-ratio: 0) {
            input[type="text"] {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="theme-icons">⚽🎬🎉</div>
        <h1>Zdarov Bernai</h1>
        <p class="subtitle">Kaip Žmogui Žmogui Žmogus, Taip Ir Žmogui Žmogui Žmogus</p>

        @if(session('error'))
            <div class="error" style="margin-bottom: 10px;">Nebesvaik Lukosiau</div>
        @endif
        
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf
                <div class="form-group">
                    <label for="real_name">Vardas</label>
                    <input type="text" id="real_name" name="real_name" required 
                           placeholder="Įveskite savo vardą" 
                           class="form-input">
                </div>
                
                <button type="submit" class="login-btn">
                    🚀 VAŽIUOJAM 🚀
                </button>
            </form>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>{{ $task->name }} - Bachelor Party</title>
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
            max-width: 600px;
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
            font-size: 2em;
            font-weight: 700;
            background: linear-gradient(45deg, #8B4513, #A0522D, #CD853F);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .task-card {
            background: #FFF8DC;
            padding: 30px 20px;
            border-radius: 20px;
            text-align: center;
            border: 3px solid #8B4513;
            box-shadow: 0 15px 30px rgba(139, 69, 19, 0.3);
        }
        
        .task-name {
            font-size: 1.8em;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 15px;
        }
        
        .task-description {
            color: #8B4513;
            font-size: 1.1em;
            margin-bottom: 25px;
            line-height: 1.4;
            opacity: 0.8;
        }
        
        .task-status {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 25px;
        }
        
        .status-in_progress {
            background: rgba(139, 69, 19, 0.1);
            color: #8B4513;
            border: 2px solid #DEB887;
        }
        
        .status-completed {
            background: rgba(34, 139, 34, 0.1);
            color: #228B22;
            border: 2px solid #228B22;
        }
        
        .progress-section {
            margin: 25px 0;
        }
        
        .progress-display {
            font-size: 2em;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 15px;
        }
        
        .progress-bar {
            width: 100%;
            height: 20px;
            background: #DEB887;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
            border: 2px solid #8B4513;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(45deg, #8B4513, #A0522D, #CD853F);
            transition: width 0.3s ease;
        }
        
        .controls {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }
        
        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 80px;
            box-shadow: 0 4px 15px rgba(139, 69, 19, 0.3);
        }
        
        .btn-increment {
            background: linear-gradient(45deg, #228B22, #32CD32);
            color: #FDF5E6;
        }
        
        .btn-decrement {
            background: linear-gradient(45deg, #8B0000, #DC143C);
            color: #FDF5E6;
        }
        
        .btn-toggle {
            background: linear-gradient(45deg, #8B4513, #A0522D, #CD853F);
            color: #FDF5E6;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.4);
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
        
        .success-message {
            background: rgba(34, 139, 34, 0.1);
            color: #228B22;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 20px;
            border: 2px solid #228B22;
            font-weight: 600;
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
                font-size: 1.6em;
                margin-bottom: 12px;
            }
            
            .task-card {
                padding: 25px 15px;
            }
            
            .task-name {
                font-size: 1.5em;
                margin-bottom: 12px;
            }
            
            .task-description {
                font-size: 1em;
                margin-bottom: 20px;
            }
            
            .controls {
                gap: 15px;
                margin: 25px 0;
            }
            
            .btn {
                padding: 12px 25px;
                font-size: 16px;
                min-width: 70px;
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
                font-size: 1.4em;
            }
            
            .task-card {
                padding: 20px 12px;
            }
            
            .task-name {
                font-size: 1.3em;
            }
            
            .controls {
                flex-direction: column;
                gap: 10px;
            }
            
            .btn {
                width: 100%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎯 UŽDUOTIS</h1>
        </div>

        <div class="task-card">
            @if(session('success'))
                <div class="success-message">
                    🎉 {{ session('success') }} 🎉
                </div>
            @endif

            @if(session('error'))
                <div class="error-message" style="background: rgba(139, 0, 0, 0.1); color: #8B0000; padding: 15px; border-radius: 12px; margin-bottom: 20px; border: 2px solid #8B0000; font-weight: 600;">
                    ⚠️ {{ session('error') }}
                </div>
            @endif

            <div class="task-name">{{ $task->name }}</div>
            <div class="task-description">{{ $task->description }}</div>
            
            <div class="task-status status-{{ $task->status }}">
                {{ $task->status === 'in_progress' ? 'Vykdoma' : 'Baigta' }}
            </div>
            
            @if($task->goal !== null)
                <div class="progress-section">
                    <div class="progress-display">{{ $task->count }} / {{ $task->goal }}</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: {{ $task->getProgressPercentage() }}%"></div>
                    </div>
                    <div style="font-size: 1.2em; color: #8B4513; opacity: 0.8;">{{ $task->getProgressPercentage() }}% baigta</div>
                </div>
                
                @if($userRole === 'admin')
                    <div class="controls">
                        @if($task->count > 0)
                            <form method="POST" action="{{ route('tasks.decrement', $task) }}" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-decrement">-</button>
                            </form>
                        @endif
                        
                        <form method="POST" action="{{ route('tasks.increment', $task) }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-increment">+</button>
                        </form>
                    </div>
                @else
                    <div style="margin: 20px 0; padding: 15px; background: rgba(139, 69, 19, 0.1); border: 1px solid #DEB887; border-radius: 8px;">
                        <span style="color: #8B4513; font-weight: 600;">👁️ View Only - Only Lukosius can edit tasks</span>
                    </div>
                @endif
            @else
                <div class="progress-section">
                    <div class="progress-display">
                        {{ $task->status === 'completed' ? 'Baigta!' : 'Vykdoma' }}
                    </div>
                </div>
                
                @if($userRole === 'admin')
                    <div class="controls">
                        <form method="POST" action="{{ route('tasks.increment', $task) }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-toggle">
                                {{ $task->status === 'completed' ? 'Atšaukti' : 'Baigti' }}
                            </button>
                        </form>
                    </div>
                @else
                    <div style="margin: 20px 0; padding: 15px; background: rgba(139, 69, 19, 0.1); border: 1px solid #DEB887; border-radius: 8px;">
                        <span style="color: #8B4513; font-weight: 600;">👁️ View Only - Only Lukosius can edit tasks</span>
                    </div>
                @endif
            @endif
        </div>

        <a href="{{ route('tasks.index') }}" class="back-btn">← Grįžti į užduotis</a>
    </div>
</body>
</html>

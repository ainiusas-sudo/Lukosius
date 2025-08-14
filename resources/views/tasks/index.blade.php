<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Bachelor Party - Tasks</title>
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
        
        .header-icon {
            font-size: 1.5em;
            margin-right: 10px;
            filter: sepia(0.3);
        }
        
        .task-card {
            background: #FFF8DC;
            padding: 25px 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            border: 2px solid #DEB887;
            text-decoration: none;
            color: inherit;
            display: block;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.2);
        }
        
        .task-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(139, 69, 19, 0.3);
            border-color: #8B4513;
            background: #FDF5E6;
        }
        
        .task-name {
            font-size: 1.3em;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 10px;
        }
        
        .task-description {
            color: #8B4513;
            margin-bottom: 12px;
            opacity: 0.8;
            line-height: 1.4;
        }
        
        .task-status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .status-in_progress {
            background: rgba(139, 69, 19, 0.1);
            color: #8B4513;
            border: 1px solid #DEB887;
        }
        
        .status-completed {
            background: rgba(34, 139, 34, 0.1);
            color: #228B22;
            border: 1px solid #228B22;
        }
        
        .task-progress {
            font-size: 14px;
            color: #8B4513;
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
            
            .task-card {
                padding: 20px 15px;
                margin-bottom: 15px;
            }
            
            .task-name {
                font-size: 1.2em;
                margin-bottom: 8px;
            }
            
            .task-description {
                font-size: 14px;
                margin-bottom: 10px;
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
            
            .task-card {
                padding: 18px 12px;
            }
            
            .task-name {
                font-size: 1.1em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎓 Mokslai</h1>
            @if($userRole === 'admin')
                <div style="margin-top: 10px; padding: 8px 16px; background: rgba(34, 139, 34, 0.1); border: 1px solid #228B22; border-radius: 8px; display: inline-block;">
                    <span style="color: #228B22; font-weight: 600; font-size: 14px;">👑 Admin Mode - Can Edit Tasks</span>
                </div>
            @else
                <div style="margin-top: 10px; padding: 8px 16px; background: rgba(139, 69, 19, 0.1); border: 1px solid #8B4513; border-radius: 8px; display: inline-block;">
                    <span style="color: #8B4513; font-weight: 600; font-size: 14px;">👁️ View Only Mode</span>
                </div>
            @endif
        </div>

        @foreach($tasks as $task)
            <a href="{{ route('tasks.show', $task) }}" class="task-card">
                <div class="task-name">{{ $task->name }}</div>
                <div class="task-description">{{ $task->description }}</div>
                
                <div class="task-status status-{{ $task->status }}">
                    {{ $task->status === 'in_progress' ? 'Vykdoma' : 'Baigta' }}
                </div>
                
                @if($task->goal !== null)
                    <div class="task-progress">
                        {{ $task->count }} / {{ $task->goal }} ({{ $task->getProgressPercentage() }}%)
                    </div>
                @endif
            </a>
        @endforeach

        <a href="{{ route('dashboard') }}" class="back-btn">← Grįžti į pagrindinį</a>
    </div>
</body>
</html> 
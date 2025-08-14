<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>DUK - Bachelor Party</title>
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
        
        .faq-card {
            background: #FFF8DC;
            padding: 25px 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            border: 2px solid #DEB887;
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.2);
            transition: all 0.3s ease;
        }
        
        .faq-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(139, 69, 19, 0.3);
            border-color: #8B4513;
        }
        
        .faq-question {
            font-size: 1.2em;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 15px;
            line-height: 1.4;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s ease;
        }
        
        .faq-question:hover {
            color: #A0522D;
        }
        
        .faq-toggle {
            font-size: 1.5em;
            transition: transform 0.3s ease;
        }
        
        .faq-toggle.open {
            transform: rotate(45deg);
        }
        
        .faq-answer {
            color: #8B4513;
            font-size: 1em;
            line-height: 1.5;
            opacity: 0.8;
            font-style: italic;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .faq-answer.open {
            max-height: 300px;
            margin-top: 15px;
        }
        
        .faq-bullets {
            margin-top: 10px;
            padding-left: 20px;
        }
        
        .faq-bullets li {
            margin-bottom: 8px;
            line-height: 1.4;
        }
        
        .faq-category {
            display: inline-block;
            background: rgba(139, 69, 19, 0.1);
            color: #8B4513;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
            margin-top: 10px;
            border: 1px solid #DEB887;
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
            
            .faq-card {
                padding: 20px 15px;
                margin-bottom: 15px;
            }
            
            .faq-question {
                font-size: 1.1em;
                margin-bottom: 12px;
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
            
            .faq-card {
                padding: 18px 12px;
            }
            
            .faq-question {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>❓ DUK</h1>
            <p>Dažniausiai užduodami klausimai</p>
        </div>

        @foreach($faqs as $faq)
            <div class="faq-card">
                <div class="faq-question">
                    <span>{{ $faq['question'] }}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <ul class="faq-bullets">
                        @foreach(explode("\n", $faq['answer']) as $answerItem)
                            <li>{{ $answerItem }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="faq-category">{{ $faq['category'] }}</div>
            </div>
        @endforeach

        <a href="{{ route('dashboard') }}" class="back-btn">← Grįžti į pagrindinį</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');
            const faqAnswers = document.querySelectorAll('.faq-answer');
            const faqToggles = document.querySelectorAll('.faq-toggle');

            faqQuestions.forEach((question, index) => {
                question.addEventListener('click', function() {
                    const answer = this.nextElementSibling;
                    const toggle = this.querySelector('.faq-toggle');

                    if (answer.classList.contains('open')) {
                        answer.classList.remove('open');
                        toggle.textContent = '+';
                        toggle.classList.remove('open');
                    } else {
                        answer.classList.add('open');
                        toggle.textContent = '-';
                        toggle.classList.add('open');
                    }
                });
            });
        });
    </script>
</body>
</html>

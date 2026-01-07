<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Gallery</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 40px 20px;
        }

        .gallery-section {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 60px 20px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-meta {
            color: #c9a05c;
            font-size: 16px;
            font-style: italic;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 42px;
            color: #2c3e50;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .gallery-filters {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: transparent;
            border: 2px solid #c9a05c;
            color: #2c3e50;
            padding: 12px 30px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 30px;
            transition: all 0.3s ease;
            font-family: 'Georgia', serif;
        }

        .filter-btn:hover {
            background: #c9a05c;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(201, 160, 92, 0.3);
        }

        .filter-btn.active {
            background: #c9a05c;
            color: white;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            cursor: pointer;
            display: none;
        }

        .gallery-item.show {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.4s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-overlay h4 {
            font-size: 20px;
            margin: 0;
            font-weight: 500;
        }

        /* Coming Soon Placeholder */
        .coming-soon {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 350px;
            position: relative;
            overflow: hidden;
        }

        .coming-soon::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: backgroundMove 20s linear infinite;
        }

        @keyframes backgroundMove {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(50px, 50px);
            }
        }

        .placeholder-content {
            text-align: center;
            color: white;
            z-index: 1;
            padding: 30px;
        }

        .ring-icon {
            width: 150px;
            height: 84px;
            margin: 0 auto 20px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        .ring-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.5));
        }

        .placeholder-content h4 {
            font-size: 26px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .love-text {
            font-size: 16px;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 25px 0;
            flex-wrap: wrap;
        }

        .countdown span {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 15px 20px;
            border-radius: 10px;
            min-width: 80px;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .countdown strong {
            display: block;
            font-size: 32px;
            margin-bottom: 5px;
        }

        .countdown small {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .love-note {
            font-size: 14px;
            margin-top: 20px;
            opacity: 0.9;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 32px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .filter-btn {
                padding: 10px 20px;
                font-size: 14px;
            }

            .countdown span {
                min-width: 70px;
                padding: 12px 15px;
            }

            .countdown strong {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="gallery-section">
        <div class="section-header">
            <div class="section-meta">Gallery</div>
            <h2 class="section-title">Our Memories</h2>
        </div>

        <div class="gallery-filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="prewedding">Pre-Wedding</button>
            <button class="filter-btn" data-filter="party">Wedding Pictures</button>
        </div>

        <div class="gallery-grid">
            <!-- Pre-Wedding Images -->
            <div class="gallery-item show" data-category="prewedding">
                <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=600" alt="Pre-Wedding">
                <div class="gallery-overlay">
                    <h4>Pre-Wedding</h4>
                </div>
            </div>

            <!-- Coming Soon Placeholder -->
            <div class="gallery-item coming-soon show" data-category="party">
                <div class="placeholder-content">
                    <div class="ring-icon">
                        <svg viewBox="0 0 150 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="75" cy="60" rx="35" ry="8" fill="rgba(255,255,255,0.3)"/>
                            <path d="M75 10 L80 25 L95 30 L80 35 L75 50 L70 35 L55 30 L70 25 Z" fill="gold" stroke="white" stroke-width="2"/>
                            <circle cx="75" cy="40" r="20" fill="none" stroke="gold" stroke-width="4"/>
                            <circle cx="75" cy="40" r="15" fill="none" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h4>Our Big Day Is Coming</h4>
                    <p class="love-text">
                        These precious wedding moments will be shared<br>
                        right after we say <strong>"I do"</strong> 💕
                    </p>
                    <div class="countdown" id="countdown">
                        <span><strong class="days">0</strong><small>Days</small></span>
                        <span><strong class="hours">0</strong><small>Hours</small></span>
                        <span><strong class="minutes">0</strong><small>Minutes</small></span>
                        <span><strong class="seconds">0</strong><small>Seconds</small></span>
                    </div>
                    <p class="love-note">Thank you for celebrating love with us 🤍</p>
                </div>
            </div>

            <div class="gallery-item show" data-category="prewedding">
                <img src="https://images.unsplash.com/photo-1606800052052-a08af7148866?w=600" alt="Pre-Wedding">
                <div class="gallery-overlay">
                    <h4>Pre-Wedding</h4>
                </div>
            </div>

            <div class="gallery-item show" data-category="prewedding">
                <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?w=600" alt="Pre-Wedding">
                <div class="gallery-overlay">
                    <h4>Pre-Wedding</h4>
                </div>
            </div>

            <div class="gallery-item show" data-category="prewedding">
                <img src="https://images.unsplash.com/photo-1591604021695-0c69b7c05981?w=600" alt="Pre-Wedding">
                <div class="gallery-overlay">
                    <h4>Pre-Wedding</h4>
                </div>
            </div>

            <div class="gallery-item show" data-category="prewedding">
                <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?w=600" alt="Pre-Wedding">
                <div class="gallery-overlay">
                    <h4>Pre-Wedding</h4>
                </div>
            </div>

            <div class="gallery-item show" data-category="prewedding">
                <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?w=600" alt="Pre-Wedding">
                <div class="gallery-overlay">
                    <h4>Pre-Wedding</h4>
                </div>
            </div>

            <div class="gallery-item show" data-category="prewedding">
                <img src="https://images.unsplash.com/photo-1623893439664-4a3f63589fa3?w=600" alt="Pre-Wedding">
                <div class="gallery-overlay">
                    <h4>Pre-Wedding</h4>
                </div>
            </div>

            <div class="gallery-item show" data-category="prewedding">
                <img src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?w=600" alt="Pre-Wedding">
                <div class="gallery-overlay">
                    <h4>Pre-Wedding</h4>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;

                galleryItems.forEach(item => {
                    if (filter === 'all') {
                        item.classList.add('show');
                    } else {
                        if (item.dataset.category === filter) {
                            item.classList.add('show');
                        } else {
                            item.classList.remove('show');
                        }
                    }
                });
            });
        });

        // Countdown Timer
        function updateCountdown() {
            const weddingDate = new Date('2026-02-14T10:00:00').getTime();
            const now = new Date().getTime();
            const distance = weddingDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.querySelector('.countdown .days').textContent = days;
            document.querySelector('.countdown .hours').textContent = hours;
            document.querySelector('.countdown .minutes').textContent = minutes;
            document.querySelector('.countdown .seconds').textContent = seconds;

            if (distance < 0) {
                document.querySelector('.countdown').innerHTML = '<p style="font-size: 24px;">💍 Just Married! 💕</p>';
            }
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>
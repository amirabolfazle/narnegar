<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نارنگار - مکانی برای جامعه شما</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://www.narnegar.ir/cdn/icon.ico">
    
    <style>
        @font-face {
            font-family: 'IRANSans';
            src: url('https://www.narnegar.ir/cdn/IRANSans-web.woff') format('woff');
        }

        :root {
            --brand-color: #960733;
            --brand-hover: #7a0529;
            --background-primary: #0a0a0a;
            --text-normal: #dcddde;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'IRANSans', sans-serif !important;
        }

        body {
            background: var(--background-primary);
            color: var(--text-normal);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* نوار导航 */
        .nav-container {
            background: rgba(0,0,0,0.8);
            backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-logo {
            width: 124px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-link {
            color: white !important;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--brand-color) !important;
        }

        /* بخش اصلی */
        .hero-section {
            padding: 120px 2rem 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, var(--brand-color) 0%, var(--background-primary) 100%);
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 4rem;
        }

        .hero-text {
            flex: 1;
            text-align: right;
        }

        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-description {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-cta {
            display: flex;
            gap: 1.5rem;
        }

        .hero-image {
            flex: 1;
        }

        .hero-image img {
            width: 100%;
            max-width: 600px;
        }

        /* ویژگی‌ها */
        .features-section {
            padding: 6rem 2rem;
            background: #060607;
        }

        .feature-card {
            background: rgba(255,255,255,0.05);
            border-radius: 8px;
            padding: 2rem;
            margin: 1rem;
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        /* فوتر */
        .footer {
            background: #000;
            padding: 4rem 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        /* دکمه‌ها */
        .btn-primary {
            background: var(--brand-color);
            color: white !important;
            padding: 1rem 2rem;
            border-radius: 25px;
            border: none;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--brand-hover);
            box-shadow: 0 4px 12px rgba(150,7,51,0.3);
        }

        /* رسپانسیو */
        @media (max-width: 768px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .nav-links {
                display: none;
            }

            .hero-title {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- نوار导航 -->
    <nav class="nav-container">
        <div class="nav-content">
            <img src="https://www.narnegar.ir/cdn/narnegar.png" alt="نارنگار" class="nav-logo">
            <div class="nav-links">
                <a href="#" class="nav-link">دانلود</a>
                <a href="#" class="nav-link">امنیت</a>
                <a href="#" class="nav-link">پشتیبانی</a>
                <button class="btn-primary">ورود</button>
            </div>
        </div>
    </nav>

    <!-- بخش اصلی -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">پیامرسانی همگانی!</h1>
                <p class="hero-description">
                    نارنگار جایی است که می‌توانید جامعه خود را بسازید و مدیریت کنید، جایی که می‌توانید با دوستانتان وقت بگذرانید. جامعه خود را بسازید و با اعضا در چت‌های متنی، صوتی و تصویری ارتباط برقرار کنید.
                </p>
                <div class="hero-cta">
                    <button class="btn-primary">دانلود برای ویندوز</button>
                    <button class="btn-primary" style="background: #36393f;">مرورگر وب</button>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://assets-global.website-files.com/6257adef93867e50d84d30e2/62a315f45888ab5517509314_ca40b4264b01.png" alt="نمونه چت">
            </div>
        </div>
    </section>

    <!-- ویژگی‌ها -->
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>🛡️ محیط امن</h3>
                        <p>سیستم مدیریتی پیشرفته با ابزارهای امنیتی حرفه‌ای</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>🎮 یکپارچه با بازی</h3>
                        <p>اتصال به بازی‌های محبوب و نمایش وضعیت آنلاین</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>🌍 فارسی سازگار</h3>
                        <p>طراحی شده مخصوص نیازهای جامعه فارسی زبان</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- فوتر -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>نارنگار</h4>
                    <p>ساخته شده با ❤️ در ایران</p>
                </div>
                <div class="col-md-3">
                    <h5>محصول</h5>
                    <ul>
                        <li><a href="#">دانلود</a></li>
                        <li><a href="#">امنیت</a></li>
                        <li><a href="#">وبلاگ</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>شرکت</h5>
                    <ul>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">فرصت‌های شغلی</a></li>
                        <li><a href="#">تماس با ما</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>قوانین</h5>
                    <ul>
                        <li><a href="#">حریم خصوصی</a></li>
                        <li><a href="#">شرایط استفاده</a></li>
                        <li><a href="#">کوکی‌ها</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- اسکریپت‌ها -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // اسکریپت برای اسکرول نرم
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html> 
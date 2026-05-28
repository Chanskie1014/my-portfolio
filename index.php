<?php
$fullName = 'Christian Gamao';
$role = 'BSIT Student / Aspiring Web Developer';
$email = 'tianchris019@gmail.com';
$github = 'https://github.com/Chanskie1014';
$linkedin = 'https://www.linkedin.com/in/chris-tian-722b24313/';
$facebook = 'https://facebook.com/christian.gamao.2024';
?>
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Modern internship portfolio for <?php echo htmlspecialchars($fullName); ?>, an aspiring web developer.">
    <title><?php echo htmlspecialchars($fullName); ?> | Developer Portfolio</title>

    <script>
        (function () {
            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>

    <script>
        window.tailwind = window.tailwind || {};
        window.tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
                    },
                    boxShadow: {
                        soft: '0 18px 55px rgba(15, 23, 42, 0.08)',
                        glow: '0 20px 70px rgba(37, 99, 235, 0.16)'
                    }
                }
            }
        };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-white text-slate-950 antialiased transition-colors duration-300 dark:bg-black dark:text-white">
    <main>
        <?php include __DIR__ . '/sections/hero.php'; ?>
        <div class="portfolio-grid mx-auto grid max-w-6xl gap-5 px-4 py-5 lg:grid-cols-[0.95fr_1.05fr]">
            <?php include __DIR__ . '/sections/about.php'; ?>
            <?php include __DIR__ . '/sections/experience.php'; ?>
        </div>
        <?php include __DIR__ . '/sections/techstack.php'; ?>
        <?php include __DIR__ . '/sections/projects.php'; ?>
        <?php include __DIR__ . '/sections/certifications.php'; ?>
        <?php include __DIR__ . '/sections/gallery.php'; ?>
        <?php include __DIR__ . '/sections/contact.php'; ?>
    </main>

    <?php include __DIR__ . '/components/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

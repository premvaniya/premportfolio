<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prem Vaniya's portfolio - Success page for contact form submission.">
    <meta name="author" content="Prem Vaniya">
    <meta name="robots" content="index, follow">
    <title>Submission Successful - Prem Vaniya</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header style="background-color:black;">
        <nav class="navbar">
            <div class="container">
                <img src="./img/favicon.png" class="logo" alt="logo" height="30px" width="30px">
                <h2 style="margin-left: 40px; padding-left: 40px;">Prem Vaniya</h2>
                <ul class="nav-links">
                    <li><a href="index.html#aboutlink">About</a></li>
                    <li><a href="index.html#projects">Projects</a></li>
                    <li><a href="index.html#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main style="min-height: 50vh; display: block;  ">
        <div class="container" style="text-align: center; padding: 50px 20px; display: block;">
            <h2>Submission Successful!</h2>
            <?php if (isset($_SESSION['success'])): ?>
                <p style="color: green; font-size: 1.2em;"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
            <?php else: ?>
                <p style="color: green; font-size: 1.2em; padding-top: 200px;">Data submitted successfully, thanks for joining!</p>
            <?php endif; ?>
            
            <a href="index.html#contact" class="btn" style="display: inline-block; margin-top: 20px;">Return to Contact Form</a>
            <a href="index.html" class="btn" style="display: inline-block; margin-top: 20px; margin-left: 10px;">Back to Home</a>
        </div>
    </main>
    <footer class="footer" >
        <div class="footer-container">
            <div class="footer-social">
                <a href="https://linkedin.com/in/premvaniya" target="_blank">
                    <img src="https://img.icons8.com/color/48/000000/linkedin.png" alt="LinkedIn" width="32px" height="32px" loading="lazy">
                </a>
                <a href="https://github.com/premvaniya" target="_blank">
                    <img src="https://img.icons8.com/color/48/000000/github.png" alt="GitHub" width="32px" height="32px" loading="lazy">
                </a>
                <a href="https://instagram.com/premvaniya_" target="_blank">
                    <img src="https://img.icons8.com/color/48/000000/instagram.png" alt="Instagram" width="32px" height="32px" loading="lazy">
                </a>
            </div>
            <p class="footer-text">© 2025 Prem Vaniya. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
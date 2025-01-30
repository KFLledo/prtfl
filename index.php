<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khristine Felicity S. Lledo - Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: #5c0000; /* Red background for the body */
            font-family: Arial, sans-serif;
            color: white;
        }
        .container {
		    margin-top: 25px;
            background: #5c0000; /* Red background for container */
            width: 100%;
            padding-bottom: 50px;
            min-height: 100vh; /* Ensure it takes at least full viewport height */
        }
        .header {
            text-align: center;
            padding: 40px 20px;
            background: url('catmun.jpg') no-repeat center center fixed; /* Cat image as background for header */
            background-size: cover; /* Make sure it covers the whole header */
        }
        .header img {
            width: 137px;
            height: 146px;
            border-radius: 0%;
        }
        .header h1 {
            font-size: 32px;
        }
        .about {
            background: #3d0000;
            padding: 50px;
            text-align: center;
            margin: 20px auto;
            width: 72%;
            border-radius: 10px;
        }
        .projects {
            text-align: center;
            margin-top: 20px;
        }
        .project-box {
		    margin-top: 100px;
            background: #7a0000;
            padding: 30px;
            margin: 50px auto;
            width: 60%;
            border-radius: 10px;
        }
        .project-box img {
            width: 100%;
            max-width: 600px;
            display: block;
            margin: 10px auto;
        }
        .contact {
            text-align: center;
            background: #3d0000;
            padding: 20px;
            margin-top: 100px;
            border-radius: 10px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        footer {
            text-align: center;
            background: #220000;
            padding: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="me.jpg" alt="Profile Picture">
            <h1>Welcome!</h1>
            <p>I am Khristine Felicity S. Lledo.</p>
        </div>
        <div class="about">
            <p>I am a student at Cavite State University – Silang Campus, studying under the Bachelor of Science in Information Technology course. You'll find me in BSIT 1C. I specialize in front-end development.</p>
        </div>
        <div class="projects">
            <h2 style="background-color:#3d0000; padding: 25px;">Past Projects:</h2>

            <div class="project-box">
                <h3>SHS UI for Research</h3>
                <img src="homescreen.jpg" alt="SHS UI - Image 1">
                <img src="login.jpg" alt="SHS UI - Image 2">
                <img src="surfpage.jpg" alt="SHS UI - Image 3">
            </div>
            <div class="project-box">
                <h3>Color Game</h3>
                <img src="cg.png" alt="Color Game">
            </div>
            <div class="project-box">
                <h3>Calculator</h3>
                <img src="calc.png" alt="Calculator">
            </div>
        </div>
        <div class="contact">
            <h2>Contact Me</h2>
            <p><a href="https://www.facebook.com/khristinefelicity.lledo" target="_blank" style="color: white;">Facebook: Khristine Felicity S. Lledo</a></p>
            <p>School Email: kfsllledo@cvsu.edu.ph</p>
            <p>Number: 09123456789</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Khristine Felicity Lledo. All rights reserved.</p>
    </footer>
</body>
</html>
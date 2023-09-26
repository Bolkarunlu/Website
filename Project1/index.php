<?php

$link=mysqli_connect("localhost", "root", "", "veritabani");
$link->set_charset("utf8");
if(mysqli_connect_error()){
	echo mysqli_connect_error();
}

if(isset($_POST["submit"])){
	if($_POST["isim"]!="" && $_POST["email"]!="" && $_POST["txt"]!=""){
		
		$isim = mysqli_real_escape_string($link, $_POST["isim"]);
		$email = mysqli_real_escape_string($link, $_POST["email"]);
		$txt = mysqli_real_escape_string($link, $_POST["txt"]);
       
        $query="SELECT * FROM uyeler WHERE email = '".$email."'";
		$result = mysqli_query($link, $query);
		if(mysqli_num_rows($result)>0){
			echo "";
		}
		else{
      
		$query = "INSERT INTO uyeler (isim, email, txt) 
		VALUES ('".$isim."' , '".$email."' , '".$txt."')";
		if(mysqli_query($link, $query)) {
            header("Location: index.php");
        }
        }
	}
	else{
		echo "";
	}
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="image/programmer.png"/>
    <title>Bolkar Ünlü</title>
</head>
<body>
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bxs-chevron-up scrolltop__icon'></i>
    </a>
    <!-- Header -->
    <header class="Header" id="header">
        <nav class="nav bd-container">
            <a href="" class="nav__logo">Bolkar Ünlü</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#qualification" class="nav__link">Qualification</a></li>
                    <li class="nav__item"><a href="#portfolio" class="nav__link">Portfolio</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>
            
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
          
        </nav>
    </header>

    <!-- Main -->
    <main class="main">
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="home__data">
                    <span class="home__greeting">Hello, My name is</span>
                    <h1 class="home__name">Bolkar Ünlü</h1>
                    <span class="home__profession">Engineer</span>
                    <a download="" href="image/CV_1.pdf" class="button button-light">Download Cv</a>
                </div>
                <div class="home__social">
                    <a href="https://www.linkedin.com/in/bolkar-%C3%BCnl%C3%BC-9027a4230/" class="home__social-icon"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://github.com/Bolkarunlu?tab=repositories" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                    <a href="https://www.instagram.com/bolkarnl/" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                </div>
                <div class="home__img">
                    <img src="image/Bolkar.jpeg" alt="">
                </div>
            </div>
        </section>
  

    <!-- About -->
    <section class="about section bd-container" id="about">
        <span class="section-subtitle">My History</span>
        <h2 class="section-title">About me</h2>
        <div class="about__container bd-grid">
            <div class="about__data bd-grid">
                <p class="about__description"><span>Hello, I am <br>
                    I am studying at Turkish German University, 3rd year electrical and electronics engineering.</span></p>

                <div>
                    <span class="about__number">Web design courses</span>
                    <span class="about__Achievement">Full stack web design and programming <br>
                    JavaScript web projects:20 <br>Rapid web development from scratch
                </span>
                </div>
                <div>
                    <span class="about__number">Game design courses</span>
                    <span class="about__Achievement">Unreal Engine 5 C++ Developer: Learn C++ & Make Video Games
                    </span>
                </div>
             
            </div>
            <img src="image/Bolkar.jpeg" class="about__img">
        </div>
    </section>

    <section class="qualification section bd-containers" id="qualification">
        <span class="section-subtitle">Experince and Education</span>
        <h2 class="section-title">Qualification</h2>
        <div class="qualification__container bd-grid">
            <div class="qualification__content">
                <h2 class="qualification__title">
                    <i class='bx bx-briefcase-alt qualification__title-icon' ></i>
                    Work Experince
                </h2>
                <div class="bd-grid">
                    <div class="qualification__data">
                        <h3 class="qualification__area">Kültüroğlu-engineering</h3>
                        <div class="qualification__box">
                            <span class="qualification__work">
                                <i class='bx bx-briefcase-alt qualification__icon'></i>
                                AutoCad - Construction Site
                            </span>
                            <span class="qualification__work">
                                <i class='bx bx-calender-alt qualification__icon'></i>
                                1 Month
                            </span>
                        </div>
                    </div>
                    <div class="qualification__data">
                        <h3 class="qualification__area">
                            Turkish German University.</h3>
                        <div class="qualification__box">
                            <span class="qualification__work">
                                <i class='bx bx-briefcase-alt qualification__icon'></i>
                                Basic internship (use of machinery and electrical tools)
                            </span>
                            <span class="qualification__work">
                                <i class='bx bx-calender-alt qualification__icon'></i>
                                2 Weeks
                            </span>
                        </div>
                    </div>
                    <div class="qualification__data">
                        <h3 class="qualification__area">Tekden Yapım</h3>
                        <div class="qualification__box">
                            <span class="qualification__work">
                                <i class='bx bx-briefcase-alt qualification__icon'></i>
                                Web design and Game design
                            </span>
                            <span class="qualification__work">
                                <i class='bx bx-calender-alt qualification__icon'></i>
                                May 2023 - Until
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qualification__content">
                <h2 class="qualification__title">
                    <i class='bx bx-book-bookmark qualification__title-icon' ></i>
                    Education
                </h2>
                <div class="bd-grid">
                    <div class="qualification__data">
                        <h3 class="qualification__area">Turkish German University</h3>
                        <div class="qualification__box">
                            <span class="qualification__work">
                                <i class='bx bx-book-alt qualification__icon'></i>
                                Istanbul - Turkey
                            </span>
                            <span class="qualification__work">
                                <i class='bx bx-calender-alt qualification__icon'></i>
                                September 2019 - Until
                            </span>
                        </div>
                    </div>
                    <div class="qualification__data">
                        <h3 class="qualification__area">Hasan Aybaba anadolu lisesi</h3>
                        <div class="qualification__box">
                            <span class="qualification__work">
                                <i class='bx bx-book-alt qualification__icon'></i>
                                Osmaniye - Turkey
                            </span>
                            <span class="qualification__work">
                                <i class='bx bx-calender-alt qualification__icon'></i>
                                September 2014 - 2018 
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" portfolio section bd-container" id="portfolio">
        <span class="section-subtitle">My Recent Work</span>
        <h2 class="section-title">Portfolio</h2>
        <div class="portfolio__nav">
            <span class="portfolio__item">Project</span>
        </div>
        <div class="portfolio__container bd-grid">
            <div class="portfolio__content">
                <a href=""><img src="image/Ekran Resmi 2023-09-07 00.34.28.png" class="portfolio__img"></a>
                <div class="portfolio__data">
                    <span class="portfolio__subtitle">Autonomus Vehicle</span>
                    <span><h2 class="portfolio__title">Alfa-Car</h2></span>
                    <span class="button button-link">
                        I was the electrical and electronics leader of the 5-person Alfa-Car team. I learned about IoT technologies (Sensor) and in-vehicle electrical installation.
                        Besides, working as a team was very exciting.</span>
                </div>
            </div>
        </div>
    </section>

    <section>
        <span class="section-subtitle" id="contact">For Projects</span>
        <h2 class="section-title">Contact Me</h2>
        <div class="contact__container bd-grid">
            <div class="contact__content bd-grid">
                <div class="contact__box">
                <form action="" method="post">
                    <div class="contact_form">
                        <input name="isim" type="text" placeholder="Name" class="input">
                        <input name="email" type="text" placeholder="Email" class="input">
                        <textarea name="txt" placeholder="Comment" cols="40" rows="5" maxlength="250" data-max-chars="250" class="input count-chars" id="my-text"></textarea>
                        <p id="result"></p>
                        <input name="submit" type="submit" value="SUBMIT" class="input">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    </main>

    <footer class="footer">
        <div class="footer__container bd-container">
            <h1 class="footer__title">Bolkar Ünlü</h1>
            <p class="footer__description">I am Bolkar ünlü and this is my personal website, consult me here.</p>
            <div class="footer__social">
                <a href="https://www.linkedin.com/in/bolkar-%C3%BCnl%C3%BC-9027a4230/" class="footer__link"><i class='bx bxl-linkedin' ></i></a>
                <a href="https://github.com/Bolkarunlu?tab=repositories" class="footer__link"><i class='bx bxl-github' ></i></a>
                <a href="https://www.instagram.com/bolkarnl/" class="footer__link"><i class='bx bxl-instagram' ></i></a>
                <a href="mailto:bolkarunlu77@gmail.com" class="footer__link"><i class='bx bxl-gmail' ></i></a>
            </div>
        </div>
    </footer>


    <script src="js/gsap.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>

<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Un développeur Web passionné par la création d'applications et d'expériences interactives sur le Web.">
    <meta name="keywords" content="Développeur Web, Responsive Web, HTML, CSS, JavaScript">
    <meta name="author" content="Hassan TAJIRI">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content=”index, follow”>
    <title>Hassan TAJIRI- Développeur Web</title>
    <!--My css link-->
    <link rel="stylesheet" href="style/style.css">

    <!--Google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!--Font-awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>

<body class="main-content">
    <!--Preloader-->
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <!-----------------------------===About Section Start===------------------------------->
    <header class="section sec1 header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/image.png" alt="my profile photo">
                </div>
            </div>
            <div class="right-header">
                <div id="name">
                    <h1 class="name"><?php echo $lang['greeting']?><span class="hand">👋🏻</span></br><?php  echo $lang['name']?> <span class="f-name" id="f-name">
                        Hassan TAJIRI</span> <?php  echo $lang['job_title']?>
                    </h1>
                    <p>
                    <?php  echo $lang['presentation']?>
                    </p>
                </div>
                <div class="btn-con">
                    <a href="cv/Hassan TAJIRI_Developpeur_Web.pdf" class="main-btn" target="_blank"
                        title="cv download link">
                        <span class="btn-text"><?php  echo $lang['resume']?></span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
                <!-----------------------------===Underconstruction===------------------------------->
                <div id="workingon">
                    <span>🚧 <?php  echo $lang['warning']?></span>
                    <br>
                    <div id="loading">
                        <div id="wiggle"></div>
                    </div>
                </div>
                <!-----------------------------===Underconstruction End===------------------------------->
            </div>
        </div>
    </header>
    <!-----------------------------===Home Section End===------------------------------->
    <main>
        <!-----------------------------===About Section Start===------------------------------->
        <section class="section sec2 about" id="about">
            <div class="main-title">
                <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Information About me</h4>
                    <p>
                        Je suis un développeur web autodidacte qui a commencé à coder parallèlement à mon metier de
                        réceptionniste À partir de ma première page "hello world",
                        j'ai été intrigué par la façon dont je pouvais aller plus loin et l'aventure a commencé là. J'ai
                        maintenant créé des applications complètes,
                        en combinant le style et la fonctionnalité et en utilisant des cadres open source pour garantir
                        les meilleures pratiques.
                        <br /> <br /> La rapidité avec laquelle le monde de web et les technologies évoluent m'a
                        encouragé à continuer d'apprendre, d'explorer et de m'adapter
                        et a consacrer plus de temps et d'énergie, a l'apprentissage et l'acquisition des bonne
                        pratiques.
                    </p>
                    <div class="btn-con">
                        <a href="cv/Hassan TAJIRI_Developpeur_Web.pdf" class="main-btn" target="_blank"
                            title="cv download link">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">25+</p>
                            <p class="small-text">Projects <br /> Completed</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">2+</p>
                            <p class="small-text">Years of <br /> experience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">22+</p>
                            <p class="small-text">Happy <br /> Clients</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">20+</p>
                            <p class="small-text">Customer <br /> reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">My Skills</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">html5</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">css3</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">javascript</p>
                        <div class="progress-con">
                            <p class="prog-text">45%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">php</p>
                        <div class="progress-con">
                            <p class="prog-text">35%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">jquery</p>
                        <div class="progress-con">
                            <p class="prog-text">37%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">laravel</p>
                        <div class="progress-con">
                            <p class="prog-text">30%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">bootstrap</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">My Timeline</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2010 - present</p>
                    <h5>Web Developer<span> - Marcosoft</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2010 - 2011</p>
                    <h5>SEO consulting<span> - Boogle, Inc.</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2016 - 2017</p>
                    <h5>Web developper<span> - ICM</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2009 - 2013</p>
                    <h5>Computer tech<span> - Coursera</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2013 - 2016</p>
                    <h5>IT specialiste<span> - Paris</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2021 - present</p>
                    <h5>UX desing<span> - Elearning</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
            </div>
        </section>
        <!-----------------------------===About Section End===------------------------------->

        <!-----------------------------===Portfolio Section Start===------------------------------->
        <section class="section sec3" id="portfolio">
            <div class="main-title">
                <h2>My <span>Portfolio</span><span class="bg-text">My Projects</span></h2>
            </div>
            <p class="port-text">
                Here is some of my work that I've done in various programming languages <span>Updating...</span>.
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/project1.png" alt="a portfolio project thumbnail">
                    </div>
                    <div class="hover-items">
                        <h3>Botstrap website Portfolio</h3>
                        <div class="icons">
                            <a href="https://hass-1.github.io/portfolio/" class="icon"
                                title="see this project on github" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-github"></i>
                            </a>

                            <a href="#" class="icon" title="find me on youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/projects/css-card.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github" title="github"></i>
                            </a>
                            <a href="#" class="icon" title="youtube" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/projects/jsAge.gif" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>JS Age converter</h3>
                        <div class="icons">
                            <a href="#" class="icon" title="github" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon" title="youtube" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-codepen"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/projects/css-card.png" alt="" >
                    </div>
                    <div class="hover-items">
                        <h3>CSS Card Hover effect</h3>
                        <div class="icons">
                            <a href="#" class="icon" title="github" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://codepen.io/hassan-tajiri/pen/LYdjJVr" class="icon" title="codepen" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-codepen"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/projects/cssLoading.gif" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>CSS Loader</h3>
                        <div class="icons">
                            <a href="#" class="icon" title="github" rel="noopener noreferrer">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://codepen.io/hassan-tajiri/pen/oNqwJwO" class="icon" title="youtube" rel="noopener noreferrer">
                                <i class="fab fa-codepen"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/placeholder.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon" title="github" rel="noopener noreferrer">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon" title="youtube" rel="noopener noreferrer">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/placeholder.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon" title="github" rel="noopener noreferrer">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon" title="youtube" rel="noopener noreferrer">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----------------------------===Portfolio Section End===------------------------------->

        <!-----------------------------===Blog Section Start===------------------------------->
        <section class="section sec4 " id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
                </div>
                <div class="blogs controlls">
                    <div class="blog" data-id="portfolio">
                        <img src="img/article1.png" alt="">
                        <div class="blog-text">
                            <h4>
                                How to Create Your Own Website
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus natus voluptas, eos
                                obcaecati recusandae amet?

                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/article2.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                How to Boost Your Business with SEO
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus natus voluptas, eos
                                obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/article3.jpg" alt=" responsive website image">
                        <div class="blog-text">
                            <h4>
                                Uderstand How to create a cross-platform website
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus natus voluptas, eos
                                obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/article4.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                This is what you need to know about Web Marketing and SEO
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus natus voluptas, eos
                                obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/article5.png" alt="">
                        <div class="blog-text">
                            <h4>
                                Get started with Web Design and UI Design
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus natus voluptas, eos
                                obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/article6.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Prototyping made easy with Figma
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus natus voluptas, eos
                                obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----------------------------===Blog Section End===------------------------------->

        <!-----------------------------===Contact Section Start===------------------------------->
        <section class="section sec5 contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact me here</h4>
                        <p>
                            Please let me know if you have any questions, and I will get back to you soon.
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>

                                <address>:57190 Florange, France</address>

                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: <a href="mailto:tajiri.hassan@gmail.com"
                                            title="my email adress">tajiri.hassan@gmail.com</a></span>
                                </p>
                            </div>

                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                    <span>Mobile Number</span>
                                </div>
                                <p>
                                    <span>: <a href="tel:+33695090625" title="my phone number">0695090625</a></span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Languages</span>
                                </div>
                                <p>
                                    <span>: Frensh, English, Arabic, Tamazight</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://www.linkedin.com/in/hassan-tajiri" target="_blank"
                                    title="find me on Linkedin" rel="noopener">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="https://github.com/HaSS-1" target="_blank" title="find me on Github"
                                    rel="noopener">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="https://gitlab.com/tajiri.hassan" target="_blank" title="follow me on Gitlab"
                                    rel="noopener">
                                    <i class="fab fa-gitlab"></i>
                                </a>
                                <a href="https://twitter.com/HassanTAJIRI1" target="_blank" title="follow me on Twitter"
                                    rel="noopener">
                                    <i class="fab fa-twitter"></i>
                                </a>


                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" required placeholder="YOUR NAME">
                                <input type="email" required placeholder="YOUR EMAIL">
                            </div>
                            <div class="input-control">
                                <input type="text" required placeholder="ENTER SUBJECT">
                            </div>
                            <div class="input-control">
                                <textarea name="" id="" cols="15" rows="8" placeholder="Message Here..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <a href="cv/Hassan TAJIRI_Developpeur_Web.pdf" class="main-btn" target="_blank"
                                    title="cv download link">
                                    <span class="btn-text">Download CV</span>
                                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-----------------------------===Contact Section End===------------------------------->
    </main>

    <div class="controlls">
        <div class="control  control-1 active-btn" data-id="home">
            <i class="fas fa-home"></i>
        </div>
        <div class="control control-2 " data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control control-3" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control control-4" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control control-5" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>

    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    

</body>

<script src="app.js"></script>
 <!--jQuery link-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</html>
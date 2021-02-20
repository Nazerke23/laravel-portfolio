<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="front/css/styles.css">
        

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio responsive complete</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        
        <main class="l-main">
        
            
            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="front/img/perfil.png" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">I'am Nazerke Kulan</h2>
                        <span class="about__profession">Sophomore student</span>
                        <p class="about__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci consectetur, architecto quas fugiat, iste inventore facere repellendus delectus id, vitae blanditiis.</p>

                        <div class="about__social">
                            <a href="#" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="#" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                            <a href="#" class="about__social-icon"><i class='bx bxl-dribbble' ></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <h3 class="skills__subtitle">Development</h3>
                        <span class="skills__name">Html</span>
                        <span class="skills__name">Css</span>
                        <span class="skills__name">Javascript</span>
                        <span class="skills__name">Scss</span>
                        <span class="skills__name">React</span>
                        <span class="skills__name">Vue</span>
                        
                        <h3 class="skills__subtitle">Design</h3>
                        <span class="skills__name">Figma</span>
                        <span class="skills__name">Adobe XD</span>
                        <span class="skills__name">Photoshop</span>
                    </div>

                    <div class="skills__img">
                        <img src="front/img/skill.jpg" alt="">
                    </div>
                </div>
            </section>

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section-title">Portfolio</h2>

                <div class="portfolio__container bd-grid">
                    <div class="portfolio__img">
                        <img src="front/img/work1.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="front/img/work2.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="front/img/work3.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="front/img/work4.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="front/img/work5.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="front/img/work6.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                </div>
            </section>


     
        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->

        <script src="/front/js/main.js"></script>
    </body>
</html>
<?php
 include 'header.php';
?>

    <title>Document</title>
</head>
<body class="body-hide">

<!-- header -------------->



    <!-- .show -->

    <div id="proj-name" class="show-proj">
        <img class="btn-x" src="img/x.png" alt="">
        <div class="proj-container">
            <div class="container-2">
                <div class="show-head">
                    <p>Vuex with Firebase Auth</p>
                    <div class="proj-links">
                        <a href="#">Github</a>
                        <a href="#">View Live</a>
                    </div>
                </div>
                <div class="owl-two owl-carousel owl-theme">
                    <div class="item">
                        <div class="divs">
                            <img src="img/proj1.PNG" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="divs">
                            <img src="img/proj1.PNG" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="divs">
                            <img src="img/proj1.PNG" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="divs">
                            <img src="img/proj1.PNG" alt="">
                        </div>
                    </div>
                </div>
                <div class="show-info">
                    <p class="proj-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac lobortis nunc, in feugiat magna. Nullam mauris nulla, tristique in porta interdum, sollicitudin quis nunc. Praesent a dolor dictum orci placerat interdum vel sit amet augue. Donec tincidunt libero quis lacus feugiat tincidunt. Nunc lacus metus, hendrerit eu lacinia sit amet, facilisis in arcu. Sed scelerisque, tortor sed dignissim cursus, massa erat dictum lacus, a accumsan justo nibh et tellus. Aenean ac eleifend est. Sed leo ante, rutrum sed odio in, tincidunt tincidunt erat.</p>
                    <div class="tech-used">
                        <h1>Technology Used</h1>
                        <div class="tech">
                            <p>HTML</p>
                            <p>CSS</p>
                            <p>Javascript</p>
                            <p>PHP</p>
                        </div>
                    </div>
                    <div class="app-feat">
                        <h1>Application Features</h1>
                        <div class="feat">
                            <p>LogIn System</p>
                            <p>CRUD</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- absolute pos -->
      <div class="bg-black"></div>
      <p class="low-opa">Vinrecs</p>
    <div class="sfm">
        <lottie-player class="arrDown" src="lottie/arrowDown.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop autoplay></lottie-player>
        <p>Scroll for more Details</p>
    </div>
    <div class="hid-nav">
        <ul>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#" class="clickable">Login</a></li>
        </ul>
    </div>

    <!-- headerpart -->

    <header>
        <div class="container">
            <div class="head">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                    <h1>Vin<span>recs</span></h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <?php 
                            if (isset($_SESSION['userid'])) {
                                echo "<li><a href='#' class='clickable'>Create</a></li>";
                                echo "<li><a href='includes/logout.inc.php' class='clickable'>Logout</a></li>";
                            }
                            else {
                                echo "<li><a href='login.php' class='clickable'>Login</a></li>";
                                echo "<li><a href='signup.php' class='clickable'>Sign Up</a></li>";
                            }
                        ?>
                    </ul>
                </nav>
                <img class="btn-nav" src="img/nav.png" alt="">
            </div>
        </div>
    </header>

    <section id="landingpage">
        <div class="container">
            <div class="main_page">
                <div class="feature">
                    <p>I'll help you build connections between your product and your target market.</p>
                    <p>Full Stack Web Developer </br> ~ Arvin Gomez</p>
                </div>
                <div class="com_guy">
                    <lottie-player id="comguy-lottie" src="lottie/samp.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </section>
    

    


    <section id="projects">
        <div class="container">
            <p class="page-Title">Projects</p>
            <div class="owl-container">
                <div class="owl-one owl-carousel owl-theme">
                    
                    <div class="item">
                        <div class="card">
                            <img src="img/proj1.PNG" alt="">
                            <div class="card-content">
                                <p>Vuex with Firebase Auth</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel neque consectetur, molestie leo ac</p>
                                <div class="btn">
                                    <button>View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card">
                            <img src="img/proj1.PNG" alt="">
                            <div class="card-content">
                                <p>Vuex with Firebase Auth</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel neque consectetur, molestie leo ac consectetur adipiscing elit. Nam vel neque consectetur, molestie leo ac consectetur adipiscing elit. Nam vel neque consectetur, molestie leo ac</p>
                                <div class="btn">
                                    <button>View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card">
                            <img src="img/proj1.PNG" alt="">
                            <div class="card-content">
                                <p>Vuex with Firebase Auth</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel neque consectetur, molestie leo ac</p>
                                <div class="btn">
                                    <button>View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card">
                            <img src="img/proj1.PNG" alt="">
                            <div class="card-content">
                                <p>Vuex with Firebase Auth</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel neque consectetur, molestie leo ac</p>
                                <div class="btn">
                                    <button>View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section id="about">
        <div class="container">
            <div class="abt-1">
                <div class="lottie-blob">
                    <lottie-player src="lottie/n1.json"  background="transparent"  speed="0.3"  style="width: 100%; height: 450px;"  loop autoplay></lottie-player>
                </div>
                <div class="abt-info">
                    <h1>About</h1>
                    <p>Hello! I am Arvin Gomez, a self-taught front-end web developer from Concepcion Tarlac and currently a second-year Computer Science undergraduate student. I enjoy building websites and learning new things at the same time.</p>
                    <p>The Vin from Vinrecs came from my first name and recs means records which is a list of my documents</p>
                    <p>At the moment, I'm currently working on personal projects in order to improve my skills and develop more great websites.</p>
                </div>
            </div>
            <div class="abt-2 flex">
                <div class="skills">
                    <h1>Skills</h1>
                    <div class="flex">
                        <p>HTML</p>
                        <p>CSS</p>
                        <p>Javascript</p>
                        <p>JQuery</p>
                        <p>Mysql</p>
                        <p>PHP</p>
                    </div>
                </div>
                <div class="design">
                    <h1>Design Tools</h1>
                    <div class="flex">
                        <p>AdobeXD</p>
                        <p>Adobe Photoshop</p>
                        <p>Adobe Illustrator</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <div class="flex-nowrap">
                <div class="get-touch">
                    <h1>Get in touch</h1>
                    <p>Name</p>
                    <input type="text" placeholder="e.g. Juan Dela Cruz">
                    <p>Email</p>
                    <input type="text" placeholder="e.g. Juan Dela Cruz">
                    <p>Message</p>
                    <textarea name="Message" placeholder="e.g. I want you on my team" cols="40" rows="5" required="" spellcheck="false"></textarea>
                    <input type="submit" value="Submit">
                </div>
                <div class="user-info">
                    <div class="social">
                        <h1>Social</h1>
                        <p><a href="http://facebook.com/vinrecs" target="_blank" >Facebook</a></p>
                        <p><a href="http://facebook.com/vinrecs" target="_blank" >Twitter</a></p>
                        <p><a href="http://facebook.com/vinrecs" target="_blank" >Instagram</a></p>
                        <p><a href="http://facebook.com/vinrecs" target="_blank" >LinkedIn</a></p>
                    </div>
                    <div class="service">
                        <h1>Service</h1>
                        <p>Web Development</p>
                        <p>Web Maintenance</p>
                        <p>Web Support</p>
                        <p>UI UX Design</p>
                    </div>
                    <div class="contact">
                        <h1>Contact</h1>
                        <p>+63-945-728-8111</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>© 2021 Vinrecs. All rights reserved</p>
    </div>






























    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.1/lottie.min.js" integrity="sha512-CWKGqmXoxo+9RjazbVIaiFcD+bYEIcUbBHwEzPlT0FilQq3TCUac+/uxZ5KDmvYiXJvp32O8rcgchkYw6J6zOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript" src="js/script.js"></script>


    <script>


        // $( ".btn-x" ).click(function() {
        //     $('#proj-name').hide();
        //     $('body').toggleClass('body-hide');
        // });
        $('body').toggleClass('body-hide');
        $('#proj-name').hide();


        $('.owl-one').owlCarousel({
            loop: false,
            margin:10,
            slideBy: 1,
            nav:true,
            navText: ["<div class='arrow-left prev-slide'></div>",
                "<div class='arrow-right next-slide'></div>"],
            responsive:{
                0:{
                    items:1,
                    nav: false,
                },
                800:{
                    items:2,
                    nav: false,
                    dotsEach: 1
                },
                1200:{
                    items:2,
                    dotsEach: 1
                }
            }
        })
        $('.owl-two').owlCarousel({
            loop: false,
            margin:10,
            responsive:{
                0:{
                    items:1,
                    nav: false
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })



        

        const svgCont = document.querySelector('.arrow-left');
        const svgCont1 = document.querySelector('.arrow-right');
        
        const animItem = bodymovin.loadAnimation({
            wrapper: svgCont,
            animType: 'svg',
            loop: false,
            autoplay: false,
            path: 'lottie/arrow.json'
        });
        const animItem1 = bodymovin.loadAnimation({
            wrapper: svgCont1,
            animType: 'svg',
            loop: false,
            autoplay: false,
            path: 'lottie/arrow.json'
        });

        svgCont.addEventListener('click', () => {
            animItem.setSpeed(2);
            animItem.goToAndPlay(0, true);
        })
        svgCont1.addEventListener('click', () => {
            animItem1.setSpeed(2);
            animItem1.goToAndPlay(0, true);
        })

    </script>


<!-- footer -------------->


<?php
 include 'footer.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Folio</title>
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <nav class="navbar">
        <div class="container flex">
            <a href="" class="site-brand">Port <span>Folio</span></a>
            <button id="navbar-show-btn" type="button" class="flex">
                <i class="fa fa-bars"></i>

            </button>
            <div id="navbar-collapse">
                <button type="button" id="navbar-close-btn" class="flex">
                    <i class="fa fa-times"></i>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="index.html" class="nav-link ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Service</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Work</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <section class="description">
        <div class="description-title">
            <h4>Hello !</h1>
                <h1><span>I'am</span> Fabrino Pierret</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A deserunt, accusamus doloribus quae esse
                    dolorem eum. Facere minus quae porro?</p>
                <div class="social">
                    <ul class="social-links">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>



        </div>
        <div class="description-img">
            <img src="image/image02.jpeg" alt="image">
        </div>
    </section>

    <section class="description">
        <div class="description-img border">
            <img src="image/image03.jpeg" alt="image">
        </div>
        <div class="description-title">
            <h1>About me</h1>
            <p class="info-info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas molestias nam
                consectetur minima eum pariatur laborum. Obcaecati deleniti ut labore totam rem adipisci! Facere
                officiis maxime quisquam explicabo ex error?</p>
            <div class="info">
                <label for="" class="info-type">Name </label><label for="" class="info-info"> : Rakotoharilalaina
                </label>
            </div>
            <div class="info">
                <label for="" class="info-type">Age </label><label for="" class="info-info"> : 23 </label>
            </div>
            <div class="info">
                <label for="" class="info-type">Address </label><label for="" class="info-info"> : Antsiranana </label>
            </div>
            <div class="info">
                <label for="" class="info-type">Phone number </label><label for="" class="info-info"> : +261 34 05 854
                    28 </label>
            </div>
            <div class="info">
                <label for="" class="info-type">Email </label><label for="" class="info-info"> :
                    rakotoharilalainafabrino@gmail.com </label>
            </div>
            <button type="button" class="look-cv">Look CV</button>
        </div>

    </section>



    <footer class="py-4">
        <div class="container footer-row">
            <div class="footer-item">
                <div class="question">
                    <h3>What We Do</h3>
                </div>
                <a href="index.html" class="site-brand">My <span>Service</span></a>
                <p class="text ">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero possimus rerum nemo quae sapiente,
                    ipsam tempora aspernatur dicta doloremque repudiandae quaerat illum praesentium error nam assumenda
                    consectetur obcaecati temporibus excepturi?
                </p>
                <div class="trais"></div>
            </div>
            <div class="footer-item flex">
                <div class="myService">
                    <h3>Web Development</h3>
                    <div class="text position info-info">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates vitae magni dignissimos ab,
                        culpa error quia cum adipisci quam rem.
                    </div>

                </div>
                <div class="myService">
                    <h3>App Mobile Dev</h3>
                    <div class="text position info-info">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates vitae magni dignissimos ab,
                        culpa error quia cum adipisci quam rem.
                    </div>
                </div>
                <div class="myService">
                    <h3>Intelligent Artificial</h3>
                    <div class="text position info-info">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates vitae magni dignissimos ab,
                        culpa error quia cum adipisci quam rem.
                    </div>
                </div>
            </div>

        </div>
    </footer>


    <script src="js/script.js"></script>
    <script>
        let video = document.querySelector('video-wrapper video');
        document.getElementById('play-btn').addEventListener('click', () => {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });
    </script>
</body>

</html>
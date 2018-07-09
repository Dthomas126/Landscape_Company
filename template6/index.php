<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/main.css" />
</head>

<body>
    <header class="header" role="banner">

        <img class="head-image" src="images/LawnPg.jpg">
        <div class="image-title">
            <h1>
                <div class="brown-text bold-in">DC</div> Lawns</h1>
            <p>Landscape design</p>
        </div>


        <nav class="navigation">
            <ul class="navbar">
                <li class="nav-item">Home</li>
                <li class="nav-item">About</li>
                <li class="nav-item">Gallery</li>

            </ul>
        </nav>
    </header>

    <main class="main" role="main">

        <article class="article container" role="article">
            <div class="container-padding">
            <section class="service ">

                <section class="service-group">
                    <div class="col1">
                        <img class="service-image" src="images/images.jpg">
                        <h2>Landscape Design</h2>
                        <p>More</p>
                    </div>
                    <div class="col2">
                        <img class="service-image" src="images/lawn1.jpg">
                        <h2>Garden Design</h2>
                        <p>More</p>
                    </div>
                    <div class="col3">
                        <img class="service-image" src="images/lawnMike-Lee_2622110k.jpg">
                        <h2>Plant Design</h2>
                        <p>More</p>

                    </div>
                </section>

            </section>
            <div class="clear"></div>
            <section class="about">
                <section class="about-header">
                    <h2>Head Title</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <br>
                    <p> At eveniet iusto, sit beatae similique sint, tempora. Lorem ipsum, dolor sit amet consectetur adipisicin
                        Nostrum rerum dolor vero delectus error porro consectetur, consequuntur obcaecati minima laborum!</p>
                    <br>
                    <p> blanditiis omnis magnam voluptate odit labore deserunt. Impedit ea dignissimos pariatur officiis nisi
                        neque.
                    </p>
                </section>
                <aside class="side-nav">
                    <h2>What We Do</h2>
                    <ul class="links">
                        <li>
                            <a>Front Yards</a>
                        </li>
                        <li>
                            <a>Backyards</a>
                        </li>
                        <li>
                            <a>Patios</a>
                        </li>
                        <li>
                            <a>Garden Paths</a>
                        </li>
                        <li>
                            <a>Steps & Stairs</a>
                        </li>

                    </ul>
                </aside>
                <div class="clear"></div>
            </section>



        </article>

        <section class="nav-footer">
            <div class="container">
                <section class="projects">
                    <div class="project-group">
                        <h2 class="center-text ">Projects</h2>
                        <img class="small-img service-image " src="images/lawn1.jpg" />

                    </div>
                </section>
                <section class="news ">
                    <h2 class="center-text">Latest News</h2>
                    <p class=" ">
                        <div id="time" class="center-text bronze"></div>
                    </p>
                    <p class="  padding-15">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quam in a repudiandae? Tenetur, natus.
                        Ipsa beatae reprehenderit fugiat saepe a modi quis neque sunt, quia possimus. Incidunt, facilis recusandae.</p>
                </section>
                <section class="news-letter">
                    <h2 class="center-text">Newsletter Sign Up</h2>
                    <div class="input-form">
                    <input type="text" class="news-input" placeholder="Enter your email here..."/>
                   <button class="news-btn" type="button">Send</button>
                    </div>
                </section>
                <div class="clear"></div>
        </section>
        </div>

    </main>
    <footer class="footer">
        <p>&copy; Company name</p>
    </footer>
</body>
<script>
    var date = document.getElementById('time');
    var myDate = new Date();
    var today = myDate.toLocaleDateString();
    date.innerText = today + "- Your Garden";
</script>

</html>
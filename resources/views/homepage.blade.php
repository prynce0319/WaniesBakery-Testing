<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Website</title>


    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Sans" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/portfolio.css')}}" />


</head>
<body>

    <div class="hero">
        <nav>
            <h2 class="logo">Portfo<span>lio</span></h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <a href="#" class="btn">Subscribe</a>
        </nav>
        <div class="content">
            <h4>Hello, my name is</h4>
            <h1>Prince <span>Ben-Smith</span></h1>
            <h3>I'm a Web Developer.</h3>
            <div class="newsletter">
                <form>
                    <input type="email" name="email" id="mail" placeholder="Enter your Email">
                    <input type="submit" name="submit" value="Let's Start">
                </form>
            </div>

        </div>
    </div>

    <!-- About section start--->
    <section class="about">
        <div class="main">
            <img src={{asset("img/people.jpg")}}>
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Developer <span>& Designer</span></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Dignissimos consectetur ex aliquid corrupti ab, nam deserunt aliquam nesciunt, laboriosam dolor tempore rem. 
                    Distinctio commodi illo expedita iusto aliquam reprehenderit cumque.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nihil esse officiis facere assumenda delectus vero cum dolore autem optio at obcaecati earum sed,
                    inventore asperiores, tempora voluptatum atque eum debitis.</p>
                <button type="button">Let's Talk</button> 
            </div>
        </div>
    </section>

    <!-- service section start---->
    <div class="service">
        <div class="title">
            <h2>Our Services</h2>
        </div>

        <div class="box">
            <div class="card">
                <i class="fa-solid fa-bars"></i>
                <h5>Web Development</h5>
                <div class="pra">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Totam repudiandae, tempora atque voluptate.
                        </p>

                    <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>

            </div>

            <div class="card">
                <i class="fa-regular fa-user"></i>
                <h5>Web Development</h5>
                <div class="pra">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Totam repudiandae, tempora atque voluptate.
                        </p>

                    <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>

            </div>

            <div class="card">
                <i class="fa-regular fa-bell"></i>
                <h5>Web Development</h5>
                <div class="pra">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Totam repudiandae, tempora atque voluptate.
                        </p>

                    <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>

            </div> 

        </div>
    </div>
    <!---- Contact Me--->
    <div class="contact-me">
        <p>Let Me Get You A Beautiful Website</p>
        <a class="button-two" href="#">Hire Me</a>"
    </div>

    <!--- Footer Start---->
    <footer>
        <p>Prince Ben-Smith</p>
        <p>For more HTML, CSS and Javascript - Please click on the link below to 
            subscribe to my channel:</p> 
        <div class="social">
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-dribbble"></i></a>
        </div>
        <p class="end">CopyRight By Prince Ben-Smith</p>
    </footer>

</body>
</html>
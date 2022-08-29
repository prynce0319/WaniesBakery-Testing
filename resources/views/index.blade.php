<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Alphayo Blog</title>
    <!-- Css -->
    <link rel="stylesheet" href={{asset('css/style.css')}} />
    <!-- Font awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    </head>

  <body>
    <div id="wrapper">
      <!-- header -->
      <header class="header">
        <div class="header-text">
          <h1>Wanies <span>Bakery</span></h1>
          <h4>Home of luxury cakes and pastries for all occasions...</h4>
        </div>
        <div class="overlay"></div>
      </header>

      <!-- sidebar -->
      <div class="sidebar">
        <span class="closeButton">&times;</span>
        <p class="brand-title"><a href="">Wanies <span>Bakery</span></a></p>

        <div class="side-links">
          <ul>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="blog.html"><i class="fa-solid fa-box"></i> Products</a></li>
            <li><a href="about.html"><i class="fa-solid fa-cart-flatbed"></i> Orders</a></li>
            <li><a href="about.html"><i class="fa-solid fa-money-bill-transfer"></i> Payment Order</a></li>
            <li><a href="about.html"><i class="fa-duotone fa-truck-ramp-box"></i>Inventory</a></li>
            <li><a href="about.html">Finances</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>

        <!-- sidebar footer -->
        <footer class="sidebar-footer">
          <div>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
          </div>

          <small>&copy 2022 PBS TechCorp.</small>
        </footer>
      </div>
      <!-- Menu Button -->
      <div class="menuButton">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <!-- main -->
      <main class="container">
        <h2 class="header-title">Latest Blog Posts</h2>
        <section class="cards-blog latest-blog">
          <div class="card-blog-content">
            <img src="{{asset('img/cake3.jpeg')}}"  width="200px" height="200px" alt="" />
            <p>
              2 hours ago
              <span style="float: right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html"
                >Benefits of Getting Covid 19 Vaccination</a
              >
            </h4>
          </div>

          <div class="card-blog-content">
            <img src="{{asset('img/cake6.jpeg')}}" width="200px" height="200px" alt="" />
            <p>
              23 hours ago
              <span style="float: right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html">Top 10 Music Stories Never Told</a>
            </h4>
          </div>

          <div class="card-blog-content">
            <img src="{{asset('img/cake4.jpeg')}}"  width="200px" height="200px" alt="" />
            <p>
              2 days ago
              <span style="float: right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html"
                >WRC Safari Rally Back To Kenya After 19 Years</a
              >
            </h4>
          </div>

          <div class="card-blog-content">
            <img src="{{asset('img/cake5.jpeg')}}" width="200px" height="200px" alt="" />
            <p>
              3 days ago
              <span style="float: right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html">Premier League 2021/2022 Fixtures</a>
            </h4>
          </div>
        </section>
      </main>

      <!-- Main footer -->
      <footer class="main-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>
        <small>&copy 2021 Alphayo Blog</small>
      </footer>
    </div>

    <!-- Click events to menu and close buttons using javaascript-->
    <script>
      document
        .querySelector(".menuButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "100%";
          document.querySelector(".sidebar").style.zIndex = "5";
        });

      document
        .querySelector(".closeButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "0";
        });
    </script>
  </body>
</html>

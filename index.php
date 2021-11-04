<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Perpajakan</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <style>
      
    html{

      scroll-behavior: smooth;

    }
.video{

  top:0;
  position:absolute;
  right:0;

}

video{

width: 100%;
height: 100vh;
position:absolute;
object-fit: cover;
left:0;
z-index:-1;
right:0;
top:0;

}
.active{

border-bottom:solid 4px white;


}

      .experience{

transition: all 2s;

}

.service{

transition: all 2s;

}

.paragraph{

transition: all 1s ease-in;
opacity: 0;

}
      .row .kotak .form{

max-width: 800px;
margin: -50px auto;
text-align: left;
padding: 20px 0;
transform: scale(0.9);

}

.row .kotak .form label{

font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
font-size: x-large;

}

button,input,label,textarea{

display: block;
margin: 0 auto;
width: 100%;
color: white;
font-size: large;

}


input,textarea{

background: transparent;
border: 0;
border-bottom: solid 4px black;


}
input:hover,textarea:hover{

border-bottom: solid 4px white;

}

button[type=submit]{

background: black;
padding: 10px 0;
margin-top: 15px;
color: white;
cursor: pointer;
border-bottom: none;
transition: all .2s ease-in;

}

button[type=submit]:hover{
background: darkred;  
transform: scale(1.05);  

}
input:focus,
textarea:focus{

outline:1px solid;

}
    </style>
    <link href="style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="picture/favicon/ms.png" />
    <!--??-->
    <!-- <link rel="shortcut icon" href="picture/favicon/apple.png">
        <link rel="shortcut icon" href="picture/favicon/android.png"> -->
  </head>
  <body>
    <!--container-fixed-->
    <div class="container-fixed">
      <!--row header-->
      <div class="row">
        <!--untuk header basis bootstrap framework-->
        <nav class="header col-lg-12 col-md-12 fixed-top bg-success">
          <div><h1 id="title">Kevin</h1></div>
          <ul id="head" class="text-white slide">
            <li class="btn"><a href="#profiles">Profil</a></li>
            <li class="btn"><a href="#experiences">Pengalaman kerja</a></li>
            <li class="btn"><a href="#services">Layanan</a></li>
            <li class="btn"><a href="#contacts">Hubungi</a></li>
          </ul>
          <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
          </div>
        </nav>
      </div>
    </div>
    <!--=================================-->
    <!--row profile-->
    <div id="profiles" class="profile row">
      <div class="col-lg-3 col-md-2"></div>
      <div class="col-lg-6 col-md-8"> 
        <div class="circle"></div>
        <div class="kotak">
          <br><br><br><br><br><br><br><br><br>
          <h1>Tentang | Saya</h1>
          <pre class="paragraph">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.Sapiente quo 
            architecto soluta incidunt magnam deleniti sequi, maiores voluptas, 
            molestiae eligendi animi?Obcaecati rem, quidem harum impedit eum odit 
            ratione commodi?

              Lorem ipsum, dolor sit amet consectetur adipisicing elit.Sapiente quo 
            architecto soluta incidunt magnam deleniti sequi, maiores voluptas, 
            molestiae eligendi animi?Obcaecati rem, quidem harum impedit eum odit 
            ratione commodi?
          </pre>
        </div>
      </div>
      <div class="col-lg-3 col-md-2"></div>
    </div>
    <!--=================================-->
    <!--row backheader-->
    <div class="row">
      <div class="video col-lg-12 col-md-12 col-sm-12">  
      <video src="backHeader.mp4" type="video/mp4" autoplay muted loop>
        </video> 
        </div>
    </div>
    <!--==============-->
    <br><br><br><br><br><br><br>
    <center><h1 id="experiences" class="experience">Pengalaman</h1></center>
    <!--row cardview-->
    <div class="row mt-5 d-lg-flex justify-content-lg-center d-md-flex justify-content-md-center d-sm-flex justify-content-sm-center">
      <div class="card col-lg-3 col-md-4 col-sm-5 mx-lg-4 mx-md-4">
        <img src="picture/backheader.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">keterangan</p>
        </div>
      </div>
      <div class="card col-lg-3 col-md-4 col-sm-5 mx-lg-4 mx-md-4">
        <img src="picture/backheader.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">keterangan</p>
        </div>
      </div>
      <div class="card col-lg-3 col-md-4 col-sm-5 mx-lg-4 mx-md-4">
        <img src="picture/backheader.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">keterangan</p>
        </div>
      </div>
      <div class="card col-lg-3 col-md-4 col-sm-5 mx-lg-4 mx-md-4">
        <img src="picture/backheader.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">keterangan</p>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br>
    <center><h1 id="services" class="service">Melayani</h1></center>
    <!--====================================-->
    <!--experiences 1-->
    <div class="row mt-5 d-lg-flex justify-content-lg-center d-md-flex justify-content-md-center">
        <div class="kotak2 bg-dark col-lg-5 col-md-5 col-sm-12"></div>
        <div class="kotak2 bg-primary col-lg-5 col-md-5 col-sm-12"></div>
    </div>
    <!--experiences 2-->
    <div class="row mb-5 d-lg-flex justify-content-lg-center d-md-flex justify-content-md-center">  
      <div class="kotak2 bg-success col-lg-5 col-md-5 col-sm-12"></div>
      <div class="kotak2 bg-warning col-lg-5 col-md-5 col-sm-12"></div>
    </div>    
    <!--====================================-->
    <center><h1 id="contacts">kontak dan hubungi</h1></center>
    
    <div class="row mt-5 mb-5">
      <div class="kotak col-lg-12 col-md-12 bg-green">
      <form class="form text-white col-md-12 d-md-block " action="https://formsubmit.co/chalsenhryvie@gmail.com" method="POST">
          <label for="name">masukan nama :</label>
          <input type="text" name="name" id="name" required>
          <input type="hidden" name="_next" value="http://haryavieportofolio.lovestoblog.com/thanks.html">
          <label for="email">masukan email :</label>
          <input type="hidden" name="_subject" value="email dari client!">
          <input type="email" name="email" id="email" required>
          <label for="noHP">nomor Handphone :</label>
          <input type="hidden" name="_captcha" value="false">
          <input type="number" min="0" max="1000000000000" name="noHP" id="noHP" required>
          <label for="subject">subjek :</label>
          <input type="text" name="subject" id="subject" required>
          <label for="message">masukan catatan :</label>
          <textarea name="message" id="message" cols="30" rows="10" required></textarea>
          <button type="submit" name="submit">kirim</button>
        </form>
      </div>
    </div>
  <!-- End of .container -->
    </div>
 <!-- Footer-->
   <!-- Footer-->
   <footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Lokasi</h4>
                <p class="lead mb-0">
                    2215 John Daniel Drive
                    <br />
                    Clark, MO 65243
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Media Sosial</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Tentang kami</h4>
                <p class="lead mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, esse, debitis quaerat porro culpa eius necessitatibus exercitationem sequi omnis, ad illo asperiores accusantium reprehenderit est consequuntur! Similique excepturi iste ullam!</p>
                </p>
            </div>
        </div>        
    </div>
</footer>
    
    <script type="text/javascript">

      //header respon
      const nav1 = document.querySelector("nav");
      const nav2 = document.getElementById("title");

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 2) {
          nav2.classList.add("text-white");
          nav1.classList.add("bg-success", "shadow");
          nav2.classList.remove("text-dark");
        } else {
          nav2.classList.add("text-dark");
          nav2.classList.remove("text-white");
          nav1.classList.add("bg-success", "shadow");
        }
      });

      //=========================================
      const menuToggle = document.querySelector(".menu-toggle input");
      const nav = document.querySelector("nav ul");

      menuToggle.addEventListener("click", function () {
        nav.classList.toggle("slide");
      });

      //animated
      //experience
      const experience = document.querySelector(".experience");

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 300) {
          experience.classList.add("text-dark","mb-lg-2","mb-md-2","mb-sm-2");
          experience.classList.remove("text-white","mt-lg-2","mt-md-2","mt-sm-2");
          } else {
          experience.classList.add("text-white","mt-lg-2","mt-mt-2","mt-sm-2"); 
          experience.classList.remove("text-dark","mb-lg-2","mb-md-2","mb-sm-2"); 
        }
      });

      //services
      const service = document.querySelector(".service");

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 1200) {
          service.classList.add("text-dark","mb-lg-2","mb-md-2","mb-sm-2");
          service.classList.remove("text-white","mt-lg-2","mt-mt-2","mt-sm-2");
          } else {
          service.classList.add("text-white","mt-lg-2","mt-mt-2","mt-sm-2"); 
          service.classList.remove("text-dark","mb-lg-2","mb-md-2","mb-sm-2"); 
        }
      });
      //paragraph
      const paragraph = document.querySelector(".paragraph");
      window.onload = function() {
        paragraph.style.opacity="100%";

      }
      // Add active class to the current button (highlight it)
      var header = document.getElementById("head");
      var btns = header.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        if (current.length > 0) { 
          current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
        });
      }

        
    </script>
  </body>
</html>

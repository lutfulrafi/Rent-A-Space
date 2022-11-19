<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Rent-A-Space</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

</head>

<body>
  <header class="header" id="navigation-menu">
    <nav>
        <a href="index.html"><img src="logon.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <!-- <li><a href="login.html">LOG IN</a></li>
                    <li><a href="register.html">REGISTER</a></li> -->
                    <li><a href="userLogIn.php">LOG IN</a></li>
                    <li><a href="userRegister.php">REGISTER</a></li>


                    <li><a href="">CONTACT US</a>
                        <ul>
                            <li><a href="#">Phone: +880 1622789888</a></li>
                            <li><a>Email: info@rentaspace.bd</a></li>
                            <li><a>Fax: 934 2009</a></li>
                        </ul>
                    
                    </li>
                </ul>

            </div>
    </nav>
  </header>

  <section class="home" id="home">
    <div class="head_container">
      <div class="box">
        <div class="text">
          <h1>Rent-A-Space</h1>
          <h2>  Your one step solution to finding reasonable and world class accomodation!</h2>
        </div>
      </div>
      <div class="image">
        <img src="image/home.png" class="slide">
      </div>
      <div class="image_item">
        <img src="image/home.png" alt="" class="slide active" onclick="img('image/home.png')">
        <img src="image/home3.jpg" alt="" class="slide" onclick="img('image/home3.jpg')">
        <img src="image/home4.jpg" alt="" class="slide" onclick="img('image/home4.jpg')">
      </div>
    </div>
  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.image');
      line.style.background = change;
    }
  </script>
  <section class="book">
    <div class="container flex">
      <div class="input grid">
        <div class="box">
          <label>Check-in:</label>
          <input type="date" placeholder="Check-in-Date">
        </div>
        <div class="box">
          <label>Check-out:</label>
          <input type="date" placeholder="Check-out-Date">
        </div>
        <div class="box">
          <label>Adults:</label> <br>
          <input type="number" placeholder="0">
        </div>
        <div class="box">
          <label>Children:</label> <br>
          <input type="number" placeholder="0">
        </div>
      </div>
      <div class="search">
        <input type="submit" value="SEARCH">
      </div>
    </div>
  </section>
  <section class="wrapper top">
    <div class="container">
      <div class="text">
        <h2>Our Features</h2>
        <p>Our website aims to give people looking for world-class accomodation without having to pay the high prices charged by hotels. To know the features offered by a host, the icons below can be useful to the guests:</p>

        <div class="content">
          <div class="box flex">
            <i class="fas fa-swimming-pool"></i>
            <span>Swimming pool</span>
          </div>
          <div class="box flex">
            <i class="fas fa-dumbbell"></i>
            <span>Gym & yogo</span>
          </div>
          <div class="box flex">
            <i class="fas fa-spa"></i>
            <span>Spa & massage</span>
          </div>
          <div class="box flex">
            <i class="fas fa-ship"></i>
            <span>Boat Tours</span>
          </div>
          <div class="box flex">
            <i class="fas fa-swimmer"></i>
            <span>Surfing Lessons</span>
          </div>
          <div class="box flex">
            <i class="fas fa-microphone"></i>
            <span>Conference room</span>
          </div>
          <div class="box flex">
            <i class="fas fa-water"></i>
            <span>Diving & smorking</span>
          </div>
          <div class="box flex">
            <i class="fas fa-umbrella-beach"></i>
            <span>Private Beach</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="room top" id="room">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>RAISING COMFORT TO THE HIGHEST LEVEL</h5>
          <h2>Book from our highest rated rooms</h2>
        </div>
        <div class="button">
          <button onclick="location.href = 'toprated.html';"class="btn1">VIEW ALL</button>
        </div>
      </div>

      <div class="content grid">
        <div class="box">
          <div class="img">
            <img src="image/bedroom1.png" alt="">
          </div>
          <div class="text">
            <h3>Rafit's Villa</h3>
            <p> <span>Tk.</span>5,000<span>/per night</span> </p>
          </div>
          <div class="button">
            <button class="viewroom">VIEW ROOM</button>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/bedroom2.png" alt="">
          </div>
          <div class="text">
            <h3>Shadid's Cottage</h3>
            <p> <span>Tk.</span>4,000<span>/per night</span> </p>
          </div>
          <div class="button">
            <button class="viewroom">VIEW ROOM</button>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/bedroom3.png" alt="">
          </div>
          <div class="text">
            <h3>Sunmoon Hotel</h3>
            <p> <span>Tk.</span>5,500<span>/per night</span> </p>
          </div>
          <div class="button">
            <button class="viewroom">VIEW ROOM</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionIHeading');

    for (i = 0; i < accHD.length; i++) {
      accHD[i].addEventListener('click', toggleItem, false);
    }

    function toggleItem() {
      var itemClass = this.parentNode.className;
      for (var i = 0; i < accItem.length; i++) {
        accItem[i].className = 'accordionItem close';
      }
      if (itemClass == 'accordionItem close') {
        this.parentNode.className = 'accordionItem open';
      }
    }
  </script>



  <section class="gallary mtop " id="gallary">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h2>Select rooms from cities using RENT-A-Space</h2>
          <p><p></p></p>
        </div>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="image/dhaka.png" alt="">
          <div class="description-city">
            <p>Dhaka</p>
          </div>
        </div>
        <div class="item">
          <img src="image/cox.png" alt="">
          <div class="description-city">
            <p>Cox's Bazar</p>
          </div>
        </div>
        <div class="item">
          <img src="image/chittagong.png" alt="">
          <div class="description-city">
            <p>Chittagong</p>
          </div>
        </div>
        <div class="item">
          <img src="image/sylhet.png" alt="">
          <div class="description-city">
            <p>Sylhet</p>
          </div>
        </div>
        <div class="item">
          <img src="image/barishal.png" alt="">
          <div class="description-city">
            <p>Barishal</p>
          </div>
        </div>
        <div class="item">
          <img src="image/sundarban.png" alt="">
          <div class="description-city">
            <p>Sundarban</p>
        </div>
        </div>
        <div class="item">
          <img src="image/khulna.png" alt="">
          <div class="description-city">
            <p>Khulna</p>
        </div>
        </div>
        <div class="item">
          <img src="image/rajshahi.png" alt="">
          <div class="description-city">
            <p>Rajshahi</p>
        </div>
        </div>
      </div>

    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>



  <section class="map top">
    <div class="mapouter"><div class="gmap_canvas"><iframe width="966" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=Jamuna%20Future&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:450px;width:966px;}</style><a href="https://www.embedgooglemap.net">embed google maps in gmail</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:966px;}</style></div></div>
  </section>


  <footer>
      <div class="box">
        <h3>Contact Us</h3>

        <ul>
          <li>85/3, Itkhola Bazar, East Kazipara, Mirpur, Dhaka</li>
          <li><i class="far fa-envelope"></i>rentaspace@gmail.com </li>
          <li><i class="far fa-phone-alt"></i> +880 1622789888</li>
          <li><i class="far fa-phone-alt"></i> +880 1937898169</li>
          <li><i class="far fa-comments"></i>24/ 7 Customer Services </li>
        </ul>
      </div>
    </div>
  </footer>
</body>

</html>
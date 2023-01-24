<!DOCTYPE html>
<html lang="en">

  <head>
    <title>EasyShadi</title>
    <link rel="stylesheet" href="guestassests/css/bootstrap.min.css">
    <link rel="stylesheet" href="guestassests/css/main.css">
    <link rel="stylesheet" href="guestassests/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  </head> 

  <body>



<!-- ------navbar------- -->
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0 ">
        <nav class="navbar navbar-expand-lg navbar-dark custom-guest-nav ">
          <a class="navbar-brand" href="#"><span>Easy</span>Shadi</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/home">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/ijtamai-shaadi">Ijtamai Shadi</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/signup">Signup</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>



@section('guest-content')
@show





    <!-- =============footer---------------- -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h5>TWOHEARTS</h5>
            <p>Far far away, behind the word mountains, far from the countries.</p>
            <ul class="footer-social">
              <li>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>LINK</h5>
            <ul class="footer-links">
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Home</a></li>
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Groom & Bride</a></li>
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Story</a></li>
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Greetings</a></li>
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> People</a></li>
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Where & When</a></li>
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> RSVP</a></li>
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Gallery</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>SERVICES</h5>
            <ul class="footer-links">
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Organizer</a></li>
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Venue</a></li>
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Wedding Ceremony</a></li>
              <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Accomodation</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>HAVE A QUESTION?</h5>
            <ul class="footer-contact">
              <li><a href="javascript:void()"><i class="fa fa-map-marker" aria-hidden="true"></i>
                  <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                </a> </li>
              <li><a href="tel:23923929210"><i class="fa fa-phone" aria-hidden="true"></i>
                  <p> +2 392 3929 210</p>
                </a></li>
              <li><a href="mailto:info@yourdomain.com"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                  <p> info@yourdomain.com</p>
                </a></li>
            </ul>
          </div>
        </div>
      </div>

    </footer>


    <script src="guestassests/js/jquery.min.js"></script>
    <script src="guestassests/js/bootstrap.min.js"></script>
    <script src="guestassests/js/owl.carousel.min.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 5
          }
        }
      })
    </script>
  </body>

</html>
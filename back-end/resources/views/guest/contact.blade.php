@extends('layouts.guest_layout')
@section('guest-content')

<section class="sec-contact">



    <div class="sec-contact-inner">

        <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="navbar-brand" href="#"><span>Easy</span>Shadi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Gallery</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Signup</a>
                </li>
              </ul>
            </div>
          </nav>

          <div class="container cntnt-contact">
            <div class="row">
                <div class="col-md-3">
                    <div class="cntct-crd">
                        <span>
                            <i class="fa fa-map-marker"></i>
                        </span>
                        <h6>OUR MAIN OFFICE</h6>
                        <P>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</P>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cntct-crd">
                        <span>
                            <i class="fa fa-phone"></i>
                        </span>
                        <h6>PHONE NUMBER</h6>
                        <P>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</P>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cntct-crd">
                        <span>
                            <i class="fa fa-mobile"></i>
                        </span>
                        <h6>MOBILE</h6>
                        <P>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</P>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cntct-crd">
                        <span>
                            <i class="fa fa-envelope"></i>
                        </span>
                        <h6>EMAIL</h6>
                        <P>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</P>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="/save-contact" method="POST">
                            @csrf
                            <label for="">Email</label>
                            <input name="email" type="email" placeholder="Enter your email address"/>

                            <label for="">Name</label>
                            <input name="name" type="text" placeholder="Enter your name"/>

                            <label for="">Message</label>
                            <textarea name="message" placeholder="Enter your message"></textarea>

                            <input type="submit" value="submit">

                    
                        </form>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="cont-content">
                        <h2>GET IN TOUCH</h2>
                        <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis repudiandaLorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis repudianda</P>
                        <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis repudiandaLorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis repudianda</P>
                        
                        <div class="social-icon">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
          </div>
    </div>

</section>


@stop
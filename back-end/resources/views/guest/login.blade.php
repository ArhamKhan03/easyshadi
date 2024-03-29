@extends('layouts.guest_layout')
@section('guest-content')

<section class="sec-login">


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


      <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="login-content">
                    <div>
                        <h2>
                            Lorem ipsum dolor sit amet.

                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos perferendis temporibus corporis quisquam, animi quasi rem nulla cupiditate praesentium ad, in distinctio mollitia excepturi at!
                        </p>

                    </div>
                </div>

            </div>

            <div class="col-md-5">
                <div class="login-container">
                    <h4>Signin to Easyshadi</h4>

                    <form action="" class="form-login">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <button>
                            Sign in
                        </button>

                    </form>

                    <p class="login-signup">
                        Don't have an account?
                        <a href="#">SIGNUP</a>
                    </p>

                    <hr class="mt-3">

                    <div class="login-social-sec pt-3">
                        <p class="w-100">
                            or sign in with
                        </p>
                        <div class="w-100 text-right">
                            <a href="#">
                                <i class="fa fa-google"></i>
                            </a>

                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

      </div>

</section>

@stop
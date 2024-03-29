@extends('layouts.guest_layout')
@section('guest-content')


<section class="sec-signup">


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


      <div class="sng-up-cntr">
        <h3>Create Account</h3>
        <form action="">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <span>Already have an account <a href="login.html">Login</a></span>
            <input type="submit" value="Sign Up">
        </form>
      </div>
      

</section>

@stop
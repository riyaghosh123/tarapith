<?php require "./components/head.php" ?>

<header id="header" class="header-cng">
  <div class="container">
    <div id="logo" class="pull-left">
      <h1>
        <a href="./#body"><img src="img/logos.webp" alt="" title="" /></a>
        <a href="./#body">TaraPith</a>
      </h1>
    </div>

    <nav id="nav-menu-container" class="navbar">
      <ul class="nav-menu menu-size">
        <li class="nav-item menu-active"><a href="./#body" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="./#hotel" class="nav-link">Hotel</a></li>
        <li class="nav-item"><a href="./#cab" class="nav-link">Cab </a></li>
        <li class="nav-item"><a href="./#purohit" class="nav-link">Puja Booking</a></li>
      </ul>
    </nav>

    <nav id="mobile-nav-menu-container" class="mobile-navbar navbar">
      <ul class="nav-menu nav-items">
        <li class="nav-item"><a href="./" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="./#hotel" class="nav-link">Hotel</a></li>
        <li class="nav-item"><a href="./#cab" class="nav-link">Cab </a></li>
        <li class="nav-item"><a href="./#purohit" class="nav-link">Puja Booking</a></li>
        <li class="rg" data-toggle="modal" data-target="#exampleModalCenter2"><a href="#!">Registration</a></li>
        <li class="lg" data-toggle="modal" data-target="#exampleModalCenter"><a href="#!">Login</a></li>
      </ul>
    </nav>

    <nav id="nav-menu-container" class="navbar">
      <ul class="nav-menu">
        <li class="button-cng mr-2" data-toggle="modal" data-target="#exampleModalCenter2"><a href="#!">Registration</a>
        </li>
        <li class="dropdown button-cng" data-toggle="modal" data-target="#exampleModalCenter"><a href="#!">Login</a>
      </ul>
    </nav>
    <!-- #nav-menu-container -->
  </div>
</header>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-sky">Login</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="register.php" method="POST">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
          </div>
          <div class="form-group">
            <label for="phn">Phone No</label>
            <input type="text" class="form-control" id="phn" placeholder="Phone No" name="ph.no">
          </div>
          <div class="form-group">
            <label for="whn">Whatsapp No</label>
            <input type="text" class="form-control" id="whn" placeholder="Whatsapp no" name="what.no">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
            
          </div>
          <div class="form-group">
            <label for="cnfpass">Confirm Password</label>
            <input type="password" class="form-control" id="cnfpass" placeholder="Confirm Password" name="cpass">
          </div>
        </form>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sky" name="register">Register</button>
      </div>
    </div>
  </div>
</div>

 
<?php

$login = false;

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
     <div class="container-fluid bg-body-tertiary d-flex align-items-center>
          <a class="navbar-brand d-flex align-items-center" href="#">
               <div class="d-flex align-items-center">
                    <img src="./src/icon/courthouse.png" class="nav-img d-sm-block d-none ">
                    <p class="p-0 ps-1 m-0">WEBBANK</p>
               </div>
          </a>
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  " id="navbarText">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#">Pricing</a>
                    </li>
               </ul> -->

               <?php if($login){ ?>

               <div class="btn-group">
                    <button type="button" class="border border-0 bg-body-tertiary " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                         <img src="./src/icon/user.jpg" class="nav-img shadow-lg" alt="User Profile Icon">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end mt-2 p-0">
                         <li><p class="m-1 px-3 py-1 text-center fs-5">User12343647</p></li>
                         <hr class="hr p-0 m-0" />
                         <li class="position-relative"><p class="my-1 px-5 text-center ">$130.75</p><a href="" class=" position-absolute top-50 translate-middle" style="right:1%"><i class="h-r-90 fa-solid fa-plus"></i></a></li>
                         <hr class="hr p-0 m-0" />
                         <li><button class="dropdown-item" type="button">History</button></li>
                         <li><button class="dropdown-item" type="button">Balance</button></li>
                         <li><button class="dropdown-item" type="button">Logout</button></li>
                    </ul>
               </div>

               <?php }else{ ?>

                    <div class="btn-group">
                    <a href="./login.php">Login <img src="./src/icon/nonlogin.png" class="nav-img shadow-lg p-1 ms-2 border border-5 h-s-105" alt="User Profile Icon"></a>
               </div>

               <?php } ?>

          </div>
     </div>
</nav>
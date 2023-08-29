<section>
  <nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="farmerIndex.php">Krishi<span class="text-warning" style="font-size:1.5em;">M</span>art</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <a class="navbar-brand" href="farmerIndex.php"><span class="text-warning" style="font-size:1.7em;">F</span>ARMER<span class="text-warning" style="font-size:1.7em;">P</span>ANNEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> &nbsp &nbsp &nbsp
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

      </li>
         
        <li class="nav-item active">
          <a class="nav-link" href="farmerIndex.php">Home <span class="sr-only">(current)</span></a>
        </li>


       
        <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#service" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
        <li class="nav-item">
          <a class="nav-link" href="farmerIndex.php#service">Service</a>
        </li>
      <!--   <li class="nav-item">
          <a class="nav-link" href="index.php#contact">About</a>
        </li>
 -->
        <li class="nav-item">
          <a class="nav-link" href="farmerIndex.php#contact">Contact-Us</a>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="farmerIndex.php">farmer</a>
        </li> -->

        <?php
        if (!isset($_SESSION['mobile'])) {
          ?>


<!-- <li class="nav-item" >
            <a  class="nav-link text-light font-weight-bold" href="admin/userInfo.php">
              user information &nbsp<i class="fa fa-user text-light"></i></a>
            </li>


            <li class="nav-item" >
            <a  class="nav-link text-light font-weight-bold" href="admin/machineOrder.php">
               machine orders &nbsp<i class="fa fa-user text-light"></i></a>
            </li>


            <li class="nav-item" >
            <a  class="nav-link text-light font-weight-bold" href="admin/cusOrders.php">
               customer orders &nbsp<i class="fa fa-user text-light"></i></a>
            </li> -->



           

          <li class="nav-item" >
            <a class=" nav-link text-light font-weight-bold" data-toggle="modal" data-target="#fmyModal">
              Signup &nbsp<i class="fa fa-user text-warning"></i>
            </a>


            


          </li>
          <li class="nav-item" >
            <a  class="nav-link text-light font-weight-bold" data-toggle="modal" data-target="#fmyModal1">
              Login &nbsp<i class="fa fa-user text-light"></i></a>
            </li>


            <!-- <li class="nav-item" >
            <a  class="nav-link text-light font-weight-bold" data-toggle="modal" data-target="#myModal101">
              farmer_signup &nbsp<i class="fa fa-user text-light"></i></a>
            </li>

            <li class="nav-item" >
            <a  class="nav-link text-light font-weight-bold" data-toggle="modal" data-target="#myModal200">
              farmer_Login &nbsp<i class="fa fa-user text-light"></i></a>
            </li> -->


            <!-- <li class="nav-item" >
            <a  class="nav-link text-light font-weight-bold"   href ="admin/admin_login.php">
              ADMIN_Login &nbsp<i class="fa fa-user text-light"></i></a>
            </li> -->
            

            <?php
          }
          else
          {
            ?>
            <li class="nav-item" id="signup1">
              <a href="index.php" role="button" class="text-light btn btn-danger"><i class="fa fa-user">&nbsp;&nbsp;</i><span class="text-white">Logout</span>
              </a>
            </li> 
            <?php  
          }
          ?>
        </ul>
      </div>
    </nav>
  </section>
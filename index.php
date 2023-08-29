<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>


  <title>Krushi Mart</title>
  <meta name="google-site-verification" content="JqRq3cNcljKpl-E3YQqiyhAc-ifAdYpSvFV7VJ_-z8I" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <?php include "assets/csslink.php"?>
  <?php include "assets/jslink.php"?>
  <link rel="stylesheet" type="text/css" href="font.css">
</head>
<body  style="background: #232427" data-spy="scroll" data-target=".navbar" data-offset="50">

  <div class="main">
    <div class="mainbg">

      <div>
       <?php include 'navbar.php' ?>
     </div>
     <!-- Sign up Pop-up -->
     <div class="modal" id="myModal">
      <div class="modal-dialog ">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Sign Up</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="buyer1">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <form action="user_registration.php" id="mform" method="POST">
                      <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control p-3 mb-2" required>
                      <div class="error11 text-danger"></div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                      <input type="text" name="lname" id="lname" placeholder=" Last Name" class="form-control p-3 mb-2"required>
                      <div class="error12 text-danger"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-lg-6">
                      <input type="text" name="mobile" id="mobile" placeholder=" Mobile Number" class="form-control p-3 mb-2" required>
                      <div class="error13 text-danger"></div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                      <input type="email" name="email" id="email" placeholder=" Email" class="form-control p-3 mb-2" required>
                      <div class="error14 text-danger" ></div>
                    </div>
                  </div>
                  <div class="">
                    <input type="password" name="password" id="password" placeholder="password" class="form-control mb-2 p-3"required>
                    <div class="error15 text-danger"></div>
                  </div>
                  <div class="">
                    <textarea  name="address" id="address" class="form-control p-2 mb-2" placeholder="address" required></textarea>
                    <div class="error16 text-danger"></div>
                  </div>
                  <div class="error text-danger"></div>
                </div>
              </form>
              <div class="fb">
                <div class="row">
                  <div class="col-md-2 col-lg-2">
                  </div>
                </div>
              </div>
            </div>
                <!--     <div class="farmer1">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="fname1" id="fname1" placeholder="First Name" class="form-control p-3 mb-2" required>
                        <div class="error1 text-danger"></div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="lname1" id="lname1" placeholder=" Last Name" class="form-control p-3 mb-2" required>
                        <div class="error2 text-danger"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <input type="text" name="mobile1" id="mobile1" placeholder=" Mobile Number" class="form-control p-3 mb-2" required>
                        <div class="error3 text-danger"></div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                        
                        <input type="text" name="password1" id="password1" placeholder="password" class="form-control mb-2 p-3" required>
                        
                        <div class="error4 text-danger"></div>
                      </div>
                    </div>
                    <div class="">
                      <textarea  name="address1"  id="address1" class="form-control p-2 mb-2" placeholder="address" required></textarea>
                      <div class="error5 text-danger"></div>
                    </div>
                    <div class="error text-danger"></div>
                  </div>
                  <div class="fb">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                      </div>
                    </div>
                  </div>
                </div> -->
                <!--  <div class="row">
                  <div class="col-md-2 col-lg-2">
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <span class="fr">Farmer&nbsp&nbsp</span><input type="radio" name="rdb"  id="farmer" checked="1">
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <span class="by">Buyer  &nbsp</span><input type="radio" class="" name="rdb"  id="buyer" >
                  </div>
                </div> -->
                <!-- Modal footer -->
                <div class="modal-footer">
                  <!-- <button type="button" id="button1" name="login" class="btn btn-success button1">Submit1</button> -->
                  <button type="button" id="button2" name="login" class="btn btn-warning button2">Register</button>
                  <button type="button" class="btn btn-danger d-inline" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>

        <!-- Button to Open the Modal -->
        <!-- Login pop-Up -->
        <div class="modal" id="myModal1">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Sign In</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <div class="card-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="mobile" id="mobile1" placeholder="Enter Username as mobile number" class="form-control" required="">
                    <span class="errorl1 text-danger"></span>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password1" placeholder="Enter password" class="form-control" required>
                    <span class="errorl2 text-danger"></span>
                  </div>
                  <span class="errorl text-danger"></span>
                  <a href="forgot.php" id="forgot">Forgot Passowrd??</a>
                </div>
              </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="bg-transparent text-center">
                <button type="button" id="login" name="login" class="btn btn-primary login btn-block">Login</button>
              </div>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
          <div class="msg"></div>
        </div>
      </div>
    </section>





    <div id="home" class="caraouselbg">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active" id="demo" >
            <img src="img/k23.jpeg" class="img02" alt="Los Angeles"  style="object-fit: cover;" width="1520px"  height="600px" >
            <div class="carousel-caption">
              <h1 class="font-weight-bold" style="font-size: 5em;">Digital Farming</h1>
              <p style="font-size: 2em;">Now Made its Easier</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/k27.jpeg" alt="Chicago" style="object-fit: cover" width="1520px" height="600px" >
            <div class="carousel-caption">
              <h1 class="font-weight-bold"style="font-size: 5em;">Pesticides</h1>
              <p style="font-size: 2em;">The Pesticide That Help to Grow</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/k28.jpeg" alt="New York" style="object-fit: cover" width="1520px" height="600px">
            <div class="carousel-caption">
              <h1 class="font-weight-bold"style="font-size: 5em;">Digital Market</h1>
              <p style="font-size: 2em;">Brings Million of Smiles</p>
            </div>
          </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a> -->
      </div>
    </div>
  </section>
</div>
</div>


<!-- --------------------------services-------------------------------- -->

<section >
  <div class="container">
    <div class="service  mt-3" id="service">
      <div class="serviceheader">
        <h1>Services</h1>
        <p>Service That help To Grow More</p>
      </div>
      <div class="servicebody">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12 mb-3 ">
            <div class="containers">

              <div class="cards">
                <div class="card-body">
                  <div class="content">
                    <h2><i class="fa fa-ticket"></i></h2>
                    <h3>Government Schemes</h3>
                    <p>The Ministries of the Government of India have come up with various government programs called schemes(Yojana). </p>

                    <a class="sb"href="#">Know More</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
<!--           
          <div class="col-lg-4 col-md-6 col-12 mb-3  ">
            <div class="containers">
              <div class="cards">
               <div class="card-body ">
                <div class="content">
                  <h2><i class="fa fa-bookmark"></i></h2>
                  <h3>Rent Equipments</h3>
                  <p>Farmer can rent their equipments and tools and they can choose valid rent price for particular time limit. </p>

                  <a class="pb"href="addmachine.php">Know More</a>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-3 ">
          <div class="containers">
            <div class="cards">

              <div class="card-body ">
                <div class="content">
                  <h2><i class="fa fa-leaf"></i></h2>
                  <h3>Sell Agro Produce</h3>
                  <p>Farmer can add their crops, vegetables, fruits, etc. and also Choose their own price.</p>

                  <a class="cb" href="addproduct.php">Know More</a>

                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="col-lg-4 col-md-6 col-12 mb-3 ">
          <div class="containers">
            <div class="cards">

              <div class="card-body">
                <div class="content">
                  <h2><i class="fa fa-shopping-cart"></i></h2>
                  <h3> &nbsp Agriculture &nbsp E-commerce</h3>
                  <p>E-commerce in agriculture new buisness model for farmers, where farmers can buy seeds, plant protection, plant nutrition. </p>
                  <a class="eb"href="#">Know More</a>
                </div>


              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-3 ">
          <div class="containers">
            <div class="cards">
              <div class="card-body ">
                <div class="content" id="machine">
                  <h2><i class="fa fa-gears"></i></h2>
                  <h3>Get Equipments on Rent </h3>
                  <p>Equipments that help in farming where farmer can book required machines at best rental prices. </p>

                  <a class="mb" href="machine.php">Know More</a>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-3 ">
          <div class="containers">
            <div class="cards">

              <div class="card-body">
                <div class="content">
                  <h2><i class="fa fa-mixcloud"></i></h2>
                  <h3>Weather</h3>
                  <p>Weather is the State of atmosphere,describing for example the degree to which it is hot or cold,wet or dry,calm etc. </p>

                  <a class="wb" href="#">Know More</a>

                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>

  <section class="contactsection">
    <hr class="footer">
    <div class="contact">
      <div class="contactheader">
        <h2>Contact Us</h2>
        <!-- <p>Please Provide your Valuable feedback</p><br> -->
      </div>
      <div class="contactmain" id="contact">
        <div class="container">
          <div class="row">
            <!-- <div class="col-lg-4 col-md-4">
              <div class="formhead">
                <h2>Feedback</h2>
                <p>Your feedback is most worth</p>
              </div>
              <div class="contactform">
                <div class="form-group">
                  <form action="feed.php">
                    <input type="text" name="name" class="form-control mb-2" placeholder="Enter Name" required>
                    <input type="text" name="phone" class="form-control mb-2" placeholder="Enter Phone Number" required>
                    <textarea name="response" class="form-control mb-2"  placeholder="Enter Message"></textarea>
                    <div class="bg-transparent text-center">
                     <button type="button" id="login" name="login" class="btn btn-primary login btn-block">Submit</button>
                   </div>
                 </form>
               </div>
             </div>
           </div> -->
           <div class="col-lg-4 col-md-4" id="about">
            <div class="addhead">
              <h2>Group Members</h2>
            </div>
            <div class="addr mt-4">
              <ul>
                <li class="one mb-2">RUTIK MALI</li>
                <li class="two mb-2">SHIVA JIVTODE</li>
                
              </ul>
            </div>

          </div>
          <div class="col-lg-4 col-md-4">
            <div class="container">
              <div class="map">
                <iframe src="https://goo.gl/maps/bacTX8nDrw3G2MKK8"  width="530" height="350" frameborder="0" style="border:0; padding: 10px; box-shadow: 0 0 0px 1px #999;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php

if (!isset($_SESSION['mobile'])) {
  ?>
  <script type="text/javascript">
    swal("Required","Login First To Explore All Features","warning");
  </script>

  <?php
}
?>
<section>
  <div class="footer">
    <div class="footertext">
      <span class="rights ml-5"></span>
      <span class="design p-3 ml-5"></span>
      <div class="iconfooter mt-1">
        <a href="#"><i class="fa fa-facebook pr-3"></i></a>
        <a href=""><i class="fa fa-twitter pr-3"></i></a>
        <a href=""><i class="fa fa-instagram "></i></a>

      </div>
    </div>
  </div>
</section>
</div>
</div>




<!-- feedback starting main-->


<!doctype html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">
<!--data aos-->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


<link rel="stylesheet" href="style.css">
<link
	href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	rel="stylesheet" id="bootstrap-css">
<script
	src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>

	<br>
	<!--rating start-->
	<section id="rating">
		<div class="container-fluid">
			<h3 class="text-left" data-aos="zoom-out">
				<span style="color: red;">Rewiews</span> By Satisfied Customers..!
			</h3>
			<div class="row">


				<div class="container mt-5 mb-5">

					<div class="row g-2">
						<div class="col-md-4">
							<div class="card p-3 text-center px-4" data-aos="flip-left">

								<div class="user-image">

									<img src="./images/review1.jpg" class="rounded-circle"
										width="200">

								</div>

								<div class="user-content">

									<h5 class="mb-0">Rutik Mali</h5>

									<p class="text-justify">Real-time updates:
                     Accurate and  User-Friendly Interface:
                      Users appreciate an application that is easy to navigate and understand. 
                      A clean and intuitive user interface helps users find what they need quickly
                       and efficiently.</p>

								</div>

								<div class="ratings">
									<i class="fa fa-star" style="color: yellow"></i> <i
										class="fa fa-star" style="color: yellow"></i> <i
										class="fa fa-star" style="color: yellow"></i> <i
										class="fa fa-star" style="color: yellow"></i> <i
										class="fa fa-star" style="color: yellow"></i>

								</div>

							</div>
						</div>

						<div class="col-md-4">

							<div class="card p-3 text-center px-4" data-aos="flip-right">

								<div class="user-image">

									<img src="./images/review2.jpg" class="rounded-circle"
										width="200">

								</div>

								<div class="user-content">

									<h5 class="mb-0">Shiva Jivtode</h5>

									<p class="text-justify">Quality Product Information: Detailed product descriptions, images, and usage instructions are vital for users to make informed decisions about their purchases.</p>

								</div>

								<div class="ratings">
									<i class="fa fa-star" style="color: yellow"></i> <i
										class="fa fa-star" style="color: yellow"></i> <i
										class="fa fa-star" style="color: yellow"></i> <i
										class="fa fa-star"></i> <i class="fa fa-star"></i>

								</div>

							</div>

						</div>

						<div class="col-md-4">

							<div class="card p-3 text-center px-4" data-aos="flip-left">

								<div class="user-image">

									<img src="./images/review3.png" class="rounded-circle"
										width="200">

								</div>

								<div class="user-content">

									<h5 class="mb-0">Rushi Sonavane</h5>

									<p class="text-justify">Seamless Ordering and Payment Process: Users value a smooth and hassle-free ordering process, including secure payment options. Any issues with the checkout process can lead to frustration and abandoned carts.</p>

								</div>

								<div class="ratings">
									<i class="fa fa-star" style="color: yellow"></i> <i
										class="fa fa-star" style="color: yellow"></i> <i
										class="fa fa-star"></i> <i class="fa fa-star"></i> <i
										class="fa fa-star"></i>


								</div>

							</div>

						</div>


					</div>

				</div>
			</div>

			<div class="container mt-5 mb-5">

				<div class="row g-2">
					<div class="col-md-4">
						<div class="card p-3 text-center px-4" data-aos="flip-right">

							<div class="user-image">

								<img src="./images/review4.png" class="rounded-circle"
									width="200">

							</div>

							<div class="user-content">

								<h5 class="mb-0">abhishek patil</h5>

								<p class="text-justify">Government Schemes and Subsidies: This Agriculture applications  inform farmers about various government schemes, subsidies, and agricultural policies relevant to their region.</p>

							</div>

							<div class="ratings">
								<i class="fa fa-star" style="color: yellow"></i> <i
									class="fa fa-star" style="color: yellow"></i> <i
									class="fa fa-star" style="color: yellow"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i>

							</div>

						</div>
					</div>

					<div class="col-md-4">

						<div class="card p-3 text-center px-4" data-aos="flip-left">

							<div class="user-image">

								<img src="./images/review5.png" class="rounded-circle"
									width="200">

							</div>

							<div class="user-content">

								<h5 class="mb-0">Pavan Girase</h5>

								<p class="text-justify">Farm Equipment Rentals: Include a platform that allows farmers to rent or lease agricultural machinery and equipment from other farmers or service providers.</p>

							</div>

							<div class="ratings">
              <i class="fa fa-star" style="color: yellow"></i> <i
									class="fa fa-star" style="color: yellow"></i> <i
									class="fa fa-star" style="color: yellow"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i>

							</div>

						</div>

					</div>

					<div class="col-md-4">

						<div class="card p-3 text-center px-4" data-aos="flip-right">

							<div class="user-image">

								<img src="./images/review6.png" class="rounded-circle"
									width="200">

							</div>

							<div class="user-content">

								<h5 class="mb-0">Darshan Deurkar</h5>

								<p class="text-justify">Enable farmers to leave reviews and ratings for agricultural products they have used, helping others make better purchasing decisions.</p>

							</div>

							<div class="ratings">
              <i class="fa fa-star" style="color: yellow"></i> <i
									class="fa fa-star" style="color: yellow"></i> <i
									class="fa fa-star" style="color: yellow"></i> <i
									class="fa fa-star"></i> <i class="fa fa-star"></i>

							</div>

						</div>

					</div>


				</div>

			</div>
		</div>


		</div>
	</section>

	<!--rating end-->
	<!--feedback form start-->
	<section id="feedback">
		<div class="container">
			<h3 class="text-lg-left" data-aos="zoom-out">
				<span style="color: red;">Feedback</span> From
			</h3>
			<h3 class="text-lg-right" data-aos="zoom-in">
				User <span style="color: red;">Rating</span>
			</h3>
        
			<div class="row">

				<div class="col-md-6">
					
<form methos="post" action="feed.php">
						<div class="form-group">
							<label for="name">Name</label> 
              <input type="text"
								class="form-control" id="exampleInputEmail1"
								aria-describedby="emailHelp" name="name"
								placeholder="Enter name">
						</div>
						<div class="form-group">
							<textarea name="suggesition" id="" cols="60" rows="3"
								placeholder="write your suggestions"></textarea>
							<small id="emailHelp" class="form-text text-muted">We'll
								never share your email with anyoneelse.</small>

						</div>

						<div class="form-group ">


							<select class="custom-select mr-sm-2"
								id="inlineFormCustomSelect " name="rating">
								<option selected >Give rating</option>
								<option value="Excellent" >Excellent</option>
								<option value="Very_Good">Very Good</option>
								<option value="Good">Good</option>
								<option value="Bad">Bad</option>
								<option value="Poor">Poor</option>
							</select>

						</div>



						<div class="form-group form-button">
							<input type="submit"name="feedback1" id="feedback1"
								class="form-submit" value="submit" >
						</div>


					</form>
				</div>

				<div class="col-md-6">

					12
					<div class="progress" data-aos="fade-down-left">
						<div class="progress-bar" role="progressbar" style="width: 85%;"
							aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
					</div>

					8
					<div class="progress" data-aos="fade-down-right">
						<div class="progress-bar" role="progressbar" style="width: 75%;"
							aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
					</div>

					6
					<div class="progress" data-aos="fade-down-left">
						<div class="progress-bar" role="progressbar" style="width: 55%;"
							aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
					</div>

					3
					<div class="progress" data-aos="fade-down-right">
						<div class="progress-bar" role="progressbar" style="width: 30%;"
							aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">30%</div>
					</div>

					1
					<div class="progress" data-aos="fade-down-left">
						<div class="progress-bar" role="progressbar" style="width: 5%;"
							aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">5%</div>
					</div>


				</div>
			</div>
		</div>
	</section>
	<br>
	
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init({
			duration : 2000,
		});
	</script>

</body>

</html>
<!-- feedback ending-->













<?php include "assets/jslink.php" ?>
</body>
</html>

<script type="text/javascript">




  $(document).ready(function(){
    $('.sb').click(function(event) {
      location.replace("scheme.php");
      /* Act on the event */
    });
    $('.wb').click(function(event) {
      location.replace("weather.php");
      /* Act on the event */
    });
    $('.eb').click(function(event) {
      location.replace("ecom1.php");
      /* Act on the event */
    });
// ---------------------------------------------------------------------------
// =========================================================================================
var pat1=/^[a-zA-Z. ]*$/;
var pat2=/^[0-9]{10}$/;
var pat3=/^[0-9]*$/;
// var pat4=/^ [a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]$/;
// $('.button1').click(function(event) {
//   /* Act on the event */
// var fname1=$('#fname1').val();
// var lname1=$('#lname1').val();
// var mobile1=$('#mobile1').val();
// var address1=$('#address1').val();
// var password1=$('#password1').val();
// if (fname1=="" && lname1=="" && mobile1=="" && address1=="" && password1=="") {
//   $('#fname1').addClass('is-invalid');
//     $('#lname1').addClass('is-invalid');
//     $('#mobile1').addClass('is-invalid');
//     $('#address1').addClass('is-invalid');
//     $('#password1').addClass('is-invalid');
//     $('.error').html('Please fill the all the fields');
// }else{
//    $('.error').html('');
// if (fname1=="") {
//  $('#fname1').addClass('is-invalid');
//  $('.error1').html('Enter First Name');
// }else{
//   if (!pat1.test(fname1)) {
//       $('#fname1').addClass('is-invalid');
//        $('.error1').html('enter char only');
//   }
//    else{
//     $('#fname1').removeClass('is-invalid');
//       $('.error1').html('');
//   }
// }
// if (lname1=="") {
//  $('#lname1').addClass('is-invalid');
//   $('.error2').html('Enter Last name');
// }else{
//   if (!pat1.test(lname1)) {
//       $('#lname1').addClass('is-invalid');
//        $('.error2').html('enter char only');
//   }
//    else{
//     $('#lname1').removeClass('is-invalid');
//       $('.error2').html('');
//   }
// }
// if (mobile1=="") {
//  $('#mobile1').addClass('is-invalid');
//    $('.error3').html('Enter  mobile number');
// }else{
//   if (!pat2.test(mobile1)) {
//       $('#mobile1').addClass('is-invalid');
//        $('.error3').html('Enter valid mobile number');
//   }
//    else{
//     $('#mobile1').removeClass('is-invalid');
//       $('.error3').html('');
//   }
// }

// if ((address1=="")) {
//      $('#address1').addClass('is-invalid');
//        $('.error4').html('please fill field');
// }
// else{
//    $('#address1').removeClass('is-invalid');
//       $('.error4').html('');
// }
// if (password1=="") {
//  $('#password1').addClass('is-invalid');
//       $('.error4').html('Enter Password');
// }else{
//   if (!pat3.test(password1)) {
//       $('#password1').addClass('is-invalid');
//        $('.error4').html('Enter valid Password');
//   }
//    else{
//     $('#password1').removeClass('is-invalid');
//       $('.error4').html('');
//   }
// }
// $.ajax({
// });
// }
// });
// =========================================================================================
var pat1=/^[a-zA-Z. ]*$/;
var pat2=/^[0-9]{10}$/;
var pat3=/^[0-9]*$/;
var pat4=/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-.]+$/;
$('.button2').click(function(event) {
  /* Act on the event */
  var fname=$('#fname').val();
  var lname=$('#lname').val();
  var mobile=$('#mobile').val();
  var email=$('#email').val();
  var password=$('#password').val();
  var address=$('#address').val();
  if (fname=="" && lname=="" && mobile=="" && email=="" && password=="" && address=="" ) {
    $('#fname').addClass('is-invalid');
    $('#lname').addClass('is-invalid');
    $('#mobile').addClass('is-invalid');
    $('#email').addClass('is-invalid');
    $('#password').addClass('is-invalid');
    $('#address').addClass('is-invalid');
    $('.error').html('Please fill the all the fields');
    return false;
  }else{
    $('.error').html('');
    if (fname=="") {
      $('.fname').addClass('is-invalid');
      $('.error11').html('Please enter  first name');
      return false;
    }else{

      if (!pat1.test(fname)) {
        $('.error11').html("Enter valid name");
        return false;
      }else{
        $('.fname').removeClass('is-invalid');
        $('.error11').html('');
      }

    }
    if (lname=="") {
      $('.lname').addClass('is-invalid');
      $('.error12').html('Please enter last name');
      return false;
    }else{
      if (!pat1.test(lname)) {
        $('.error12').html("Enter valid name");
        return false;
      }else{
        $('.lname').removeClass('is-invalid');
        $('.error12').html('');
      }
    }
    if (mobile=="") {
      $('.mobile').addClass('is-invalid');
      $('.error13').html('Please enter mobile number');
      return false;
    }else{
      if (!pat2.test(mobile)) {
        $('.error13').html("Enter valid Mobile number");
        return false;
      }else{
        $('.mobile').removeClass('is-invalid');
        $('.error13').html('');
      }
    }

    if (email=="") {
      $('.email').addClass('is-invalid');
      $('.error14').html('Please enter email ');
      return false;
    }else{
      if (!pat4.test(email)) {
        $('.error14').html("Enter valid email ");
        return false;
      }else{
        $('.email').removeClass('is-invalid');
        $('.error14').html('');
      }
    }
    if (password=="") {
      $('.password').addClass('is-invalid');
      $('.error15').html('Please enter password');
      return false;
    }else{
      if (!pat3.test(password)) {
        $('.error15').html("enter valid password ");
        return false;
      }else{
        $('.password').removeClass('is-invalid');
        $('.error15').html('');
      }
    }
    if (address=="") {
      $('#address').addClass('is-invalid');
      $('.error16').html('please fill field');
      return false;
    }
    else{
      $('#address').removeClass('is-invalid');
      $('.error16').html('');
    }

    $.ajax({
      url:"user_registration.php",
      type:'POST',
      data:{
        login:1,
        fname:fname,
        lname:lname,
        mobile:mobile,
        email:email,
        password:password,
        address:address
      },
      success:function(data){
        if (data==1) {
          swal("Sorry","Mobile Number is Already Exists","error");
        }
        if(data==2){
          swal("Well Done","Registered Successfully","success");
          setTimeout(function(){
            window.location.replace("index.php");
          },1200);
        }
        if(data==3){
          swal("Sorry","Unable to Register","error");
        }
      }
    });
  }
});
$('#login').click(function() {
  var mobile=$('#mobile1').val();
  var password=$('#password1').val();
  if (mobile=="" && password=="") {
    $('#mobile1').addClass('is-invalid');
    $('#password1').addClass('is-invalid');
    $('.errorl').html('Please Fill All The Fields');
    return false;

  }else{
    $('.errorl').html('');
    if (mobile=="") {
      $('#mobile1').addClass('is-invalid');
      $('.errorl1').html('Please Enter Username');
      return false;
    }else{
      $('.errorl1').html('');
      $('#mobile1').removeClass('is-invalid');
    }
    if (password=="") {
      $('#password1').addClass('is-invalid');
      $('.errorl2').html('Please Enter password');
      return false;
    }else{
      $('.errorl2').html('');
      $('#password1').removeClass('is-invalid');
    }


    $.ajax({
      url:"userloginphp.php",
      type:'post',
      data:{
        login:1,
        mobile:mobile,
        password:password
      },
      success:function(data){
        if (data==1) {
          $('.msg').html("<div class='alert alert-success text-success font-weight-bold text-center mt-3'>Login Successfull</div>").fadeOut(8000);
          swal("successfull","Login success full","success");
          setTimeout(function(){
            window.location.replace("index.php");
          },1200);
        }else{
          $('.msg').html("<div class='alert alert-danger text-danger font-weight-bold text-center ml-auto mt-3'>Invalid Crediantials </div>").fadeOut(8000);
          swal("Error","Unable To Login invalid Crediantials","error");
          setTimeout(function(){

          },1200);
        }
      }
    });

  }
});
});
</script>

<?php
session_start();
if (!isset($_SESSION['mobile'])) {
?>
  <script type="text/javascript">
    window.location.replace("index.php");
  </script>
<?php
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Krushi Bazaar</title>
  <?php include "assets/csslink.php" ?>
  <?php include "assets/jslink.php" ?>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div>
    <div>
      <div class="navmain">
        <section>
          <nav class="navbar navbar-expand-lg fixed-top ">
            <a class="navbar-brand" href="index.php">Krushi<span class="text-warning font-weight-bold" style="font-size: 1.5em">B</span>azaar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">=</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home &nbsp;</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#products">Products <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="cart.php">Cart &nbsp;<i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
                </li>

                <li class="nav-item" id="signup1">

                  <a href="logout.php" role="button" class="text-light btn btn-danger"><span class="text-white">Logout</span>
                    <i class="fa fa-switc-hoff"></i></a>
                </li>
              </ul>
            </div>
          </nav>
        </section>
      </div>
      <div>

      </div>
      <section>
        <div class="maincaraouselbg " style=""></div>
        <div class="maincaraousel">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active">></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/b4.jpg" class="d-block w-100"  style="object-fit: cover;" height="400px" alt="...">

              </div>
              <div class="carousel-item">
                <img src="img/b8.jpg" class="d-block w-100" height="400px" style="object-fit: cover" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/b15.jpg" class="d-block w-100" height="400px" style="object-fit: cover" alt="...">
              </div>
            </div>
            <div class="carousel-caption">
              <h1 class="font-weight-bold" style="font-size: 4em;">Products</h1>
              <p>Buy or Sell It's Now Easier</p>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> -->
          </div>

        </div>
      </section>

      <section>
        <div class="producttext mb-3" id="products">
          <h2>Products</h2>
          <p>Buy or Sell It's Now Easier</p>
        </div>
        <!-- Displaying Products Start -->
        <div class="container pt-5">
          <div id="message"></div>
          <div class="row mt-2 pb-3" >
            <?php
            include 'config.php';
            $stmt = $con->prepare('SELECT * FROM ecom where qty > 0');
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) :
            ?>
              <div class="col-sm-6 col-md-4 col-lg-4 mb-2"  style="padding-bottom:2em;">

                <figure class="snip1423" style="height: 430px; width:auto; border-radius:5px; ">

                  <img class="card-img-top" src="<?php echo $row['image'] ?>" width="300px" height="180px" alt="Card image">


                  <figcaption>
                    <h3><?php echo $row['mtxt']; ?></h3>

                    <!-- <h5 class="card-title " style="font-size: 20px">
      <span class="text-secondary" style="font-size: 19px">Stocks: &nbsp;&nbsp; &nbsp;&nbsp;</span>
      
      <span class="card-title text-center text-info" style="font-size: 25px"><?= $row['qty'] ?>&nbsp;
      
        <small class="text-success" style="font-size: 15px">stockleft</small>
      </span>
    </h5> -->

                    <p style="margin-bottom: 1em;" class="card-text"><?php echo $row['cat'] ?></p>

                    <div class="price" style="position: absolute;bottom: 40px; width: 80%;">
                      <h4 class="">
                        <span style="font-size: 0.8em; font-family:sans-serif;">&#8377</span>
                        <span style="font-size: 0.8em;">/</span>
                        <span style="font-size: 0.8em;" class=""><?php echo $row['unit']; ?> :</span>
                        <span class=""><?= number_format($row['price'], 2) ?></span>
                      </h4>
                    </div>


                  </figcaption>

                  <form action="" class="form-submit">
                    <div class="row " style="margin-top:-20px">
                      <div class="col-md-5 pl-0 pr-0 pt-2">
                        <b>Quantity : </b>
                      </div>
                      <div class="col-md-7 pl-0 ">
                        <input type="number" class="form-control text-center qty" value="1">
                      </div>
                    </div>
                    <input type="hidden" class="id" value="<?= $row['id'] ?>">
                    <input type="hidden" class="name" value="<?= $row['mtxt'] ?>">
                    <input type="hidden" class="price" value="<?= $row['price'] ?>">
                    <input type="hidden" class="image" value="<?= $row['image'] ?>">
                    <input type="hidden" class="aqty" value="<?= $row['qty'] ?>">
                    <input type="hidden" class="pcode" value="<?= $row['pcode'] ?>">
                    
                    <button class="btn addItemBtn" style="margin:4.4em; padding-bottom:2em;"><i class="fa fa-cart-plus"></i></button>
                  </form>


                </figure>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </section>
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
  <?php include "assets/jslink.php" ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.addItemBtn').click(function(e) {
        e.preventDefault();
        var $form = $(this).closest('.form-submit');
        var id = $form.find('.id').val();
        var name = $form.find('.name').val();
        var price = $form.find('.price').val();
        var image = $form.find('.image').val();
        var qty = $form.find('.qty').val();
        var aqty = $form.find('.aqty').val();
        var pcode = $form.find('.pcode').val();

        // setTimeout(function(){
        //   location.reload(true);
        // },12000);

        $.ajax({
          url: 'upload.php',
          method: 'post',
          data: {
            id: id,
            name: name,
            price: price,
            image: image,
            qty: qty,
            aqty: aqty,
            pcode: pcode
          },
          success: function(response) {
            $('#message').html(response);
            load_cart_item_number();
          }
        });
      });
      load_cart_item_number();

      function load_cart_item_number() {
        $.ajax({
          url: 'upload.php',
          method: 'get',
          data: {
            cartitem: "cartitem"
          },
          success: function(response) {
            $("#cart-item").html(response);
          }
        });
      }
    });
  </script>
</body>

</html>
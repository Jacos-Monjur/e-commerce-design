<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bagdoom Clone</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.simpleGallery.css">


  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" type="text/css" href="css/uikit.min.css">

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  
</head>
<body>


  <div class="col-sm-12 col-12 d-none d-lg-block topheader">
    <div class="container p-0">
      <div class="row">

        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
         <span class="toptitle">Hotline : +88 01823077077( 9 AM to 10 PM - Everyday )</span>
       </div>

       <div class="col-lg-6 col-md-12 col-sm-12 col-12">
         <div class="topmenu text-sm-right">
          <li><a href="details.php" title="How to Buy" data-toggle="tooltip" data-placement="bottom">How to Buy</a></li>
          <li><a href="details.php" title="Cash on Delivery" data-toggle="tooltip" data-placement="bottom">Cash on Delivery</a></li>
          <li><a href="details.php" title="Easy Replacement" data-toggle="tooltip" data-placement="bottom">Easy Replacement</a></li>
          <li><a href="details.php" title="Seller Corner" data-toggle="tooltip" data-placement="bottom">Seller Corner</a></li>
          <li><a href="dashboard.php" title="Dashboard" data-toggle="tooltip" data-placement="bottom">Dashboard</a></li>
        </div>
      </div>

    </div>
  </div>
</div><!----------End Top Header------>



<div class="uk-card bg-white" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">


  <div class="col-sm-12 col-12 logosection">
    <div class="container p-0">
      <div class="row">

        <div class="col-md-3 col-sm-3 col-3 d-block d-lg-none text-center mt-2">
          <span  uk-toggle="target: #offcanvas-flip" uk-icon="icon: menu; ratio: 1.2"  style="background-color: #f1f1f1; color: #000; padding: 5px 10px;"></span>
        </div><!-----Mobile Device Menu Icone-------->


        <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-lg-left text-center">
          <a href="home.php"><img src="img/bagdoom-logo.gif" class="img-fluid logo"></a>
        </div><!-----All Device Logo-------->


        <div class="col-md-3 col-sm-3 col-3 d-block d-lg-none text-center mt-2">
          <a href="dashboard.php"><span uk-icon="icon: user; ratio: 1.2"  style="background-color: #f1f1f1; color: #000; padding: 5px 10px;"></span></a>
        </div><!-----Mobile Device Menu Icone-------->



        <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center">
          <div class="col-sm-12 col-12 searchsection">
           <div class="input-group">
            <input type="text" class="form-control" id="searchbox" placeholder="What are you looking for?" name="search">
            <div class="input-group-append">
             <button class="btn btn-outline-secondary" type="button" id="button"><span uk-icon="icon: search; ratio: 1"></span></button>
           </div>
         </div>
       </div>
     </div>



     <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-none d-lg-block">
      <div class="accountmenu text-sm-right">
       <span style="font-size: 14px; color: orange;">Jute Diversified Products for Corporates</span><br>
       <li><a href="signin.php" title="SIGN IN" data-toggle="tooltip" data-placement="bottom">SIGN IN</a></li>
       <li><a href="register.php" title="REGISTER" data-toggle="tooltip" data-placement="bottom">REGISTER</a></li>
       <li><a href="contact.php" title="CONTACT" data-toggle="tooltip" data-placement="bottom">CONTACT</a></li>
     </div>
   </div>



 </div>
</div>
</div><!--------------End Logo------------>





<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm menubar d-none d-lg-block">
  <div class="container p-0">
    <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none">MegaMenu</a>
    <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarContent" class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">


        <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-uppercase text-dark">ALL CATEGORIES&nbsp;<span uk-icon="icon: chevron-down; ratio: 0.8"></span></a>
          <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
            <div class="container p-0">
              <div class="row rounded-0 m-0 shadow-lg bg-white" style=" box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15) !important;">
                <div class="col-lg-12 col-xl-12">
                  <div class="p-4">
                    <div class="row">
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Apparel</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="category.php" class="nav-link text-small pb-0">Men</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link text-small pb-0 ">Women</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">HOME & LIVING</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Home Decor</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Kitchen</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Jute Items</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Shika</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Mats</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Bags</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Sandels</a></li>
                        </ul>
                      </div>

                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Accessories</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Unique Features</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Image Responsive</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Auto Carousel</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Newsletter Form</a></li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </li>




        <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  text-uppercase text-dark">ALL CATEGORIES&nbsp;<span uk-icon="icon: chevron-down; ratio: 0.8"></span></a>
          <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
            <div class="container p-0">
              <div class="row rounded-0 m-0 shadow-lg bg-white" style=" box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15) !important;">
                <div class="col-lg-12 col-xl-12">
                  <div class="p-4">
                    <div class="row">
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Apparel</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="category.php" class="nav-link text-small pb-0">Men</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link text-small pb-0 ">Women</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">HOME & LIVING</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Home Decor</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Kitchen</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Jute Items</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Shika</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Mats</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Bags</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Sandels</a></li>
                        </ul>
                      </div>

                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Accessories</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Unique Features</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Image Responsive</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Auto Carousel</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Newsletter Form</a></li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </li>






        <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  text-uppercase text-dark">ALL CATEGORIES&nbsp;<span uk-icon="icon: chevron-down; ratio: 0.8"></span></a>
          <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
            <div class="container p-0">
              <div class="row rounded-0 m-0 shadow-lg bg-white" style=" box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15) !important;">
                <div class="col-lg-12 col-xl-12">
                  <div class="p-4">
                    <div class="row">
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Apparel</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="category.php" class="nav-link text-small pb-0">Men</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link text-small pb-0 ">Women</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">HOME & LIVING</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Home Decor</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Kitchen</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Jute Items</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Shika</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Mats</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Bags</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Sandels</a></li>
                        </ul>
                      </div>

                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Accessories</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Unique Features</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Image Responsive</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Auto Carousel</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Newsletter Form</a></li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </li>







        <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  text-uppercase text-dark">ALL CATEGORIES&nbsp;<span uk-icon="icon: chevron-down; ratio: 0.8"></span></a>
          <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
            <div class="container p-0">
              <div class="row rounded-0 m-0 shadow-lg bg-white" style=" box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15) !important;">
                <div class="col-lg-12 col-xl-12">
                  <div class="p-4">
                    <div class="row">
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Apparel</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="category.php" class="nav-link text-small pb-0">Men</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link text-small pb-0 ">Women</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">HOME & LIVING</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Home Decor</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Kitchen</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Jute Items</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Shika</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Mats</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Bags</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Jute Sandels</a></li>
                        </ul>
                      </div>

                      <div class="col-lg-3 mb-4">
                        <h6 class=" text-uppercase">Accessories</h6>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Unique Features</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Image Responsive</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Auto Carousel</a></li>
                          <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Newsletter Form</a></li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </li>



        <li class="nav-item "><a href="shop.php" class="nav-link  text-uppercase text-dark">SHOP</a></li>
        <li class="nav-item "><a href="shop.php" class="nav-link  text-uppercase text-dark">New products</a></li>
        <li class="nav-item "><a href="details.php" class="nav-link  text-uppercase text-dark">IN THE NEWS</a></li>
        <li class="nav-item "><a href="details.php" class="nav-link  text-uppercase text-dark">About us</a></li>


      </ul>
    </div>
  </div>
</nav>

</div><!----------End Desktop Menu---------->







<div id="offcanvas-flip" id="offcanvas-slide" uk-offcanvas="flip: false; overlay: true;">
  <div class="uk-offcanvas-bar d-block d-lg-none" id="mobilemenuoff">
   <button class="uk-offcanvas-close" type="button" style="top: 30px; color: #585858; background: #f1f1f1;" uk-close></button>
   <div class="sidenav">

     <center><img src="img/logo.png" class="img-fluid mt-2"></center>
     <li><a href="home.php">Home</a></li>
     <li><a href="shop.php">SHOP</a></li>
     <li><a href="shop.php">New products</a></li>
     <li><a href="details.php">IN THE NEWS</a></li>
     <li><a href="details.php">About us</a></li>

     <li class="bg-warning"><a href="category.php" class="font-weight-bold text-light text-center">All Categories</a></li>
     <li class="bg-light font-weight-bold"><a href="category.php">Men</a></li>
     <li><a href="category.php">&nbsp;&nbsp;Shirt</a></li>
     <li><a href="category.php">&nbsp;&nbsp;Pant</a></li>
     <li class="bg-light font-weight-bold"><a href="category.php">Women</a></li>
     <li><a href="category.php">&nbsp;&nbsp;Shirt</a></li>
     <li><a href="category.php">&nbsp;&nbsp;Pant</a></li>



     <li class="bg-warning"><a href="category.php" class="font-weight-bold text-light text-center">New Products</a></li>
     <li class="bg-light font-weight-bold"><a href="category.php">Men</a></li>
     <li><a href="category.php">&nbsp;&nbsp;Shirt</a></li>
     <li><a href="category.php">&nbsp;&nbsp;Pant</a></li>
     <li class="bg-light font-weight-bold"><a href="category.php">Women</a></li>
     <li><a href="category.php">&nbsp;&nbsp;Shirt</a></li>
     <li><a href="category.php">&nbsp;&nbsp;Pant</a></li>


     <li><a href="contact.php">Contact us</a></li>




   </div>
 </div>
</div><!----------------End Mobile Menu------------->





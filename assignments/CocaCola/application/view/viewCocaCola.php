

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Coca-cola 3D App</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../application/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../application/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../application/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../application/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../application/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../application/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../application/css/bootstrap-4.4.1.css">
  <link rel="stylesheet" href="../application/css/all.css">

  <!-- Template Main CSS Files -->
  <link href="../application/css/variables.css" rel="stylesheet">
  <link href="../application/css/main.css" rel="stylesheet">
  <!-- X3dom -->
  <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../CocaCola/application/css/custom.css">
  <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex justify-content-between">
    <!-- <img src="../application/assets/images/loggo.png" alt="" style="width:100px; height:100px;">  -->
    <div class="logo d-flex align-items-center">
        <a class="navbar-brand" href="#">
        <h1 class="mb-0">Coca-cola - Refreshing the world</h1>
        </a>
    </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="nav-item">
            <a id="navHome" class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Mobile 3D Applications" data-content="3D Apps">About</a>
            </li>
          <li class="nav-item">
            <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
          </li>
        </ul>
      </nav>

      <div class="position-relative">
        <!-- <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a> -->

        <!-- <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a> -->
        <i class="bi bi-list mobile-nav-toggle"></i>

        <div class="search-form-wrap js-search-form-wrap">
          <form action="#" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div>
      </div>
    </div>

  </header><!-- End Header -->

  <!-- Start 3D App SPA Contents -->
  <div class="container-fluid main_contents">
    <!-- home page start -->
    <main id="main">
      <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
          <div class="row">
            <div class="col-12">
              <div class="swiper sliderFeaturedPosts">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <a class="img-bg d-flex align-items-end" style="background-image: url('../application/assets/images/recycle.jpg');">
                      <div class="img-bg-inner">
                        <div id="index_recycle"></div>
                        <div id="index_recycle_des"></div>
                      </div>
                    </a>
                  </div>

                  <div class="swiper-slide">
                    <a class="img-bg d-flex align-items-end" style="background-image: url('../application/assets/images/slide3.jpg');">
                      <div class="img-bg-inner">
                        <div id="index_coco"></div>
                        <div id="index_coco_des"></div>
                      </div>
                    </a>
                  </div>

                  <div class="swiper-slide">
                    <a class="img-bg d-flex align-items-end" style="background-image: url('../application/assets/images/slide4.jpg');">
                      <div class="img-bg-inner">
                        <div id="index_sprite"></div>
                        <div id="index_sprite_des"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="custom-swiper-button-next">
                  <span class="bi-chevron-right"></span>
                </div>
                <div class="custom-swiper-button-prev">
                  <span class="bi-chevron-left"></span>
                </div>

                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Hero Slider Section -->
      <!-- ======= Post Grid Section ======= -->
      <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
          <div class="row g-5">
            <div class="col-lg-4">
              <div class="post-entry-1 lg">
                  <a href="../application/assets/images/renderImages/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render">
                  <img src="../application/assets/images/coca.jpg" alt="" class="img-fluid">
                  <div class="post-meta"></div></div>
                  <div id="history_title"></div>
                  <div id="history_subtitle"></div>
                  <div id="history_des"></div>
                </a>
            </div>

            <div class="col-lg-8">
              <div class="row g-5">
                <div class="col-lg-6 border-start custom-border">
                  <div class="post-entry-1">
                  <a href="../application/assets/images/renderImages/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                      <img src="../application/assets/images/spriteNew.jpg" alt="" class="img-fluid">
                      <div class="post-meta"></div></a>
                    <div id="title_sprite"></div>
                    <div id="description_sprite"></div>
                  </div>
                  <div class="post-entry-1">
                  <a href="../application/assets/images/renderImages/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                      <img src="../application/assets/images/dr.jpg" alt="" class="img-fluid">
                      <div class="post-meta"><div id="title_pepper"></div></div>
                    <div id="description_pepper"></div>
                    </a>
                  </div>
                  <div class="post-entry-1">
                    <a href="../application/assets/images/renderImages/Coke_Light.png" data-fancybox data-caption="3D Coke Render" class="thumbnail">
                    <img src="../application/assets/images/pepsiNew.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><div id="title_pepsi"></div></div></a>
                    <div id="description_pepsi"></div>
                  </div>
                </div>
                <div class="col-lg-6 border-start custom-border">
                  <div class="post-entry-1">
                  <a href="../application/assets/images/renderImages/Dr_Pepper.png" data-fancybox data-caption="3D Dr Pepper Render" class="thumbnail">
                    <img src="../application/assets/images/fizz.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><div id="title_fizz"></div></div>
                    <div id="description_fizz"></div>
                  </div>
                  <div class="post-entry-1">
                  <a href="../application/assets/images/renderImages/Sprite.png" data-fancybox data-caption="3D Sprite Render" class="thumbnail">
                    <img src="../application/assets/images/redbull.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><div id="title_redbull"></div></div>
                    <div id="description_redbull"></div>
                  </div>
                  <div class="post-entry-1">
                  <a href="../application/assets/images/renderImages/Fanta.png" data-fancybox data-caption="3D Fanta Render" class="thumbnail">
                    <img src="../application/assets/images/limcaNew.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><div id="title_limca"></div></div>
                    <div id="description_limca"></div>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- End .row -->
        </div>
      </section> <!-- End Post Grid Section -->
    </main>
    <!-- home page end -->

    <!-- About page block element -->
    <div id="about" >
      Insert About Contents
    </div> <!-- End home page -->

    <!-- Contact modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
          <div class="modal-content">
          
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">3D App Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                <p>Sultana Attar Email: sa2252@sussex.ac.uk</p>
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>

          </div>
        </div>
    </div>

    <!-- Start X3D models and 3D Image Gallery -->
    <div id="models">
      <div class="row">
        <div class="col-lg-7">
          <div class="card text-left">
            <div class="card-header bg-dark text-white">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a id="navCoke" class="nav-link active" href="#">Coke</a>
                </li>
                <li class="nav-item">
                  <a id="navSprite" class="nav-link" href="#">Sprite</a>
                </li>
                <li class="nav-item">
                  <a id="navPepper" class="nav-link" href="#">Pepper</a>
                </li>
              </ul>
            </div>
            <div class="card-body bg-light">
             <!-- Coke X3D model -->
              <div id="coke">
                <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                <div class="model3D">
                  <div class="loader"></div>
                    <x3d id="cokeWire">
                        <scene>
                            <inline nameSpaceName="cokeModel" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/coke3d.x3d" > </inline>
                        </scene>
                    </x3d>
                </div> 
                <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
              </div>
              <!-- Sprite X3D model -->
              <div id="sprite" style="display:none;">
                <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                <!-- Place the X3D code here -->
                <div class="model3D">
                  <div class="loader"></div>
                    <x3d id="spriteWire">
                        <scene>
                            <inline nameSpaceName="spriteModel" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/final_sprite.x3d"> </inline>
                        </scene>
                    </x3d>
                </div> 
                <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
            </div>
            <!-- Pepper X3D model -->
            <div id="pepper" style="display:none;">
                <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                <!-- Place the X3D code here -->
                <div class="model3D">
                  <div class="loader"></div>
                    <x3d id="pepperWire">
                        <scene>
                            <inline nameSpaceName="pepperModel" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/pepper3d.x3d"> </inline>
                        </scene>
                    </x3d>
                </div> 
                <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div id="interaction" class="row">
          <!-- Camera Controls -->
          <div class="col-md-4">
              <div class="card text-left">
                  <div class="card-header bg-primary text-white">
                      <h5 class="card-title">Camera Views</h5>
                  </div>
                  <div class="card-body">
                      <div class="btn-group-vertical w-100">
                          <button class="btn btn-outline-primary" onclick="setCamera(getActiveModel(), 'Front');">Front</button>
                          <button class="btn btn-outline-primary" onclick="setCamera(getActiveModel(), 'Back');">Back</button>
                          <button class="btn btn-outline-primary" onclick="setCamera(getActiveModel(), 'Left');">Left</button>
                          <button class="btn btn-outline-primary" onclick="setCamera(getActiveModel(), 'Right');">Right</button>
                          <button class="btn btn-outline-primary" onclick="setCamera(getActiveModel(), 'Top');">Top</button>
                          <button class="btn btn-outline-primary" onclick="setCamera(getActiveModel(), 'Bottom');">Bottom</button>
                      </div>
                      <!-- <p class="card-text mt-3">Select a limited range of X3D model viewpoints</p> -->
                  </div>
              </div>
          </div>

          <!-- Render and Lighting Controls -->
          <div class="col-md-4">
              <div class="card text-left">
                  <div class="card-header bg-info text-white">
                      <h5 class="card-title">Render and Lighting Options</h5>
                  </div>
                  <div class="card-body">
                      <div class="btn-group-vertical w-100">
                          <!-- <button class="btn btn-outline-info" onclick="togglePolygonView();">Polygon</button> -->
                          <button class="btn btn-outline-info" onclick="wireFrame();">Wireframe</button>
                          <button class="btn btn-outline-info" onclick="toggleHeadlight(getActiveModel());">Headlight</button>
                          <button class="btn btn-outline-info" onclick="toggleAllOmniLights(getActiveModel());">Omni Lights</button>
                          <button class="btn btn-outline-info" onclick="resetToDefault();">Default</button>
                      </div>
                      <p class="card-text mt-3">Select a limited number of render and lighting options</p>
                  </div>
              </div>
          </div>

          <!-- Animation Controls -->
          <div class="col-sm-4">
              <div class="card text-left">
                  <div class="card-header bg-success text-white">
                      <h5 class="card-title">Animation Options</h5>
                  </div>
                  <div class="card-body">
                      <div class="btn-group-vertical w-100">
                          <button class="btn btn-outline-success" onclick="rotateX();">Spin X</button>
                          <button class="btn btn-outline-success" onclick="rotateY();">Spin Y</button>
                          <button class="btn btn-outline-success" onclick="rotateZ();">Spin Z</button>
                          <button class="btn btn-outline-success" onclick="stopRotation();">Stop</button>
                      </div>
                      <p class="card-text mt-3">Select a range of X3D animation options. Please select any</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-12">
          <div class="card border-0 shadow">
              <div class="card-body bg-light">
                  <div class="bg-success text-white">
                      <h4 class="text-center">Animation</h4>
                  </div>
                  <p class="text-center">Explore different animation options using the buttons above.</p>
              </div>
          </div>
        </div> <!-- End the interaction panels -->
        </div>
      
      </div>
      <!-- Start the interaction panels -->

      <div class="col-lg-12">
          <div class="card border-0 shadow">
              <div class="card-body bg-light">
                  <div class="card-title title_gallery drinksText text-center mb-4"></div>
                  <!-- <h4 class="card-title text-center mb-4">3D Image Gallery</h4> -->
                  <div class="gallery" id="common_gallery">
                      <!-- The table with images will be dynamically inserted here -->
                  </div> 
              <div class="card-text description_gallery drinksText"></div>    
          </div>
      </div>
      


      <div id="cokeDescription" class="row">
        <div class="col-md-12">
          <div class="card shadow-lg">
            <div class="card-body bg-light">
                <div class="card-title text-center mb-4" id="title_cokehome"></div>
                <div class="card-text text-center" id="subTitle_cokehome"></div>
                <div class="card-text" id="description_cokehome"></div>
              <div class="text-center">
                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more...</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- End X3D models -->
    </div>

  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-content container-fluid bg-dark text-white py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6">
            <div id="title_cokefooter" class="footer-heading text-uppercase"></div>
            <div id="subTitle_cokefooter"></div> 
            <div id="description_cokefooter"></div>   
            <p><a href="#" class="btn btn-outline-light btn-sm">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading text-uppercase">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="#" class="text-white">Home</a></li>
              <li><a href="#" class="text-white">Categories</a></li>
              <li><a href="#" class="text-white">About Us</a></li>
              <li><a href="#" class="text-white">Contact</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading text-uppercase">Categories</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="#" class="text-white">Business</a></li>
              <li><a href="#" class="text-white">Culture</a></li>
              <li><a href="#" class="text-white">Sport</a></li>
              <li><a href="#" class="text-white">Food</a></li>
              <li><a href="#" class="text-white">Celebrity</a></li>
              <li><a href="#" class="text-white">Travel</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading text-uppercase">Follow Us</h3>
            <a href="#" class="text-white mx-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white mx-2"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-white mx-2"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../application/js/jquery.min.js"></script>
  <script src="../application/js/jquery-3.7.1.js"></script>
  <script src="../application/js/cocaContent.js"></script>
  <script src="../application/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../application/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../application/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../application/assets/vendor/aos/aos.js"></script>
  <script src="../application/assets/vendor/php-email-form/validate.js"></script>
  <!-- <script src="../application/js/getJsonData.js"></script> -->
  <script src="../application/js/popper.min.js"></script>
  <script src="../application//js/bootstrap-4.4.1.js"></script>
  <script src="../application/js/custom.js"></script>
  <script src='../application//js/x3dom.js'></script>

  <!-- Template Main JS File -->
  <script src="../application/js/main.js"></script>
  <!-- JavaScript to swap for SPA and restyle -->
  <script src="../application/js/swap_restyle.js"></script>

  <!-- JavaScript and PHP based Gallery generator  -->
  <script src="../application/js/gallery_generator.js"></script>
  <script src="../application/js/modelInteraction.js"></script>
  <script src="../application/js/jquery.fancybox.min.js"></script>

</body>

</html>

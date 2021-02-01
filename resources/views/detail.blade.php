<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Marketplace Smart Farming</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo url('/'); ?>/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}

  </head>
  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Marketplace Smart Farming</a><a href="#" class="ml-1">สินค้าเกษตรคุณภาพดี!</a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                <li class="list-inline-item"><a href="register">Register</a></li>
                <li class="list-inline-item"><a href="contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>

        {{-- <div class="container">
            <div class="row">
              <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">organic</a><a href="#" class="ml-1">สินค้าเกษตรคุณภาพดี!</a></div>
              <div class="col-lg-6 text-center text-lg-right">
                <ul class="menu list-inline mb-0">
                  <li class="list-inline-item"><img src="<?php echo url('/'); ?>/img/profile.png" width="30"><b>  นรารัตน์ ตั้งแก้ว</b></li>
                  <li class="list-inline-item"><a href="#">Edit Profile</a></li>
                  <li class="list-inline-item"><a href="#">Logout</a></li>
                </ul>
              </div>
            </div>
          </div> --}}

        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="customer-orders" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
      </div>

      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="#" class="navbar-brand home"><img src="<?php echo url('/'); ?>/img/logo.jpg" width="100" alt="Obaju logo" class="d-none d-md-inline-block"><img src="<?php echo url('/'); ?>/img/logo-small.jpg" width="200" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Organic - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">สินค้า<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <h5>หมวดหมู่สินค้า</h5>
                        <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="category" class="nav-link">สินค้าทั้งหมด</a></li>
                            <li class="nav-item"><a href="category_best" class="nav-link">สินค้าขายดี</a></li>
                            <li class="nav-item"><a href="category_fruit" class="nav-link">ผลไม้</a></li>
                            <li class="nav-item"><a href="category_vegetable" class="nav-link">ผัก</a></li>
                            <li class="nav-item"><a href="category_rice" class="nav-link">ข้าว</a></li>
                            <li class="nav-item"><a href="category_seed" class="nav-link">เมล็ดพันธุ์</a></li>
                            <li class="nav-item"><a href="category_compost" class="nav-link">ปุ๋ยหมัก</a></li>
                            <li class="nav-item"><a href="category_soil" class="nav-link">ดิน วัสดุปลูก</a></li>
                            <li class="nav-item"><a href="category_tech" class="nav-link">อุปกรณ์เทคโนโลยีการเกษตร</a></li>
                          </ul>
                      </div>
                      <div class="col-md-3 col-lg-6">
                        <div class="banner"><a href="#"><img src="img/banner.png" alt="" class="img img-fluid"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
              {{-- <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a> --}}
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>3 items in cart</span></a></div>
            </div>
          </div>
        </div>
      </nav>

      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">ผลไม้</a></li>
                  <li aria-current="page" class="breadcrumb-item active">ฟักทอง</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">หมวดหมู่สินค้า</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <li><a href="category" class="nav-link">สินค้าทั้งหมด <span class="badge badge-secondary">42</span></a>
                      <ul class="list-unstyled">
                        <li><a href="category_best" class="nav-link">สินค้าขายดี</a></li>
                        <li><a href="category_fruit" class="nav-link">ผลไม้</a></li>
                        <li><a href="category_vegetable" class="nav-link">ผัก</a></li>
                        <li><a href="category_rice" class="nav-link">ข้าว</a></li>
                        <li><a href="category_seed" class="nav-link">เมล็ดพันธุ์</a></li>
                        <li><a href="category_compost" class="nav-link">ปุ๋ยหมัก</a></li>
                        <li><a href="category_soil" class="nav-link">ดิน วัสดุปลูก</a></li>
                        <li><a href="category_tech" class="nav-link">อุปกรณ์เทคโนโลยีการเกษตร</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- *** MENUS AND FILTERS END ***-->
              <div class="banner"><a href="#"><img src="<?php echo url('/'); ?>/img/2021.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
              <div id="productMain" class="row">
                <div class="col-md-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div class="item"> <img src="<?php echo url('/'); ?>/img/hot1.jpg" alt="" class="img-fluid"></div>
                    <div class="item"> <img src="<?php echo url('/'); ?>/img/hot1_1.jpg" alt="" class="img-fluid"></div>
                    <div class="item"> <img src="<?php echo url('/'); ?>/img/hot1_2.jpg" alt="" class="img-fluid"></div>
                  </div>
                </br>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="<?php echo url('/'); ?>/img/hot1.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo url('/'); ?>/img/hot1_1.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo url('/'); ?>/img/hot1_2.jpg" alt="" class="img-fluid"></button>
                  </div>

                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center">ฟักทอง</h1>
                    <p class="goToDescription">ลดน้ำหนัก &amp; เบาหวาน &amp; มะเร็ง</p>
                    {{-- <label for="input-1" class="control-label">Rate This</label>
                    <input id="input-1" name="input-1" value="4.3" class="rating-loading">
                    <script>
                        $(document).ready(function(){
                            $('#input-1').rating({min: 0, max: 8, step: 0.1, stars: 8});
                        });
                    </script> --}}

                    {{-- START star --}}

                    <div align="center" style="background: rgb(79, 214, 124); padding: 10px;color:white;">
                        <i class="fa fa-star fa-2x" data-index="0"></i>
                        <i class="fa fa-star fa-2x" data-index="1"></i>
                        <i class="fa fa-star fa-2x" data-index="2"></i>
                        <i class="fa fa-star fa-2x" data-index="3"></i>
                        <i class="fa fa-star fa-2x" data-index="4"></i>
                        <br><br>
                        <?php //echo round($avg,2) ?>
                        <div class="row">
                            <p class="text-center">&emsp; &emsp; &emsp; &emsp; &emsp; &ensp; &emsp;Rating&emsp;: </p>
                            <p class="text-center">&emsp; 3.25</p>
                        </div>
                    </div>

                    <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
                    <script>
                        var ratedIndex = -1, uID = 0;

                        $(document).ready(function () {
                            resetStarColors();

                            if (localStorage.getItem('ratedIndex') != null) {
                                setStars(parseInt(localStorage.getItem('ratedIndex')));
                                uID = localStorage.getItem('uID');
                            }

                            $('.fa-star').on('click', function () {
                               ratedIndex = parseInt($(this).data('index'));
                               localStorage.setItem('ratedIndex', ratedIndex);
                               //saveToTheDB();
                            });

                            $('.fa-star').mouseover(function () {
                                resetStarColors();
                                var currentIndex = parseInt($(this).data('index'));
                                setStars(currentIndex);
                            });

                            $('.fa-star').mouseleave(function () {
                                resetStarColors();

                                if (ratedIndex != -1)
                                    setStars(ratedIndex);
                            });
                        });

                        function saveToTheDB() {
                            $.ajax({
                               url: "index.php",
                               method: "POST",
                               dataType: 'json',
                               data: {
                                   save: 1,
                                   uID: uID,
                                   ratedIndex: ratedIndex
                               }, success: function (r) {
                                    uID = r.id;
                                    localStorage.setItem('uID', uID);
                               }
                            });
                        }

                        function setStars(max) {
                            for (var i=0; i <= max; i++)
                                $('.fa-star:eq('+i+')').css('color', '#FFFF66');
                        }

                        function resetStarColors() {
                            $('.fa-star').css('color', 'white');
                        }
                    </script>
                    {{-- END star --}}

                    <p class="price">$124.00</p>
                    <div class="row">
                        <p>&emsp; &emsp;จำนวน : &emsp;</p>
                        <input type="number" min="1" value="1" class="form-control" style="width:80px;">
                        <p>&emsp;</p>
                        <p class="text-center buttons"><a href="basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a></p>
                    </div>
                  </div>
                  {{-- <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="<?php echo url('/'); ?>/img/hot1.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo url('/'); ?>/img/hot1_1.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo url('/'); ?>/img/hot1_2.jpg" alt="" class="img-fluid"></button>
                  </div> --}}
                </div>
              </div>
              <div id="details" class="box">
                <p></p>
                <h4><b>รายละเอียดสินค้า</b></h4>
                </br>
                <div class="row">
                  <ul><b>Product name :</b></ul><ul>ฟักทอง</ul>
                </div>
                <div class="row">
                  <ul><b>Seller :</b></ul><ul>StarCat wise farm</ul>
                </div>
                <div class="row">
                  <ul><b>Unit type :</b></ul><ul>น้ำหนัก (weight)</ul>
                </div>
                <div class="row">
                  <ul><b>Picture :</b></ul><ul>รูปภาพตัวอย่างสินค้า</ul>
                </div>
                <div class="row">
                  <ul><b>Quality :</b></ul><ul>13 &emsp;</ul>Brix
                </div>
                <div class="row">
                  <ul><b>On sell :</b></ul><ul>18/01/2564</ul>
                </div>
                <div class="row">
                  <ul><b>Price :</b></ul><ul>120 &emsp;</ul>baht/kg
                </div>
                <div class="row">
                  <ul><b>Stock :</b></ul><ul>1,550</ul>
                </div>

                </br>
                </br>
                <h4><b>ฟักทอง สีส้ม</b></h4>
                <p>เทรนด์อาหารคลีนยังคงมาแรงอย่างต่อเนื่องข้ามปี และน่าจะยังอยู่กับหนุ่มสาวชาวไทยไปอีกนาน ใครที่ซื้ออาหารคลีนทาน หรือว่าทำอาหารคลีนทานเอง น่าจะเคยเห็นวัตถุดิบอันเลอค่านี้อยู่บ่อยๆ นั่นก็คือ “ฟักทอง” นั่นเอง ทำไมอาหารคลีนส่วนใหญ่ถึงต้องมีฟักทอง แล้วฟักทองมีประโยชน์ต่อร่างกายของเราอย่างไรบ้าง ตามมาดูกันเลยค่ะ</p>
                <h4><b>10 ประโยชน์ของ “ฟักทอง”</b></h4>
                <ul>
                  <li>ฟักทอง เป็นหนึ่งในผักที่มีสีเหลืองออกส้ม ที่ช่วยบำรุง และรักษาสายตา</li>
                  <li>มีสารต้านอนุมูลอิสระ ทีช่วยลดความเสี่ยงในการเป็นโรคมะเร็ง</li>
                  <li>บำรุงผิวพรรณให้เต่งตึง ชุ่มชื่น ชะลอรอยเหี่ยวย่น</li>
                  <li>เสริมสร้างระบบภูมิคุ้มกันให้กับร่างกาย</li>
                  <li>ลดระดับน้ำตาลในเลือด ควบคุมระดับน้ำตาลในเลือด ป้องกันโรคเบาหวาน</li>
                  <li>ไขมันน้อย น้ำตาลน้อย กากใยอาหารสูง พลังงานต่ำ จึงเป็นอาหารที่เหมาะกับคนที่กำลังลดน้ำหนัก</li>
                  <li>ป้องกันโรคหลอดเลือด และหัวใจ</li>
                  <li>ช่วยให้ระบบขับถ่ายทำงานอย่างเป็นปกติ จากกากใยอาหารที่มีอยู่สูง</li>
                  <li>ช่วยฟื้นฟูกล้ามเนื้อหลังออกกำลังกาย</li>
                  <li>ป้องกันการเกิดโรคนิ่ว</li>
                </ul>
                <h4><b>วิธีทานฟักทองให้ได้ประโยชน์มากที่สุด</b></h4>
                <blockquote>
                  <p><em>ฟักทองไม่ได้มีดีแค่เนื้อฟักทองสีเหลืองทองนะคะ เมล็ดฟักทองเองก็ช่วยคลายเครียดได้ดี น้ำมันฟักทองก็ช่วยบำรุงประสาท หรือแม้แต่เปลืองของฟักทองยังช่วยควบคุมระดับน้ำตาลในเลืดให้อยู่ในระดับปกติอีกด้วย ดังนั้นลองทานฟักทองจากหลายๆ ส่วนดู และหากจะหั่นเนื้อฟักทองมาประกอบอาหาร อาจจะเหลือเปลือกบางๆ เอาไว้ทานกรุบๆ บ้างก็ได้</em></p>
                </blockquote>
                <hr>
                <div class="social">
                  <h4>Show it to your friends</h4>
                  <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                </div>
              </div>

            </div>
            <!-- /.col-md-9-->
          </div>
        </div>
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <h4 class="mb-3">Pages</h4>
              <ul class="list-unstyled">
                <li><a href="text">เกี่ยวกับเรา</a></li>
                <li><a href="faq">คำถาม</a></li>
                <li><a href="contact">ติดต่อเรา</a></li>
              </ul>
              <hr>
              <h4 class="mb-3">User section</h4>
              <ul class="list-unstyled">
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                <li><a href="register">Register</a></li>
              </ul>
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
              <h4 class="mb-3">Top categories</h4>
              <h5>หมวดหมู่สินค้า</h5>
              <ul class="list-unstyled">
                <li><a href="category">สินค้าขายดี</a></li>
                <li><a href="category">ผลไม้</a></li>
                <li><a href="category">ผัก</a></li>
                <li><a href="category">ข้าว</a></li>
                <li><a href="category">เมล็ดพันธุ์</a></li>
                <li><a href="category">ปุ๋ยหมัก</a></li>
                <li><a href="category">ดิน วัสดุปลูก</a></li>
                <li><a href="category">อุปกรณ์เทคโนโลยีการเกษตร</a></li>
              </ul>
            </div>

            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
              <h4 class="mb-3">Where to find us</h4>
              <p><strong>StarCatWiseFarm</strong><br>6/54 อาคารสตาร์แคท<br>ซอยงามวงศ์วาน 59<br>แขวงลาดยาว<br>เขตจตุจักร<br><strong>กรุงเทพมหานคร 10900</strong></p><a href="contact">Go to contact page</a>
              <hr class="d-block d-md-none">
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
              <h4 class="mb-3">Get the news</h4>
              <p class="text-muted">ท่านสามารถลงทะเบียนเพื่อรับข่าวสารจากเราได้ที่นี่</p>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control"><span class="input-group-append">
                    <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
                </div>
                <!-- /input-group-->
              </form>
              <hr>
              <h4 class="mb-3">Stay in touch</h4>
              <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#" class="email external"><i class="fa fa-envelope"></i></a></p>
            </div>
            <!-- /.col-lg-3-->
          </div>
          <!-- /.row-->
        </div>
        <!-- /.container-->
      </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->


    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-2 mb-lg-0">
              <p class="text-center text-lg-left">©2021 Moscii Corporation Co.,Ltd.</p>
            </div>
            <div class="col-lg-6">
              <p class="text-center text-lg-right">StarCatWiseFarm
                <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
              </p>
            </div>
          </div>
        </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="<?php echo url('/'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo url('/'); ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="<?php echo url('/'); ?>/js/front.js"></script>

  </body>
</html>

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
                  <li aria-current="page" class="breadcrumb-item active">ข่าวสารการเกษตร</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="row">
            <!--
            *** LEFT COLUMN ***
            _________________________________________________________
            -->
            <div id="blog-listing" class="col-lg-9">
              <div class="box">
                <h1>ข่าวสารการเกษตร</h1>
                <p>นักหนังสือพิมพ์ที่มีชื่อเสียงท่านหนึ่งชื่อ จอห์น บี โบการ์ท กล่าวว่า “เมื่อสุนัขกัดคนไม่เป็นข่าว เพราะเป็นเหตุการณ์ปกติที่เกิดขึ้นบ่อยๆ แต่เมื่อคนกัดสุนัข นั่นคือข่าว” คำกล่าวนี้แสดงให้เห็นว่าเรื่องราวที่ปกติไม่มีความน่าสนใจมากพอที่จะเป็นข่าว แต่ถ้าเป็นเรื่องที่นานกว่าจะอุบัติขึ้นทีก็จะเป็นข่าวได้ง่าย</p>
              </div>
              <!-- post-->
              <div class="post">
                <h2><a href="post">สหรัฐฯ อัดฉีดเงิน 4 แสนล้านช่วยเกษตรกร</a></h2>
                <p class="author-category">By <a href="#">nunnararat</a> in <a href="">Agriculture</a></p>
                <hr>
                <p class="date-comments"><a href="post"><i class="fa fa-calendar-o"></i> June 20, 2020</a></p>
                <div class="image"><a href="post"><img src="img/new.jpg" alt="Example blog post alt" class="img-fluid"></a></div>
                <p class="intro">สหรัฐอเมริกาทุ่มเงินช่วยเหลือเกษตรกรสู้ภัยโควิด ทรัมป์ ได้โอกาสหาเสียงในกลุ่มเกษตรกร ขณะที่ฝั่งตรงข้ามโต้ช่วยเหลือไม่ตรงจุด สำนักข่าว รอยเตอร์ รายงาน กระทรวงเกษตรสหรัฐอเมริกา เตรียมเปิดเผยข้อมูลของเงินช่วยเหลือเกษตรกรในช่วงการแพร่ระบาดของโรคโควิด-19 ซึ่งมีมูลค่าถึง 14,000 ล้านสหรัฐฯ หรือราว 437,374 ล้านบาท ซึ่งครอบคลุมไปถึงเกษตรกรผู้ปลูกข้าวโพด ถั่วเหลือง ข้าวสาลี รวมไปถึง เกษตรกรโคนม</p>
                <p class="read-more"><a href="post" class="btn btn-primary">อ่านต่อ</a></p>
              </div>
              <!-- post        -->
              <div class="post">
                <h2><a href="post">รับมือผลไม้ใต้ มากในช่วง ก.ย.-ต.ค.</a></h2>
                <p class="author-category">By <a href="#">nunnararat</a> in <a href="">Agriculture</a></p>
                <hr>
                <p class="date-comments"><a href="post"><i class="fa fa-calendar-o"></i> June 20, 2020</a><a href="post"><i class="fa fa-comment-o"></i> 8 Comments</a></p>
                <div class="image"><a href="post"><img src="img/blog.jpg" alt="Example blog post alt" class="img-fluid"></a></div>
                <p class="intro">ทุเรียน...ผลผลิตออกสู่ตลาดน้อย และทยอยออกสู่ตลาดหลายรุ่น โดยจะออกสู่ตลาดมากใน ก.ย. จากปกติจะออก ส.ค. เนื่องจากสภาพอากาศที่แปรปรวน พื้นที่ปลูกบางแห่งเสียหายจากพายุ ประกอบกับเกษตรกรวางแผนตลาดนำการผลิตกันมากขึ้น เพื่อให้ผลผลิตออกในช่วงเทศกาลวันสำคัญของจีนที่มีวันหยุดยาว ช่วง ก.ย.-ต.ค. เช่น วันไหว้พระจันทร์ และวันชาติของจีน เพื่อให้ขายได้ราคาดี</p>
                <p class="read-more"><a href="post" class="btn btn-primary">อ่านต่อ</a></p>
              </div>
              <div class="pager d-flex justify-content-between">
                <div class="previous"><a href="#" class="btn btn-outline-primary">← Older</a></div>
                <div class="next disabled"><a href="#" class="btn btn-outline-secondary disabled">Newer →        </a></div>
              </div>
            </div>
            <!-- /.col-lg-9-->
            <!-- *** LEFT COLUMN END ***-->

            <div class="col-lg-3">
              <!--
              *** BLOG MENU ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 panel-title">Blog</h3>
                </div>
                <div class="card-body">
                  <ul class="nav flex-column nav-pills">
                    <li><a href="blog" class="nav-link">เกี่ยวกับเรา</a></li>
                    <li><a href="blog" class="nav-link">คำถามที่พบบ่อย</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.col-lg-3-->
              <!-- *** BLOG MENU END ***-->
              <div class="banner"><a href="#"><img src="<?php echo url('/'); ?>/img/2021.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
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

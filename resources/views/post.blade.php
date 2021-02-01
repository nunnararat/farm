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
                  <li class="breadcrumb-item"><a href="blog">ข่าวสารการเกษตร</a></li>
                  <li aria-current="page" class="breadcrumb-item active">สหรัฐฯ อัดฉีดเงิน 4 แสนล้าน</li>
                </ol>
              </nav>
            </div>
            <div id="blog-post" class="col-lg-9">
              <div class="box">
                <h1>สหรัฐฯ อัดฉีดเงิน 4 แสนล้านช่วยเกษตรกร</h1>
                <p class="author-date">By <a href="#">nunnararat</a> |  June 20, 2013</p>
                <p class="lead">สหรัฐอเมริกาทุ่มเงินช่วยเหลือเกษตรกรสู้ภัยโควิด ทรัมป์ ได้โอกาสหาเสียงในกลุ่มเกษตรกร ขณะที่ฝั่งตรงข้ามโต้ช่วยเหลือไม่ตรงจุด</p>
                <div id="post-content">
                  <p><strong>เมื่อวันที่ 18 กันยายน 2563</strong> สำนักข่าว รอยเตอร์ รายงาน กระทรวงเกษตรสหรัฐอเมริกา เตรียมเปิดเผยข้อมูลของเงินช่วยเหลือเกษตรกรในช่วงการแพร่ระบาดของโรคโควิด-19 ซึ่งมีมูลค่าถึง 14,000 ล้านสหรัฐฯ หรือราว 437,374 ล้านบาท ซึ่งครอบคลุมไปถึงเกษตรกรผู้ปลูกข้าวโพด ถั่วเหลือง ข้าวสาลี รวมไปถึง เกษตรกรโคนม</p>
                  <p><img src="<?php echo url('/'); ?>/img/new.jpg" alt="Example blog post alt" class="img-fluid"></p>
                  <h2>Donald John Trump</h2>
                  <ol>
                    <li>ประธานาธิบดีสหรัฐคนที่ 45</li>
                    <li>นักธุรกิจ, พิธีกรรายการโทรทัศน์ และนักแสดงรับเชิญในภาพยนตร์หลายเรื่อง</li>
                  </ol>
                  <blockquote class="blockquote">
                    <p>ในช่วงเดือน มกราคม ถึง กรกฎาคม ที่ผ่านมามูลค่าของผลผลิตทางการเกษตรลดลงถึงร้อยละ 5 ก่อนที่จะพุ่งสูงหลังมีการซื้อจากจีน ขณะที่ปศุสัตว์ได้รับผลกระทบจากโควิด-19 อย่างแสนสาหัสหลังจากพบการแพร่ระบาดของโรคในหมู่คนงานที่ทำงานในโรงงานผลิตเนื้อส่งผลให้ต้องปิดโรงงานถึง 20 แห่ง</p>
                  </blockquote>
                  <h3>Donald John Trump</h3>
                  <p>ขณะที่ นายโดนัลด์ ทรัมป์ ประธานาธิบดีสหรัฐฯ ได้ใช้การอัดฉีดเงินช่วยเหลือเกษตรกรครั้งนี้ในการขึ้นหาเสียงภายในรัฐวิสคอนซิน ซึ่งในการเลือกตั้งปี 2016 พบว่าเกษตรกรส่วนใหญ่ให้การสนับสนุนนายทรัมป์ ขณะที่กลุ่มเคลื่อนไหวเพื่อสิ่งแวดล้อมได้โจมตีนายทรัมป์ ว่าให้ความช่วยเหลือเกษตรกรไม่ตรงจุด และให้ความช่วยเหลือไม่ครอบคลุมผู้ที่ได้รับผลกระทบจากโควิด-19</p>
                  <ul>
                    <li>ประธานาธิบดีสหรัฐคนที่ 45</li>
                    <li>นักธุรกิจ, พิธีกรรายการโทรทัศน์ และนักแสดงรับเชิญในภาพยนตร์หลายเรื่อง</li>
                  </ul>
                  <p><img src="<?php echo url('/'); ?>/img/new2.jpg" alt="Example blog post alt" class="img-fluid"></p>
                  <p>ทรัมป์ชนะการเลือกตั้งเป็นการทั่วไปเมื่อวันที่ 8 พฤศจิกายน ค.ศ. 2016 โดยชนะฮิลลารี คลินตัน คู่แข่งจากพรรคเดโมแครต ด้วยวัย 70 ปี ทรัมป์เป็นบุคคลอายุมากที่สุดและมีทรัพย์สินมากที่สุดที่ดำรงตำแหน่งประธานาธิบดี เป็นบุคคลแรกที่ไม่เคยรับราชการทหารหรือข้าราชการมาก่อน และเป็นบุคคลที่สี่ที่ได้รับเลือกตั้งโดยไม่ได้คะแนนเสียงของผู้มีสิทธิเลือกตั้งข้างมากทั่วประเทศ ทรัมป์กล่าวข้อความเท็จหรือชักจูงให้เข้าใจผิดหลายครั้งทั้งก่อนดำรงตำแหน่งและในตำแหน่ง ซึ่งมีผู้ตรวจสอบข้อเท็จจริงบันทึกไว้ และสื่ออธิบายปรากฏการณ์นี้อย่างกว้างขวางว่าไม่เคยมีมาก่อนในการเมืองสหรัฐ ความเห็นและการกระทำหลายอย่างของเขามีลักษณะแบบนิยมเชื้อชาติ</p>
                </div>
                <!-- /#post-content-->
                </div>
              <!-- /.box-->
            </div>
            <!-- /#blog-post-->
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

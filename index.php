<!DOCTYPE html>
<html>
<head>
<title>hospital management</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
<style type="text/css">
   * { margin: 0; padding: 0; outline: 0; }

body, html { height: 100%; }

body {
	font-size: 12px;
	line-height: 22px;
	font-family: arial, sans-serif;
	color: #828282;
	
	min-width: 980px;
}


a { color: #067aa7; text-decoration: none; cursor: pointer; }
a:hover { text-decoration: underline; }
a img { border: 0; }
a.view { padding-left: 8px; font-size: 10px; float: right;  }

article, aside, details, footer, header, menu, nav, section { display: block; }
input, textarea, select { font-size: 12px; font-family: arial, sans-serif; }
textarea { overflow: auto; }

.cl { display: block; height: 0; font-size: 0; line-height: 0; text-indent: -4000px; clear: both; }
.notext { font-size: 0; line-height: 0; text-indent: -4000px; }
.left, .alignleft { float: left; display: inline; }
.right, .alignright { float: right; display: inline; }

.shell  { width: 980px; margin: 0 auto; }

.top-nav .shell { position: relative; }
.top-nav { background: #b6dde7; height: 59px;  }
.top-nav ul { list-style: none; list-style-position: outside; font-family: 'Ubuntu', sans-serif; font-size: 16px; text-transform: uppercase; line-height: 58px; font-weight: 700;  }
.top-nav ul li { float: left; padding: 0 0 0 0; border-right: 1px solid #dbeef3;  }
.top-nav ul li.active  { border-right: 0;  }
.top-nav ul li a { color: #239cc5; float: left; padding: 0 34px; text-shadow: rgba(255,255,255,0.8) 0px 1px 0px; }
.top-nav ul li span { float: left; }
.top-nav ul li a:hover,
.top-nav ul li.active a { color: #00719d; text-decoration: none; background: #c8e6ed; }
.top-nav ul li.active a { background: #c8e6ed url(images/active-nav-border.png) no-repeat right 0; }
.top-nav ul li.active span { background: url(images/active-nav-border.png) no-repeat 0 0; padding-left: 2px; }
.top-nav span.top-nav-shadow { background: url(images/top-nav-shadow.png) no-repeat 0 0; width: 959px; height: 7px; position: absolute; top: 59px; left: 50%; margin-left: -480px; }
.top-nav a.nav-btn { display: none; } 
#header { background: url(images/header.png) repeat-x 0 0; height: 285px; }

.header-inner { position: relative;  background: url(images/header-cnt.png) no-repeat center 0;  }

.header-cnt #logo { width: 397px; font-size: 0; line-height: 0;  }
.header-cnt #logo a { height: 134px; background: url(images/logo.png) no-repeat 0 0; text-indent: -4000px; display: block;  }
.header-cnt { width: 422px; padding-top: 30px; }
.header-cnt h2 { font-size: 74px; line-height: 83px; color: #fff; text-shadow: rgba(0,0,0,0.5) 0px 1px 2px;  font-weight: bolder; } 
.header-cnt h3 { font-size: 40px; padding-bottom: 8px; line-height: 50px; font-weight: normal;  color: #fff; text-shadow: rgba(0,0,0,0.5) 0px 1px 2px; font-family: tahoma, arial, helvetica, serif;  } 
.header-cnt p { color: #fff; text-shadow: rgba(0,0,0,0.5) 0px 1px 2px; padding-bottom: 10px; }
.header-cnt a.blue-btn { background: url(images/blue-btn.png) no-repeat 0 -75px; position: relative; bottom: -30px; z-index: 100; width: 198px; height: 70px; text-align: center; line-height: 56px; display: block; color: #fff; text-shadow: rgba(0,0,0,0.5) 0px 1px 1px; font-size: 16px; font-family: 'Ubuntu', sans-serif; font-weight: 700;   }
.header-cnt a.blue-btn:hover  { text-decoration: none; background-position: 0 0px; }

.slider-holder { float: right; width: 495px; height: 293px; background: url(images/slider.png) no-repeat 0 0; position: absolute; top: 7px; right: -19px; padding: 34px 44px; z-index: 1000;}
.slider-holder .flexslider { width: 497px; height: 288px; position: relative; }
.slider-holder .flexslider ul.slides { list-style: none; list-style-position: outside; position: relative; }
.slider-holder .flexslider ul.slides li { width: 497px; height: 288px; float: left; }
.slider-holder .flexslider ul.slides li img { width: 497px; height: 288px; }

.main { padding: 66px 0 50px; position: relative; height: 100%; }
.main span.shadow-top { background: url(images/main-shadow.png) repeat-x 0 0;  top: 0; left: 0; position: absolute; width: 100%;  height: 46px; z-index: 20; display: block;  }
.main h2 { font-size: 28px; color: #2d2d2d; line-height: 28px; font-family: 'Ubuntu', sans-serif; font-weight: 500; padding-bottom: 12px; }
.main h3 { font-size: 20px; color: #2d2d2d; line-height: 22px; font-family: 'Ubuntu', sans-serif; font-weight: 500; padding-bottom: 8px; }
.main section { background: url(images/section-shadow.png) no-repeat 0 bottom; padding-top: 40px; padding-bottom: 23px;  }
.main section:last-of-type { background: transparent; }

.main .testimonial { text-align: center; padding-right: 88px; padding-left: 88px; }
.main .testimonial p { padding-bottom: 10px; }
.main .testimonial p strong { font-size: 28px; font-family: georgia, serif; position: relative; top: 10px; left: -5px; }

.main .content { width: 615px; float: left; }
.main .content ul { list-style: none; list-style-position: outside; padding-top: 8px;  }
.main .content ul li { padding-left: 8px; background: url(images/bullet.png) no-repeat 0 9px; padding-bottom: 5px;  }
.main .content ul li a { text-decoration: underline; }
.main .content ul li a:hover { text-decoration: none; }
.main .content img.alignleft { margin-right: 22px; }
.main .content .cnt { overflow: hidden; height: 100%; }
.main section.blog { padding-bottom: 60px; }

.main .sidebar { width: 282px;  float: right; }
.main .sidebar ul { list-style: none; list-style-position: outside; }
.main .sidebar ul li { position: relative; padding-left: 84px; background: url(images/sidebar-list-border.png) no-repeat 0 bottom; padding-bottom: 15px; margin-bottom: -13px; min-height: 72px; }
.main .sidebar ul li .img-holder { position: absolute; top: 6px; left: 0px; width: 66px; height: 48px; padding: 2px; border: 1px solid #d7d7d6; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; -o-border-radius: 3px; }
.main .sidebar ul li img { width: 66px; height: 48px; }
.main .sidebar ul li .mobile { font-style: normal; display: none; }
.main .sidebar ul li a { color: #828282; }
.main .sidebar ul li a:hover { text-decoration: none; color: #666;  }
.main .sidebar ul li p { padding-bottom: 7px; }
.main .sidebar ul li span { font-size: 10px; color: #c0c0c0; display: block; }
.main .sidebar .widget ul li.last { background: transparent; }

.main .cols { padding-bottom: px;  }
.main .cols a.view { margin-right: 16px; position: absolute; bottom: 0; right: 45px; }
.main .cols .col { width: 292px; float: left; background: url(images/col-separator.png) no-repeat right 0; padding-right: 45px; margin-right: 12px; padding-bottom: 16px; position: relative; }
.main .cols .col-cnt { padding-top: 7px; height:  100%; overflow: hidden }
.main .cols .col img.alignleft { margin-right: 7px; }
.main .cols .col.last { width: 280px; padding-right: 0; margin-right: 0; background: transparent; }

html, body { height: 100%; }
#wrapper { min-height: 100%; height: auto !important; height: 100%; margin: 0 auto -286px; }
#footer, #footer-push { height: 286px; }
#footer span.shadow-bottom { background: url(images/main-shadow-bottom.png) repeat-x 0 0;  top: -46px; left: 0; position: absolute; width: 100%; height: 46px; z-index: 20; display: block;  }

#footer { border-top: 1px solid #fff; position: relative; height: 285px; }
.footer-cols { background: url(images/footer-cols.png) repeat-x 0 0; padding: 26px 0; }
.footer-cols .col { float: left; width: 226px; padding-right: 24px; }
.footer-cols .col.last { padding-right: 0; }
.footer-cols h3 { color: #fff; text-shadow: rgba(0,0,0,0.6) 0px 1px 2px; font-size: 21px; line-height: 28px; font-family: 'Ubuntu', sans-serif; font-weight: 500; padding-bottom: 12px; }
.footer-cols h3 a { color: #fff; text-shadow: rgba(0,0,0,0.6) 0px 1px 2px; }
.footer-cols h3 a:hover { text-decoration: none; color: #bdbdbd;  }
.footer-cols p { color: #fff; }
.footer-cols p a { color: #fff; }
.footer-cols ul { list-style: none; list-style-position: outside; }
.footer-cols ul li { color: #fff; padding-bottom: 6px; padding-left: 9px; background: url(images/bullet-footer-col.png) no-repeat 0 8px; }
.footer-cols ul li a { color: #fff; }

.footer-bottom { background: #b3dce6; height: 14px; padding: 22px 0 18px 0; }
.footer-nav { float: left; font-size: 11px; line-height: 11px;  }
.footer-nav ul { list-style: none; list-style-position: outside; }
.footer-nav ul li { float: left; padding: 0 10px; background: url(images/footer-nav-border.png) no-repeat 0 0; }
.footer-nav ul li.first { background: transparent; padding-left: 0;  }
.footer-nav ul a { color: #6b848a; }
.footer-bottom p.copy { float: right; color: #6b848a;  line-height: 11px; }
.footer-bottom p.copy span  { padding: 0 9px;  }
.footer-bottom p.copy a { text-decoration: underline; }
.footer-bottom p.copy a:hover { text-decoration: none; }
    
    
    
    </style>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.8.0.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>
<script src="js/functions.js"></script>
</head>
<body>
<div id="wrapper">
  
  <nav class="top-nav">
    <div class="shell"> <a href="#" class="nav-btn">HOMEPAGE<span></span></a> <span class="top-nav-shadow"></span>
      <ul>
        <li class="active"><span><a href="index.php">Home</a></span></li>
        <li><span><a href="registration.php">Book Appointment</a></span></li>
        <li><span><a href="Login.php">Admin Login</a></span></li>
       
      </ul>
    </div>
  </nav>
 
  
  <header  id="header">
   
    <div class="shell">
      <div class="header-inner">
       
        <div class="header-cnt">
          <img src="images/2mg.jpg" alt="">
          <p> Solution to all your<p>
       
        
        <div class="slider-holder">
          <div class="flexslider">
            <ul class="slides">
              <li><img src="images/h4.jpg" alt=""></li>
              <li><img src="images/2.jpg" alt=""></li>
              <li><img src="images/slides2.png" alt=""></li>
              <li><img src="images/h5.jpg" alt=""></li>
              <li><img src="images/1.jpg" alt=""></li>
            </ul>
          </div>
        </div>
       
        <div class="cl">&nbsp;</div>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
  
  </header>

  <div class="main"> <span class="shadow-top"></span>
  
    <div class="shell">
      <div class="container">
     
        <section class="testimonial">
          <h2>Electronic Medical Records</h2>
          <p><strong>“</strong>Health is the greatest gift, contentment the greatest wealth, faithfulness the best relationship. <strong>"</strong></p>
        </section>
        
        <section class="blog">
         
          <div class="content"> 
            <div class="cnt">
              <h3>Why Electronic Medical Records</h3>
              <p> There are several reasons that a person needs medical assistance. And, to provide best medical assistance, the management of the hospital must be disciplined, well-versed in its service providing techniques.
							The Hospital Management System should be able to keep track of the records of the doctors, patients, nurses, and other hospital staffs.It aims in making an automated system for keeping the tracks of all the activities and maintaining the records of the doctors, patients, nurses, and other hospital staffs.</p>
                          </div>
          </div>
        
          
          <aside class="sidebar">
            
            <div class="widget">
              <h3>Latest news</h3>
              <ul>
                <li>
                 <div class="img-holder"> <a href="#"><img src="images/hms2.jpg" alt=""></a> </div>
                  <p><a href="#">our EMR helps you receive, store and access all your health information online. </p>
                </li>
                <li>
                    <div class="img-holder"> <a href="#"><img src="images/hms3.jpg" alt=""></a> </div>
                  <p><a href="#">Sunday Day Care surgeries at Manipal Hospitals, Bangalore  </p>
                </li>
                <li>
                  <div class="img-holder"> <a href="#"><img src="images/hms4.jpg" alt=""></a> </div>
                  <p> <a href="#">People at work are equally at risk of eye injuries as those at home. Fortunately, 90 percent of all eye injuries are preventable. Learn how to prevent eye injuries.</p>
                </li>
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
            <a href="#" class="view">View All</a>
          
          </aside>
          
          <div class="cl">&nbsp;</div>
        </section>
        
        <section class="cols">
          <div class="col">
            
        </section>
       
      </div>
      
    </div>
    
  </div>
 
  
  <div id="footer-push"></div>
  
</div>

<div  id="footer"> <span class="shadow-bottom"></span>
  
  <div class="footer-cols">
   
    <div class="shell">
      <div class="col">
        <h3><a href="#">Center of excellance</a></h3>
        <div class="col-cnt">
          <ul>
            <li><a href="#">Orthopedics </a></li>
            <li><a href="#">Nephrology & Urology</a></li>
            <li><a href="#">Gynocology </a></li>
            <li><a href="#"Bariatric Surgery </a></li>
            <li><a href="#">Cardiology and many more </a></li>
          </ul>
        </div>
      </div>
      <div class="col">
        <h3><a href="#">Services</a></h3>
        <div class="col-cnt">
          <ul>
            <li><a href="#">Ambulance services </a></li>
            <li><a href="#">ICU</a></li>
            <li><a href="#">24 X 7 open </a></li>
           
          </ul>
        </div>
      </div>
      <div class="col">
        
        <div class="col-cnt">
          
        </div>
      </div>
      <div class="col">
        <h3 id="#c"><a href="#">Contact Us</a></h3>
        <div class="col-cnt">
          <p><strong>Email:</strong> <a href="#">mouse01@gmail.com</a></p>
          <p><strong>Phone:</strong> 655-606-111</p>
          <p><strong>Adress:</strong> RNSIT</p>
        </div>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
   
  </div>
 
  <div class="footer-bottom">
    <div class="shell">
      <nav class="footer-nav">
         
        </ul>
        <div class="cl">&nbsp;</div>
      </nav>
      <p class="copy">&copy; Copyright<span>|</span> Design by Mouse</p>
    </div>
  </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
    <link href='templates/style.css' rel='stylesheet' type='text/css'>
    <!--  external css: flickity.css -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- external icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style media="screen">

    /* logo styling */
    /* logo styling */
    .logo{
      box-shadow: 0 1px 3px rgba(0,0,0,0.08);
      margin-top: 15px;
      margin-left: 20px;
      position: absolute;
      top: -20px;
      z-index: 3;
    }

    /* title styling */
    .title{
      font-family: "Montserrat", sans-serif;
      font-stretch: normal;
      font-size: 25px;
      font-weight: bold;
      line-height: 1;
      margin-bottom: 50px;
      position: relative;
      text-align: center;
      text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.2);
      text-transform: uppercase;
      padding-top: 20px;
      /* padding-bottom: 10px; */
    }
/* body, hero styling */
.row {
width: 100%;
max-width: 940px;
margin: 0 auto;
position: relative;
padding: 0 2%;
}
* {
box-sizing: border-box;
}
body {
color: #202020;
background: white;
font-family: "Cardo", serif;
font-weight: 300;
-webkit-font-smoothing: antialiased;
}
a {
text-decoration: none;
}
h1 {
font-size: 30px;
line-height: 1.8;
text-transform: uppercase;
font-family: "Montserrat", sans-serif;
}
p {
margin-bottom: 10px;
font-size: 17px;
line-height: 2;
}
.content {
padding: 50px 2% 100px;
}
.hero {
position: relative;
background: url(https://www.cityflowers.co.in/blog/wp-content/uploads/2018/11/NGO.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
text-align: center;
color: #fff;
padding-top: 110px;
min-height: 500px;
letter-spacing: 2px;
font-family: "Montserrat", sans-serif;
}
.hero h1 {
font-size: 50px;
line-height: 1.3;
}
.hero h1 span {
font-size: 25px;
color: #e8f380;
border-bottom: 2px solid #e8f380;
padding-bottom: 12px;
line-height: 3;
}

/* nav bar */
/* @import 'https://fonts.googleapis.com/css?family=Raleway'; */
html, body
{
    margin: 0px;
}
div.container
{
    font-family: Raleway;
    margin: 0 auto;
	  padding: 2em 1em;
	  text-align: center;
}
div.container a
{
    color: #000;
    text-decoration: none;
    font-family: "Montserrat", sans-serif;
    font-size: 20px;
    /* font-weight: bold; */
    margin: 0px 10px;
    padding: 10px 10px;
    position: relative;
    z-index: 0;
    cursor: pointer;
}
.yellow
{
    background: #fadc64;
}
/* Border X get width  */
div.borderXwidth a:before, div.borderXwidth a:after
{
    position: absolute;
    opacity: 0;
    width: 0%;
    height: 2px;
    content: '';
    background: #000;
    transition: all 0.3s;
}
div.borderXwidth a:before
{
    left: 0px;
    top: 0px;
}
div.borderXwidth a:after
{
    right: 0px;
    bottom: 0px;
}
div.borderXwidth a:hover:before, div.borderXwidth a:hover:after
{
    opacity: 1;
    width: 100%;
}

/* flickity.css: for the horizontal scroll menu */
.carousel {
  background: #EEE;
}
.carousel img {
  display: block;
  height: 200px;
}
@media screen and ( min-width: 768px ) {
  .carousel img {
    height: 400px;
  }
}

/* footer styling */
.footer-row {
width: 100%;
max-width: 1200px;
margin: 0 auto;
position: relative;
padding: 0 2%;
}
.site-footer
{
  background-color:#26272b;
  padding:25px 0 20px;
  font-size:15px;
  font-family: "Montserrat", sans-serif;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:900px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px;
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px;
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.google:hover
{
  background-color:#d44638
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.instagram:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
.footer-flexbox
{
  display: flex;
}
.footer-flexbox > div
{
  margin: 10px;
}
.text-justify
{
  text-align: justify;
  text-justify: inter-word;
}

/* text overlay */
.content-on-image:hover .overlay-text {
  opacity: 1;
}
.overlay-text {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1;
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}
    </style>
  </head>


<body>
<!-- logo -->
<div class="logo">
  <img height="120" src="data:image/jpeg;base64,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" alt="logo here">
</div>

<!-- navbar -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
<div class="container yellow borderXwidth">
  <a href="/">HOME</a>
  <a>EVENTS</a>
  <a href="gallery.php">GALLERY</a>
  <a href="about.html">ABOUT</a>
  <a>DONATE</a>
  <a>CONTACT</a>
</div>
<!-- navbar ends -->

<!-- !!!!!!!!!!!!!! include currently not working for THIS page !!!!!!!!!!!!!!!! -->
<?php include("includes/navbar.html") ?>

<div class="hero">
<!-- TITLE -->
    <h1><span>Project ReachOut</span><br>Project ReachOut</h1>
</div>

<!-- Text content of the page -->
<div class="row content">
  <div class="title">
    <h2 style="font-size: 24px;">OUR VISION</h2>
  </div>
    <p>Project ReachOut is an initiative undertaken by a group of like-minded students, whose aim is to work at various Social Service Organizations in Mysore, and impart the knowledge seeped from these precincts through the social media.      Unlike a database cataloging the mundane information pertaining to the many organizations, we present a first hand comprehensive account of the same. Our team will pay visits to each organization in Mysore and work under their banner for a couple days. It will obtain the pertinent details concerning the establishment and then, the same would be published on this blog.</p>
</div>

<!-- Flickity horizontal scroll menu -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<div class="carousel"
  data-flickity='{ "imagesLoaded": true, "percentPosition": false, "wrapAround": true}'>
  <div class="content-on-image">
    <img src="https://balutsav.org/wp-content/themes/cappa/admin/thumb.php?src=wp-content/uploads/2017/06/Education-makes-all-the-difference.jpg&w=700&h=700&zc=1&q=90" alt="orange tree" />
    <div class="overlay-text">
      Information about this event. Information about this event. Information about this event. Information about this event. Information about this event.
    </div>
  </div>
  <div class="content-on-image">
    <img src="https://www.bailinson-oleary.com/wp-content/uploads/2019/08/Child-Support.jpg" alt="orange tree" />
    <div class="overlay-text">
      Information about this event. Information about this event. Information about this event. Information about this event. Information about this event.
    </div>
  </div>
  <div class="content-on-image">
    <img src="https://s3.ap-southeast-1.amazonaws.com/images.asianage.com/images/aa-Cover-a9kq7pp6apo6bffrmh7370d4h0-20171101155522.Medi.jpeg" alt="orange tree" />
    <div class="overlay-text">
      Information about this event. Information about this event. Information about this event. Information about this event. Information about this event.
    </div>
  </div>
  <div class="content-on-image">
    <img src="http://rehabindiafoundation.org/sites/default/files/ngo.jpg" alt="orange tree" />
    <div class="overlay-text">
      Information about this event. Information about this event. Information about this event. Information about this event. Information about this event.
    </div>
  </div>
  <div class="content-on-image">
    <img src="http://www.paveinternships.com/wp-content/uploads/Human-Resource-Management-Internship-at-Non-Profit-.jpg" alt="orange tree" />
    <div class="overlay-text">
      Information about this event. Information about this event. Information about this event. Information about this event. Information about this event.
    </div>
  </div>
  <div class="content-on-image">
    <img src="https://www.netiapps.com/sites/default/files/what-does-the-ngo-sector-need-to-navigate-the-digital-era-1024x731.jpg" alt="orange tree" />
    <div class="overlay-text">
      Information about this event. Information about this event. Information about this event. Information about this event. Information about this event.
    </div>
  </div>

  <img src="https://balutsav.org/wp-content/themes/cappa/admin/thumb.php?src=wp-content/uploads/2017/06/Education-makes-all-the-difference.jpg&w=700&h=700&zc=1&q=90" alt="orange tree" />
  <img src="https://www.bailinson-oleary.com/wp-content/uploads/2019/08/Child-Support.jpg" alt="submerged" />
  <img src="https://s3.ap-southeast-1.amazonaws.com/images.asianage.com/images/aa-Cover-a9kq7pp6apo6bffrmh7370d4h0-20171101155522.Medi.jpeg" alt="look-out" />
  <img src="http://rehabindiafoundation.org/sites/default/files/ngo.jpg" alt="One World Trade" />
  <img src="http://www.paveinternships.com/wp-content/uploads/Human-Resource-Management-Internship-at-Non-Profit-.jpg" alt="drizzle" />
  <img src="https://www.netiapps.com/sites/default/files/what-does-the-ngo-sector-need-to-navigate-the-digital-era-1024x731.jpg" alt="cat nose" />
</div>
<!-- Flickity horizontal scroll menu ends -->

<!-- a gap div -->
<div class="gap" style="height: 200px;">
</div>

<!-- footer here -->
<!-- Class : site-footer -->
  <footer class="site-footer">
    <div class="footer-container">
      <div class="footer-row">
        <div class="footer-flexbox">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>

            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae, at, labore velit eligendi amet nobis repellat natus sequi sint consectetur excepturi doloribus.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="">AAAA</a></li>
              <li><a href="">BBBB</a></li>
              <li><a href="">CCCC</a></li>
              <li><a href="">DDDD</a></li>
              <li><a href="">EEEE</a></li>
              <li><a href="">FFFF</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>

        </div>
      </div>
      <hr>
    </div>
    <div class="footer-container">
      <div class="footer-row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by
       <a href="#">Project ReachOut</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com/projectreachoutmys/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a class="google" href="#"><i class="fa fa-google"></i></a></li>
            <li><a class="instagram" href="https://instagram.com/project_reachout?igshid=1q5nj1io229fc" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
</footer>
<!-- footer ends here -->

  </body>
</html>

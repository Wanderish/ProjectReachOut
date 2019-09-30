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
margin-bottom: 20px;
font-size: 17px;
line-height: 2;
}
.content {
padding: 50px 2% 250px;
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
.mouse {
display: block;
margin: 0 auto;
width: 26px;
height: 46px;
border-radius: 13px;
border: 2px solid #e8f380;
position: absolute;
bottom: 40px;
position: absolute;
left: 50%;
margin-left: -26px;
}
.mouse span {
display: block;
margin: 6px auto;
width: 2px;
height: 2px;
border-radius: 4px;
background: #e8f380;
border: 1px solid transparent;
-webkit-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
-webkit-animation-iteration-count: infinite;
animation-iteration-count: infinite;
-webkit-animation-name: scroll;
animation-name: scroll;
}
@-webkit-keyframes scroll {
0% {
  opacity: 1;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}
100% {
  opacity: 0;
  -webkit-transform: translateY(20px);
  transform: translateY(20px);
}
}
@keyframes scroll {
0% {
  opacity: 1;
  -webkit-transform: translateY(0);
  -ms-transform: translateY(0);
  transform: translateY(0);
}
100% {
  opacity: 0;
  -webkit-transform: translateY(20px);
  -ms-transform: translateY(20px);
  transform: translateY(20px);
}
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
    color: #FFF;
    text-decoration: none;
    font-family: "Montserrat", sans-serif;
    font-size: 20px;
    font-weight: bold;
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
    background: #FFF;
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

    </style>
  </head>


<body>

<!-- navbar -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
<div class="container yellow borderXwidth">
  <a>HOME</a>
  <a>ARTICLES</a>
  <a href="gallery.php">GALLERY</a>
  <a>ABOUT</a>
  <a>CONTACT</a>
</div>
<!-- navbar ends -->

<!-- !!!!!!!!!!!!!! include currently not working for THIS page !!!!!!!!!!!!!!!! -->
<?php include("includes/navbar.html") ?>

<div class="hero">
<!-- TITLE -->
    <h1><span>Project ReachOut</span><br>Project ReachOut</h1>
<!-- the mouse logo -->
    <div class="mouse">
        <span></span>
    </div>
</div>

<!-- Text content of the page -->
<div class="row content">
    <h1 class="sec01">Who are we?</h1>
    <p>Project ReachOut is an initiative undertaken by a group of like-minded students, whose aim is to work at various Social Service Organizations in Mysore, and impart the knowledge seeped from these precincts through the social media.      Unlike a database cataloging the mundane information pertaining to the many organizations, we present a first hand comprehensive account of the same. Our team will pay visits to each organization in Mysore and work under their banner for a couple days. It will obtain the pertinent details concerning the establishment and then, the same would be published on this blog.</p>
    <h1 class="sec02">Section 02</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae, at, labore velit eligendi amet nobis repellat natus sequi sint consectetur excepturi doloribus vero provident consequuntur accusamus quisquam nesciunt cupiditate soluta alias illo et deleniti voluptates facilis repudiandae similique dolore quaerat architecto perspiciatis officiis dolor ullam expedita suscipit neque minima rem praesentium inventore ab officia quos dignissimos esse quam placeat iste porro eius! Minus, aspernatur nesciunt consectetur. Sit, eius, itaque, porro, beatae impedit officia tenetur reiciendis autem vitae a quae ipsam repudiandae odio dolorum quaerat asperiores possimus corporis optio animi quisquam laboriosam nihil quam voluptatum quidem veritatis iste culpa iure modi perspiciatis recusandae ipsa libero officiis aliquam doloremque similique id quasi atque distinctio enim sapiente ratione in quia eum perferendis earum blanditiis. Nobis, architecto, veniam molestias minus iste necessitatibus est ab in earum ratione eveniet soluta molestiae sed illo nostrum nemo debitis. Minus, quod totam aliquam ea asperiores fugit quaerat excepturi dolores ratione numquam consequatur id unde alias provident vero incidunt exercitationem similique consequuntur hic possimus? Fuga, eveniet quaerat inventore corporis laborum eligendi enim soluta obcaecati aliquid veritatis provident amet laudantium est quisquam dolore exercitationem modi? Distinctio, pariatur, ab velit praesentium vitae quidem consequatur deleniti recusandae odit officiis. Quidem, cupiditate.</p>
</div>

<!-- Flickity horizontal scroll menu -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<div class="carousel"
  data-flickity='{ "imagesLoaded": true, "percentPosition": false, "wrapAround": true}'>
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
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae, at, labore velit eligendi amet nobis repellat natus sequi sint consectetur excepturi doloribus vero provident consequuntur accusamus quisquam nesciunt cupiditate soluta alias illo et deleniti voluptates facilis repudiandae similique dolore quaerat architecto perspiciatis officiis dolor ullam expedita suscipit neque minima rem praesentium inventore ab officia quos dignissimos esse quam placeat iste porro eius! Minus, aspernatur nesciunt consectetur.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
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
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="google" href="#"><i class="fa fa-google"></i></a></li>
            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
</footer>
<!-- footer ends here -->

  </body>
</html>

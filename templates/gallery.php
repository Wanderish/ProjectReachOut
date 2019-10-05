<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
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

/* gallery styling */
*,
*::before,
*::after {
margin: 0;
padding: 0;
outline: none;
box-sizing: border-box;
}
body {
margin: 0;
font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
color: #707070;
background-color: #333;
}
.gal-container {
margin: 0 auto;
max-width: 900px;
max-height: 100vh;
background-color: white;
}
/* Useful Classes */
.xy-center {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
.transition {
transition: all 350ms ease-in-out;
}
.r-3-2 {
width: 100%;
padding-bottom: 66.667%;
background-color: #ddd;
}
.image-holder {
background-size: cover;
background-position: center center;
background-repeat: no-repeat;
}
/* Main Styles */
.gallery-wrapper {
position: relative;
overflow: hidden;
}
.gallery {
position: relative;
white-space: nowrap;
font-size: 0;
}
.item-wrapper {
cursor: pointer;
width: 23%; /* arbitrary value */
display: inline-block;
background-color: white;
}
.gallery-item { opacity: 0.5; }
.gallery-item.active { opacity: 1; }
.controls {
font-size: 0;
border-top: none;
}
.move-btn {
display: inline-block;
width: 50%;
border: none;
color: #fff;
background-color: transparent;
padding: 0.2em 1.5em;
}
.move-btn:first-child {border-right: none;}
.move-btn.left  { cursor: w-resize; }
.move-btn.right { cursor: e-resize; }

/* navbar styling */
/* @import 'https://fonts.googleapis.com/css?family=Raleway'; */
div.container
{
    font-family: Raleway;
    margin: 0 auto;
    margin-bottom: 10px;
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

    </style>
  </head>
  <body>
<!-- logo -->
<div class="logo">
  <img height="120" src="data:image/jpeg;base64,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" alt="logo here">
</div>

    <!-- navbar -->
    <div class="container yellow borderXwidth">
      <a href="/">HOME</a>
      <a>EVENTS</a>
      <a href="gallery.php">GALLERY</a>
      <a href="about.html">ABOUT</a>
      <a href="#">DONATE</a>
      <a>CONTACT</a>
    </div>

    <div class="gal-container">
      <div class="feature">
        <figure class="featured-item image-holder r-3-2 transition"></figure>
      </div>
      <div class="gallery-wrapper">
		    <div class="gallery">
				      <div class="item-wrapper">
					           <figure class="gallery-item image-holder r-3-2 active transition"></figure>
				      </div>
				      <div class="item-wrapper">
					           <figure class="gallery-item image-holder r-3-2 transition"></figure>
				      </div>
				      <div class="item-wrapper">
					               <figure class="gallery-item image-holder r-3-2 transition"></figure>
				      </div>
				      <div class="item-wrapper">
					           <figure class="gallery-item image-holder r-3-2 transition"></figure>
				      </div>
				      <div class="item-wrapper">
					           <figure class="gallery-item image-holder r-3-2"></figure>
				      </div>
				      <div class="item-wrapper">
					           <figure class="gallery-item image-holder r-3-2 transition"></figure>
				      </div>
				      <div class="item-wrapper">
					           <figure class="gallery-item image-holder r-3-2 transition"></figure>
				      </div>
				      <div class="item-wrapper">
					           <figure class="gallery-item image-holder r-3-2 transition"></figure>
				      </div>
				      <div class="item-wrapper">
					           <figure class="gallery-item image-holder r-3-2 transition"></figure>
				      </div>
				      <div class="item-wrapper">
					           <figure class="gallery-item image-holder r-3-2 transition"></figure>
				      </div>
            </div>
          </div>

	<div class="controls">
		<button class="move-btn left">&larr;</button>
		<button class="move-btn right">&rarr;</button>
	</div>

</div>

<!-- javascript -->
<script type="text/javascript">
var gallery = document.querySelector('.gallery');
var galleryItems = document.querySelectorAll('.gallery-item');
var numOfItems = gallery.children.length;
var itemWidth = 23; // percent: as set in css

var featured = document.querySelector('.featured-item');

var leftBtn = document.querySelector('.move-btn.left');
var rightBtn = document.querySelector('.move-btn.right');
var leftInterval;
var rightInterval;

var scrollRate = 0.2;
var left;

function selectItem(e) {
if (e.target.classList.contains('active')) return;

featured.style.backgroundImage = e.target.style.backgroundImage;

for (var i = 0; i < galleryItems.length; i++) {
  if (galleryItems[i].classList.contains('active'))
    galleryItems[i].classList.remove('active');
}

e.target.classList.add('active');
}

function galleryWrapLeft() {
var first = gallery.children[0];
gallery.removeChild(first);
gallery.style.left = -itemWidth + '%';
gallery.appendChild(first);
gallery.style.left = '0%';
}

function galleryWrapRight() {
var last = gallery.children[gallery.children.length - 1];
gallery.removeChild(last);
gallery.insertBefore(last, gallery.children[0]);
gallery.style.left = '-23%';
}

function moveLeft() {
left = left || 0;

leftInterval = setInterval(function() {
  gallery.style.left = left + '%';

  if (left > -itemWidth) {
    left -= scrollRate;
  } else {
    left = 0;
    galleryWrapLeft();
  }
}, 1);
}

function moveRight() {
//Make sure there is element to the leftd
if (left > -itemWidth && left < 0) {
  left = left  - itemWidth;

  var last = gallery.children[gallery.children.length - 1];
  gallery.removeChild(last);
  gallery.style.left = left + '%';
  gallery.insertBefore(last, gallery.children[0]);
}

left = left || 0;

leftInterval = setInterval(function() {
  gallery.style.left = left + '%';

  if (left < 0) {
    left += scrollRate;
  } else {
    left = -itemWidth;
    galleryWrapRight();
  }
}, 1);
}

function stopMovement() {
clearInterval(leftInterval);
clearInterval(rightInterval);
}

leftBtn.addEventListener('mouseenter', moveLeft);
leftBtn.addEventListener('mouseleave', stopMovement);
rightBtn.addEventListener('mouseenter', moveRight);
rightBtn.addEventListener('mouseleave', stopMovement);


//Start
(function init() {
var images = [
  'https://balutsav.org/wp-content/themes/cappa/admin/thumb.php?src=wp-content/uploads/2017/06/Education-makes-all-the-difference.jpg&w=700&h=700&zc=1&q=90',
  'https://www.bailinson-oleary.com/wp-content/uploads/2019/08/Child-Support.jpg',
  'https://s3.ap-southeast-1.amazonaws.com/images.asianage.com/images/aa-Cover-a9kq7pp6apo6bffrmh7370d4h0-20171101155522.Medi.jpeg',
  'http://rehabindiafoundation.org/sites/default/files/ngo.jpg',
  'http://www.paveinternships.com/wp-content/uploads/Human-Resource-Management-Internship-at-Non-Profit-.jpg',
  'https://www.netiapps.com/sites/default/files/what-does-the-ngo-sector-need-to-navigate-the-digital-era-1024x731.jpg',
  'https://protsahan.co.in/wp-content/uploads/2017/06/Home_slider-5.jpg',
  'https://www.thebetterindia.com/wp-content/uploads/2018/06/NGO1.jpeg',
  'http://www.flanderstoday.eu/sites/default/files/webimages/natural_stone_3_1.jpg',
  'https://bice.org/app/uploads/2014/06/faire_un_legs_association_catholique_bice_2.jpg'
];

//Set Initial Featured Image
featured.style.backgroundImage = 'url(' + images[0] + ')';

//Set Images for Gallery and Add Event Listeners
for (var i = 0; i < galleryItems.length; i++) {
  galleryItems[i].style.backgroundImage = 'url(' + images[i] + ')';
  galleryItems[i].addEventListener('click', selectItem);
}
})();
</script>

  </body>
</html>

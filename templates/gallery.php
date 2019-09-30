<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
    <style media="screen">

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

    </style>
  </head>
  <body>
    <!-- navbar -->
    <div class="container yellow borderXwidth">
      <a>HOME</a>
      <a>ARTICLES</a>
      <a>GALLERY</a>
      <a>ABOUT</a>
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

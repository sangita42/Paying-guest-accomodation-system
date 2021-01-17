
<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
        <style>
            body{
           
                margin:0;
            }
               
          
            .header{
                background-color:beige;
                text-align:center;
                padding: 6px;
                text-decoration-color: chartreuse;
            }
            .navbar{
                overflow: hidden;
                background-color: darkkhaki;
            }
            .navbar a{
                float: right;
                color: darkblue;
                padding: 18px 12px;
                display: block;
                font-family: fantasy;
                font-size: 21px;
              
                text-decoration: inherit;
            }
            .topnav a:hover {
  background-color: #ddd;
  color: black;
                
}
            {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
       


            .footer{
                background-color: bisque;
                text-align: justify;
            }
        </style>
       
    </head>
    <body>
        <div class="header">
            <h1>GuestIn</h1>
            
        </div>
        
       <nav class="navbar">
           <a href="" >Become a Host</a>
           <a href="userlogin.php">User Sign up/Sign in</a>
           <a> contact us</a>
        </nav>
        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://www.trinsurance.com/content/wp-content/uploads/2015/06/4038233322_68f53080e4_z.jpg" style="width:100% ">
  <div class="text">Shared rooms</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://s3.ap-south-1.amazonaws.com/zo-media/cache/_8ecb9ca1b48683da8c3ea1398dd7f8d3/Kitchen_01_1000x800.jpg" style="width:100%">
  <div class="text">Full house</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://images.nestpick.com/de-live/parisattitude-2018/thumbs/medium/4f6a72d3829f4d0df7c8c5836c93de487ba29bef-11926.jpg" style="width:100%">
  <div class="text">private rooms</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
        
        <div class="footer">
            <p>email id-sangita01998@gmail.com</p>
            <p> helpine no- 9735828269</p>
            
        </div>
        
        
   
        
    </body>
</html>
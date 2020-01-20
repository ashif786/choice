<!DOCTYPE html>
 <?php include'link-file.php'; ?>
<html lang="en">
    <head>        
         
    <?php include'main-header.php'; ?>
	 
    </head>
    <style>
        body{
            color: #524b4b;
  
    font-family: 'Open Sans', sans-serif !important;
}
      .nav>li>a:focus, .nav>li>a:hover { background-color: transparent;color:#ffd000;} 
      
      .nav .open>a, .nav .open>a:focus, .nav .open>a:hover { background-color: #eeeecc05; }
      
      /* drop-down on hover*/
      .dropdown:hover .dropdown-menu {
  display: block;
}
/*on window minimize menu drop down menu makes non resp. page so
made 781 under left and 782 above right menu*/
 
@media (min-width: 782px) {
 #pull {
    float: right;
  }
}
/*background color on hover for drop down menu*/
.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover { background-color: #abb7c800 !important;  background-image: none; color: #ffd000;}
/*when minimizing ther will be a button for the menu collapse. this code is for changing the width and height of the icon*/
.navbar-toggle .icon-bar { width: 28px; height: 4px;  }

li>a{
    color:white;
}
/*for small arrow*/
 .srv::before {
border-bottom: 10px solid #fff;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    content: "";
    left: 25px;
    position: absolute;
    top: -10px;
}
 
.active:active{
    color: green !important;
}
    </style>
	
    <body>
	<a id="button"></a> 
  <nav class="navbar" style="margin-bottom: 0px;  border: 0px solid transparent;position: sticky;top: 0; z-index:1;"> 
      <div class="container-fluid" style="background-color: #000000b5;">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar" style="background:#e6161e7a;"></span>
        <span class="icon-bar" style="background:#e6161e7a;"></span>
        <span class="icon-bar" style="background:#e6161e7a;"></span>
      </button>
      <img class="img-responsive" src="img/Choice Auto Rental.png" style="margin: 0 auto;width: 40%;" alt=""/>
       
    </div>
      <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav" id='pull' style="margin-top:15px;">
      <li class="active"><a href="#" style=""  >Home</a></li>
       <li><a href="#" style=" " class="">About Us</a></li>
      <li><a href="#" style=" " class="">Contact Us</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="" >Services  
         </a>
        <ul class="dropdown-menu">
          <li><a href="#" class="srv" style=";">Price</a></li>
          
          <li><a href="#" class="" style=";">Driver</a></li>
          <li><a href="#" class="" style=";">FAQ</a></li>
          <li><a href="#" class="" style=";">Gallery</a></li>
           
        </ul>
      </li>   
       <li><a href="#" style=";" class="">Cars</a></li>
        <li><a href="#" style=";" class="">Blog</a></li>
         <a href="https://workwithglobal.com" target="_blank"> 
              <img class="img-responsive" style="margin: 0 auto; width: 18%;" src="img/logo/hiring.png" alt=""/>
              </a>
      
       
      
    </ul>
           </div>
  </div>
  </nav> 
    
    
   </body>      
    
 </html>
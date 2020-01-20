<!DOCTYPE html>
<html lang="en">
    
    <head>        
       <script src='https://www.google.com/recaptcha/api.js'></script>
	<?php include'header.php'; ?>
    </head>
    <style>
     

 
       
		 
	 /*hover color on href*/
   a:focus, a:hover {
     
    text-decoration: none; 
}
     
  /*car icon near line*/      
.mycar::after{
   background-color: #333;
    content: "";
    height: 2px;
    position: absolute;
     
    width: 50px;
    top: 12px;
    margin: 3px;
}
/*car icon near line with other color*/
.colorss::after{
    background-color: white;
}

/*car icon near line*/
.kiko::before{
    background-color: #333;
    content: "";
    height: 2px;
    position: absolute;
     
    width: 50px;
    top: 12px;
    margin: 3px 0px 0px -55px;
}
/*car icon near line with other color*/
.kik::before{
    background-color: white;
     
}
 
.buttons:hover {
    background: black !important;
    transition: 0.5s;
}

 /*for store button */
 .store:hover{
     background: #ffd000;
     transition: 0.5s;
 }
 /*readmore button*/
 .readmor:hover{
     
     background: #ffd000!important;
     transition: 0.5s;
     
 }
 .readmor:hover a{
     color:white !important;
      transition: 0.5s;
 }
 /**/
 .imggray{
     filter: grayscale(100%);
 }
 .blogimg:hover img{
     filter: grayscale(0) !important;
     transition: 0.5s;
     
 }
    </style>
	 
    <body>
        <div class="container-fluid  " style="background: linear-gradient(0deg, rgba(255, 0, 150, 0), rgb(0, 0, 0)), url(img/banner.jpg); background-size:cover;background-position: center center;">
            
   <div class="row"><br><br>
       <div class="col-sm-4  col-sm-offset-1" style="background-color: rgba(255, 255, 255, 0.8);"><br>
           <h4>PICK-UP LOCATION:</h4>
           <select name=" " class="form-control" style="border: 1px solid #ffd000;">
                     <option value="">  </option>
                         <option value="1">Comilla</option>
                                    <option value="2">Barishal </option>
                                                 
                                        </select>
           <h4>PICK-UP DATE:</h4>
           <input type="date" style="border: 1px solid #ffd000;" placeholder="Date" class="form-control" value=" " >
            <h4>RETURN DATE:</h4>
            <input type="date" style="border: 1px solid #ffd000;" class="form-control" value="">
            <h4>CHOOSE CAR TYPE:</h4>
            <select name=" " style="border: 1px solid #ffd000;" class="form-control">
                     <option value=""> </option>
                         <option value="1">Audi</option>
                                    <option value="2">Luxus</option>
                                     <option value="3">BMW</option>
                                                 
                                        </select>
             <br>
             <div style="text-align: center; background: #ffd000; font-weight: bold; margin: 0 auto; width: 30%; padding: 10px; "><a href="" style="color: black;">Book Now</a></div>
              <br>
       </div>
       <div class="col-sm-6 col-sm-offset-1"><br><br><br><br>
           <div class="row">
            <div class="col-sm-9 col-sm-offset-1">
           <h1 style="color:#ffd000;font-size: 50px; font-weight: bold; ">
               Book Car Today!
           </h1>
               </div>  
               </div>
               <div class="row">
            <div class="col-sm-8">
           <p style="color:white;text-align: right;font-weight: bold;">
               FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT
FOR OUR RETURNING CUSTOMERS
           </p>
            </div>
                   </div>
       </div>
             
   </div><br><br>
   </div>
        <div class="container">
    
       <div class="row">
       <div class="col-sm-12">
       <h1 style="text-align: center;font-weight: bold;color:black;" >ABOUT US</h1>
       </div>
           </div>
           <div class="row">
               <div class="col-sm-12 kiko" style="text-align:center;">
           <i class="fas fa-car mycar" style="font-size: 25px;"></i>
           </div>
               <div class="col-sm-12" style="text-align:center;">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit.
               </div>
               </div><br><br>
               <div class="row "><br>
                   <div class="col-sm-6">
                       <p style="text-align:justify;line-height: 30px;">
                           Lorem simply dummy is a texted of the printing costed and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                       </p>
                       <p style="text-align:justify;line-height: 30px;">
                           Lorem simply dummy is a texted of the printing costed and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi aliquid debitis optio praesentium, voluptate repellat accusantium deserunt eius.
                       </p><br>
                       <div class="col-sm-3 col-xs-4 buttons col-xs-offset-1" style=" background: #ffd000; text-align: center; border-radius: 5pc; padding: 12px;"><a href="" style="color:white;text-transform: uppercase;font-weight: bold;">Book a Car</a></div>
                       <div class="col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-1 buttons" style="color:white;background: #ffd000; text-align: center; border-radius: 5pc; padding: 12px;"><a href="" style="color:white;text-transform: uppercase;font-weight: bold;">Contact Us</a></div>
                   </div>
                   <div class="col-sm-6">
                       <img class="img-responsive" style="border-radius: 5px;  max-height: 350px;" src="img/banner.jpg" alt=""/>
                      </div>   
           </div>
             
   
             
     <br>
            </div>
        <div class="container-fluid" style="background: #eaeaea;">
        <div class="row"><br><br>
                 
                <div class="col-sm-12">
                  <?php include'clientslides.php'; ?>
                </div>    
            </div> <br><br>
            </div>
        <div class="container">
    
       <div class="row">
       <div class="col-sm-12">
       <h1 style="text-align: center;font-weight: bold;color:black;" >OUR SERVICES</h1>
       </div>
           </div>
           <div class="row">
               <div class="col-sm-12 kiko" style="text-align:center;">
           <i class="fas fa-car mycar" style="font-size: 25px;"></i>
           </div>
               <div class="col-sm-12" style="text-align:center;">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit.
               </div>
               </div><br><br>
               <div class="row "><br>
                   <div class="col-sm-4">
                       <div style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);padding: 60px;">
                       <center>
                            <i class="fas fa-car" style="font-size: 60px;"></i>
                       </center>
                       <center style="color: black;font-size: 30px;">
                           RENTAL CAR
                       </center>
                       <center style="color:black;"> 
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.
                       </center>
                           </div>
                   </div>
                   <div class="col-sm-4">
                       <div style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);padding: 60px;">
                       <center>
                            <i class="fas fa-cog" style="font-size: 60px;"></i>
                       </center>
                       <center style="color: black;font-size: 30px;">
                           CAR REPAIR
                       </center>
                       <center style="color:black;"> 
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.
                       </center>
                           </div>
                   </div>
            <div class="col-sm-4">
                       <div style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);padding: 60px;">
                       <center>
                            <i class="fas fa-map-marker-alt" style="font-size: 60px;"></i>
                       </center>
                       <center style="color: black;font-size: 30px;">
                           TAXI SERVICE
                       </center>
                       <center style="color:black;"> 
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.
                       </center>
                           </div>
                   </div>     
           </div>
               <div class="row "><br>
                   <div class="col-sm-4">
                       <div style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);padding: 60px;">
                       <center>
                            <i class="far fa-life-ring" style="font-size: 60px;"></i>
                       </center>
                       <center style="color: black;font-size: 30px;">
                             INSURANCE
                       </center>
                       <center style="color:black;"> 
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.
                       </center>
                           </div>
                   </div>
                   <div class="col-sm-4">
                       <div style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);padding: 60px;">
                       <center>
                            <i class="fas fa-bath" style="font-size: 60px;"></i>
                       </center>
                       <center style="color: black;font-size: 30px;">
                           CAR WASH
                       </center>
                       <center style="color:black;"> 
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.
                       </center>
                           </div>
                   </div>
            <div class="col-sm-4">
                       <div style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);padding: 60px;">
                       <center>
                            <i class="fas fa-phone-alt" style="font-size: 60px;"></i>
                       </center>
                       <center style="color: black;font-size: 30px;">
                           CALL DRIVER
                       </center>
                       <center style="color:black;"> 
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.
                       </center>
                           </div>
                   </div>     
           </div>
             
   
             
     <br>
            </div>
        <div class="container-fluid" style="padding:80px;background: linear-gradient(to right, #000000bd, #000000bd, #000000bd, #000000bd, #000000bd, #000000bd, #000000bd), url(img/funfact-bg.jpg); background-size: cover; background-position: center center; color: #fff;">
   
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1" style="background: black;">
                    <div class="col-sm-3 col-sm-offset-1" style="margin-top: 18px;">
                        <i class="far fa-smile" style="font-size: 50px;"></i>
                    </div>
                    <div class="col-sm-8" id="counter">
                        <center style="font-size: 40px;" class="counter-value"   data-count="550">0</center>
                        <h5 style="text-align: center; font-weight: bold;">HAPPY CLIENTS</h5>
                    </div>
                </div>
            <div class="col-sm-3 col-sm-offset-1" style="background: black;">
                    <div class="col-sm-3 col-sm-offset-1" style="margin-top: 18px;">
                        <i class="fas fa-car" style="font-size: 50px;"></i>
                    </div>
                    <div class="col-sm-8" id="counter">
                        <center style="font-size: 40px;" class="counter-value"   data-count="250">0</center>
                        <h5 style="text-align: center; font-weight: bold;">CARS IN STOCK</h5>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1" style="background: black;">
                    <div class="col-sm-3 col-sm-offset-1" style="margin-top: 18px;">
                        <i class="fas fa-landmark" style="font-size: 50px;"></i>
                    </div>
                    <div class="col-sm-8" id="counter">
                        <center style="font-size: 40px;" class="counter-value"   data-count="50">0</center> 
                        <h5 style="text-align: center; font-weight: bold;">OFFICE IN CITIES</h5>
                    </div>
                </div>
             
   </div>
   </div>  
        <div class="container">
    
       <div class="row">
       <div class="col-sm-12">
       <h1 style="text-align: center;font-weight: bold;color:black;" >CHOOSE YOUR CAR</h1>
       </div>
           </div>
           <div class="row">
               <div class="col-sm-12 kiko" style="text-align:center;">
           <i class="fas fa-car mycar" style="font-size: 25px;"></i>
           </div>
               <div class="col-sm-12" style="text-align:center;">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit.
               </div>
               </div><br><br>
        <?php include 'dynamic-tabs.php'; ?>
        </div> 
        <div class="container-fluid" style="background: linear-gradient(to right, #000000bd, #000000bd, #000000bd, #000000bd, #000000bd, #000000bd, #000000bd), url(img/hovers-car/pricing-bg.jpg);    background-size: cover;   background-position: center center;">
           <div class="row">
       <div class="col-sm-12">
       <h1 style="text-align: center;font-weight: bold;color:white;" >ONLY QUALITY FOR CLIENTS</h1>
       </div>
           </div>
           <div class="row">
               <div class="col-sm-12 kiko kik" style="text-align:center;">
           <i class="fas fa-car mycar colorss" style="font-size: 25px;"></i>
           </div>
               <div class="col-sm-12" style="text-align:center;color:white;">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit.
               </div>
               </div><br><br>
            <div class="row">
                <div class="col-sm-4" > 
                     <div style="background-color: rgba(255, 255, 255, 0.15);text-align: center;"><br>
                    <h3 style="color:white;">BUSINESS</h3>
                    <h1 style="color:#ffd000;font-weight:bold;">$ 55.99</h1>
                    <h5 style="color:#ffd000;">PER MONTH</h5>
                    <hr>
                    <p style="color:white;font-weight:bold;">FREE VEHICLE DELIVERY</p>
                    <hr>
                     <p style="color:white;font-weight:bold;">WEDDINGS CELEBRATIONS</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">FULL INSURANCE INCLUDED</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">TRANSPORT ABROAD</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">ALL INCLUSIVE MINI BAR</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">CHAUFFER INCLUDED IN PRICE</p><br><br>
                </div>
                 </div>
            <div class="col-sm-4" > 
                     <div style="background-color: rgba(255, 255, 255, 0.15);text-align: center;"><br>
                    <h3 style="color:white;">TRIAL</h3>
                    <h1 style="color:#ffd000;font-weight:bold;">FREE</h1>
                    <h5 style="color:#ffd000;">PER MONTH</h5>
                    <hr>
                    <p style="color:white;font-weight:bold;">FREE VEHICLE DELIVERY</p>
                    <hr>
                     <p style="color:white;font-weight:bold;">OTHER CELEBRATIONS</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">FULL INSURANCE</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">TRANSPORT ABROAD</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">MINI BAR</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">INCLUDED IN PRICE</p><br><br>
                </div>
                 </div>
                 <div class="col-sm-4" >
                     <div style="background-color: rgba(255, 255, 255, 0.15);text-align: center;"><br>
                    <h3 style="color:white;">STANDARD</h3>
                    <h1 style="color:#ffd000;font-weight:bold;">$ 35.99</h1>
                    <h5 style="color:#ffd000;">PER MONTH</h5>
                    <hr>
                    <p style="color:white;font-weight:bold;">DELIVERY AT AIRPORT</p>
                    <hr>
                     <p style="color:white;font-weight:bold;">WEDDINGS AND OTHER</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">FULL INCLUDED</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">TRANSPORT ABROAD</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">ALL MINI BAR</p>
                     <hr>
                     <p style="color:white;font-weight:bold;">CHAUFFER PRICE</p> <br><br>
                </div> 
                 </div> 
            
   </div><br> <br> 
   </div> 
        <div class="container-fluid" style="background: #2726258a;"> 
   <div class="row">
       <br><br>
       <div class="col-sm-6 text-center col-xs-6">
           <span class="store" style=" font-weight: bold;border: 3px solid #ffd000;   padding: 15px;border-radius: 25px;"><i class="fab fa-android"></i> <a href="" style="color:white;">Android Store</a></span>
       </div>
       <div class="col-sm-6 text-center col-xs-6">
           <span class="store" style=" font-weight: bold;border: 3px solid #ffd000;   padding: 15px;border-radius: 25px;"><i class="fab fa-apple"></i><a href="" style="color:white;"> Apple Store</a></span>
       </div>
             
   </div><br><br>
   </div>  
        <div class="container" >
             
          <div class="row">
       <div class="col-sm-12">
       <h1 style="text-align: center;font-weight: bold;color:black;" >TIPS AND ARTICLES</h1>
       </div>
           </div>
           <div class="row">
               <div class="col-sm-12 kiko" style="text-align:center;">
           <i class="fas fa-car mycar" style="font-size: 25px;"></i>
           </div>
               <div class="col-sm-12" style="text-align:center;">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit.
               </div>
               </div><br><br> 
               <div class="row" style="box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
                   <div class="col-sm-6 blogimg"><br>
                       <img class="img-responsive imggray"   src="img/blog/arti-thumb-1.jpg" alt=""/><br><br>
                   </div>
                   <div class="col-sm-6"><br><br>
                       <h4 style="font-weight:bold;">WLIQUAM SIT AMET URNA EULLAM</h4>
                       <span> <span style="color:#ffd000;">By :: ADMIN</span>&nbsp; <span style="color:#ffd000;">Comments ::12</span></span>
                      <br><br>
                      <p style="line-height: 30px;  color: #9E9E9E;">Wlam Aiber Vestibulum Fringilla Oremedad Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Doned Eiusmod Tempored Incididunt Ut Labore Et Dolore Magna Aliquaa Enimd Ad Minim Veniad.</p>
                      <br>
                       <div class="col-sm-3 text-center readmor" style="padding: 10px; background: black;   font-weight: bold;"><a href="" style="color:#ffd000;">READ MORE..</a></div>
                   </div>
            
   </div><br><br>
   <div class="row" style="box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
                   
                   <div class="col-sm-6"><br>
                       <h4 style="font-weight:bold;">FRINGILLA OREMEDAD IPSUM DOLOR SIT</h4>
                       <span> <span style="color:#ffd000;">By :: ADMIN</span>&nbsp; <span style="color:#ffd000;">Comments ::12</span></span>
                      <br><br>
                      <p style="line-height: 30px;  color: #9E9E9E;">Wlam Aiber Vestibulum Fringilla Oremedad Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Doned Eiusmod Tempored Incididunt Ut Labore Et Dolore Magna Aliquaa Enimd Ad Minim Veniad.</p>
                      <br>
                       <div class="col-sm-3 text-center readmor" style="padding: 10px; background: black;   font-weight: bold;"><a href="" style="color:#ffd000;">READ MORE..</a></div>
                   </div>
       <div class="col-sm-6 blogimg"><br><br>
                       <img class="img-responsive imggray"   src="img/blog/arti-thumb-2.jpg" alt=""/><br><br>
                   </div>
            
   </div><br><br>
   <div class="row" style="box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
                   <div class="col-sm-6 blogimg"><br>
                       <img class="img-responsive imggray"   src="img/blog/arti-thumb-3.jpg" alt=""/><br><br>
                   </div>
                   <div class="col-sm-6"><br><br>
                       <h4 style="font-weight:bold;">WLIQUAM SIT AMET URNA EULLAM</h4>
                       <span> <span style="color:#ffd000;">By :: ADMIN</span>&nbsp; <span style="color:#ffd000;">Comments ::12</span></span>
                      <br><br>
                      <p style="line-height: 30px;  color: #9E9E9E;">Wlam Aiber Vestibulum Fringilla Oremedad Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Doned Eiusmod Tempored Incididunt Ut Labore Et Dolore Magna Aliquaa Enimd Ad Minim Veniad.</p>
                      <br>
                       <div class="col-sm-3 text-center readmor" style="padding: 10px; background: black;   font-weight: bold;"><a href="" style="color:#ffd000;">READ MORE..</a></div>
                   </div>
            
   </div><br><br>
               
               
</div>
         <div class="container-fluid">
             <div class="row" style="background: #1e2228;">
            <div class="col-sm-4 text-center">
                <h3 style="color: white;font-weight: bold;">ABOUT US</h3><br>
                <img class="img-responsive" style="margin:0 auto;width:30%;" src="img/Choice Auto Rental.png" alt=""/><br>
                <p style="text-align: justify;  color: white;">Lorem ipsum dolored is a sit ameted consectetur adipisicing elit. Nobis magni assumenda distinctio debitis, eum fuga fugiat error reiciendis.</p>
           <div class="row"><br>
                  <div class="col-sm-4"> 
                 <a href="https://www.woundedwarriorproject.org/privacy-policy" target="_blank">Privacy Policy</a> 
                </div>
                  <div class="col-sm-4">
                 <a href="https://www.woundedwarriorproject.org/terms-of-use" target="_blank">Terms of Use</a>
                  </div>
                      </div>
            </div>
                 
            <div class="col-sm-4   ">
                <h3 style="color: white;font-weight: bold;">SIGN UP</h3><br>
            <form class="form-horizontal" action=" " style="position: relative;">
  
  <div class="form-group">
    
    <div class="col-sm-10">
      <input type="name" class="form-control" id="pwd" placeholder="Enter name">
    </div>
  </div>
   <div class="form-group">
     
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>   
                      <div class="form-group">
    
    <div class="col-sm-10">
        <div class="g-recaptcha" data-sitekey="6LfATcgUAAAAAJ_Uo-6O9yOsrFMv7D3mh_E5Awew"></div>
    </div>
  </div>
   
  <div class="form-group">
    <div class="col-sm-10 text-center">
        <div class="readmor" style="padding: 10px;   background: black;  font-weight: bold;"><a href="" style="color:#ffd000;text-transform: uppercase;">Subscribe Our Newsletter</a></div>
    </div>
  </div>
                
</form>
            </div>
            <div class="col-sm-4 text-center">
                <h3 style="color: white;font-weight: bold;">ADDRESS</h3><br>
            <p style="color: #ffd000;   font-weight: bold;">54 Perry Rd</p>
                  <p style="color: #ffd000;   font-weight: bold;">Bangor</p>
                  <p style="color: #ffd000;   font-weight: bold;">ME 04401</p>
                  <p style="color: #ffd000;   font-weight: bold;">Phone : 2079571999</p>
                  <p style="color: #ffd000;   font-weight: bold;">Fax :(207) 989-2880 </p>
                   <div class="row"><br>
        <div class="col-sm-4 col-xs-6" style="margin-top: -10px;">
            <img class="img-responsive" src="img/logo/BBB.jpeg" alt=""/>
        </div>
        <div class="col-sm-4 col-xs-6" style="margin-top: -10px;">
            <img class="img-responsive" src="img/logo/christian.JPG" alt=""/>
        </div>
        <div class="col-sm-4 col-xs-6" style="margin-top: -10px;">
            <img class="img-responsive" src="img/logo/logo.gif" alt=""/>
        </div>
            </div><br>
        <div class="row">
        <div class="col-sm-4 col-xs-6" style="margin-top: -10px;">
            <a href="https://workwithglobal.com" target="_blank"> 
                <img class="img-responsive" src="img/logo/hiring.jpeg" alt=""/>
                </a>
        </div>
        <div class="col-sm-4 col-xs-6" style="margin-top: -10px;"> 
            <img class="img-responsive" src="img/logo/mcfe.png" alt=""/>
        </div>
        <div class="col-sm-4 col-xs-6" style="margin-top: -10px;">
             <img class="img-responsive" src="img/logo/norton.png" alt=""/>
        </div>
        </div>
                  
            </div>
            
   </div>
   </div> 
       
           
 
        
         
         
   <?php include'footer.php'; ?>
   </body>    
   <!-- js for number count on scroll-->
   <script src="js/number-count.js" type="text/javascript"></script>
	</html>
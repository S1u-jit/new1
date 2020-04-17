<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .col-md-3{
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    body{

      background-color: #718093;
    }
    .top{
      margin-top: 5rem;
    }
  
/*.paralax .parallax_R{
  -webkit-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
-moz-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
box-shadow: 0 8px 6px -6px black;
}*/
    
    .bag:before{
      background: linear-gradient(160deg,#16c9f6 55%,#fff 0%);
      /*-ms-transform: rotate(20deg); *//* IE 9 */
/*  transform: rotate(20deg);*/ 
   content: "";
   position: absolute;
   top:0%;
   bottom:0%;
   left:0%;
   right:0%;
  z-index: -1;

    }
      .bagg:before{
    background: linear-gradient(160deg,rgba(0,212,255,1) 39%, #9c88ff 0% );
      /*-ms-transform: rotate(20deg); *//* IE 9 */
/*  transform: rotate(20deg);*/ 
   content: "";
   position: absolute;
   top:0%;
   bottom:0%;
   left:0%;
   right:0%;
  z-index: -1;}
    .bag,.bagg{
       height: 100vh;
       width: 100%;
       position: relative;
    }
    .field_set{
      /*border-color: #;*/
      border-style: 5px solid #ffffff;
      z-index: 1;

    }
    @media screen and (max-width: 748px){
    .full{
       width: 100%!important;
      /* height: 100% !important;*/
    }
    }
/*.container{
  border-radius: 50% !important;
}*/

    .parallax {
      /* The image used */
      background-image: url("image/slide1.jpg");

      /* Set a specific height */
      min-height: 500px; 

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
     text-align: center;
     justify-content: center;
     align-items: center;
     display: flex;
      -webkit-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
-moz-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
box-shadow: 0 8px 6px -6px black;
     border-radius: 25px 25px 25px 25px;

    }
    .parallax_R{
       /* Set a specific height */
      min-height: 500px; 

      /* Create the parallax scrolling effect */
    /*  background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
     text-align: center;
     justify-content: center;
     align-items: center;
     display: flex;
    -webkit-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
-moz-box-shadow: -12px 10px 74px 10px rgba(0,0,0,0.86);
box-shadow: 0 8px 6px -6px black;*/
/* border-radius: 25px 25px 25px 25px;*/


    }
    .parallax:hover{
        box-shadow: 0 8px 6px -0.3px black;
      transform: translate(0, -10px);
      background-color: red;
      transition: 4s;
      transition-timing-function: linear;
    }
    .parallax_R{
        box-shadow: 0 8px 6px -0.3px black;
      /*transform: translate(0, -10px);*/
    /*  background-color: red;*/
      transition: 2s;
      transition-timing-function: linear;
    }
    .input-container {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      width: 100%;
      margin-bottom: 15px;
    }

    .icon {
      padding: 10px;
      background: dodgerblue;
      color: white; 
      min-width: 50px;
      text-align: center;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      outline: none;
    }

    .input-field:focus {
      border: 2px solid dodgerblue;
    }

    /* Set a style for the submit button */
    .btn {
      background-color: dodgerblue;
      color: white;
      padding: 15px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .btn:hover {
      opacity: 1;
    }
  </style>
  <link rel="Stylesheet" type="text/css" href="css/Style.css">
  <title>

  </title>
  <?php
  include 'link/links.php';
  ?>
</head>
<body style="background-color: #f5f54">
  <nav class="navbar navbar-expand-lg navbar-dark  pl-5" style="position: sticky ; top:0; z-index: 1; background: linear-gradient(120deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 39%, rgba(0,212,255,1) 95%);">
    <a class="navbar-brand  " href="#" style="padding: 5px;">COVID-19 </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5">
        <li class="nav-item active mr-3  ">
          <a class="nav-link color" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mr-3 ">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link " href="#">Disabled</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link " href="#">Disabled</a>
        </li>
      </ul>


    </div>
  </nav>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 360px; "  style="position: absolute; z-index: 1;"> 
    <div class="carousel-inner" style="height: 360px;">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid height: auto; " src="image/slide1.jpg " alt="First slide" style="height: 100%; filter: blur(2px);">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid  height: auto;" src="image/slide2.jpg" alt="Second slide" style="height: 100%; filter: blur(2px);">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid  height: auto;" src="image/slide3.jpg" alt="Third slide" style="height: 100%; filter: blur(2px);">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div></div>

  <div class="card position" style="text-align: center; display: flex; justify-content: center;">
   <div class="color">
    <h1>Beat The Covid-19</h1>

  </div>
</div>
</div>
<div class="bag">
<?php
include 'Symptoms.php';

?>
</div>
<div class="bagg">
<?php
include 'prevention.php';

?>
</div>





<!--  <div style="height: 50vh; background-color:yellow; margin-top: 0; top:80;
 margin-top:200px;"></div> -->

 <!-- <div style="height: 50vh; background-color:blue; margin-top: 0; top:80;
   margin-top:200px;"></div> -->
   <div class="container top"  style="background-image: url(image/corona1.jpg);-webkit-box-shadow: -4px 16px 7px 0px rgba(88,89,83,1);
-moz-box-shadow: -4px 16px 7px 0px rgba(88,89,83,1);
box-shadow: -4px 16px 7px 0px rgba(88,89,83,1);">     
    <div class="row  radi" >
      <div class="col-sm-12 col-md-6 col-lg-6  parallax "  ><form action="/action_page.php" style="max-width:500px;margin:auto">
        <fieldset style="border-color:red";>

          <legend style="border-color: #F00;
          border-style: solid; display: flex;  justify-content: center; color:white;" class="bg-danger">Check Your Health Status</legend>
          <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Username" name="usrnm">
          </div>

          <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email" required="">
          </div>

          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="psw">
          </div>

          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="psw" required="">
          </div>
          <div style="display: flex;  justify-content: space-around; color: #ffffff">
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
          </div></br>
<!-- 
        <div style="display: flex;  justify-content: space-around; color: #ffffff;">
          <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="symptom1" name="symptom1" value="Bike" class="custom-control-input">
          <label for="checkbox" class="custom-control-label"> I have Cough</label>
          </div>
         <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="symptom1" name="symptom1" value="Bike" class="custom-control-input">
          <label for="checkbox" class="custom-control-label"> I have Cough</label>
          </div>
            <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="symptom1" name="symptom1" value="Bike" class="custom-control-input">
          <label for="checkbox" class="custom-control-label"> I have Cough</label>
          </div>
            <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="symptom1" name="symptom1" value="Bike" class="custom-control-input">
          <label for="checkbox" class="custom-control-label"> I have Cough</label>
        </div> -->
        <div class="d-flex" style="justify-content: space-between; text-align: center; color:white;" > 
          <div> Symptoms</div>
        </br>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Option 1
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Option 2
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="" disabled>Option 3
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Option 1
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Option 1
          </label>
        </div>    
      </div>
      <!--  </div> -->
    </br>
    <button type="submit" class="btn bg-primary">Submit</button>
  </fieldset>

</form>
</div>
<div class="col-sm-12 col-md-6 col-lg-6  parallax_R" >
  
</div>
</div>
</div>
</div>
<div class="container-fluid full" style="height: 250px;
background-color: red; margin-top: 5rem;">
  

</div>
<div class="container-fluid" style="height: 180px; margin-top: 5rem;">
  

</div>


<?php
include 'footer.php';
?>
</body>
</html>

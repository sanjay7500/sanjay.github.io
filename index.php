<?php
include("connectionuk.php");
if (isset($_POST['submit'])){

  $email=$_POST['em'];
  $pass=$_POST['pwd'];
  $conn=$_POST['con'];
  $agee=$_POST['age'];
  $yatra=$_POST['ytr'];
  $date=$_POST['date'];
  $gen=$_POST['gender'];



$data=mysqli_query($con,"INSERT INTO `bookyatra`( `email`, `password`, `contact`, `age`, `yatra`, `date`, `gender`) VALUES ('".$email."','".$pass."','".$conn."','".$agee."','".$yatra."','".$date."','".$gen."')");
if ($data) {
  echo '<script>alert("your booking is successfully done")</script>'; 
}
else
{
  echo "your booking is not done...";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>uttarakhand tourism</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <script src="assets/owl-carousel/owl.carousel.js"></script>

<style>
@import "index.css";

</style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Favicon -->   
	<link href="img/ukl.png" rel="icon"/>
<style type="text/css">
  html{user-select: none;}
  
  .topnav{position: sticky;top:0; z-index:3}


  }
  #spn{
    text-decoration:underline;
    text-decoration-color:red;
  }
  #ab:hover{
background-color:tomato;
text-decoration:underline;
color:white; 
  }

#status {
width: 200px;
height: 200px;
position: absolute;
left: 50%;
top: 50%;
background-image: url(ajax-loader.gif);
background-repeat: no-repeat;
background-position: center;
margin: -100px 0 0 -100px;
}

#preloader {
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #fefefe;
z-index: 99;
height: 100%;
}


.main{
  display:none;
}

  </style>


</head>

 
<body>
<div claas="main">
<div class="loader">
<img src="img/load.gif" width="100%" height="%" class="img" style="margin-left:%;">
</div>

 

	<div class="page-header" style=" margin-top:-text-indent:24px; border-radius:2%;" >
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-lg-3 bg-info">
  		<a href=""><img src="img/logo.png"class="" height="120" width="150" style="margin:14px 0 3px 0" alt="error"></a>
  		</div>
      <div class="col-lg-6 bg-info">
        <h1 style="margin-top:10px; letter-spacing:20px;"><font color="white"><b>UTTARAKHAND</b></font></h1>
        <p style="letter-spacing:10px;"><font color="white">&nbsp;&nbsp;<i>Tourism Development Board</i></font></p>


</div>      

  		<div class="col-lg-3 bg-info">
  			<p style="margin-top:10px"><font color="white"><b></i>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9993;Email: sj105764@gmail.com<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i>Contact +7500706385</b></font></p><p id="demo"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date/time</p></font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me..</button>
 <a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Book Now</button></a>


<!--<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me.</button>

<p id="demo">date/time</p>
  		</div>-->
</div></div></div></div>
	



<div class="topnav bg-info">
  <a class="active" class ="fa fa-home" href="#home">Home</a>
  <a href="newsupdate.php">News</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
   <a href="http://onlinechardhamyatra.in/">Online Booking </a>
   <a href="index.php #var"></a>

  <a href="adminlogin.php">Admin Login</a>

  
   
</div>
<!-- Modal -->
<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="container ">
          <div class="row">
            <div class="col-sm-12">
              <h1>Welcome Dev Bhoomi </h1>
            </div></div></div>

      </div>
      <div class="modal-body">
        <form method="POST" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" id="email" placeholder="Enter yatari email" name="em">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Enter name" name="pwd">
    </div></div>
    <div class="row">
   <div class="col" style="margin-top:8px">
      <input type="contact" class="form-control" placeholder="Enter contact" name="con">
    </div>
    <br>
   <div class="col" style="margin-top:8px">
      <input type="number" class="form-control" placeholder="Enter yatri age" name="age">
    </div>

  </div>
   <div class="row">
   <div class="col" style="margin-top: 8px; height:50px">
    <select style="width:100%; height: 35px; border-radius:4px;" name="ytr">

<option style="text-align: center" >select yatra</option>

      
      <option value="badarinath">Badarinath Dham</option>
      <option value="kedarnath-dham">Kedarnath Dham</option>
     <option value="gangotari"> Gangotari Dham</option>
      <option value="yamnotari">Yamnotari Dham</option>
    </select>
    </div>
 <div class="col" style="margin-top: 8px;">
      <input type="date" class="" name="date" style="width: 100%;height: 35px; border-radius: 4px;"><br>
      <input type="radio"class="" name="gender" value="male">male
      <input type="radio" class="" name="gender" value="female">female
      <br><br>
  
    </div>
    <br>
  
    
  </div>

         
          
 
      </div>
      <div class="modal-footer">
        <button type="submit"  name="submit" class="btn btn-info">
          Book Yatra</button>
        </a> </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/nature1..jpg" alt="nature1" width="1500" height="300">
       <div class="carousel-caption">
        <h3 class="h3-responsive">Welcome  To Uttarakhand</h3>
        <h1>DO COME & VISIT DEVBHOOMI</h1>
        <p>Dev Bhoomi Uttarakhand</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/risikesh.jpg" alt="nature2" width="1500" height="300">
    </div>

    <div class="carousel-item">
      <img src="img/haridwar.jpg" alt="nature3" width="1500" height="300">
    </div>

     <div class="carousel-item">
      <img src="img/snowfall.jpg" alt="" width="1500" height="300">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> 
   
<h2 style="text-align: center;font-size:30px; letter-spacing:100px;background-color:lightgrey; margin-bottom:-23px;"><b>NEWS</b></h2> 
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 bg-info" style="background-image:url(img/news.jpg);">
      <h2 style="text-align: center "><strong><u>NEWS</u></strong></h2>
      <marquee width="95%" height="300px;" behavior="scroll" direction="up" scrollamount="3"><ul>
      

<li>

<b>चारधाम यात्रा : मुखबा से गंगोत्री धाम के लिए चली मां गंगा की डोली, आज खुलेंगे कपाट
उत्तराखंड की प्रसिद्ध चारधाम यात्रा बुधवार से शुरू हो रही है। यमुनोत्री धाम के कपाट बुधवार दोपहर 12:15 बजे और गंगोत्री धाम के कपाट दोपहर 1.15 बजे श्रद्धालुओं के लिए खोल दिए जाएंगे। जबकि केदारनाथ धाम...</b></li>

Wed, 18 Apr 2018 09:56 AM 
Char Dham Yatra
 
Uttarakhand CharDham
 
Badrinath
 <br>
अन्य...

<li><b>VIDEO : उत्तराखंड में नए एडवेंचर टूरिज्म की शुरुआत, साइकिल से पहाड़ की सैर
उत्तराखंड में नए एडवेंचर टूरिज्म की शुरुआत हो चुकी है। उत्तरकाशी जिले में पर्यटन को बढ़ावा देने के लिए पर्यटन विभाग की ओर से माउंटेन ट्रैक बाइकिंग हिमालय की शुरुआत की गई है। शुक्रवार को डीएम डा. आशीष...

Sat, 14 Apr 2018 07:00 AM 
Uttarakhand Tourism
 
Adventure Tourism
 
Bicycle Riding
 
अन्य...</b></li>

<li><b>पर्यटन पर्व पर पर्यटन विभाग ने मालदेवता तक बाइक रैली निकाली
पर्यटन पर्व के अवसर पर पर्यटन विभाग की ओर से सीएम आवास से मालदेवता तक बाइक रैली निकाली गई। पर्यटन को बढ़ावा मिलने के मकसद से यह बाइक रैली निकाली गई है। पर्यटन पर्व को लेकर आगामी कार्यक्रम भी तय कर..</b>
</li>

</ul></marquee>


    </div>
  
  
    <div class="col-md-6">
      <h2 style="text-align: center"><strong><u>PHOTO GALLERY</u></strong></h2>
      <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>

  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/ccuk.jpg" alt="nature1" width="1500" height="300">
    </div>
    <div class="carousel-item">
      <img src="img/risikesh.jpg" alt="nature2" width="1300" height="300">
    </div>
    <div class="carousel-item">
      <img src="img/nature3.jpg" alt="nature3" width="1300" height="300">
    </div>
     <div class="carousel-item">
      <img src="img/nature4.jpg" alt="nature4" width="1300" height="300">
    </div>
     <div class="carousel-item">
      <img src="img/haridwar.jpg" alt="nature5" width="1300" height="300">
    </div>

  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>  

    </div>





  </div>


  </div>
  <h1 style="text-align: center"><img src="img/yatra_logo.jpg" height="30px" width="150px"></h1>
  

<div class="container-fluid">
  <div class="row slide1">
    <div class="col-md-3" style="height:300px ">
  <img src="img/badrinath_dham.jpg" height="100%" width="300px">
    </div>
<div class="col-md-3" style="height:300px">
  <img src="img/kedarnath-dham.jpg" height="100%" width="300px">

</div>
<div class="col-md-3" style="height:300px">
  <img src="img/yamnotari.jpg" height="100%" width="300px">

</div>
<div class="col-md-3" style="height:300px">
  <img src="img/gangotari.jpg" height="100%" width="300px">

</div>
</div></div>



<div class="container">
  <div class="row">
    <div class="col-md-6">
  <h2></h2>
  <p></p>
  <div class="card" id="var" style="width:400px">
    <img class="card-img-top" src="img/jimcorbet.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Corbett Park Ramnagar</h4>
      <p class="card-text">Corbett National Park, got its name in 1957 after Jim Corbett, the famous naturalist and photographer. This is India’s first national park and beyond doubt the most attractive Park in India. The Park is located in the foothills of the Himalayas, in the midst of lush greenery and uneven mountains with varying heights, ranging from about 1300 feet to nearly 4000 feet.</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div></div>
  <br>
  <div class="col-md-6">
   <h2></h2>
  <p></p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img/ntl.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Nainital Uttarakhand</h4>
      <p class="card-text">Nainital latest travel photos and image gallery with real pictures of Nainital, Nainital Places to see and activities photos. Browse through the best high quality Nainital images and photos to plan your trip. Nainital pics from professional photographers, tourists and Team eUttaranchal</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div></div>
</div>

</div></div>

<a href="index.php" id=var><img src="img/backtop.jpg" height="80px; width=10%"></a>


<div class="footer">
 <p style="text-align: center;background-color:black; height:50px;padding-top: 17px;"  ><font color="white">Copyright ©2020 All rights reserved | Designed & Developed  by<a href="" style="text-decoration:none;"><span id="ab">SANJAY JOSHI (S.J)</span></a></p>

  </div></font></p></div></form></div></div></div></div></div>
</p></div></div></div></div></div></div>

<script>
$(function() {   
 
  $('.slide1').slick({
     slidesToShow: 3,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 1200,
  });
});


$(".loader").fadeOut(4000,function(){
  $(".main").fadeIn(1000);
})

</script>



<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>

</body>
</html>
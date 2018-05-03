<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: rgb(56, 18, 56);
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  text-transform: uppercase;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #cd2122;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
    text-transform: uppercase;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    text-transform: uppercase;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1199px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">About us
    </button>
    <div class="dropdown-content">
      <a href="about.php">History</a>
      <a href="#">Vision & Mission</a>
      <a href="#">Board of Directors</a>
      <a href="#">Strategic Plan</a>
      <a href="#">Programs</a>
      <a href="#">Staff Profiling</a>
      <a href="#">Departments</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Services
    </button>
    <div class="dropdown-content">
      <a href="#">Livestock</a>
      <a href="#">Aquaculture</a>
      <a href="#">M.O.E.T</a>
      <a href="#">ARTs</a>
      <a href="#">Data Bank</a>
      <a href="#">Gene Bank</a>
      <a href="#">Semen Collection</a>
      <a href="#">Production & distribution</a>
      <a href="#">Artificial insemination</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Center Farms
    </button>
    <div class="dropdown-content">
      <a href="#">Bull stud Farm</a>
      <a href="#">Maruzi Ranch</a>
      <a href="#">Sanga field station</a>
      <a href="#">Njeru</a>
      <a href="#">Ruhengere Ranch</a>
      <a href="#">Bulago</a>
      <a href="#">Nshaara</a>
      <a href="#">Kasolwe</a>
      <a href="#">Rubona Ranch</a>
    </div>
  </div> 
 
   <div class="dropdown">
    <button class="dropbtn">Activities
    </button>
    <div class="dropdown-content">
      <a href="#">Farmers Outreach</a>
      <a href="#">Ambulatory</a>
      <a href="#">Projects/Collaborations</a>
    </div>
  </div> 

    <div class="dropdown">
    <button class="dropbtn">Research
    </button>
    <div class="dropdown-content">
      <a href="#">Nutrition</a>
      <a href="#">Breed Adaptation</a>
      <a href="#">Pasture</a>
      <a href="#">Artificial insemination</a>
      <a href="#">Liquid Nitrogen presentation</a>
      <a href="#">Non-pregnancy diagnosis process</a>
      <a href="#">M.O.E.T</a>
      <a href="#">Publication</a>
      <a href="#">Journals</a>
    </div>
  </div> 

  <a href="faq.php">FAQ</a>
  <a href="gallery.php">Gallery</a>
  <a href="nav_bar.php">News</a>
  <a href="#about">Blogs</a>
  <a href="contact.php">Contact us</a>
 <div class="dropdown">
    <button class="dropbtn">E-platform
    </button>
    <div class="dropdown-content">
      <a href="#">Product List</a>
      <a href="#">Price list</a>
      <a href="#">E-shop</a>
    </div>
  </div> 
  <a href="javascript:void(0);" style="font-size:25px;" class="icon fa fa-bars" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>
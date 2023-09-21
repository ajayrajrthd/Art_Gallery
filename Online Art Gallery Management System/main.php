<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Main</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;filter: grayscale(100%);cursor:pointer}
.w3-half img:hover{opacity:1;filter: grayscale(0%);transition-duration: 0.5s;}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  width: 260px;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: rgb(0, 0, 0);
}

li.dropdown {
  display: inline-block;
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
  color: rgb(0, 0, 0);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #807b7b;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
      <?php
if(isset($_SESSION['login_user2'])){
      ?>
      <p>Welcome <?php echo $_SESSION['login_user1']; ?></p>
      <?php
}
?>
    <h3 class="w3-padding-64" style="font-family: 'Lobster'; font-size: xx-large; cursor: pointer;"><b>कला-KENDRA</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase and Services</a> 
    <!--<a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>--> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Designers</a>
    <!--<li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn w3-bar-item w3-button w3-hover-white" style="width: 260px;">Store</a>
      <div class="dropdown-content">
        <a href="D:\Xampp\htdocs\sem4 proj\shop.html">Paintings</a>
        <a href="#">Sculptures</a>
        <a href="#">Link 3</a>
      </div>
    </li>
  </ul> --> 
    <a href="shop.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Store</a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="login.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log-out</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding" style="background-color: black;">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span style="font-family: 'Lobster', cursive;">कला-KENDRA</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>What About the Gallery?</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Showcase.</b></h1>
    <hr style="width:50px;border:5px solid rgb(185, 41, 41)" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="https://media.istockphoto.com/id/1131101048/photo/art-exibition-lot-3d-visualization.jpg?s=612x612&w=0&k=20&c=pvGBkaradjb52py4T6IE_o4Ik1BK0NkIoqVDB54r5h4=" style="width:100%" onclick="onClick(this)" alt="Visual Arts">
      <img src="https://media.blogto.com/articles/20212812-LocalGallery-20.jpg?w=2048&cmd=resize_then_crop&height=1365&quality=70" style="width:100%" onclick="onClick(this)" alt="Art Management">
      <img src="https://static01.nyt.com/images/2021/07/30/arts/28galleries-1/28galleries-1-superJumbo.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>

    <div class="w3-half">
      <img src="https://nayturr.com/wp-content/uploads/2020/09/best-online-art-stores-sep042020-min.jpg" style="width:100%" onclick="onClick(this)" alt="Online Purchase">
      <img src="https://image.cnbcfm.com/api/v1/image/107149451-1668052384530-gettyimages-1243956724-AA_14102022_901353.jpeg?v=1668054353" style="width:100%" onclick="onClick(this)" alt="Auction">
      <img src="https://art.appstate.edu/sites/default/files/styles/art_gallery_full_size/public/asu_photos/bfa2-2a.jpg?itok=woGSasd-" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid rgb(0, 0, 0)" class="w3-round">
    <img src="https://media.istockphoto.com/id/1131101048/photo/art-exibition-lot-3d-visualization.jpg?s=612x612&w=0&k=20&c=pvGBkaradjb52py4T6IE_o4Ik1BK0NkIoqVDB54r5h4=" style="width:100%" alt="Concrete meets bricks">
    <p><b>A Great Management and Organised Gallery which stores,preserve and display Art!</b></p>
    <p><i>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </i></p><br><br>
    <img src="https://www.whitechapelgallery.org/wp-content/uploads/2020/07/1.-Feature-image-LSBU-_RAYTANG_2018_NOCTURNAL_CREATURES-scaled_1170x655_acf_cropped.jpg" style="width:100%" alt="Concrete meets bricks">
    <p><b>Young Generation fantasize Art, helping these Creative minds to get in shape</b></p>
    <p><i>Some text about our services - Along with our primary services of Buying via cart, Storage of art pieces, we also provide a workshop for artists as well as customers. Not limited to age groups, User from any age can acess this workshop. We will provide simple exercises for practice, some reference images to practice the shapes and form,etc. Explore the section to know more!! 
    <i></p><br><br>
    <img src="https://media.istockphoto.com/id/1131101048/photo/art-exibition-lot-3d-visualization.jpg?s=612x612&w=0&k=20&c=pvGBkaradjb52py4T6IE_o4Ik1BK0NkIoqVDB54r5h4=" style="width:100%" alt="Concrete meets bricks">
    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p><i>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </i></p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Designers.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>The best team in the world.</p>
    <p>We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <p><b>Our designers are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="artist_1.html"><img src="https://media.istockphoto.com/id/958064228/photo/portrait-of-happy-young-man.jpg?b=1&s=170667a&w=0&k=20&c=ywaPLXj8meNw8tmZ3rOju5nrtlmhMwrQnjpW4nlqy_s=" alt="John" style="width:100%"></a>
        <div class="w3-container">
          <h3>Ajit Suryavanshi</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="artist_2.html"><img src="https://media.istockphoto.com/id/1293903541/photo/young-woman-stock-photo.jpg?b=1&s=170667a&w=0&k=20&c=WvsjH_3ggq4CFyUKAlhY8fiPq-80Yfv7zWZz9APEsJI=" alt="Jane" style="width:100%"></a>
        <div class="w3-container">
          <h3>Neha Sharma</h3>
          <p class="w3-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="artist_3.html"><img src="https://media.istockphoto.com/id/1216248810/photo/young-man-at-white-background-stock-images.jpg?s=612x612&w=0&k=20&c=XYpyVJTn0byDPiaSPL6biwet9KfXKecRm7YdIO-R7Uc=" alt="Mike" style="width:100%"></a>
        <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Artist</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="mailto: 21102173.aditya.raorane@gmail.com">
      <div class="w3-section">
        <!--<label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>-->
      <a href = "mailto: 21102173.aditya.raorane@gmail.com"><button class="w3-button w3-block w3-padding-large w3-black w3-margin-bottom">Send Message</button></a>
    </form>  
  </div>

<!-- End page content -->
</div> 
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
</body>
</html>

<style>
  *{
    margin: 0;
    padding: 0;
}
.navbar {
    margin-bottom: 50px;
    border-radius: 0;
  }
  /* Remove the jumbotron's default bottom margin */ 
   .jumbotron {
    margin-bottom: 0;
  }
.container .row .col-sm-4 .panel-body, .col-sm-4 .panel-body{
    opacity: 0.7;
}
.container .row .col-sm-4 .panel-body:hover, .col-sm-4 .panel-body:hover{
    opacity: 2;
    transition-duration: 0.5s;
    transition-timing-function: linear;
 }
  /* Add a gray background color and some padding to the footer */
  footer {
    background-color: #f2f2f2;
    padding: 25px;
  }
</style>

<?php   
    mysqli_close($conn);
?>
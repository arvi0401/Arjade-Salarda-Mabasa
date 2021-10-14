<!DOCTYPE html>
<html>
<title>MyWebsite</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Tahoma", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="container">
  <button class="w3-bar-item"></button>
  <button class="w3-bar-item"></button>
  <button class="w3-bar-item"></button>
</div>
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button"><img src="images/Logo.png" style="width: 20%; height: 10%;"></a></a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#home" class="w3-bar-item w3-button">exit</a>
</div>
<!-- Header -->
<div class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px ;"id="home">
  <img class="w3-image" src="images/Fastfood.jpg" alt="" width="1600" height="800">
  <div class="w3-display-topleft w3-text-white" style="padding: 250px 100px;">
    <h1 class="w3-hide-small" style="color: whitesmoke; font-size: 30px;">“The perfect size to grill up a couple of<br> burgers for everyone in the family.”</h1>
  </div>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-34" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Burger</h1><br>
      <h4>Ham and Chicken Burger<b><img src="images/cart.png" style="width: 5%; height: 5%;"></b></h4>
      <p class="w3-text-grey">Assortment of fresh chicken, tomato, onions rings,  breads and muffins for only ₱75.</p><br>
    
      <h4>Black Bean Viggie Burger<b><img src="images/cart.png" style="width: 5%; height: 5%;"></b></h4>
      <p class="w3-text-grey">Assortment of black beans, drained and rinse, breads, green bell pepper, onion and egg for only ₱95.</p><br>
    
      <h4>Cheese and Bacon Burger<b><img src="images/cart.png" style="width: 5%; height: 5%;"></b></h4>
      <p class="w3-text-grey">Assortment of cheese, bacon, soup, beef and breads for only ₱85.</p><br>
    
      <h4>Chicken (Grill or Fried)<b><img src="images/cart.png" style="width: 5%; height: 5%;"></b></h4>
      <p class="w3-text-grey">Assortment of fresh fried or grill chicken, tomato, onion rings and breads for only ₱95.</p><br>
      <h1 class="w3-center">Drinks</h1><br>
    
      <h4>Soda Water <b><img src="images/cart.png" style="width: 5%; height: 5%;"><br>₱40</b></h4>
      <h4>Battled Mineral Water <b><img src="images/cart.png" style="width: 5%; height: 5%;"><br>₱25</b></h4>
      <h4>Flavoured Milk <b><img src="images/cart.png" style="width: 5%; height: 5%;"><br>₱55</b></h4> 
      <h4>Fresh Juice <b><img src="images/cart.png" style="width: 5%; height: 5%;"><br>₱35</b></h4>
      

           
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="images/menu.png" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
</div>
<!-- End page content -->

</body>
</html>

<html>
<title><?php echo $title; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="home" class="w3-bar-item w3-button">Pasta House</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
         <a href="home" class="w3-bar-item w3-button">Home</a>
       	 <a href="products" class="w3-bar-item w3-button">Products</a>
         <a href="about-us" class="w3-bar-item w3-button">About Us</a>
         <a href="contact-us" class="w3-bar-item w3-button">Contact Us</a>
         <a href="faq" class="w3-bar-item w3-button">FAQ</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="http://static1.squarespace.com/static/5646985de4b0182dab6ba42e/564d1f33e4b06d1c92be754a/588e58ee579fb35be4f8e3f0/1545541312497/One+Pot+Pasta+%282+of+2%29.jpg?format=1500w" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Welcome to Pasta House</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Menu</h1><br>
      <h4>Hot Cheesy Garlic Bread</h4>
      <p class="w3-text-grey">A house specialty! 3.50</p><br>
    
      <h4>Nonna Tucci’s Meatballs</h4>
      <p class="w3-text-grey">Handmade daily and cooked in our meat sauce. 6.00</p><br>
    
      <h4>Sicilian Stuffed Artichoke</h4>
      <p class="w3-text-grey">Hand stuffed with our special recipe of seasoned breadcrumbs and oven baked with garlic and butter. Seasonal Favorite! 8.00</p><br>
    
      <h4>Artichoke & Spinach Dip Con Crostini</h4>
      <p class="w3-text-grey">Tender artichokes and fresh spinach blended with our five cheese Italian blend, oven baked and served with house made crostini. 10.50</p><br>
    
      <h4>Caesar Salad</h4>
      <p class="w3-text-grey">Our Caesar dressing is made in house from scratch in small batches to ensure the freshest flavor. Crisp romaine lettuce is tossed with aged Parmigiano and Romano cheeses and oven-baked croutons. 6.50</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="https://monkeyandmekitchenadventures.com/wp-content/uploads/2018/09/No-Oil-Italian-Pasta-Salad_07.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>
 
  
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Created by Irene Gayle Roque</p>
</footer>

</body>
</html>
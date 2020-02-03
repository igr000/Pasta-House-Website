<html>
<head>
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
       .products{
       	width: 50%;
       	margin:15px;
       	float: left;
       }
       
    </style>
    
</head>
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

   <!-- Products-->
   <div class="w3-content" style="max-width:1100px">

   	<!-- Products First Section -->
   	<div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Menu</h1><br>
      <h4>Hot Cheesy Garlic Bread</h4>
      <p class="w3-text-grey">A house specialty! 3.50</p><br>
    
      <h4>Nonna Tucci’s Meatballs</h4>
      <p class="w3-text-grey">Handmade daily and cooked in our meat sauce. 6.00</p><br>
    
      <h4>Sicilian Stuffed Artichoke</h4>
      <p class="w3-text-grey">Hand stuffed with our special recipe of seasoned breadcrumbs and oven baked with garlic and butter. Seasonal Favorite! 8.00</p><br>
    
    <div class="products">
      <img src="https://monkeyandmekitchenadventures.com/wp-content/uploads/2018/09/No-Oil-Italian-Pasta-Salad_07.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu">
    </div>

    <div class="products">
      <img src="https://monkeyandmekitchenadventures.com/wp-content/uploads/2018/09/No-Oil-Italian-Pasta-Salad_07.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu">
    </div>

    <div class="products">
      <img src="https://monkeyandmekitchenadventures.com/wp-content/uploads/2018/09/No-Oil-Italian-Pasta-Salad_07.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu">
    </div>

    <div class="products">
      <img src="https://monkeyandmekitchenadventures.com/wp-content/uploads/2018/09/No-Oil-Italian-Pasta-Salad_07.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu">
    </div>
  </div>
</div>
  
</body>
</html>
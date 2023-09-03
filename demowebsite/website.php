<!DOCTYPE html>
<html>
<head>
    <title>PHP Website</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <header>
        <h1> Online mobile shopping</h1>
       
        <form action="users.php" method="GET">
<input id="search" type="text" placeholder="Type here">
<input id="submit" type="submit" value="Search">
</form>
       <h2> <img src="https://3.bp.blogspot.com/-ksy3ze8Ni_s/VSDu91F1aqI/AAAAAAAAAGQ/9tW3lIPIg7c/s1600/online-shopping-technology.jpg"></h2>
        <style>
		body { 
			background: #ffffff; 
			color: #121212; 
			font-family: lucida grande; 
			text-align: center; 
		}
		h2 { font-size: 6px; text-align: center; }
	</style>
      
        <div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label><br> 

                <br>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<centre> <input type="submit" value="Login"></centre>
			</form>
		</div>
        <br>

        <div class="button-container">
        <form method="post">
            <button type="submit" name="home">Home</button>
            <button type="submit" name="about">Contact</button>
            <button type="submit" name="contact">About</button>
        </form>
    </div> 
        <h3> Available Brands</h3>
<?php
 echo "Vivo <br>";
 ECHO "Realme <br>";
 echo "Redmi <br>";
 Echo "Samsung <br>";
 echo "Tecno <br>";
 Echo "Xiaomi <br>";
 ?>
    </header>
    <br>
    <a href =https://form.jotform.com/232455642779467> "Order &Returns" </a>
    <p> <h3>if you want to return your mobile upload the image</h3> </p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">

</form>
<hr>
    <main>
        <section>
            <h1>About Us</h1>
            <p>The form of shopping in which people can easily purchase goods and services by using the internet is called online shopping. Online shopping gives us an idea of the availability of everything online at a cost of our data. Online shopping is a growing and trending aspect. It provides customers with buying various products and services, and sellers to carry on their business and transactions in an online mode. It is time saving and convenient way of shopping. It can be said that it is the development of traditional shopping ways to make shopping more accessible, relaxing, and flexible.</p>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?>Online Mobile shopping</p>
    </footer>
</body>
</html>
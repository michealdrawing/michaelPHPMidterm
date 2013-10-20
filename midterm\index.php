<?php
//The cupcake data
//make this data into an include of its own so both pages share the same information
$cupcakes =  array( array("id"=>1, "name"=>"Chocolate Fever", "price"=>"2.85", "description"=>"So full of chocolate it will drive you crazy."), 
									array("id"=>1, "name"=>"Cherry Bomb", "price"=>"3.15", "description"=>"Chocolate cake filled with bing cherrys and topped with whipped chocolate."),
									array("id"=>1, "name"=>"Vanilla Bean", "price"=>"2.85", "description"=>"White light cake topped with vanilla bean cream icing."),
									array("id"=>1, "name"=>"Chocolate Fudge", "price"=>"3.30", "description"=>"Think dense dark chocolate cake with dark chocolate fudge icing."),
									array("id"=>1, "name"=>"Caramel Nut", "price"=>"2.75", "description"=>"Chocolate cake filled with walnuts and topped with caramel."),
									array("id"=>1, "name"=>"Chocolate Coconut", "price"=>"3.10", "description"=>"Rich moist chocolate made with coconut milk and filled with real coconut."),
									array("id"=>1, "name"=>"Raspberry Swirl", "price"=>"3.20", "description"=>"Vanilla cake with raspberry swirls topped with a light raspberry icing."),
									array("id"=>1, "name"=>"Strawberry Lime", "price"=>"3.05", "description"=>"Pink strawberry cake topped with a light lime icing.") );

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cupcakes Bitch!</title>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href="main.css" rel="stylesheet" />
</head>

<body>
	<div id="wrapper">
    	<header class="masthead">
        	<h1>Cupcakes Bitch!</h1>
        </header>
        
        <nav class="nav">
        	<ul class="navbar">
            	<li><a href="#">Home</a></li>
            	<li><a href="#">Cupcakes</a></li>
            	<li><a href="#">Recipes</a></li>
            	<li><a href="#">Confections</a></li>
            	<li><a href="#">Contact</a></li>
            </ul>
        </nav>
        
        <section class="main">
        	<h2>The Cupcake List</h2>
            <?php
			//Inside here is where you will be looping through the cupcake array
			//and displaying the list of cupcake names and prices
			//the cupcake id should be passed from this page to details.php
			//Display the list on this page as a <ul> with each name as an <a> inside an <li> 
			//The anchor tag links to details.php.
			//Add a query string parameter to pass the id each cupcake to details.php
			//create a cupcake icon to use as the bullet image for each cupcake in the list
			
            ?>
        </section>
        <section class="sidebar">
        	<h3>Sugar Sweet</h3>
            <p>Cupcake ipsum dolor sit amet. Unerdwear.com croissant oat cake chocolate cake brownie bonbon marzipan unerdwear.com. Jelly beans biscuit cookie pie marshmallow marzipan. Halvah sugar plum sweet applicake.</p>
            <p>Bonbon cupcake sugar plum cake. Donut carrot cake cake marzipan gummi bears. Cookie applicake cotton candy croissant gingerbread bear claw applicake. Marshmallow muffin jelly-o cookie lollipop macaroon candy chocolate cake.</p>
            <p>Icing marzipan ice cream. Chupa chups muffin lemon drops jelly-o pie. Chocolate unerdwear.com tiramisu sweet lemon drops icing cupcake.</p>
            <p>Jelly-o lemon drops lemon drops dessert cookie liquorice chocolate cake powder ice cream. Cookie tootsie roll soufflé carrot cake tiramisu lemon drops unerdwear.com. Bear claw unerdwear.com soufflé gummies tart.</p>
        </section>
        
        <footer class="footer">
        	<p>&copy; 2013 Cupcakes Bitch!</p>
        </footer>
</body>
</html>
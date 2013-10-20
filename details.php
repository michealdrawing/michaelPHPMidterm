<?php
include ("includes/dataSet.php");
include ("includes/masthead.php");
?>
        
        <section class="main">
        	<h2>The Cupcake Details</h2>
            <?php
			//Inside here is where you will be looping through the cupcake array
			//and displaying the details for one cupcake.
			//get the cupcake id from the query string
			//display the name, price and description for the selected cupcake

          

            $cupcakeId = $_GET['id'];
            
               $cupcake = $cupcakes[$cupcakeId];


                echo '<h1>'.$cupcake['name'].'</h1>';
                echo '<p>'.$cupcake['price'].'</p>';
                echo '<p>'.$cupcake['description'].'</p>';


              
            ?>
        </section>
<?php
        include ("includes/sidebar.php");
include ("includes/footer.php");
?>
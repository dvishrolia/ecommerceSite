<?php include "header.php" ?>
    <link rel="stylesheet" href="style.css" />
    
<div class="row">
<div class="col">
    <img src="images/1.jpg" width="100%" />
    <hr>
</div>
</div>

<div class="row">
    <div class="col text-center">
        <H1>Free Delivery Orders Over £50.</H1>
        <p class="freereturn">Free returns on all orders.</p>
       <hr>
    </div>
</div>

<?php 
	require_once('phpcomponent/itemcomponent.php');
	?>

<div class="container">
<div class="row">
<?php 
	
	itemcomponent('Product 1', '£299'); 
	itemcomponent('Product 2', '£399'); 
	itemcomponent('Product 3', '£199'); 	
	
	?>

</div>
</div>


<?php include "footer.php" ?>
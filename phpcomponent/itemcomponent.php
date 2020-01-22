<?php

function itemcomponent($productname, $productprice) {
	
	$element = "
		<div class=\"col\">
		<form action=\"index.php\" method=\"post\">
		<div class=\"card\" style=\"width: 18rem;\">
		  <img class=\"card-img-top\" src=\"...\" alt=\"Card image cap\">
		  <div class=\"card-body\">
			<h5 class=\"card-title\">$productname</h5>
			<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<h5>
				<small><s>£299</s></small>
				<span>$productprice</span>
				
			</h5>
			<button class=\"btn btn-secondary my-3\" type=\"submit\" name=\"add\">Add to Cart </button>
		  </div>
		</div>
		</form>
	</div>
	";
			
			echo $element;
}

?>
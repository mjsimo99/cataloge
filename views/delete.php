<?php 
	if (isset($_POST['id'])) {
		$exitFurniture = new glowController();
		$exitFurniture->deleteProduct();
 	}
?>

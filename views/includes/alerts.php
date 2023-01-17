<?php


	
	if(isset($_COOKIE['success'])){
		echo '<div class="alert alert-success text-center">'.$_COOKIE['success'].'</div>';
	}

	if(isset($_COOKIE['error'])){
		echo '<div class="alert alert-danger text-center">'.$_COOKIE['error'].'</div>';
	}

	if(isset($_COOKIE['info'])){
		echo '<div class="alert alert-info text-center">'.$_COOKIE['info'].'</div>';
	}
?>




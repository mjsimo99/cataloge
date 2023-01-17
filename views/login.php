<?php
if (isset($_POST['submit'])) {
	$loginUser = new UsersController();
	$loginUser->auth();
}
?>

<div class="container" style="margin-top: 10%; margin-bottom:10%;">
	<div class="row my-4">
		<div class="col-md-1- mx-auto">
			<?php include('./views/includes/alerts.php'); ?>
			<div class="card">
				<div class="card-header">
					<h3 class="text-center">Connexion</h3>
				</div>
				<div class="card-body bg-light">
					<form method="post" class="mr-1">
						<div class="form-group">
							<label for="username">username*</label>
							<input type="text" name="username" placeholder="username" class="form-control">
						</div>
						<div class="form-group">
							<label for="password">password*</label>
							<input type="password" name="password" placeholder="password" class="form-control mb-2">
						</div>
						<button name="submit" class="btn btn-sm btn-warning">Connexion</button>
					</form>
				</div>
				<div class="card-footer">
					<a href="<?php echo BASE_URL; ?>register" class="btn btn-link">Inscription</a>
				</div>
			</div>
		</div>
	</div>
</div>
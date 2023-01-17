<?php
if (isset($_POST['submit'])) {
	$createUser = new UsersController();
	$createUser->register();
}
?>

<div class="container" style="margin-top: 10%; margin-bottom:10%;">
	<div class="row my-4">
		<div class="col-md-1- mx-auto">
			<?php include('./views/includes/alerts.php'); ?>
			<div class="card">
				<div class="card-header">
					<h3 class="text-center">Inscription</h3>
				</div>
				<div class="card-body bg-light">
					<form method="post" class="mr-1">
						<div class="form-group">
							<label for="username">name*</label>
							<input type="text" name="fullname" placeholder="Name" class="form-control">
						</div>
						<div class="form-group">
							<label for="username">username*</label>
							<input type="text" name="username" placeholder="UserName" class="form-control">
						</div>
						<div class="form-group">
							<label for="username">password*</label>
							<input type="password" name="password" placeholder="Password" class="form-control mb-2">
						</div>
						<button name="submit" class="btn btn-sm btn-warning">Inscription</button>
					</form>
				</div>
				<div class="card-footer">
					<a href="<?php echo BASE_URL; ?>login" class="btn btn-link">Connexion</a>
				</div>
			</div>
		</div>
	</div>
</div>
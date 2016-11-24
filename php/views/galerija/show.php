<?php
require 'galer.header.php';
$id = $_GET['id'];
$query = $app['database'];
$gallery = $query->show('galleries', $id);
?>
<section class="main">
	<div class="container">
		<h1 style="font-family: Impact"><?= $gallery[0]['title']; ?></h1>
		<hr>
		<?php
			if(!empty($_SESSION['message'])):
				echo '<div class="alert alert-success">'.$_SESSION['message'].'</div>';
				unset($_SESSION['message']);
			endif;
		?>

		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
					<div id="album">
						<div class="header">
							<h4><strong>&nbsp;</strong></h4>
							<hr>			
						</div>
						<div class="body">
							<br>
							<a data-toggle="modal" href="#imageModal"><span>&plus;<br> Ubacite slike </span></a>
						</div>
						<div class="footer">
							
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</section>
<?php require '../admin.footer.php'; ?>
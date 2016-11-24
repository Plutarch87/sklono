<?php
require '../../app/bootstrap.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$instrument = $_POST['instrument'];
$bio = $_POST['bio'];
if(isset($_POST['submit'])) {
	$photo = new Photograph();
	$photo->attach_file($_FILES['img']);
	$photo->filename = $name.".".pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
// die(var_dump($photo->filename));

	$photo->save();
}

$db = $app['database'];

$db->storeProf('profesori', $name, $surname, $instrument, $bio, $photo->filename);
unset($app);


header('Location: index.php');
<?php
require '../../app/bootstrap.php';

$galleryId = $_GET['id'];
$title = $_POST['title'];

if(isset($_POST['submit'])) {
	$photo = new Photograph();
	$photo->attach_file($_FILES['img']);
	$photo->filename = $title.".".pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
	$photo->galleryId = $galleryId;

	$photo->save();
}

$db = $app['database'];

$db->create('images', $photo);
unset($app);


header("Location: show.php?id=$galleryId");
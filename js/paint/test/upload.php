<?php

$image = imagecreatefrompng($_POST['image']);
$id = uniqid();

imagealphablending($image, false);
imagesavealpha($image, true);
imagepng($image, 'uploads/wPaint-' . $id . '.png');

// return image path
echo '{"img": "paint/test/uploads/wPaint-' . $id . '.png"}';

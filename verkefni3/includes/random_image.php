<?php
 $images = [
 ['file' => 'mynd1',
 'caption' => 'Bíll að framan'],
 ['file' => 'mynd2',
 'caption' => 'Klukka'],
  ['file' => 'mynd3',
 'caption' => 'Bíll að aftan'],
  ['file' => 'mynd4',
 'caption' => 'Litir'],
  ['file' => 'mynd5',
 'caption' => 'Sprenging'],
];
 $i = rand(0, count($images)-1);
 $selectedImage = "includes/images/{$images[$i]['file']}.jpg";
 $caption = $images[$i]['caption'];
 $i = rand(0, count($images)-1);
 $selectedImage2 = "includes/images/{$images[$i]['file']}.jpg";
 $caption2 = $images[$i]['caption'];
 if ($selectedImage == $selectedImage2)
 {
 	 $i = rand(0, count($images)-1);
 	$selectedImage2 = "includes/images/{$images[$i]['file']}.jpg";
 	$caption2 = $images[$i]['caption'];
 }
  

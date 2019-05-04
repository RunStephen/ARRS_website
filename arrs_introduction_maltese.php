<?php
$language = 'maltese';
$goals = "http://www.roadracingstats.com/arrs_goals_" . $language . ".htm";
$groups = "http://www.roadracingstats.com/working_groups_" . $language . ".htm";
$coordinator = "http://www.roadracingstats.com/arrs_coordinator_" . $language . ".htm";
$membership = "http://www.roadracingstats.com/arrs_membership_" . $language . ".htm";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>ARRS - Association of Road Racing Statisticians</title>
</head>

<body>

<h3 class="headerstyle">Association of Road Racing Statisticians / Ghanijiet</h3>
<P><? ini_set('include_path',$_SERVER['DOCUMENT_ROOT'].'/folder_path'); readfile($goals); ?></p>

<h3 class="headerstyle">Membri Fundaturi</h3>
<P><? ini_set('include_path',$_SERVER['DOCUMENT_ROOT'].'/folder_path'); readfile('http://www.roadracingstats.com/founding_members.htm'); ?></p>

<h3 class="headerstyle">Kumitati</h3>
<P><? ini_set('include_path',$_SERVER['DOCUMENT_ROOT'].'/folder_path'); readfile($groups); ?></p>

<h3 class="headerstyle">Ko-Ordinatur ta' l-ARRS</h3>
<P><? ini_set('include_path',$_SERVER['DOCUMENT_ROOT'].'/folder_path'); readfile($coordinator); ?></p>

<h3 class="headerstyle">Membri ta' l-ARRS</h3>
<P><? ini_set('include_path',$_SERVER['DOCUMENT_ROOT'].'/folder_path'); readfile($membership); ?></p>

</body>
</html>
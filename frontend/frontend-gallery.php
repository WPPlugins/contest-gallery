<?php


	// Aufrufen von Daten
	include_once("get-data.php");
	include("check-language.php");	
	


//------------------------------------------------------------
// ----------------------------------------------------------- Einzelnes Userbild Kommentare ----------------------------------------------------------
//------------------------------------------------------------



if(@$_GET['picture_id']==true AND $AllowGalleryScript != 1){

	include('show-image.php');

}

//------------------------------------------------------------
// ----------------------------------------------------------- Userbilder Galerie anzeigen !----------------------------------------------------------
//------------------------------------------------------------


if((@$_GET['picture_id']==false AND @$_GET['comment']==false) or $AllowGalleryScript == 1){
	
	include('show-gallery-jquery.php');

}



?>

<?php

// Zur Feststellung ob Switching aktiviert wurde. Ob mehrere Looks an sind. 
$LooksCount = 0; 
if($ThumbLook == 1){$LooksCount++;}
if($HeightLook == 1){$LooksCount++;}
if($RowLook == 1){$LooksCount++;}

 
if($AllowSort == 1 OR $LooksCount>1){

echo "<div class='cg_gallery_view_sort_control' >";

if(count($orderGalleries)>1){
	
			echo "<div class='cg_gallery_thumbs_control'>";

		//echo "<form method='GET' action='$siteURLsort'>";
		//echo "<input type='hidden' name='".$pageIDname[0]."' value='".$pageIDvalue[0]."'>";
		//echo "<select name='1' id='select-look'>";
		
		$i = 0;

		
	foreach($orderGalleries as $key => $value){
		

		
		if($value=="ThumbLookOrder" AND $ThumbLook == 1 AND ($HeightLook == 1 or $RowLook == 1)){
			$i++;
			//echo "<option value='1' $selected_look_thumb>View $i</option>";
			//echo "<a href='$siteURL&1=1&2=".$getOrder."&3=".$start."'><img title='Thumb view' src='$selected_look_thumb' style='float:left;margin-left:5px;' /></a> "; 
			echo "<img title='Thumb view' src='$selected_look_thumb' id='cg_thumb_look_frontend' class='cg_gallery_thumb' />";
			}
		if($value=="HeightLookOrder" AND $HeightLook == 1 AND ($ThumbLook == 1 or $RowLook == 1)){
			$i++;
			//echo "<option value='2' $selected_look_height>View $i</option>";
			//echo "<a href='$siteURL&1=2&2=".$getOrder."&3=".$start."'><img title='Height view' src='$selected_look_height' style='float:left;margin-left:5px;'></a> ";
			echo "<img title='Height view' src='$selected_look_height'id='cg_height_look_frontend' class='cg_gallery_thumb'>";
			}
		if($value=="RowLookOrder" AND $RowLook == 1  AND ($ThumbLook == 1 or $HeightLook == 1)){
			$i++;
			//echo "<option value='3' $selected_look_row>View $i</option>";
			//echo "<a href='$siteURL&1=3&2=".$getOrder."&3=".$start."'><img title='Row view' src='$selected_look_row' style='float:left;margin-left:5px;'></a> ";
			echo "<img title='Row view' src='$selected_look_row' id='cg_row_look_frontend' class='cg_gallery_thumb'>";
			}
				
		}
	
		//echo "<input type='hidden' name='2' value='$getOrder'>";
		
		//echo "<input type='hidden' name='3' value='$getStart'>"; 

		//echo "<input type='submit' id='change-look' style='visibility:hidden;' >";
		//echo "</form>";
		echo "&nbsp;";
echo "</div>";	
	
}


if($AllowSort == 1){

//echo "<br>siteURL: $siteURL<br>";
//echo "<br>siteURLsort: $siteURLsort<br>";
//echo "<br>getLook: $getLook<br>";
echo "<a name='cg-begin' class='cg_gallery_begin'></a>";
echo "<div class='cg_sort_div'>";
?>
<form style='' class="cg_sort_form" method="GET" action="<?php echo $siteURLsort; ?>">
<input type="hidden" name="<?php echo @$pageIDname[0]; ?>" value="<?php echo @$pageIDvalue[0]; ?>">
<input type="hidden" name="1" value="<?php echo @$getLook; ?>" id="cg_sort_images_look">
<input type="hidden" name="1" value="<?php echo @$getLook; ?>" id="cg_sort_images_look">
<select name="2" id="cg_select_order">
<?php  if(@$RandomSort==1){ ?>
<option value="7" <?php echo $selected_random_sort; ?> id="cg_random_sort"><?php echo $language_RandomSortSorting; ?></option>
<?php
}
?>
<option <?php echo $selected_date_desc; ?> value="1" id="cg_date_descend" ><?php echo $language_DateDescend; ?></option>
<option value="2" <?php echo $selected_date_asc; ?> id="cg_date_ascend" ><?php echo $language_DateAscend; ?></option>
<option value="3" <?php echo $selected_comment_desc; ?> id="cg_comments_descend"><?php echo $language_CommentsDescend; ?></option>
<option value="4" <?php echo $selected_comment_asc; ?> id="cg_comments_ascend" ><?php echo $language_CommentsAscend; ?></option>
<?php  if(@$HideUntilVote!=1){ ?>
<option value="5" <?php echo $selected_rating_desc; ?> id="cg_rating_descend"><?php echo $language_RatingDescend; ?></option>
<option value="6" <?php echo $selected_rating_asc; ?> id="cg_rating_ascend"><?php echo $language_RatingAscend; ?></option>
<?php
}
?>
</select>
<?php

//echo <<<HEREDOC

echo "<input type='hidden' name='3' value='$getStart'/>";

echo "<input type='submit' id='cg_change_order' style='display:none;'/>";
echo "</form>";

echo "</div>";
}


echo "</div>";

}


echo "<br/>";

$cg_unix_time = time();

// Check back button click
echo "<input type='hidden' id='cg_check_load_time' value=''/>"; 

// Prüfen ob rechter Pfeil gerade geklickt wurde
echo "<input type='hidden' id='cg_check_arrow_right_click' value='0'/>"; 

// Prüfen ob linker Pfeil gerade geklickt wurde
echo "<input type='hidden' id='cg_check_arrow_left_click' value='0'/>";

// Sobald Ende erreicht wurde wird hier eine 1 eingetragen 
echo "<input type='hidden' id='cg_all_images_loaded' value='0'/>";

// Eintragen wieviel Bilder schon geladen wurden, wenn pagination aktiviert ist  
echo "<input type='hidden' id='cg_pagination_position_count' value='0'/>";

// Wenn pagination an ist, dann muss der erste Width Wert hier eingetragen werden
echo "<input type='hidden' id='cg_widthMainCGallery' value='0'/>";

// Den Abstand von links des erschienen Divs bei Thumb View prüfen
echo "<input type='hidden' id='cg_offset_div_thumb_view' value='0'/>";

echo "<input type='hidden' id='cg_DistancePicsX_Live' value='0'/>";
echo "<input type='hidden' id='cg_DistancePicsV_Live' value='0'/>";
echo "<input type='hidden' id='cg_WidthThumb_Live' value='0'/>";

// Prüfen ob die gallery gerade resized wird
echo "<input type='hidden' id='cg_gallery_resize' value='0'/>";	

// Zum Prüfen ob gecachte Seite geladen wurde
echo "<input type='hidden' id='cg_timestamp_php' value='$cg_unix_time'/>";	

// Felder für Slider

// Prüfen ob der gesamte DOM im Slider geladen ist oder nicht
echo '<img id="cg_sliderClickIfFacebook" src="#" style="display: none;" />';	

// Prüfen ob der gesamte DOM im Slider geladen ist oder nicht
echo "<input type='hidden' id='cg_sliderDOMloaded' value=''/>";	

// Eintragen der Left position des div#imgContainer sobald der ganze DOM geladen ist
echo "<input type='hidden' id='cg_leftPositionImgContainer' value=''/>";	

// Prüfen welche Fenster Breite bei der letzten Berechnung war
echo "<input type='hidden' id='widthCGoverlay_old' value=''/>";	

// Eintragen der aktuellen Breite des Sliders ImgContainers
echo "<input type='hidden' id='widthCGimgContainerAggregated' value='0'/>";	

// Prüfen ob Fenster gerade resized wird
echo "<input type='hidden' id='cg_slider_resize' value=''/>";	

// Feld zum Speichern der Nummer des aktuellen Bildes im Slider
echo "<input type='hidden' id='cg_actual_slider_class_value' value=''/>";

// Feld zum Speichern der Nummer des gerade vergangenen Bildes im Slider
echo "<input type='hidden' id='cg_slider_class_value_before' value=''/>";

// Feld zum speichern der id des aktuellen Bildes im Slider
echo "<input type='hidden' id='cg_actual_slider_img_id' value=''/>";

// Prüfen ob Slider Frame reloaded wurde
echo "<input type='hidden' id='cg_slider_frame_reloaded' value='0'/>";		

// Prüfen ob Gallery Frame reloaded wurde
echo "<input type='hidden' id='cg_gallery_frame_reloaded' value='1'/>";

// Offset des ersten Bildes welches an der Reihe ist zu landen
echo "<input type='hidden' id='firstImageOffset' value='0'/>";

// Felder zur Prüfung obs mousedown oder mouseup ist
echo "<input type='hidden' id='cg_slider_mousedown' value=''/>";	
echo "<input type='hidden' id='cg_slider_mouseup' value=''/>";	
echo "<input type='hidden' id='cg_slider_check_mouse' value=''/>";	

// Felder zum Speichern dex X Wertes beim Slider Mousedown und Mouseup
echo "<input type='hidden' id='cg_x_value_mousedown_e_page' value=''/>";	
echo "<input type='hidden' id='cg_x_value_mousedown_left_margin' value=''/>";	
echo "<input type='hidden' id='cg_x_value_mousedown_mousemove' value=''/>";	
echo "<input type='hidden' id='cg_x_value_mouseup' value=''/>";	
echo "<input type='hidden' id='cg_x_value_mouseup_e_page' value=''/>";	

// Prüfen ob nur Klick event war oder Maus auch gehalten wurde
echo "<input type='hidden' id='cg_allow_mouse_release' value='0'/>";	
	

// Prüfen ob Rating geklickt wurde und AJAX call lädt
echo "<input type='hidden' id='cg_rating_ajax_call' value='0'/>";	

// Prüfen touchstart beim touch slider event. Zur Prüfung der Distanz.
echo "<input type='hidden' id='cg_slider_touchstart' value=''/>";	
echo "<input type='hidden' id='cg_slider_touchend' value=''/>";	

// Zur Prüfung ob losgelassen wurde
echo "<input type='hidden' id='cg_slider_release_toch' value=''/>";	

// Prüfen ob ein hide until vote Feld gerade geklickt wurde
echo "<input type='hidden' id='cg_hide_until_vote_actual' value='0'/>";	

echo '<div id="cg_slider_arrow_left"><img id="cg_slider_arrow_left_img" class="cg_slider_arrow_left_img" src="'.$cg_slider_arrow_left.'" style="width:100% ;height:100% ; display:none;"></div>';
echo '<div id="cg_slider_arrow_right"><img id="cg_slider_arrow_right_img" class="cg_slider_arrow_right_img" src="'.$cg_slider_arrow_right.'" style="width:100% ;height:100% ;display:none;"></div>';
echo '<div id="close_slider_button"><img id="close_slider_button_img" src="'.$cg_slider_button.'" style="width:100% ;height:100% ;display:none;"></div>';
echo '<input type="hidden" value="193" id="cg_slider_comment_picture_id">'; // Aktuelle picture ID des Comments
echo '<input type="submit" value="" id="cg_open_slider_comment" style="display:none;">'; // Aktuelle picture ID des Comments

echo '<input type="submit" value="" id="check_mobile" style="display:none;">'; // Prüfen ob mobile oder nicht
echo '<input type="submit" value="" id="cg_slider_comments_elemens_width" style="display:none;">'; // Breite der Comments area für mobile Geräte


echo '<div id="cg_overlay"></div>';
echo '<div id="imgContainer" class="imgContainer"></div>	';


echo "<input type='hidden' id='cg_slider_comment_check' value='".@$check."'>";

// Selbes Feld wie in show-image.php
echo "<input type='hidden' id='cg_ThankYouComment' value='Thank you for your comment'>";

echo "<input type='hidden' id='cg_comment_name_characters' value='$language_TheNameFieldMustContainTwoCharactersOrMore.'>";
echo "<input type='hidden' id='cg_comment_comment_characters' value='$language_TheCommentFieldMustContainThreeCharactersOrMore.'>";
echo "<input type='hidden' id='cg_comment_not_a_robot' value=' $language_PlzCheckTheCheckboxToProveThatYouAreNotArobot.'>";

// Felder für Slider --- ENDE

// Comments Div für Slider

echo '<div id="cg_comments_slider_div" style="display:none;">';
	echo '<div id="cg_comments_slider_inner_div" style="width:90%;margin: 0px auto;">';

	echo '<div id="close_slider_comments_button"><img id="close_slider_comments_button_img" src="'.$cg_slider_button.'" style="width:100% ;height:100% ;display:none;"></div>';
	echo "<p style='text-align:center;font-size:22px;padding-top:30px;color:#fff;font-weight:bold;opacity: 1;' id='cg_picture_comments_single_view'>$language_PictureComments</p>";
	echo "<div id='cg_slider_top_hr_div'>";
	echo "<hr  style='margin-left:0px;' id='cg_picture_comments_single_view_hr' />";
	echo '</div>';
	// Response div für AJAX call
	echo "<div id='show_comments_slider' >";
	echo '</div>';

	$unix = time();


	echo "<div id='cg_slider_comment_hint_msg' style='color:#fff;font-weight:normal;font-size:18px;'>";
	echo "</div>";

	echo "<p style='padding-top:30px;color:#fff;font-weight:bold;font-size:22px;line-height:22px;padding-bottom:0px;margin-bottom:0px;' id='cg_your_comment_single_view'><strong>$language_YourComment:</strong></p>";
	echo '<input type="hidden" name="Timestamp" value="'.@$unix.'" id="cg_slider_comment_timestamp">';
	 echo "<p style='line-height:18px;margin:0px;padding:0px;'>&nbsp;</p>";
	echo "<div id='cg_your_comment_name_single_view' style='font-size:18px;font-weight:bold;color:#fff;'>$language_Name:</div>";
	echo '<p style="line-height:18px;margin:0px;padding:0px;"><input type="text" name="Name" style="width:100%;" id="cg_slider_comment_name"></p>';
	 echo "<p style='line-height:18px;margin:0px;padding:0px;'>&nbsp;</p>";
	echo "<div id='cg_your_comment_comment_single_view'  style='font-size:18px;font-weight:bold;color:#fff;'>$language_Comment:</div>";
	echo '<p style="margin:0px;padding:0px;"><textarea style="width:100%;" rows="5" name="Comment" id="cg_slider_comment">';
	echo "</textarea></p>";
	 echo "<p style='line-height:18px;margin:0px;padding:0px;'>&nbsp;</p>";
	echo '<p id="cg_i_am_not_a_robot" style="font-weight:bold;font-size:18px;width:300px;color:#fff;line-height:18px;"></p>';
	 echo "<p style='line-height:18px;margin:0px;padding:0px;'>";
	echo '<input type="submit" value="'.$language_Send.'" name="Submit" id="cg_slider_comment_submit" style="font-size:18px;line-height:18px;">';
	echo "</p>";
	echo "</div>";
echo "</div>";

echo "<div style='visibility:hidden;margin:0;padding:0;height:0px !important;'>";
echo '<label for="Email">Don\'t fill this field, your email will not be asked.</label>';
echo '<input id="cg_slider_comment_email" name="Email" size="60" value="" />';
echo '</div>';

 // Feld zum Speichern des maxmimal möglichen X wert beim. Wenn ganz nach links gedraggt wird (zum Anfang).
echo "<input type='hidden' id='cg_first_left_slider' value=''/>";	

 // Feld zum Speichern des minmal möglichen X wert beim. Wenn ganz nach rechts gedraggt wird (zum letzten Bild).
echo "<input type='hidden' id='cg_last_left_slider' value=''/>";	


?>
<noscript>
<div style="border: 1px solid purple; padding: 10px">
<span style="color:red">Enable Javascript to see the gallery</span>
</div>
</noscript>
<?php


	//Bestimmung des dir upload folders zur späteren Erkennung
	
	
	$cg_uploadFolder_dir = wp_upload_dir();
	  
	$cg_upload_dir = $cg_uploadFolder_dir['basedir'].'/contest-gallery/gallery-id-'.$galeryID.'';	
	
	
	//Bestimmung des dir upload folders zur späteren Erkennung --- ENDE

			
			
	$checkSumOfElementsWidth = 0;//wurd gebraucht für Thumb Look
	$checkFirstTimeWholeWidth = 0;
	$aggregateWidth = 0;// wird gebrauht für Thumb Look
echo "<input type='hidden' class='aggregateWidth' value='$aggregateWidth'>";// Hidden Feld zum sammeln und abrufen von aggregateWidth über Jquery, wird gebrauht für Thumb Look
echo "<input type='hidden' class='checkFirstTimeWholeWidth' value='$checkFirstTimeWholeWidth'>";// Überprüfen ob die erste Zeile der Bilder schon verarbeitetet wurde


//echo "<br>height:$look<br>";
// Sicherheitshalber falls js falsch übergeben wurde und falsche werte gespeichert wurden
if($look=="height" or $look=="thumb" or $look=="row"){
	$look=$look;
}
else{
	$look='height';
}


		if ($look=='thumb'){
		
		
		
				//echo "<div id='mainCGallery' style='display:block;position:fix;float:left;'>";
				echo "<div id='mainCGallery'>";
				//echo "<div id='mainCGallery' style='float:left;margin-top: -$DistancePicsV;'>";		
			
		
			// weitergabe zur leichteren Formularabfrage, wird am ende der schleife 1 dazu addiert
			$i = 0;
			
			// Orientierung zur Vergabe von Klassen bei cg_image und cg_hide
			$r = 0;
			
			/*if($RandomSort==1){
				$cgRandomOrderAllIdsResult = "";
			}*/
			
			//print($picsSQL);
				foreach($picsSQL as $value){
				
				$r++;
				
					$id = $value->id;
					$rowid = $value->rowid;
					$Timestamp = $value->Timestamp.'_';
					$NamePic = $value->NamePic;
					$ImgType = $value->ImgType;
					$rating = $value->Rating;
					$countR = $value->CountR;
					$countC = $value->CountC;
					$countS = $value->CountS;
					$widthOriginalImg = $value->Width;
					$heightOriginalImg = $value->Height;
					$WpUpload = $value->WpUpload;

					$realId = $id;	
					
					/*if($RandomSort==1){
						$cgRandomOrderAllIdsResult .= "$realId,";			
					}*/					

					$id = ($id+8)*2+100000;
					
					// 4 Varianten hier möglich wenn andere Einstellungen getroffen wurden als standard					
					
					// Prüfen für Rating mit einem Stern und nicht eingeloggtem User
					if($ShowOnlyUsersVotes==1 && $CheckLogin!=1 && $AllowRating==2 || $HideUntilVote==1 && $CheckLogin!=1 && $AllowRating==2){
						
						//Achtung! Reihenfolge wichtig! $countShideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
						if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
							$countShideUntilVote = $countS;
						}

							$countS = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT COUNT(*) AS NumberOfRows
								FROM $tablenameIP 
								WHERE GalleryID = %d and IP = %s and RatingS = %d and pid = %d
							", 
							$galeryID,$userIP,1,$realId
							) );
						
						if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
							$countShideUntilVote = $countS;
						}
							
					
					}		
					
					// Prüfen für Rating mit einem Stern und eingeloggtem User
					if($ShowOnlyUsersVotes==1 && $CheckLogin==1 && $AllowRating==2 || $HideUntilVote==1 && $CheckLogin==1 && $AllowRating==2){
						
						if(is_user_logged_in()){
							
							//Achtung! Reihenfolge wichtig! $countShideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
							if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
								$countShideUntilVote = $countS;
							}
							
							$countS = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT COUNT(*) AS NumberOfRows
								FROM $tablenameIP
								WHERE GalleryID = %d and WpUserId = %s and RatingS = %d and pid = %d
							", 
							$galeryID,get_current_user_id(),1,$realId
							) );
							
							if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
								$countShideUntilVote = $countS;
							}
						}
						
						// Extra Condition für HideUntilVote
						if($HideUntilVote==1 && !is_user_logged_in()){
							$countS = 0;
						}
						
					}
					
					// Prüfen für Rating mit fünf Sternen und nicht eingeloggtem User. countR und rating ist hier notwendig zu wissen
					if($ShowOnlyUsersVotes==1 && $CheckLogin!=1 && $AllowRating==1 || $HideUntilVote==1 && $CheckLogin!=1 && $AllowRating==1){
						
						//Achtung! Reihenfolge wichtig! $countRhideUntilVote und $ratingHideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
						if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
							$countRhideUntilVote = $countR;
							$ratingHideUntilVote = $rating;
						}
						
						$countR = $wpdb->get_var( $wpdb->prepare(
						"
							SELECT COUNT(*) AS NumberOfRows
							FROM $tablenameIP 
							WHERE GalleryID = %d and IP = %s and Rating >= %d and pid = %d
						", 
						$galeryID,$userIP,1,$realId
						) );

						
						$rating = $wpdb->get_var( $wpdb->prepare(
						"
							SELECT SUM(Rating)
							FROM $tablenameIP 
							WHERE GalleryID = %d and IP = %s and Rating >= %d and pid = %d
						", 
						$galeryID,$userIP,1,$realId
						) );
						
						if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
							$countRhideUntilVote = $countR;
							$ratingHideUntilVote = $rating;
						}
					
					}

					// Prüfen für Rating mit fünf Sternen und nicht eingeloggtem User. countR und rating ist hier notwendig zu wissen --- ENDE
					
					// Prüfen für Rating mit fünf Sternen und eingeloggtem User. countR und rating ist hier notwendig zu wissen
					
					if($ShowOnlyUsersVotes==1 && $CheckLogin==1 && $AllowRating==1 || $HideUntilVote==1 && $CheckLogin==1 && $AllowRating==1){
						
						if(is_user_logged_in()){
							
							//Achtung! Reihenfolge wichtig! $countRhideUntilVote und $ratingHideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
							if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
								$countRhideUntilVote = $countR;
								$ratingHideUntilVote = $rating;
							}
							
							$countR = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT COUNT(*) AS NumberOfRows
								FROM $tablenameIP
								WHERE GalleryID = %d and WpUserId = %s and Rating >= %d and pid = %d
							", 
							$galeryID,get_current_user_id(),1,$realId
							) );
							
							$rating = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT SUM(Rating)
								FROM $tablenameIP
								WHERE GalleryID = %d and WpUserId = %s and Rating >= %d and pid = %d
							", 
							$galeryID,get_current_user_id(),1,$realId
							) );
							
							if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
								$countRhideUntilVote = $countR;
								$ratingHideUntilVote = $rating;
							}
						
						}
						
						// Extra Condition für HideUntilVote
						if($HideUntilVote==1 && !is_user_logged_in()){
							$countR = 0;
							$rating = 0;						
						}
					
					}					

					// Prüfen für Rating mit fünf Sternen und eingeloggtem User. countR und rating ist hier notwendig zu wissen --- ENDE
				
			

			// Ermitteln Anzahl der Bewertungen
					
			// Ermitteln wie die Stars angezeigt werden sollen beim hovern
			
			if($AllowRating==1){
				if($HideUntilVote==1){
					
					if ($countRhideUntilVote!=0){
						$averageStars = $ratingHideUntilVote/$countRhideUntilVote;
						$averageStarsRounded = round($averageStars,0);
						//echo "<br>averageStars: $averageStars<br>";			
					}
					else{$countRhideUntilVote=0; $averageStarsRounded = 0;}
					 
					if($averageStarsRounded>=1){$starTest1 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest1 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=2){$starTest2 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest2 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=3){$starTest3 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest3 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=4){$starTest4 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest4 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=5){$starTest5 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest5 = $iconsURL.'/star_off_48_reduced.png';}
				
				}
				else{
					
					if ($countR!=0){
						$averageStars = $rating/$countR;
						$averageStarsRounded = round($averageStars,0);
						//echo "<br>averageStars: $averageStars<br>";					
					}
					else{$countR=0; $averageStarsRounded = 0;}
					 
					if($averageStarsRounded>=1){$starTest1 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest1 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=2){$starTest2 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest2 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=3){$starTest3 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest3 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=4){$starTest4 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest4 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=5){$starTest5 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest5 = $iconsURL.'/star_off_48_reduced.png';}
					
				}
			}
			
			if($AllowRating==2){
				if($HideUntilVote==1){
					if($countShideUntilVote>0){$starCountS= $iconsURL.'/star_48_reduced.png';}
					else{$starCountS = $iconsURL.'/star_off_48_reduced.png';$countS=0;}
				}
				else{				
					if($countS>0){$starCountS= $iconsURL.'/star_48_reduced.png';}
					else{$starCountS = $iconsURL.'/star_off_48_reduced.png';$countS=0;}
				}
			}

			
			

			//ACHTUNG! Float left darf hier auf keinen Fall gemacht werden. Ansonsten fehlerhaftes verhalten der Divs in Thumb view!!!
echo "<div style='cursor: pointer;display:none;' class='cg_show' id='cg_show$realId'>";
			//ACHTUNG! Float left darf hier auf keinen Fall gemacht werden. Ansonsten fehlerhaftes verhalten der Divs in Thumb view!!!
//Facebook Iframe wird hier angezeigt





//Facebook Iframe wird hier angezeigt --- ENDE


			$cg_check_1600_width = "$cg_upload_dir/$Timestamp$NamePic-1600width.$ImgType";
			$cg_check_1920_width = "$cg_upload_dir/$Timestamp$NamePic-1920width.$ImgType";
			
											
			if(!file_exists($cg_check_1600_width)){$cg_check_1600_width=0;}
			else{$cg_check_1600_width="$uploads/$Timestamp$NamePic-1600width.$ImgType";}
			if(!file_exists($cg_check_1920_width)){$cg_check_1920_width=0;}
			else{$cg_check_1920_width="$uploads/$Timestamp$NamePic-1920width.$ImgType";}
			
			if(file_exists("$cg_upload_dir/".$Timestamp."".$NamePic."413.html")){
				echo '<input type="hidden" id="cg_fb_reload'.$realId.'" value="413">';
			    $urlForFacebook = "$uploads/".$Timestamp.$NamePic."413.html";
			}
			else{
				echo '<input type="hidden" id="cg_fb_reload'.$realId.'" value="1">';	
				$urlForFacebook = "$uploads/".$Timestamp.$NamePic.".html";;		
			}
		//	$dirHTML = $uploadFolder['basedir'].'/contest-gallery/gallery-id-'.$GalleryID.'/'.$Timestamp."_".$NamePic."413.html";
		
		// Feld zum speichern von Status ob das aktuelle Bild ein neues oder altes ist
		
		
		
			if($WpUpload!=0){
				
				$sourceOriginalImgUrl = $wpdb->get_var("SELECT guid FROM $table_posts WHERE ID = '$WpUpload'");
				
			}
			//Rückwärtskompatiblität zu hochgeladenen Bildern aus versionen vor 5.00
			else{
				
				$sourceOriginalImgBase = "$cg_upload_dir/".$Timestamp.$NamePic.'.'.$ImgType; // Pfad zum Bilderordner angeben
				list($widthOriginalImg, $heightOriginalImg) = getimagesize($sourceOriginalImgBase); // Breite und Höhe von original Image				
				$sourceOriginalImgUrl = $uploads."/".$Timestamp.$NamePic.".".$ImgType;
			}
		


					// cg_hide Klasse ist die Div Box zum Hovern 
				echo <<<HEREDOC

		<input type="hidden" class="realId" value="$realId">
		<input type="hidden" id="cg_img_order$realId" value="$r">
		<input type="hidden" class="averageStarsRounded" id="averageStarsRounded$realId" value="$averageStarsRounded">
								<input type="hidden" class="DistancePics" value="$DistancePics">
				<input type="hidden" class="DistancePicsV" value="$DistancePicsV">
		<input type="hidden" id="widthOriginalImg$realId" class="widthOriginalImg" value="$widthOriginalImg">
		<input type="hidden" id="heightOriginalImg$realId" class="heightOriginalImg" value="$heightOriginalImg">		
				<input type="hidden" class="srcOriginalImg" value="$sourceOriginalImgUrl">
		<input type="hidden" class="src1920width" value="$cg_check_1920_width">
		<input type="hidden" class="src1600width" value="$cg_check_1600_width">
		<input type="hidden" class="src1024width" value="$uploads/$Timestamp$NamePic-1024width.$ImgType">
		<input type="hidden" class="src624width" value="$uploads/$Timestamp$NamePic-624width.$ImgType">
		<input type="hidden" class="src300width" value="$uploads/$Timestamp$NamePic-300width.$ImgType">
		<input type="hidden" id="urlForFacebook$realId" class="urlForFacebook" value="$urlForFacebook">
		


HEREDOC;

			if($HideUntilVote==1){
						echo "<input type='hidden' id='countRatingQuantity$realId' value='".@$countRhideUntilVote."'>";
						echo "<input type='hidden' id='countRatingSQuantity$realId' value='".@$countShideUntilVote."'>";
			}
			else{
						echo "<input type='hidden' id='countRatingQuantity$realId' value='".@$countR."'>";
						echo "<input type='hidden' id='countRatingSQuantity$realId' value='".@$countS."'>";
			}


echo "<input type='hidden' id='countCommentsQuantity$realId' value='".@$countC."'>";


// Das wird von PHP erzeugt und bleibt
if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND ($ForwardFrom==2 or $ForwardFrom==1)){
						// URL ermitteln zu der wetiergeleitet werden soll
						@$cg_img_url = $wpdb->get_var("SELECT Short_Text FROM $tablenameEntries, $tablename_f_input WHERE $tablenameEntries.f_input_id = $tablename_f_input.id
						AND $tablename_f_input.Use_as_URL = '1' AND  $tablenameEntries.pid='$realId'");
						
	
echo "<input type='hidden' class='cg_img_url' id='cg_img_url$realId' value='$cg_img_url'>";	
}

echo "<div class='cg_append' id='cg_append$realId'>";


		
		if($FullSizeImageOutGallery==1){
		
			//$hregCGimage = 	"<a href='".$uploads."/".$Timestamp.$NamePic.".".$ImgType."' >";
			$hregCGimageValue = "$uploads/$Timestamp$NamePic.$ImgType";		
			//if($FullSizeImageOutGalleryNewTab==1){$hregCGimageTargetBlank = "target='_blank'";}	
			//else{$hregCGimageTargetBlank = "";}
		}
		else{
			
			
			//$hregCGimage = "<a href='$siteURL&picture_id=$id&1=".$getLook."&2=".$getOrder."&3=".$getStart."#cg-begin' $hregCGimageTargetBlank>";
			$hregCGimageValue = "$siteURL&picture_id=$id&1=".$getLook."&2=".$getOrder."&3=".$getStart."#cg-begin";	
		
		}

echo "</div>";



echo "<input type='hidden'  class='hrefCGpic' value='".$hregCGimageValue."' >";

// Slider Inhalt versteckt anzeigen

if($AllowGalleryScript==1){

		if ($selectFormInput == true) {
		
					echo "<div class='cg_user_input' style='display:none !important;margin:0px;padding:0px;'>";
					//$countFormFields = 0;
					foreach($selectContentFieldArray as $key => $formvalue){
					
							
							// 1. Feld Typ
							// 2. ID des Feldes in F_INPUT
							// 3. Feld Reihenfolge
							// 4. Feld Content
							
							// hier sollte von get-data aus vorher überprüft werden ob dieses feld überhaupt angezeigt werden soll($ShowSliderInputID ?)
													
							if(@$formvalue=='text-f'){$fieldtype="nf"; $i=1; continue;}	
							if(@$fieldtype=="nf" AND $i==1){$formFieldId=$formvalue; $i=2; continue;}	
							if(@$fieldtype=="nf" AND $i==2){$fieldOrder=$formvalue; $i=3; continue;}	
							if (@$fieldtype=="nf" AND $i==3) {
							
							//$getEntries = $wpdb->get_var( "SELECT Short_Text FROM $tablenameentries WHERE pid='$id' AND f_input_id = '$formFieldId'");
							
							
																					// Prüfen ob das Feld im Slider angezeigt werden soll
							//if(array_search($formFieldId, @$ShowSliderInputID)){$checked='checked';}
							//else{$checked='';}
							
							
							
							$getEntries = $wpdb->get_var( $wpdb->prepare( 
							"
								SELECT Short_Text
								FROM $tablenameEntries 
								WHERE pid = %d and f_input_id = %d
							", 
							$realId,$formFieldId
							) );
							
								if(!empty($getEntries)){
								echo "<p style='margin:0px;padding: 20px 20px 0px 20px;'><b><u>$formvalue:</u></b><br/>";
								echo "$getEntries</p>";
								}
								
								/*
							if($ForwardToURL==1 AND $cg_Use_as_URL==1){
								
							// Prüfen ob das Feld genutzt werden soll als URL
							@$cg_Use_as_URL_id = $wpdb->get_var("SELECT id FROM $tablename_f_input WHERE id='$formFieldId' and Use_as_URL='1'");	

							
									if(@$cg_Use_as_URL_id==$formFieldId){
									echo "<input type='hidden' id='cg_img_url$realId' class='cg_img_url' value='$getEntries'>";	
									}
									
							}	*/							
								
								
							$fieldtype='';
							
							$i=0;
							
							}
							
							if(@$formvalue=='email-f'){@$fieldtype="ef";  $i=1; continue;}	
							if(@$fieldtype=="ef" AND $i==1){@$formFieldId=@$formvalue; $i=2; continue;}	
							if(@$fieldtype=="ef" AND $i==2){@$fieldOrder=@$formvalue; $i=3; continue;}	
							if (@$fieldtype=='ef' AND $i==3) {
							
							//$getEntries = $wpdb->get_var( "SELECT Short_Text FROM $tablenameentries WHERE pid='$id' AND f_input_id = '$formFieldId'");
							
							$getEntries = $wpdb->get_var( $wpdb->prepare( 
							"
								SELECT Short_Text
								FROM $tablenameEntries 
								WHERE pid = %d and f_input_id = %d
							", 
							$realId,$formFieldId
							) );
							
								if(!empty($getEntries)){
								echo "<p style='margin:0px;padding: 20px 20px 0px 20px;'><b><u>$formvalue:</u></b><br/>";
								echo "$getEntries</p>";
								}
							
							$fieldtype='';
							
							$i=0;						
							
							}
							
							if($formvalue=='comment-f'){$fieldtype="kf"; $i=1; continue;}	
							if($fieldtype=="kf" AND $i==1){$formFieldId=$formvalue; $i=2; continue;}	
							if($fieldtype=="kf" AND $i==2){$fieldOrder=$formvalue; $i=3; continue;}	
							if ($fieldtype=='kf' AND $i==3) {
							
							//$getEntries = $wpdb->get_var( "SELECT Long_Text FROM $tablenameentries WHERE pid='$id' AND f_input_id = '$formFieldId'");
							
							$getEntries = $wpdb->get_var( $wpdb->prepare( 
							"
								SELECT Long_Text
								FROM $tablenameEntries 
								WHERE pid = %d and f_input_id = %d
							", 
							$realId,$formFieldId
							) );
							
							

							
								
								if(!empty($getEntries)){
								$getEntries1 = html_entity_decode(stripslashes($getEntries));	
									
								echo "<p style='margin:0px;padding: 20px 20px 0px 20px;'><b><u>$formvalue:</u></b><br/>";
								echo "$getEntries1</p>";
								}
							
							$fieldtype='';
							
							$i=0;
								
							}

													
						}
					
				
			
		echo "</div>";	
		
		}	

				}
				
	
		//	
				

if(@$Field1IdGalleryView and @$Field1IdGalleryView!=0){
	
	
	@$cgFormFieldRow = $wpdb->get_row( "SELECT * FROM $tablenameEntries WHERE f_input_id='$Field1IdGalleryView' and pid='$realId' ");
		if(@$inputFieldContentID=='text-f' or @$inputFieldContentID=='email-f'){
	@$cgFormFieldContent = $cgFormFieldRow->Short_Text;	
	}
	if(@$inputFieldContentID=='comment-f'){
	@$cgFormFieldContent = $cgFormFieldRow->Long_Text;	
	}
	
	
		// Falls kein Content vorhanden ist, dann soll auch der Div nicht angezeigt werden.
		if(@$cgFormFieldContent && $ThumbViewBorderRadius<=5){
			
			// Wenn Forward out of gallery aktiviert ist dann wird das Feld ohne cg_image class angezeigt
			if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND $ForwardFrom==2){
				
				if($ForwardType==2){$cg_gallery_contest_target = "target='_blank'";}
				else{$cg_gallery_contest_target='';}
				
				//hier mit PHP überprüfen ob Zeichen enthalten sind
				if (strstr($cg_img_url, 'http')) {
					$cg_img_url = $cg_img_url ;
				}
				
				else{
					
				$cg_img_url = "http://".$cg_img_url;	
					
				}
				
				echo "<a href='$cg_img_url' $cg_gallery_contest_target title='Go to $cg_img_url' >";		
				echo "<div  style='cursor:pointer !important;' data-cg_image_id='$realId' id='cg_Field1IdGalleryView$r' >";
				echo "<div>";
				echo @$cgFormFieldContent."1";
				//echo $uploads."/".$Timestamp.$NamePic.$ImgType;  				
				echo "</div>";
				echo "</div>";
				echo "</a>";
			
			
			}
			
			else{
				
				echo "<div data-cg_image_id='$realId' id='cg_Field1IdGalleryView$r' >";
				echo "<div>";
				echo @$cgFormFieldContent;
				//echo $uploads."/".$Timestamp.$NamePic.$ImgType;  
				echo "</div>";
				echo "</div>";
				
				
			}
			
			
		}
	
	
}




if($AllowRating==1 or $AllowRating==2 or $AllowComments==1 or ($ThumbViewBorderRadius>5) && $cgFormFieldContent){
	
	// Wenn Forward out of gallery aktiviert ist dann wird das Feld ohne cg_image class angezeigt
	if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND ($ForwardFrom==2 OR $ForwardFrom==3)){
	
	$cg_hide_class = "";	
	$cg_hide_cursor = "cursor:default;";	
	//$cg_star_image_cursor = "cursor:default;";	
		
	}
	
	else{
		
	$cg_hide_class = "class='cg_image$r'";		
	$cg_hide_cursor = "";
		
	}
		
	echo "<div style='$cg_hide_cursor' data-cg_image_id='$realId' $cg_hide_class id='cg_hide$r' >";
//		echo "<a onClick='document.getElementById(\"cg-img-$id\").click()' >";//<img src='$urlTransparentPic' style='cursor: pointer;position:absolute;z-index:20;width:$WidthThumbPx;height:$HeightThumbPx;'>";
//		echo "</a>";


	if(($ThumbViewBorderRadius>5) && $cgFormFieldContent){
	
	echo "<div class='cg_info_depend_on_radius' style='display:block !important;line-height:18px;vertical-align:top;color:white;padding-left:4px;position:relative !important;margin-bottom:5px;padding-right:4px;'>";
	
	echo $cgFormFieldContent;
	
	echo "</div>";
	

	}


	if($AllowComments==1){

		echo "<div class='cg_info_comment_gallery_div'>";
			echo "<div class='cg_info_comment_gallery_div_child'>";
		
			//echo "<input type='hidden' class='countCommentsQuantity' value='".@$countC."'>";

		//echo "<div style='display:table  !important;color: #fff;font-size:18px;margin-left:auto; margin-right:5px;clear: both;height: 18px;line-height: 18px;' id='rating_cgc-$realId'> <b>Comments ($countC)</b></div>";
			if($CommentsOutGallery==1){
				
				
		//echo "<div style='display:table !important;color: #fff;font-size:18px;margin-right:auto; margin-left:5px;clear: both;height: 18px;line-height: 18px;$underlineComments' id='rating_cgc-$realId'> <b>$language_Comments ($countC)</b></div>";
		echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;' ><img id='cg_pngCommentsIcon$realId' src='$pngCommentsIcon'  style='float:left;cursor:pointer;'/>";
		echo "<input type='hidden' class='countCommentsQuantity' value='".@$countC."'></div>";
		 echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' class='comments_cg_slider$realId'><b>&nbsp;(".@$countC.")</b></div>";
				}
				
			else{
				
				
		//echo "<div style='display:table !important;color: #fff;font-size:18px;margin-right:auto; margin-left:5px;clear: both;height: 18px;line-height: 18px;$underlineComments' id='rating_cgc-$realId'> <b>$language_Comments ($countC)</b></div>";
		echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;' ><img src='$pngCommentsIcon'  style='float:left;cursor:default;'/>";
		echo "<input type='hidden' class='countCommentsQuantity' value='".@$countC."'></div>";
		 echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' class='comments_cg_slider$realId'><b>&nbsp;(".@$countC.")</b></div>";
				
				
				}
	
	


	echo "</div>";	
echo "</div>";	

//echo "<div class='cg_empty_div'></div>";
//echo "<br/>";

	}	 
	
	
		//echo "<div style='padding-top:2px;display:table;margin-right:auto; margin-left:5px;' >src='$starTest1'   <b>$language_Comments ($countC)</b></div>";
	
	// Bestimmen ob aus der Gallerie heraus gevotet werden darf
	
	if($RatingOutGallery==1){	
	
	$idRatingStar = "cg_rate_star$realId";	
	$ratingStarCursorStyle = "cursor:pointer;";
	
	}
	else{
		
	$idRatingStar = "";
	$ratingStarCursorStyle = "cursor:default;";
		
	}

	
							if($AllowRating==1 and $HideUntilVote!=1){
									  echo "<input type='hidden' class='cg_check_voted' value='2' id='cg_check_voted$realId'>";
									  	  //echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
									  	  echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";	  
											echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
										  
			
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest1'  style='float:left;$ratingStarCursorStyle' alt='1' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest2'  style='float:left;$ratingStarCursorStyle' alt='2' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest3'  style='float:left;$ratingStarCursorStyle' alt='3' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest4'  style='float:left;$ratingStarCursorStyle' alt='4' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest5'  style='float:left;$ratingStarCursorStyle' alt='5' id='$idRatingStar'></div>";
	
						  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countR.")</b></div>";										  
									  echo "</div>";
									  echo "</div>";

								}
								
						if($AllowRating==2 and $HideUntilVote!=1){
									  echo "<input type='hidden' class='cg_check_voted' value='2' id='cg_check_voted$realId'>";
									  	  //echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
									  	  echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";
										  echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
										  
										  
			
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starCountS'  style='float:left;$ratingStarCursorStyle' alt='6' id='$idRatingStar'></div>";
	
						  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countS.")</b></div>";										  
									  echo "</div>";
									  echo "</div>";

								}
								
							///HideUntilVote Variante
							if($AllowRating==1 and $HideUntilVote==1){
									 
							//echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
							echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";
								echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
							//echo "test";
							if($countR>=1){
					
							  echo "<input type='hidden' class='cg_check_voted' value='1' id='cg_check_voted$realId'>"; 
								
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest1'  style='float:left;$ratingStarCursorStyle' alt='1' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest2'  style='float:left;$ratingStarCursorStyle' alt='2' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest3'  style='float:left;$ratingStarCursorStyle' alt='3' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest4'  style='float:left;$ratingStarCursorStyle' alt='4' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest5'  style='float:left;$ratingStarCursorStyle' alt='5' id='$idRatingStar'></div>";	

							  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countRhideUntilVote.")</b></div>";	
								
							}					
							
							else{
							
							echo "<input type='hidden' class='cg_check_voted' value='0' id='cg_check_voted$realId'>";							
								
							echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;cursor:pointer;' id='rating_cg-".@$realId."' class='cg_hide_until_vote_rate".@$realId."' >";
							//echo "$votedFirstContent"
							echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='1' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='2' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='3' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='4' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='5' id='$idRatingStar'></div>";
							echo "</div>";
							}
							
						
								echo "</div>";
							echo "</div>";

							}
							
							if($AllowRating==2 and $HideUntilVote==1){
									 
							//echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
							echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";
								echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
							//echo "test";
							if($countS>=1){
								
							  echo "<input type='hidden' class='cg_check_voted' value='1' id='cg_check_voted$realId'>"; 
								
						      echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starCountS'  style='float:left;$ratingStarCursorStyle' alt='6' id='$idRatingStar'></div>";

							  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countShideUntilVote.")</b></div>";	
								
							}						
							
							else{
							
							echo "<input type='hidden' class='cg_check_voted' value='0' id='cg_check_voted$realId'>";							
								
							echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;cursor:pointer;' id='rating_cg-".@$realId."' class='cg_hide_until_vote_rate".@$realId."' >";
							echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='6' id='$idRatingStar'></div>";
							//echo "$votedFirstContent";
							echo "</div>";
							}
							
							
							
							
								echo "</div>";
							echo "</div>";

							}
							
							
							if($FbLike==1 and $FbLikeGallery==1){
							
									echo "<div style='position:relative !important;$showFbLikeInGalleryStyle;$showFbLikeInGalleryStyleVoteOrNot;height:20px;line-height:18px;vertical-align:top;margin-top:5px;margin-bottom:4px;'>";
									
									echo "<div style='border:none;margin: 0;padding 0;overflow:hidden;height:40px;' id='cg_fb_like_div".$realId."'>";
									echo "<iframe src='".$urlForFacebook."'  style='border: none;width:180px;height:40px;overflow:hidden;' scrolling='no' 
									class='cg_fb_like_iframe_gallery_order".$r."' id='cg_fb_like_iframe_gallery".$realId."'  name='cg_fb_like_iframe_gallery".$realId."'></iframe>";
									echo "</div>";
									
									
									echo "</div>";			
								
							}
			



			// Abstand wird zurück gesetzt auf die Einstellungen bei Options
			$DistancePicsPx = $DistancePicsOriginalPx;



	echo "</div>";

			
					
				}
				
				
				
	echo "</div>";			
				
				
			$i++;	
			}
		



		
		}
		
		// Thumb Ansicht anzeigen ---- ENDE

	$SameHeightLook=1;
		
	// ROW Ansicht anzeigen	

	if($look=='row'){
	
	echo "<div id='mainCGallery'>";
	
	
	@$getSQL = new sql_selects($tablename,$galeryID,$order,$start,$step,$pictureID);
	$count_pics = $getSQL->count_pics();
	//$picsSQL = $getSQL->pics_sql();
	
	// var height1 = parseInt(height);
 
   // Array für neue Höhen
   $newHeight1 = array();
  
   $newHeight2 = 0;
  
  // Beginn des Nenners
  $ratio = 0;
  
  // Array für mehrere Nenner (Gesamtzähler)
  $denominator1 = array();
  // a bestimmt mehrere Nenner
  $a = 0;
  
  // Gesamter Zähler
  $newNumerator = 0;
	
  // Beginn des Zählers im Bruch 
  $numerator = 0;
  
  // Neue Höhe 
  $newHeight = 0;
  
  $partNumerator = 0;
  
  // Anzahl der hochgeladenen Bilder
  $n = $count_pics;
  
  // Wie viele Bilder sollen in einer Reihe dargestellt werden. Einstellung erfolgt durch User in Options
  $picsInRow = $PicsInRow;
  
  // Wie viele Bilder sollen pro Seite dargestellt werden. Einstellung erfolgt durch User in Options.
  $picsPerSite = $PicsPerSite;
  
  // Breite des divs in dem sich die Galerie befindet
  @$widthmain = $widthMainCGallery-2;
  
  // Gesamtbreite wird neu berechnet, da Anzahl der Bilder (.cg_image) kleiner ist als eingestellte Anzahl der Bilder in einer Reihe in Options 
  if($n < $picsInRow){
  
  $widthmain = $widthmain/$picsInRow*$n;
  
  // Neue Anzahl der Bilder in einer Reihe. Entspricht der Anzahl der Gesamtbilder.
  $picsInRow = $n;
  
  }
   
  $widthLastRow = $widthmain/$picsInRow*($n-floor($n/$picsInRow)*$picsInRow);
    
  $lastRow = $LastRow;

  $width2 = 0;
    
  $lastRowLeft = $n-($n-floor($n/$picsInRow)*$picsInRow);
		
  $lastImages = 1;	
  
  // Orientierungsvariable bei Durcharbeiten des großen Arrays   
  $r = 0;
  
  $i = 0;
  
  //$uploadFolder = wp_upload_dir();
  
  // 1. Die neue Höhe jedes einzelnen Bildes muss ermittelt werden. Diese wird in einem Array gesammelt.
  
 /*
  
	foreach($picsSQL as $value){
	
	$r++;

	$Timestamp = $value->Timestamp.'_';
	$NamePic = $value->NamePic;
	$ImgType = $value->ImgType;

	
	///echo "<br>countR: $countR;<br>";
	  
	// Feststellen der Quelle des Original Images		
	
	
	$sourceOriginalImg = $uploadFolder['basedir'].'/contest-gallery/gallery-id-'.$galeryID.'/'.$Timestamp.$NamePic.'.'.$ImgType; // Pfad zum Bilderordner angeben
	list($widthOriginalImg, $heightOriginalImg) = getimagesize($sourceOriginalImg); // Breite und Höhe von original Image
	
	$width = $widthOriginalImg;
	$height = $heightOriginalImg;
	
    $div = $width/$height;
	  
	$ratio  = $ratio + $div;
	  
	 if ($r>$lastRowLeft) {
	 
  	  $width3 = $newHeight2*$width/$height;
	  $width2 = $width2 + $width3;	  
	  	  
	  }
	  
		  if ($r % $picsInRow == 0) {
		  			
			$denominator1[]=$ratio;
			
			$newHeight = floor($widthmain/$ratio);
				
			$newHeight1[] = $newHeight;
				
			$newHeight2 = $newHeight;
		  
		  $a++;
		  
		  $newNumerator = 0;
		  		  
		  $newHeight = 0;
		  
		  // Darf nicht Null sein, unte bei der Division
		  $ratio = 0;
		  
		  $partNumerator = 0;

		  
		  }
		  
		  if ($n/$r == 1) { 
				

			if ($lastRow==0) {
					
					if ($width2<=$widthmain) {
					
					$newHeight = $newHeight2;		
										
					}
					
					if ($width2>$widthmain) {
					
					$ratio = 0.01;
					$newHeight = floor($widthmain/$ratio);
					
				

					
					}
				
				}
				

				$newHeight1[] = $newHeight;
		  
		  }	
		  
		
		  
	   }  */
	   
	     // 1. Die neue Höhe jedes einzelnen Bildes muss ermittelt werden. Diese wird in einem Array gesammelt. ---- ENDE
		 
		 // 2. Ausgabe der Bilder nach dem die Höhe ermittelt wurde 
		 
		    $h = 0;
			$g = 0;
			$r = 0;
			foreach($picsSQL as $value){
			$r++;
			$g++;
			
			$id = $value->id;
			$Timestamp = $value->Timestamp.'_';
			$NamePic = $value->NamePic;
			$ImgType = $value->ImgType;
			$rating = $value->Rating;
			$countR = $value->CountR;
			$countC = $value->CountC;
			$countS = $value->CountS;
			$widthOriginalImg = $value->Width;
			$heightOriginalImg = $value->Height;
			$WpUpload = $value->WpUpload;
			
			$realId = $id;
			
			// Verschlüsselung der ID
			$id = ($id+8)*2+100000;	


					// 4 Varianten hier möglich wenn andere Einstellungen getroffen wurden als standard					
					
					// Prüfen für Rating mit einem Stern und nicht eingeloggtem User
					if($ShowOnlyUsersVotes==1 && $CheckLogin!=1 && $AllowRating==2 || $HideUntilVote==1 && $CheckLogin!=1 && $AllowRating==2){
						
						//Achtung! Reihenfolge wichtig! $countShideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
						if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
							$countShideUntilVote = $countS;
						}

							$countS = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT COUNT(*) AS NumberOfRows
								FROM $tablenameIP 
								WHERE GalleryID = %d and IP = %s and RatingS = %d and pid = %d
							", 
							$galeryID,$userIP,1,$realId
							) );
						
						if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
							$countShideUntilVote = $countS;
						}
							
					
					}		
					
					// Prüfen für Rating mit einem Stern und eingeloggtem User
					if($ShowOnlyUsersVotes==1 && $CheckLogin==1 && $AllowRating==2 || $HideUntilVote==1 && $CheckLogin==1 && $AllowRating==2){
						
						if(is_user_logged_in()){
							
							//Achtung! Reihenfolge wichtig! $countShideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
							if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
								$countShideUntilVote = $countS;
							}
							
							$countS = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT COUNT(*) AS NumberOfRows
								FROM $tablenameIP
								WHERE GalleryID = %d and WpUserId = %s and RatingS = %d and pid = %d
							", 
							$galeryID,get_current_user_id(),1,$realId
							) );
							
							if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
								$countShideUntilVote = $countS;
							}
						}
						
						// Extra Condition für HideUntilVote
						if($HideUntilVote==1 && !is_user_logged_in()){
							$countS = 0;
						}
						
					}
					
					// Prüfen für Rating mit fünf Sternen und nicht eingeloggtem User. countR und rating ist hier notwendig zu wissen
					if($ShowOnlyUsersVotes==1 && $CheckLogin!=1 && $AllowRating==1 || $HideUntilVote==1 && $CheckLogin!=1 && $AllowRating==1){
						
						//Achtung! Reihenfolge wichtig! $countRhideUntilVote und $ratingHideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
						if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
							$countRhideUntilVote = $countR;
							$ratingHideUntilVote = $rating;
						}
						
						$countR = $wpdb->get_var( $wpdb->prepare(
						"
							SELECT COUNT(*) AS NumberOfRows
							FROM $tablenameIP 
							WHERE GalleryID = %d and IP = %s and Rating >= %d and pid = %d
						", 
						$galeryID,$userIP,1,$realId
						) );

						
						$rating = $wpdb->get_var( $wpdb->prepare(
						"
							SELECT SUM(Rating)
							FROM $tablenameIP 
							WHERE GalleryID = %d and IP = %s and Rating >= %d and pid = %d
						", 
						$galeryID,$userIP,1,$realId
						) );
						
						if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
							$countRhideUntilVote = $countR;
							$ratingHideUntilVote = $rating;
						}
					
					}

					// Prüfen für Rating mit fünf Sternen und nicht eingeloggtem User. countR und rating ist hier notwendig zu wissen --- ENDE
					
					// Prüfen für Rating mit fünf Sternen und eingeloggtem User. countR und rating ist hier notwendig zu wissen
					
					if($ShowOnlyUsersVotes==1 && $CheckLogin==1 && $AllowRating==1 || $HideUntilVote==1 && $CheckLogin==1 && $AllowRating==1){
						
						if(is_user_logged_in()){
							
							//Achtung! Reihenfolge wichtig! $countRhideUntilVote und $ratingHideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
							if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
								$countRhideUntilVote = $countR;
								$ratingHideUntilVote = $rating;
							}
							
							$countR = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT COUNT(*) AS NumberOfRows
								FROM $tablenameIP
								WHERE GalleryID = %d and WpUserId = %s and Rating >= %d and pid = %d
							", 
							$galeryID,get_current_user_id(),1,$realId
							) );
							
							$rating = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT SUM(Rating)
								FROM $tablenameIP
								WHERE GalleryID = %d and WpUserId = %s and Rating >= %d and pid = %d
							", 
							$galeryID,get_current_user_id(),1,$realId
							) );
							
							if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
								$countRhideUntilVote = $countR;
								$ratingHideUntilVote = $rating;
							}
						
						}
						
						// Extra Condition für HideUntilVote
						if($HideUntilVote==1 && !is_user_logged_in()){
							$countR = 0;
							$rating = 0;						
						}
					
					}					

					// Prüfen für Rating mit fünf Sternen und eingeloggtem User. countR und rating ist hier notwendig zu wissen --- ENDE
				
			

			// Ermitteln Anzahl der Bewertungen
					
			// Ermitteln wie die Stars angezeigt werden sollen beim hovern
			
			if($AllowRating==1){
			
				if($HideUntilVote==1){
					
					if ($countRhideUntilVote!=0){
						$averageStars = $ratingHideUntilVote/$countRhideUntilVote;
						$averageStarsRounded = round($averageStars,0);
						//echo "<br>averageStars: $averageStars<br>";			
					}
					else{$countRhideUntilVote=0; $averageStarsRounded = 0;}
					 
					if($averageStarsRounded>=1){$starTest1 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest1 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=2){$starTest2 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest2 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=3){$starTest3 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest3 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=4){$starTest4 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest4 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=5){$starTest5 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest5 = $iconsURL.'/star_off_48_reduced.png';}
				
				}
				else{
					
					if ($countR!=0){
						$averageStars = $rating/$countR;
						$averageStarsRounded = round($averageStars,0);
						//echo "<br>averageStars: $averageStars<br>";					
					}
					else{$countR=0; $averageStarsRounded = 0;}
					 
					if($averageStarsRounded>=1){$starTest1 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest1 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=2){$starTest2 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest2 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=3){$starTest3 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest3 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=4){$starTest4 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest4 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=5){$starTest5 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest5 = $iconsURL.'/star_off_48_reduced.png';}
					
				}
			
			}
			
			if($AllowRating==2){
						
				if($HideUntilVote==1){
					if($countShideUntilVote>0){$starCountS= $iconsURL.'/star_48_reduced.png';}
					else{$starCountS = $iconsURL.'/star_off_48_reduced.png';$countS=0;}
				}
				else{				
					if($countS>0){$starCountS= $iconsURL.'/star_48_reduced.png';}
					else{$starCountS = $iconsURL.'/star_off_48_reduced.png';$countS=0;}
				}
				
			}

		

			
			echo "<div style='float:left;display:none;' class='cg_show' id='cg_show$realId'>";


			$cg_check_1600_width = "$cg_upload_dir/$Timestamp$NamePic-1600width.$ImgType";
			$cg_check_1920_width = "$cg_upload_dir/$Timestamp$NamePic-1920width.$ImgType";
			
												
			if(!file_exists($cg_check_1600_width)){$cg_check_1600_width=0;}
			else{$cg_check_1600_width="$uploads/$Timestamp$NamePic-1600width.$ImgType";}
			if(!file_exists($cg_check_1920_width)){$cg_check_1920_width=0;}
			else{$cg_check_1920_width="$uploads/$Timestamp$NamePic-1920width.$ImgType";}
			
			if(file_exists("$cg_upload_dir/".$Timestamp."".$NamePic."413.html")){
				echo '<input type="hidden" id="cg_fb_reload'.$realId.'" value="413">';
			    $urlForFacebook = "$uploads/".$Timestamp.$NamePic."413.html";
			}
			else{
				echo '<input type="hidden" id="cg_fb_reload'.$realId.'" value="1">';	
				$urlForFacebook = "$uploads/".$Timestamp.$NamePic.".html";;		
			}
			
			
			if($WpUpload!=0){
				
				$sourceOriginalImgUrl = $wpdb->get_var("SELECT guid FROM $table_posts WHERE ID = '$WpUpload'");
				
			}
			//Rückwärtskompatiblität zu hochgeladenen Bildern aus versionen vor 5.00
			else{
				
				$sourceOriginalImgBase = "$cg_upload_dir/".$Timestamp.$NamePic.'.'.$ImgType; // Pfad zum Bilderordner angeben
				list($widthOriginalImg, $heightOriginalImg) = getimagesize($sourceOriginalImgBase); // Breite und Höhe von original Image				
				$sourceOriginalImgUrl = $uploads."/".$Timestamp.$NamePic.".".$ImgType;
			}
			
			
			
				  
					// cg_hide Klasse ist die Div Box zum Hovern 
				echo <<<HEREDOC


		<input type="hidden" class="realId" value="$realId">
		<input type="hidden" id="cg_img_order$realId" value="$r">
		<input type="hidden" class="averageStarsRounded" id="averageStarsRounded$realId" value="$averageStarsRounded">
								<input type="hidden" class="DistancePics" value="$DistancePics">
				<input type="hidden" class="DistancePicsV" value="$DistancePicsV">
		<input type="hidden" id="widthOriginalImg$realId" class="widthOriginalImg" value="$widthOriginalImg">
		<input type="hidden" id="heightOriginalImg$realId" class="heightOriginalImg" value="$heightOriginalImg">		
		<input type="hidden" class="srcOriginalImg" value="$sourceOriginalImgUrl">
		<input type="hidden" class="src1920width" value="$cg_check_1920_width">
		<input type="hidden" class="src1600width" value="$cg_check_1600_width">
		<input type="hidden" class="src1024width" value="$uploads/$Timestamp$NamePic-1024width.$ImgType">
		<input type="hidden" class="src624width" value="$uploads/$Timestamp$NamePic-624width.$ImgType">
		<input type="hidden" class="src300width" value="$uploads/$Timestamp$NamePic-300width.$ImgType">
		<input type="hidden" id="urlForFacebook$realId" class="urlForFacebook" value="$urlForFacebook">


HEREDOC;

			if($HideUntilVote==1){
						echo "<input type='hidden' id='countRatingQuantity$realId' value='".@$countRhideUntilVote."'>";
						echo "<input type='hidden' id='countRatingSQuantity$realId' value='".@$countShideUntilVote."'>";
			}
			else{
						echo "<input type='hidden' id='countRatingQuantity$realId' value='".@$countR."'>";
						echo "<input type='hidden' id='countRatingSQuantity$realId' value='".@$countS."'>";
			}


echo "<input type='hidden' id='countCommentsQuantity$realId' value='".@$countC."'>";



// Das wird von PHP erzeugt und bleibt
if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND ($ForwardFrom==2 or $ForwardFrom==1)){
						// URL ermitteln zu der wetiergeleitet werden soll
						@$cg_img_url = $wpdb->get_var("SELECT Short_Text FROM $tablenameEntries, $tablename_f_input WHERE $tablenameEntries.f_input_id = $tablename_f_input.id
						AND $tablename_f_input.Use_as_URL = '1' AND  $tablenameEntries.pid='$realId'");
						
	
echo "<input type='hidden' class='cg_img_url' id='cg_img_url$realId' value='$cg_img_url'>";	
}


echo "<div class='cg_append' id='cg_append$realId'>";
	//echo "TEST3";
// Das wird von PHP erzeugt und von Javascript in show-jquery-gallery abgeändert. Show_gallery_jquery_image_slider bezieht sich auf das abgeändert durch Javascript.
//if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND ($ForwardFrom==2 or $ForwardFrom==1)){	
	


	//echo "<input type='hidden' class='cg_img_url' value='$cg_img_url'>";
/*	
echo "<a href='$cg_img_url' title='Go to $cg_img_url' >";		

//	<img alt='$commentText' src='$uploads/$Timestamp$imageThumb' style='cursor: pointer;$padding;position: absolute !important;max-width:none !important;' class='cg_image' width='$WidthThumbPic' >

	echo <<<HEREDOC
	
		
		<img src='$uploads/$Timestamp$imageThumb'  style='position:absolute;left:-2px;right:-2px;max-width:none !important;' width='$newWidthImagePx' height='$newHeightImagePx' >
		
		
		</a>
HEREDOC;*/
	
//}

//else{
		if($FullSizeImageOutGallery==1){	

		
		//	$hregCGimage = 	"<a href='".$uploads."/".$Timestamp.$NamePic.".".$ImgType."' >";
			$hregCGimageValue = "$uploads/$Timestamp$NamePic.$ImgType";
		//	if($FullSizeImageOutGalleryNewTab==1){$hregCGimageTargetBlank = "target='_blank'";}	
		//	else{$hregCGimageTargetBlank = "";}			
			
		}
		else{
			
			
			//if($FullSizeImageOutGalleryNewTab==1){$hregCGimageTargetBlank = "target='_blank'";}	
		//	else{$hregCGimageTargetBlank = "";}			
			
			
			//$hregCGimage = "<a href='$siteURL&picture_id=$id&1=".$getLook."&2=".$getOrder."&3=".$getStart."#cg-begin' $hregCGimageTargetBlank>";
			$hregCGimageValue = "$siteURL&picture_id=$id&1=".$getLook."&2=".$getOrder."&3=".$getStart."#cg-begin";	
		
		}
	
//echo $hregCGimage;



//	<img alt='$commentText' src='$uploads/$Timestamp$imageThumb' style='cursor: pointer;$padding;position: absolute !important;max-width:none !important;' class='cg_image' width='$WidthThumbPic' >
/*
	echo <<<HEREDOC
	
		
		<img src='$uploads/$Timestamp$imageThumb'  style='position:absolute;left: -2px;right: -2px;max-width:none !important;' width='$newWidthImagePx' height='$newHeightImagePx' data-cg_image_id='$realId' class='cg_image$r'>
		
		
		</a>
HEREDOC;*/

//}

echo "</div>";	
echo "<input type='hidden'  class='hrefCGpic' value='$hregCGimageValue' >";

// Slider Inhalt versteckt anzeigen

if($AllowGalleryScript==1){
//	print_r($selectFormInput);
		if ($selectFormInput == true) {
		
					echo "<div class='cg_user_input' style='display:none !important;margin:0px;padding:0px;'>";
					//$countFormFields = 0;
					foreach($selectContentFieldArray as $key => $formvalue){
					
							
							// 1. Feld Typ
							// 2. ID des Feldes in F_INPUT
							// 3. Feld Reihenfolge
							// 4. Feld Content
							
							// hier sollte von get-data aus vorher überprüft werden ob dieses feld überhaupt angezeigt werden soll($ShowSliderInputID ?)
													
							if(@$formvalue=='text-f'){$fieldtype="nf"; $i=1; continue;}	
							if(@$fieldtype=="nf" AND $i==1){$formFieldId=$formvalue; $i=2; continue;}	
							if(@$fieldtype=="nf" AND $i==2){$fieldOrder=$formvalue; $i=3; continue;}	
							if (@$fieldtype=="nf" AND $i==3) {
							
							//$getEntries = $wpdb->get_var( "SELECT Short_Text FROM $tablenameentries WHERE pid='$id' AND f_input_id = '$formFieldId'");
							
							
																					// Prüfen ob das Feld im Slider angezeigt werden soll
							//if(array_search($formFieldId, @$ShowSliderInputID)){$checked='checked';}
							//else{$checked='';}
							
							
							
							$getEntries = $wpdb->get_var( $wpdb->prepare( 
							"
								SELECT Short_Text
								FROM $tablenameEntries 
								WHERE pid = %d and f_input_id = %d
							", 
							$realId,$formFieldId
							) );
							
								if(!empty($getEntries)){
								echo "<p style='margin:0px;padding: 20px 20px 0px 20px;'><b><u>$formvalue:</u></b><br/>";
								echo "$getEntries</p>";
								}
								
							/*
							if($ForwardToURL==1 AND $cg_Use_as_URL==1){
								
							// Prüfen ob das Feld genutzt werden soll als URL
							@$cg_Use_as_URL_id = $wpdb->get_var("SELECT id FROM $tablename_f_input WHERE id='$formFieldId' and Use_as_URL='1'");	

							
									if(@$cg_Use_as_URL_id==$formFieldId){
									echo "<input type='hidden' id='cg_img_url$realId' class='cg_img_url' value='$getEntries'>";	
									}
									
							}	*/							
								
								
							$fieldtype='';
							
							$i=0;
							
							}
							
							if(@$formvalue=='email-f'){@$fieldtype="ef";  $i=1; continue;}	
							if(@$fieldtype=="ef" AND $i==1){@$formFieldId=@$formvalue; $i=2; continue;}	
							if(@$fieldtype=="ef" AND $i==2){@$fieldOrder=@$formvalue; $i=3; continue;}	
							if (@$fieldtype=='ef' AND $i==3) {
							
							//$getEntries = $wpdb->get_var( "SELECT Short_Text FROM $tablenameentries WHERE pid='$id' AND f_input_id = '$formFieldId'");
							
							$getEntries = $wpdb->get_var( $wpdb->prepare( 
							"
								SELECT Short_Text
								FROM $tablenameEntries 
								WHERE pid = %d and f_input_id = %d
							", 
							$realId,$formFieldId
							) );
							
								if(!empty($getEntries)){
								echo "<p style='margin:0px;padding: 20px 20px 0px 20px;'><b><u>$formvalue:</u></b><br/>";
								echo "$getEntries</p>";
								}
							
							$fieldtype='';
							
							$i=0;						
							
							}
							
							if($formvalue=='comment-f'){$fieldtype="kf"; $i=1; continue;}	
							if($fieldtype=="kf" AND $i==1){$formFieldId=$formvalue; $i=2; continue;}	
							if($fieldtype=="kf" AND $i==2){$fieldOrder=$formvalue; $i=3; continue;}	
							if ($fieldtype=='kf' AND $i==3) {
							
							//$getEntries = $wpdb->get_var( "SELECT Long_Text FROM $tablenameentries WHERE pid='$id' AND f_input_id = '$formFieldId'");
							
							$getEntries = $wpdb->get_var( $wpdb->prepare( 
							"
								SELECT Long_Text
								FROM $tablenameEntries 
								WHERE pid = %d and f_input_id = %d
							", 
							$realId,$formFieldId
							) );
							
							

							
								
								if(!empty($getEntries)){
								$getEntries1 = html_entity_decode(stripslashes($getEntries));	
									
								echo "<p style='margin:0px;padding: 20px 20px 0px 20px;'><b><u>$formvalue:</u></b><br/>";
								echo "$getEntries1</p>";
								}
							
							$fieldtype='';
							
							$i=0;
								
							}

													
						}
					
				
			
		echo "</div>";	
		
		}	

				}

// Slider Inhalt versteckt anzeigen --- ENDE



if(@$Field1IdGalleryView and @$Field1IdGalleryView!=0){
	
	
	@$cgFormFieldRow = $wpdb->get_row( "SELECT * FROM $tablenameEntries WHERE f_input_id='$Field1IdGalleryView' and pid='$realId' ");
		if(@$inputFieldContentID=='text-f' or @$inputFieldContentID=='email-f'){
	@$cgFormFieldContent = $cgFormFieldRow->Short_Text;	
	}
	if(@$inputFieldContentID=='comment-f'){
	@$cgFormFieldContent = $cgFormFieldRow->Long_Text;	
	}
	
	
		// Falls kein Content vorhanden ist, dann soll auch der Div nicht angezeigt werden.
		if(@$cgFormFieldContent  && ($RowViewBorderRadius<=5) ){
			
			// Wenn Forward out of gallery aktiviert ist dann wird das Feld ohne cg_image class angezeigt
			if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND $ForwardFrom==2){
				
				if($ForwardType==2){$cg_gallery_contest_target = "target='_blank'";}
				else{$cg_gallery_contest_target='';}
				
				//hier mit PHP überprüfen ob Zeichen enthalten sind
				if(strstr($cg_img_url, 'http')){
					$cg_img_url = $cg_img_url ;
				}				
				else{
				
				$cg_img_url = "http://".$cg_img_url;	
					
				}
				
				echo "<a href='$cg_img_url' $cg_gallery_contest_target title='Go to $cg_img_url' >";		
				echo "<div style='cursor:pointer !important;' data-cg_image_id='$realId' id='cg_Field1IdGalleryView$r' >";
				echo "<div>";
				echo @$cgFormFieldContent;
				//echo $uploads."/".$Timestamp.$NamePic.$ImgType;  
				echo "</div>";
				echo "</div>";
				echo "</a>";
			
			
			}
			
			else{
				
				echo "<div data-cg_image_id='$realId' class='cg_image$r' id='cg_Field1IdGalleryView$r' >";
				echo "<div>";
				echo @$cgFormFieldContent;
				//echo $uploads."/".$Timestamp.$NamePic.$ImgType;
				echo "</div>";
				echo "</div>";
				
				
			}
			
			
		}
	
	
}




if($AllowRating==1 or $AllowRating==2 or $AllowComments==1 or ($RowViewBorderRadius>5) && $cgFormFieldContent){
	
	// Wenn Forward out of gallery aktiviert ist dann wird das Feld ohne cg_image class angezeigt
	if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND ($ForwardFrom==2 OR $ForwardFrom==3)){
	
	$cg_hide_class = "";	
	$cg_hide_cursor = "cursor:default;";	
	//$cg_star_image_cursor = "cursor:default;";	
		
	}
	
	else{
		
	$cg_hide_class = "class='cg_image$r'";		
	$cg_hide_cursor = "";
		
	}
		
	echo "<div style='$cg_hide_cursor' data-cg_image_id='$realId' $cg_hide_class id='cg_hide$r' >";
//		echo "<a onClick='document.getElementById(\"cg-img-$id\").click()' >";//<img src='$urlTransparentPic' style='cursor: pointer;position:absolute;z-index:20;width:$WidthThumbPx;height:$HeightThumbPx;'>";
//		echo "</a>";


	if(($RowViewBorderRadius>5) && $cgFormFieldContent){
	
	echo "<div class='cg_info_depend_on_radius' style='display:block !important;line-height:18px;vertical-align:top;color:white;padding-left:4px;position:relative !important;margin-bottom:5px;padding-right:4px;'>";
	
	echo $cgFormFieldContent;
	
	echo "</div>";
	

	}




	if($AllowComments==1){
	
		echo "<div class='cg_info_comment_gallery_div'>";
			echo "<div class='cg_info_comment_gallery_div_child'>";
			//echo "<input type='hidden' class='countCommentsQuantity' value='".@$countC."'>";

		//echo "<div style='display:table  !important;color: #fff;font-size:18px;margin-left:auto; margin-right:5px;clear: both;height: 18px;line-height: 18px;' id='rating_cgc-$realId'> <b>Comments ($countC)</b></div>";
			if($CommentsOutGallery==1){
				
				
		//echo "<div style='display:table !important;color: #fff;font-size:18px;margin-right:auto; margin-left:5px;clear: both;height: 18px;line-height: 18px;$underlineComments' id='rating_cgc-$realId'> <b>$language_Comments ($countC)</b></div>";
		echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;' ><img id='cg_pngCommentsIcon$realId' src='$pngCommentsIcon'  style='float:left;cursor:pointer;'/>";
		echo "<input type='hidden' class='countCommentsQuantity' value='".@$countC."'></div>";
		 echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' class='comments_cg_slider$realId'><b>&nbsp;(".@$countC.")</b></div>";	
				}
				
			else{
				
				
		//echo "<div style='display:table !important;color: #fff;font-size:18px;margin-right:auto; margin-left:5px;clear: both;height: 18px;line-height: 18px;$underlineComments' id='rating_cgc-$realId'> <b>$language_Comments ($countC)</b></div>";
		echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;' ><img src='$pngCommentsIcon'  style='float:left;cursor:default;'/>";
		echo "<input type='hidden' class='countCommentsQuantity' value='".@$countC."'></div>";
		 echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' class='comments_cg_slider$realId'><b>&nbsp;(".@$countC.")</b></div>";
				
				
				}
				
	

	echo "</div>";	
echo "</div>";	

//echo "<div class='cg_empty_div'></div>";
//echo "<br/>";

	}
	
		//echo "<div style='padding-top:2px;display:table;margin-right:auto; margin-left:5px;' >src='$starTest1'   <b>$language_Comments ($countC)</b></div>";
	
	// Bestimmen ob aus der Gallerie heraus gevotet werden darf
	
	if($RatingOutGallery==1){	
	
	$idRatingStar = "cg_rate_star$realId";	
	$ratingStarCursorStyle = "cursor:pointer;";
	
	}
	else{
		
	$idRatingStar = "";
	$ratingStarCursorStyle = "cursor:default;";
		
	}
	
	
							if($AllowRating==1 and $HideUntilVote!=1){
									  echo "<input type='hidden' class='cg_check_voted' value='2' id='cg_check_voted$realId'>";
									  	  //echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
									  	  echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";	  
											echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
										  
			
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest1'  style='float:left;$ratingStarCursorStyle' alt='1' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest2'  style='float:left;$ratingStarCursorStyle' alt='2' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest3'  style='float:left;$ratingStarCursorStyle' alt='3' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest4'  style='float:left;$ratingStarCursorStyle' alt='4' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest5'  style='float:left;$ratingStarCursorStyle' alt='5' id='$idRatingStar'></div>";
	
						  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countR.")</b></div>";										  
									  echo "</div>";
									  echo "</div>";

								}
								
						if($AllowRating==2 and $HideUntilVote!=1){
									  echo "<input type='hidden' class='cg_check_voted' value='2' id='cg_check_voted$realId'>";
									  	  //echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
									  	  echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";
										  echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
										  
										  
			
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starCountS'  style='float:left;$ratingStarCursorStyle' alt='6' id='$idRatingStar'></div>";
	
						  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countS.")</b></div>";										  
									  echo "</div>";
									  echo "</div>";

								}
								
							///HideUntilVote Variante
							if($AllowRating==1 and $HideUntilVote==1){
									 
							//echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
							echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";
								echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
							//echo "test";
							if($countR>=1){
					
							  echo "<input type='hidden' class='cg_check_voted' value='1' id='cg_check_voted$realId'>"; 
								
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest1'  style='float:left;$ratingStarCursorStyle' alt='1' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest2'  style='float:left;$ratingStarCursorStyle' alt='2' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest3'  style='float:left;$ratingStarCursorStyle' alt='3' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest4'  style='float:left;$ratingStarCursorStyle' alt='4' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest5'  style='float:left;$ratingStarCursorStyle' alt='5' id='$idRatingStar'></div>";	

							  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countRhideUntilVote.")</b></div>";	
								
							}					
							
							else{
							
							echo "<input type='hidden' class='cg_check_voted' value='0' id='cg_check_voted$realId'>";							
								
							echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;cursor:pointer;' id='rating_cg-".@$realId."' class='cg_hide_until_vote_rate".@$realId."' >";
							//echo "$votedFirstContent"
							echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='1' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='2' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='3' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='4' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='5' id='$idRatingStar'></div>";
							echo "</div>";
							}
							
						
								echo "</div>";
							echo "</div>";

							}
							
							if($AllowRating==2 and $HideUntilVote==1){
									 
							//echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
							echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";
								echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
							//echo "test";
							if($countS>=1){
								
							  echo "<input type='hidden' class='cg_check_voted' value='1' id='cg_check_voted$realId'>"; 
								
						      echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starCountS'  style='float:left;$ratingStarCursorStyle' alt='6' id='$idRatingStar'></div>";

							  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countShideUntilVote.")</b></div>";	
								
							}						
							
							else{
							
							echo "<input type='hidden' class='cg_check_voted' value='0' id='cg_check_voted$realId'>";							
								
							echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;cursor:pointer;' id='rating_cg-".@$realId."' class='cg_hide_until_vote_rate".@$realId."' >";
							echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='6' id='$idRatingStar'></div>";
							//echo "$votedFirstContent";
							echo "</div>";
							}
							
							
								echo "</div>";
							echo "</div>";

							}
							
							
							if($FbLike==1 and $FbLikeGallery==1){
							
									echo "<div style='$showFbLikeInGalleryStyle;$showFbLikeInGalleryStyleVoteOrNot;height:20px;line-height:18px;vertical-align:top;margin-top:5px;margin-bottom:4px;'>";
									
									echo "<div style='border:none;margin: 0;padding 0;overflow:hidden;height:40px;' id='cg_fb_like_div".$realId."'>";
									echo "<iframe src='".$urlForFacebook."'  style='border: none;width:180px;height:40px;overflow:hidden;' scrolling='no' 
									class='cg_fb_like_iframe_gallery_order".$r."' id='cg_fb_like_iframe_gallery".$realId."'  name='cg_fb_like_iframe_gallery".$realId."'></iframe>";
									echo "</div>";
									
									
									echo "</div>";			
								
							}

		//include("stars-thumb-look.php");
		


	echo "</div>";
				}

echo "</div>";	



		$i++;  	  
			  
			  }
	   
	   	// 2. Ausgabe der Bilder nach dem die Höhe ermittelt wurde --- ENDE
	   
	  
		
		

		}
		
		
		
		// Same Height Look
		
		
		if($look=='height'){
		
	echo "<div id='mainCGallery' style='width:700px'>";
	
	//echo "works";
	
	//$getSQL = new sql_selects($tablename,$galeryID,$order,$start,$step,$pictureID);
	//$picsSQL = $getSQL->pics_sql();
			
  // Neue Höhe 
  $newHeight = 0;
  
  
  // Breite des divs in dem sich die Galerie befindet
  //$widthmain = $widthMainCGallery-2;
  $widthmain = 700;
    

   // die einzelnen neu ermittelten Breiten die durch die vorgegebene Höhe entstehen werden gesammelt
  $widthArray = array();
  
   // die einzelnen Höhen sollen gesammelt werden. Bei Runter- und Hochskaliertung, ist es eine notwendige Angabe im Div 
  $heightArray = array();
  
  // Die Breite der Inhaltsboxen wird ermittelt
  $widthDivArray = array();
  
  // Anzahl der Durchläufe muss gezählt werden um den letzten Durchlauf zu ermitteln
  $lastLoopProcess = count ( $picsSQL );
  
  // Anzahl der Durchläufe muss gezählt werden um den letzten Durchlauf zu ermitteln
  $last = array();
    
  // Summe der einzelnen Breiten
  $aggregateWidth = 0;
  
  // Gesamtzahl der verarbeiteten Bilder
  $countProcessedPics = 0;
  
  // Summer der Gesamtlänge, um die alle Bilder, die in die Gesamtbreite reinpassen, insgesamt reduziert werden können. 
  // Mehr als 46% kann von einem Bild nicht abgezogen werden ( zuerst 10% Höhe, danach 20% Links, 20% Rechts >>>  46% prozent insgesamt als Reduzierung bei einem Bild möglich )
  $aggregateAcceptableReducedSize = 0;
  
  // Orientierungsvariable bei Durcharbeiten des großen Arrays   
  $r = 0;
  
	// Feststellen der Quelle des Original Images		
	//$uploadFolder = wp_upload_dir();
  

	   
	     // 1. Die neue Höhe jedes einzelnen Bildes muss ermittelt werden. Diese wird in einem Array gesammelt. ---- ENDE
		 
		 // 2. Ausgabe der Bilder nach dem die Höhe ermittelt wurde
		 
		    $h = 0;
			$i = 0;
			$aggregateWidth = 0;
			
			// Orientierung zur Vergabe von Klassen bei cg_image und cg_hide
			$r = 0;
			
			foreach($picsSQL as $value){
			
			$r++;
			
			$id = $value->id;
			$Timestamp = $value->Timestamp.'_';
			$NamePic = $value->NamePic;
			$ImgType = $value->ImgType;
			$rating = $value->Rating;
			$countR = $value->CountR;
			$countC = $value->CountC;
			$countS = $value->CountS;
			$widthOriginalImg = $value->Width;
			$heightOriginalImg = $value->Height;
			$WpUpload = $value->WpUpload;
			
			$realId = $id;
			
			// Verschlüsselung der ID
			$id = ($id+8)*2+100000;

					// 4 Varianten hier möglich wenn andere Einstellungen getroffen wurden als standard					
					
					// Prüfen für Rating mit einem Stern und nicht eingeloggtem User
					if($ShowOnlyUsersVotes==1 && $CheckLogin!=1 && $AllowRating==2 || $HideUntilVote==1 && $CheckLogin!=1 && $AllowRating==2){
						
						//Achtung! Reihenfolge wichtig! $countShideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
						if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
							$countShideUntilVote = $countS;
						}

							$countS = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT COUNT(*) AS NumberOfRows
								FROM $tablenameIP 
								WHERE GalleryID = %d and IP = %s and RatingS = %d and pid = %d
							", 
							$galeryID,$userIP,1,$realId
							) );
						
						if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
							$countShideUntilVote = $countS;
						}
							
					
					}		
					
					// Prüfen für Rating mit einem Stern und eingeloggtem User
					if($ShowOnlyUsersVotes==1 && $CheckLogin==1 && $AllowRating==2 || $HideUntilVote==1 && $CheckLogin==1 && $AllowRating==2){
						
						if(is_user_logged_in()){
							
							//Achtung! Reihenfolge wichtig! $countShideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
							if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
								$countShideUntilVote = $countS;
							}
							
							$countS = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT COUNT(*) AS NumberOfRows
								FROM $tablenameIP
								WHERE GalleryID = %d and WpUserId = %s and RatingS = %d and pid = %d
							", 
							$galeryID,get_current_user_id(),1,$realId
							) );
							
							if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
								$countShideUntilVote = $countS;
							}
						}
						
						// Extra Condition für HideUntilVote
						if($HideUntilVote==1 && !is_user_logged_in()){
							$countS = 0;
						}
						
					}
					
					// Prüfen für Rating mit fünf Sternen und nicht eingeloggtem User. countR und rating ist hier notwendig zu wissen
					if($ShowOnlyUsersVotes==1 && $CheckLogin!=1 && $AllowRating==1 || $HideUntilVote==1 && $CheckLogin!=1 && $AllowRating==1){
						
						//Achtung! Reihenfolge wichtig! $countRhideUntilVote und $ratingHideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
						if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
							$countRhideUntilVote = $countR;
							$ratingHideUntilVote = $rating;
						}
						
						$countR = $wpdb->get_var( $wpdb->prepare(
						"
							SELECT COUNT(*) AS NumberOfRows
							FROM $tablenameIP 
							WHERE GalleryID = %d and IP = %s and Rating >= %d and pid = %d
						", 
						$galeryID,$userIP,1,$realId
						) );

						
						$rating = $wpdb->get_var( $wpdb->prepare(
						"
							SELECT SUM(Rating)
							FROM $tablenameIP 
							WHERE GalleryID = %d and IP = %s and Rating >= %d and pid = %d
						", 
						$galeryID,$userIP,1,$realId
						) );
						
						if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
							$countRhideUntilVote = $countR;
							$ratingHideUntilVote = $rating;
						}
					
					}

					// Prüfen für Rating mit fünf Sternen und nicht eingeloggtem User. countR und rating ist hier notwendig zu wissen --- ENDE
					
					// Prüfen für Rating mit fünf Sternen und eingeloggtem User. countR und rating ist hier notwendig zu wissen
					
					if($ShowOnlyUsersVotes==1 && $CheckLogin==1 && $AllowRating==1 || $HideUntilVote==1 && $CheckLogin==1 && $AllowRating==1){
						
						if(is_user_logged_in()){
							
							//Achtung! Reihenfolge wichtig! $countRhideUntilVote und $ratingHideUntilVote muss in diesem Fall den Gesamtwert zugewiesen bekommen
							if($HideUntilVote==1 && $ShowOnlyUsersVotes!=1){
								$countRhideUntilVote = $countR;
								$ratingHideUntilVote = $rating;
							}
							
							$countR = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT COUNT(*) AS NumberOfRows
								FROM $tablenameIP
								WHERE GalleryID = %d and WpUserId = %s and Rating >= %d and pid = %d
							", 
							$galeryID,get_current_user_id(),1,$realId
							) );
							
							$rating = $wpdb->get_var( $wpdb->prepare(
							"
								SELECT SUM(Rating)
								FROM $tablenameIP
								WHERE GalleryID = %d and WpUserId = %s and Rating >= %d and pid = %d
							", 
							$galeryID,get_current_user_id(),1,$realId
							) );
							
							if($HideUntilVote==1 && $ShowOnlyUsersVotes==1){
								$countRhideUntilVote = $countR;
								$ratingHideUntilVote = $rating;
							}
						
						}
						
						// Extra Condition für HideUntilVote
						if($HideUntilVote==1 && !is_user_logged_in()){
							$countR = 0;
							$rating = 0;						
						}
					
					}					

					// Prüfen für Rating mit fünf Sternen und eingeloggtem User. countR und rating ist hier notwendig zu wissen --- ENDE
				
			

			// Ermitteln Anzahl der Bewertungen
					
			// Ermitteln wie die Stars angezeigt werden sollen beim hovern
			
			if($AllowRating==1){
				if($HideUntilVote==1){
					
					if ($countRhideUntilVote!=0){
						$averageStars = $ratingHideUntilVote/$countRhideUntilVote;
						$averageStarsRounded = round($averageStars,0);
						//echo "<br>averageStars: $averageStars<br>";			
					}
					else{$countRhideUntilVote=0; $averageStarsRounded = 0;}
					 
					if($averageStarsRounded>=1){$starTest1 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest1 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=2){$starTest2 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest2 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=3){$starTest3 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest3 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=4){$starTest4 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest4 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=5){$starTest5 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest5 = $iconsURL.'/star_off_48_reduced.png';}
				
				}
				else{
					
					if ($countR!=0){
						$averageStars = $rating/$countR;
						$averageStarsRounded = round($averageStars,0);
						//echo "<br>averageStars: $averageStars<br>";					
					}
					else{$countR=0; $averageStarsRounded = 0;}
					 
					if($averageStarsRounded>=1){$starTest1 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest1 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=2){$starTest2 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest2 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=3){$starTest3 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest3 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=4){$starTest4 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest4 = $iconsURL.'/star_off_48_reduced.png';}
					if($averageStarsRounded>=5){$starTest5 = $iconsURL.'/star_48_reduced.png';}
					else{$starTest5 = $iconsURL.'/star_off_48_reduced.png';}
					
				}
			}
			
			if($AllowRating==2){
				if($HideUntilVote==1){
					if($countShideUntilVote>0){$starCountS= $iconsURL.'/star_48_reduced.png';}
					else{$starCountS = $iconsURL.'/star_off_48_reduced.png';$countS=0;}
				}
				else{
					if($countS>0){$starCountS= $iconsURL.'/star_48_reduced.png';}
					else{$starCountS = $iconsURL.'/star_off_48_reduced.png';$countS=0;}
				}
			}

		

		
			  
			$cg_check_1600_width = "$cg_upload_dir/$Timestamp$NamePic-1600width.$ImgType";
			$cg_check_1920_width = "$cg_upload_dir/$Timestamp$NamePic-1920width.$ImgType";
			
												
			if(!file_exists($cg_check_1600_width)){$cg_check_1600_width=0;}
			else{$cg_check_1600_width="$uploads/$Timestamp$NamePic-1600width.$ImgType";}
			if(!file_exists($cg_check_1920_width)){$cg_check_1920_width=0;}
			else{$cg_check_1920_width="$uploads/$Timestamp$NamePic-1920width.$ImgType";}
			
			if(file_exists("$cg_upload_dir/".$Timestamp."".$NamePic."413.html")){
				echo '<input type="hidden" id="cg_fb_reload'.$realId.'" value="413">';
			    $urlForFacebook = "$uploads/".$Timestamp.$NamePic."413.html";
			}
			else{
				echo '<input type="hidden" id="cg_fb_reload'.$realId.'" value="1">';	
				$urlForFacebook = "$uploads/".$Timestamp.$NamePic.".html";;		
			}
			
			if($WpUpload!=0){
				
				$sourceOriginalImgUrl = $wpdb->get_var("SELECT guid FROM $table_posts WHERE ID = '$WpUpload'");
				
			}
			//Rückwärtskompatiblität zu hochgeladenen Bildern aus versionen vor 5.00
			else{
				
				$sourceOriginalImgBase = "$cg_upload_dir/".$Timestamp.$NamePic.'.'.$ImgType; // Pfad zum Bilderordner angeben
				list($widthOriginalImg, $heightOriginalImg) = getimagesize($sourceOriginalImgBase); // Breite und Höhe von original Image				
				$sourceOriginalImgUrl = $uploads."/".$Timestamp.$NamePic.".".$ImgType;
			}


			
	  
					// cg_hide Klasse ist die Div Box zum Hovern 
				echo <<<HEREDOC
		<div style='float:left;display:none;' class='cg_show' id='cg_show$realId'>

		<input type="hidden" class="realId" value="$realId">
		<input type="hidden" id="cg_img_order$realId" value="$r">
		<input type="hidden" class="averageStarsRounded" id="averageStarsRounded$realId" value="$averageStarsRounded">
								<input type="hidden" class="DistancePics" value="$DistancePics">
				<input type="hidden" class="DistancePicsV" value="$DistancePicsV">

		<input type="hidden" id="widthOriginalImg$realId" class="widthOriginalImg" value="$widthOriginalImg">
		<input type="hidden" id="heightOriginalImg$realId" class="heightOriginalImg" value="$heightOriginalImg">		
				<input type="hidden" class="srcOriginalImg" value="$sourceOriginalImgUrl">
		<input type="hidden" class="src1920width" value="$cg_check_1920_width">
		<input type="hidden" class="src1600width" value="$cg_check_1600_width">
		<input type="hidden" class="src1024width" value="$uploads/$Timestamp$NamePic-1024width.$ImgType">
		<input type="hidden" class="src624width" value="$uploads/$Timestamp$NamePic-624width.$ImgType">
		<input type="hidden" class="src300width" value="$uploads/$Timestamp$NamePic-300width.$ImgType">
		<input type="hidden" class="urlForFacebook" id="urlForFacebook$realId" value="$urlForFacebook">


HEREDOC;

			if($HideUntilVote==1){
						echo "<input type='hidden' id='countRatingQuantity$realId' value='".@$countRhideUntilVote."'>";
						echo "<input type='hidden' id='countRatingSQuantity$realId' value='".@$countShideUntilVote."'>";
			}
			else{
						echo "<input type='hidden' id='countRatingQuantity$realId' value='".@$countR."'>";
						echo "<input type='hidden' id='countRatingSQuantity$realId' value='".@$countS."'>";
			}


echo "<input type='hidden' id='countCommentsQuantity$realId' value='".@$countC."'>";

// Das wird von PHP erzeugt und bleibt
if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND ($ForwardFrom==2 or $ForwardFrom==1)){
						// URL ermitteln zu der wetiergeleitet werden soll
						@$cg_img_url = $wpdb->get_var("SELECT Short_Text FROM $tablenameEntries, $tablename_f_input WHERE $tablenameEntries.f_input_id = $tablename_f_input.id
						AND $tablename_f_input.Use_as_URL = '1' AND  $tablenameEntries.pid='$realId'");
						
	
echo "<input type='hidden' class='cg_img_url' id='cg_img_url$realId' value='$cg_img_url'>";	
}

echo "<div class='cg_append' id='cg_append$realId'>";
//echo "<div class='cover' id='cover$realId'></div>";



// Das wird von PHP erzeugt und von Javascript in show-jquery-gallery abgeändert. Show_gallery_jquery_image_slider bezieht sich auf das abgeändert durch Javascript.
//if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND ($ForwardFrom==2 or $ForwardFrom==1)){	

	//echo "<input type='hidden' class='cg_img_url' value='$cg_img_url'>"; 
/*	
echo "<a href='$cg_img_url' title='Go to $cg_img_url' >";		

//	<img alt='$commentText' src='$uploads/$Timestamp$imageThumb' style='cursor: pointer;$padding;position: absolute !important;max-width:none !important;' class='cg_image' width='$WidthThumbPic' >

	echo <<<HEREDOC
	
		
		<img src='$uploads/$Timestamp$imageThumb'  style='position:absolute;left: $paddinLeftRight;right:  $paddinLeftRight ;max-width:none !important;' width='$widthPic1' height='$heightPic1' >
		
		
		</a>
HEREDOC;
*/
	
	
	
//}

//else{
		if($FullSizeImageOutGallery==1){

		
	//		$hregCGimage = 	"<a href='".$uploads."/".$Timestamp.$NamePic.".".$ImgType."' >";
			$hregCGimageValue = "$uploads/$Timestamp$NamePic.$ImgType";		
//			if($FullSizeImageOutGalleryNewTab==1){$hregCGimageTargetBlank = "target='_blank'";}	
	//		else{$hregCGimageTargetBlank = "";}
			
		}
		else{			
			
//			$hregCGimage = "<a href='$siteURL&picture_id=$id&1=".$getLook."&2=".$getOrder."&3=".$getStart."#cg-begin' $hregCGimageTargetBlank>";
			$hregCGimageValue = "$siteURL&picture_id=$id&1=".$getLook."&2=".$getOrder."&3=".$getStart."#cg-begin";	
		
		}
/*	
echo $hregCGimage;	

//	<img alt='$commentText' src='$uploads/$Timestamp$imageThumb' style='cursor: pointer;$padding;position: absolute !important;max-width:none !important;' class='cg_image' width='$WidthThumbPic' >

	echo <<<HEREDOC
	
		
		<img src='$uploads/$Timestamp$imageThumb'  style='position:absolute;left: $paddinLeftRight;right:  $paddinLeftRight ;max-width:none !important;' width='$widthPic1' height='$heightPic1' data-cg_image_id='$realId' class='cg_image$r'>
		
		
		</a>
HEREDOC;*/

//}
echo "</div>";



echo "<input type='hidden'  class='hrefCGpic' value='$hregCGimageValue' >";

// Slider Inhalt versteckt anzeigen

if($AllowGalleryScript==1){
//	print_r($selectFormInput);
		if ($selectFormInput == true) {
		
					echo "<div class='cg_user_input' style='display:none !important;margin:0px;padding:0px;'>";
					//$countFormFields = 0;
					foreach($selectContentFieldArray as $key => $formvalue){
					
							
							// 1. Feld Typ
							// 2. ID des Feldes in F_INPUT
							// 3. Feld Reihenfolge
							// 4. Feld Content
							
							// hier sollte von get-data aus vorher überprüft werden ob dieses feld überhaupt angezeigt werden soll($ShowSliderInputID ?)
													
							if(@$formvalue=='text-f'){$fieldtype="nf"; $i=1; continue;}	
							if(@$fieldtype=="nf" AND $i==1){$formFieldId=$formvalue; $i=2; continue;}	
							if(@$fieldtype=="nf" AND $i==2){$fieldOrder=$formvalue; $i=3; continue;}	
							if (@$fieldtype=="nf" AND $i==3) {
							
							//$getEntries = $wpdb->get_var( "SELECT Short_Text FROM $tablenameentries WHERE pid='$id' AND f_input_id = '$formFieldId'");
							
							
																					// Prüfen ob das Feld im Slider angezeigt werden soll
							//if(array_search($formFieldId, @$ShowSliderInputID)){$checked='checked';}
							//else{$checked='';}
							
							
							
							$getEntries = $wpdb->get_var( $wpdb->prepare( 
							"
								SELECT Short_Text
								FROM $tablenameEntries 
								WHERE pid = %d and f_input_id = %d
							", 
							$realId,$formFieldId
							) );
							
								if(!empty($getEntries)){
								echo "<p style='margin:0px;padding: 20px 20px 0px 20px;'><b><u>$formvalue:</u></b><br/>";
								echo "$getEntries</p>";
								}
								
							
							/*							
							if($ForwardToURL==1 AND $cg_Use_as_URL==1){
								
							// Prüfen ob das Feld genutzt werden soll als URL
							@$cg_Use_as_URL_id = $wpdb->get_var("SELECT id FROM $tablename_f_input WHERE id='$formFieldId' and Use_as_URL='1'");	

							
									if(@$cg_Use_as_URL_id==$formFieldId){
									echo "<input type='hidden' id='cg_img_url$realId' class='cg_img_url' value='$getEntries'>";	
									}
									
							}*/						
								
								
							$fieldtype='';
							
							$i=0;
							
							}
							
							if(@$formvalue=='email-f'){@$fieldtype="ef";  @$i=1; continue;}	
							if(@$fieldtype=="ef" AND @$i==1){@$formFieldId=@$formvalue; @$i=2; continue;}	
							if(@$fieldtype=="ef" AND @$i==2){@$fieldOrder=@$formvalue; @$i=3; continue;}	
							if (@$fieldtype=='ef' AND @$i==3) {
							
							//$getEntries = $wpdb->get_var( "SELECT Short_Text FROM $tablenameentries WHERE pid='$id' AND f_input_id = '$formFieldId'");
							
							$getEntries = $wpdb->get_var( $wpdb->prepare( 
							"
								SELECT Short_Text
								FROM $tablenameEntries 
								WHERE pid = %d and f_input_id = %d
							", 
							$realId,$formFieldId
							) );
							
								if(!empty($getEntries)){
								echo "<p style='margin:0px;padding: 20px 20px 0px 20px;'><b><u>$formvalue:</u></b><br/>";
								echo "$getEntries</p>";
								}
							
							$fieldtype='';
							
							$i=0;						
							
							}
							
							if($formvalue=='comment-f'){$fieldtype="kf"; $i=1; continue;}	
							if($fieldtype=="kf" AND $i==1){$formFieldId=$formvalue; $i=2; continue;}	
							if($fieldtype=="kf" AND $i==2){$fieldOrder=$formvalue; $i=3; continue;}	
							if ($fieldtype=='kf' AND $i==3) {
							
							//$getEntries = $wpdb->get_var( "SELECT Long_Text FROM $tablenameentries WHERE pid='$id' AND f_input_id = '$formFieldId'");
							
							$getEntries = $wpdb->get_var( $wpdb->prepare( 
							"
								SELECT Long_Text
								FROM $tablenameEntries 
								WHERE pid = %d and f_input_id = %d
							", 
							$realId,$formFieldId
							) );
							
							

							
								
								if(!empty($getEntries)){
								$getEntries1 = html_entity_decode(stripslashes($getEntries));	
									
								echo "<p style='margin:0px;padding: 20px 20px 0px 20px;'><b><u>$formvalue:</u></b><br/>";
								echo "$getEntries1</p>";
								}
							
							$fieldtype='';
							
							$i=0;
								
							}

													
						}
					
				
			
		echo "</div>";	
		
		}	

				}


// Slider Inhalt versteckt anzeigen --- ENDE



if(@$Field1IdGalleryView and @$Field1IdGalleryView!=0){
	
	
	@$cgFormFieldRow = $wpdb->get_row( "SELECT * FROM $tablenameEntries WHERE f_input_id='$Field1IdGalleryView' and pid='$realId' ");
		if(@$inputFieldContentID=='text-f' or @$inputFieldContentID=='email-f'){
	@$cgFormFieldContent = $cgFormFieldRow->Short_Text;	
	}
	if(@$inputFieldContentID=='comment-f'){
	@$cgFormFieldContent = $cgFormFieldRow->Long_Text;	
	}
	
	
		// Falls kein Content vorhanden ist, dann soll auch der Div nicht angezeigt werden.
		if(@$cgFormFieldContent  && ($HeightViewBorderRadius<=5) ){
			
			// Wenn Forward out of gallery aktiviert ist dann wird das Feld ohne cg_image class angezeigt
			if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND ($ForwardFrom==2 OR $ForwardFrom==3)){
				
				if($ForwardType==2){$cg_gallery_contest_target = "target='_blank'";}
				else{$cg_gallery_contest_target='';}
				
				//hier mit PHP überprüfen ob Zeichen enthalten sind
				if(strstr($cg_img_url, 'http')){
					$cg_img_url = $cg_img_url;
				}			
				else{
					
				$cg_img_url = "http://".$cg_img_url;	
					
				}
				
				echo "<a href='$cg_img_url' $cg_gallery_contest_target title='Go to $cg_img_url' >";		
				echo "<div style='cursor:pointer !important;' data-cg_image_id='$realId' id='cg_Field1IdGalleryView$r' >";
				echo "<div>";
				echo @$cgFormFieldContent;
				//echo $uploads."/".$Timestamp.$NamePic.$ImgType;  
				echo "</div>";
				echo "</div>";
				echo "</a>";
			
			
			}
			
			else{
				
				echo "<div data-cg_image_id='$realId' class='cg_image$r' id='cg_Field1IdGalleryView$r' >";
				echo "<div>";
				echo @$cgFormFieldContent;
				//echo $uploads."/".$Timestamp.$NamePic.$ImgType;  
				echo "</div>";
				echo "</div>";
				
				
			}
			
			
		}
	
	
}




if($AllowRating==1 or $AllowRating==2 or $AllowComments==1 or ($HeightViewBorderRadius>5) && $cgFormFieldContent){
	
	// Wenn Forward out of gallery aktiviert ist dann wird das Feld ohne cg_image class angezeigt
	if($ForwardToURL==1 AND $cg_Use_as_URL==1 AND ($ForwardFrom==2 OR $ForwardFrom==3)){
	
	$cg_hide_class = "";	
	$cg_hide_cursor = "cursor:default;";	
	//$cg_star_image_cursor = "cursor:default;";	
		
	}
	
	else{
		
	$cg_hide_class = "class='cg_image$r'";		
	$cg_hide_cursor = "";
		
	}
		
	echo "<div style='$cg_hide_cursor' data-cg_image_id='$realId' $cg_hide_class id='cg_hide$r' >";
//		echo "<a onClick='document.getElementById(\"cg-img-$id\").click()' >";//<img src='$urlTransparentPic' style='cursor: pointer;position:absolute;z-index:20;width:$WidthThumbPx;height:$HeightThumbPx;'>";
//		echo "</a>";


	if(($HeightViewBorderRadius>5) && $cgFormFieldContent){
	
	echo "<div class='cg_info_depend_on_radius' style='display:block !important;line-height:18px;vertical-align:top;color:white;padding-left:4px;position:relative !important;margin-bottom:5px;padding-right:4px;'>";
	
	echo $cgFormFieldContent;
	
	echo "</div>";
	

	}


	if($AllowComments==1){
	
		echo "<div class='cg_info_comment_gallery_div'>";
			echo "<div class='cg_info_comment_gallery_div_child'>";
	
			//echo "<input type='hidden' class='countCommentsQuantity' value='".@$countC."'>";

		//echo "<div style='display:table  !important;color: #fff;font-size:18px;margin-left:auto; margin-right:5px;clear: both;height: 18px;line-height: 18px;' id='rating_cgc-$realId'> <b>Comments ($countC)</b></div>";
			if($CommentsOutGallery==1){
				
				
		//echo "<div style='display:table !important;color: #fff;font-size:18px;margin-right:auto; margin-left:5px;clear: both;height: 18px;line-height: 18px;$underlineComments' id='rating_cgc-$realId'> <b>$language_Comments ($countC)</b></div>";
		echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;' ><img id='cg_pngCommentsIcon$realId' src='$pngCommentsIcon'  style='float:left;cursor:pointer;'/>";
		echo "<input type='hidden' class='countCommentsQuantity' value='".@$countC."'></div>";
		 echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' class='comments_cg_slider$realId'><b>&nbsp;(".@$countC.")</b></div>";	
				}
				
			else{
				
				
		//echo "<div style='display:table !important;color: #fff;font-size:18px;margin-right:auto; margin-left:5px;clear: both;height: 18px;line-height: 18px;$underlineComments' id='rating_cgc-$realId'> <b>$language_Comments ($countC)</b></div>";
		echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;' ><img src='$pngCommentsIcon'  style='float:left;cursor:default;'/>";
		echo "<input type='hidden' class='countCommentsQuantity' value='".@$countC."'></div>";
		 echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' class='comments_cg_slider$realId'><b>&nbsp;(".@$countC.")</b></div>";
				
				
				}
				
			echo "</div>";
		echo "</div>";
		//echo "<div class='cg_empty_div'></div>";
		//echo "<br/>";
	
	}
	


//echo '<br style="line-height:20px;display:block;margin: 10px 0;" />';		 
		//echo "<div style='padding-top:2px;display:table;margin-right:auto; margin-left:5px;' >src='$starTest1'   <b>$language_Comments ($countC)</b></div>";
	
	// Bestimmen ob aus der Gallerie heraus gevotet werden darf
	
	if($RatingOutGallery==1){	
	
	$idRatingStar = "cg_rate_star$realId";	
	$ratingStarCursorStyle = "cursor:pointer;";
	
	}
	else{
		
	$idRatingStar = "";
	$ratingStarCursorStyle = "cursor:default;";
		
	}
	
	
							if($AllowRating==1 and $HideUntilVote!=1){
									  echo "<input type='hidden' class='cg_check_voted' value='2' id='cg_check_voted$realId'>";
									  	  //echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
									  	  echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";	  
											echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
										  
			
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest1'  style='float:left;$ratingStarCursorStyle' alt='1' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest2'  style='float:left;$ratingStarCursorStyle' alt='2' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest3'  style='float:left;$ratingStarCursorStyle' alt='3' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest4'  style='float:left;$ratingStarCursorStyle' alt='4' id='$idRatingStar'></div>";
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starTest5'  style='float:left;$ratingStarCursorStyle' alt='5' id='$idRatingStar'></div>";
	
						  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countR.")</b></div>";										  
									  echo "</div>";
									  echo "</div>";

								}
								
						if($AllowRating==2 and $HideUntilVote!=1){
									  echo "<input type='hidden' class='cg_check_voted' value='2' id='cg_check_voted$realId'>";
									  	  //echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
									  	  echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";
										  echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
										  
										  
			
						  echo "<div style='display:inline;float:left;width:17px;height:16px;vertical-align: middle;'><img src='$starCountS'  style='float:left;$ratingStarCursorStyle' alt='6' id='$idRatingStar'></div>";
	
						  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countS.")</b></div>";										  
									  echo "</div>";
									  echo "</div>";

								}
								
							///HideUntilVote Variante
							if($AllowRating==1 and $HideUntilVote==1){
									 
							//echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
							echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";
								echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
							//echo "test";
							if($countR>=1){
					
							  echo "<input type='hidden' class='cg_check_voted' value='1' id='cg_check_voted$realId'>"; 
								
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest1'  style='float:left;$ratingStarCursorStyle' alt='1' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest2'  style='float:left;$ratingStarCursorStyle' alt='2' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest3'  style='float:left;$ratingStarCursorStyle' alt='3' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest4'  style='float:left;$ratingStarCursorStyle' alt='4' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starTest5'  style='float:left;$ratingStarCursorStyle' alt='5' id='$idRatingStar'></div>";	

							  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countRhideUntilVote.")</b></div>";	
								
							}					
							
							else{
							
							echo "<input type='hidden' class='cg_check_voted' value='0' id='cg_check_voted$realId'>";							
								
							echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;cursor:pointer;' id='rating_cg-".@$realId."' class='cg_hide_until_vote_rate".@$realId."' >";
							//echo "$votedFirstContent"
							echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='1' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='2' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='3' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='4' id='$idRatingStar'></div>";
							  echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='5' id='$idRatingStar'></div>";
							echo "</div>";
							}
							
						
								echo "</div>";
							echo "</div>";

							}
							
							if($AllowRating==2 and $HideUntilVote==1){
									 
							//echo "<div style='padding-top:2px;display:table;margin-left:auto; margin-right:5px;'>";
							echo "<div class='cg_gallery_rating_div' id='cg_gallery_rating_div$realId'>";
								echo "<div class='cg_gallery_rating_div_child' id='cg_gallery_rating_div_child$realId'>";
							//echo "test";
							if($countS>=1){
								
							  echo "<input type='hidden' class='cg_check_voted' value='1' id='cg_check_voted$realId'>"; 
								
						      echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$starCountS'  style='float:left;$ratingStarCursorStyle' alt='6' id='$idRatingStar'></div>";

							  echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;' id='rating_cg-".@$realId."'><b>&nbsp;(".@$countShideUntilVote.")</b></div>";	
								
							}						
							
							else{
							
							echo "<input type='hidden' class='cg_check_voted' value='0' id='cg_check_voted$realId'>";							
								
							echo "<div style='display:inline;float:left;font-size:18px;vertical-align: top;line-height: 18px;height: 18px;color:#fff;cursor:pointer;' id='rating_cg-".@$realId."' class='cg_hide_until_vote_rate".@$realId."' >";
							echo "<div style='display:inline;float:left;width:18px;height:18px;vertical-align: middle;'><img src='$iconsURL/star_off_48.png'  style='float:left;$ratingStarCursorStyle' alt='6' id='$idRatingStar'></div>";
							//echo "$votedFirstContent";
							echo "</div>";
							}
							
							
							echo "</div>";
							echo "</div>";

							}
							
							
							if($FbLike==1 and $FbLikeGallery==1){					
	
	//echo "$urlForFacebook<br>";														
									echo "<div style='$showFbLikeInGalleryStyle;$showFbLikeInGalleryStyleVoteOrNot;height:20px;line-height:18px;vertical-align:top;margin-top:5px;margin-bottom:4px;display:block;'>";
									
									echo "<div style='border:none;margin: 0;padding 0;overflow:hidden;height:40px;' id='cg_fb_like_div".$realId."'>";
									echo "<iframe src='".$urlForFacebook."'  style='border: none;width:180px;height:40px;overflow:hidden;' scrolling='no' 
 									class='cg_fb_like_iframe_gallery_order".$r."' id='cg_fb_like_iframe_gallery".$realId."'  name='cg_fb_like_iframe_gallery".$realId."'></iframe>";
									echo "</div>";
									
									
									echo "</div>";			
								
							}
		//include("stars-thumb-look.php");

	echo "</div>";
				}


echo "</div>";


$i++;

			  
			  
			  }
	   
	   	// 2. Ausgabe der Bilder nach dem die Höhe ermittelt wurde --- ENDE
	   
	   
		
		
	


		}		
	
		// Zeige Galerie. Abfrage Bildertabelle. ---END---
		
		/*
		// Gesammelte IDs die durch RandomSort generiert wurden in eine Session speichern		
		if($RandomSort==1){

			$cgRandomOrderAllIdsResult = substr($cgRandomOrderAllIdsResult,0,-1);
			print_r($cgRandomOrderAllIdsResult);
			setcookie("cg_random_sort_cookie", $cgRandomOrderAllIdsResult, time() + (86400 * 30), COOKIEPATH ); // 86400 = 1 day

		}		
		// Gesammelte IDs die durch RandomSort generiert wurden in eine Session speichern --- ENDE */ 



	$nr1 = $start + 1;

	
	echo "<br/>";
	
	// Nur dann anzeigen wenn wenn Anzahl der Bilder größer ist als die eignestellte Anzahl pro Seite
	if($count_pics>$PicsPerSite){
	
	echo "<div class='cg_further_images_container' >"; 
	
	
	//echo "<br>siteURL: $siteURL<br>";
	//echo "<br>Start: $start<br>";
	//echo "<br>step: $step<br>";
	//echo "<br>rows: $rows<br>";
	
	


	for ($i = 0; $rows > $i; $i = $i + $step) {
	  $anf = $i + 1;
	  $end = $i + $step;

	  if ($end > $rows) {
		$end = $rows;
	  }
		
		if ($anf == $nr1 AND ($start+$step) > $rows AND $start==0) {$start = $i;
	    continue;
		echo "<div class='cg_further_images'>[ <strong><u><a href='$siteURL&1=".$getLook."&2=".$getOrder."&3=".$start."#cg-begin'>$anf-$end</a></u></strong> ]</div>";
	  } 
	  
	  	 elseif ($anf == $nr1 AND ($start+$step) > $rows AND $anf==$end) {$start = $i;
	    
		echo "<div class='cg_further_images'>[ <strong><u><a href='$siteURL&1=".$getLook."&2=".$getOrder."&3=".$start."#cg-begin'>$anf-$end</a></u></strong> ]</div>";
	  } 
			
	  
	    elseif ($anf == $nr1 AND ($start+$step) > $rows) {$start = $i;
	    
		echo "<div class='cg_further_images'>[ <strong><u><a href='$siteURL&1=".$getLook."&2=".$getOrder."&3=".$start."#cg-begin'>$anf-$end</a></u></strong> ]</div>";
	  } 
	  
		elseif ($anf == $nr1) {$start = $i;
			echo "<div class='cg_further_images'>[ <strong><u><a href='$siteURL&1=".$getLook."&2=".$getOrder."&3=".$start."#cg-begin'>$anf-$end</a></u></strong> ]</div>";
	  } 
	  
	  	elseif ($anf == $end) {$start = $i;
		echo "<div class='cg_further_images'>[ <a href='$siteURL&1=".$getLook."&2=".$getOrder."&3=".$start."#cg-begin'>$anf-$end</a> ]</div>";
	}
	  
	  else {$start = $i;
		echo "<div  class='cg_further_images'>[ <a href='$siteURL&1=".$getLook."&2=".$getOrder."&3=".$start."#cg-begin'>$anf-$end</a> ]</div>";
	  }
	  
	 }
	 

// Formular zum Übertragen von Hidden Werten	


	

	 
	echo "</div>";
	
	 }
	 // Muss sein, mit clear both und float left innen drin, damit man upload formular oder weitere div boxen drunter setzen kann
	echo "<div style='clear:both;>";
	echo "<div style='display:inline;float:left;'></div>";
	echo "</div>";
	
	echo "<br/>";
	echo "<br/>";
	
	
	
/*		


	for ($i = 0; $rows > $i; $i = $i + $step) {
	  $anf = $i + 1;
	  $end = $i + $step;

	  if ($end > $rows) {
		$end = $rows;
	  }
		
		if ($anf == $nr1 AND ($start+$step) > $rows AND $start==0) {
	    continue;
		echo "<div style='display:inline;float:left;'>[ <strong><a href='$siteURL"."start=$i"."&choose=$rowImages&look=$look'>$anf-$end</a></strong> ]</div>";
	  } 
	  
	  	 elseif ($anf == $nr1 AND ($start+$step) > $rows AND $anf==$end) {
	    
		echo "<div style='display:inline;float:left;'>[ <strong><a href='$siteURL"."start=$i"."&choose=$rowImages&look=$look'>$end</a></strong> ]</div>";
	  } 
			
	  
	    elseif ($anf == $nr1 AND ($start+$step) > $rows) {
	    
		echo "<div style='display:inline;float:left;'>[ <strong><a href='$siteURL"."start=$i"."&choose=$rowImages&look=$look'>$anf-$end</a></strong> ]</div>";
	  } 
	  
		elseif ($anf == $nr1) {
			echo "<div style='display:inline;float:left;'>[ <strong> <a href='$siteURL"."start=$i"."&choose=$rowImages&look=$look'>$anf-$end</a></strong> ]</div>";
	  } 
	  
	  	elseif ($anf == $end) {
		echo "<div style='display:inline;float:left;'>[ <a href='$siteURL"."start=$i"."&choose=$rowImages&look=$look'>$end</a>  ]</div>";
	  }
	  
	  else {
		echo "<div style='display:inline;float:left;'>[ <a href='$siteURL"."start=$i"."&choose=$rowImages&look=$look'>$anf-$end</a>  ]</div>";
	  }
	 }



*/

	
	
?>
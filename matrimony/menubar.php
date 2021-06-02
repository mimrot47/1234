<style>
@font-face {
	font-family: CenturyGothict;
	src: url(fonts/CenturyGothic.ttf);
}
@font-face {
	font-family: CaviarDreams_Bold;
	src: url(fonts/CaviarDreams_Bold.ttf);
}
@font-face {
	font-family: CaviarDreams;
	src: url(fonts/CaviarDreams.ttf);
}
@font-face {
	font-family: BerlinSans;
	src: url(fonts/berline.ttf);
}
@font-face {
	font-family: BebasNeue;
	src: url(fonts/BebasNeue.otf);
}

.dropdown:hover .dropdown-menu {
	display: block;
}
</style>			
		
<div class="col-lg-3 content-left" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 120px 0 rgba(0, 0, 0, 0.19); height:1050px">
	<?php
		$cover_photo = mysqli_fetch_array(mysqli_query($conn,"select cover_photo from matrimonialall where email='$email'"));
		$cover_photo = $cover_photo[0];
		$image_mime_type123="image/jpeg";
	?>
	<div class="well well-sm" style="background-size:cover;background-repeat:no-repeat;background-position: center;<?php if($cover_photo!=''){?>background-image:url(cover_photos/<?php echo $cover_photo; ?>)<?php }else{ ?> background-color:#dcdbdb; <?php } ?>; height:180px">
		<center>
			<div style="background-color:#FFFFFF;margin-top:45px;width:120px;height:120px;border-radius:150px;padding-top: 5px;opacity: 0.5;"></div>
			<?php
			$show123=mysqli_query($conn,"select * from matrimonialall where email='$email'") or die(mysqli_error($conn));
			$image_mime_type123="image/jpeg";
			while($row123=mysqli_fetch_array($show123))
			{ 
				if($row123['profile_pic']=="")
				{											
					$gender=$row123['gender'] ;										
					if($gender=="Bride")
					{
						echo "<img class='img-responsive menu-image' src=img/bride.png  style='display: block;width:110px;height:110px;border-radius:150px;position: absolute;'>";
					}
					else if($gender=="Groom")
					{
						echo "<img class='img-responsive menu-image' src=img/groom.png  style='display: block;width:110px;height:110px;border-radius:150px;position: absolute;'>";
					}
				}
				else 
				{
				?>
				<img  src="../profile_photos/<?php echo $row123['profile_pic'];?>" alt="image" style="display: block;width:110px;height:110px;border-radius:150px;position: absolute;" class="img-responsive menu-image" id="image_list"/>
				<?php
				}
			}
			?>	
			
		</center>
	</div>
	<div align="center" style="background-color:#e74c3c; padding:15px;">
		<h3 style="color:#FFFFFF; text-transform:uppercase; font-family:BebasNeue">
		<?php
			$email=$_SESSION['myusername'];
			$show_gender=mysqli_query($conn,"select * from matrimonialall where email='$email' and is_del='no'  ") or die(mysqli_error($conn));
			while($row_gender=mysqli_fetch_array($show_gender))
			{
				 echo ucwords($row_gender['first_name'])."&nbsp;";
				 echo ucwords($row_gender['last_name']);
			}
		?>
		</h3>
	</div>
	<div class="categories list-group hidden-xs hidden-sm hidden-md" style="font-family:CaviarDreams_Bold">
		<a href="my_account.php" class="list-group-item">
			<div align="center" style="float:left;display: inline-block;background-color:#225169;width:20px;height:20px;border-radius:20px;padding:15px; margin-top:-10px;">
				<img src="img/icon/MyAccount.png" style="display: block;height:15px;width:15px;margin-top: -10px;margin-left: -8px;">
				<div class="menu-font" style="float:left;margin-top: -16px;width: 150px; padding-left:13px"> My Account </div>
			</div>
			
		</a>
		<a href="home.php" class="list-group-item">
			<div style="float:left;display: block;background-color:#225169;width:20px;height:20px;border-radius:20px;padding:15px; margin-top:-10px;">
				<img src="img/icon/ProfileSearch.png" style="display: block;height:15px;width:15px;margin-top: -8px;margin-left: -8px;">
				<div  class="menu-font" style="float:left;margin-top: -16px;width: 180px; padding-left:30px"> Profile Search </div>
			</div>
			
		</a>
		<li class="dropdown" style="list-style:none;" >
			<a href="#" class="list-group-item" data-toggle="dropdown">
			<div style="float:left;display: block;background-color:#225169;width:20px;height:20px;border-radius:20px;padding:15px; margin-top:-10px;">
				<img src="img/icon/UpdateProfile.png" style="display: block;height:15px;width:12px;margin-top: -9px;margin-left: -6px;">
				<div  class="menu-font" style="float:left;margin-top: -20px;width: 280px; padding-left:30px;padding-right:10px;" > Update Profile <span  class="glyphicon glyphicon-chevron-right gif-icon"></span></div>
			</div>
			 </a>
			<ul class="dropdown-menu sub-menu-font" style="margin-left: 220px; margin-top:-60px;">
				<li><a href="edit_photo.php"> Update Photo</a></li>
				<li><a href="edit_personal_info.php"> Personal Information </a></li>
				<li><a href="edit_professional_info.php">Professional Information </a></li>
				<li><a href="edit_family_info.php"> Family Information </a></li>
				<li><a href="edit_astrology_info.php"> Astrological Information </a></li>
				<?php 
				 	$show=mysqli_query($conn,"select * from matrimonialall where is_del='no' and email='$email' ") or die(mysqli_error($conn));
					while($row=mysqli_fetch_array($show))
					{
							
					 $marriageType=$row['marriageType'];
					 $uniq_id=$row['unique_id'];
					 $gender=$row['gender'];
					 if($marriageType=='divorcee')
					 {
					 echo "<li><a href=edit_widow_divorce_info.php?type=$marriageType&id=$uniq_id&gender=$gender >Divorcee Information </a></li>";
					 }
					 if($marriageType=='widow')
					 {
						 echo "<li><a href=edit_widow_divorce_info.php?type=$marriageType&&id=$uniq_id&gender=$gender>Widow Information </a></li>";
					 }
					 if($marriageType=='widower')
					 {
						 echo "<li><a href=edit_widow_divorce_info.php?type=$marriageType&&id=$uniq_id&gender=$gender>Widower Information </a></li>";
					 }
					}
				 ?>
			</ul>
		</li>
		<a href="gallery.php" class="list-group-item">
			<div style="float:left;display: block;background-color:#225169;width:20px;height:20px;border-radius:20px;padding:15px; margin-top:-10px;">
				<img src="img/icon/Gallery.png" style="display: block;height:15px;width:15px;margin-top: -9px;margin-left: -8px;">
				<div  class="menu-font" style="float:left;margin-top: -16px;width: 180px; padding-left:30px"> Gallery </div>
			</div>
			
		</a>
		<a href="testimonial.php" class="list-group-item">
			<div style="float:left;display: block;background-color:#225169;width:20px;height:20px;border-radius:20px;padding:15px; margin-top:-10px;">
				<img src="img/icon/Testimonials.png" style="display: block;height:15px;width:15px;margin-top: -8px;margin-left: -8px;">
				<div  class="menu-font" style="float:left;margin-top: -16px;width: 180px; padding-left:30px"> Testimonial </div>
			</div>
		
		</a>
		<a href="change_pass.php" class="list-group-item">
			<div style="float:left;display: block;background-color:#225169;width:20px;height:20px;border-radius:20px;padding:15px; margin-top:-10px;">
				<img src="img/icon/ChangePassword.png" style="display: block;height:15px;width:15px;margin-top: -10px;margin-left: -8px;">
				<div  class="menu-font" style="float:left;margin-top: -16px;width: 280px; padding-left:30px"> Change Password  </div>
			</div>
			
		</a>						
		<a href="../logout.php" class="list-group-item">
			<div style="float:left;display: block;background-color:#225169;width:20px;height:20px;border-radius:20px;padding:15px; margin-top:-10px;">
				<img src="img/icon/LogOut1.png" style="display: block;height:15px;width:12px;margin-top: -8px;margin-left: -6px;">
				<div  class="menu-font" style="float:left;margin-top: -16px;width: 180px; padding-left:30px"> Log Out </div>
			</div>
		</a>	
		<a href="deactive_account.php" class="list-group-item">
			<div style="float:left;display: block;background-color:#225169;width:20px;height:20px;border-radius:20px;padding:15px; margin-top:-10px;">
				<i class="fa fa-ban" style="display: block;color:#fff;margin-top:-10px;margin-left: -8px"></i>
				<!--<img src="img/icon/ChangePassword.png" style="display: block;height:15px;width:15px;margin-top: -10px;margin-left: -8px;">-->
				<div  class="menu-font" style="float:left;margin-top: -20px;width: 280px; padding-left:30px"> Deactive Account </div>
			</div>
			
		</a>	
	</div>
</div>

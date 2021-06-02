<?php
include_once "session.php";
include "connect.php";
include_once 'dbconfig.php';

if(isset($_SESSION['myusername']))
{
	header('location:http://localhost/malimatrimony.org/login.php');
}
else
{
session_destroy();
}
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
<title>MATRIMONY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<link href="responcive.css" rel="stylesheet" type="text/css">
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
	src: url(fonts/BRLNSR.ttf);
}

li.selected a { color: #FF0000; }
#image_list
{
	width:180px;
	height:150px;

	margin-left:10px;
	margin-right:10px;
}
.hied_border{
		border-style:hidden; 
		border-top-style:hidden;
		border-bottom-style:groove;
		background-color: transparent;
		border-radius:0px;
		box-shadow:none;
		height:40px;
	}
	option{
		background-color:#42B9EA;
	}
	select{
		color:white;
		font-size:40px;
		box-shaow:none;
	}
  .centered11 {
  position: absolute;
  padding-top: 50%: 
  /*top: 50%;*/
  padding-left: 30%;
  transform: translate(-50%, -50%);
}



</style>
<!----->


<script src="jquery-1.11.1.min.js"></script>

<script>
$(document).ready(function(e) {
    $('.menu-btn').click(function(e) {
        $('ul').slideToggle(500);
    });
});
</script>
<script src="jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(e) {
    $('.menu-btn').click(function(e) {
        $('ul').slideToggle(500);
    });
});
</script>
<!-->
       <script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{

	$("#loding2").hide();


	$("#state").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
			type: "POST",
			url: "get_city.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding2").hide();
				$("#city").html(html);
			}
		});
	});

});

$(document).ready(function()
{
	$("#gender").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
			type: "POST",
			url: "get_marriage.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding2").hide();
				$("#marriageType").html(html);
			}
		});
	});
});


</script>

</head>
<body>
<header class="main__header" >
	<div style="background-color:#225169; height:50px"></div>
	<div class="container-fluid">
		<div class="navbar-header">
				<h2 class="navbar-brand" style="font-family:CenturyGothict; font-size:30px"><a href="index.php"><span style="color:#FF4500">MALI</span> <span style="color:#225169">MATRIMONY</span></a></h2>
				<a href="#" class="submenu" style="background-image:url(img/default-logo.png); width:40px; height:40px">Menus</a>
			</div>
			<div class="menuBar">
				<ul class="menu re">
					<!--<li><a href="http://bhavsar.org/">Bhavsar.Org</a></li>-->
				        <li class="activet"><a href="index.php">Home</a></li>
				        <li class="search"><a href="#search">SEARCH</a></li>
				        <li class="bride"><a href="#bride">BRIDE</a></li>
				        <li class="groom"><a href="#groom">GROOM</a></li>
				        <li class="success"><a href="#success">SUCCESS STORIES</a></li>
				        <li class="terms"><a href="terms.php">TERMS AND CONDITIONS</a></li>
				        <li class="contact"><a href="#contact">Contact Us</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
			</div>
		</nav>
	</div>
</header>

<br>
<div style="padding: 60px 0;"></div>
<?php
include 'slider.php'

?>




<!-- Welcome Message -->
<section>
 	<img alt="image" src="img/mali_banner.jpg" width="100%">
</section>

<!-- Members-->
<section>
	<div class="row" style="background-color:#f5f9fb;" style="padding-bottom:0%">
	<div class="col-md-1" align="center"></div>
	  <div class="col-md-2" align="center">
	  	<img alt="image" src="img/total members icon.png" style="height:175px; width:175px">
  		<h3 style="text-transform:none; font-family:CenturyGothict;">Verified Members </h3>
	</div>
	  <div class="col-md-2" align="center">
	  	<img alt="image" src="img/easy to register.png" style="height:175px; width:175px">
		<h3 style="text-transform:none; font-family:CenturyGothict;">Easy To Register</h3>
	  </div>
	  <div class="col-md-2" align="center">
	  	<img alt="image" src="img/easy to  Search.png" style="height:175px; width:175px">
		<h3 style="text-transform:none; font-family:CenturyGothict;">Easy To Search</h3>
	  </div>
	  <div class="col-md-2" align="center">
	  	<img alt="image" src="img/easy to connect.png" style="height:175px; width:175px">
		<h3 style="text-transform:none; font-family:CenturyGothict;">Easy To Connect</h3>
	  </div>
	  <div class="col-md-2" align="center">
	  	<img alt="image" src="img/secured2.png" style="height:175px; width:175px">
		<h3 style="text-transform:none; font-family:CenturyGothict;">Secured</h3>
	  </div>
	  
	</div>

</section>

<!--end of slider section-->
<section id="search" class="main__middle__container " style="padding-top:0px; ">
  <div class="text-center headings no-margin nothing" >
    <div class="container">

       
      <div class="col-md-5" style="margin-top:40px;">
       <h1 class="page_title" style="font-family: CenturyGothict; margin-bottom:50px;margin-left: -150px;">Search Your Life Partner</h1>
      	<form action="search.php" method="post">
         <table class=".table" style="border-spacing: 10px; border-collapse: separate;">
              <tr>
                <td style="float:left; color:#FFFFFF;font-family: CenturyGothict;font-size: 18px;"> Looking For</td>
                    <td>
                        <select class=" hied_border " name="gender" id="gender" style="background-color: transparent;width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" required>
                            <option value="">Select For</option>
                            <option value="Bride">Bride</option>
                            <option value="Groom">Groom</option>
                        </select>
                    </td>
              </tr>
            <tr>
                <td style="float:left; color:#FFFFFF;font-family: CenturyGothict;font-size: 18px;"> Marriage Status</td>
                    <td>
                        <select class=" hied_border" name="marriageType" id="marriageType" style="width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;background-color: transparent;" required>
                        <option value="">Select Marriage Status </option>
                            <option>Never married</option>
                            <option>Divorcee</option>
						            	<option>Widow</option>
                            <option>Widower</option>

                        </select>
                    </td>
            </tr>
			<tr>
                <td style="float:left; color:#FFFFFF;font-family: CenturyGothict;font-size: 18px;"> Sub - Caste</td>
                    <td>
                        <select class=" hied_border" name="subcast" id="subcast" style="background-color: transparent;width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" required>
                        <option value="">Select Sub-caste </option>
                            <option>Full Mali</option>
                            <option>Jire Mali</option>
                            <option>Kach Mali</option>
                        </select>
                    </td>
            </tr>
            <tr>
            	<td style="float:left; color:#FFFFFF;font-family: CenturyGothict;font-size: 18px;">Age</td>
            <td>
                <select class=" hied_border" style="width:90px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict; background-color: transparent;" name="from" required>
            		<option value="">-Select-</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                    <option>32</option>
                    <option>33</option>
                    <option>34</option>
                    <option>35</option>
                    <option>36</option>
                    <option>37</option>
                    <option>37</option>
                    <option>38</option>
                    <option>39</option>
                    <option>40</option>
                    <option>41</option>
                    <option>42</option>
					<option>43</option>
					<option>44</option>
					<option>45</option>
					<option>46</option>
					<option>47</option>
					<option>48</option>
					<option>49</option>
					<option>50</option>
                </select>
                To
	        <select class=" hied_border" style="width:90px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict; background-color: transparent;" name="to" required>
                    <option value="">-Select-</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                    <option>32</option>
                    <option>33</option>
                    <option>34</option>
                    <option>35</option>
                    <option>36</option>
                    <option>37</option>
                    <option>37</option>
                    <option>38</option>
                    <option>39</option>
                    <option>40</option>
                    <option>41</option>
                    <option>42</option>
                    <option>43</option>
                    <option>44</option>
                    <option>45</option>
                    <option>46</option>
                    <option>47</option>
                    <option>48</option>
                    <option>49</option>
                    <option>50</option>
            	</select>
            </td>
       </tr>

       <tr>
          <td style="float:left; color:#FFFFFF;font-family: CenturyGothict;font-size: 18px;">Qualification </td>
         <td><select class=" hied_border" name="academic_level" style="background-color: transparent;padding:6px;width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" required>
				<option value="">Select Qualification</option>
				<option>MBA</option>
				<option>CA</option>
				<option>Doctor</option>
				<option>Advocate</option>
				<option>Engineer</option>
				<option>Diploma</option>
				<option>PostGraduate</option>
				<option>Graduate</option>
				<option>Undergraduate</option>
				<option>HSC</option>
				<option>SSC</option>

      	</select></td>
       </tr>
       <tr>
       <td style="float:left; color:#FFFFFF;font-family: CenturyGothict;font-size: 18px;">State </td>
       <td>
			<select class=" hied_border " name="states" id="state" style="background-color: transparent;padding:6px;width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" required>

      		<option value="">Select State</option>
			<?php

				$stmt = $DB_con->prepare("SELECT * FROM state where is_del='approved' ORDER BY state  ASC");
				$stmt->execute();
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
			?>
			<option value="<?php echo $row['state']; ?>"<?php if($_SESSION['states']==$row['state']) echo "selected";?>><?php echo $row['state']; ?></option>
			<?php
				}
			?>
			</select>
       </td>
       </tr>
       <tr>
       <td style="float:left; color:#FFFFFF;font-family: CenturyGothict;font-size: 18px;">City </td>
       <td>
      		<select class=" hied_border" name="city" id="city" style="background-color:transparent;padding:6px;width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" required>
      			<option value="">Select City</option>
				<?php
				$id = $_SESSION['states'];
				$stmt = $DB_con->prepare("SELECT * FROM city WHERE state='$id' and is_del='approved' ORDER BY city  ASC");
				$stmt->execute(array(':id' => $id));
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
				?>
				<option value="<?php echo $row['city']; ?>"<?php if($_SESSION['city']==$row['city']) echo "selected";?>><?php echo $row['city']; ?></option>
				<?php
				}
				?>
      		</select>
      </td>
      </tr>
      <tr>
      <td></td><td>
      <input type="submit" class="btn btn-default btn"  role="button" value="Submit" style="background-color: transparent;">
      </td>
      </tr>
      </table>


  </form>
      </div>
        <div class="col-md-1">&nbsp;</div>
      <div class="col-md-4 search-image">
      		<img src="img/couple1.png" style="" class=" img-responsive img-rounded ">
      </div>
    </div>
  </div>

<!-- Bride -->

<div id="bride" class="row three__blocks no_padding no-margin" style="background-image:url(img/bride_BG.jpg);margin-bottom: 10px;">
	<div class="container2" style="display:block">
		<h2 class="page__title text-center"><span style="font-family:CaviarDreams_Bold;">Latest Registered Brides &nbsp;</span><img style="height:60px; margin-left:-25px"alt="image" src="img/heart.png" ></h2>

	</div>
	 <div  class="container" style="margin-top:30px;">
         <style>
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    text-align:center;

		}

		li {
		    float: left;
		}

		li a {
		    display: block;

		    text-align: center;
		    padding: 16px;
		    text-decoration: none;
		}
		.hied_border{
				border-style:hidden; 
				border-top-style:hidden;
				border-bottom-style:groove;
				background-color:#F8F8F9;
				border-radius:0px;
				box-shadow:none;
	}
	 </style>
   <div class="row">
    <div class="col">
	 <ul class='ul-li'>
   
      
    
	    <form action="search_state.php" method="post">
	      <li>
	 	     <select class="form-control" id="state" required name="states" style="font-family: CenturyGothict;font-size:15px; color:#000000" required>
	        	<option value="">Select State</option>
	            	<?php
						$show1=mysqli_query($conn,"select DISTINCT state from state where is_del='approved' ORDER BY state ASC");
						while($rw1=mysqli_fetch_array($show1))
						{
							echo"<option  value='".$rw1['state']."'>"; echo $rw1['state']; echo"</option>";
						}
					?>
	         </select>
	         </li>
			 <li>&nbsp;</li>
			 <li>
			 	<select class="form-control" name="marriageType" style="font-family: CenturyGothict;font-size:15px; color:#000000" required>
				<option value="">Select Marriage Status </option>
				<option>Never married</option>
				<option>Divorcee</option>
				<option>Widow</option>

			</select>
			 </li>
	        <li><input type="hidden" name="gender" value="Bride"></li><li>&nbsp;</li>
	        <li>
	        <button name="submit" class="btn btn-danger" style="font-family: CenturyGothict;">Search</button>
	    </form>
      
          	</li>
          </ul>
        </div>
        </div>
        <style>
			@media all and (min-width: 768px) {
			  .carousel-showmanymoveone .carousel-inner > .active.left,
			  .carousel-showmanymoveone .carousel-inner > .prev {
				left: -50%;
			  }
			  .carousel-showmanymoveone .carousel-inner > .active.right,
			  .carousel-showmanymoveone .carousel-inner > .next {
				left: 50%;
			  }
			  .carousel-showmanymoveone .carousel-inner > .left,
			  .carousel-showmanymoveone .carousel-inner > .prev.right,
			  .carousel-showmanymoveone .carousel-inner > .active {
				left: 0;
			  }
			  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
				display: block;
			  }
			}
			@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
			  .carousel-showmanymoveone .carousel-inner > .item.active.right,
			  .carousel-showmanymoveone .carousel-inner > .item.next {
				-webkit-transform: translate3d(50%, 0, 0);
						transform: translate3d(50%, 0, 0);
				left: 0;
			  }
			  .carousel-showmanymoveone .carousel-inner > .item.active.left,
			  .carousel-showmanymoveone .carousel-inner > .item.prev {
				-webkit-transform: translate3d(-50%, 0, 0);
						transform: translate3d(-50%, 0, 0);
				left: 0;
			  }
			  .carousel-showmanymoveone .carousel-inner > .item.left,
			  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
			  .carousel-showmanymoveone .carousel-inner > .item.active {
				-webkit-transform: translate3d(0, 0, 0);
						transform: translate3d(0, 0, 0);
				left: 0;
			  }
			}
			@media all and (min-width: 992px) {
			  .carousel-showmanymoveone .carousel-inner > .active.left,
			  .carousel-showmanymoveone .carousel-inner > .prev {
				left: -25%;
			  }
			  .carousel-showmanymoveone .carousel-inner > .active.right,
			  .carousel-showmanymoveone .carousel-inner > .next {
				left: 25%;
			  }
			  .carousel-showmanymoveone .carousel-inner > .left,
			  .carousel-showmanymoveone .carousel-inner > .prev.right,
			  .carousel-showmanymoveone .carousel-inner > .active {
				left: 0;
			  }
			  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
			  .carousel-showmanymoveone .carousel-inner .cloneditem-3 {
				display: block;
			  }
			}
			@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
			  .carousel-showmanymoveone .carousel-inner > .item.active.right,
			  .carousel-showmanymoveone .carousel-inner > .item.next {
				-webkit-transform: translate3d(25%, 0, 0);
						transform: translate3d(25%, 0, 0);
				left: 0;
			  }
			  .carousel-showmanymoveone .carousel-inner > .item.active.left,
			  .carousel-showmanymoveone .carousel-inner > .item.prev {
				-webkit-transform: translate3d(-25%, 0, 0);
						transform: translate3d(-25%, 0, 0);
				left: 0;
			  }
			  .carousel-showmanymoveone .carousel-inner > .item.left,
			  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
			  .carousel-showmanymoveone .carousel-inner > .item.active {
				-webkit-transform: translate3d(0, 0, 0);
						transform: translate3d(0, 0, 0);
				left: 0;
			  }
			}
		</style>
	<div class="container">
		<div class="col-md-12">
			<div class="carousel slide carousel-showmanymoveone" id="carousel123">
				<div class="carousel-inner slide-inner">

					 <?php
						$show=mysqli_query($conn,"select * from matrimonialall where  gender='Bride' and  is_del='no' and payment='Yes' ORDER BY candidate_id DESC") or die(mysqli_error($conn));
					 	$image_mime_type="image/png|image/jpeg|image/gif";
					 	$image_count = 0;
						while($row=mysqli_fetch_array($show))
						{
							if(!$image_count)
							{
							$active_class = 'active';
							$image_count = 1;
							?>
							<div class="item <?php echo $active_class;?>">
								<div class="col-xs-3">
									<p class="brideslider"> <?php echo ucfirst($row['first_name']);?> <br>
									<?php echo "<a href=login.php?id=".$row['unique_id']." >";?>
									<?php
									if($row['profile_pic']=="")
									{
				            					echo '<img src="matrimony/img/bride.png" alt="image" class="img-responsive slide-image " />';
				         				}
				         				else
				         				{
								          ?>
										<img src="profile_photos/<?php echo $row['profile_pic'];?>" alt="image" class="img-responsive slide-image"  >
										<?php
								       }
						       			?>
									</a>
									Age - <?php echo $row['age'];?><br> City - <?php echo $row['city'];?>,<br> State - <?php echo $row['states'];?>
									</P>
								</div>
							</div>
							<?php
							}
							else
							{
							?>
							<div class="item">
								<div class="col-xs-3">
									<p class="brideslider"> <?php echo ucfirst($row['first_name']);?> <br>
									<?php echo "<a href=login.php?id=".$row['unique_id']." >";?>
									<?php
									if($row['profile_pic']=="")
									{
				            					echo '<img src="matrimony/img/bride.png" alt="image" class="img-responsive slide-image" />';
				         				}
				         				else
				         				{
								        ?>
									<img src="profile_photos/<?php echo $row['profile_pic'];?>" alt="image" class="img-responsive slide-image" >
									<?php
								       }
						       			?>
									</a>
									Age - <?php echo $row['age'];?><br> City - <?php echo $row['city'];?>,<br> State - <?php echo $row['states'];?>
									</P>
								</div>
							</div>
							<?php
							}
							$image_count++;

						}
				 	?>

				</div>
				<a class="left carousel-control slide-left" href="#carousel123" data-slide="prev" ><img class="glyphicon glyphicon-chevron-left slide-icon" alt="image" src="img/bride groom prev scroll.png"></a>
				<a class="right carousel-control slide-right" href="#carousel123" data-slide="next"><img class="glyphicon glyphicon-chevron-right slide-icon" alt="image" src="img/bride groom next scroll.png"></a>
			</div>
		</div>
	</div>
	<a href="search_state.php?gender=Bride"><button type="button" class="btn btn-danger" style="font-family:CaviarDreams_Bold;float:right; margin-right:100px; margin-bottom:-50px">View All</button></a>
</div>

<hr>
<!-- Groom -->

<div id="groom" class="row three__blocks no_padding no-margin"  style="background-image:url(img/groom_BG.jpg); width:100%">
	<div class="container2">
		<h2 class="page__title text-center"><span style="font-family:CaviarDreams_Bold;">Latest Registered Grooms &nbsp;</span><img style="height:60px; margin-left:-25px"alt="image" src="img/heart.png" ></h2>
	</div>
	<div  class="container" style="margin-top:30px;">
         <style>
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    text-align:center;

		}

		li {
		    float: left;
		}

		li a {
		    display: block;

		    text-align: center;
		    padding: 16px;
		    text-decoration: none;
		}
	 </style>
	 <ul class='ul-li'>
	    <form action="search_state.php" method="post">
	      <li>
	 	     <select class="form-control" id="state" required name="states" style="font-family: CenturyGothict;font-size:15px; color:#000000" required>
	        	<option value="">Select State</option>
	            	<?php
						$show1=mysqli_query($conn,"select DISTINCT state from state where is_del='approved' ORDER BY state ASC");
						while($rw1=mysqli_fetch_array($show1))
						{
							echo"<option  value='".$rw1['state']."'>"; echo $rw1['state']; echo"</option>";
						}
					?>
	         </select>
	         </li>
		 <li>&nbsp;</li>
		 <li>
		 	<select class="form-control" name="marriageType" style="font-family: CenturyGothict;font-size:15px; color:#000000" required>
				<option value="">Select Marriage Status </option>
				<option>Never married</option>
				<option>Divorcee</option>
				<option>Widower</option>

			</select>
		 </li>
		 <li> <input type="hidden" name="gender" value="Groom"></li><li>&nbsp;</li>
	        <li>
	        <button name="submit" class="btn btn-danger" style="font-family: CenturyGothict;">Search</button>
	    </form>
          	</li>
          </ul>
        </div>
	<div class="container">
		<div class="col-md-12">
			<div class="carousel slide carousel-showmanymoveone" id="carouselABC">
				<div class="carousel-inner slide-inner">
					<?php
						$show=mysqli_query($conn,"select * from matrimonialall where  gender='Groom' and  is_del='no' and payment='Yes' ORDER BY candidate_id DESC") or die(mysqli_error($conn));
					 	$image_mime_type="image/png|image/jpeg|image/gif";
					 	$image_count = 0;
						while($row=mysqli_fetch_array($show))
						{
							if(!$image_count)
							{
							$active_class = 'active';
							$image_count = 1;
							?>
							<div class="item <?php echo $active_class;?>">
								<div class="col-xs-3">
									<p class="brideslider"> <?php echo ucfirst($row['first_name']);?> <br>
									<?php echo "<a href=login.php?id=".$row['unique_id']." >";?>
									<?php
									if($row['profile_pic']=="")
									{
				            					echo '<img src="matrimony/img/groom.png" alt="image" class="img-responsive slide-image"  />';
				         				}
				         				else
				         				{
								        ?>
										<img src="profile_photos/<?php echo $row['profile_pic'];?>" alt="image" class="img-responsive slide-image" >
										<?php
								       }
						       			?>
									</a>
									Age - <?php echo $row['age'];?><br> City - <?php echo $row['city'];?>,<br> State - <?php echo $row['states'];?>
									</P>
								</div>
							</div>
							<?php
							}
							else
							{
							?>
							<div class="item">
								<div class="col-xs-3">
									<p class="brideslider"> <?php echo ucfirst($row['first_name']);?> <br>
									<?php echo "<a href=login.php?id=".$row['unique_id']." >";?>
									<?php
									if($row['profile_pic']=="")
									{
				            					echo '<img src="matrimony/img/groom.png" alt="image" class="img-responsive slide-image"  />';
				         				}
				         				else
				         				{
								       ?>
									<img src="profile_photos/<?php echo $row['profile_pic'];?>" alt="image" class="img-responsive slide-image" >
									<?php
								       }
						       			?>
									</a>
									Age - <?php echo $row['age'];?><br> City - <?php echo $row['city'];?>,<br> State - <?php echo $row['states'];?>
									</P>
								</div>
							</div>
							<?php
							}
							$image_count++;

						}
				 	?>
				</div>
				<a class="left carousel-control slide-left" href="#carouselABC" data-slide="prev"><img class="glyphicon glyphicon-chevron-left slide-icon" alt="image" src="img/bride groom prev scroll.png"></a>
				<a class="right carousel-control slide-right" href="#carouselABC" data-slide="next"><img class="glyphicon glyphicon-chevron-right slide-icon" alt="image" src="img/bride groom next scroll.png"></a>
			</div>
		</div>
	</div>
	<a href="search_state.php?gender=Groom"><button type="button" class="btn btn-danger" style="font-family:CaviarDreams_Bold;float:right; margin-right:100px; margin-bottom:-50px">View All</button></a>
</div>
<script src='js/jquery.min.js'></script>
	<script src='js/bootstrap.min.js'></script>
	<script>
			(function(){
			  $('#carousel123').carousel({ interval: 2000 });
			  $('#carouselABC').carousel({ interval: 2000 });
			}());

			(function(){
			  $('.carousel-showmanymoveone .item').each(function(){
				var itemToClone = $(this);

				for (var i=1;i<4;i++) {
				  itemToClone = itemToClone.next();

				  // wrap around if at end of item collection
				  if (!itemToClone.length) {
					itemToClone = $(this).siblings(':first');
				  }

				  // grab item, clone, add marker class, add to collection
				  itemToClone.children(':first-child').clone()
					.addClass("cloneditem-"+(i))
					.appendTo($(this));
				}
			  });
			}());
		</script>
	</div>
  </div>
<!-- mobile App -->
<div style="margin-top:0px">
	<img alt="image" src="img/mali_mobile.jpg" width="100%">
</div>
 <style>
.form-panel:not(.active) {
		display:none;
	}
</style>
 <!-- Testimonials -->
<div id="testimonial" class="row three__blocks no_padding no-margin" style="margin-top:10px">
	<div class="container2">
		<h2 class="page__title text-center"><span style="font-family:CaviarDreams_Bold;">Testimonials &nbsp;</span><img style="height:60px; margin-left:-25px"  alt="image" src="img/heart.png" ></h2>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="font-family:CaviarDreams_Bold; background-color:#225169; color:#FFFFFF;border-radius:195px;box-shadow:15px 25px #b4b9b9;">
			<img class="img-responsive test-comm img-fluid" alt="image" src="img/testimonial_comma.png" >
			<?php
				$show=mysqli_query($conn,"select * from testimonial where is_del='no' and status='approved' order by id desc") or die(mysqli_error($conn));
				$panel_count = 0;
				$image_mime_type="image/png|image/jpeg|image/gif";
				while($row=mysqli_fetch_array($show))
				{
					$email = $row['email'];
					$data = mysqli_fetch_array(mysqli_query($conn,"select first_name,last_name,city,profile_pic from matrimonialall where email='$email' and is_del='no' and payment='Yes'"));
					if(!$panel_count)
					{
					$active_class1 = 'active';
					$panel_count = 1;
					?>
					<div class="form-panel <?php echo $active_class1;?>">
						<div class="col-md-3">
							<img class="img-responsive testi-image" alt="image" src="profile_photos/<?php echo $data[3];?>" >
							<label class='testi-label'> <?php echo ucfirst($data[0])." ".ucfirst($data[1]);?> <br> <?php echo ucfirst($data[2]);?></label>
						</div>
						<div class="col-md-9">
							<p class='testi-panel'>
								<?php echo ucfirst($row['description']);?>
							</p>
						</div>
					</div>
					<?php
					}
					else
					{
					?>
					<div class="form-panel">
						<div class="col-md-3">
							<img class="img-responsive testi-image" alt="image" src="profile_photos/<?php echo $data[3];?>" >
							<label class='testi-label'> <?php echo ucfirst($data[0])." ".ucfirst($data[1]);?> <br> <?php echo ucfirst($data[2]);?></label>
						</div>
						<div class="col-md-9">
							<p class='testi-panel'>
								<?php echo ucfirst($row['description']);?>
							</p>
						</div>
					</div>
					<?php
					}
					$panel_count++;
				}
			?>

			<p style="float:right;margin-top:100px; margin-right:100px;">
				<img align="right" class="next" src="img/testiomonialNext.png" height="50" width="50" style="cursor:pointer;">
				<img align="right" class="previous" src="img/testiomonialprevious.png" height="50" width="50" style="cursor:pointer;">
			</p>

		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<script>
	$('.previous').click(function () {
		var cur = $('.form-panel').index($('.form-panel.active'));
		if (cur!=0) {
			$('.form-panel').removeClass('active');
			$('.form-panel').eq(cur-1).addClass('active');
		}
	});
	$('.next').click(function () {
		var cur = $('.form-panel').index($('.form-panel.active'));
		if (cur!=$('.form-panel').length-1) {
			$('.form-panel').removeClass('active');
			$('.form-panel').eq(cur+1).addClass('active');
		}
	});
</script>

<!-- mobile App -->
<div style="margin-top:0px">
	<img alt="image" src="img/greeting.jpg" width="100%">
</div>

<!-- success-->
<div id="success" class="row three__blocks no-margin">
	<div class="container2" style="margin-bottom:50px">
		<h2 class="page__title text-center"><span style="font-family:CaviarDreams_Bold;">Success Stories From Us  &nbsp;</span><img style="height:60px; margin-left:-25px"alt="image" src="img/heart.png" ></h2>
	</div>
	<div class="col-md-12">
		<?php
			$show=mysqli_query($conn,"select * from success_stories where is_del='no' order by id desc limit 4") or die(mysqli_error($conn));
			$image_mime_type="image/png|image/jpeg|image/gif";
			while($row=mysqli_fetch_array($show))
			{
				//echo "<div class=mySlides>";
				$photo_path=$row['photo'];
				$id=$row['id'];
		?>
		<div class="col-md-3 ">
			<a href=view_stories.php?id=<?php echo $id;?>>
			<img class="img-responsive suc-img" alt="image" src="admin/matrimony/matrimony_success_img/<?php echo $photo_path;?>"  id="img-success">
			</a>
			<div class="col-md-12 "></div>
			<div class="col-md-12 centered" style="color: #fff;text-transform:none;font-family:CenturyGothict;font-weight:100;text-align: center;"><?php echo ucfirst($row['bride_name'])." & ".ucfirst($row['groom_name']);?> <br> <?php echo date("d M Y", strtotime($row['marriage_date'])); ?>
			</div>

		</div>
		<?php
			}
		?>
	</div>
	<a href="success_story.php"><button type="button" class="btn btn-danger" style="font-family:CaviarDreams_Bold;float:right; margin-right:50px; margin-top:30px">View All</button></a>
</div>


</section>
<footer>



  <a id="contact"></a>
     <div class="row text-center nothing line__bg testimonials" style="background-color:#e8e8e8">

	 <div class="col-md-4">
	 	<h3 class='contact-h3'>Details for customer care </h3>
	 	<h5 class='contact-h5'><img src="img/57-512.png" style="width:20px;">  +91 9823268232 &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i>&nbsp;  info@cloudsoft.com</h5>
	 	<h5 class='contact-h51'>(10:00 AM to 07:00 PM)</h5>
	      	<img src="img/cl_logo.png" style="margin-right:120px; width:180px; height:120px;">
        </div>
        <div class="col-md-8">
        <h3 style="color:#000;font-family:CenturyGothict;">Give Your Suggestion</h3>
       <form action="main/contact_us.php" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Your Email</label>
            <input type="email" required class=" hied_border form-control form-control-lg" style="outline:none; border-top-style:hidden;
					border-right-style:hidden;
					border-left-style:hidden;
					border-bottom-style:groove;
					background-color:#e8e8e8;
					border-radius:0px;"  name="email" id="exampleInputEmail12" placeholder="your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onBlur="validateEmail(this);" onKeyPress="return onlyAlphabets(event,this);">
          </div><br><br>
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Your Msg</label>
            <textarea  class="form-control form-control-lg" style="outline:none; border-top-style:hidden;	border-right-style:hidden;border-left-style:hidden;
					border-bottom-style:groove;background-color:#e8e8e8;border-radius:0px;" required name="msg" id="txtNumeric1" placeholder="your Msg" ></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-md">submit</button>
        </form>
         <script>
         	function validateEmail(emailField){
		        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

		        if (reg.test(emailField.value) == false)
		        {
		           document.getElementById("exampleInputEmail12").value= "";
		            // alert('Invalid Email Address');
		             document.getElementById('exampleInputEmail12').style.borderColor = "red";
		            return false;
		        }
			document.getElementById('exampleInputEmail12').style.borderColor = "green";
	        	return true;
        	}

     		document.addEventListener('DOMContentLoaded', function() {

		  var input = document.getElementById('txtNumeric1');
		  input.addEventListener('keydown', function(e){
		       var input = e.target;
		       var val = input.value;
		       var end = input.selectionEnd;
		       if(e.keyCode == 32 && (val[end - 1] == " " || val[end] == " ")) {
		         e.preventDefault();
		         return false;
		      }
		    });
		});

     </script>


        </div>
     </div>
</footer>
<p class="text-center copyright col-sm-12">Copyright &copy; 2020<a href="#"> Cloudsoft Technologies Pvt.Ltd.</a>. All Rights Reserved.</p>
<!--<p class="text-center copyright col-sm-2" style='color: #fff;'>
<?php
	$handle = fopen("counter.txt", "r");
	if(!$handle)
	{
	echo "could not open the file" ;
	} else {
	$counter = (int ) fread($handle,20);
	fclose ($handle); $counter++;
	echo" <strong> Total Visitors : ". $counter . " </strong> " ;
	$handle = fopen("counter.txt", "w" );
	fwrite($handle,$counter) ;
	fclose ($handle) ;
	}

	?>
</p>-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins)
<script type="text/javascript" src="http://www.htmlpreviews.com/cloud/badminton/credon8/js/jquery.min.js"></script>
<! Include all compiled plugins (below), or include individual files as needed -->
<script src="http://www.htmlpreviews.com/cloud/badminton/credon8/js/bootstrap.min.js"></script>
<script type="text/javascript">
$('.carousel').carousel({
  interval: 3500, // in milliseconds
  pause: 'none' // set to 'true' to pause slider on mouse hover
})
</script>


<script type="text/javascript">
$( "a.submenu" ).click(function() {
$( ".menuBar" ).slideToggle( "normal", function() {
// Animation complete.
});
});
$( "ul li.dropdown a" ).click(function() {
$( "ul li.dropdown ul" ).slideToggle( "normal", function() {
// Animation complete.
});
$('ul li.dropdown').toggleClass('current');
});

$('.search').click(function() {
   $('.activet').removeClass('activet');
    $(this).addClass('activet');

});

$('.bride').click(function() {
   $('.activet').removeClass('activet');
    $(this).addClass('activet');

});

$('.groom').click(function() {
   $('.activet').removeClass('activet');
    $(this).addClass('activet');

});
$('.success').click(function() {
   $('.activet').removeClass('activet');
    $(this).addClass('activet');

});
$('.contact').click(function() {
   $('.activet').removeClass('activet');
    $(this).addClass('activet');

});

$('.terms').click(function() {
   $('.activet').removeClass('activet');
    $(this).addClass('activet');

});
</script>
</body>

</html>
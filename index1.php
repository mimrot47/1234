<?php 
include_once "session.php";
include "connect.php";
include_once 'dbconfig.php';

if(isset($_SESSION['myusername']))
{
	header('location:http://localhost/brahminmatrimony.com/login.php');
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
<!------------------------------>
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
		<div class="container">
			<nav class="navbar navbar-default" role="navigation"> 
			<div class="navbar-header">
				<h1 class="navbar-brand" style="font-family:CenturyGothict; font-size:30px"><a href="index.php"><span style="color:#FF4500">BRAHMIN</span> <span style="color:#225169">MATRIMONY</span></a></h1>
				<a href="#" class="submenu" style="background-image:url(img/default-logo.png); width:40px; height:40px">Menus</a> 
			</div>
			<div class="menuBar">
				<ul class="menu">
					<li><a href="http://bhavsar.org/">Bhavsar.Org</a></li>
				        <li class="active"><a href="index.php">Home</a></li>
				        <li><a href="#search">SEARCH</a></li>
				        <li><a href="#bride">BRIDE</a></li>
				        <li><a href="#groom">GROOM</a></li>
				        <li><a href="#success">SUCCESS STORIES</a></li>
				        <li><a href="terms.php">TERMS AND CONDITIONS</a></li>
				        <li><a href="#contact">Contact Us</a></li>     
				</ul>
			</div>
			<!-- /.navbar-collapse --> 
		</nav>
	</div>
</header>


<div style="padding: 66px 0;"></div>
<section class="">
	<div id="myCarousel" class="carousel slide carousel-fade">
		<div class="carousel-inner">
			<div>
				<img alt="image" src="img/matrimony template banner.jpg" width="100%">
				<div class="row" style="position:absolute; margin-left:1100px; margin-top:-110px">
					<a class="btn btn-default btn-lg new_btn" href="registration_personal.php">Register Now</a>&nbsp;&nbsp;
					<a class="btn btn-default btn-lg new_btn" href="login.php" >User Login</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Welcome Message -->
<section>
 	<img alt="image" src="img/banner bramhin.jpg" width="100%">
</section>
	
<!-- Members-->
<section>
	<div class="row" style="background-color:#f5f9fb;">
	<div class="col-md-2" align="center"></div>
	  <div class="col-md-2" align="center">
	  	<img alt="image" src="img/total members icon.png" style="height:175px; width:175px">
  		<?php
		$count = mysqli_fetch_array(mysqli_query($conn,"select count(*) from matrimonialall where is_del='no' and payment='Yes'"));
		?>
		<h3 style="text-transform:none; font-family:CenturyGothict;">Total Members <br><?php echo $count[0];?></h3>
		
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
	  </div><div class="col-md-2" align="center"></div>
	</div>
</section>
				
<!--end of slider section-->
<section id="search" class="main__middle__container homepage">
  <div class="text-center headings no-margin nothing">
    <div class="container">
      
       <div class="col-md-2"></div>
      <div class="col-md-5" style="margin-top:40px;">
       <h1 class="page_title" style="font-family: CenturyGothict; margin-bottom:50px;margin-left: -150px;">Search Your Life Partner</h1>
      	<form action="search.php" method="post">
         <table class=".table" style="border-spacing: 10px; border-collapse: separate;">
              <tr>
                <td style="float:left; color:#FFFFFF;font-family: CenturyGothict;font-size: 18px;"> Looking For</td>
                    <td>
                        <select class="input_type" name="gender" id="gender" style="width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" required> 
                            <option value="">Select For</option>
                            <option value="Bride">Bride</option>
                            <option value="Groom">Groom</option>
                        </select>
                    </td>
              </tr>
            <tr>
                <td style="float:left; color:#FFFFFF;font-family: CenturyGothict;font-size: 18px;"> Marriage Status</td>
                    <td>
                        <select class="input_type" name="marriageType" id="marriageType" style="width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" required> 
                        <option value="">Select Marriage Status </option>
                            <option>Never married</option>
                            <option>Divorcee</option>
                            <option>Widow</option>
                            <option>Widower</option>
                        </select>
                    </td>
            </tr>
            <tr>
            	<td style="float:left; color:#FFFFFF;font-family: CenturyGothict;font-size: 18px;">Age</td>
            <td>
                <select class="input_type" style="width:90px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" name="from" required>
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
	        <select class="input_type" style="width:90px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" name="to" required>
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
         <td><select class="input_type " name="academic_level" style="padding:6px;width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" required>
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
			<select class="input_type " name="states" id="state" style="padding:6px;width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" required>
			
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
      		<select class="input_type " name="city" id="city" style="padding:6px;width:200px;margin-left: 0px;font-size: 15px;font-family: CenturyGothict;" required>
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
      <div class="col-md-4" style="margin-left:-150px; margin-top:30px">
      		<img src="img/couple1.png" style="" class="img-responsive img-rounded">
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
		    overflow: hidden;\
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
	 <ul>
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
        
	<div class="container">
		<div class="col-md-12">
			<div class="carousel slide multi-item-carousel" id="carousel-1">
				<div class="carousel-inner">
				
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
				            					echo '<img src="matrimony/img/bride.png" alt="image" class="img-responsive" style="height:220px; width:250px;margin-left:1px; margin-bottom:5px; margin-top:5px" />';
				         				} 
				         				else
				         				{
								          	echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row['profile_pic']).'" alt="image" class="img-responsive" style="height:220px; width:250px;margin-left:1px; margin-bottom:5px; margin-top:5px"/>';
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
				            					echo '<img src="matrimony/img/bride.png" alt="image" class="img-responsive" style="height:220px; width:250px;margin-left:1px; margin-bottom:5px; margin-top:5px" />';
				         				} 
				         				else
				         				{
								          	echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row['profile_pic']).'" alt="image" class="img-responsive" style="height:220px; width:250px;margin-left:1px; margin-bottom:5px; margin-top:5px"/>';
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
				<a class="left carousel-control" href="#carousel-1" style="margin-left:-200px;" data-slide="prev"><img class="glyphicon glyphicon-chevron-left" alt="image" src="img/bride groom prev scroll.png"></a>
				<a class="right carousel-control" href="#carousel-1" data-slide="next"><img class="glyphicon glyphicon-chevron-right" alt="image" src="img/bride groom next scroll.png"></a>
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
		    overflow: hidden;\
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
	 <ul>
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
			<div class="carousel slide multi-item-carousel" id="carousel-2">
				<div class="carousel-inner">
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
				            					echo '<img src="matrimony/img/groom.png" alt="image" class="img-responsive" style="height:220px; width:250px;margin-left:1px; margin-bottom:5px; margin-top:5px" />';
				         				} 
				         				else
				         				{
								          	echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row['profile_pic']).'" alt="image" class="img-responsive" style="height:220px; width:250px;margin-left:1px; margin-bottom:5px; margin-top:5px"/>';
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
				            					echo '<img src="matrimony/img/groom.png" alt="image" class="img-responsive" style="height:220px; width:250px;margin-left:1px; margin-bottom:5px; margin-top:5px" />';
				         				} 
				         				else
				         				{
								          	echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row['profile_pic']).'" alt="image" class="img-responsive" style="height:220px; width:250px;margin-left:1px; margin-bottom:5px; margin-top:5px"/>';
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
				<a class="left carousel-control" href="#carousel-2" style="margin-left:-200px;" data-slide="prev"><img class="glyphicon glyphicon-chevron-left" alt="image" src="img/bride groom prev scroll.png"></a>
				<a class="right carousel-control" href="#carousel-2" data-slide="next"><img class="glyphicon glyphicon-chevron-right" alt="image" src="img/bride groom next scroll.png"></a>
			</div>
		</div>
	</div>
	<a href="search_state.php?gender=Groom"><button type="button" class="btn btn-danger" style="font-family:CaviarDreams_Bold;float:right; margin-right:100px; margin-bottom:-50px">View All</button></a>
</div>
<script src='js/jquery.min.js'></script>
	<script src='js/bootstrap.min.js'></script>
	<script>
		$('#myCarousel').carousel({
		  interval: 4000
		})
		
		$('.carousel .item').each(function(){
		  var next = $(this).next();
		  if (!next.length) {
		    next = $(this).siblings(':first');
		  }
		  next.children(':first-child').clone().appendTo($(this));
		  
		  for (var i=0;i<2;i++) {
		    next=next.next();
		    if (!next.length) {
		    	next = $(this).siblings(':first');
		  	}
		    
		    next.children(':first-child').clone().appendTo($(this));
		  }
		});
		
		//menu bar active
		$(".menu li").on("click", function() {
		  $(".menu li").removeClass("active");
		  $(this).addClass("active");
		});
	</script>
	</div>
  </div>
<!-- mobile App -->
<div style="margin-top:0px">
	<img alt="image" src="img/bramhin_mobile.jpg" width="100%">
</div>
 <style>
.form-panel:not(.active) {
		display:none;
	}
</style>
 <!-- Testimonials -->
<div id="testimonial" class="row three__blocks no_padding no-margin" style="margin-top:10px">
	<div class="container2">
		<h2 class="page__title text-center"><span style="font-family:CaviarDreams_Bold;">Testimonials &nbsp;</span><img style="height:60px; margin-left:-25px"alt="image" src="img/heart.png" ></h2>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="font-family:CaviarDreams_Bold; background-color:#225169; color:#FFFFFF;border-radius:195px;box-shadow:15px 25px #b4b9b9;">
			<img class="img-responsive" alt="image" src="img/testimonial_comma.png" style="display: block;width:80px;height:80px;margin-left:0px;">
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
							<img class="img-responsive" alt="image" src="<?php echo 'data:'.$image_mime_type.';base64,'.base64_encode ($data[3]); ?>" style="display: block;width:200px;height:200px;border:5px solid #fff;border-radius:200px;">
							<label style="margin-left:100px; text-align:center;margin-top:15px; margin-bottom:25px;"> <?php echo ucfirst($data[0])." ".ucfirst($data[1]);?> <br> <?php echo ucfirst($data[2]);?></label>
						</div>
						<div class="col-md-9">
							<p style="margin-left: 10px; margin-right: 50px;text-align:justify; height: 50px;font-size:20px;">
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
							<img class="img-responsive" alt="image" src="<?php echo 'data:'.$image_mime_type.';base64,'.base64_encode ($data[3]); ?>" style="display: block;width:200px;height:200px;border:5px solid #fff;border-radius:200px;">
							<label style="margin-left:100px; text-align:center;margin-top:15px; margin-bottom:25px;"> <?php echo ucfirst($data[0])." ".ucfirst($data[1]);?> <br> <?php echo ucfirst($data[2]);?></label>
						</div>
						<div class="col-md-9">
							<p style="margin-left: 10px; margin-right: 50px;text-align:justify; height: 50px;font-size:20px;">
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
	<img alt="image" src="img/GrretingPage.jpg" width="100%">
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
			<img class="img-responsive" alt="image" src="admin/matrimony/matrimony_success_img/<?php echo $photo_path;?>" style="height:400px; width:400px; margin-bottom:20px;" id="img-success">
			</a>
			<div class="col-md-12 "></div>
			<div class="col-md-12 centered" style="font-size: 26px;color: #fff;text-transform:none;font-family:CenturyGothict;font-weight:100;text-align: center;"><?php echo ucfirst($row['bride_name'])." & ".ucfirst($row['groom_name']);?> <br> <?php echo date("d M Y", strtotime($row['marriage_date'])); ?>
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
	 	<h3 style="font-family:CenturyGothict;color:#212020;text-transform:none;margin-left:-50px;">Details for customer care </h3>
	 	<h5 style="font-family:CenturyGothict; font-size:16px;color:#000;margin-right: 25px;text-transform:none;"><img src="img/57-512.png" style="width:20px;">  +91 9823268232 &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i>&nbsp;  info@backtechs.com</h5>
		<h5 style="font-family:CenturyGothict; font-size:12px;color:#000;margin-right: 200px;text-transform:none;">(10:00 AM to 07:00 PM)</h5>
	      	<img src="img/logo.png" style="margin-top:25px;width:450px;">
        </div>
        <div class="col-md-8">
        <h3 style="color:#000;font-family:CenturyGothict;">Give Your Suggestion</h3>
       <form action="main/contact_us.php" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your email</label>
            <input type="email" required class="form-control form-control-lg" name="email" id="exampleInputEmail12" placeholder="your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onBlur="validateEmail(this);" onKeyPress="return onlyAlphabets(event,this);">
          </div><br><br>
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your Msg</label>
            <textarea  class="form-control form-control-lg" required name="msg" id="txtNumeric1" placeholder="your Msg" ></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-md">submit</button>
        </form>
         <script>
         	function validateEmail(emailField){
		        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		
		        if (reg.test(emailField.value) == false) 
		        {
		           document.getElementById("exampleInputEmail12").value= "";
		            alert('Invalid Email Address');
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
<p class="text-center copyright">Copyright &copy; 2017<a href="http://www.backtechs.com"> Backend Technologies PVT.LTD</a>. All Rights Reserved.</p>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
<script type="text/javascript" src="http://www.htmlpreviews.com/cloud/badminton/credon8/js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
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
</script>
</body>

</html>
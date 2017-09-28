<?php 
include_once "session.php";
include "connect.php";
include_once 'dbconfig.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
<title>MATRIMONY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<link href="responcive.css" rel="stylesheet" type="text/css">
<style>
#image_list
{
	width:180px;
	height:150px;
	
	margin-left:10px;
	margin-right:10px;
}

#img-success
{
	height:300px;
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
	<header class="main__header" style="background-image:url(img/header.png);  " >
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <div class="navbar-header">
        <h1 class="navbar-brand"><a href="index.php">MATRIMONY</a></h1>
        <a href="#" class="submenu" style="background-image:url(img/default-logo.png); width:40px; height:40px">Menus</a> </div>
      <div class="menuBar">
        <ul class="menu">
        <li><a href="http://bhavsar.org/">Bhavsar.Org</a></li>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#bride">BRIDE</a></li>
          <li><a href="#groom">GROOM</a></li>
          <li><a href="#success">SUCCESS STORIES</a></li>
          <li><a href="#dislaimer">DISCLAIMER</a></li>
          <li><a href="#contact">contact us</a></li>
        </ul>
        
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>
<section class="slider">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item"> <img data-src="images/slider/slider1.jpg" alt="first slide" src="img/indian_weddings_ceremony_wallpaper_2014_hd.jpg">
        <div class="container">
          <div class="carousel-caption" style="position:absolute;">
            <h1 class=""><!--Fusce id sapien tempus, vestibulum convallis arcu--></h1>
            <p><!--Fringilla placerat. Etiam a dolor sit amet arcu convallis congue. Praesent nec magna porta, sagittis tellus ut, rhoncus justo. Ut et porta turpis.--></p>
            <p><a class="btn btn-default btn-lg" href="registration_personal.php" >Registration</a>
            <a class="btn btn-default btn-lg" href="login.php" >User Login</a></p>
          </div>
        </div>
      </div>
      <div class="item"> <img data-src="images/slider/slider2.jpg" alt="second slide" src="img/Indian-Wedding.jpg" >
        <div class="container">
          <div class="carousel-caption" style="position:absolute; ">
            <h1 class=""><!--Eleifend non neque sit amet mollis--></h1>
            <p><!--Justo rutrum venenatis. Mauris accumsan posuere mauris non facilisis. Duis vestibulum sem lorem. Nulla ut blandit leo, in eleifend odio. Sed consequat dolor ut augue imperdiet adipiscing.--></p>
           <p><a class="btn btn-default btn-lg" href="registration_personal.php" >Registration</a>
            <a class="btn btn-default btn-lg" href="login.php" >User Login</a></p>
          </div>
        </div>
      </div>
      <div class="item active"> <img data-src="images/slider/slider3.jpg" alt="third slide" src="img/Maharashtrian-Wedding-RR-155.jpg">
        <div class="container">
          <div class="carousel-caption" style="position:absolute;">
            <h1 class=""><!--Donec lacus urna, commodo--></h1>
            <p><!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.--></p>
            <p><a class="btn btn-default btn-lg" href="registration_personal.php" >Registration</a>
            <a class="btn btn-default btn-lg" href="login.php" >User Login</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"><img src="img/ICON 1/pre.png" style="width:50px;height:50px"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"><img src="img/ICON 1/nxt.png" style="width:50px;height:50px"></span></a> </div>
</section>
<!--end of slider section-->
<section class="main__middle__container homepage">
  <div class="row text-center headings no-margin nothing">
    <div class="container">
      
      <h1 class="page_title"><img src="img/ICON 1/Serach your Partner.png" style="width:80px; height:80px;">
      Search Your Life Partner</h1>
      <div class="col-md-5" style="margin-top:0px;">
      	<form action="search.php" method="post">
         <table class=".table" style="
    border-spacing: 10px;
    border-collapse: separate;">
              <tr>
                <td style="float:left; color:#FFFFFF;font-family: sans-serif;font-size: 20px;"> Looking For</td>
                    <td>
                        <select class="input_type" name="gender" id="gender" style="width:200px;margin-left: 0px;font-size: 16px;font-family: sans-serif;"> 
                            <option>Select For</option>
                            <option value="Bride">Bride</option>
                            <option value="Groom">Groom</option>
                        </select>
                    </td>
              </tr>
            <tr>
                <td style="float:left; color:#FFFFFF;font-family: sans-serif;font-size: 20px;"> Marriage Status</td>
                    <td>
                        <select class="input_type" name="marriageType" id="marriageType" style="width:200px;margin-left: 0px;font-size: 16px;font-family: sans-serif;"> 
                        <option>Select Marriage Status </option>
                            <option>Never married</option>
                            <option>Divorcee</option>
                            <option>Widow</option>
                            <option>Widower</option>
                        </select>
                    </td>
            </tr>
            <tr>
            	<td style="float:left; color:#FFFFFF;font-family: sans-serif;font-size: 20px;">Age</td>
            <td>
                <select class="input_type" style="width:90px;margin-left: 0px;font-size: 16px;font-family: sans-serif;" name="from">
            		<option>-Select-</option>
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
				<select class="input_type" style="width:90px;margin-left: 0px;font-size: 16px;font-family: sans-serif;" name="to">
                  	<option>-Select-</option>
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
       <td style="float:left; color:#FFFFFF;font-family: sans-serif;font-size: 20px;">Qualification </td>
       <td><select class="input_type " name="academic_level" style="padding:6px;width:200px;margin-left: 0px;font-size: 16px;font-family: sans-serif;" >
				<option>Select Qualification</option>
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
				<?php 
				 /*$show122=mysql_query("select DISTINCT name from qulification ORDER BY name  ASC");
							
					while($rw122=mysql_fetch_array($show122))
						{ 
						echo"<option  value='".$rw122['name']."'>"; echo $rw122['name']; echo"</option>";
						}*/
				?>
      	</select></td>
       </tr>
       <tr>
       <td style="float:left; color:#FFFFFF;font-family: sans-serif;font-size: 20px;">State </td>
       <td>
			<select class="input_type " name="states" id="state" style="padding:6px;width:200px;margin-left: 0px;font-size: 16px;font-family: sans-serif;" >
			
      		<option>Select State</option>
			<?php 
				
				$stmt = $DB_con->prepare("SELECT * FROM state where is_del='approved' ORDER BY state  ASC");
				$stmt->execute();
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
			?>
			<option value="<?php echo $row['state']; ?><?php //if($_SESSION['states']==$row['state']) echo "selected";?>"><?php echo $row['state']; ?></option>
			<?php
				} 										
			?>
			</select>
       </td>
       </tr>
       <tr>
       <td style="float:left; color:#FFFFFF;font-family: sans-serif;font-size: 20px;">City </td>
       <td>
      		<select class="input_type " name="city" id="city" style="padding:6px;width:200px;margin-left: 0px;font-size: 16px;font-family: sans-serif;" >
      			<option>Select City</option>
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
      <input type="submit" class="btn btn-default btn"  role="button" value="Search">
      </td>
      </tr>
      </table>
            

  </form>
      </div><br>
      <div class="col-md-6">
      		<img src="img/Maharashtrian-Wedding-RR-155.jpg" width="500px;" height="400px" class="img-responsive img-rounded">
      </div>
    </div>
  </div>
  

  
  
  <a id="bride"></a>
  <div class="row three__blocks no_padding no-margin">
    <div class="container2">
      <h2 class="page__title text-center"><span>Bride</span></h2>
      
      <link href="css/jquery.picMarque.css" rel="stylesheet">
    
      
      
      <div  class="container" style="margin-top:30px;">
      <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
   
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
 	     <select class="form-control" id="state" required name="states" style="font-size:16px; color:#000000">
        	<option>Select State</option>
            	<?php 
					$show1=mysql_query("select DISTINCT state from state ORDER BY state  ASC");
					while($rw1=mysql_fetch_array($show1))
					{ 
						echo"<option  value='".$rw1['state']."'>"; echo $rw1['state']; echo"</option>";
					}
				?>
         </select>
         </li>
		 <li>&nbsp;</li>
		 <li>
		 	<select class="form-control" name="marriageType" style="font-size:16px; color:#000000" > 
			<option>Select Marriage Status </option>
			<option>Never married</option>
			<option>Divorcee</option>
			<option>Widow</option>
			
		</select>
		 </li>
        <li><input type="hidden" name="gender" value="Bride"></li><li>&nbsp;</li>
        <li>
        <button name="submit" class="btn btn-danger">Search</button>
    </form>
          </li>
          <li>&nbsp;</li>
          
          <li><a href="search_state.php?gender=Bride" style="padding: 0px;"><button type="button" class="btn btn-danger">View all</button></a>
      	  </li>

          </ul>     
              </div>
              <br>
      <div id="marquePic3" class="marque-box"  style="width:1170px; height:300px">
      
	<table cellspacing="0" cellpadding="0" border="0">
	  <tbody>
	    <tr>
	      <td data-marqueebox="1">
	        <div class="marque-main">
	          <ul>
               <script>
				function myFunction() 
				{
					alert("For show detail pleas Login");
				}
				</script>
                 <?php 
				 $show=mysql_query("select * from matrimonialall where  gender='Bride' and  is_del='no' ORDER BY candidate_id DESC") or die(mysql_error());
				
				$image_mime_type="image/png|image/jpeg|image/gif";
				
				while($row=mysql_fetch_array($show))
				{
					echo "<li><a href=#>";
					if($row['profile_pic']==""){
            echo '<img src="matrimony/img/bride.png" alt="image" onclick="myFunction()"  onerror=this.src=http://www.siaa.org.cn/style/common/nophoto.jpg style="height: 180px;" />';
          } else {
          echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row['profile_pic']).'" alt="image" onclick="myFunction()"  onerror=this.src=http://www.siaa.org.cn/style/common/nophoto.jpg style="height: 180px;" />';
            }
						echo "</a><br><br>
	             <div class=splendid-links> <font color='#000099'>".ucfirst($row['first_name']).",".$row['age']."<br>".$row['city']."</font>
				  <a  href=login.php?id=".$row['unique_id']." >View Details</a></div>
	            </li>";
				}
		 ?>
	          </ul>
             
	        </div>
	      </td>
	      <td data-marqueebox="2">
	      </td>
	    </tr>
	  </tbody>
	</table>
	</div>
 
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/jquery.picMarque.js"></script><script type="text/javascript">
      $(document).ready(function(){
        var picData = [      //image data（json），param：image（image path），title（image title），link（image link）
				          {
				            image:'img/1.jpg',
				            title:'image title 1',
				            link:'#'
				          },
				          {
				            image:'img/2.jpg',
				            title:'image title 2',
				            link:'#'
				          },
				          {
				            image:'img/3.jpg',
				            title:'image title 3',
				            link:'#'
				          },
				          {
				            image:'img/4.jpg',
				            title:'image title 4',
				            link:'#'
				          },
				          {
				            image:'img/5.jpg',
				            title:'image title 5',
				            link:'#'
				          }]

        // init pic
        $("#marquePic").picMarque({
          speed: 60,//scroll speed（ms）
          errorimg: 'http://www.siaa.org.cn/style/common/nophoto.jpg',//error image path
          data: picData
        })

        // init pic for template
        $("#marquePic3").picMarque()
      });
 
    </script>
           <!--<div id="demo5" class="scroll-img" style="height:250px">
      <ul>
        <li><a href="#">
         <?php 
		
		/*$show=mysql_query("select * from matrimonialall where  gender='Bride' and is_del='no'") or die(mysql_error());
				
				$image_mime_type="image/png|image/jpeg|image/gif";
				
				while($row=mysql_fetch_array($show))
				{
						if($row['profile_pic']=="")
						{
							echo "<img src=img/Female.png class=img-responsive img-rounded  id=image_list style=float:left>";
						}
						else
						{
					echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row['profile_pic']).'" alt="image" onclick="myFunction()" style="height:180px; width:180px; " />';
						}
						echo "&nbsp;&nbsp;";
				}*/
		 ?>
        </a> </li>
        
      </ul>
    </div>
    <div id="demo5-btn" class="text-center">
      <button class="btn" id="demo5-backward" style="border:none;background-color:#FFF">
      <i class="icon-chevron-left"></i> <img src="img/prev.png">
      </button>
      <button class="btn" id="demo5-forward" style="border:none;background-color:#FFF">
      <img src="img/next.png"> <i class="icon-chevron-right"></i>
      </button>
    </div>
    <script>
$(function () {
  $('#demo1').scrollbox();
  $('#demo2').scrollbox({
    linear: true,
    step: 1,
    delay: 0,
    speed: 100
  });
  $('#demo3').scrollbox({
    switchItems: 5,
    distance: 144
  });
  $('#demo4').scrollbox({
    direction: 'h',
    switchItems: 5,
    distance: 670
  });
  $('#demo5').scrollbox({
    direction: 'h',
    distance: 134
  });
  $('#demo5-backward').click(function () {
    $('#demo5').trigger('backward');
  });
  $('#demo5-forward').click(function () {
    $('#demo5').trigger('forward');
  });
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->

    </div>
  </div>

  <a id="groom"></a>
  <div class="row three__blocks no_padding no-margin">
    <div class="container1">
      <h2 class="page__title text-center"><span>Groom</span></h2>
     
      <div class="container" style="margin-top:30px;">
      
      <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
           
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
       <select class="form-control" id="state" required name="states" style="font-size:16px; color:#000000">
        	<option>Select State</option>
            	<?php 
					$show1=mysql_query("select DISTINCT state from state ORDER BY state  ASC");
						while($rw1=mysql_fetch_array($show1))
							{ 
								echo"<option  value='".$rw1['state']."'>"; echo $rw1['state']; echo"</option>";
							}
				?>
                </select>
        
        </li>
		<li>&nbsp;</li>
		 <li>
		 	<select class="form-control" name="marriageType" style="font-size:16px; color:#000000" > 
			<option>Select Marriage Status </option>
			<option>Never married</option>
			<option>Divorcee</option>
			
			<option>Widower</option>
		</select>
		 </li>
        <li><input type="hidden" name="gender" value="Groom"></li><li>&nbsp;</li>
        <li>
        <button name="submit" class="btn btn-danger">Search</button>
    </form>
          </li>
          
          <li>&nbsp;</li>
          <li><a href="search_state.php?gender=Groom" style="padding: 0px;"><button type="button" class="btn btn-danger">View all</button></a>
      	  </li>
          </ul>    
              </div>
     
	<div id="marquePic2" class="marque-box"  style="width:1170px;height:300px">
	<table cellspacing="0" cellpadding="0" border="0">
	  <tbody>
	    <tr>
	      <td data-marqueebox="1">
	        <div class="marque-main">
	          <ul>
              <script>
function myFunction() {
    alert("For show detail pleas Login");
}
</script>
                 <?php 
		
		$show=mysql_query("select * from matrimonialall where   gender='Groom' and  is_del='no' ORDER BY candidate_id DESC") or die(mysql_error());
				
				$image_mime_type="image/png|image/jpeg|image/gif";
				
				while($row=mysql_fetch_array($show))
				{
					echo "<li><a href=#>";
          if($row['profile_pic']==""){
            echo '<img src="matrimony/img/groom.png" alt="image" onclick="myFunction()"  onerror=this.src=http://www.siaa.org.cn/style/common/nophoto.jpg style="height: 180px;" />';
          } else {
					echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row['profile_pic']).'" alt="image" onclick="myFunction()"  onerror=this.src=http://www.siaa.org.cn/style/common/nophoto.jpg style="height: 180px;" />';
						}
						echo "</a><br><br>
	              <div class=splendid-links><font color=#000099>".ucfirst($row['first_name']).",".$row['age']."<br>".$row['city']."
				  <a href=login.php?id=".$row['unique_id']." >View Details</a></div>
				  
	            </li>";
				 echo "";
				}
		 ?>
	          </ul>
	        </div>
	      </td>
	      <td data-marqueebox="2">
	      </td>
	    </tr>
	  </tbody>
	</table>
	</div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/jquery.picMarque.js"></script><script type="text/javascript">
      $(document).ready(function(){
        var picData = [      //image data（json），param：image（image path），title（image title），link（image link）
				          {
				            image:'img/1.jpg',
				            title:'image title 1',
				            link:'#'
				          },
				          {
				            image:'img/2.jpg',
				            title:'image title 2',
				            link:'#'
				          },
				          {
				            image:'img/3.jpg',
				            title:'image title 3',
				            link:'#'
				          },
				          {
				            image:'img/4.jpg',
				            title:'image title 4',
				            link:'#'
				          },
				          {
				            image:'img/5.jpg',
				            title:'image title 5',
				            link:'#'
				          }]

        // init pic
        $("#marquePic").picMarque({
          speed: 60,//scroll speed（ms）
          errorimg: 'http://www.siaa.org.cn/style/common/nophoto.jpg',//error image path
          data: picData
        })

        // init pic for template
        $("#marquePic2").picMarque()
      });
 
    </script>
    
    
           <!--<div id="demo4" class="scroll-img" style="height:250px">
      <ul>
        <li><a href="#">
        <?php 
		
		/*$show=mysql_query("select * from matrimonialall where  gender='GROOM'  and is_del='no' ") or die(mysql_error());
				
				$image_mime_type="image/png|image/jpeg|image/gif";
				
				while($row=mysql_fetch_array($show))
				{
						if($row['profile_pic']=="")
						{
							echo "<img src=img/Male.png class=img-responsive img-rounded  id=image_list >";
						}
						else
						{
					echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row['profile_pic']).'" alt="image" onclick="myFunction()"  style="height:180px; width:180px; "/>';
					
						}
						echo "&nbsp;&nbsp;";
				}*/
		 ?>
        </a></li>
       
      </ul>
    </div>
    <div id="demo4-btn" class="text-center">
      <button class="btn" id="demo4-backward" style="border:none;background-color:#FFF">
      <i class="icon-chevron-left"></i> <img src="img/prev.png">
      </button>
      <button class="btn" id="demo4-forward" style="border:none;background-color:#FFF">
      <img src="img/next.png"> <i class="icon-chevron-right"></i>
      </button>
    </div>
</div>
<script>
$(function () {
  $('#demo11').scrollbox();
  $('#demo12').scrollbox({
    linear: true,
    step: 1,
    delay: 0,
    speed: 100
  });
  $('#demo13').scrollbox({
    switchItems: 5,
    distance: 144
  });
  $('#demo14').scrollbox({
    direction: 'h',
    switchItems: 5,
    distance: 670
  });
  $('#demo15').scrollbox({
    direction: 'h',
    distance: 134
  });
  $('#demo4-backward').click(function () {
    $('#demo4').trigger('backward');
  });
  $('#demo4-forward').click(function () {
    $('#demo4').trigger('forward');
  });
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->



    

    </div>
  </div>
  
   <br><br><br><br> <br><br><br><br>
  <a id="success"></a>
  <div class="row grey-info-block text-center" style="background-color:#333">
    
    <div class="container">
      <h2 class="page__title"><span>Success Stories</span></h2><br><br>
			<?php 
		
	
				
				$show=mysql_query("select * from success_stories where is_del='no'  ") or die(mysql_error());
				
				$image_mime_type="image/png|image/jpeg|image/gif";
				
				while($row=mysql_fetch_array($show))
				{
						echo "<div class=mySlides>";
						$photo_path=$row['photo'];
					echo '<img src="http://bhavsar.org/admin/pages/matrimony/matrimony_success_img/'.$photo_path .'" id="img-success" />';
						$id=$row['id'];
				   		echo "&nbsp;&nbsp;&nbsp;";
						echo "<h3>".$row['bride_name']." & ".$row['groom_name']."</h3>";
       				echo " <p>".$row['ss_desc']."</p>";
       				echo " <p><a href=view_stories.php?id=$id>View Details</a></p></div> ";
				}

		 ?>
         <div class="w3-center">
  <div class="w3-section">
    <button class="w3-btn" onClick="plusDivs(-1)" style="border:none;background:none"><img src="img/prev.png" 
    style="width:80px; height:40px"></button>
    <button class="w3-btn" onClick="plusDivs(1)" style="border:none;background:none"><img src="img/next.png" 
    style="width:80px; height:40px"></button>
  </div>
</div>

</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}
</script>
        
      
      <!--</marquee>-->
    </div>
  </div>
  
  <a id="dislaimer"></a>
  <div class="row text-center nothing line__bg testimonials" style="background-color:#fff">
    <div class="container" >
      <h3 style="color:#000">DISCLAIMER</h3>
      <p style="color:#000">Donec fringilla vitae ligula vitae facilisis. Vivamus consectetur tincidunt lorem a bibendum. Sed fermentum ac ante sit nec amet convallis suspendisse potenti suspendisse mollis. Tortor nec iaculis tempor, orci augue dignissim nibh, id modo risus purus at nibh. Curabitur ac urna felis phasellus onvallis leo orci, sit amet feugiat nunc pretium fringilla. Morbi nec nulla a magna porta ullamcorper eget sit amet metus duis varius est ut lectus malesuada tincidunt vitae ut velit ac nunc.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    </div>
  </div>

</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>SUGGESTION</h3>
        <form action="main/suggestion_add.php" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your email</label>
            <input type="email" class="form-control form-control-lg" required name="email" id="exampleInputEmail2" placeholder="your email">
          </div><br><br>
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your Msg</label>
            <textarea  class="form-control form-control-lg" name="msg" required id="exampleInputEmail2" placeholder="your Msg" ></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-md" value="submit">submit</button>
        </form>
      </div>
     
      <div class="col-md-8">
        <h3>TESTIMONIAL</h3>
      <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/super-treadmill.css" />
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">-->
    <marquee direction="up" scrolldelay="500" height="300px">
      <?php
			$show=mysql_query("select * from testimonial where is_del='no' and status='approved' ") or die(mysql_error());
				while($row=mysql_fetch_array($show))
				{
					
						  $row['description'];
						 $email=$row['email'];
						
					
					$showw=mysql_query("select * from matrimonialall where email='$email'")or die(mysql_error());
				while($roww=mysql_fetch_array($showw))
				{
						echo "<h4><font color=#FFFFFF>". $roww['first_name']."&nbsp".$roww['last_name']."</font></h4>";
				}?>
				
					<p><?php echo  $row['description']; ?> </p>
                    <hr style="border-color:#CCCCCC">
				<?php
					
				}
			?>
        </marquee>
        </div>
           <!--<div id="container" >
			
			<div id="mytreadmill" class="treadmill" style="border:none;background-color:transparent;height:200px ">
				
				<?php /*?> <?php
			$show=mysql_query("select * from testimonial where is_del='no' and status='approved' ") or die(mysql_error());
				while($row=mysql_fetch_array($show))
				{
					
						  $row['description'];
						 $email=$row['email'];
						
					?>
                    
				<div class="treadmill-unit">
					<h2>
                    <?php
					$showw=mysql_query("select * from matrimonialall where email='$email'")or die(mysql_error());
				while($roww=mysql_fetch_array($showw))
				{
						echo "<font color=#FFFFFF>". $roww['first_name']."&nbsp".$roww['last_name']."</font>";
				}?>
				</h2>
					<p><?php echo  $row['description']; ?> </p>
				</div><?php
					
				}
			?><?php */?>
			</div><br>
<br>
<br>

		</div>
		
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/super-treadmill.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#mytreadmill').startTreadmill({
					runAfterPageLoad: true,
            				direction: "left",
            				speed: "medium",
            				viewable: 3,
            				pause: false
				});
			});
		</script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->
            	
           
        
        
      </div>
      
      
    </div>
  </div>
  <a id="contact"></a>
     <div class="row text-center nothing line__bg testimonials" style="background-color:#FFF">
      <h3 style="color:#000">Contact Us</h3>
	 	<div class="col-md-4">
        	<img src="img/Company Logo.png">
        </div>
        <div class="col-md-8">
        	<form action="../logo.png" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your email</label>
            <input type="email" required class="form-control form-control-lg" name="email" id="exampleInputEmail2" placeholder="your email">
          </div><br><br>
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your Msg</label>
            <textarea  class="form-control form-control-lg" required name="msg" id="exampleInputEmail2" placeholder="your Msg" ></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-md">submit</button>
        </form>
        
        </div>
     </div>
</footer>
<p class="text-center copyright">Copyright &copy; 2017<a href="www.backtechs.com"> Backtend Technologies PVT.LTD</a>. All Rights Reserved.</p>
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
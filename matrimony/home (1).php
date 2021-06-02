<?php
include "../connect.php";
session_start();
$email=$_SESSION['myusername'];

if(!(isset($_SESSION['myusername'])&&$_SESSION['myusername']!=""))
{
header("Location:http://bhavsar.org/Matrimonial/Matrimonial%20Template%20&%20Images/temp4/temp4/www.htmlpreviews.com/cloud/badminton/credon8/index.php");	
}




?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="...">
		<meta name="keywords" content="...">
		<meta name="author" content="...">
		<title>MATRIMONY</title>
		<link rel="stylesheet" href="css/CZSale.css" type="text/css" />
        <style>
			.logo_img
			{
				width:200px;
				height:50px;
				margin-top:45px;
			}
			.event-img
			{
				width:100px;
				height:100px;
			}
		</style>
        
        <style type="text/css">
	.navi {
	width: 100%;
	margin: 5px;
	padding:2px 5px;
	border:1px solid #eee;
	}

	.show {
	color: blue;
	margin: 5px 0;
	padding: 3px 5px;
	cursor: pointer;
	font: 15px/19px Arial,Helvetica,sans-serif;
	}
	.show a {
	text-decoration: none;
	}
	.show:hover {
	text-decoration: underline;
	}


	ul.setPaginate li.setPage{
	padding:15px 10px;
	font-size:14px;
	}

	ul.setPaginate{
	margin:0px;
	padding:0px;
	height:100%;
	overflow:hidden;
	font:12px 'Tahoma';
	list-style-type:none;	
	}  

	ul.setPaginate li.dot{padding: 3px 0;}

	ul.setPaginate li{
	float:left;
	margin:0px;
	padding:0px;
	margin-left:5px;
	}



	ul.setPaginate li a
	{
	background: none repeat scroll 0 0 #ffffff;
	border: 1px solid #cccccc;
	color: #999999;
	display: inline-block;
	font: 15px/25px Arial,Helvetica,sans-serif;
	margin: 5px 3px 0 0;
	padding: 0 5px;
	text-align: center;
	text-decoration: none;
	}	

	ul.setPaginate li a:hover,
	ul.setPaginate li a.current_page
	{
	background: none repeat scroll 0 0 #0d92e1;
	border: 1px solid #000000;
	color: #ffffff;
	text-decoration: none;
	}

	ul.setPaginate li a{
	color:black;
	display:block;
	text-decoration:none;
	padding:5px 8px;
	text-decoration: none;
	}




	</style>    
	</head>
	<body>
		<div class="container wrapper">   
			<?php include "header.php";?>
			<div class="row content">
				<?php include "menubar.php"; ?>
				<div class="col-lg-9 content-right">
					<div class="col-lg-12">
                    
                    	<div class="thumbnail" style="height:220px">
                        <h4 align="center"> Search Your Life Parner</h4><hr>
							<form action="search.php" method="post">
                            	<div class="col-lg-6">
                                <div class="col-lg-5">
                                	Marriage Status :
                                </div>
                                <div class="col-lg-7">
                            	<select class="form-control" name="marriageType"> 
                                    <option></option>
                                        <option>Never married</option>
                                        <option>Divorce</option>
                                        <option>Widow</option>
                                        <option>Widower</option>
                                    </select>
                                    </div>
                                    <br>
                                   <div class="col-lg-5"> 
                                    Age :
                                   </div>
                                   <div class="col-lg-7">
                             <table>
                             <tr>
                             <td>
                From<select class="form-control" style="width:90px;" name="from">
            	<option></option>
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
                </td><td>&nbsp;&nbsp;&nbsp;</td><td>
                To<select class="form-control" style="width:90px;" name="to">
            	<option></option>
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
                         </table>  </div>     
                                </div>
                                <div class="col-lg-6">
                                <div class="col-lg-4">
                                Faculty :
                                </div>
                                <div class="col-lg-8">
                                <select class="form-control" id="academic_level" name="academic_level" >
                                            <option></option>
                                            <option>Undergraduate</option>
                                            <option>Diploma</option>
                                            <option>Art</option>
                                            <option>Commerce</option>
                                            <option>Science</option>
                                            <option>Post Graduation</option>
                                      </select>
                                      </div>
                                <br><br>
                                <div class="col-lg-4">
                                State :
                                </div>
                                <div class="col-lg-8">
                            	<select class="form-control " name="states" >
                                    <option></option>
                                    <?php 
											 $show1=mysqli_query($conn,"select DISTINCT state from city ORDER BY state  ASC");
														
												while($rw1=mysqli_fetch_array($show1))
													{ 
													echo"<option  value='".$rw1['state']."'>"; echo $rw1['state']; echo"</option>";
													}
														
									   ?>
                                </select><br>
                               </div>
                               
                                </div>
                                <center>
                                <button type="submit" name="submit" class="btn btn-danger" style="border:none;">Submit</button>
                            	</center>
                            </form>
						</div>
                    </div>
                    
                    
                    
                    <!---------------------->
                    
                    <div class="col-lg-12"  >
					<div class="row selected-classifieds">
                     <div class="navi">
                      <?php
					   $email;
					  $show_gender=mysqli_query($conn,"select * from matrimonialall where email='$email' and is_del='no'   ") or die(mysqli_error($conn));
										while($row_gender=mysqli_fetch_array($show_gender))
										{
											 $gender_1=$row_gender['gender'];
										
				?>
                <div class="show">
                <?php										
								
											
					  if($gender_1=='Bride')
					  {
						  		$start=0;
								$limit=10;
								
								if(isset($_GET['id']))
								{
								$id=$_GET['id'];
								$start=($id-1)*$limit;
								}
								
						  $show_b=mysqli_query($conn,"select * from matrimonialall where gender='Groom' and is_del='no' LIMIT $start, $limit ") or die(mysqli_error($conn));
										
										$image_mime_type="image/png|image/jpeg|image/gif";
										
										while($row_b=mysqli_fetch_array($show_b))
										{
												
											 '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row_b['profile_pic']).'" 
											 style="width:100px; height=100px" />';
										$first_name=$row_b['first_name'];
										$last_name=$row_b['last_name'];
										$city=$row_b['city'];
										$states=$row_b['states'];
				   	?>
						<div  >
							<div class="thumbnail" style="width:200px">
								<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_b['profile_pic']).'"  style="width:150px; height:150px;"/>';?>
								<div class="caption"><hr>
									<h4><?php echo"<a href=search_view.php?id=".$row_b['unique_id']." >". $first_name." ".$last_name."</a>"; ?></h4>
                                    <h5><?php echo $city; ?></h5>
									<p class="price"><?php echo $states; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_b['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
                      
						<?php
						
						echo'<hr>';
$rows=mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where gender='Groom' and is_del='no'  "));
$total=ceil($rows/$limit);
echo'<table>';
if($id>1)
{
/*echo'&nbsp;&nbsp;&nbsp;';
echo "<a href='?id=".($id-1)."' class='button'><b>PREVIOUS</b></a>";
echo'&nbsp;&nbsp;&nbsp;';
echo'|';
*/}

if($id!=$total)
{
/*echo'&nbsp;&nbsp;&nbsp;';
echo "<a href='?id=".($id+1)."' class='button'><b>NEXT</b></a>";
echo'&nbsp;&nbsp;&nbsp;';
*/
}

echo'&nbsp;&nbsp;&nbsp;' ; 

echo "<tr class='page'>";
for($i=1;$i<=$total;$i++)
{
if($i==$id) { echo "<button class=btn btn-warning>".$i."</button>"; 
echo'&nbsp;&nbsp;&nbsp;';
}
else 
{ 
echo "<a href='?id=".$i."'><button class=btn btn-warning>".$i."</a></button> ";  echo'&nbsp;&nbsp;&nbsp;' ; 
}
}

echo "</tr>";
echo'</table>';



						
				}

				
 
					  }
					  else
					  {
						 		$start=0;
								$limit=10;
								
								if(isset($_GET['id']))
								{
								$id=$_GET['id'];
								$start=($id-1)*$limit;
								}
								
						  $show_g=mysqli_query($conn,"select * from matrimonialall where gender='Bride' and is_del='no' LIMIT $start, $limit ") or die(mysqli_error($conn));
										
										$image_mime_type="image/png|image/jpeg|image/gif";
										
										while($row_g=mysqli_fetch_array($show_g))
										{
												
											 '<img src="data:'.$image_mime_type.';base64,'.base64_encode($row_g['profile_pic']).'" 
											 class=event-slider-img />';
										$first_name=$row_g['first_name'];
										$last_name=$row_g['last_name'];
										$city=$row_g['city'];
										$mobile_no1=$row_g['mobile_no1'];
										$states=$row_g['states'];
				   	?>
						<div class="col-lg-"  >
							<div class="thumbnail" style="width:200px" >
								<?php echo '<img src="data:'.$image_mime_type.';base64,'.base64_encode
								($row_g['profile_pic']).'" style="width:150px; height:150px;" />';?>
								<div class="caption">
									<h5><?php echo $first_name." ".$last_name; ?></h5>
                                    <h5><?php echo $city; ?></h5>
									<p class="price"><?php echo $states; ?></p>
                                    <button type="button" class="btn btn-danger" ><?php echo"<a href=search_view.php?id=".$row_g['unique_id']." >";?><span style="color:#fff">View Detail</span><?php echo "</a>"; ?></button>
								</div>
							</div>
						</div>
                      
						<?php
						
												echo'<hr>';
$rows=mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where gender='Bride' and is_del='no' "));
$total=ceil($rows/$limit);
echo'<table>';
if($id>1)
{
/*echo'&nbsp;&nbsp;&nbsp;';
echo "<a href='?id=".($id-1)."' class='button'><b>PREVIOUS</b></a>";
echo'&nbsp;&nbsp;&nbsp;';
echo'|';
*/}

if($id!=$total)
{
/*echo'&nbsp;&nbsp;&nbsp;';
echo "<a href='?id=".($id+1)."' class='button'><b>NEXT</b></a>";
echo'&nbsp;&nbsp;&nbsp;';
*/
}

echo'&nbsp;&nbsp;&nbsp;' ; 

echo "<tr class='page'>";
for($i=1;$i<=$total;$i++)
{
if($i==$id) { echo "<button class=btn btn-warning>".$i."</button>"; 
echo'&nbsp;&nbsp;&nbsp;';
}
else 
{ 
echo "<a href='?id=".$i."'><button class=btn btn-warning>".$i."</a></button> ";  echo'&nbsp;&nbsp;&nbsp;' ; 
}
}

echo "</tr>";
echo'</table>';



				}


 
					  }
					  
										}
						?>
                        </div><!---show--->
                       </div><!---navi--->
	<?php

	// Your SQL query go here. This query will display all record by setting the Limit.

	/*$sql = "SELECT * FROM city  LIMIT ".$pageLimit." , ".$setLimit;
	$query = mysqli_query($conn,$sql);

	while ($rec = mysqli_fetch_array($query)) {
	?>
	<div class="show"><a href="#<?php echo $rec["city"];?>.htm" target="_blank"><?php echo $rec['city'];?></a></div>
	<?php }	?>
	</div>

	<?php
	// Call the Pagination Function to load Pagination.
*/
	//echo displayPaginationBelow($setLimit,$page);
	?>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38304687-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
						
                        </div>
					</div>
				</div>
			</div>
			<div class="footer">
				<?php include "footer.php"; ?>
			</div>
		</div>
		<!-- JavaScript -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/CZSale.js"></script>
	</body>

</html>
<?php
include'../connect.php';
include'common_function_matrimony.php';
error_reporting(0);
?>

<html lang="en">

<?php
links();
?>
<style type="text/css">
#content
{
	margin: 0 auto;
	font-family:Arial, Helvetica, sans-serif;
}
.page
{
float: left;
   /* margin-right: 960px;*/
padding: 0;
font-size: 20px;
font-weight: bold;
}
.page li
{
	list-style: none;
	display:inline-block;
}
.page li a, .current
{
display: block;
padding: 5px;
text-decoration: underline;
color: #8A8A8A;
}
.current
{
	font-weight:bold;
	color: #000;
	background-color: #33B5E5;
}
.button
{
padding: 5px 15px;
text-decoration: none;
background: #333;
color: #F3F3F3;
font-size: 23PX;
border-radius: 2PX;
/*margin: 0 4PX;
*/display: block;
float: left;
}
</style>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
        nav();
		?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="font-family:CaviarDreams_Bold;color:#4c4743;">Search For Groom</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
			 	<div class="col-sm-12 col-md-8">
           			 <div class="form-group">
            				<form method="post" action="search_bride_groom_1.php">
								<div class="col-sm-12" style="margin-bottom:15px;">
									<div class="col-md-10" style="margin-left:-30px;display:inline-flex">
										<input type="text" class="form-control" name="search" placeholder="Search by Mobile Number/City/Payment(Yes or No)" style="font-size:20px;height: 50px;font-family: CaviarDreams;">
										<button type="submit" class="btn btn-primary"  name="submit" style="font-family:CaviarDreams_bold;border-radius: 0px;margin-left:-2px;">Search</button>
									</div>
								</div> 
                      		</form>
            		  </div>
        		 </div><!-- /.col-* -->
        	</div><!-- /.row -->
			                       
            <div class="row">
            	<div class="col-lg-12">
                	<div class="table-responsive">
						<table class="table table-condensed mb-none" border="0" cellpadding="0" cellspacing="0" style="font-family:futura_medium_bt;">
                         <?php
							$search=$_POST['search'];
							$start=0;
							$limit=10;
							
							if(isset($_GET['id']))
							{
							$id=$_GET['id'];
							$start=($id-1)*$limit;
							}
							else
							{
							$id=1;
							}
						    
							$city=$_GET['search'];
							$mobile_no1=$_GET['search'];
							$mobile_no2=$_GET['search'];
							$query=mysqli_query($conn,"select * from matrimonialall where  gender='Groom' and is_del='no' and marriageType='Never married' and ( mobile_no1 LIKE '%$search%' or mobile_no2 LIKE '%$search%' or city LIKE '%$search%' or payment LIKE '%$search%') order by first_name LIMIT $start, $limit");
						?>
						<thead style="background-color:#20282b;color:#fff;">
							<tr style="font-size:14px;">
								<th style="text-align:center;font-weight:100;">First Name</th>
								<th style="text-align:center;font-weight:100;">Middle Name</th>
								<th style="text-align:center;font-weight:100;">Last Name</th>
								<th style="text-align:center;font-weight:100;">Gender</th>
								<th style="text-align:center;font-weight:100;">Mobile Number(1)</th>
								<th style="text-align:center;font-weight:100;">Mobile Number(2)</th>
								<th style="text-align:center;font-weight:100;">Email</th>
								<th style="text-align:center;font-weight:100;">Edit Profile Photo</th>
								<th style="text-align:center;font-weight:100;">Edit Personal Information</th>
								<th style="text-align:center;font-weight:100;">Edit Family Information</th>
								<th style="text-align:center;font-weight:100;">Edit Astro Information</th>
								<th style="text-align:center;font-weight:100;">Edit Professional Information</th>
								<th style="text-align:center;font-weight:100;">Edit Gallary</th>
								<th style="text-align:center;font-weight:100;">Delete Profile</th>
								<th style="text-align:center;font-weight:100;">Payment</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($query2=mysqli_fetch_array($query))
							{
								$image_mime_type="image/png|image/jpeg|image/gif"; 
						?>
						<tr style="font-size:14px;">
							<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php echo ucfirst($query2['first_name']);?></td>
							<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#fff;"><?php echo ucfirst($query2['middle_name']);?></td>
							<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php echo ucfirst($query2['last_name']);?></td>
							<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#fff;"><?php echo $query2['gender'];?></td>
							<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php echo $query2['mobile_no1'];?></td>
							<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#fff;"><?php echo $query2['mobile_no2'];?></td>
							<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php echo $query2['email'];?></td>
							<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#fff;font-family: CaviarDreams;"><?php echo "<a href=edit_matrimony_profile_pic.php?unique_id=".$query2['unique_id']." style='color: #fff;'><input type=submit name=Edit value=Edit class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px;margin-top: 2px;'></a>";?></td>
							<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#dfe6e8;font-family: CaviarDreams;"><?php echo "<a href=edit_personal_info.php?unique_id=".$query2['unique_id']." style='color: #fff;'><input type=submit name=Edit value=Edit class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px; margin-top: 2px;'></a>";?></td>
							<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#fff;font-family: CaviarDreams;"><?php echo "<a href=edit_family_info.php?unique_id=".$query2['unique_id']." style='color: #fff;'><input type=submit name=Edit value=Edit class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px;margin-top: 2px;'></a>";?></td>
							<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#dfe6e8;font-family: CaviarDreams;"><?php echo "<a href=edit_astrology_info.php?unique_id=".$query2['unique_id']." style='color: #fff;'><input type=submit name=Edit value=Edit class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px;margin-top: 2px;'></a>";?></td>
							<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#fff;font-family: CaviarDreams;"><?php echo "<a href=edit_professional_info.php?unique_id=".$query2['unique_id']." style='color: #fff;'><input type=submit name=Edit value=Edit class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px;margin-top: 2px;'></a>";?></td>
							<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#dfe6e8;font-family: CaviarDreams;"><?php echo "<a href=show_gallary.php?unique_id=".$query2['unique_id']." style='color: #fff;'><input type=submit name=Edit value=Edit class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px;margin-top: 2px;'></a>";?></td>
							<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#fff;font-family: CaviarDreams;"><?php echo "<a href=delete_matrimony.php?unique_id=".$query2['unique_id']."&type=".str_replace(' ', '_',$query2['marriageType'])."&gender=".$query2['gender']." style='color: #fff;height: 25px;padding-top: 1px;margin-top: 2px;'><input type=submit name=Delete value=Delete class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px; margin-top: 2px;'></a>";?></td>
							<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#dfe6e8;">
							<?php
								if($query2['payment']=='Yes')
								{
									echo "Yes";
								}
								else
								{
									echo "No";
								}
							?>
							</td>
						</tr>
						<?php
						}
						?>
						</tbody>
					</table>


					<?php
						echo'<div id="content">';
						$rows=mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where  gender='Groom' and is_del='no' and marriageType='Never married' and ( mobile_no1 LIKE '%$search%' or mobile_no2 LIKE '%$search%' or city LIKE '%$search%' or payment LIKE '%$search%') order by first_name"));
						$total=ceil($rows/$limit);
						
						if($id>1)
						{
							//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
							echo "<a href='?id=".($id-1)."' class='btn btn-info'>PREV</a>";
							echo "&nbsp;";
						}
						for($i=1;$i<=$total;$i++)
						{
							if($i==$id) 
							{ 
								echo "<label class='btn' style='color:#0033FF'>".$i."</label>&nbsp;";
							}
							else 
							{  
								echo "<a class='btn' href='?id=".$i."'>".$i."&nbsp;</a>"; 
													
							}
						}
						if($id!=$total)
						{
							////Go to previous page to show next 10 items.
							echo "&nbsp;";
							echo "<a href='?id=".($id+1)."' class='btn btn-info'>NEXT</a>";
						}
					?>
                    <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

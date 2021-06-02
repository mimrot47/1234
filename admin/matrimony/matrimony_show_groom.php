<?php
include'../connect.php';
error_reporting(0);
?><html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brahmin Matrimony</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   
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
@font-face {
	font-family: futura_medium_bt;
	src: url(fonts/futura_medium_bt.ttf);
}

</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color: #f26844;height:90px;">
            <div class="navbar-header" style="background-color: #d95d3b;height:90px; width: 300px;">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../matrimony/matrimony_home.php">
					<div style="color: #fff;font-size:28px;font-family: CaviarDreams_Bold;margin: 20px 0 0 12px;">Brahmin Matrimony</div>
				</a>
			</div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
             
            </ul>
            <!-- /.navbar-top-links -->

             <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu" style="font-family:CenturyGothict; font-size:16px;">
						<li><a href="matrimony_home.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-dashboard fa-fw" style="margin-right:10px;"></i> Matrimony Dashboard</a></li>
						<li><a href="matrimony_graph.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-bar-chart" style="margin-right:10px;"></i> Matrimony Graph</a></li>
						<li>
							<a href="#" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-th-large fa-fw" style="margin-right:10px;"></i> Matrimony<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level" style="color:#337ab7;">
								<li>
								<a href="matrimony_show_bride.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-female" style="font-size: 25px; margin-right:10px;"></i>  &nbsp;Bride Matrimony</a>
								</li>
								<li>
								<a href="matrimony_show_groom.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-male" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Groom Matrimony</a>
								</li>
								<li>
								<a href="matrimony_show_divorce_bride.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-female" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Bride Divorce Matrimony</a>
								</li>
								<li>
								<a href="matrimony_show_divorce_groom.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-male" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Groom Divorce Matrimony</a>
								</li>
								<li>
								<a href="matrimony_show_widow_bride.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-female" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Bride Widow Matrimony</a>
								</li>
								<li>
								<a href="matrimony_show_widow_groom.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-male" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Groom Widower Matrimony</a>
								</li>
								<li>
								<a href="matrimony_testimonial.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-check" style="font-size: 20px;margin-right:5px;"></i>  &nbsp;Testimonial</a>
								</li>
								
								<li>
								<a href="success_stories.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-book" style="font-size: 20px;margin-right:5px;"></i>  &nbsp;Add Success Stories</a>
								</li>
								
								<li>
								<a href="success_stories_show.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-usd" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Show Success Stories</a>
								</li>
								 <li>
									<a  href="matrimony_contact.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-lightbulb-o" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Show Suggestion</a>
								</li>
								 <li>
									<a  href="state.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-bank" style="font-size: 15px;margin-right:10px;"></i>  &nbsp;Add State</a>
								</li>
								 <li>
									<a  href="show_states.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-th-list" style="font-size: 15px;margin-right:10px;"></i>  &nbsp;Show State</a>
								</li>
								 <li>
									<a  href="state_city.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-futbol-o" style="font-size: 18px;margin-right:10px;"></i>  &nbsp;Add City</a>
								</li>
								 <li>
									<a  href="show_state_citys.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-list" style="font-size: 15px;margin-right:10px;"></i>  &nbsp;Show City</a>
								</li>
							</ul>
							<li>
								  <a href="change_username.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-user" style="margin-right:10px;"></i> Change Username</a>
							</li>
							<li>
								  <a href="change_password.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-key" style="margin-right:10px;"></i> Change Password</a>
							</li>
							<li>
								 <a href="../logout.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-sign-out fa-fw" style="margin-right:10px;"></i> Logout</a>
							</li>
					   </ul>
                  <div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                     <h1 class="page-header" style="font-family:CaviarDreams_Bold;color:#4c4743;">Groom Never Married</h1>
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
   			</div>
			
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                   
                           <div class="table-responsive">
                               <table class="table table-condensed mb-none" border="0" cellpadding="0" cellspacing="0" style="font-family:futura_medium_bt;">
                               <?php
									$start=0;
									$limit=20;
									
									if(isset($_GET['id']))
									{
									$id=$_GET['id'];
									$start=($id-1)*$limit;
									}
									else
									{
										$id=1;
									}
								
									$query=mysqli_query($conn,"select * from matrimonialall where gender='Groom' and is_del='no' and marriageType='Never married' order by first_name LIMIT $start, $limit ");
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
								$rows=mysqli_num_rows(mysqli_query($conn,"select * from matrimonialall where gender='Groom' and is_del='no' and marriageType='Never married' order by first_name"));
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
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
         
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

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>

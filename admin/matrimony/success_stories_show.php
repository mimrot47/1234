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
	width: 900px;
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
                    <h1 class="page-header" style="font-family:CaviarDreams_Bold;color:#4c4743;">Success Stories of Matrimony</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
       			 <div class="col-sm-12 col-md-8">
           			 <div class="form-group">
            				<form method="post" action="search_success_stories.php">
								<div class="col-sm-12" style="margin-bottom:15px;">
									<div class="col-md-10" style="margin-left:-30px;display:inline-flex">
										<input type="text" class="form-control" name="search" placeholder="Search by Search by Bride/Groom Name" style="font-size:20px;height: 50px;font-family: CaviarDreams;">
										<button type="submit" class="btn btn-primary"  name="submit" style="font-family:CaviarDreams_bold;border-radius: 0px;margin-left:-2px;">Search</button>
									</div>
								</div> 
                      		</form>
            		  </div>
        		 </div><!-- /.col-* -->
   			</div>
           
            <div class="row">
            	<div class="col-lg-12">
                	<div class="table-responsive">   
						<table class="table table-condensed mb-none" border="0" cellpadding="0" cellspacing="0" style="font-family:futura_medium_bt;">
							<?php
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
								
								 $show1=mysqli_query($conn,"select * from success_stories where is_del='no' order by bride_name LIMIT $start, $limit ");
							?>
							<thead style="background-color:#20282b;color:#fff;">
								<tr style="font-size:14px;">
									<th style="text-align:center;font-weight:100;width:100px;">Bride Name</th>
									<th style="text-align:center;font-weight:100;width:100px;">Groom Name</th>
									<th style="text-align:center;font-weight:100;width:120px;">Marriage Date</th>
									<th style="text-align:center;font-weight:100;">Heading</th>
									<th style="text-align:center;font-weight:100;">Photo</th>
									<th style="text-align:center;font-weight:100;">Description</th>
									<th style="text-align:center;font-weight:100;">State</th>
									<th style="text-align:center;font-weight:100;">City</th>
									<th style="text-align:center;font-weight:100;width: 100px;">Edit Action</th>
									<th style="text-align:center;font-weight:100;width: 100px;">Delete Action</th>
								</tr>
							</thead>
							<tbody>
							<?php    
								while($row=mysqli_fetch_array($show1))
								{
								$image_mime_type="image/png|image/jpeg|image/gif"; 
							?>
								<tr style="font-size:14px;">
									<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php echo ucfirst($row['bride_name']);?></td>
									<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#fff;"><?php echo ucfirst($row['groom_name']);?></td>
									<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php echo $row['marriage_date'];?></td>
									<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#fff;"><?php echo ucfirst($row['ss_heading']);?></td>
									<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php $photo=$row['photo'];echo  '<img src="matrimony_success_img/'. $photo.'" height="50" width="50" style="border-radius:50%">';?></td>
									<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#fff;"><?php echo ucfirst($row['ss_desc']);?></td>
									<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php echo $row['state'];?></td>
									<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#fff;"><?php echo ucfirst($row['city']);?></td>
									<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php echo "<a href=edit_success_stories_show.php?id=".$row['id']." style='color: #fff;'><input type=submit name=Edit value=Edit class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px;margin-top: 2px;color:#fff;'></a>";?></td>
									<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#fff;"><?php echo "<a href=delete_success_stories.php?id=".$row['id']." style='color: #fff;'><input type=submit name=Delete value=Delete class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px;margin-top: 2px;color:#fff;'></a>";?></td>
								</tr>
							<?php
							}
							?>
							</tbody>
						</table>
						<?php
							$rows=mysqli_num_rows(mysqli_query($conn,"select * from success_stories where is_del='no' order by bride_name "));
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

<?php
include'../connect.php';
error_reporting(0);
include'common_function_matrimony.php';
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
                    <h1 class="page-header" style="font-family:CaviarDreams_Bold;color:#4c4743;">Show State</h1>
                </div>
                <!-- /.col-lg-12 -->
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
              				?>
							<thead style="background-color:#20282b;color:#fff;">
								<tr style="font-size:14px;">
									<th style="text-align:left;font-weight:100;padding-left:10px;">State</th>
									<th style="text-align:center;font-weight:100;">Edit Action</th>
									<th style="text-align:center;font-weight:100;">Delete Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$show1=mysqli_query($conn,"select * from state where is_del='approved' order by state LIMIT $start, $limit");
									while($row=mysqli_fetch_array($show1))
									{
								?>
								<tr style="font-size:14px;">
										<td style="text-align:left;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php echo ($row['state']);?></td>
										<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#fff;"><?php echo "<a href=edit_state.php?id=".$row['id']." style='color: #fff;'><input type=submit name=Edit value=Edit class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px;margin-top: 2px;color:#fff;'></a>";?></td>
										<td style="text-align:center;font-weight:100;padding-left:10px; background-color:#dfe6e8;"><?php echo "<a href=delete_state.php?id=".$row['id']." style='color: #fff;'><input type=submit name=Delete value=Delete class=btn btn-warning style='background-color:#00a0e3;height: 25px;padding-top: 1px;margin-top: 2px;color:#fff;'></a>";?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<?php
						$rows=mysqli_num_rows(mysqli_query($conn,"select * from state where is_del='approved' order by state "));
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
                    <!-- /.panel -->
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

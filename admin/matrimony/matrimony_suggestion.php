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
                    <h1 class="page-header">Suggestion Matrimony</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
              
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                         
                            <div class="row">
                           
                                <div class="col-lg-12">
                                    
								 
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
		
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

                                echo'<th>';
                                echo' Email';
                                echo'</th>';
								
								echo'<th>';
                                echo'Message';
                                echo'</th>';
                              
							  	echo'<th>';
                                echo'Delete Action';
                                echo'</th>';
						
						$show1=mysqli_query($conn,"select * from suggestions order by email LIMIT $start, $limit ");
						
						$image_mime_type="image/png|image/jpeg|image/gif"; 
						
                            while($row=mysqli_fetch_array($show1))
                            {
			
                                 
                            echo "<tr><td>"	;
                       	
							echo $row['email'];
                            echo "</td><td>";
							
                            echo $row['msg'];
                            echo "</td><td>";
							
							echo "<a href=delete_matrimony_suggestion.php?id=".$row['id']."><input type=submit name=Delete value=Delete class=btn btn-danger></a>";
                            echo "</td></tr>";
                            
							}
							
							$rows=mysqli_num_rows(mysqli_query($conn,"select * from suggestions order by email"));
							$total=ceil($rows/$limit);
							echo'<table>';
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
							echo'</table>';



                            ?>
                        
                            	</table>
                                   
                              
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            
                            <!-- /.row (nested) -->
                        </div>
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

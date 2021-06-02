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

    <title>Bhavsar.Org|Matrimony</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../admin_home.php">Bhavsar.Org</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
             
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            
                           
                        </li>
                        <li>
                            <a href="matrimony_home.php"><i class="fa fa-dashboard fa-fw"></i>Matrimony Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-th-large fa-fw"></i> Matrimony<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="matrimony_show_bride.php">Bride Matrimony</a>
                                </li>
                                <li>
                                    <a href="matrimony_show_groom.php">Groom Matrimony</a>
                                </li>
                                <li>
                                    <a href="matrimony_divorce.php">Divorce Matrimony</a>
                                </li>
                                <li>
                                    <a href="matrimony_widow.php">Widow Matrimony</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="matrimony_testimonial.php"><i class="fa fa-list fa-fw"></i> Testimonial</a>
                        </li>
                        
                        <li>
                            <a href="success_stories.php"><i class="fa fa-handshake-o fa-fw"></i> Success Stories</a>
                        </li>
                        
                         <li>
                            <a href="success_stories_show.php"><i class="fa fa-handshake-o fa-fw"></i>Show Success Stories</a>
                        </li>
                        
                       <li>
                           			 <a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        		 </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Matrimony Widow</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
            <!--<div class="row">
       			 <div class="col-sm-12 col-md-4">
           			 <div class="form-group">
            				<form method="post" action="search_bride_groom.php">
                      		      <input type="text" class="form-control" name="search" placeholder="Search by Gender/State/City">
                       			  <button type="submit" class="btn btn-primary" style="margin-left: 342px;margin-top: -34px;" name="submit">Search</button>
             				 </form>
            		  </div>
        		 </div>
   			</div>-->
            
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Widow
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                
                                <?php

								$start=0;
								$limit=10;
								
								if(isset($_GET['id']))
								{
								$id=$_GET['id'];
								$start=($id-1)*$limit;
								}
								
								$query=mysqli_query($conn,"select * from matrimonial_widow LIMIT $start, $limit");

 								echo'<thead>'; 

                                echo'<th>';
                                echo' previous_marriage_date_widow';
                                echo'</th>';
								
								echo'<th>';
                                echo'date_partner_death_widow';
                                echo'</th>';
								
								echo'<th>';
                                echo'child_status_widow';
                                echo'</th>';
								
								echo'<th>';
                                echo'previous_marriage_address_widow';
                                echo'</th>';
								
                                echo'<th>';
                                echo'Edit Action';
                                echo'</th>';
								
								echo'<th>';
                                echo'Delete Action';
                                echo'</th>';
								echo'  </thead>';

								while($query2=mysqli_fetch_array($query))
								{
									
								$image_mime_type="image/png|image/jpeg|image/gif"; 
						
							echo'<tbody>';	
							
							echo "<tr><td>";
                       	
							echo $query2['previous_marriage_date_widow'];
                            echo "</td><td>";
							
                            echo $query2['date_partner_death_widow'];
                            echo "</td><td>";
							
							echo $query2['child_status_widow'];
                            echo "</td><td>";
							
                            echo $query2['previous_marriage_address_widow'];
                            echo "</td><td>";
							
                            
                            echo "<a href=edit_matrimony_widow.php?unique_id=".$query2['unique_id']."><input type=submit name=Edit value=Edit class=btn btn-warning></a>";
							echo "</td><td>";
							
                            echo "<a href=delete_widow.php?unique_id=".$query2['unique_id']."><input type=submit name=Delete value=Delete class=btn btn-danger></a>";
                            echo "</td></tr>";	
                             
							echo'   </tbody>';
                            
							


}
//echo "</table>";
echo'<hr>';
$rows=mysqli_num_rows(mysqli_query($conn,"select * from matrimonial_widow"));
$total=ceil($rows/$limit);
echo'<table>';
if($id>1)
{
echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
}
if($id!=$total)
{
echo "<a href='?id=".($id+1)."' class='button'><b>NEXT</b></a>";
}



echo "<tr class='page'>";
for($i=1;$i<=$total;$i++)
{
	
if($i==$id) { echo "<td class='current'>".$i."</>"; echo'&nbsp;&nbsp;&nbsp;'; }

else { echo "<td><a href='?id=".$i."'>".$i."</a></td>"; }
}
echo "</tr>";
echo'</table>';

?>
                                   
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            </div>	
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
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

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

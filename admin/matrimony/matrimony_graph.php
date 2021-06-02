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
display: block;
float: left;
}
</style>

<body>

    <div id="wrapper">

        <!-- Navigation -->
      <?php
      nav();
	  ?>

        <div id="page-wrapper" style="height:100%">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="font-family:CaviarDreams_Bold;color:#4c4743;">Matrimony Graph</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
           		<div class="row-fluid sortable" style="margin-left: 15px;">
				<div class="box">
				<style>
				#chartdiv {
				  width: 100%;
				  height: 435px;
				  font-size: 11px;
				}
				</style>
				<!-- Resources -->
				<script src="lib/jquery.min.js"></script>
				<script src="lib/amcharts.js"></script>
				<script src="lib/serial.js"></script>
				<script src="lib/light.js"></script>
				<?php
					if(isset($_REQUEST['year']))
					{	
						$year=$_REQUEST['year'];
						$jan = "created_on>='".$year."-01-01' and created_on<='".$year."-01-31 23:59:59'";
						if(($year%4)==0)
						{
							$feb = "created_on>='".$year."-02-01' and created_on<='".$year."-02-29 23:59:59'";
						}
						else
						{
							$feb = "created_on>='".$year."-02-01' and created_on<='".$year."-02-28 23:59:59'";
						}
						$mar = "created_on>='".$year."-03-01' and created_on<='".$year."-03-31 23:59:59'";
						$apr = "created_on>='".$year."-04-01' and created_on<='".$year."-04-30 23:59:59'";
						$may = "created_on>='".$year."-05-01' and created_on<='".$year."-05-31 23:59:59'";
						$jun = "created_on>='".$year."-06-01' and created_on<='".$year."-06-30 23:59:59'";
						$jul = "created_on>='".$year."-07-01' and created_on<='".$year."-07-31 23:59:59'";
						$aug = "created_on>='".$year."-08-01' and created_on<='".$year."-08-31 23:59:59'";
						$sep = "created_on>='".$year."-09-01' and created_on<='".$year."-09-30 23:59:59'";
						$oct = "created_on>='".$year."-10-01' and created_on<='".$year."-10-31 23:59:59'";
						$nov = "created_on>='".$year."-11-01' and created_on<='".$year."-11-30 23:59:59'";
						$dec = "created_on>='".$year."-12-01' and created_on<='".$year."-12-31 23:59:59'";
						
						$jan1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$jan."and payment='Yes'"));
						$feb1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$feb."and payment='Yes'"));
						$mar1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$mar."and payment='Yes'"));
						$apr1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$apr."and payment='Yes'"));
						$may1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$may."and payment='Yes'"));
						$jun1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$jun."and payment='Yes'"));
						$jul1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$jul."and payment='Yes'"));
						$aug1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$aug."and payment='Yes'"));
						$sep1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$sep."and payment='Yes'"));
						$oct1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$oct."and payment='Yes'"));
						$nov1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$nov."and payment='Yes'"));
						$dec1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$dec."and payment='Yes'"));
					}
					else
					{
						$year=date('Y');
						$jan = "created_on>='".$year."-01-01' and created_on<='".$year."-01-31 23:59:59'";
						if(($year%4)==0)
						{
							$feb = "created_on>='".$year."-02-01' and created_on<='".$year."-02-29 23:59:59'";
						}
						else
						{
							$feb = "created_on>='".$year."-02-01' and created_on<='".$year."-02-28 23:59:59'";
						}
						$mar = "created_on>='".$year."-03-01' and created_on<='".$year."-03-31 23:59:59'";
						$apr = "created_on>='".$year."-04-01' and created_on<='".$year."-04-30 23:59:59'";
						$may = "created_on>='".$year."-05-01' and created_on<='".$year."-05-31 23:59:59'";
						$jun = "created_on>='".$year."-06-01' and created_on<='".$year."-06-30 23:59:59'";
						$jul = "created_on>='".$year."-07-01' and created_on<='".$year."-07-31 23:59:59'";
						$aug = "created_on>='".$year."-08-01' and created_on<='".$year."-08-31 23:59:59'";
						$sep = "created_on>='".$year."-09-01' and created_on<='".$year."-09-30 23:59:59'";
						$oct = "created_on>='".$year."-10-01' and created_on<='".$year."-10-31 23:59:59'";
						$nov = "created_on>='".$year."-11-01' and created_on<='".$year."-11-30 23:59:59'";
						$dec = "created_on>='".$year."-12-01' and created_on<='".$year."-12-31 23:59:59'";
						
						$jan1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$jan."and payment='Yes'"));
						$feb1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$feb."and payment='Yes'"));
						$mar1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$mar."and payment='Yes'"));
						$apr1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$apr."and payment='Yes'"));
						$may1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$may."and payment='Yes'"));
						$jun1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$jun."and payment='Yes'"));
						$jul1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$jul."and payment='Yes'"));
						$aug1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$aug."and payment='Yes'"));
						$sep1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$sep."and payment='Yes'"));
						$oct1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$oct."and payment='Yes'"));
						$nov1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$nov."and payment='Yes'"));
						$dec1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE ".$dec."and payment='Yes'"));
					}
					$total = $jan1[0]+$feb1[0]+$mar1[0]+$apr1[0]+$may1[0]+$jun1[0]+$jul1[0]+$aug1[0]+$sep1[0]+$oct1[0]+$nov1[0]+$dec1[0];
					$total_member = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM `matrimonialall` WHERE payment='Yes'"));
				?>
				<div class="body collapse in">
					<div class="row">
						<div class="col-lg-12" style="font-family:futura_medium_bt;">
							<form name="graph_form" id="graph_form" action="matrimony_graph.php"  method="post" enctype="multipart/form-data" class="form-horizontal">	
								<table width="1050px" style="font-family:futura_medium_bt;">
									<tr>
										<th width="558">Total Registered Member : <?php echo $total_member[0]; ?></th>
										<td width="25"></td>
										<th width="700">Total Registered Member in <?php if($year!=''){echo $year;}else{echo date('Y');}?> : <?php echo $total;?></th>
										<td width="25"></td>
									  	<th width="158" style="text-align:right"> Year </th>
										<td width="53"><strong>&nbsp;&nbsp;&nbsp;: </strong></td>
										<td width="194">
											<select name="year" id="year" class="form-control" onChange="graph();">
												<!--<option value=" ">--Select--</option>-->
												<?php 
												for($i=2001;$i<=2100;$i++)
												{
												?>
												<option value="<?php echo $i;?>"<?php if($year==$i) echo "selected";?>><?php echo $i;?></option>
												<?php 
												}
												?>
											</select>
									  </td>
									  <td width="435"></td>
									</tr>
								</table>
								<div id="chartdiv" style="font-family:futura_medium_bt;"></div>
								<div class="container-fluid" style="margin-top:50px;">
									<div class="row text-center" style="overflow:hidden;">
										<div class="col-sm-3" style="float: none !important;display: inline-block;">
											<label class="text-left">Top Radius:</label>
											<input class="chart-input" data-property="topRadius" type="range" min="0" max="1.5" value="1" step="0.01" />
										</div>
										<div class="col-sm-3" style="float: none !important;display: inline-block;">
											<label class="text-left">Angle:</label>
											<input class="chart-input" data-property="angle" type="range" min="0" max="89" value="30" step="1" />
										</div>
										<div class="col-sm-3" style="float: none !important;display: inline-block;">
											<label class="text-left">Depth:</label>
											<input class="chart-input" data-property="depth3D" type="range" min="1" max="120" value="40" step="1" />
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				 </div>
				<script>
				var chart = AmCharts.makeChart("chartdiv", {
				  "type": "serial",
				  "startDuration": 2,
				  "dataProvider": [{
					"partno": "Jan",
					"visits": <?php if($jan1[0] == ''){ echo "0"; } else {echo $jan1[0];}?>,
					"color": "#FF0F00"
				  }, {
					"partno": "Feb",
					"visits": <?php if($feb1[0] == ''){ echo "0"; } else {echo $feb1[0];}?>,
					"color": "#FCD202"
				  },{
					"partno": "Mar",
					"visits": <?php if($mar1[0] == ''){ echo "0"; } else {echo $mar1[0];}?>,
					"color": "#04D215"
				  }, {
					"partno": "Apr",
					"visits": <?php if($apr1[0] == ''){ echo "0"; } else {echo $apr1[0];}?>,
					"color": "#2A0CD0"
				  }, {
					"partno": "May",
					"visits": <?php if($may1[0] == ''){ echo "0"; } else {echo $may1[0];}?>,
					"color": "#33cc00"
				  }, {
					"partno": "Jun",
					"visits": <?php if($jun1[0] == ''){ echo "0"; } else {echo $jun1[0];}?>,
					"color": "#ff3300"
				  }, {
					"partno": "Jul",
					"visits": <?php if($jul1[0] == ''){ echo "0"; } else {echo $jul1[0];}?>,
					"color": "#996633"
				  }, {
					"partno": "Aug",
					"visits": <?php if($aug1[0] == ''){ echo "0"; } else {echo $aug1[0];}?>,
					"color": "#006600"
				  }, {
					"partno": "Sep",
					"visits": <?php if($sep1[0] == ''){ echo "0"; } else {echo $sep1[0];}?>,
					"color": "#ffff00"
				  }, {
					"partno": "Oct",
					"visits": <?php if($oct1[0] == ''){ echo "0"; } else {echo $oct1[0];}?>,
					"color": "#33ccff"
				  }, {
					"partno": "Nov",
					"visits": <?php if($nov1[0] == ''){ echo "0"; } else {echo $nov1[0];}?>,
					"color": "#99ccff"
				  },{
					"partno":  "Dec",
					"visits": <?php if($dec1[0] == ''){ echo "0"; } else {echo $dec1[0];}?>,
					"color": "#CD0D74"
				  }],
				  "valueAxes": [{
					"position": "left",
					"axisAlpha": 0,
					"gridAlpha": 0
				  }],
				  "graphs": [{
					"balloonText": "[[category]]: <b>[[value]]</b>",
					"colorField": "color",
					"fillAlphas": 0.85,
					"lineAlpha": 0.1,
					"type": "column",
					"topRadius": 1,
					"valueField": "visits"
				  }],
				  "depth3D": 40,
				  "angle": 30,
				  "chartCursor": {
					"categoryBalloonEnabled": false,
					"cursorAlpha": 0,
					"zoomable": false
				  },
				  "categoryField": "partno",
				  "categoryAxis": {
					"gridPosition": "start",
					"axisAlpha": 0,
					"gridAlpha": 0
				
				  },
				  "exportConfig": {
					"menuTop": "20px",
					"menuRight": "20px",
					}
				}, 0);
				
				jQuery('.chart-input').off().on('input change', function() {
				  var property = jQuery(this).data('property');
				  var target = chart;
				  chart.startDuration = 0;
				
				  if (property == 'topRadius') {
					target = chart.graphs[0];
				  }
				
				  target[property] = this.value;
				  chart.validateNow();
				});
				</script>
				
				<script>
				function graph()
				{
					$('#graph_form').submit();
				}
				</script>
               
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
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#year").select2({
		});
	});
</script>
</body>

</html>

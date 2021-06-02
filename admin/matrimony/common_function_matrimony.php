<?php
include'../connect.php';

function links()
{
?><head>
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

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

<?php
}
function nav()
{
?>
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
	<ul class="nav navbar-top-links navbar-right"></ul>
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
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'matrimony_show_bride.php')) { echo "class='active'"; } ?> href="matrimony_show_bride.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-female" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Bride Matrimony</a>
					</li>
					<li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'matrimony_show_groom.php')) { echo "class='active'"; } ?> href="matrimony_show_groom.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-male" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Groom Matrimony</a>
					</li>
					<li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'matrimony_show_divorce_bride.php')) { echo "class='active'"; } ?> href="matrimony_show_divorce_bride.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-female" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Bride Divorce Matrimony</a>
					</li>
					<li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'matrimony_show_divorce_groom.php')) { echo "class='active'"; } ?> href="matrimony_show_divorce_groom.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-male" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Groom Divorce Matrimony</a>
					</li>
					<li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'matrimony_show_widow_bride.php')) { echo "class='active'"; } ?> href="matrimony_show_widow_bride.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-female" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Bride Widow Matrimony</a>
					</li>
					<li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'matrimony_show_widow_groom.php')) { echo "class='active'"; } ?> href="matrimony_show_widow_groom.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-male" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Groom Widower Matrimony</a>
					</li>
					<li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'matrimony_testimonial.php')) { echo "class='active'"; } ?> href="matrimony_testimonial.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-check" style="font-size: 25px;margin-right:5px;"></i>  &nbsp;Testimonial</a>
					</li>
					<li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'success_stories.php')) { echo "class='active'"; } ?> href="success_stories.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-book" style="font-size: 25px;margin-right:5px;"></i>  &nbsp;Add Success Stories</a>
					</li>
					
					 <li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'success_stories_show.php')) { echo "class='active'"; } ?> href="success_stories_show.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-usd" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Show Success Stories</a>
					</li>
					
					 <li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'matrimony_contact.php')) { echo "class='active'"; } ?> href="matrimony_contact.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-lightbulb-o" style="font-size: 25px;margin-right:10px;"></i>  &nbsp;Show Suggestion</a>
					</li>
					 <li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'state.php')) { echo "class='active'"; } ?> href="state.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-bank" style="font-size: 15px;margin-right:10px;"></i>  &nbsp;Add State</a>
					</li>
					 <li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'show_states.php')) { echo "class='active'"; } ?> href="show_states.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-th-list" style="font-size: 15px;margin-right:10px;"></i>  &nbsp;Show State</a>
					</li>
					 <li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'state_city.php')) { echo "class='active'"; } ?> href="state_city.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-futbol-o" style="font-size: 18px;margin-right:10px;"></i>  &nbsp;Add City</a>
					</li>
					 <li>
						<a <?php if (false !== strpos($_SERVER['REQUEST_URI'], 'show_state_citys.php')) { echo "class='active'"; } ?> href="show_state_citys.php" style="padding: 15px 15px; color: #337ab7;"><i class="fa fa-list" style="font-size: 15px;margin-right:10px;"></i>  &nbsp;Show City</a>
					</li>
				</ul>
			<!-- /.nav-second-level -->
			</li>
			
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
		<!-- /.nav-second-level -->
	 </div>
	</div>
</nav>
<?php
}
?>
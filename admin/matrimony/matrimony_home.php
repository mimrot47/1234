<?php 
include'common_function_matrimony.php';
?>
<html lang="en">
<?php
links();
?>
<style>
.circle
{
	background: #fbfbfb;
    border-radius: 100%;
    height: 150px;
    width: 150px;
    position: absolute;
    top: 50px;
    left: 45px;
}
</style>
<body>
	<div id="wrapper">
	<?php nav(); ?>
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12" style="margin-bottom:50px;margin-top:20px;">
					<h1 class="page-header" style="font-family:CaviarDreams_Bold;margin-left:70px;color:#4c4743;">Welcome to Matrimony</h1>
				</div>
				<div class="row">
					<div class="col-lg-12" style="margin-left:70px;color:#4c4743;">
						<div class="col-lg-2" style="margin-right: 35px;">
							<a href="matrimony_show_bride.php">
								<div class="col-lg-2" style="height:250px; width:250px; background-color:#fd8c3c;margin-right: 35px;">
									<div class="circle">
										<i class="fa fa-female" style="font-size:75px;color:#fd8c3c;margin-top:36px;margin-left:46px;"></i>
									</div>
								</div>
							</a>
							<p style="font-family:CaviarDreams_Bold;text-align:center; font-size:22px;padding-top:280px;">Bride</p>
						</div>
						<div class="col-lg-2" style="margin-right: 35px;">
							<a href="matrimony_show_divorce_bride.php">
								<div class="col-lg-2" style="height:250px; width:250px; background-color:#eb6c4c;margin-right: 35px;">
									<div class="circle">
										<i class="fa fa-female" style="font-size:75px;color:#eb6c4c;margin-top:36px;margin-left:50px;"></i>
									</div>
								</div>
							</a>
							<p style="font-family:CaviarDreams_Bold;text-align:center; font-size:22px;padding-top:280px;">Bride Divorcee</p>
						</div>
						<div class="col-lg-2" style="margin-right: 35px;">
							<a href="matrimony_show_widow_bride.php">
								<div class="col-lg-2" style="height:250px; width:250px; background-color:#bf9e73;margin-right: 35px;">
									<div class="circle">
										<i class="fa fa-female" style="font-size:75px;color:#bf9e73;margin-top:36px;margin-left:50px;"></i>
									</div>
								</div>
							</a>
							<p style="font-family:CaviarDreams_Bold;text-align:center; font-size:22px;padding-top:280px;">Bride Widow</p>
						</div>
						<div class="col-lg-2" style="margin-right: 35px;">
							<a href="success_stories.php">
								<div class="col-lg-2" style="height:250px; width:250px; background-color:#a23b3f;margin-right: 35px;">
									<div class="circle">
										<i class="fa fa-book" style="font-size:75px;color:#a23b3f;margin-top:36px;margin-left:40px;"></i>
									</div>
								</div>
							</a>
							<p style="font-family:CaviarDreams_Bold;text-align:center; font-size:22px;padding-top:280px;">Add Success Stories</p>
						</div>
						<div class="col-lg-2" style="margin-right: 35px;">
							<a href="matrimony_testimonial.php">
								<div class="col-lg-2" style="height:250px; width:250px; background-color:#d34539;margin-right: 35px;">
									<div class="circle">
										<i class="fa fa-check" style="font-size:75px;color:#d34539;margin-top:36px;margin-left:40px;"></i>
									</div>
								</div>
							</a>
							<p style="font-family:CaviarDreams_Bold;text-align:center; font-size:22px;padding-top:280px;">Testimonials</p>
						</div>
					</div>
					
					<div class="col-lg-12" style="margin-left:70px;margin-top:50px;">
						<div class="col-lg-2" style="margin-right: 35px;">
							<a href="matrimony_show_groom.php">
								<div class="col-lg-2" style="height:250px; width:250px; background-color:#de9c2b;margin-right: 35px;">
									<div class="circle">
										<i class="fa fa-male" style="font-size:75px;color:#de9c2b;margin-top:36px;margin-left:50px;"></i>
									</div>
								</div>
							</a>
							<p style="font-family:CaviarDreams_Bold;text-align:center; font-size:22px;padding-top:280px;">Groom</p>
						</div>
						<div class="col-lg-2" style="margin-right: 35px;">
							<a href="matrimony_show_divorce_groom.php">
								<div class="col-lg-2" style="height:250px; width:250px; background-color:#a5bc88;margin-right: 35px;">
									<div class="circle">
										<i class="fa fa-male" style="font-size:75px;color:#a5bc88;margin-top:36px;margin-left:50px;"></i>
									</div>
								</div>
							</a>
							<p style="font-family:CaviarDreams_Bold;text-align:center; font-size:22px;padding-top:280px;">Groom Divorcee</p>
						</div>
						<div class="col-lg-2" style="margin-right: 35px;">
							<a href="matrimony_show_widow_groom.php">
								<div class="col-lg-2" style="height:250px; width:250px; background-color:#588baa;margin-right: 35px;">
									<div class="circle">
										<i class="fa fa-male" style="font-size:75px;color:#588baa;margin-top:36px;margin-left:50px;"></i>
									</div>
								</div>
							</a>
							<p style="font-family:CaviarDreams_Bold;text-align:center; font-size:22px;padding-top:280px;">Groom Widower</p>
						</div>
						<div class="col-lg-2" style="margin-right: 35px;">
							<a href="success_stories_show.php">
								<div class="col-lg-2" style="height:250px; width:250px; background-color:#50b8c1;margin-right: 35px;">
									<div class="circle">
										<i class="fa fa-usd" style="font-size:75px;color:#50b8c1;margin-top:36px;margin-left:50px;"></i>
									</div>
								</div>
							</a>
							<p style="font-family:CaviarDreams_Bold;text-align:center; font-size:22px;padding-top:280px;">Show Success Stories</p>
						</div>
						<div class="col-lg-2" style="margin-right: 35px;">
							<a href="matrimony_suggestion.php">
								<div class="col-lg-2" style="height:250px; width:250px; background-color:#faa1a7;margin-right: 35px;">
									<div class="circle">
										<i class="fa fa-lightbulb-o" style="font-size:75px;color:#faa1a7;margin-top:36px;margin-left:50px;"></i>
									</div>
								</div>
							</a>
							<p style="font-family:CaviarDreams_Bold;text-align:center; font-size:22px;padding-top:280px;">Suggestions</p>
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

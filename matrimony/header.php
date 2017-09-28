<div class="logo"><a href="home.php"><h3 style="margin-top:60px">
	<?php  $email=$_SESSION['myusername'];
	
	if(!(isset($_SESSION['myusername'])&&$_SESSION['myusername']!=""))
{
header("http://bhavsarmarriage.com/Matrimonial%20Template%20&%20Images/temp4/temp4/www.htmlpreviews.com/cloud/badminton/credon8/index.php");	
}
	
	
	 $show_gender=mysql_query("select * from matrimonialall where email='$email' and is_del='no'  ") or die(mysql_error());
										while($row_gender=mysql_fetch_array($show_gender))
										{
											 echo ucwords($row_gender['first_name'])."&nbsp;";
											 echo ucwords($row_gender['last_name']);
										}
	
	?>
    
</h3></a></div>
			<nav class="navbar navbar-default" role="navigation" >
				
				<div class="collapse navbar-collapse" id="czsale-navbar">
                
					<ul class="nav navbar-nav navbar-right">
                    
                    
						<!--<li class="dropdown">
							<a href="http://bhavsar.org/" class="dropdown-toggle" >Bhavsar.Org</b></a>
						</li>
                        
                       <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting <b class="caret"></b></a>
							<ul class="dropdown-menu">
								
                                <li> <a href="../logout.php">Logout</a></li>
                            </ul>
						</li>-->
                        
                     
					</ul>   
				</div>
			</nav>
<!DOCTYPE html>
<html lang="en">
 
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MCA RankBoard</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">



         <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
			<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
 	
<style>

#menu{
	 
	height: 66px;
	background: url(images/menu_bg.png);
	background-repeat:no-repeat;


}

#menu ul{
	padding-left: 200px;
    list-style: none;
	padding: 0px 0px 0px 0px;
	margin: 0 auto;
	width: 771px;
}

#menu ul li{
	display: inline;
}

#menu ul li a{
	font: 28px Arial, Helvetica, sans-serif;
    color: #ffffff;
    font-weight: normal;
    text-decoration: none;
	text-align: center;
    display: block;
    float: left;
    width: 154px;
    height: 61px;
	line-height: 54px;
}

#menu ul li a:hover,  #menu ul li .active{
	background: url(images/active.png) center;
}

</style>
	
	
    </head>

<body  style="background: #000000 url(images/bg.jpg) no-repeat top center fixed;">
    	<div id="wrap" >
		<div id="menu" style="padding-left:50px">
					<ul >
					<div>
						<li><a href="?query=3"  <?php if(isset($_REQUEST['query'])) {if($_REQUEST['query']==3) {echo 'class = "active"';} else {echo 'class =""'; } }?>  >MCA III </a></li>

						<li><a href="?query=4"  <?php if(isset($_REQUEST['query'])) {if($_REQUEST['query']==3) {echo 'class ="a"'; } } {echo 'class ="active"';}?> >MCA IV </a></li>

				</div>
	</ul>
	
				</div>
				<div id="logo">
                    
                </div>
							 
 
				 
<marquee style="font-style:italic; color:#FFFFFF">Scroll Down for Graphical visualisation</marquee>				
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table class="wdn-responsive-table flush-left" >
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1" align="left">RANK</th>
									<th class="cell100 column2">NAME</th>
									<th class="cell100 column3" align="center">PERCENT</th>
									<th class="cell100 column4">Result</th>
									
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table  class="wdn-responsive-table flush-left">
							<tbody>
							<?php
							
							if (isset($_REQUEST['query']))
							{
								$q = $_REQUEST['query'];
								 if($q==3)
									$f = fopen("mca3rdresult.csv", "r");
							
								else if ($q ==4)
									$f = fopen("mca4thresult.csv", "r");
							}
							else
							{
							
								$f = fopen("mca4thresult.csv", "r");
								
							}
							if($f == NULL)
							{}
							else
							while (($line = fgetcsv($f)) !== false) {
							if ($line[0] ==1)
							{
							?>
								<tr class="row100 body"  >
									<td class="cell100 column1" style="font-size:23px; color: #00a0dd" ><?php  echo $line[0]; ?></td>
									<td class="cell100 column2" style="font-size:23px; color:#00a0dd"><?php  echo $line[1]; ?></td>
									<td class="cell100 column3" style="font-size:23px; color:#00a0dd" ><?php  echo $line[3]; ?> %</td>
									<td class="cell100 column4" style="font-size:23px; color:#00a0dd" ><?php  echo $line[4]; ?></td>
									
								</tr>
						<?php
							}
							
							else if ($line[0] >=1 && $line[0]<4)
							{
							?>
								<tr class="row100 body"  >
									<td class="cell100 column1" style="font-size:20px; color:#FFFF33" ><?php  echo $line[0]; ?></td>
									<td class="cell100 column2" style="font-size:20px; color:#FFFF33"><?php  echo $line[1]; ?></td>
									<td class="cell100 column3" style="font-size:20px; color:#FFFF33" ><?php  echo $line[3]; ?> %</td>
									<td class="cell100 column4" style="font-size:20px; color:#FFFF33" ><?php  echo $line[4]; ?></td>
									
								</tr>
						<?php
							}
							else if($line[0] >4)
							{
							?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php  echo $line[0]; ?></td>
									<td class="cell100 column2"><?php  echo $line[1]; ?></td>
									<td class="cell100 column3" ><?php  echo $line[3]; ?> %</td>
									<td class="cell100 column4" ><?php  echo $line[4]; ?></td>
									
								</tr>
						<?php
							

							}
						
						
							
						}	
							fclose($f);
							
							?>
							</tbody>
						</table>
					</div>

							</tbody>

						</table> 
								 <br><h3 style="color:white">*As per marksheet data*</h3>	
								 <?php 
								 if (isset($_REQUEST['query']))
								 {
								 $q = $_REQUEST['query'];
								 
								 if ($q == 3)
								 	{
										?>
										<br><img src='mca3/bar.png'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='mca3/pie.png'> 
								<hr color="#FFFFFF"><h3 style="color:white">Subject Wise Analysis</h3><br>
										<img src='mca3/java.png'>
										<img src='mca3/web.png'>
										<img src='mca3/cg.png'>
										<img src='mca3/adbms.png'>
										<img src='mca3/toc.png'>
										
										 <br>	
										<?php
									}
								 if ($q == 4)
								 	{
										?>
										<br><img src='mca4/bar.png'>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='mca4/pie.png'> 
								<hr color="#FFFFFF"><h3 style="color:white">Subject Wise Analysis</h3><br>
										<img src='mca4/se.png'>
										<img src='mca4/net.png'>
										<img src='mca4/osos.png'>
										<img src='mca4/ai.png'>
										<img src='mca4/ecom.png'>
										
										 <br>	
										<?php
									}
								 	
								
								 }
								 else
								 {
								 
								 		 ?>
										<br><img src='mca4/bar.png'>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='mca4/pie.png'> 
								<hr color="#FFFFFF"><h3 style="color:white">Subject Wise Analysis</h3><br>
										<img src='mca4/se.png'>
										<img src='mca4/net.png'>
										<img src='mca4/osos.png'>
										<img src='mca4/ai.png'>
										<img src='mca4/ecom.png'>
										
										 <br>	
										<?php
								 }
								 
								?>
					</div>
				</div>
		 <div style="background-color:">

		 </div>
			 
				
				

				
		
				
				
				 <footer class="footer-distributed">

			<div class="footer-left">
				<p style="color:#999999"> Developed By<p>
				<h3>Harsh<span> Gupta</span></h3>

				 
				<p class="footer-company-name"></p>
			</div>

			<div class="footer-center">

				 

				<div>
					<i class="fa fa-phone"></i>
					<p>7791013510</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:info.harshgupta10@gmail.com">info.harshgupta10@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Visit My</span>

				</p>
<a href = "https://www.linkedin.com/in/harshhg/">LinkedIn</a><br><br>
<a href="https://github.com/harshhg">Github </a>
				 

			</div>

		</footer>

				 
				 
    </body>


</html>

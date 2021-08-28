<?php include 'header.php' ?>
	
	
	<style type="text/css">
		.error{
    			color: red;
    			font-family:Bell MT;	
				
			
}
	</style>
	
	<div >
	<div class="container" >
		<!--Bootstrap card with slider class-->
		<div id="carousel-demo"	class="carousel slide" data-ride="carousel" >
			<div class="carousel-inner">
				 <?php
        $url = "https://jsonplaceholder.typicode.com/photos";
        $data = json_decode(file_get_contents($url), true);
      
foreach($data as $row) {
  if($row['id'] <=5){ ?> 
				<div class="item <?php if($row['id']==1){ echo 'active'; } ?>">
				<p><?php echo $row['title']; ?></p>
					<img src="<?php echo $row['url']; ?>">
				</div>
<?php } }?>

				 
			</div>
			<!--slider control for card-->
			<a class="left carousel-control"
			href="#carousel-demo"
			data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left">
			</span>
			</a>
			<a class="right carousel-control"
			href="#carousel-demo"
			data-slide="next">
				<span class="glyphicon glyphicon-chevron-right">
			</span>
			</a>
		</div>
	</div>
	
	 </div>
	
	
	
		
<hr>
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				
				<div class="modal-body modal-body-sub">
					<div class="row">
						
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<div class="facts">
											<div class="register">
												<form action="reg_process.php" method="POST" id="registration" >			
													<input placeholder="Name" name="Name" type="text" required="">
													<input placeholder="Email Address" name="Email" type="email" required="">	
													<input placeholder="Password" id="password" name="Password" type="password" required="">	
													<input placeholder="Confirm Password"  name="password_confirm" type="password" required="">
													<div class="sign-up">
														<input type="submit" align="center" value="Create Account"/>
													</div>
												</form>
											</div>
										</div>
									 			        					            	      
								</div>	
							
							
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	 
	<!-- header modal -->
	<!-- header -->
	
	


	
	
	<div class="container">
		
	</div>
	<!-- footer -->
	<?php include 'footer.php' ?>
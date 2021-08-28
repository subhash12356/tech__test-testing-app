<?php include 'header.php' ?>
	
	
		<style type="text/css">
		.error{
    			color: red;
    			font-family:Bell MT;	
			
 
}
	</style>
	<div>
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
									<table class="table">
									<tr>
									<th>S.N.</th>
									<th>Name</th>
									<th>Email</th>
									<th>Password</th>
									
									</tr>
									
									
									 <tbody id="display_data">  
                    </tbody>
					
					
					</table>
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
	<script>
	
	$.ajax({

        method:"POST",
        url: "data.php",
        data:$(this).serialize(),

        success: function(data){
         // alert(data);
            //toastr.success('Item Added');

            $("#display_data").html(data);

    }});
	
	</script>
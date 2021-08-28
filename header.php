<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Custom files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom files -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->  

<link rel="stylesheet"
		type="text/css"
		href="/css/result-light.css">
	<script type="text/javascript"
			src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
</script>
	<link rel="stylesheet"
		type="text/css"
		href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet"
		type="text/css"
		href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<script type="text/javascript"
			src="//code.jquery.com/jquery-1.9.1.js">
</script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script>
$(document).ready(function(){
  $("#registration").validate({
    // Specify validation rules
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      Password: {
        required: true,
        minlength: 5
      },
	   password_confirm: {
            required: true,
            minlength: 5,
            equalTo: "#password"
        }
    },
  
  });
});
</script> 
</head> 
<body>
<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="register.php" class="act">Home</a></li>	
						<li><a href="user.php">User</a></li> 
					</ul>
				</div>
			</nav>
		</div>
	</div>
<!-- //navigation -->

	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->

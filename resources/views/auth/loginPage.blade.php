<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/assets/css/roboto-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login/assets/fonts/line-awesome/css/line-awesome.min.css')}}">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('login/assets/css/style.css')}}"/>
</head>
<body class="form-v2">
	<div class="page-content">
		<div class="form-v2-content">
			<div class="form-left">
				<img src="{{asset('login/assets/images/sugarcane2.jpg')}}" alt="form">
				<!-- <div class="text-1">
					<p>Bring Your Music Along<span>try Unlimited</span></p>
				</div>
				<div class="text-2">
					<p><span>$9.99</span>/ Month</p>
				</div> -->
			</div>
			<form class="form-detail" action="{{route('postLogin')}}" method="POST" id="login">
				<h2>Login Form</h2>
				{{csrf_field()}}
				<div class="form-row">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="">
					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<!-- <div class="form-row">
					<label for="your_email">Your Email:</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div> -->
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<!-- <div class="form-row">
					<label for="comfirm-password">Confirm Password</label>
					<input type="password" name="confirm_password" id="confirm_password" class="input-text" required>
				</div> -->
				<!-- <div class="form-checkbox">
					<label class="container"><p>By signing up, you agree to the <a href="#" class="text">Play Term of Service</a></p>
					  	<input type="checkbox" name="agree" id="agree">
					  	<span class="checkmark"></span>
					</label>
				</div> -->
				<div class="form-row-last">
					<input type="submit" name="login" class="login" value="Login">
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
		    	password: "required",
		    	confirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	message: {
		  		// full_name: {
		  		// 	required: "Please provide an username"
		  		// },
		  		email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please provide a password"
		  		},
		  		// confirm_password: {
		  		// 	required: "Please provide a password",
		      	// 	equalTo: "Wrong Password"
		    	// }
		  	}
		});
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
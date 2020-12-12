<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Pabrik</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/assets/css/roboto-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login/assets/fonts/line-awesome/css/line-awesome.min.css')}}">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('login/assets/css/style.css')}}"/>
</head>
<body class="form-v2">
	<div class="page-content">
		<div class="form-v2-content">
		<div class="logo">
			<!-- <img src="{{asset('login/assets/images/')}}" alt="form"> -->
		<div>
			<form class="form-detail" action="{{route('doRegisterPabrik')}}" method="POST" id="login">
				@if (\Session::has('success'))
					<div class="alert alert-success">
						<ul>
							<li>{!! \Session::get('success') !!}</li>
						</ul>
					</div>
				@endif
				<h2>Form Pendaftaran Akun Pabrik Gula</h2>
				{{csrf_field()}}
				<div class="form-row">
					<!-- <label for="email">Nama Pabrik</label> -->
					<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Pabrik" required placeholder="">
				</div>
				<div class="form-row">
					<!-- <label for="email">Alamat</label> -->
					<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required placeholder="">
				</div>
				
				<div class="form-row">
					<!-- <label for="email">No Hp</label> -->
					<input type="text" name="nohp" id="nohp" class="form-control" placeholder="No HP" required placeholder="">
				</div>

				<div class="form-row">
					<!-- <label for="email">Email</label> -->
					<input type="email" name="email" id="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="">
					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            	    <!-- <label for="password" class="col-md-6 control-label">Password</label>	 -->
            	    <div class="form-row">
            	        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            	        <span class="help-block">{{ $errors->first('password') }}</span>
            	    </div>
            	</div>
					
            	<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            	    <!-- <label for="password_confirmation" class="col-md-6 control-label">Konfirmasi Password</label>	 -->
            	    <div class="form-row">
            	        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Konformasi Password">
            	        <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
            	    </div>
            	</div>

				<!-- <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password_confirmation" class="col-md-8 control-label">Konfirmasi Password</label>
                    <div class="">
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                        <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                    </div>
                </div> -->

				<!-- <div class="form-row">
					<input type="hidden" name="status" id="status" value="Tidak Aktif">
				</div> -->
				<br>
				<div class="form-row-last">
					<button type="submit" class="btn btn-primary">Daftar</button>
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
		    	konfirmasi: {
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
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>

<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/datepicker3.css" rel="stylesheet">
<link href="../assets/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					@if(Session::has('pesan_error'))
					   <div class="alert alert-danger">{{ Session::get('pesan_error') }}</div>
					 @endif

					 @if(Session::has('pesan_logout'))
					   <div class="alert alert-success">{{ Session::get('pesan_logout') }}</div>
					 @endif

					 
					 
					{{Form::open(array('action' => 'UserController@authenticate')) }}
					{{Form::label('email', 'Email') }}
					{{Form::text('email', '', array('class' => 'form-control'))}}
					{{Form::label('password', 'Password') }}
					{{Form::password('password', array('class' => 'form-control'))}}

					<div><span>Apakah anda sudah punya akun? <a href="register">Register</span></div>

					{{Form::submit('Login', array ( 'class' => 'btn btn-info custom-btn')) }}
					{{Form::close() }}

				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="../assets/js/jquery-1.11.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/chart.min.js"></script>
	<script src="../assets/js/chart-data.js"></script>
	<script src="../assets/js/easypiechart.js"></script>
	<script src="../assets/js/easypiechart-data.js"></script>
	<script src="../assets/js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>

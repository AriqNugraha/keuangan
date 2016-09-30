<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>

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
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					
				 @if(Session::has('pesan'))
				  <div class="alert alert-success">{{ Session::get('pesan') }}</div>
				  @endif

				  {{Form::open(array('action' => 'UserController@store')) }} 

				  {{Form::label('nama', 'Nama') }} 
				  {{Form::text('nama', '', array('class' => 'form-control'))}} 

				  {{Form::label('nip', 'NIP') }} 
				  {{Form::text('nip', '', array('class' => 'form-control'))}} 

				   {{Form::label('username', 'User Name') }} 
				  {{Form::text('username', '', array('class' => 'form-control'))}} 

				  {{Form::label('email', 'Email') }} 
				  {{Form::text('email', '', array('class' => 'form-control'))}} 

				  {{Form::label('password', 'Password') }} 
				  {{Form::password('password', array('class' => 'form-control'))}} 

				   {{Form::label('no_hp', 'No Hp') }} 
				  {{Form::text('no_hp', '', array('class' => 'form-control'))}} 

				  {{Form::label('alamat', 'Alamat') }} 
				  {{Form::text('alamat', '', array('class' => 'form-control'))}} 

				  {{Form::label('tipeuser ', 'Type') }} 
				  {{Form::text('tipeuser ', '', array('class' => 'form-control'))}} 
				  <br>    
				  {{Form::submit('Register', array('class' => 'btn btn-primary')) }} 
				 {{ Form::close() }} 
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

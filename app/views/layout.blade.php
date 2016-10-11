<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Beon Accounting</title>

<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/css/datepicker3.css" rel="stylesheet">
<link href="/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="/assets/css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/datepicker/datepicker3.css">
<link rel="stylesheet" href="/assets/daterangepicker/daterangepicker-bs3.css">

<!--Icons-->
<script src="/assets/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Beon</span>Accounting</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="logout"><svg class="glyph stroked gear"></svg>Logout</a></li>
							
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="widget"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="chart"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li><a href="laporan"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Kertas Kerja</a></li>
			<li><a href="list-akun"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> List Akun</a></li>
			<li><a href="laporan-input"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Form Laporan</a></li>
			<li><a href="formakun"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Form Akun</a></li>
			
		</ul>
</div>
<div>
	@yield('content');
</div>
	<script src="/assets/js/jquery-1.11.1.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/chart.min.js"></script>
	<script src="/assets/js/chart-data.js"></script>
	<script src="/assets/js/easypiechart.js"></script>
	<script src="/assets/js/easypiechart-data.js"></script>
	<script src="/assets/js/bootstrap-datepicker.js"></script>
	<script src="/assets/js/bootstrap-datetimepicker.min.js"></script>


<script>
	$(function() {
		$( "#tanggal" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
</script>

	<script>
		$('#calendar').datepicker({
		});

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
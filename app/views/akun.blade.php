@extends('layout')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Input Form </h1>
			</div>
		</div><!--/.row-->

 {{ Form::open(array('action' => 'AkunController@store','role'=>'form','files'=> true)) }}


 {{Form::label('no_akun', 'No Akun') }}

 {{Form::text('no_akun', '', array('class' => 'form-control' , 'required' => 'required'))}}

 {{Form::label('nama_akun', 'Nama Akun') }}

 {{Form::text('nama_akun', '', array('class' => 'form-control' , 'required' => 'required'))}}



 {{Form::submit('Submit', array('class' => 'btn btn-primary custom-btn')) }}

    
 {{ Form::close()}}





@stop
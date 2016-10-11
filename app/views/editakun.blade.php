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
				<h1 class="page-header">Edit Data</h1>
			</div>
		</div><!--/.row-->

		 {{ Form::open(array('action' => 'AkunController@update')) }}

		 {{Form::hidden('id', $akun->id)}}

		 {{Form::label('no_akun', 'No Akun') }}
		 {{Form::text('no_akun', $akun->no_akun , array('class' => 'form-control'))}}

		 {{Form::label('nama_akun', 'Nama Akun') }}
		 {{Form::text('nama_akun', $akun->nama_akun , array('class' => 'form-control'))}}



		 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}

		 {{ Form::close() }}

 
@stop
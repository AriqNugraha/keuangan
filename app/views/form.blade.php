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
				<h1 class="page-header">Input Form data Data</h1>
			</div>
		</div><!--/.row-->

 {{ Form::open(array('action' => 'LaporanController@store','role'=>'form','files'=> true)) }}

 {{Form::label('nobukti', 'No Bukti') }}

 {{Form::text('nobukti', '', array('class' => 'form-control', 'required' => 'required'))}}

 {{Form::label('tanggal', 'Tanggal') }}

  <input name="tanggal" class="form-control date-picker" id="tanggal" data-date-format="yyyy-mm-dd" type="text" required="required" >

 

 {{Form::label('noperk', 'No Perkiraan') }}

 {{Form::text('noperk', '', array('class' => 'form-control' , 'required' => 'required'))}}

 {{Form::label('akun', 'Kode Akun') }}

 {{Form::text('akun', '', array('class' => 'form-control' , 'required' => 'required'))}}

 {{Form::label('debet', 'Debet') }}

 {{Form::text('debet', '', array('class' => 'form-control', 'required' => 'required'))}}

 {{Form::label('kredit', 'Kredit') }}

 {{Form::text('kredit', '', array('class' => 'form-control' , 'required' => 'required'))}}

 {{Form::label('keterangan', 'Keterangan') }}

 {{Form::textarea('keterangan', '', array('class' => 'form-control' , 'required' => 'required'))}}

 {{Form::submit('Submit', array('class' => 'btn btn-primary custom-btn')) }}

    
 {{ Form::close()}}





@stop
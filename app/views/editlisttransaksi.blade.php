
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

{{ Form::model($datatransaksi, array('route' => array('update', $datatransaksi->id), 'method' => 'PUT')) }}

		 {{ Form::open(array('action' => 'InputTransaksiController@update')) }}

		 {{Form::label('no_bukti', 'No Bukti') }}

		 {{Form::text('no_bukti', $datatransaksi->no_bukti , array('class' => 'form-control'))}}

		 {{Form::label('tanggal', 'Tanggal') }}

		 {{Form::text('tanggal', $datatransaksi->tanggal, array('class' => 'form-control'))}}

		 {{Form::label('nominal', 'Nominal') }}

		 {{Form::text('nominal', $datatransaksi->nominal , array('class' => 'form-control'))}}

		 {{Form::label('tipe_transaksi', 'Tipe') }}

		 {{Form::text('tipe_transaksi', $datatransaksi->tipe_transaksi , array('class' => 'form-control'))}}

		 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}

		 {{ Form::close() }}

 
@stop

    


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

		 {{ Form::open(array('action' => 'LaporanController@update')) }}

		 {{Form::hidden('id', $laporan->id)}}

		 {{Form::label('nobukti', 'No Bukti') }}

		 {{Form::text('nobukti', $laporan->no_bukti , array('class' => 'form-control'))}}

		 {{Form::label('tanggal', 'Tanggal') }}

		 {{Form::text('tanggal', $laporan->tanggal, array('class' => 'form-control'))}}

		 {{Form::label('keterangan', 'Keterangan') }}

		 {{Form::textarea('keterangan', $laporan->keterangan , array('class' => 'form-control'))}}

		 {{Form::label('noperk', 'No Perkiraan') }}

		 {{Form::text('noperk', $laporan->no_perk , array('class' => 'form-control'))}}

		 {{Form::label('debet', 'Debet') }}

		 {{Form::text('debet', $laporan->debet , array('class' => 'form-control'))}}

		 {{Form::label('kredit', 'Kredit') }}

		 {{Form::text('kredit', $laporan->kredit , array('class' => 'form-control'))}}

		 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}

		 {{ Form::close() }}

 
@stop
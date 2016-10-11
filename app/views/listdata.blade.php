@extends('layout')

@section('content')


  
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">   

  @if(Session::has('pesan_update'))
             <div class="alert alert-success">{{ Session::get('pesan_update') }}</div>
  @endif

 @if(Session::has('pesan_simpan'))
             <div class="alert alert-success">{{ Session::get('pesan_simpan') }}</div>
  @endif

 @if(Session::has('pesan_hapus'))
             <div class="alert alert-success">{{ Session::get('pesan_hapus') }}</div>
  @endif

<div class="col-md-4">
    {{ link_to('laporan-input', 'Tambah',array ( 'class' => 'btn btn-info custom-btn'))}}
    <a href="{{URL::route('ExportLaporan')}}"><button class="btn btn-info custom-btn">Export</button></a>
    
</div>

<form role="search" action="{{ URL::action('LaporanController@search') }}" method="get">
<div class="col-md-5">
  {{ Form::label('search by', 'Search By') }}
  {{ Form::select('searchBy', $searchBy) }}
</div>

<div class="col-md-3">
    
      <div class="form-group" >
        <input type="text" id="katakunci" name="katakunci" class="form-control custom-src" placeholder="Search">
        <!-- <button type="submit" class="btn"><i class="icon-search"></i></button> -->
      </div>
    
 </div>
 </form>

 <table class="table">
    <tr>
       <th>No </th>
       <th>No Bukti</th>
       <th>Tanggal</th>   
       <th>No Akun</th>
       <th>Nama Akun</th>
       <th>Debet</th>
       <th>Kredit</th>
       <th>Keterangan</th>
       <th>Action</th>
    </tr>
<?php
 $i = 1;
 ?>
 @foreach($datalaporan as $laporan)

   
      <tr>
         <td>{{ $i }}</td>
         <td>{{ $laporan->no_bukti }}</td>
         <td>{{ $laporan->tanggal }}</td>
         <td>{{ $laporan->no_akun }}</td>
         <td>{{ $laporan->nama_akun }}</td>
         <td>{{ $laporan->debet}}</td>
         <td>{{ $laporan->kredit}}</td>
         <td>{{ $laporan->keterangan }}</td>
         <td>{{ link_to_action('LaporanController@edit','Edit', array($laporan->id), array ( 'class' => 'btn btn-warning'))}} | {{ link_to_action('LaporanController@delete', 'Delete', array($laporan->id), array ( 'class' => 'btn btn-danger'))}}</td>
          
        
      </tr>
      <?php
    $i++;
    ?>
    @endforeach
   
 </table>

</div>


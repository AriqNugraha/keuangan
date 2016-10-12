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

<div class="col-md-9">
  {{ link_to('laporan-input', 'Tambah',array ( 'class' => 'btn btn-info custom-btn'))}}
   <a href="{{URL::route('ExportLaporan')}}"><button class="btn btn-info custom-btn">Export</button></a>
</div>
<div class="col-md-3">
    <form role="search" action="{{ URL::action('LaporanController@search') }}" method="get">
      <div class="form-group" >
        <input type="text" id="katakunci" name="katakunci" class="form-control-src custom-src" placeholder="Search">
        <!-- <button type="submit" class="btn"><i class="icon-search"></i></button> -->
      </div>
    </form>
 </div>

 <table class="table">
    <tr>
       <th>No </th>
        <th>No Bukti</th>
       <th>Tanggal</th>   
       <th>No akun</th>
       <th>Nama Akun</th>
        <th>Debet</th>
       <th>Kredit</th>
       <th>Keterangan</th>
       <th>Action</th>
    </tr>
<?php
 $i = 1;
 ?>

 @foreach($laporan as $laporandata) 
<tr> 

        <td>{{$i}}</td>
        <td>{{$laporandata->no_bukti}}</td>
         <td>{{ $laporandata->tanggal }}</td>
         <td>{{ $laporandata->no_akun }}</td>
         <td>{{ $laporandata->nama_akun }}</td>
         <td>{{$laporandata->debet }}</td>
          <td>{{$laporandata->kredit}}</td>
          <td>{{$laporandata->keterangan}}</td>
          <td>{{ link_to_action('LaporanController@edit','Edit', array($laporandata->id), array ( 'class' => 'btn btn-warning'))}} | {{ link_to_action('LaporanController@delete', 'Delete', array($laporandata->id), array ( 'class' => 'btn btn-danger'))}}</td>
          

 </tr>
  <?php
    $i++;
    ?>
         @endforeach
   
 </table>
 
</div>


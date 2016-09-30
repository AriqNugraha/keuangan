@extends('layout')

@section('content')


  
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">   

  {{ link_to('input', 'Tambah',array ( 'class' => 'btn btn-info custom-btn'))}}

 <table class="table">
    <tr>
       <th>No </th>
        <th>No Bukti</th>
       <th>Tanggal</th>
       <th>Keterangan</th>
       <th>No Perkiraan</th>
        <th>Debet</th>
       <th>Kredit</th>
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
         <td>{{ $laporan->keterangan }}</td>
         <td>{{ $laporan->no_perk }}</td>
         <td>{{ $laporan->debet}}</td>
         <td>{{ $laporan->kredit}}</td>
          <td>{{ link_to_action('LaporanController@edit','Edit', array($laporan->id), array ( 'class' => 'btn btn-warning'))}} | {{ link_to_action('LaporanController@delete', 'Delete', array($laporan->id), array ( 'class' => 'btn btn-danger'))}}</td>
          
        
      </tr>
      <?php
    $i++;
    ?>
    @endforeach
   
 </table>
</div>


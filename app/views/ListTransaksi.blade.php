@extends('layout')

@section('content')


  
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">   
  {{ link_to('input_data_transaksi','Tambah', array ( 'class' => 'btn btn-info custom-btn'))}}
 <table class="table">
    <tr>
       <th>No</th>
        <th>No Bukti</th>
       <th>Tanggal</th>
       <th>Nominal</th>
       <th>Tipe Transaksi</th>
       <th>Action</th>
    </tr>
   
      
        @foreach ($datatransaksi as $data1)
          
          <tr>
          <td>{{ $data1->id}}</td>
          <td>{{ $data1->no_bukti}}</td>
          <td>{{ $data1->tanggal}}</td>
          <td>{{ $data1->nominal }}</td>
          <td>{{ $data1->tipe_transaksi }}</td>
          <td>{{ link_to_action('InputTransaksiController@edit','Edit', array($data1->id), array ( 'class' => 'btn btn-warning'))}} | {{ link_to_action('InputTransaksiController@delete', 'Delete', array($data1->id), array ( 'class' => 'btn btn-danger'))}}</td>
          </tr>
        @endforeach
 </table>
</div>
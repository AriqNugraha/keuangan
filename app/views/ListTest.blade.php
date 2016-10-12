  
        @foreach($test as $test1) 

        <td>{{$test1->no_bukti}}</td>
         <td>{{ $test1->tanggal }}</td>
         <td>{{ $test1->no_akun }}</td>
         <td>{{ $test1->nama_akun }}</td>
         <td>{{$test1->debet }}</td>
          <td>{{$test1->kredit}}</td>
           <td>{{$test1->keterangan}}</td>
           

         @endforeach
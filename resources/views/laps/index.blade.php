@extends('layouts.app')

 

@section('content')

   <br>
<center>
    <h3 style="color: white">Data Diri Siswa</h3>
    <table class="table table-hover" style="width: 90%;font-size: 20px">
        <thead>
        <tr class="bg-primary">

           <th>No</th>

            <th>Nama</th>

            <th>ttl</th>

            <th>jk </th>

             <th>agama </th> 

            <th>anakke </th>  

            <th>sodara </th>

            <th>alamat </th>

            <th>telpon </th>

            <th>ayah </th>

            <th>ibu </th>  

            <th width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($datas as $data)
        <tbody>
        <tr style="background-color: white">

            <td>{{ ++$i }}</td>

            <td>{{ $data->Nama }}</td>

            <td>{{ $data->ttl }}</td>

            <td>{{ $data->jk }}</td>

            <td>{{ $data->agama }}</td>

            <td>{{ $data->anakke }}</td>

            <td>{{ $data->sodara }}</td>

             <td>{{ $data->alamat }}</td>

              <td>{{ $data->telpon }}</td>

               <td>{{ $data->ayah }}</td>

                <td>{{ $data->ibu }}</td>


            <td>

                <form action="{{ route('datas.destroy',$data->id) }}" method="POST">

                     <a class="btn btn-primary" href="{{ route('datas.edit',$data->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')


                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach
        </tbody>
    </table>

</center>
    
  

    {!! $datas->links() !!}
<center>
    <h3 style="color: white">isi Kegiatan Siswa</h3>
    <table class="table table-hover" style="width: 90%;font-size: 20px">
        <thead>
        <tr class="bg-primary">

            <th>No</th>

            <th>nis</th>
            <th>hari</th>

            <th>waktu</th>

            <th>kegiatan </th>
            <th>set_pelajaran </th>

              

            <th width="280px">Action</th>

        </tr>
        </thead>
        @foreach ($sets as $set)
        <tbody>
        <tr style="background-color: white">

            <td>{{ ++$i }}</td>

            <td>{{ $set->nis }}</td>
            <td>{{ $set->hari }}</td>

            <td>{{ $set->waktu }}</td>

            <td>{{ $set->kegiatan }}</td>
            <td>{{ $set->set_pelajaran }}</td>


            <td>

                <form action="{{ route('sets.destroy',$set->id) }}" method="POST">

                     <a class="btn btn-success" href="{{ route('isis.create') }}">Kirim bukti kegiatan</a>


                </form>

            </td>

        </tr>

        @endforeach
        </tbody>
    </table>

</center>

  

    {!! $isis->links() !!}

    <center>
        <h3 style="color: white">Set Jadwal Siswa</h3>
    <table class="table table-hover" style="width: 90%;font-size: 20px">
        <thead>
        <tr class="bg-primary">

            <th>No</th>

            <th>nis</th>
            <th>hari</th>

            <th>waktu</th>

            <th>kegiatan </th>
            <th>set_pelajaran </th>

              

            <th width="280px">Action</th>

        </tr>
        </thead>
        @foreach ($sets as $set)
        <tbody>
        <tr style="background-color: white">

            <td>{{ ++$i }}</td>

            <td>{{ $set->nis }}</td>
            <td>{{ $set->hari }}</td>

            <td>{{ $set->waktu }}</td>

            <td>{{ $set->kegiatan }}</td>
            <td>{{ $set->set_pelajaran }}</td>


            <td>
                
                <form action="{{ route('sets.destroy',$set->id) }}" method="POST">
                    @if (Auth::user()->level == 'siswa')
                     <a class="btn btn-primary" href="{{ route('sets.edit',$set->id) }}">Edit</a>

                     @elseif (Auth::user()->level == 'ortu')
                     <a class="btn btn-primary" href="{{ route('sets.edit',$set->id) }}">Verifikasi bahwa anak anda telah melaksanakan kegiatan tersebut</a>
                     @else
                     @endif
                     
                     @csrf

                    @method('DELETE')


                    <button type="submit" class="btn btn-danger">Delete</button>
                    

                </form>

            </td>

        </tr>

        @endforeach
        </tbody>
    </table>

</center>


  

    {!! $sets->links() !!}


@endsection


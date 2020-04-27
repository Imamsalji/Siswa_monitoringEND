@extends('layouts.app')

 

@section('content')
<br>
<br>
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2 style="color: white; font-style: bold;">   Set Jadwal Siswa</h2>

            </div>
            @if (Auth::user()->level == 'ortu')
            
            @else
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('sets.create') }}"> membuat jadwal baru</a>
            </div>
            @endif
        </div>

    </div>
<br>
   

    @if ($message = Session::get('success'))
    <center>
        <div class="alert alert-success" style="width:90%">

            <p>{{ $message }}</p>

        </div>
    </center>

    @endif
                
                <center>
    <table class="table table-hover" style="width: 90%;font-size: 20px">
        <thead>
        <tr class="bg-primary">

            <th>No</th>
            @if (Auth::user()->level == 'ADMIN')
            <th>nis</th>
            <th>hari</th>

            <th>waktu</th>  

            <th>kegiatan </th>
            <th>set_pelajaran </th>

              

            <th width="280px">Action</th>
            @else
            <th>hari</th>

            <th>waktu</th>

            <th>kegiatan </th>
            <th>set_pelajaran </th>

              

            <th width="280px">Action</th>
            @endif
        </tr>
        </thead>
        @foreach ($sets as $set)
        <tbody>
        <tr style="background-color: white">


            <td>{{ ++$i }}</td>
            @if (Auth::user()->level == 'ADMIN')
            <td>{{ $set->nis }}</td>
            <td>{{ $set->hari }}</td>

            <td>{{ $set->waktu }}</td>

            <td>{{ $set->kegiatan }}</td>
            <td>{{ $set->set_pelajaran }}</td>
            
            @else

            
            <td>{{ $set->hari }}</td>

            <td>{{ $set->waktu }}</td>

            <td>{{ $set->kegiatan }}</td>
            <td>{{ $set->set_pelajaran }}</td>
            @endif

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


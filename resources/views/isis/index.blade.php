@extends('layouts.app')

 

@section('content')
<br>
<br>
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2 style="color: white">Pengisian kegiatan</h2>

            </div>

            

        </div>

    </div>

  <br> 

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    
<center>
    <table class="table table-hover" style="width: 90%;font-size: 20px">
        <thead>
        <tr class="bg-primary">

            <th>No</th>

            <th>nis</th>
            <th>hari</th>

            <th>waktu</th>

            <th>kegiatan </th>
            <th>bukti </th>

              

            <th width="280px">Action</th>

        </tr>
        </thead>
        @foreach ($sets as $set)
        <tbody>
        <tr style="background-color: white">

            <td>{{ ++$i }}</td>
            <form action="{{ url('storen') }}" method="GET">
            <td><input type="text" name="nis" value="{{ $set->nis }}" readonly=""></td>
            <td><input type="text" name="hari" value="{{ $set->hari }}" readonly=""></td>

            <td><input type="text" name="waktu" value="{{ $set->waktu }}" readonly=""></td>

            <td><input type="text" name="kegiatan" value="{{ $set->kegiatan }}" readonly=""></td>
            @if ($set->bukti == '')
            <td>belum terbukti</td>
            @else
            <td><img src="dist/css/img/{{ $set->bukti }}" width="180px" height="130px"></td>
            @endif


            <td>

                <button type="submit" class="btn btn-primary">masukan bukti</button>

            </td>
            </form>

        </tr>

        @endforeach
        </tbody>
    </table>

</center>

  

    {!! $isis->links() !!}


@endsection


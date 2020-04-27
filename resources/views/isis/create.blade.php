@extends('layouts.app')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 style="color: white">pengisian sesuai jadwal kegiatan</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('isis.index') }}"> Back</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('isis.store') }}" method="POST" style="color: white">

    @csrf
    <center>
    <div class="form-group">
        <strong>nis:</strong>
        <input type="text" name="nis" id="nis" class="form-control" placeholder ="nis" style="width: 95%" value="{{ $nis }}" readonly>
    </div>
    <div class="form-group">
        <strong>masukan hari:</strong>
        <input type="text" name="hari" id="hari" class="form-control" placeholder ="hari" style="width: 95%" value="{{ $hari }}" readonly>
    </div>
    <div class="form-group">
        <strong>masukan waktu:</strong>
        <input type="text" name="waktu" id="waktu" class="form-control" placeholder ="waktu" style="width: 95%" value="{{ $waktu }}" readonly>
    </div>
    <div class="form-group">
        <strong>masukan kegiatan:</strong>
        <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder ="kegiatan" style="width: 95%" value="{{ $kegiatan }}" readonly>
    </div>
    <div class="form-group">
        <label name="bukti" id="bukti">Masukan bukti berupa gambar</label>
        <input type="file" class="form-control" name="bukti" id="bukti" style="width: 95%">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
</center>
    

   



@endsection
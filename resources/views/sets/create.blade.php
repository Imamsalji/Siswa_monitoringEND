@extends('layouts.app')
  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Set Jadwal</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('sets.index') }}"> Back</a>

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

   
<center>
<form action="{{ route('sets.store') }}" method="POST">

    @csrf

  

     <center>
    <div class="form-group">
        <strong>nis:</strong>
        <input type="text" name="nis" id="nis" class="form-control" placeholder ="nis" value="{{ Auth::user()->nis }}" style="width: 95%" readonly="">
    </div>
    <div class="form-group">
        <strong>masukan hari:</strong>
        <input type="datetime" name="hari" id="hari" class="form-control" placeholder ="hari" style="width: 95%">
    </div>
    <div class="form-group">
        <strong>masukan waktu:</strong>
        <input type="time" name="waktu" id="waktu" class="form-control" placeholder ="waktu" style="width: 95%">
    </div>
    <div class="form-group">
        <strong>masukan kegiatan:</strong>
        <input type="datetime" name="kegiatan" id="kegiatan" class="form-control" placeholder ="kegiatan" style="width: 95%">
    </div>
    <div class="form-group">
        <strong>masukan set_pelajaran:</strong>
        <input type="datetime" name="set_pelajaran" id="set_pelajaran" class="form-control" placeholder ="set_pelajaran" style="width: 95%">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

   

</form>
</center>
@endsection
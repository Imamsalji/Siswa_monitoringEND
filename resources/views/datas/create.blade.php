@extends('layouts.app')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Silahkan isi Data Anda</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('datas.index') }}"> Back</a>

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

   

<form action="{{ route('datas.store') }}" method="POST" style="color: white">

    @csrf
    <center>
    <div class="form-group">
        <strong>nis:</strong>
        <input type="text" name="nis" id="nis" class="form-control" placeholder ="nis" style="width: 95%">
    </div>
    <div class="form-group">
        <strong>masukan Nama:</strong>
        <input type="text" name="Nama" id="Nama" class="form-control" placeholder ="Nama" style="width: 95%" >
    </div>
    <div class="form-group">
        <strong>masukan ttl:</strong>
        <input type="date" name="ttl" id="ttl" class="form-control" placeholder ="ttl" style="width: 95%" >
    </div>
    <div class="form-group">
        <strong>masukan jk:</strong>
        <input type="jk" name="jk" id="jk" class="form-control" placeholder ="jk" style="width: 95%" >
    </div>
    <div class="form-group">
        <strong>masukan agama:</strong>
        <input type="text" name="agama" id="agama" class="form-control" placeholder ="agama" style="width: 95%" >
    </div>
    <div class="form-group">
        <strong>masukan anakke:</strong>
        <input type="text" name="anakke" id="anakke" class="form-control" placeholder ="anakke" style="width: 95%" >
    </div>
    <div class="form-group">
        <strong>masukan sodara:</strong>
        <input type="text" name="sodara" id="sodara" class="form-control" placeholder ="sodara" style="width: 95%" >
    </div>
    <div class="form-group">
        <strong>masukan alamat:</strong>
        <input type="text" name="alamat" id="alamat" class="form-control" placeholder ="alamat" style="width: 95%" >
    </div>
    <div class="form-group">
        <strong>masukan telpon:</strong>
        <input type="text" name="telpon" id="telpon" class="form-control" placeholder ="telpon" style="width: 95%" >
    </div>
    <div class="form-group">
        <strong>masukan ayah:</strong>
        <input type="text" name="ayah" id="ayah" class="form-control" placeholder ="ayah" style="width: 95%" >
    </div>
     <div class="form-group">
        <strong>masukan ibu:</strong>
        <input type="text" name="ibu" id="ibu" class="form-control" placeholder ="ibu" style="width: 95%" >
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
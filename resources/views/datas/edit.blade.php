@extends('layouts.app')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit diri anda</h2>

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

  

    <form action="{{ route('datas.update',$data->id) }}" method="POST">

        @csrf

        @method('PUT')
   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama:</strong>

                    <input type="text" name="Nama" value="{{ $data->Nama }}" class="form-control" dataholder="Nama">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>ttl:</strong>

                    <input type="text" name="ttl" value="{{ $data->ttl }}" class="form-control" dataholder="ttl">

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>jk:</strong>

                    <input type="text" name="jk" value="{{ $data->jk }}" class="form-control" dataholder="jk">

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>agama:</strong>

                    <input type="text" name="agama" value="{{ $data->agama }}" class="form-control" dataholder="agama">

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>anakke:</strong>

                    <input type="text" name="anakke" value="{{ $data->anakke }}" class="form-control" dataholder="anakke">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>sodara:</strong>
 
                    <input type="text" name="sodara" value="{{ $data->sodara }}" class="form-control" dataholder="sodara">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>alamat:</strong>
 
                    <input type="text" name="alamat" value="{{ $data->alamat }}" class="form-control" dataholder="alamat">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>telpon:</strong>
 
                    <input type="text" name="telpon" value="{{ $data->telpon }}" class="form-control" dataholder="telpon">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>ayah:</strong>
 
                    <input type="text" name="ayah" value="{{ $data->ayah }}" class="form-control" dataholder="ayah">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>ibu:</strong>
 
                    <input type="text" name="ibu" value="{{ $data->ibu }}" class="form-control" dataholder="ibu">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection
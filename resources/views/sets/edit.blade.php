@extends('layouts.app')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit diri anda</h2>

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

  

    <form action="{{ route('sets.update',$set->id) }}" method="POST">

        @csrf

        @method('PUT')
   

         <div class="row">
             @if (Auth::user()->level == 'siswa')
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>nis:</strong>

                    <input type="text" name="nis" value="{{ $set->nis }}" class="form-control" placeholder ="nis">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>hari:</strong>

                    <input type="text" name="hari" value="{{ $set->hari }}" class="form-control" placeholder ="hari">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>waktu:</strong>

                    <input type="text" name="waktu" value="{{ $set->waktu }}" class="form-control" placeholder ="waktu">

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>kegiatan:</strong>

                    <input type="text" name="kegiatan" value="{{ $set->kegiatan }}" class="form-control" placeholder ="kegiatan">

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>set_pelajaran:</strong>

                    <input type="text" name="set_pelajaran" value="{{ $set->set_pelajaran }}" class="form-control" placeholder ="set_pelajaran">

                </div>

            </div>

           
            @elseif (Auth::user()->level == 'ortu')
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>nis:</strong>

                    <input type="text" name="nis" value="{{ $set->nis }}" class="form-control" placeholder ="nis">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>hari:</strong>

                    <input type="text" name="hari" value="{{ $set->hari }}" class="form-control" placeholder ="hari">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>waktu:</strong>

                    <input type="text" name="waktu" value="{{ $set->waktu }}" class="form-control" placeholder ="waktu">

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>kegiatan:</strong>

                    <input type="text" name="kegiatan" value="{{ $set->kegiatan }}" class="form-control" placeholder ="kegiatan">

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>set_pelajaran:</strong>

                    <input type="text" name="set_pelajaran" value="{{ $set->set_pelajaran }}" class="form-control" placeholder ="set_pelajaran">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>keterangan orang tua:</strong>

                    <input type="text" name="ketortu" value="{{ $set->ketortu }}" class="form-control" placeholder ="set_pelajaran">

                </div>

            </div>
            @else
            @endif
             
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection
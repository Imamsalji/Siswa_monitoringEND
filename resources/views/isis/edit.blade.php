@extends('layouts.app')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit isi kegiatan</h2>

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

  

    <form action="{{ route('isis.update',$isi->id) }}" method="POST">

        @csrf

        @method('PUT')
   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>nis:</strong>

                    <input type="text" name="nis" value="{{ $isi->nis }}" class="form-control" placeholder ="nis">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>hari:</strong>

                    <input type="text" name="hari" value="{{ $isi->hari }}" class="form-control" placeholder ="hari">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>waktu:</strong>

                    <input type="text" name="waktu" value="{{ $isi->waktu }}" class="form-control" placeholder ="waktu">

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>kegiatan:</strong>

                    <input type="text" name="kegiatan" value="{{ $isi->kegiatan }}" class="form-control" placeholder ="kegiatan">

                </div>

            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>bukti:</strong>

                    <input type="text" name="bukti" value="{{ $isi->bukti }}" class="form-control" placeholder ="bukti">

                </div>

            </div>

             
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection
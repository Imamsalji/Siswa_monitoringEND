@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <br>
                    <center>
<h4 style="color: white;font-size: 20px">
                   <p>penjelasan</p>  
<p>1.disini siswa/i diberikan akun dan login di sini</p>
<p>2.siswa diperkenankan untuk mengisi set jadwal </p>
<p>3.setelah isi set jadwal siswa/i dawajibkan melaksanakan kegiatan tersebut dan harus dengan buktinya</p>
<p>4.setelah selesai orang tua kalian juga akan ikut login dengan akun yang telah di berikan oleh admin/guru</p>
<p>5.admin/guru akan memeriksa kegiatan kalian selama di rumah.</p>

</h4>
</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

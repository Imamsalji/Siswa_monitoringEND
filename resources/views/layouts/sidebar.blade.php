
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background:    #191970; opacity: 80%">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          
                                  <h5>  {{ Auth::user()->nis }} - {{ Auth::user()->name }} </h5>
                               
                                
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
     
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        

       <span class="">==========================</span>
       <li><a href="home"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
       <span class="">==========================</span>
       @if (Auth::user()->level == 'ADMIN')
        <center>
       <p>
       <a class="btn btn-success" href="http://localhost:81/jadwal_siswa/public/password" style="background-color: #191970;color: white">Ganti Password</a>
       </center>
       <form action="{{ url('neang') }}" method="GET">
        {{ @csrf_field() }}
        <button name="name" class="form-control" value="{{ Auth::user()->nis }}" style="opacity: 100%;background-color: #191970;color: white" type="submit" class="btn btn-primary">Data diri</button>
    </form>
       <br>
       <form action="{{ url('cari') }}" method="GET">
        {{ @csrf_field() }}
        <button name="name" class="form-control" value="{{ Auth::user()->nis }}" style="opacity: 100%;background-color: #191970;color: white" type="submit" class="btn btn-primary">set jadwal</button>
    </form>
    <br>
       <form action="{{ url('search') }}" method="GET">
        {{ @csrf_field() }}
        <button name="name" class="form-control" value="{{ Auth::user()->nis }}" style="opacity: 100%;background-color: #191970;color: white" type="submit" class="btn btn-primary">Mengisi kegiatan</button>
    </form>
    <br>
    <li><a href="{{ route('laps.index') }}"><i ></i> <span>Laporan </span></a></li>
    <li><a href="{{ route('register') }}"><i ></i> <span>Registrasi Akun Khusus Admin/Guru </span></a></li>
       @elseif (Auth::user()->level == 'siswa')
       <center>
       <p>
       <a class="btn btn-success" href="http://localhost:81/jadwal_siswa/public/password" style="background-color: #191970;color: white">Ganti Password</a>
       </center>
     </p>
       <form action="{{ url('neang') }}" method="GET">
        {{ @csrf_field() }}
        <button name="name" class="form-control" value="{{ Auth::user()->nis }}" style="opacity: 100%;background-color: #191970;color: white;" type="submit" class="btn btn-primary">Data diri</button>
    </form>
       <br>
       <form action="{{ url('cari') }}" method="GET">
        {{ @csrf_field() }}
        <button name="name" class="form-control" value="{{ Auth::user()->nis }}" style="opacity: 100%;background-color: #191970;color: white" type="submit" class="btn btn-primary">set jadwal</button>
    </form>
    <br>
       <form action="{{ url('search') }}" method="GET">
        {{ @csrf_field() }}
        <button name="name" class="form-control" value="{{ Auth::user()->nis }}" style="opacity: 100%;background-color: #191970;color: white" type="submit" class="btn btn-primary">Mengisi kegiatan</button>
    </form>
    <br>
       

       

       
       @else
        <center>
       <p>
       <a class="btn btn-success" href="http://localhost:81/jadwal_siswa/public/password" style="background-color: #191970;color: white">Ganti Password</a>
       </center>
       <form action="{{ url('cari') }}" method="GET">
        {{ @csrf_field() }}
        <button name="name" class="form-control" value="{{ Auth::user()->nis }}" style="opacity: 100%;background-color: #191970;color: white" type="submit" class="btn btn-primary">Verifikasi Siswa/i</button>
    </form>
       @endif
       
       






        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
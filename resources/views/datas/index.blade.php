@extends('layouts.app')

 

@section('content')
<br>
<br>
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2 style="color: white">Data Diri</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('datas.create') }}"> Create Data Diri</a>
               

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

            <th>Nama</th>

            <th>ttl</th>

            <th>jk </th>

             <th>agama </th> 

            <th>anakke </th>  

            <th>sodara </th>

            <th>alamat </th>

            <th>telpon </th>

            <th>ayah </th>

            <th>ibu </th>  

            <th width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($datas as $data)
        <tbody>
        <tr style="background-color: white">

            <td>{{ ++$i }}</td>

            <td>{{ $data->Nama }}</td>

            <td>{{ $data->ttl }}</td>

            <td>{{ $data->jk }}</td>

            <td>{{ $data->agama }}</td>

            <td>{{ $data->anakke }}</td>

            <td>{{ $data->sodara }}</td>

             <td>{{ $data->alamat }}</td>

              <td>{{ $data->telpon }}</td>

               <td>{{ $data->ayah }}</td>

                <td>{{ $data->ibu }}</td>


            <td>

                <form action="{{ route('datas.destroy',$data->id) }}" method="POST">

                     <a class="btn btn-primary" href="{{ route('datas.edit',$data->id) }}">Edit</a>

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
    
  

    {!! $datas->links() !!}


@endsection


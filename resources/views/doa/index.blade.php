@extends('index')
@section('content')
    <h2 class="text-center mt-2 mb-2 text-success">Doa Sehari Hari</h2>
    <table class="table table-striped" style="width: 1300px; margin-left: -100px;">
        <thead class="bg-secondary text-white text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Doa</th>
                <th scope="col">Ayat</th>
                <th scope="col">Latin</th>
                <th scope="col">Detail</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($response as $doa)
                <tr class="text-center">
                    <th scope="row">{{ $doa->id }}</th>
                    <td>{{ $doa->doa }}</td>
                    <td>{{ $doa->ayat }}</td>
                    <td>{{ $doa->latin }}</td>
                    <td>                        
                        <center>
                            <a class="text-center"  href="doa/{{ $doa->id }}">
                                <button class="btn btn-primary btn-sm btn-menu" ><b>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                      </svg></b>
                                </button>
                            </a>
                        </center>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<hr style="background-color: rgb(255, 77, 0, 1); height:5px;">
@endsection
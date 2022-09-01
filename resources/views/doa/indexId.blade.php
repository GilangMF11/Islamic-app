@extends('index')
@section('content')
@foreach ($response as $doa)


    <div class="card-footer text-muted">
    </div>
    <br>
    <div class="card-body">
        <h2 class="text-center bg-light text-success " >{{ $doa->doa }}</h2>
        <br>
        <p style="font-size: 25px">Ayat     : </p>
        <p class="text-center" style="font-size: 20px">{{ $doa->ayat }}</p>
        <p style="font-size: 25px">Latin     : </p>
        <p class="text-center" style="font-size: 20px">{{ $doa->latin }}</p>
        <p style="font-size: 25px">Terjemahan : </p>
        <p class="text-center" style="font-size: 20px">{{ $doa->artinya }}</p>
        <p></p>
            <hr>
            <hr>

    </div>
    @endforeach
        <a href="/doa" class="btn btn-primary">Kembali</a>
</div>
<hr style="background-color: rgba(255, 77, 0, 1); height: 5px;">
@endsection
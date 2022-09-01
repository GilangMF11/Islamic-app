@extends('index')
@section('content')
<div class="jumbotron" id="home" style="margin-top: -140; margin-bottom:20;"> 
    <div class="dark">
        <div class="text-center">
            <p class="about text-center" id="about" style="color: white;">{{ $response->name }}</p>
        </div>
    </div>
</div>
<br>
<center>
    <div class="card text-center" style="width: 50%;">
        <div class="card-header btn btn-primary">
            <strong>{{ $response->name }}</strong>
        </div>
        <div class="card-body">
            <p class="text-center">
                <table style="text-align: left; margin:20px;">
                    <tr>
                        <td>Arti</td>
                        <td>:</td>
                        <td>{{ $response->name_translations->id }}</td>
                    </tr>
                    <tr>
                        <td>Nomer Surah</td>
                        <td>:</td>
                        <td>{{ $response->number_of_surah }}</td>
                    </tr>
                    <tr>
                        <td>Banyak Ayat</td>
                        <td>:</td>
                        <td>{{ $response->number_of_ayah }}</td>
                    </tr>
                    <tr>
                        <td>Tipe Surah</td>
                        <td>:</td>
                        <td>{{ $response->type }}</td>
                    </tr>
                </table>
            </p>
        </div>
        <div class="card-footer text-muted">
            <strong style="margin-bottom: 50px;"><br><u>Dengarkan Murotal</u></strong>
        </div>
        <figure>
            <br>
            @foreach ($response->recitations as $audio)
                <p>{{ $audio->name }}</p>
                <audio src="{{ $audio->audio_url }}" controls></audio>
            @endforeach
        </figure>
    </div>
</center>
<br>

    <h1 class="text-center"><strong> Ayat {{ $response->name }} </strong></h1>
<div class="container">
    <table class="table table-striped" style="width: 1300px; margin-left:-100px;">
        <thead>
    
            <tr class="text-center bg-secondary text-white">
                <th scope="col">Ayat</th>
                <th scope="col">Lafazh</th>
                <th scope="col">Bahasa Indonesia</th>
                <th scope="col">Bahasa inggris</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($response->verses as $ayat)
                <tr>
                    <td class="text-center">{{ $ayat->number }}</td>
                    <td>{{ $ayat->text }}</td>
                    <td>{{ $ayat->translation_id }}</td>
                    <td>{{ $ayat->translation_en }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="card text-center">
    <div class="card-header btn btn-primary">
        <strong> Tafsir {{ $response->name }}</strong>
    </div>
    <div class="card-body">
        <p class="card-text">
            <table style="text-align: left; margin: 20px;">
                <tr>
                    <td>Penerbit Tafsir</td>
                    <td>:</td>
                    <td>{{ $response->tafsir->id->kemenag->name }}</td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td>{{ $response->tafsir->id->kemenag->source }}</td>
                </tr>
            </table>
        </p>
    </div>
        <div class="card-footer text-muted">
        </div>
        <div class="card-body">
            @foreach ($response->tafsir->id->kemenag->text as $key=>$ayat)
            <strong>Ayat : {{ $key }}</strong><br><p style="text-align: justify"><b>Tafsir : </b>{{ $ayat }}</p>
                <hr>
                <hr>
            @endforeach
        </div>
        <a href="/quran" class="btn btn-primary">Kembali</a>
</div>
<hr style="background-color: rgba(255, 77, 0, 1); height: 5px;">
@endsection
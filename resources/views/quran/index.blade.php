@extends('index')
@section('content')
    <h2 class="text-secondary text-center">Al - Qur'an Digital </h2>
    <table class="table table-striped" style="width: 1300px; margin-left: -100px;">
        <thead class="bg-secondary text-white text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Surah</th>
                <th scope="col">Nama Latin</th>
                <th scope="col">Arti</th>
                <th scope="col">Jumlah Ayat</th>
                <th scope="col">Tempat Turun</th>
                <th scope="col">Tipe</th>
                <th scope="col">Audio</th>
                <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($response as $niat)
                <tr class="text-center">
                    <th scope="row">{{ $niat->number_of_surah }}</th>
                    <td>{{ $niat->name_translations->ar }}

                    </td>
                    <td>{{ $niat->name }}</td>
                    <td>{{ $niat->name_translations->id }}</td>
                    <td>{{ $niat->number_of_ayah }}</td>
                    <td>{{ $niat->place }}</td>
                    <td style="text-align: justify;"> {{ $niat->type }}</td>
                    <td>
                        <audio src="{{ $niat->recitation }}" controls></audio>
                    </td>
                    <td>                        
                        <center>
                            <a href="quran/{{ $niat->number_of_surah }}">
                                <button class="btn btn-primary btn-sm btn-menu">
                                    Lihat Surah
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
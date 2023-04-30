@extends('app')
{{--  Extend ke view minggu3.app --}}

@section('content')
    <div class="div1">
        <h1>Home Page</h1>
        <p>This is the Home Page</p>
        <p>{{ $nama }}</p>
        {{--  mengambil nilai nama yang dikirim melalui controller --}}
        <ul>
            {{--  mengambil nilai pelajaran yang dikirim melalui controller --}}
            @foreach ($pelajaran as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endsection

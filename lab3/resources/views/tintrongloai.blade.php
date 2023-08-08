@extends('layout')

@section('tieudetrang')
    Tin trong loại {{ $tenloai->moTa }}
@endsection

@section('noidung')
    <h2 class="m-3">Các tin trong loại <i>{{ $tenloai->moTa }}</i> </h2>
    <hr>
    @foreach ($listtin as $t)
        <div class="row m-3">
            <h3>
                <a href="{{ url('/tin', [$t->id]) }}">
                    {{ $t->tieuDe }}
                </a>
            </h3>
            <em>{{ $t->tomTat }}</em>
        </div>
        <hr>
    @endforeach
@endsection

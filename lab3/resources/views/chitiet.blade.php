@extends('layout')

@section('tieudetrang')
{{$tin->tieuDe}}
@endsection

@section('noidung')
<br>
<a href="{{ url('/cat', [$tin->loaiTin]) }}"><i style="font-size: 20px" class="fa fa-arrow-left    "></i></a>
<h2 class="text-center">{{$tin->tieuDe}}</h2>
<br>
<h3>{{$tin->tomTat}}</h3>
<br>
<div id="noidung">
    {!! $tin->noiDung !!}
</div>
@endsection
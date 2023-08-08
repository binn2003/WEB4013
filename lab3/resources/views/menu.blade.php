<?php
$loaitin_arr = DB::table('loaitin')->select('idLT','moTa')
->orderBy('thuTu','asc')
->where('AnHien','=','1')
->limit(5)->get();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            @foreach ($loaitin_arr as $lt)
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/cat',[$lt->idLT]) }}">{{$lt->moTa}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</nav>

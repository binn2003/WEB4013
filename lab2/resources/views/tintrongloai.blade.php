<style>
    a {
        text-decoration: none;
    }

    .tintrongloai {
        margin: 20px;
        
    }
    i{
        color: red;
    }
</style>

<div class="tintrongloai">
    <h1> Tin Trong Loại <i>{{$tenloai->moTa}}</i></h1>
    <hr>
    @php
    foreach( $data as $tin) {
    echo "<div class='row'>";
        echo "<h3><a href='/tin/{$tin->id}'> {$tin->tieuDe} </a></h3>";
        echo "<p> {$tin->tomTat} </p>";
        echo "</div>
    <hr>";
    }
    @endphp
</div>
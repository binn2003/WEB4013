<style>
    .chitiet{
        margin: 20px;
    }
    #noidung{
        font-size: large;
        text-align: justify;
    }
</style>

<div class="chitiet">
    <h1> {{$tin->tieuDe}} </h1>
    <h2 style="font-weight: 100;font-style: italic;"> {{$tin->tomTat}} </h2>
    <div id="noidung"> {!! $tin->noiDung !!} </div>
</div>
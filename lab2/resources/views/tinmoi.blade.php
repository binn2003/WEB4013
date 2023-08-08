<style>
    a {
        text-decoration: none;
    }

    .tinmoi{
        margin: 20px;

    }
</style>
<div class="tinmoi">
    <h1>Tin Mới Nhất</h1>
    <hr>
    <?php
    foreach ($data as $tin) {
        echo "<h2><a href='/tin/{$tin->id}'> {$tin->tieuDe} </a></h2>";
        echo "<em> Ngày đăng: {$tin->ngayDang} </em>";
        echo "<hr>";
    };
    ?>
</div>
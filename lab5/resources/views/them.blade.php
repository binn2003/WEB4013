<!doctype html>
<html lang="en">

<head>
    <title>Thêm mới</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <form action="them" method="post" class="col-7 m-auto p-3">
        <h1 class="text-center">Thêm tin</h1>
        <p> ID: <input name="id" class="form-control"></p>
        <p> Tiêu đề: <input name="tieuDe" class="form-control"></p>
        <p> Tóm tắt:
            <textarea name="tomTat" class="form-control"></textarea>
        </p>
        <p> urlHinh: <input name="urlHinh" class="form-control"></p>
        <p> idLT: <select name="idLT" class="form-control">
                <option value="loai1">Tin Thể Thao</option>
                <option value="loai2">Tin Văn Hoá</option>
                <option value="loai3">Tin Xã Hội</option>
                <option value="loai4">Tin Đời Sống</option>
            </select>
        </p>
        <p><button type="submit" class="btn btn-success p-2">Thêm tin</button></p>
        @csrf
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

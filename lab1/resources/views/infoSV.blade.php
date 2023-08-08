<!doctype html>
<html lang="en">

<head>
    <title>Thông tin giới thiệu về bản thân sinh viên</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font-awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body style="background: #F9EFEF;">  
    <div class="row justify-content-center border">
        <div class="card col-md-3 mt-3 mb-3" style="padding: 0">
            <div style="background: #EA5F76;" class="card-header text-center text-light">
                Thông tin sinh viên
            </div>
            <img style="width: 90%" class="card-img-top m-auto" src="{{asset('img/PD06941 Võ Quý Đức.jpg')}}" alt="" width="90">
            <div class="card-body">
                <h5 class="card-title">Họ và tên: {{ $fullname }}</h5>
                <p class="card-text">Ngày sinh: <b>{{$birthday}}</b></p>
                <p class="card-text">Giới tính: <b>{{$gender}}</b></p>
                <p class="card-text">Chuyên ngành: <b>{{$it}}</b></p>
                <p class="card-text">Sở thích: <b>{{$hobby}}</b></p>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
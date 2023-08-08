<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhập Học Sinh</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <br>
    <div class="col-6 m-auto">
        <form action="{{ route('hs_store') }}" method="post" class="p-3 border rounded">
            @csrf
            <h3 class="h4 bg-info p-3 mx-n3 mt-n3 text-white text-center">NHẬP THÔNG TIN HỌC SINH</h3>
            <div class="form-group row">
                <label class="col-3">Họ tên học sinh</label>
                <div class="col-9">
                    <input value="{{ old('hoten') }}" type="text" class="form-control" name="hoten">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Tuổi</label>
                <div class="col-9">
                    <input value="{{ old('tuoi') }}" type="text" class="form-control" name="tuoi">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Ngày sinh</label>
                <div class="col-9">
                    <input value="{{ old('ngaysinh') }}" type="text" class="form-control" name="ngaysinh">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary w-25">Lưu thông tin</button>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>

</body>

</html>

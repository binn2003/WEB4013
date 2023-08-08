<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhập Sinh Viên</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <br>
    <div class="col-6 m-auto">
        <form action="{{ route('sv_store') }}" method="post" class="p-3 border border-seccondary rounded">@csrf
            <div class="form-group row">
                <label class="col-3">Mã SV</label>
                <div class="col-9">
                    <input value="{{ old('masv') }}" type="text" class="form-control" name="masv" placeholder="VD: PS12345">
                    @error('masv')
                        <span class="badge badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Họ tên</label>
                <div class="col-9">
                    <input value="{{ old('hoten') }}" type="text" class="form-control" name="hoten">
                    @error('hoten')
                        <span class="badge badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Tuổi</label>
                <div class="col-9">
                    <input value="{{ old('tuoi') }}" type="text" class="form-control" name="tuoi">
                    @error('tuoi')
                        <span class="badge badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Ngày sinh</label>
                <div class="col-9">
                    <input value="{{ old('ngaysinh') }}" type="text" class="form-control" name="ngaysinh" placeholder="dd/mm/yyyy">
                    @error('ngaysinh')
                        <span class="badge badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">CMND</label>
                <div class="col-9">
                    <input value="{{ old('cmnd') }}" type="text" class="form-control" name="cmnd">
                    @error('cmnd')
                        <span class="badge badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Email</label>
                <div class="col-9">
                    <input value="{{ old('email') }}" type="text" class="form-control" name="email" placeholder="VD: email@fpt.edu.vn">
                    @error('email')
                        <span class="badge badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary w-25">Xử lý</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>

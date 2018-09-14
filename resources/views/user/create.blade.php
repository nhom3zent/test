@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>
        <div class="row">
            <h2>Đăng ký thành viên</h2>
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
        <div class="row justify-content-center">
            <form action="{{ route('storeUser') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nhập tên thành viên" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Nhập email thành viên" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="number_phone" placeholder="Nhập SĐT thành viên" required value="{{ old('number_phone') }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="password" placeholder="Nhập MK thành viên" required value="{{ old('password') }}">
                </div>
                <div class="footer pull-right">
                    <a href="{{ route('home') }}" class="btn btn-default">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Tạo mới</button>
                </div>
            </form>
        </div>
    </div>
@endsection

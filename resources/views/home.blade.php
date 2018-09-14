@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <h2>Danh sách thành viên</h2>
    </div>
    <a href="{{route('createUser')}}" class="btn btn-success">Thêm thành viên </a>
    <div class="row justify-content-center">
        <div class="row">
            @if(isset($users))
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Tên</td>
                            <td>Email</td>
                            <td>SĐT</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->number_phone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection

@extends('admin.layouts.default')

@section('title')
    @parent
    | Danh sách San Pham
@endsection

@push('styles')

@endpush


@section('content')
<div class="p-4" style="min-height: 800px;">
    <h4 class="text-primary mb-4">Quản lý người dùng</h4>
    <button class="btn btn-info">Thêm mới</button>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Email</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Nguyễn Văn A</td>
                <td>abc@gmail.com</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Nguyễn Văn A</td>
                <td>abc@gmail.com</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Nguyễn Văn A</td>
                <td>abc@gmail.com</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Nguyễn Văn A</td>
                <td>abc@gmail.com</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection


@push('scripts')

@endpush

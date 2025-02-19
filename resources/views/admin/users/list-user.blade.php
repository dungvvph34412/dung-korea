@extends('admin.layouts.default')

@section('title')
    @parent
    | Danh sách người dùng
@endsection

@push('styles')

@endpush


@section('content')
<div class="p-4" style="min-height: 800px;">
@if(session('message'))
    <div class="alert alert-primary" role="alert">
            {{ session('message')  }}
</div>
@endif
    <h4 class="text-primary mb-4">Quản lý người dùng</h4>
    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
    data-bs-target="#addUser">Thêm mới User</a>
       
    <table class="table mt-3">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listUser as  $key => $value)
            <tr>
                <td>{{ $key + 1  }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>
                    @if($value->role == '1')
                        Admin
                    @elseif($value->role == '2')
                    User
                    @endif    
                </td>
                <td>
                    <button class="btn btn-warning" >Sửa</button>
                    <button class="btn btn-danger" >Xóa</button>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserLabel">Thêm Mới User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('admin.users.addUsers') }}" method="post" >
        @csrf
      <div class="modal-body">
            <div class="mt-3">
                <label for="name">Name</label>
                <input type="name" name="name" id="name"class="form-control">
                @error('name')
            <span class="text-danger" >{{ $message  }}</span>
           @enderror
            </div>
            <div class="mt-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"class="form-control">
                @error('email')
            <span class="text-danger" >{{ $message  }}</span>
           @enderror
            </div>
            <div class="mt-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"class="form-control">
                @error('password')
            <span class="text-danger" >{{ $message  }}</span>
           @enderror
            </div>
            <div class="mt-3">
                <label for="role">Role</label>
               <select name="role" id="role" class="form-control" >
                    <option value="1">Admin</option>
                    <option value="2">User</option>
               </select>
               @error('role')
            <span class="text-danger" >{{ $message  }}</span>
           @enderror
            </div>
    
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')

@endpush

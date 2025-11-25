@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card text-center p-3"><br>
                <!-- Circular small image -->
                <img 
                    src="{{ asset('backend/assets/images/small/img-5.jpg') }}" 
                    alt="Profile" 
                    class="rounded-circle"
                    style="width:120px; height:120px; object-fit:cover; margin:auto;">
                <div class="card-body">
                       <hr> <h4 class="card-title">Name :{{ $adminData->name }}</h4></hr>
                      <hr>  <h4 class="card-title">User Email :{{ $adminData->email }}</h4></hr>
                      <hr>  <h4 class="card-title">User Name :{{ $adminData->username }}</h4></hr>
                      <a href=""class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
               
                    </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

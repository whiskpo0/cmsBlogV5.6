@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit user')
    
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Users
        <small>Edit user</small> 
      </h1>
      <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> <a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ route('backend.users.index') }}">Users</a></li>
            <li class="active">Edit user</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            {!! Form::model($user,[ 
                'method' => 'PUT', 
                'route'  => ['backend.users.update', $user->id], 
                'files'  => TRUE, 
                'id'     => 'user-form'
            ]) !!}
        
            @include('backend.users.form')

          {!! Form::close() !!}
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
@extends('layouts.backend.main')

@section('title', 'MyBlog | Delete Confirmation')
    
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Users
        <small>Delete Confirmation</small> 
      </h1>
      <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> <a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ route('backend.users.index') }}">Users</a></li>
            <li class="active">Delete Confirmation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            {!! Form::model($user,[ 
                'method' => 'DELETE', 
                'route'  => ['backend.users.destroy', $user->id],  
            ]) !!}
          <div class="col-xs-9">
            <div class="box">
              <div class="box-body">
                <p>
                  You have specified this user for deletion:   
                </p>  
                <p>
                  ID #{{ $user->id }}: {{ $user->name }}
                </p>
                <p>
                  <input type="radio" name="delete_option" value="delete" checked> Delete All Content
                </p>
                <p>
                  <input type="radio" name="delete_option" value="attribute"> Attribute content to: 
                  {!! Form::select('selected_user', $users, null) !!}
                </p>                
              </div> 
              <div class="box-footer">
                  <button class="btn btn-danger" type="submit">Confirm Delete</button>
                  <a href="{{ route('backend.users.index') }}" class="btn btn-default">Cancel</a>
              </div> 
            </div>  
          </div>      

          {!! Form::close() !!}
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection

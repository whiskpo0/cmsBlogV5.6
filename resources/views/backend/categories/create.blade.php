@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new category')
    
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Categories
        <small>Add New category</small> 
      </h1>
      <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> <a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ route('backend.categories.index') }}">Categories</a></li>
            <li class="active">Add new</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            {!! Form::model($category,[ 
                'method' => 'POST', 
                'route'  => 'backend.categories.store', 
                'files'  => TRUE, 
                'id'     => 'category-form'
            ]) !!}
        
            @include('backend.categories.form')

          {!! Form::close() !!}
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection

  @include('backend.categories.script')

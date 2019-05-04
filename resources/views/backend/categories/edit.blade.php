@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit category')
    
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Categories
        <small>Edit category</small> 
      </h1>
      <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> <a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ route('backend.categories.index') }}">Category</a></li>
            <li class="active">Edit Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            {!! Form::model($category,[ 
                'method' => 'PUT', 
                'route'  => ['backend.categories.update', $category->id], 
                'files'  => TRUE, 
                'id'     => 'post-form'
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

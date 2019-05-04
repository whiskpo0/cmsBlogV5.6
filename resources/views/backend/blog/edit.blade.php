@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit post')
    
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Blog
        <small>Edit Post</small> 
      </h1>
      <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> <a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ route('backend.blog.index') }}">Blog</a></li>
            <li class="active">Edit Post</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            {!! Form::model($post,[ 
                'method' => 'PUT', 
                'route'  => ['backend.blog.update', $post->id], 
                'files'  => TRUE, 
                'id'     => 'post-form'
            ]) !!}
        
            @include('backend.blog.form')

          {!! Form::close() !!}
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection

  @include('backend.blog.script')

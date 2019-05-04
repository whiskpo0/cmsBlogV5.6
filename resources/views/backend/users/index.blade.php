@extends('layouts.backend.main')

@section('title', 'MyBlog | Users')
    
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Users
            <small>Display All users</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> <a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ route('backend.users.index') }}">Categories</a></li>
            <li class="active">All Users</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                    <div class="box-header clearfix">
                        <div class="pull-left">
                            <a id="add-button" title="Add New" class="btn btn-success" href="{{ route('backend.users.create')}}"><i class="fa fa-plus-circle"></i> Add New</a>
                        </div>
                        <div class="pull-right" ">                        
                        </div>
{{-- 
                        <div class="pull-right">
                            <form accept-charset="utf-8" method="post" class="form-inline" id="form-filter" action="#">
                                <div class="input-group">
                                    <input type="hidden" name="search">
                                    <input type="text" name="keywords" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search..." value="">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-default search-btn" type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive">
                    @include('backend.partials.message')

                      @if (!$users->count())
                        <div class="alert alert-danger">
                            <strong>No Record Found</strong> 
                        </div>
                      @else
                          @include('backend.users.table')                        
                      @endif
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer clearfix">
                    <div class="pull-left">
                        {{-- {{ $posts->appends( Request::query() )->render() }}     --}}
                    </div>
                    <div class="pull-right">                    
                        <small>{{ $usersCount }} {{ str_plural('Item', $usersCount) }} </small>
                    </div>
                </div>
                <!-- /.box -->
              </div>
            </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
      </div>
@endsection

@section('script')
      <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm'); 
      </script>
@endsection
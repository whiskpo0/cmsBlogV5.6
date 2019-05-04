    <table class="table table-bordered table-condesed">
        <thead>
            <tr>
                <th>Action</th>
                <th>Category Name</th>
                <th>Post Count</th>           
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td width="70">
                        {!! Form::open(['method' => 'DELETE', 'route' => ['backend.categories.destroy', $category->id]]) !!}
                        <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('backend.categories.edit', $category->id) }}">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if ($category->id == config('cms.default_category_id'))
                        <button onclick="return false" type="submit" class="btn btn-xs btn-danger delete-row disabled">
                                <i class="fa fa-times"></i>
                        </button>
                        @else
                        <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger delete-row">
                            <i class="fa fa-times"></i>
                        </button>
                        @endif
                        {!! Form::close() !!}
                    </td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->posts->count() }}</td>                    
                </tr>
            @endforeach
        </tbody>
    </table>
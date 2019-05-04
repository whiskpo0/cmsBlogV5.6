    <table class="table table-bordered table-condesed">
        <thead>
            <tr>
                <th>Action</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php $request = request(); ?>
            @foreach ($posts as $post)
                <tr>
                    <td width="70">
                        {!! Form::open(['method' => 'DELETE', 'route' => ['backend.blog.destroy', $post->id]]) !!}
                        @if (check_user_permissions($request, "Blog@edit", $post->id))
                            <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('backend.blog.edit', $post->id) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                        @else 
                            <a title="Edit" class="btn btn-xs btn-default disabled" href="#">
                                <i class="fa fa-edit"></i>
                            </a>
                        @endif
                        @if (check_user_permissions($request, "Blog@destroy", $post->id))
                            <button type="submit" class="btn btn-xs btn-danger delete-row">
                                <i class="fa fa-trash"></i>
                            </button>
                        @else
                            <button type="submit" onclick="return false;" class="btn btn-xs btn-danger disabled">
                                <i class="fa fa-trash"></i>
                            </button>
                        @endif
                        
                        {!! Form::close() !!}
                    </td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author->name }}</td>
                    <td>{{ $post->category->title }}</td>
                    <td>
                        <abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr> | {!! $post->publicationLabel() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
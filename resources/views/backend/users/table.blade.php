    <table class="table table-bordered table-condesed">
        <thead>
            <tr>
                <th>Action</th>
                <th>Name</th>
                <th>Email</th> 
                <th>Role</th>          
            </tr>
        </thead>
        <tbody>
            <?php $currentUser = auth()->user(); ?>
            @foreach ($users as $user)
                <tr>
                    <td width="70">
                       
                        <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('backend.users.edit', $user->id) }}">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if ($user->id == config('cms.default_user_id') || $user->id == $currentUser->id)
                        <button onclick="return false" type="submit" class="btn btn-xs btn-danger delete-row disabled">
                                <i class="fa fa-times"></i>
                        </button>
                        @else
                        <a href="{{ route('backend.users.confirm', $user->id) }}"  class="btn btn-xs btn-danger delete-row">
                            <i class="fa fa-times"></i>
                        </a>
                        @endif
                      
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles->first()->display_name }}</td>                    
                </tr>
            @endforeach
        </tbody>
    </table>
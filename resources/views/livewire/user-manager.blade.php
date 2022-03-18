<div class="mg_main_layout mg_layout_left_padding" style="margin-left: -10%!important; margin-right: 5%!important;">   
    <h1>{{ $title }}</h1>
    <hr>
    {{-- The best athlete wants his opponent at his best. --}}
    <div style="height: 30px">
        @if (session()->has('login_message'))
            <div class="alert alert-success fixed">
                {{ session('login_message') }}
            </div>
        @endif
        @if (session()->has('notify'))
            <div class="alert alert-success fixed">
                {{ session('notify') }}
            </div>
        @endif
    </div>
    <div style="padding-top:25px">
        {{-- {{ $users }} --}}
        <table class="table table-striped table-responsive">
            <thead class="text-capitalize bg-info">
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>created at</th>
                <th>action</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            @if ($user->id === $userLogged->id) <button class="btn btn-sm btn-success" disabled>Logged</button> 
                            @else <button class="btn btn-sm btn-danger" wire:click='delete({{$user->id}})'>Delete</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

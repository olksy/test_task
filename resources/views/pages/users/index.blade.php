@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <style>
        form {
            margin: 0;
        }

        .form-div {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
    </style>
    <section>
        <div class="content">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h1>Users</h1>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="form-div">
                                    <a href="{{ route('pages.users.edit', $user->id) }}" class="btn btn-info btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('pages.users.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
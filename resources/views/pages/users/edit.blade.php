@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <style>
        .submit-btn,
        .form-group {
            margin-top: 20px;
        }
    </style>
    <section>
        <div class="content">
            <h1>Edit User</h1>

            <form action="{{ route('pages.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <button type="submit" class="submit-btn">Update</button>
            </form>
        </div>
    </section>
@endsection
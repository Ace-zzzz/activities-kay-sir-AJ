@extends('layout.main-master')

@section('content')

<style>
    body {
        background-color: #0d1f4b; 
        background-image: url('{{ URL('images/1344914.jpeg') }}'); 
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat; 
        color: #ffffff; 
    }

    .form-container {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        background-color: rgba(13, 31, 75, 0.9); 
        border-radius: 10px;
        border: 2px solid #80d6ff;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5); 
    }

    .form-container h1 {
        text-align: center;
        color: #80d6ff;
        margin-bottom: 20px;
    }

    form label {
        font-weight: bold;
        display: block;
        margin: 10px 0 5px;
        color: #80d6ff;
    }

    form input, form textarea, form select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #00aaff;
        border-radius: 5px;
        background-color: #000000;
        color: #ffffff;
    }

    form input:focus, form textarea:focus, form select:focus {
        border-color: #80d6ff;
        outline: none;
    }

    form button {
        background-color: #00aaff;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    form button:hover {
        background-color: #80d6ff;
    }

    form p {
        color: red;
        font-size: 14px;
    }

    .blogs-list {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        background-color: rgba(13, 31, 75, 0.9); 
        border-radius: 10px;
        border: 2px solid #80d6ff;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5); 
    }

    .blogs-list h2 {
        color: #80d6ff;
        margin-bottom: 20px;
    }

    .blogs-list table {
        width: 100%;
        border-collapse: collapse;
    }

    .blogs-list th, .blogs-list td {
        padding: 10px;
        border: 1px solid #80d6ff;
        text-align: left;
    }

    .blogs-list th {
        background-color: #00aaff;
        color: white;
    }

    .blogs-list td {
        background-color: rgba(13, 31, 75, 0.9);
        color: #ffffff;
    }
</style>

<div class="container">
    <div class="form-container">
        <h1>Create Blog</h1>
        <form method="POST" action=" ">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title') <p>{{ $message }}</p> @enderror

            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ old('description') }}</textarea>
            @error('description') <p>{{ $message }}</p> @enderror

            <label for="category">Category:</label>
            <select name="category_id" id="category_id" required>
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }}  </option>
                @endforeach
            </select>
            @error('category_id') <p>{{ $message }}</p> @enderror

            <button type="submit">Save</button>
        </form>
    </div>

    <div class="blogs-list">
        <h2>Saved Blogs</h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>{{ $blog->category->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
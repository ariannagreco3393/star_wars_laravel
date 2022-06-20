@extends('layouts.admin')
@section('content')
<h1>All posts</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>title</th>
                <th>CoverImage</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td>{{post->id}}</td>
                <td>{{post->title}}</td>
                <td><img width="120px" src="" alt=""></td>
                <td><a href="">View</a></td>
                <td><a href="">Edit</a></td>
                delete
            </tr>
            @empty
            <tr>
                <td>no posts yet!</td>
            </tr>
        </tbody>
    </table>

</div>
@endsection
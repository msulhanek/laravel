@extends('layout.app')

@section('content')
<a href="/posts" class="btn btn-danger">Go Back</a>
<h1>{{$post->title}}</h1>
<div class="card-body">Written at {{$post->created_at}}</div>
<hr>
<div>{{$post->body}}</div>
@endsection
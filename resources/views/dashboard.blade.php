@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header">Dashboard</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-secondary">Dashboard</h1> 
                    <p><a href="/posts/create" class="btn btn-primary" >Add Post</a></p>
                    <table class="table text-center">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Title</th>
                              <th scope="col">Created by</th>
                              <th scope="col">Created at</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($posts as $post)
                            <tr>
                              <th scope="row">{{$post->id}}</th>
                              <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                              <td>{{$post->user->name}}</td>
                              <td>{{$post->created_at}}</td>
                              <td> <div class="btn-group">
                                     <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> &nbsp; 
                                     {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{FORM::submit('Delete',['class'=>'btn btn-danger'])}} 
                                    {!!Form::close()!!}
                                </div>
                            </td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

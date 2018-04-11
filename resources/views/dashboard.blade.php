@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">CREAR POSTS</a>
                    <h3>Tus POSTS</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>TITULO</th>
                            <th></th>
                            <th></th>                           
                        </tr>
                        @foreach($posts as $post)



                            
                            <tr>
                                <th><a href="/posts/{{$post->id}}">{{$post->title}}</a></th>
                            <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary" >Edit</a></th>
                            <th>
                                {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method' =>'POST', 'class'=>'float-right '])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger '])}}
                                {!!Form::close()!!}
                            </th>
                            </tr>
                        @endforeach
                    </table>
                        
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/storage/cover_images/{{$post->cover_image}}')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1>{{$post->title}}</h1>
               <!-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2>-->
                <span class="meta">Escrito por
                  {{$post->user->name}}
                  en {{$post->created_at}}</span>
              </div>
            </div>
          </div>
        </div>
      </header>
  
      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                    {!!$post->body!!}
                
              
            </div>
          </div>
      @if(!Auth::guest())
        @if(Auth::user()->id==$post->user_id)
          <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">EDITAR</a>

              {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method' =>'POST', 'class'=>'float-right'])!!}
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
              {!!Form::close()!!}
        @endif
      @endif
        </div>
        
      </article>
  
      
@endsection
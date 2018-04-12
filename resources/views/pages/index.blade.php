@extends('layouts.app')


    @section('content')

        <!-- Page Header -->
        <header class="masthead" style="background-image: url('https://images7.alphacoders.com/411/thumb-1920-411820.jpg')">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                  <h1>{{ config('app.name', 'Laravel') }}</h1>
                  <span class="subheading"></span>
                </div>
              </div>
            </div>
          </div>
        </header>
      
        

        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            @if(count($posts)>0)
            @foreach($posts as $post)
             
            <div class="row">
               <div class="col-md-4 col-sm-4">
                   <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
         
               </div>
         
               <div class="col-md-8 col-sm-8">
                   <div class="post-preview">
                       <a href="posts/{{$post->id}}">
                          
                         <h2 class="post-title">
                             {{$post->title}}
                         </h2>
                        
                       </a>
                       <p class="post-meta">Creado por
                         {{$post->user->name}}
                         en {{$post->created_at}}</p>
                     </div>
             </div>
            </div>
              <hr>
            @endforeach
                 {{$posts->links()}}
             @else
                 <p>No se encontraron Posts</p>
             @endif
              {{$posts->links()}}

          </div>
        </div>
        
      <hr>
    
    @endsection

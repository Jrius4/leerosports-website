@extends('layouts.home.main')

@section('content')
    <header class="mt-0 pt-0" style="margin-top:-200px">
    <div style="background:{{false?null:'radial-gradient(circle, rgba(28,41,223,0.8799719716988358) 0%, rgba(5,96,203,1) 100%);'}} min-height:250px;min-width:100%;margin-top:-20px">
            <img src="" alt="">
            <div class="row d-flex justify-content-center">
                    <div class=" col-md-6 text-light align-self-baseline">
                            <h3>Blog</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quasi temporibus explicabo nulla maxime, eveniet, sapiente quo maiores commodi natus totam consequatur esse quidem architecto? Pariatur at odit natus sint!
                        </p>

                    </div>
            </div>
        </div>
    </header>
    <div class="container my-3">
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-uppercase"> <a href="{{url('/')}}" class="text-primary">Home</a></li>
          <li class="breadcrumb-item active text-uppercase"><a href="{{url('/projects')}}" class="text-primary">Projects</a></li>
        </ol>
    </div>
    <div class="container">

        <div class="row d-flex justify-content-space">

            <div class="col-md-12">
                @if (! $projects->count())
                    <div class="alert alert-warning">
                        <p>Nothing Found</p>
                    </div>
                @else

                <div class="row d-flex justify-content-space">
                    {{-- @include('blog.alert') --}}

                    {{-- @foreach($posts as $post)

                    <div class="col-md-4 mb-2">
                        {{-- <article class="card">
                            @if ($post->image_url)
                                <div class="">
                                    <a style="text-decoration:none" href="{{ route('blog.show', $post->slug) }}">
                                        <img style="height: 200px; width: 100%; display: block;" src="{{ $post->image_url }}" alt="" >
                                    </a>
                                </div>
                            @endif
                                <div class="card-header">
                                    <h4 class="card-title"><a style="text-decoration:none" href="{{ route('blog.show', $post->slug) }}">{{ Str::words($post->title,5) }}</a></h4>
                                </div>

                                <div class="card-body">
                                    {!! Str::words($post->excerpt_html,15) !!}
                                </div>

                                <div class="card-footer clearfix">
                                    <div class="mr-auto">
                                        <span>
                                            <small class="text-muted"><i class="fa fa-user"></i><a style="text-decoration:none" href="{{ route('author', $post->author->slug) }}">{{" "}}{{ $post->author->name }}{{" "}}</a></small>
                                            <small class="text-muted"><i class="fa fa-clock-o"></i><time> {{ $post->date }}{{" "}}</time></small>
                                            <small class="text-muted"><i class="fa fa-folder"></i><a style="text-decoration:none" href="{{ route('category', $post->category->slug) }}">{{ $post->category->title }}{{" "}}</a></small>
                                            <small class="text-muted"><i class="fa fa-tag"></i>{!! $post->tags_html !!}</small>
                                            <small class="text-muted"><i class="fa fa-comments"></i><a style="text-decoration:none" href="{{ route('blog.show', $post->slug) }}#post-comments">{{ $post->commentsNumber() }}{{" "}}</a></small>
                                        </span>
                                    </div>
                                    <div class="ml-auto">
                                        <a style="text-decoration:none" href="{{ route('blog.show', $post->slug) }}">Continue Reading &raquo;</a>
                                    </div>
                                </div>

                        </article>


                        @if($post->category->title)
                                <h2>{{ $post->category->title }}</h2>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="post-item">
                                        <div class="image"><a href="post.html"><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/blog1.jpg"
                                                alt="" class="img-fluid"></a></div>
                                        <h4><a href="post.html">{{$post->title}}</a></h4>
                                        <p class="intro">{!!Str::words($post->excerpt_html,5)!!}</p>
                                        <p class="read-more"><a href="{{$post->slug}}" class="btn btn-unique-outline">Continue reading</a></p>
                                        </div>
                                    </div>
                                </div>

                        @endif

                    </div>

                    @endforeach --}}

                    {{-- @foreach ($projects as $category)
                        @if ($category->posts->count()>0)
                            <div class="row d-flex container-fluid justify-content-between mb-3" style="border-bottom: 2px solid rgba(2, 6, 17, 0.043);">
                                    <div class="col-md-6 ml-auto">
                                        <h3>{{$category->title}}</h3>
                                    </div>
                                    <div class="col-md-6 mr-auto text-right">
                                        <small><a href="{{ route('category', $category->slug) }}" style="text-decoration:none">See All</a></small>
                                    </div>

                            </div>
                            <div class="row">
                                @foreach ($posts as $post)
                                    @if ($post->category->title == $category->title  )

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="post-item">
                                                @if ($post->image)
                                                    <div class="image figure"><a style="text-decoration:none" href="{{ route('blog.show', $post->slug) }}"><img src="{{ $post->image_url }}"
                                                            alt="" class="figure-img img-fluid rounded"></a>
                                                    </div>
                                                @endif


                                            <h4><a style="text-decoration:none" href="{{ route('blog.show', $post->slug) }}">{!!Str::words($post->title,5)!!}</a></h4>
                                            <p class="intro">{!!Str::words($post->excerpt_html,5)!!}</p>
                                            <p class="read-more"><a style="text-decoration:none" href="{{ route('blog.show', $post->slug) }}" class="btn btn-unique-outline btn-md btn-sm">Continue reading</a></p>
                                            </div>
                                        </div>

                                    @endif
                                @endforeach
                            </div>

                        @endif


                    @endforeach --}}


                    <div class="row">
                        @foreach ($projects as $project)
                            {{-- @if ($project->category->title == $category->title  ) --}}

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="post-item row d-flex justify-content-start">
                                        @if ($project->image)
                                            <div class="image figure col-md-6"><a style="text-decoration:none" href="{{ route('projects.show', $project->slug) }}"><img src="{{ $project->image_url }}"
                                                    alt="" class="figure-img img-fluid rounded"></a>
                                            </div>
                                        @else
                                            <div class="image figure col-md-6 bg-dark h-auto w-100 rounded" style="min-height:250px" ><a style="text-decoration:none" href="{{ route('projects.show', $project->slug) }}"><img src=""
                                                alt="" class="figure-img img-fluid rounded"></a>
                                            </div>
                                        @endif

                                    <div class="col-md-6 mr-auto">
                                        <h4><a style="text-decoration:none" href="{{ route('projects.show', $project->slug) }}">{!!Str::words($project->title,5)!!}</a></h4>
                                        <p class="intro">{!!Str::words($project->excerpt_html,15)!!}</p>
                                        <p class="read-more"><a style="text-decoration:none" href="{{ route('projects.show', $project->slug) }}" class="btn btn-unique-outline btn-md btn-sm">Continue reading</a></p>
                                    </div>
                                    </div>
                                </div>

                            {{-- @endif --}}
                        @endforeach
                    </div>


                </div>
                @endif


                <nav class="row justify-content-center">
                  {{ $projects->appends( Request::query() )->render() }}
                </nav>
            </div>


        </div>
    </div>

@endsection

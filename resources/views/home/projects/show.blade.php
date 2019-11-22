@extends('layouts.home.main')

@section('content')

<header class="mt-0 pt-0" style="margin-top:-200px">
        <div style="background:{{false?null:'radial-gradient(circle, rgba(28,41,223,0.8799719716988358) 0%, rgba(5,96,203,1) 100%);'}} min-height:250px;min-width:100%;margin-top:-20px">
                <img src="" alt="">
                <div class="row d-flex justify-content-center">
                        <div class=" col-md-6 text-light align-self-baseline py-2">

                            <h2>{{ $project->title }}</h2>
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
        <div class="row">
            <div class="col-md-12">
                <article class="post-item post-detail">
                    @if ($project->image)
                        <div class="post-item-image figure">
                            <img class="figure-img img-fluid rounded" src="{{ $project->image_url }}" alt="{{ $project->title }}">
                        </div>
                    @else
                        <div class="d-none"></div>
                    @endif

                    <div class="post-item-body">
                        <div class="padding-10">
                            <h1>{{ $project->title }}</h1>
                            <div>
                                {!! $project->body_html !!}
                            </div>
                        </div>
                    </div>
                </article>



            </div>

        </div>
    </div>

@endsection
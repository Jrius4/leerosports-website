@extends('layouts.home.main')

@section('content')

<div class="mt-0 pt-0 container-fluid" style="margin-top:-200px;background:{{false?null:'radial-gradient(circle, rgba(28,41,223,0.8799719716988358) 0%, rgba(5,96,203,1) 100%);'}} ">
    <div  class="row d-flex justify-content-center" style="min-height:250px;min-width:100%;margin-top:-20px">

                <div class="col-md-6 text-light py-5">

                        <p>
                            {!!$serviceCategory->description!!}
                        </p>
                        <h3>{{$serviceCategory->title}}</h3>


                </div>

    </div>
</div>

    <div class="my-4"></div>
    {{-- <div class="container my-3">
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-uppercase"> <a href="{{url('/')}}" class="text-primary">Home</a></li>
          <li class="breadcrumb-item active text-uppercase"><a href="{{url('/projects')}}" class="text-primary">Projects</a></li>
        </ol>
    </div> --}}

        <div class="row d-flex justify-content-space container-fluid">

            <div class="col-xl-12">
                @if (! $services->count())
                    <div class="alert alert-warning">
                        <p>Nothing Found</p>
                    </div>
                @else

                <div class="row d-flex justify-content-space">

                    <div class="row">
                        <div class="d-none">
                                {{$alt_class=$services->count()}}
                        </div>
                        @foreach ($services as $service)
                            @if ($service->serviceCategory->title == $serviceCategory->title  )


                                    <div class="row d-flex justify-content-center">
                                        {{-- @if ($service->image)
                                            <div class="image figure col-md-6"><a style="text-decoration:none" href="{{ route('projects.show', $service->slug) }}"><img src="{{ $service->image_url }}"
                                                    alt="" class="figure-img img-fluid rounded"></a>
                                            </div>
                                        @else
                                            <div class="image figure col-md-6 bg-dark h-auto w-100 rounded" style="min-height:250px" ><a style="text-decoration:none" href="{{ route('projects.show', $service->slug) }}"><img src=""
                                                alt="" class="figure-img img-fluid rounded"></a>
                                            </div>
                                        @endif --}}

                                        <div class="col-md-7 bg-dark p-5 my-1 post-life {{$alt_class%2==0?'mr-auto':'ml-auto'}}">
                                            <h4><a style="text-decoration:none;color:teal" href="{{ route('projects.show', $service->slug) }}">{!!Str::words($service->title,5)!!}</a></h4>
                                            <p class="intro">{!!$service->body_html!!}</p>
                                            {{-- <p class="read-more"><a style="text-decoration:none" href="{{ route('projects.show', $service->slug) }}" class="btn btn-unique-outline btn-md btn-sm">Continue reading</a></p> --}}
                                        </div>
                                    </div>

                                    <div class="d-none">
                                        {{$alt_class-=1}}
                                    </div>
                            @endif

                        @endforeach
                    </div>


                </div>
                @endif


                <nav class="row justify-content-center">
                  {{ $services->appends( Request::query() )->render() }}
                </nav>
            </div>


        </div>


@endsection

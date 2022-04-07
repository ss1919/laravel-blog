@extends('layouts.category_layout')

@section('title', "Tag ::  $tag->title")

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <!-- BLOG START -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-md-6 col-lg-6">
                                    <div class="blog__grid mt-0">
                                        <!-- BLOG  -->
                                        <div class="card__image">
                                            <div class="card__image-header h-250">
                                                <img src="{{ $post->getImage() }}" alt=""
                                                    class="img-fluid w100 img-transition">
                                                <div class="info"> <i class="fa fa-eye"></i> {{ $post->views }} </div>
                                            </div>
                                            <div class="card__image-body">
                                                <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019
                                            </span> -->
                                                <h6 class="text-capitalize">
                                                    <a href="{{ route('posts.single', ['slug' => $post->slug]) }}">{{ $post->title }} </a>
                                                </h6>
                                                <p class=" mb-0">
                                                    {!! $post->description !!}

                                                </p>


                                            </div>
                                            <div class="card__image-footer">
                                                
                                                <ul class="list-inline my-auto">
                                                    <li class="list-inline-item">
                                                        <a href="{{ route('categories.single', ['slug' => $tag->slug]) }}">
                                                            
                                                         {{ $post->getPostDate() }}     <i class="fa fa-folder-open"></i> {{ $tag->title }}
                                                        </a>

                                                        {{-- {{ print_r($tag->title) }} --}}

                                                    </li>

                                                </ul>
                                                <ul class="list-inline my-auto ml-auto">
                                                    <li class="list-inline-item">
                                                        <a href="{{ route('posts.single', ['slug' => $post->slug]) }}"
                                                            class="btn btn-sm btn-primary "><small
                                                                class="text-white ">read more <i
                                                                    class="fa fa-angle-right ml-1"></i></small></a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- END BLOG -->
                                    </div>
                                </div>
                            @endforeach

                            
                        </div>

                    </div>

                    {{ $posts->links() }}

                </div>
                <!-- END BLOG  -->

                <!-- WIDGET BLOG -->
                @include('layouts.sitebar')
                <!-- END WIDGET BLOG -->
            </div>
        </div>
    </section>

@endsection

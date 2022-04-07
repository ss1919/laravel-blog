@extends('layouts.layout')

@section('title', $post->title)

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single__blog-detail">
                        <h1>
                            {{ $post->title }}
                        </h1>

                        <div class="single__blog-detail-info">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <figure class="image-profile">
                                        <img src="" class="img-fluid" alt="">
                                    </figure>
                                </li>

                                <li class="list-inline-item">
                                    <span class="text-dark text-capitalize ml-1">
                                        {{ $post->getPostDate() }}
                                    </span>
                                </li>


                            </ul>
                        </div>
                        <figure>
                            <img src="{{ $post->getImage() }}" class="img-fluid" alt="">
                        </figure>

                        <p class="drop-cap">
                            {!! $post->description !!}
                        </p>


                        <p>
                            {!! $post->content !!}
                        </p>

                        <!-- BLOCKQUOTE -->
                        <blockquote class="block-quote">
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at
                                its layout.
                            </p>
                            <cite>
                                Tom Cruise
                            </cite>
                        </blockquote>
                        <!-- END BLOCKQUOTE -->

                        <p>
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia.
                        </p>



                        <!-- TAGS -->
                        @if ($post->tags->count())
                            <div class="blog__tags mb-4">
                                <ul class="list-inline">

                                    @foreach ($post->tags as $tag)
                                        <li class="list-inline-item">
                                            <a href="{{ route('tags.single', ['slug' => $tag->slug]) }}">
                                                {{ $tag->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- END TAGS -->

                        <!-- AUTHOR -->
                        <!-- Profile author -->
                        <div class="wrap__profile">
                            <div class="wrap__profile-author">
                                <figure>
                                    <img src="images/80x80.jpg" alt="" class="img-fluid img-circle">
                                </figure>
                                <div class="wrap__profile-author-detail">
                                    <div class="wrap__profile-author-detail-name">author</div>
                                    <h5>jhon doe</h5>
                                    <p>Hi, nice to meet you let me introduce for you, I am Jhon Doe freelancer designer
                                        & web programmer from
                                        indonesia,
                                        base lampung</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-social btn-social-o facebook ">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-social btn-social-o twitter ">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-social btn-social-o instagram ">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-social btn-social-o telegram ">
                                                <i class="fa fa-telegram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-social btn-social-o linkedin ">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END AUTHOR -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="single_navigation-prev">
                                    <a href="#">
                                        <span>previous post</span>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, similique.
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_navigation-next text-left text-md-right">
                                    <a href="#">
                                        <span>next post</span>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, nesciunt.
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <!-- COMMENTS -->
                        <h6>3 Comments:</h6>
                        <div class="single__detail-features-review">
                            <div class="media mt-4">
                                <img class="mr-3 img-fluid rounded-circle" src="images/80x80.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-0">Jhon doe</h6>
                                    <span class="mb-3">Mei 13, 2020</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star selected"></i>
                                            <i class="fa fa-star selected"></i>
                                            <i class="fa fa-star selected"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="list-inline-item">3/5</li>
                                    </ul>
                                    <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                        ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                        Donec
                                        lacinia congue felis in faucibus.</p>

                                    <div class="media mt-4">
                                        <a class="pr-3" href="#">
                                            <img src="images/80x80.jpg" alt="" class="img-fluid rounded-circle">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="mt-0">Christine </h6>
                                            <span class="mb-3">Mei 13, 2020</span>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                </li>
                                                <li class="list-inline-item">5/5</li>
                                            </ul>
                                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                scelerisque ante sollicitudin. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media mt-4">
                                <img class="mr-3 img-fluid rounded-circle" src="images/80x80.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-0">Jhon Doe</h6>
                                    <span class="mb-3">Mei 13, 2020</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star selected"></i>
                                            <i class="fa fa-star selected"></i>
                                            <i class="fa fa-star selected"></i>
                                            <i class="fa fa-star selected"></i>
                                            <i class="fa fa-star selected"></i>
                                        </li>
                                        <li class="list-inline-item">5/5</li>
                                    </ul>
                                    <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                        ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                        Donec
                                        lacinia congue felis in faucibus.</p>


                                </div>
                            </div>
                            <!-- COMMENT -->
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mb-2">Your rating for this listing:</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star selected"></i>
                                            <i class="fa fa-star selected"></i>
                                            <i class="fa fa-star selected"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="list-inline-item">3/5</li>
                                    </ul>
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" class="form-control" required="required">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>What's your Email?</label>
                                        <input type="email" class="form-control" required="required">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control" required="required">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Your message</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary float-right "> Submit review <i
                                    class="fa fa-paper-plane ml-2"></i></button>
                            <!-- END COMMENT -->

                        </div>
                        <!-- END COMMENTS -->
                    </div>
                </div>
                <!-- WIDGET BLOG -->
                @include('layouts.sitebar')
            </div>
            <!-- END WIDGET BLOG -->
        </div>
    </section>
@endsection

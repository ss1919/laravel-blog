<div class="col-lg-4">
    <div class="sticky-top">
        <aside>
            <div class="widget__sidebar mt-0">
                <div class="widget__sidebar__header">
                    <h6 class="text-capitalize">search</h6>
                </div>
                <div class="widget__sidebar__body">
                    <div class="input-group">
                        <input type="text" name="search_term_string" class="form-control"
                            placeholder="Search article . . .">
                        <span class="input-group-btn">
                            <button type="submit" class="btn-search btn"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>

            </div>
        </aside>
        <aside>
            <div class="widget__sidebar">
                <div class="widget__sidebar__header">
                    <h6 class="text-capitalize">category</h6>
                </div>
                <div class="widget__sidebar__body">
                    <ul class="list-unstyled">
                        @foreach ($cats as $cat)
                            <li>
                                <a href="{{ route('categories.single', ['slug' => $cat->title]) }}"
                                    class="text-capitalize">
                                    {{ $cat->title }}
                                    <span class="badge badge-primary">{{ $cat->posts_count }}</span>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>

            </div>
        </aside>
        <aside>
            <div class="widget__sidebar">
                <div class="widget__sidebar__header">
                    <h6 class="text-capitalize">recents news</h6>
                </div>
                <div class="widget__sidebar__body">
                    <!-- ONE -->
                    @foreach ($popular_posts as $post)
                        <div class="widget__sidebar__body-img">
                            <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
                            <div class="widget__sidebar__body-heading">
                                <h6 class="text-capitalize">
                                    <a
                                        href="{{ route('posts.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                </h6>
                            </div>
                            <span class="badge badge-secondary p-1 text-capitalize mb-1">{{ $post->getPostDate() }} |
                                <i class="fa fa-eye"></i> {{ $post->views }}
                            </span>
                        </div>
                    @endforeach

                </div>
            </div>
        </aside>
        <aside>
            <div class="widget__sidebar">
                <div class="widget__sidebar__header">
                    <h6 class="text-capitalize">tags</h6>
                </div>
                <div class="widget__sidebar__body">
                    <div class="blog__tags p-0">
                        <ul class="list-inline">
                            @foreach ($tags_posts as $tag)
                                <li class="list-inline-item">
                                    <a href="{{ route('tags.single', ['slug' => $tag->slug]) }}">
                                        {{ $tag->title }}
                                    </a>
                                </li>
                            @endforeach



                        </ul>
                    </div>
                </div>

            </div>
        </aside>
    </div>
</div>

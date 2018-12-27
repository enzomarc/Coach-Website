@extend('layouts/page', ['title' => 'Coach - Blog', 'page_title' => 'Blog', 'id' => 'blog-header'])

@content

<div class="container blog">

    <div class="row">
        <div class="sort">
            <a href="@url('blog.index')">Les plus récents</a> | <a href="@url('blog.index.older')">Les plus anciens</a>
        </div>
    </div>

    <div class="posts">

        <div class="posts-row">

            @foreach($posts as $post)

            <div class="post">
                <div class="row post-img" style="background-image: url('uploads/posts_bg/{{ $post->image }}'); background-size: cover; background-repeat: no-repeat; height: 10em;"></div>
                <div class="post-desc">
                    <a href="@url('blog.show', ['post' => $post->id])" class="post-link">
                        <h6 class="post-title">{{ $post->title }}</h6>
                    </a>
                    <p class="post-descripiton">
                        {{ substr($post->description, 0, 200) . " ..." }}
                    </p>
                    <p class="date">{{ date('Y/m/d', strtotime($post->created_at)) }}</p>
                    <a href="@url('blog.show', ['post' => $post->id])" class="post-btn">Lire la suite</a>
                </div>
            </div>

            @endforeach

        </div>

    </div>

</div>

@endcontent
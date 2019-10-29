<section id="posts">
  <div class="container">
    <div class="row text-center">
      <div class="col-12 title">
        <h2>Статьи</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row posts">
      @foreach ($posts as $post)   
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12" onclick="window.location.href = '{{route('post',['id'=>$post->id])}}'">
          <div class="posts-card">
            <div class="posts-card-image" style="background-image: url({{ asset('/img/posts/'.$post->image) }});"></div>
            <div class="posts-card-tittle">{{$post->tittle}}</div>
            <div class="posts-card-description">{{$post->description}}</div>
            <div class="posts-card-date">{{$post->created_at}}</div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
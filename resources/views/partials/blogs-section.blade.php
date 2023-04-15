@if(count($blogs) > 0)
<section class="section">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading-feed">Latest Blogs</h2>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex">
            @foreach ($blogs as $key => $blog)
            @if($key == 0)
            <div class="col-md-6 col-lg-8 mb-4">
                <div class="step-feeds first" data-aos="fade-right">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="card-title"> {{$blog->title}}</h5>
                            <p class="card-subtitle feed-text"> {{ $blog->created_at->format('l jS M, Y') }} </p>
                            <p class="card-subtitle feed-text mb-4">Posted by: {{$blog->posted_by}} </p>
                        </div>
                        <div class="col-md-2 text-end feed-img">
                            <img src="{{$blog->image}}" alt="Image"
                                class="img-fluid rounded-circle mb-2">
                        </div>
                    </div>
                    <p class="card-text">{{$blog->content}}</p>
                    <a href="{{ url('blog-single/'.$blog->id) }}" style="font-weight:bold;">Read >></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                @elseif($key == 1)
                <div class="step-feeds mb-2" data-aos="fade-right">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="card-title"> {{$blog->title}}</h5>
                            <p class="card-subtitle feed-text"> {{ $blog->created_at->format('l jS M, Y') }} </p>
                            <p class="card-subtitle feed-text mb-4">Posted by: {{$blog->posted_by}} </p>
                        </div>
                        <div class="col-md-2 text-end feed-img">
                            <img src="{{$blog->image}}" alt="Image"
                                class="img-fluid rounded-circle mb-2">
                        </div>
                    </div>
                    <p class="card-text">{{$blog->content}}</p>
                    <a href="{{ url('blog-single/'.$blog->id) }}" style="font-weight:bold;">Read >></a>
                </div>   
            </div>
            @elseif($key == 2)
            <div class="col-lg-4 col-md-6">
                <div class="step-feeds" data-aos="fade-right">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="card-title"> {{$blog->title}}</h5>
                            <p class="card-subtitle feed-text"> {{ $blog->created_at->format('l jS M, Y') }} </p>
                            <p class="card-subtitle feed-text mb-4">Posted by: {{$blog->posted_by}} </p>
                        </div>
                        <div class="col-md-2 text-end feed-img">
                            <img src="{{$blog->image}}" alt="Image"
                                class="img-fluid rounded-circle mb-2">
                        </div>
                    </div>
                    <p class="card-text">{{$blog->content}}</p>
                    <a href="{{ url('blog-single/'.$blog->id) }}" style="font-weight:bold;">Read >></a>
                </div>
            </div>
            @else
            <div class="col-lg-4 col-md-6" >
                <div class="step-feeds" data-aos="fade-right">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="card-title"> {{$blog->title}}</h5>
                            <p class="card-subtitle feed-text"> {{ $blog->created_at->format('l jS M, Y') }} </p>
                            <p class="card-subtitle feed-text mb-4">Posted by: {{$blog->posted_by}} </p>
                        </div>
                        <div class="col-md-2 text-end feed-img">
                            <img src="{{$blog->image}}" alt="Image"
                                class="img-fluid rounded-circle mb-2">
                        </div>
                    </div>
                    <p class="card-text">{{$blog->content}}</p>
                    <a href="{{ url('blog-single/'.$blog->id) }}" style="font-weight:bold;">Read >></a>
                </div>
            </div>
            @endif        
            @endforeach        
        </div>
        <div>
            <p class="justify-content-center text-center mt-5 "><a href="blog" class="btn btn-primary btn-xs">All Blog &nbsp;&nbsp;<i
            class="fa fa-arrow-right fa-beat"></i></a></p>
        </div>
    </div>
   
</section>
@endif
<section class="section pb-0">
    {{-- <div class="row justify-content-center text-center mb-5">
        <div class="col-md-5" data-aos="fade-up">
            <h2 class="mb-5">Our Services</h2>
        </div>
    </div> --}}
    <div class="container">
        <div class="row mb-5">
            @foreach ($modules as $key => $module)
                @if ($key < 6)
                    @if ($key < 3)
                        <div class="col-md-6 col-xl-4">
                            <div class="step" data-aos="fade-right">
                                <img src="{{ $module['image'] }}" alt="" class="features-icon mb-2">
                                <h4>{{ $module['name'] }}
                                    {{-- <hr class="underline left"> --}}
                                </h4>
                                {{-- <p class="mt-3" >{{Str::words($module->description, 50)}}</p> --}}
                            </div>
                        </div>
                    @else
                        <div class="col-md-6 col-xl-4 mt-5">
                            <div class="step" data-aos="fade-up">
                                <img src="{{ $module['image'] }}" alt="" class="features-icon mb-2">
                                <h4>{{ $module['name'] }}
                                    {{-- <hr class="underline left"> --}}
                                </h4>
                                {{-- <p class="mt-3" style="text-align: justify">{{Str::words($module->description, 50)}}</p> --}}
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
    </div>
    {{-- <p class="justify-content-center text-center seeMore"><a href="features" class="btn btn-primary btn-sm">See More &nbsp;&nbsp;<i
                class="fa fa-arrow-right fa-beat"></i></a></p> --}}
</section>

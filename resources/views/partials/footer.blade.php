 <footer class="footer" role="contentinfo">
     <div class="container" style="padding-left: 30px; padding-right: 30px;">
         <div class="row">
             <div class="col-lg-5 col-md-6 mb-4 mb-md-0 pe-0 pe-md-5 text-md-start">
                 <h3>About CloudletHR | HRMS
                     <hr class="underline">
                 </h3>
                 <p>
                    @if(!empty($settings))
                    {{ $settings['about_company'] }}
                    @else
                    Kindly go to settings and input about company
                    @endif
                </p>
                 <p class="social">
                     <a href="https://twitter.com/SoftSolutionsLt" target="_blank" rel="noreferrer"><span
                             class="bi bi-twitter"></span></a>
                     <a href="https://web.facebook.com/SoftSolutionsLimited?_rdc=1&_rdr" target="_blank"
                         rel="noreferrer"><span class="bi bi-facebook"></span></a>
                     <a href="https://www.instagram.com/soft_solutions_ltd/" target="_blank" rel="noreferrer"><span
                             class="bi bi-instagram"></span></a>
                     <a href="https://ng.linkedin.com/company/soft-solutions-limited_2" target="_blank"
                         rel="noreferrer"><span class="bi bi-linkedin"></span></a>
                 </p>
             </div>
             <div class="col-1 d-lg-none"></div>
             <div class="col-lg-4 col-md-5 text-md-start">
                 <h3>Navigation
                     <hr class="underline">
                 </h3>
                 <div class="row">
                     <div class="col-md-6">
                         <ul class="list-unstyled">
                             <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a
                                     href="{{ route('features') }}">Features</a></li>
                             <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a href="{{ route('contact') }}">Contact
                                     Us</a></li>
                             <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a
                                     href="{{ route('feedback') }}">Feedback</a></li>
                             <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a
                                     href="https://subscriptions.sslinsight.com/" target="_blank" rel="noreferrer">Get
                                     started</a></li>
                         </ul>
                     </div>
                     <div class="col-md-6">
                         <ul class="list-unstyled">
                             <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a
                                     href="{{ route('blog') }}">Blog</a></li>
                             <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a
                                     href="{{ route('frequently-asked-questions') }}">FAQs</a></li>
                             <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a href="{{ route('our-team') }}">Our
                                     Team</a></li>
                             <li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a href="{{ route('login') }}"
                                     target="_blank" rel="noreferrer">Dashboard</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             {{-- <div class="col-lg-3 col-md-12 my-5 my-lg-0 text-center text-center">
                 <div class="row">
                     <div class="col-lg-12 col-md-6">
                         <h3>Download Our Mobile App</h3>
                         <div class="d-flex justify-content-center">
                             <img class="fa-beat" src="{{ asset('img/playstore-icon.png') }}" style="width: 30px; margin-right: 40px; cursor: pointer;"></i>
                             <img class="fa-beat" src="{{ asset('img/appstore-icon.png') }}" style="width: 30px; cursor: pointer;"></i>
                         </div>
                     </div>
                 </div>
             </div> --}}
             <div class="col-lg-3 col-md-12 my-5 my-lg-0">
                 <div class="row">
                     <div class="col-lg-12 col-md-6">
                         <h3>Subscribe to our Newsletter</h3>
                         @livewire('newsletter-subscriber-form')
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>

 <div class="row justify-content-center text-center footer-bottom" style="margin-right: 0px; margin-left: 0px;">
     <div class="col-md-7">
         &copy; Copyright {{ config('app.name') }}. All Rights Reserved. <a href="https://www.ss-limited.com"
             target="_BLANK">Soft Solutions Limited</a>
     </div>
 </div>

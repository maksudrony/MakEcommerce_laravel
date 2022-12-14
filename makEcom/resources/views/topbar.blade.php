 <!-- Topbar Start -->
 <div class="container-fluid wow fadeInDown" data-wow-delay="0.1s">
    <div class="row py-1 px-xl-5" style="background-color: #FCF69C">
        <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="d-inline-flex align-items-center">
                
                <small class="ms-4"><i class="fa fa-regular fa-phone me-2"></i><a class="text-black" href="tel: +8801521331239">+8801521331239</a></small>
                <small class="ms-4"><i class="fa fa-map-marker-alt me-2"></i>69, 71 New Elephant Rd, Dhaka</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i><a class="text-black" href="mailto:maksudrony44@gmail.com"> maksudrony44@gmail.com</a></small>
                
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" href="https://www.facebook.com/maksud.rony.92/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="https://twitter.com/i/flow/login">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="https://www.linkedin.com/in/makrony/">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-dark px-2" href="https://www.instagram.com/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-dark pl-2" href="https://www.youtube.com/">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid wow fadeInDown" data-wow-delay="0.3s">
    <div class="row align-items-center px-xl-5 p-2" style="background-color: #393E46">
        <div class="col-lg-2 col-md-6 col-sm-12 d-lg-block">
            <a href="{{ url('/') }}" class="ms-4 ms-lg-0">
                <h1 style="color: #FFBF00" class="fw-bold m-0">Mak<span style="color: #FD841F">Ecom</span></h1>
                {{-- fw-bold m-0 --}}
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products">
                    <div class="">
                        <span class="input-group-text mt-1 ms-2" style="color: #FFFFFF">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            @if (Route::has('login'))
                <div class=" fixed top-0 right-0 justify-content-center">
                    @auth
                    <x-app-layout>

                    </x-app-layout>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success text-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-warning text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
    </div>
</div>
<!-- Topbar End -->
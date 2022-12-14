<!--contact starts-->

<div id="contact" class="container-fluid py-5 wow fadeInup" data-wow-delay="0.7s" style="background-color: #FBFBFB"  data-image-src="">
    <div class="container w-100 py-5">
        <div class="section-title">
            <h1 class="font-effect-outline fw-bold">Contact US</h1>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft d-flex" data-wow-delay="0.7s">
                <div class="contact-info">
                    <div class="d-inline-block message-section fs-2 text-danger py-1 px-3 mb-3">Address</div>
                    <div class="opacity-75">
                    <p><i class="fa fa-map-marker-alt me-3"></i>69, 71 New Elephant Rd, Dhaka 1205</p>
                    <p><i class="fa fa-phone-alt me-3"></i>01521331239</p>
                    <p><i class="fa fa-envelope me-3"></i>maksudrony44@gmail.com</p>
                    </div>
                    <iframe class="p-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.239336921881!2d90.3834078140484!3d23.738843184595137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c78adbec73%3A0x12b9ec0f1c8e7b03!2sMultiplan%20Center!5e0!3m2!1sen!2sbd!4v1669634137806!5m2!1sen!2sbd"
                     frameborder="0" style="border:0; width: 100%; height: 370px;"></iframe>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight d-flex justify-content-center" data-wow-delay="1s">           
                <div class="opacity-75 contact-info p-5">
                    <form action="{{ url('contact') }}" method="post">
                        @csrf
                        {{-- csrf send data to the database --}}
                        <div class="d-inline-block message-section fs-2 text-danger py-1 px-3 mb-3">Message US</div>
                        <div class="row g-3">
                            <div class="col-12 ">
                                <div class="form-floating border border-2 border-end-0 border-bottom-0">
                                    <input name="name" type="text" class="form-control bg-light border-0" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating border border-2 border-end-0 border-bottom-0">
                                    <input name="email" type="email" class="form-control bg-light border-0" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating border border-2 border-end-0 border-bottom-0">
                                    
                                    <input name="phone" class="form-control bg-light border-0" type="num" id="phone" placeholder="Phone Number*" required="">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="border border-2 border-end-0 border-bottom-0">
                                    <textarea name="message" class="form-control  bg-light border-0" rows="6" id="message" placeholder="Message" required=""></textarea>

                                </div>
                             </div>
                            <div class="col-12">
                                <button class="btn btn-contact btn-success px-5" style="height: 60px;">
                                    Submit Now
                                    <div class="d-inline-flex btn-sm-square text-white ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--contact ends-->

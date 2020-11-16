@extends('layouts.master')
@section('content')
    <!-- Container / Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf-contact-map margin-bottom-50">
                    <div class="utf-google-map-container">
                        <div id="propertyMap" data-latitude="48.8566" data-longitude="2.3522" data-map-icon="im im-icon-Hamburger"></div>
                        <a href="#" id="streetView">Street View</a>
                    </div>
                </div>
            </div>
            <!-- Contact Details -->
            <div class="col-md-4">
                <div class="utf-boxed-list-headline-item">
                    <h3><i class="icon-feather-map"></i> Office Address</h3>
                </div>
                <!-- Contact Details -->
                <div class="utf-contact-location-info-aera sidebar-textbox margin-bottom-40">
                    <ul class="contact-details">
                        <li><i class="icon-feather-smartphone"></i> <strong>Phone Number:</strong> <span>(+21) 124 123 4546</span></li>
                        <li><i class="icon-material-outline-email"></i> <strong>Email Address:</strong> <span><a href="#">info@example.com</a></span></li>
                        <li><i class="icon-feather-globe"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                        <li><i class="icon-feather-map-pin"></i> <strong>Address:</strong> <span>3241, Lorem ipsum dolor sit amet, consectetur adipiscing elit Proin fermentum condimentum mauris.</span></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-8">
                <section id="contact">
                    <div class="utf-boxed-list-headline-item">
                        <h3><i class="icon-feather-layers"></i> Contact Form</h3>
                    </div>
                    <div class="utf-contact-form-item">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="name" type="text" placeholder="Frist Name" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="name" type="text" placeholder="Last Name" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="email" type="email" placeholder="Email Address" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="name" type="text" placeholder="Subject" required />
                                </div>
                                <div class="col-md-12">
                                    <textarea name="comments" cols="40" rows="3" placeholder="Message..." spellcheck="true" required></textarea>
                                </div>
                            </div>
                            <div class="utf-centered-button margin-bottom-10">
                                <input type="submit" class="submit button" id="submit" value="Submit Message" />
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <!-- Contact Form / End -->
        </div>
    </div>
    @endsection
@section('extra_script')
    <!-- Container / End -->
<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
<script src="scripts/infobox.min.js"></script>
<script src="scripts/markerclusterer.js"></script>
<script src="scripts/maps.js"></script>
@endsection

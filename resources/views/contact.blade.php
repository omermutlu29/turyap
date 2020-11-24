@extends('layouts.master')
@section('content')
    <!-- Container / Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf-contact-map margin-bottom-50">
                    <div class="utf-google-map-container">
                        <div id="propertyMap" data-latitude="48.8566" data-longitude="2.3522" data-map-icon="im im-icon-Hamburger"></div>
                        <a href="#" id="streetView">Sokak Görünümü</a>
                    </div>
                </div>
            </div>
            <!-- Contact Details -->
            <div class="col-md-4">
                <div class="utf-boxed-list-headline-item">
                    <h3><i class="icon-feather-map"></i> Adres</h3>
                </div>
                <!-- Contact Details -->
                <div class="utf-contact-location-info-aera sidebar-textbox margin-bottom-40">
                    <ul class="contact-details">
                        <li><i class="icon-feather-smartphone"></i> <strong>Telefon:</strong> <span>+90 212-373 13 00</span></li>
                        <li><i class="icon-material-outline-email"></i> <strong>Email Adresimiz:</strong> <span><a href="#">info@turyap.com.tr</a></span></li>
                        <li><i class="icon-feather-globe"></i> <strong>Website:</strong> <span>http://www.turyap.com.tr</span></li>
                        <li><i class="icon-feather-map-pin"></i> <strong>Adres:</strong> <span>MERKEZ MAH. AYAZMA CAD. NO:21 D BLOK D102 NEF 11 Kağıthane / Kağıthane 34400, İstanbul</span></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-8">
                <section id="contact">
                    <div class="utf-boxed-list-headline-item">
                        <h3><i class="icon-feather-layers"></i> İletişim Formu</h3>
                    </div>
                    <div class="utf-contact-form-item">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="name" type="text" placeholder="Ad" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="name" type="text" placeholder="Soyad" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="email" type="email" placeholder="Email" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="name" type="text" placeholder="Konu" required />
                                </div>
                                <div class="col-md-12">
                                    <textarea name="comments" cols="40" rows="3" placeholder="Mesaj..." spellcheck="true" required></textarea>
                                </div>
                            </div>
                            <div class="utf-centered-button margin-bottom-10">
                                <input type="submit" class="submit button" id="submit" value="Gönder" />
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

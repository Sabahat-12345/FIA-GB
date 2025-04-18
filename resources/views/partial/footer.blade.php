
    <style>
       /* footer section  */
        .bg-primary-custom {
            background-color: #0275d8;
        }
        .bg-dark-blue {
            background-color: #1a237e;
        }
        .section-heading {
            background-color: #343a40;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 20px;
        }
        .link-light-hover:hover {
            text-decoration: underline;
        }
        .footer {
            padding: 5px 0;
        }
        .map-container {
            position: relative;
            height: 200px;
            border-radius: 5px;
            overflow: hidden;
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .subscribe-form .btn {
            background-color: white;
            color: #0275d8;
        }
        @media (max-width: 576px) {
            .subscribe-form .input-group {
              
            }
          
             
          
        }
    </style>

<footer>
    {{-- footer section --}}
    <div class="container-fluid bg-primary-custom text-white py-3">
        <div class="container">
            <div class="row ">
                <!-- Investigation Links -->
                <div class=" col-md-4 mb-4">
                    <div class="section-heading mb-4">
                        <h6 class="mb-0">WHAT WE INVESTIGATE</h6>
                    </div>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Anti-Corruption</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Anti Human Trafficking and Smuggling</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Counter Terrorism</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Cyber Crime</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Economic Crime</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Immigration</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Interpol</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Intellectual Property Rights</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Integrated Border Management System</a></li>
                    </ul>
                </div>

                <!-- Important Links + Newsletter -->
                <div class="col-md-4 mb-4">
                    <div class="section-heading mb-4">
                        <h6 class="mb-0">IMPORTANT LINKS</h6>
                    </div>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">About Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Wings</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Press Release</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Services</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">FIA Staff Welfare</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Contact Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">FAQs</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Privacy Policy</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Sitemap</a></li>
                        <li><a href="#" class="text-white text-decoration-none link-light-hover">Special Investment Facilitation Council (SIFC)</a></li>
                    </ul>

                    <div class="mt-4">
                        <div class="section-heading mb-3">
                            <h6 class="mb-0">SUBSCRIBE TO OUR NEWSLETTER</h6>
                        </div>
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{route('subscribe')}}" method="POST" class="subscribe-form" >
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Enter your email here" aria-label="Email ">
                                <button class="btn btn-primary" type="submit" aria-label="Subscribe"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Info + Map -->
                <div class="col-md-4 mb-4">
                    <div class="section-heading mb-4">
                        <h6 class="mb-0">CONTACT US</h6>
                    </div>
                    <p><strong>Email:</strong> <a href="mailto:complaints@fia.gov.pk" class="text-white">complaints@fia.gov.pk</a></p>
                    <p><strong>Helpline:</strong> 051-111-345-786</p>
                    <p><strong>Address:</strong> FIA CYBERCRIME OFFICE NEAR GDA OFFICE RIVER ROAD CHINARBAGH GILGIT, PK</p>

                    <div class="map-container mb-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103388.79512005721!2d74.16974969726559!3d35.924951400000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e637b3c947eca3%3A0xf75e60a3376aef6e!2sFIA%20Cyber%20Crime%20Reporting%20Center!5e0!3m2!1sen!2s!4v1744403607082!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="FIA Location Map"></iframe>
                    </div>
                    <div class="text-center">
                        <small>Federal Investigation Agency, Head Office</small><br>
                        <a href="https://www.google.com/maps?q=FIA+Cyber+Crime+Reporting+Center" target="_blank" class="text-white link-light-hover">
                            <small>View larger map</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid bg-dark-blue text-white footer">
        <div class="container py-2">
            <div class="row">
                <div class="col-md-6">
                    <small>DISCLAIMER: The information on this site is for official use only and may be subject to change.</small>
                </div>
                <div class="col-md-6 text-md-end">
                    <small>&copy; 2025 Federal Investigation Agency. All Rights Reserved.</small>
                </div>
            </div>
        </div>
    </div>
</footer>




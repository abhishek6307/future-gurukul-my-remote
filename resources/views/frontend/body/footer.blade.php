



    <!-- Footer -->


        @php
         $setting = App\Models\SiteSetting::find(1);
          @endphp

    <section id="footer" style="overflow:hidden;">
        <div class="footer-top">
            <div class="social">
                <a href="https://www.youtube.com/c/avishkaar" class="icon">
                    <i class="fa fa-youtube"></i></a>

                <a href="https://wa.me/918506931515" target="_blank" class="icon">
                    <i class="fa fa-whatsapp"></i></a>

                <a href="{{ $setting->instagram}}" class="icon">
                    <i class="fa fa-instagram"></i></a>

                <a href="{{ $setting->facebook }}" class="icon">
                    <i class="fa fa-facebook-f"></i></a>
            </div>

            <a href="/"  class="logo">
                <img src="{{asset('fronten/assets/images/logofooter.png')}}" width="200px" alt="Future Gurukuls"
                    class="logo-img">
            </a>


            <div class="contact"><a href="tel: +918506931515" class="phone content">
                    <div class="icon">
                        <img loading="lazy"
                            src="https://images.avishkaar.cc/misc/home.avishkaar.cc/home/footer/call-icon.webp"
                            alt="Phone Number">
                    </div>
                  6387894347
                </a> <a href="mailto: support@avishkaar.cc" class="mail content">
                    <div class="icon"><img loading="lazy"
                            src="https://images.avishkaar.cc/misc/home.avishkaar.cc/home/footer/mail-icon.webp"
                            alt="Email">
                    </div>
                    official@futuregurukuls.in
                </a>
            </div>
        </div>
        <div class="divider"></div>
        <div class="footer-items">
            <div class="footer-item">
                <a href="#" class="item-head heading">Shop</a>
                <a href="#" class="item content">Kits</a>
                <a href="#" class="item content">Courses</a>
                <a href="#" class="item content">Accessories</a>
            </div>

            <div class="footer-item">
                <a href="#" class="item-head heading">About Us</a>
                <a href="#" class="item content">Team</a>
                <a href="#" class="item content">Investors</a>
                <a href="#" class="item content">Customers</a>
                <a href="#" class="item content">Awards</a>
                <a href="#" class="item content">Partners</a>
            </div>

            <div class="footer-item">
                <a href="#" class="item-head heading">Resources</a>
                <a href="#" class="item content">Downloads</a>
                <a href="#" class="item content">Free Tutorials</a>
                <a href="#" class="item content">Product Support</a>
                <a href="#" class="item content">Blogs</a>
            </div>

            <div class="footer-item">
                <a href="#" class="item-head heading">School Solutions</a>
                <a href="#" class="item content">FG Lab in Schools</a>
                <a href="#" class="item content">Curriculum</a>
                <a href="#" class="item content">Teacher Training</a>
                <a href="#" class="item content">ATL Labs</a>
                <a href="partner-schools.html" class="item content">Partner Schools</a>
            </div>

            <div class="footer-item">
                <a href="#" class="item-head heading">Events</a>
                <a href="#" class="item content">Competitions</a>
                 <a href="#" class="item content">Workshops</a>
                 <a href="#" class="item content">Awareness</a>
             
            </div>

            <div class="footer-item">
                <a href="#" class="item-head heading">Contact Us</a>
                <a href="#" class="item content">Support & Feedback</a>
                <a href="#" class="item content">Product Registration</a>
                <a href="#" class="item content">Careers</a>
                <a href="#" class="item content">Help & Support</a>
            </div>
        </div>
        <div class="footer-items-mobile">
            <div class="footer-item-container">
                <div class="footer-item">
                    <a href="#" class="item-head heading">Shop</a>
                    <a href="#" class="item content">Kits</a>
                    <a href="#" class="item content">Courses</a>
                    <a href="#" class="item content">Accessories</a>
                </div>

                <div class="footer-item">
                    <a href="#" class="item-head heading">Resources</a>
                    <a href="#" class="item content">Downloads</a>
                    <a href="#" class="item content">Free Tutorials</a>
                    <a href="#" class="item content">Product Support</a>
                    
                    <a href="#" class="item content">Blogs</a>
                </div>

                <div class="footer-item">
                    <a href="#" class="item-head heading">Contact Us</a>
                    <a href="#" class="item content">Support &; Feedback</a>
                    <a href="#" class="item content">Product Registration</a>
                    <a href="#" class="item content">Careers</a>
                    <a href="#" class="item content">Help & Support</a>
                </div>
            </div>

            <div class="footer-item-container">
                <div class="footer-item">
                    <a href="#" class="item-head heading">About Us</a>
                  
                    <a href="#" class="item content">Team</a>
                    <a href="#" class="item content">Investors</a>
                    <a href="#" class="item content">Customers</a>
                 
                    <a href="#" class="item content">Awards</a>
                    <a href="#" class="item content">Partners</a>
                </div>

                <div class="footer-item">
                    <a href="#" class="item-head heading">School Solutions</a>
                    <a href="#" class="item content">FG Lab in Schools</a>
                    <a href="#" class="item content">Curriculum</a>
                    <a href="#" class="item content">Teacher Training</a>
                    <a href="#" class="item content">ATL Labs</a>
                    <a href="#" class="item content">Partner Schools</a>
                </div>

                <div class="footer-item">
                    <a href="#" class="item-head heading">Events</a>
                    <a href="#" class="item content">Competitions</a>
                    <a href="#" class="item content">Workshops</a>
                    <a href="#" class="item content">Awareness</a>
                
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="footer-foot">
            <div class="foot-detail content">
                Future Gurukuls
                <div class="highlight">© 2022.</div>
                All rights reserved.
            </div>
            <div class="terms content"><a href="{{route('terms')}}"> Terms &amp; Conditions</a>
                <div class="line">|</div> <a href="{{route('privacy')}}">Privacy Policy</a>
                <div class="line">|</div> <a href="{{route('shipping')}}">Shipping &amp;
                    Cancellations</a>
            </div>
        </div>
    </section>
    <!-- Footer -->
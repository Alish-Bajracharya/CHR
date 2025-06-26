
    <?php $restaurant = \App\Models\Restaurant::first(); ?>

<style>
    footer {
        background-color: #025E5B;
        color: white;
        position: relative;
        padding: 20px 0 5px;
        z-index: 1;
        width: 100%;
    }

    footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset('assets/images/rb_2150429154.png') }}');
        opacity: 0.25;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .footer-container {
        width: 100%;
        padding: 0 15px;
    }

    .footer-container .row {
        margin-left: 0;
        margin-right: 0;
        row-gap: 10px;
    }

    .menu, .quick-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .menu li, .quick-links li {
        margin-bottom: 4px;
    }

    .menu a, .quick-links a, footer a {
        color: white;
        text-decoration: none;
        transition: 0.3s;
        color:aliceblue;
    }

    .menu a:hover, .quick-links a:hover, footer a:hover {
        color: #ffcc00;
        text-decoration: underline;
    }

    .footer-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .payment {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
    }

    .payment img {
        height: 60px;
        width: 60px;
        transition: transform 0.3s ease;
    }

    .payment img:hover {
        transform: scale(1.1);
    }

    .social-icons a {
        color: white;
        font-size: 20px;
        margin: 0 6px;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        color: #ffcc00;
        transform: scale(1.1);
    }

    .emergency-chat {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }

    .emergency-chat:hover {
        background-color: #128C7E;
    }

    @media (max-width: 768px) {
        .footer-content {
            text-align: center;
        }

        .social-icons, .payment {
            justify-content: center;
            flex-wrap: wrap;
        }

        .d-flex.justify-content-between.flex-wrap {
            flex-direction: column;
            gap: 1rem;
        }

        .payment {
            justify-content: center;
            gap: 8px;
        }
    }
</style>

<footer>
    <div class="container footer-container">
        <div class="row gx-3 gy-2 mt-2">
            <!-- Quick Links -->
            <div class="col-12 col-md-6 col-lg-3">
                <h4 class="footer-title">Quick Links</h4>
                <ul class="quick-links">
                    <li><a href="https://chr.com.np/">Home</a></li>
                    <li><a href="{{ route('about-us.show') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <!-- Conference
            <div class="col-12 col-md-6 col-lg-3">
                <h4 class="footer-title">Conference & Meeting</h4>
                <ul class="menu">
                    <li><a href="{{ route('balkumari.show') }}">Balkumari</a></li>
                    <li><a href="{{ route('bishnudevi') }}">Bishnudevi & Birkheshower</a></li>
                    <li><a href="{{ route('bagh') }}">Baghbhairab</a></li>
                </ul>
            </div> -->

            <!-- Contact -->
            <div class="col-12 col-md-6 col-lg-3">
                <h4 class="footer-title">Contact</h4>
                <p style="margin: 0; line-height: 1.4;">Bansbari-04, Dakshinkali<br>
                <a href="mailto:info@chr.com.np">info@chr.com.np</a></p>
            </div>

            <!-- Reservation -->
            <div class="col-12 col-md-6 col-lg-3">
                <h4 class="footer-title">Reservation</h4>
                <p style="margin: 0; line-height: 1.4;">
                    <a href="tel:+977-01-5922050">+977-01-5922050</a><br>
                    <a href="tel:+977-01-5922051">+977-01-5922051</a><br>
                    <a href="https://wa.me/9763699009">WhatsApp: +9763699009</a><br>
                    <a href="mailto:reservation@chr.com.np">reservation@chr.com.np</a>
                </p>
            </div>

            <!-- We Accept -->
            <div class="col-12 col-md-6 col-lg-3 h-30">
                <h4 class="footer-title">We Accept</h4>
                <div class="payment mt-3">
                    <img src="{{asset('assets/images/esewa.png')}}" alt="eSewa" />
                    <img src="{{asset('assets/images/mastercard.png')}}" alt="Mastercard"/>
                    <img src="{{asset('assets/images/visa.png')}}" alt="Visa" />
                    <img src="{{asset('assets/images/fonepay.png')}}" alt="Fonepay" />
                </div>
            </div>
        </div>

        <!-- Logo & Bottom -->
        <div class="text-center mt-3 mb-3">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <div class="border border-white w-25"></div>
                <a href="#"><img src="{{asset('assets/images/assets/whilelogo.png')}}" alt="Logo" width="200"></a>
                <div class="border border-white w-25"></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script> Champadevi Hillside Resort. All rights reserved. | Website by
                    <a href="https://www.archiesoft.com.np" target="_blank">Archiesoft Technology</a>
                </p>
                <div class="social-icons mt-2 mt-md-0">
                    <a href="https://www.facebook.com/sunrisekathmandu" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/champadevi.hillside.resort" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/watch?v=rYWrHpUEe50" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.tripadvisor.com/Hotel_Review-g7709891-d28755846" target="_blank"><span uk-icon="icon: tripadvisor; ratio: 1.5"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Emergency WhatsApp Button -->
<a href="https://wa.me/9763699009" class="emergency-chat" title="Emergency Chat" target="_blank">
    <i class="fab fa-whatsapp fa-lg"></i>
</a>
   
    
    
    
    
    
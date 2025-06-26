<!-- Services Section -->
<section class="services-section py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <span class="sub-heading">What We Offer</span>
                <h2 class="section-title">Our Premium Services</h2>
                <div class="section-title-line"></div>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Spa Service -->
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Spa & Wellness</h3>
                        <p>Rejuvenate your body and mind with our luxurious spa treatments and wellness programs.</p>
                        <a href="{{ route('service.show') }}" class="service-btn">
                            Explore More 
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Swimming Pool -->
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="fas fa-swimming-pool"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Swimming Pool</h3>
                        <p>Take a refreshing dip in our pristine swimming pool with stunning mountain views.</p>
                        <a href="{{ route('service.show') }}" class="service-btn">
                            Explore More 
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Gym -->
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Fitness Center</h3>
                        <p>Stay fit during your stay with our state-of-the-art gym equipment and facilities.</p>
                        <a href="{{ route('service.show') }}" class="service-btn">
                            Explore More 
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Restaurant -->
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Fine Dining</h3>
                        <p>Savor exquisite local and international cuisine at our premium restaurant.</p>
                        <a href="{{ route('restaurant.detail', $restaurant->slug) }}" class="service-btn">
                            Explore More 
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Conference -->
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Conference Halls</h3>
                        <p>Host your events in our sophisticated conference and meeting facilities.</p>
                        <a href="{{ route('balkumari.show') }}" class="service-btn">
                            Explore More 
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Room Service -->
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="fas fa-concierge-bell"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Room Service</h3>
                        <p>Enjoy 24/7 room service with our dedicated staff at your service.</p>
                        <a href="#" class="service-btn">
                            Explore More 
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.services-section {
    background-color: #f8f9fa;
    padding: 100px 0;
    position: relative;
}

.services-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(to right, transparent, #c8a97e, transparent);
}

.sub-heading {
    color: #c8a97e;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: 500;
    margin-bottom: 15px;
    display: block;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 15px;
    position: relative;
}

.section-title-line {
    width: 50px;
    height: 2px;
    background-color: #c8a97e;
    margin: 0 auto;
    position: relative;
}

.section-title-line::before,
.section-title-line::after {
    content: '';
    position: absolute;
    height: 2px;
    width: 25px;
    background-color: #c8a97e;
    top: -6px;
}

.section-title-line::before {
    left: -35px;
}

.section-title-line::after {
    right: -35px;
}

.service-card {
    background: white;
    border-radius: 12px;
    padding: 40px 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    height: 100%;
    border: 1px solid rgba(0,0,0,0.05);
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 0;
    background: linear-gradient(135deg, rgba(200, 169, 126, 0.1) 0%, rgba(200, 169, 126, 0.05) 100%);
    transition: all 0.4s ease;
    z-index: 0;
}

.service-card:hover::before {
    height: 100%;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.service-icon-wrapper {
    position: relative;
    margin-bottom: 25px;
}

.service-icon {
    width: 60px;
    height: 60px;
    background: #c8a97e;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    position: relative;
    z-index: 1;
    transition: all 0.4s ease;
}

.service-icon::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(200, 169, 126, 0.2);
    border-radius: 50%;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 0.5;
    }
    50% {
        transform: scale(1.5);
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 0;
    }
}

.service-card:hover .service-icon {
    background: #333;
    transform: rotateY(180deg);
}

.service-icon i {
    font-size: 24px;
    color: white;
    transition: all 0.4s ease;
}

.service-content {
    position: relative;
    z-index: 1;
    text-align: center;
}

.service-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    color: #333;
    margin-bottom: 15px;
    font-weight: 600;
}

.service-content p {
    color: #666;
    margin-bottom: 25px;
    line-height: 1.6;
    font-size: 0.95rem;
}

.service-btn {
    color: #c8a97e;
    text-decoration: none;
    font-weight: 500;
    font-size: 0.9rem;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    padding: 5px 0;
}

.service-btn i {
    font-size: 14px;
    transition: transform 0.3s ease;
}

.service-btn:hover {
    color: #333;
}

.service-btn:hover i {
    transform: translateX(5px);
}

@media (max-width: 768px) {
    .services-section {
        padding: 60px 0;
    }

    .section-title {
        font-size: 2rem;
    }

    .service-card {
        padding: 30px 20px;
    }

    .service-icon {
        width: 50px;
        height: 50px;
    }

    .service-icon i {
        font-size: 20px;
    }

    .service-content h3 {
        font-size: 1.2rem;
    }
}
</style> 
@extends('frontend.layouts.master')
@section('content')

<style>
.review-hero {
    position: relative;
    text-white;
    height: 800px;
    background: url('{{asset('assets/images/chr-client.png')}}') center center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
}

.review-hero h1 {
    font-size: 3.5rem;
    font-weight: 700;
    color: white;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.reviews-section {
    background-color: #f8f9fa;
    padding: 80px 0;
}

.section-title {
    font-size: 2.5rem;
    color: #333;
    text-align: center;
    margin-bottom: 50px;
    position: relative;
}

.section-title:after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(to right, #007bff, #00bcd4);
   
}

.testimonial-container {
    background: white;
    border-radius: 15px;
    padding: 30px;
    margin: 30px auto;
    max-width: 800px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.testimonial-container:hover {
    transform: translateY(-5px);
}

.testimonial {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #555;
    font-style: italic;
    margin: 20px 0;
}

.fa-quote {
    color: #007bff;
    font-size: 24px;
    opacity: 0.6;
}

.user {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 20px;
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.user-image {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #007bff;
}

.user-details {
    flex-grow: 1;
}

.username {
    margin: 0;
    color: #333;
    font-size: 1.2rem;
    font-weight: 600;
}

.role {
    margin: 5px 0 0;
    color: #666;
    font-size: 0.9rem;
}

.rating {
    margin-bottom: 15px;
}

.rating i {
    color: #ffc107;
    font-size: 20px;
    margin: 0 2px;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.testimonial-container {
    animation: fadeInUp 0.6s ease forwards;
}
</style>

<div class="review-hero">
   
</div>

<div class="reviews-section">
    <div class="container">
        <h2 class="section-title">Memories of Our Guests</h2>
        
        @foreach($reviews as $review)
        <div class="testimonial-container">
            <div class="rating">
                @for($i = 0; $i < $review->rating; $i++)
                    <i class="bi bi-star-fill"></i>
                @endfor
            </div>

            <i class="fas fa-quote-right fa-quote"></i>
            <p class="testimonial">{{ $review->review }}</p>
            <i class="fas fa-quote-left fa-quote"></i>

            <div class="user">
                <img src="{{ asset('storage/' . $review->reviewer_image) }}" alt="{{ $review->reviewer_name }}" class="user-image">
                <div class="user-details">
                    <h4 class="username">{{ $review->reviewer_name }}</h4>
                    <p class="role">{{ $review->designation }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

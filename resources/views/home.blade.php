@extends('layouts.app')

@section('content')

<!-- ============================
     ULTRA HERO SLIDER SECTION
============================= -->
<div class="hero-slider" id="heroSlider">
    <div class="slider-container">
        <!-- Slide 1 -->
        <div class="slide active" data-slide="0">
            <div class="slide-bg" style="background-image: url('{{ asset('images/temple-1.jpg') }}');"></div>
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <div class="container">
                    <div class="hero-content-wrapper">
                        <h1 class="hero-title" data-animation="fadeInUp">
                            <span class="word" style="--i:0">Welcome</span>
                            <span class="word" style="--i:1">to</span>
                            <span class="word" style="--i:2">Sambuddaraja</span>
                            <span class="word" style="--i:3">Viharaya</span>
                        </h1>
                        <p class="hero-subtitle" data-animation="fadeInUp" data-delay="0.4">
                            A sacred place of peace, devotion, and spiritual learning
                        </p>
                        <div class="hero-buttons" data-animation="fadeInUp" data-delay="0.6">
                            <a href="{{ route('about') }}" class="btn-hero btn-hero-primary">
                                <span class="btn-text">Learn More</span>
                                <span class="btn-icon"><i class="fas fa-info-circle"></i></span>
                            </a>
                            <a href="{{ route('contact.create') }}" class="btn-hero btn-hero-secondary">
                                <span class="btn-text">Contact Us</span>
                                <span class="btn-icon"><i class="fas fa-envelope"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" data-slide="1">
            <div class="slide-bg" style="background-image: url('{{ asset('images/temple1.jpg') }}');"></div>
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <div class="container">
                    <div class="hero-content-wrapper">
                        <h1 class="hero-title" data-animation="fadeInUp">
                            <span class="word" style="--i:0">Find</span>
                            <span class="word" style="--i:1">Inner</span>
                            <span class="word" style="--i:2">Peace</span>
                        </h1>
                        <p class="hero-subtitle" data-animation="fadeInUp" data-delay="0.4">
                            Join us for meditation and dharma teachings
                        </p>
                        <div class="hero-buttons" data-animation="fadeInUp" data-delay="0.6">
                            <a href="{{ route('about') }}" class="btn-hero btn-hero-primary">
                                <span class="btn-text">View Events</span>
                                <span class="btn-icon"><i class="fas fa-calendar-alt"></i></span>
                            </a>
                            <a href="{{ route('about') }}" class="btn-hero btn-hero-secondary">
                                <span class="btn-text">Donate</span>
                                <span class="btn-icon"><i class="fas fa-heart"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide" data-slide="2">
            <div class="slide-bg" style="background-image: url('{{ asset('images/temple3.jpg') }}');"></div>
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <div class="container">
                    <div class="hero-content-wrapper">
                        <h1 class="hero-title" data-animation="fadeInUp">
                            <span class="word" style="--i:0">Community</span>
                            <span class="word" style="--i:1">&</span>
                            <span class="word" style="--i:2">Compassion</span>
                        </h1>
                        <p class="hero-subtitle" data-animation="fadeInUp" data-delay="0.4">
                            Building a better world through Buddhist teachings
                        </p>
                        <div class="hero-buttons" data-animation="fadeInUp" data-delay="0.6">
                            <a href="{{ route('gallery.index') }}" class="btn-hero btn-hero-primary">
                                <span class="btn-text">Gallery</span>
                                <span class="btn-icon"><i class="fas fa-images"></i></span>
                            </a>
                            {{-- <a href="{{ route('volunteer') }}" class="btn-hero btn-hero-secondary">
                                <span class="btn-text">Volunteer</span>
                                <span class="btn-icon"><i class="fas fa-hands-helping"></i></span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Navigation -->
        <div class="slider-navigation">
            <button class="slider-nav prev" id="prevSlide">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slider-nav next" id="nextSlide">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <!-- Enhanced Indicators with Progress -->
        <div class="slider-indicators">
            <div class="indicator" data-slide-to="0">
                <div class="indicator-progress"></div>
            </div>
            <div class="indicator" data-slide-to="1">
                <div class="indicator-progress"></div>
            </div>
            <div class="indicator" data-slide-to="2">
                <div class="indicator-progress"></div>
            </div>
        </div>

        <!-- Slide Counter -->
        <div class="slide-counter">
            <span class="current-slide">01</span>
            <span class="divider">/</span>
            <span class="total-slides">03</span>
        </div>
    </div>

    <!-- Advanced Particles System -->
    <div class="particles-container">
        <div class="particle particle-circle"></div>
        <div class="particle particle-square"></div>
        <div class="particle particle-triangle"></div>
        <div class="particle particle-circle"></div>
        <div class="particle particle-hexagon"></div>
        <div class="particle particle-circle"></div>
        <div class="particle particle-square"></div>
        <div class="particle particle-star"></div>
        <div class="particle particle-circle"></div>
        <div class="particle particle-triangle"></div>
    </div>

    <!-- Enhanced Scroll Indicator -->
    <div class="scroll-indicator">
        <div class="mouse">
            <div class="wheel"></div>
        </div>
        <div class="scroll-text">Scroll Down</div>
    </div>
</div>

<!-- ============================
     ANIMATED STATISTICS SECTION
============================= -->
<section class="statistics-section">
    <div class="stats-bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="stat-card" data-aos="flip-left" data-aos-delay="0">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="stat-content">
                        <h3 class="counter" data-target="5000" data-suffix="+">0</h3>
                        <p class="stat-label">Devotees</p>
                    </div>
                    <div class="stat-decoration"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="stat-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-check"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="stat-content">
                        <h3 class="counter" data-target="150" data-suffix="+">0</h3>
                        <p class="stat-label">Events Per Year</p>
                    </div>
                    <div class="stat-decoration"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="stat-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="stat-icon">
                        <i class="fas fa-hands-helping"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="stat-content">
                        <h3 class="counter" data-target="200" data-suffix="+">0</h3>
                        <p class="stat-label">Volunteers</p>
                    </div>
                    <div class="stat-decoration"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="stat-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="stat-icon">
                        <i class="fas fa-history"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="stat-content">
                        <h3 class="counter" data-target="25" data-suffix="+">0</h3>
                        <p class="stat-label">Years of Service</p>
                    </div>
                    <div class="stat-decoration"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     MAIN CONTENT CONTAINER
============================= -->
<div class="container my-5">

    <!-- Latest News Section -->
    <section class="news-section mb-5">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-newspaper"></i>
                Stay Updated
            </span>
            <h2 class="section-title">Latest News</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
            <p class="section-description">Read the latest updates from our temple activities</p>
        </div>

        <div class="row">
            @forelse($news as $index => $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="news-image-wrapper">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/default-news.jpg') }}"
                                 class="news-image"
                                 alt="{{ $item->title }}"
                                 loading="lazy">
                            <div class="news-overlay">
                                <div class="news-date">
                                    <span class="day">{{ $item->created_at->format('d') }}</span>
                                    <span class="month">{{ $item->created_at->format('M') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="news-body">
                            <div class="news-meta">
                                <span class="meta-item">
                                    <i class="far fa-clock"></i>
                                    {{ $item->created_at->diffForHumans() }}
                                </span>
                            </div>
                            <h5 class="news-title">
                                <a href="{{ route('news.show', $item->id) }}">
                                    {{ Str::limit($item->title, 50) }}
                                </a>
                            </h5>
                            <p class="news-excerpt">
                                {{ Str::limit(strip_tags($item->content), 100) }}
                            </p>
                            <a href="{{ route('news.show', $item->id) }}" class="news-link">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="card-shine"></div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-state" data-aos="fade-up">
                        <div class="empty-icon">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <h4>No News Available</h4>
                        <p>Please check back later for updates!</p>
                    </div>
                </div>
            @endforelse
        </div>

        @if($news->count() > 0)
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ route('news.index') }}" class="btn-custom btn-custom-primary">
                    <span class="btn-custom-text">View All News</span>
                    <span class="btn-custom-icon"><i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        @endif
    </section>

    <!-- Animated Divider -->
    <div class="section-divider" data-aos="zoom-in">
        <div class="divider-content">
            <div class="divider-icon rotating-icon">
                <i class="fas fa-dharmachakra"></i>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-images"></i>
                Visual Journey
            </span>
            <h2 class="section-title">Gallery Highlights</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
            <p class="section-description">Moments from temple life captured in time</p>
        </div>

        <div class="row g-4">
            @forelse($photos as $index => $photo)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-card" data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}">
                        <div class="gallery-image-wrapper">
                            <img src="{{ asset('storage/' . $photo->image) }}"
                                 class="gallery-image"
                                 alt="{{ $photo->title ?? 'Gallery image' }}"
                                 loading="lazy">
                            <div class="gallery-overlay">
                                <button class="gallery-expand"
                                        data-bs-toggle="modal"
                                        data-bs-target="#imageModal{{ $photo->id }}">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                                @if($photo->title)
                                    <div class="gallery-title">{{ $photo->title }}</div>
                                @endif>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade gallery-modal" id="imageModal{{ $photo->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <button type="button" class="modal-close" data-bs-dismiss="modal">
                                <i class="fas fa-times"></i>
                            </button>
                            <div class="modal-body">
                                <img src="{{ asset('storage/' . $photo->image) }}"
                                     alt="{{ $photo->title ?? 'Gallery image' }}"
                                     class="modal-image">
                                @if($photo->title || $photo->description)
                                    <div class="modal-info">
                                        @if($photo->title)
                                            <h4>{{ $photo->title }}</h4>
                                        @endif
                                        @if($photo->description)
                                            <p>{{ $photo->description }}</p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-state" data-aos="fade-up">
                        <div class="empty-icon">
                            <i class="fas fa-image"></i>
                        </div>
                        <h4>No Photos Available</h4>
                        <p>Check back soon for beautiful moments from our temple!</p>
                    </div>
                </div>
            @endforelse
        </div>

        @if($photos->count() > 0)
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ route('gallery.index') }}" class="btn-custom btn-custom-primary">
                    <span class="btn-custom-text">View Full Gallery</span>
                    <span class="btn-custom-icon"><i class="fas fa-images"></i></span>
                </a>
            </div>
        @endif
    </section>
</div>

<!-- ============================
     UI UTILITIES
============================= -->
<!-- Scroll Progress -->
<div class="scroll-progress">
    <div class="progress-bar" id="scrollProgress"></div>
</div>

<!-- Back to Top -->
<button class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
    <svg class="progress-ring" width="60" height="60">
        <circle class="progress-ring-circle" stroke="white" stroke-width="3" fill="transparent" r="27" cx="30" cy="30"/>
    </svg>
</button>

<!-- Loading Screen (Optional) -->
<div class="page-loader" id="pageLoader">
    <div class="loader-content">
        <div class="lotus-loader">
            <i class="fas fa-lotus"></i>
        </div>
        <p>Loading...</p>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<style>
/* ============================
   ROOT VARIABLES
============================ */
:root {
    --primary-color: #ff6b6b;
    --secondary-color: #4ecdc4;
    --accent-color: #ffe66d;
    --dark-color: #2d3436;
    --light-color: #f8f9fa;
    --gradient-1: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-2: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --gradient-3: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    --gradient-gold: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
    --shadow-sm: 0 2px 10px rgba(0,0,0,0.1);
    --shadow-md: 0 5px 25px rgba(0,0,0,0.15);
    --shadow-lg: 0 10px 40px rgba(0,0,0,0.2);
    --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

/* ============================
   PAGE LOADER
============================ */
.page-loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 99999;
    transition: opacity 0.5s, visibility 0.5s;
}

.page-loader.hidden {
    opacity: 0;
    visibility: hidden;
}

.loader-content {
    text-align: center;
    color: white;
}

.lotus-loader {
    font-size: 3rem;
    animation: lotusFloat 2s ease-in-out infinite;
}

@keyframes lotusFloat {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

/* ============================
   HERO SLIDER - ULTRA ENHANCED
============================ */
.hero-slider {
    position: relative;
    height: 100vh;
    overflow: hidden;
    background: var(--dark-color);
}

.slider-container {
    position: relative;
    width: 100%;
    height: 100%;
}

.slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity 1s cubic-bezier(0.4, 0, 0.2, 1);
}

.slide.active {
    opacity: 1;
    visibility: visible;
    z-index: 1;
}

/* Ken Burns Effect */
.slide-bg {
    position: absolute;
    top: -5%;
    left: -5%;
    width: 110%;
    height: 110%;
    background-size: cover;
    background-position: center;
    animation: kenBurns 20s ease-out infinite alternate;
}

.slide.active .slide-bg {
    animation: kenBurns 20s ease-out infinite alternate;
}

@keyframes kenBurns {
    0% {
        transform: scale(1) translate(0, 0);
    }
    100% {
        transform: scale(1.15) translate(-3%, -3%);
    }
}

.slide-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.7) 0%, rgba(118, 75, 162, 0.7) 100%);
    z-index: 1;
}

.slide-content {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
    z-index: 2;
}

.hero-content-wrapper {
    width: 100%;
    text-align: center;
    color: white;
}

/* Animated Hero Title */
.hero-title {
    font-size: clamp(2rem, 8vw, 5rem);
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    perspective: 1000px;
}

.hero-title .word {
    display: inline-block;
    margin: 0 0.3em;
    opacity: 0;
    transform: translateY(50px) rotateX(-90deg);
    animation: wordReveal 0.8s forwards;
    animation-delay: calc(var(--i) * 0.1s);
}

@keyframes wordReveal {
    to {
        opacity: 1;
        transform: translateY(0) rotateX(0);
    }
}

.slide.active .hero-title .word {
    animation: wordReveal 0.8s forwards;
    animation-delay: calc(var(--i) * 0.1s + 0.3s);
}

.hero-subtitle {
    font-size: clamp(1rem, 3vw, 1.5rem);
    font-weight: 300;
    margin-bottom: 2.5rem;
    opacity: 0;
    transform: translateY(30px);
    letter-spacing: 1px;
}

.slide.active .hero-subtitle {
    animation: fadeInUp 0.8s forwards 0.8s;
}

.hero-buttons {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
    opacity: 0;
    transform: translateY(30px);
}

.slide.active .hero-buttons {
    animation: fadeInUp 0.8s forwards 1.2s;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Hero Buttons */
.btn-hero {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 2.5rem;
    font-size: 1rem;
    font-weight: 600;
    text-decoration: none;
    border-radius: 50px;
    overflow: hidden;
    transition: var(--transition);
    border: 2px solid white;
}

.btn-hero-primary {
    background: white;
    color: #667eea;
}

.btn-hero-secondary {
    background: transparent;
    color: white;
}

.btn-hero::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn-hero:hover::before {
    width: 400px;
    height: 400px;
}

.btn-hero:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.btn-hero-primary:hover {
    background: #667eea;
    color: white;
}

.btn-hero .btn-icon {
    transition: transform 0.3s;
}

.btn-hero:hover .btn-icon {
    transform: translateX(5px);
}

/* Navigation Arrows */
.slider-navigation {
    position: absolute;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    pointer-events: none;
}

.slider-nav {
    position: absolute;
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    transition: var(--transition);
    pointer-events: all;
}

.slider-nav:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: scale(1.1);
}

.slider-nav.prev {
    left: 2rem;
}

.slider-nav.next {
    right: 2rem;
}

/* Enhanced Indicators */
.slider-indicators {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 1rem;
    z-index: 10;
}

.indicator {
    position: relative;
    width: 50px;
    height: 4px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 2px;
    cursor: pointer;
    overflow: hidden;
}

.indicator-progress {
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: white;
    border-radius: 2px;
    transition: width 0.3s;
}

.indicator.active .indicator-progress {
    animation: indicatorProgress 5s linear forwards;
}

@keyframes indicatorProgress {
    to { width: 100%; }
}

/* Slide Counter */
.slide-counter {
    position: absolute;
    top: 2rem;
    right: 2rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.2rem;
    font-weight: 600;
    color: white;
    z-index: 10;
}

.current-slide {
    font-size: 2rem;
}

.divider {
    opacity: 0.5;
}

.total-slides {
    opacity: 0.7;
}

/* Advanced Particles */
.particles-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
    pointer-events: none;
}

.particle {
    position: absolute;
    animation: particleFloat 25s infinite ease-in-out;
    opacity: 0.6;
}

.particle-circle {
    width: 10px;
    height: 10px;
    background: white;
    border-radius: 50%;
}

.particle-square {
    width: 8px;
    height: 8px;
    background: rgba(255, 255, 255, 0.8);
    transform: rotate(45deg);
}

.particle-triangle {
    width: 0;
    height: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 10px solid rgba(255, 255, 255, 0.7);
}

.particle-hexagon {
    width: 10px;
    height: 6px;
    background: rgba(255, 255, 255, 0.6);
    position: relative;
}

.particle-hexagon::before,
.particle-hexagon::after {
    content: "";
    position: absolute;
    width: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
}

.particle-hexagon::before {
    bottom: 100%;
    border-bottom: 3px solid rgba(255, 255, 255, 0.6);
}

.particle-hexagon::after {
    top: 100%;
    border-top: 3px solid rgba(255, 255, 255, 0.6);
}

.particle-star {
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 8px solid rgba(255, 255, 255, 0.7);
    position: relative;
}

.particle-star::after {
    content: '';
    position: absolute;
    top: 3px;
    left: -5px;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 8px solid rgba(255, 255, 255, 0.7);
}

/* Particle Positioning */
.particle:nth-child(1) {
    top: 20%;
    left: 10%;
    animation-delay: 0s;
    animation-duration: 20s;
}

.particle:nth-child(2) {
    top: 40%;
    left: 20%;
    animation-delay: 2s;
    animation-duration: 25s;
}

.particle:nth-child(3) {
    top: 60%;
    left: 30%;
    animation-delay: 4s;
    animation-duration: 22s;
}

.particle:nth-child(4) {
    top: 10%;
    left: 50%;
    animation-delay: 1s;
    animation-duration: 28s;
}

.particle:nth-child(5) {
    top: 80%;
    left: 60%;
    animation-delay: 3s;
    animation-duration: 24s;
}

.particle:nth-child(6) {
    top: 30%;
    left: 70%;
    animation-delay: 5s;
    animation-duration: 26s;
}

.particle:nth-child(7) {
    top: 50%;
    left: 85%;
    animation-delay: 6s;
    animation-duration: 23s;
}

.particle:nth-child(8) {
    top: 70%;
    left: 90%;
    animation-delay: 2.5s;
    animation-duration: 27s;
}

.particle:nth-child(9) {
    top: 15%;
    left: 75%;
    animation-delay: 4.5s;
    animation-duration: 21s;
}

.particle:nth-child(10) {
    top: 85%;
    left: 15%;
    animation-delay: 3.5s;
    animation-duration: 29s;
}

@keyframes particleFloat {
    0%, 100% {
        transform: translate(0, 0) rotate(0deg) scale(1);
    }
    25% {
        transform: translate(50px, -50px) rotate(90deg) scale(1.2);
    }
    50% {
        transform: translate(-30px, -100px) rotate(180deg) scale(0.8);
    }
    75% {
        transform: translate(80px, -70px) rotate(270deg) scale(1.1);
    }
}

/* Enhanced Scroll Indicator */
.scroll-indicator {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    z-index: 10;
    color: white;
    cursor: pointer;
}

.mouse {
    width: 30px;
    height: 50px;
    border: 2px solid white;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    padding-top: 8px;
}

.wheel {
    width: 4px;
    height: 10px;
    background: white;
    border-radius: 2px;
    animation: mouseWheel 2s infinite;
}

@keyframes mouseWheel {
    0% {
        opacity: 1;
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        transform: translateY(20px);
    }
}

.scroll-text {
    font-size: 0.8rem;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
    animation: bounce 2s infinite;
}

/* ============================
   STATISTICS SECTION
============================ */
.statistics-section {
    position: relative;
    padding: 6rem 0;
    overflow: hidden;
}

.stats-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    z-index: 0;
}

.stat-card {
    position: relative;
    padding: 2.5rem 2rem;
    background: white;
    border-radius: 20px;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    overflow: hidden;
}

.stat-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: var(--shadow-lg);
}

.stat-icon {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 auto 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: white;
    z-index: 1;
}

.stat-icon i {
    position: relative;
    z-index: 2;
}

.icon-bg {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    background: var(--gradient-1);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: var(--transition);
}

.stat-card:hover .icon-bg {
    transform: translate(-50%, -50%) scale(1.2) rotate(180deg);
}

.stat-content {
    text-align: center;
}

.counter {
    font-size: 3rem;
    font-weight: 800;
    background: var(--gradient-1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 1rem;
    color: #666;
    font-weight: 500;
    margin: 0;
}

.stat-decoration {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--gradient-1);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.stat-card:hover .stat-decoration {
    transform: scaleX(1);
}

/* ============================
   SECTION HEADERS
============================ */
.section-header {
    margin-bottom: 4rem;
}

.section-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1.5rem;
    background: var(--gradient-1);
    color: white;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 1rem;
}

.section-title {
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: 800;
    color: var(--dark-color);
    margin-bottom: 1.5rem;
}

.title-decorator {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin: 1.5rem 0;
}

.decorator-line {
    width: 60px;
    height: 2px;
    background: var(--gradient-1);
}

.decorator-icon {
    font-size: 1.5rem;
    color: #667eea;
    animation: iconPulse 2s infinite;
}

@keyframes iconPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.2); }
}

.section-description {
    font-size: 1.1rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}

/* ============================
   NEWS CARDS
============================ */
.news-card {
    position: relative;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
}

.news-image-wrapper {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.news-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.news-card:hover .news-image {
    transform: scale(1.1) rotate(2deg);
}

.news-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.7));
    display: flex;
    align-items: flex-end;
    padding: 1.5rem;
}

.news-date {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background: white;
    border-radius: 10px;
    box-shadow: var(--shadow-sm);
}

.news-date .day {
    font-size: 1.5rem;
    font-weight: 800;
    color: #667eea;
    line-height: 1;
}

.news-date .month {
    font-size: 0.75rem;
    font-weight: 600;
    color: #666;
    text-transform: uppercase;
}

.news-body {
    padding: 1.5rem;
}

.news-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
    font-size: 0.875rem;
    color: #999;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.news-title {
    margin-bottom: 1rem;
}

.news-title a {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--dark-color);
    text-decoration: none;
    transition: color 0.3s;
}

.news-title a:hover {
    color: #667eea;
}

.news-excerpt {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.news-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    color: #667eea;
    text-decoration: none;
    transition: gap 0.3s;
}

.news-link:hover {
    gap: 1rem;
}

.card-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.6s;
}

.news-card:hover .card-shine {
    left: 100%;
}

/* ============================
   DIVIDER
============================ */
.section-divider {
    padding: 3rem 0;
    text-align: center;
}

.divider-content {
    display: inline-block;
}

.divider-icon {
    width: 80px;
    height: 80px;
    background: var(--gradient-1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.rotating-icon i {
    animation: rotate 10s linear infinite;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* ============================
   GALLERY CARDS
============================ */
.gallery-card {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
}

.gallery-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.gallery-image-wrapper {
    position: relative;
    height: 280px;
    overflow: hidden;
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.gallery-card:hover .gallery-image {
    transform: scale(1.2);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9));
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    opacity: 0;
    transition: opacity 0.4s;
}

.gallery-card:hover .gallery-overlay {
    opacity: 1;
}

.gallery-expand {
    width: 60px;
    height: 60px;
    background: white;
    border: none;
    border-radius: 50%;
    color: #667eea;
    font-size: 1.5rem;
    cursor: pointer;
    transition: var(--transition);
    transform: scale(0);
}

.gallery-card:hover .gallery-expand {
    transform: scale(1);
    transition-delay: 0.1s;
}

.gallery-expand:hover {
    transform: scale(1.1) rotate(90deg);
}

.gallery-title {
    color: white;
    font-weight: 600;
    text-align: center;
    padding: 0 1rem;
    transform: translateY(20px);
    opacity: 0;
    transition: var(--transition);
}

.gallery-card:hover .gallery-title {
    transform: translateY(0);
    opacity: 1;
    transition-delay: 0.2s;
}

/* Gallery Modal */
.gallery-modal .modal-content {
    background: transparent;
    border: none;
}

.modal-close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    width: 40px;
    height: 40px;
    background: rgba(0, 0, 0, 0.5);
    border: none;
    border-radius: 50%;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    z-index: 10;
    transition: var(--transition);
}

.modal-close:hover {
    background: rgba(0, 0, 0, 0.8);
    transform: rotate(90deg);
}

.modal-image {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: var(--shadow-lg);
}

.modal-info {
    background: white;
    padding: 2rem;
    border-radius: 10px;
    margin-top: 1rem;
}

.modal-info h4 {
    margin-bottom: 1rem;
    color: var(--dark-color);
}

.modal-info p {
    color: #666;
    margin: 0;
}

/* ============================
   CUSTOM BUTTONS
============================ */
.btn-custom {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 2.5rem;
    font-size: 1rem;
    font-weight: 600;
    text-decoration: none;
    border-radius: 50px;
    overflow: hidden;
    transition: var(--transition);
    border: none;
}

.btn-custom-primary {
    background: var(--gradient-1);
    color: white;
}

.btn-custom::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn-custom:hover::before {
    width: 400px;
    height: 400px;
}

.btn-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
}

.btn-custom-icon {
    transition: transform 0.3s;
}

.btn-custom:hover .btn-custom-icon {
    transform: translateX(5px);
}

/* ============================
   EMPTY STATE
============================ */
.empty-state {
    text-align: center;
    padding: 4rem 2rem;
}

.empty-icon {
    font-size: 4rem;
    color: #667eea;
    margin-bottom: 1rem;
    opacity: 0.5;
}

.empty-state h4 {
    font-size: 1.5rem;
    color: var(--dark-color);
    margin-bottom: 0.5rem;
}

.empty-state p {
    color: #666;
    margin: 0;
}

/* ============================
   SCROLL PROGRESS
============================ */
.scroll-progress {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: rgba(0, 0, 0, 0.05);
    z-index: 9999;
}

.progress-bar {
    height: 100%;
    background: var(--gradient-1);
    width: 0;
    transition: width 0.1s;
}

/* ============================
   BACK TO TOP
============================ */
.back-to-top {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    width: 60px;
    height: 60px;
    background: var(--gradient-1);
    border: none;
    border-radius: 50%;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    box-shadow: var(--shadow-lg);
    opacity: 0;
    visibility: hidden;
    transition: var(--transition);
    z-index: 999;
}

.back-to-top.show {
    opacity: 1;
    visibility: visible;
}

.back-to-top:hover {
    transform: translateY(-5px);
}

.progress-ring {
    position: absolute;
    top: 0;
    left: 0;
    transform: rotate(-90deg);
}

.progress-ring-circle {
    stroke-dasharray: 170;
    stroke-dashoffset: 170;
    transition: stroke-dashoffset 0.3s;
}

/* ============================
   RESPONSIVE
============================ */
@media (max-width: 768px) {
    .hero-slider {
        height: 100svh;
    }

    .slider-nav {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }

    .slider-nav.prev {
        left: 1rem;
    }

    .slider-nav.next {
        right: 1rem;
    }

    .slide-counter {
        top: 1rem;
        right: 1rem;
        font-size: 1rem;
    }

    .current-slide {
        font-size: 1.5rem;
    }

    .hero-buttons {
        flex-direction: column;
        width: 100%;
        padding: 0 2rem;
    }

    .btn-hero {
        width: 100%;
        justify-content: center;
    }

    .statistics-section {
        padding: 4rem 0;
    }

    .section-title {
        font-size: 2rem;
    }

    .news-image-wrapper,
    .gallery-image-wrapper {
        height: 200px;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }

    .hero-subtitle {
        font-size: 1rem;
    }

    .scroll-indicator {
        display: none;
    }
}

/* ============================
   UTILITY ANIMATIONS
============================ */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
    background: var(--gradient-1);
    border-radius: 5px;
}

::-webkit-scrollbar-thumb:hover {
    background: #667eea;
}
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 50,
        easing: 'ease-out-cubic'
    });

    // ============================
    // PAGE LOADER
    // ============================
    const pageLoader = document.getElementById('pageLoader');
    window.addEventListener('load', () => {
        setTimeout(() => {
            pageLoader.classList.add('hidden');
        }, 1000);
    });

    // ============================
    // HERO SLIDER
    // ============================
    const slider = {
        slides: document.querySelectorAll('.slide'),
        indicators: document.querySelectorAll('.indicator'),
        prevBtn: document.getElementById('prevSlide'),
        nextBtn: document.getElementById('nextSlide'),
        currentSlide: 0,
        slideInterval: null,
        isAnimating: false,
        autoPlayDuration: 5000,

        init() {
            this.setupEventListeners();
            this.startAutoPlay();
            this.updateCounter();
        },

        setupEventListeners() {
            // Navigation buttons
            this.prevBtn.addEventListener('click', () => this.navigate(-1));
            this.nextBtn.addEventListener('click', () => this.navigate(1));

            // Indicators
            this.indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => this.goToSlide(index));
            });

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') this.navigate(-1);
                if (e.key === 'ArrowRight') this.navigate(1);
            });

            // Touch/Swipe support
            let touchStartX = 0;
            let touchEndX = 0;

            const heroSlider = document.getElementById('heroSlider');
            heroSlider.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            });

            heroSlider.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                this.handleSwipe();
            });

            const handleSwipe = () => {
                if (touchStartX - touchEndX > 50) {
                    this.navigate(1); // Swipe left
                }
                if (touchEndX - touchStartX > 50) {
                    this.navigate(-1); // Swipe right
                }
            };

            this.handleSwipe = handleSwipe;

            // Pause on hover
            heroSlider.addEventListener('mouseenter', () => this.stopAutoPlay());
            heroSlider.addEventListener('mouseleave', () => this.startAutoPlay());
        },

        navigate(direction) {
            if (this.isAnimating) return;

            const nextSlide = (this.currentSlide + direction + this.slides.length) % this.slides.length;
            this.goToSlide(nextSlide);
        },

        goToSlide(index) {
            if (this.isAnimating || index === this.currentSlide) return;

            this.isAnimating = true;

            // Remove active classes
            this.slides[this.currentSlide].classList.remove('active');
            this.indicators[this.currentSlide].classList.remove('active');

            // Update current slide
            this.currentSlide = index;

            // Add active classes
            this.slides[this.currentSlide].classList.add('active');
            this.indicators[this.currentSlide].classList.add('active');

            // Update counter
            this.updateCounter();

            // Reset animation flag
            setTimeout(() => {
                this.isAnimating = false;
            }, 1000);

            // Restart autoplay
            this.stopAutoPlay();
            this.startAutoPlay();
        },

        updateCounter() {
            const currentSlideElement = document.querySelector('.current-slide');
            if (currentSlideElement) {
                currentSlideElement.textContent = String(this.currentSlide + 1).padStart(2, '0');
            }
        },

        startAutoPlay() {
            this.slideInterval = setInterval(() => {
                this.navigate(1);
            }, this.autoPlayDuration);
        },

        stopAutoPlay() {
            clearInterval(this.slideInterval);
        }
    };

    slider.init();

    // ============================
    // COUNTER ANIMATION
    // ============================
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('.counter');
                counters.forEach(counter => {
                    const target = parseInt(counter.dataset.target);
                    const suffix = counter.dataset.suffix || '';
                    const duration = 2000;
                    const increment = target / (duration / 16);
                    let current = 0;

                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.textContent = Math.ceil(current).toLocaleString();
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target.toLocaleString() + suffix;
                        }
                    };

                    updateCounter();
                });
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const statsSection = document.querySelector('.statistics-section');
    if (statsSection) {
        counterObserver.observe(statsSection);
    }

    // ============================
    // SCROLL PROGRESS
    // ============================
    const scrollProgress = document.getElementById('scrollProgress');
    const progressRingCircle = document.querySelector('.progress-ring-circle');

    window.addEventListener('scroll', () => {
        const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = (window.scrollY / totalHeight) * 100;

        scrollProgress.style.width = `${progress}%`;

        // Update progress ring
        if (progressRingCircle) {
            const circumference = 170;
            const offset = circumference - (progress / 100) * circumference;
            progressRingCircle.style.strokeDashoffset = offset;
        }
    });

    // ============================
    // BACK TO TOP
    // ============================
    const backToTop = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });

    backToTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // ============================
    // SCROLL INDICATOR
    // ============================
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', () => {
            const statsSection = document.querySelector('.statistics-section');
            if (statsSection) {
                statsSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    // ============================
    // PARALLAX EFFECT
    // ============================
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        const heroSlider = document.getElementById('heroSlider');

        if (heroSlider && scrolled < window.innerHeight) {
            heroSlider.style.opacity = 1 - scrolled / window.innerHeight;
        }
    });

    // ============================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // ============================
    // IMAGE LAZY LOADING ENHANCEMENT
    // ============================
    const images = document.querySelectorAll('img[loading="lazy"]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.5s';

                img.addEventListener('load', () => {
                    img.style.opacity = '1';
                });

                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));

    // ============================
    // 3D TILT EFFECT ON CARDS
    // ============================
    const cards = document.querySelectorAll('.news-card, .gallery-card, .stat-card');

    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
        });
    });

    console.log('✨ Enhanced Temple Website Loaded Successfully!');
});
</script>
@endpush

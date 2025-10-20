@extends('layouts.app')

@section('title', 'Photo Gallery')

@section('content')

<!-- ============================
     GALLERY HERO SECTION
============================ -->
<section class="gallery-hero">
    <div class="hero-overlay"></div>
    <div class="hero-pattern"></div>
    <div class="hero-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-down">
                <div class="hero-content">
                    <span class="hero-badge">
                        <i class="fas fa-camera-retro"></i>
                        Visual Journey
                    </span>
                    <h1 class="hero-title">
                        Photo <span class="gradient-text">Gallery</span>
                    </h1>
                    <p class="hero-subtitle">
                        Explore beautiful moments from our temple's spiritual journey, events,
                        and community gatherings captured through the lens of devotion.
                    </p>
                    {{-- <div class="hero-stats">
                        <div class="stat-item">
                            <h3 class="counter" data-target="{{ $totalPhotos }}">0</h3>
                            <p class="stat-label">Photos</p>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <h3 class="counter" data-target="{{ $totalCategories }}">0</h3>
                            <p class="stat-label">Albums</p>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <h3 class="stat-number" data-count="{{ $totalEvents }}">0</h3>
                            <p class="stat-label">Events</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <div class="mouse">
            <div class="wheel"></div>
        </div>
    </div>
</section>

<!-- ============================
     GALLERY CONTROLS SECTION
============================ -->
<section class="gallery-controls-section">
    <div class="container">
        <div class="controls-wrapper" data-aos="fade-up">
            <div class="row g-3 align-items-center">
                <!-- Search -->
                <div class="col-lg-4 col-md-6">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text"
                               class="search-input"
                               id="searchGallery"
                               placeholder="Search photos...">
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="col-lg-3 col-md-6">
                    <div class="filter-select">
                        <i class="fas fa-filter"></i>
                        <select class="filter-input" id="categoryFilter">
                            <option value="all">All Categories</option>
                            <option value="events">Temple Events</option>
                            <option value="festivals">Festivals</option>
                            <option value="meditation">Meditation</option>
                            <option value="ceremonies">Ceremonies</option>
                            <option value="community">Community</option>
                            <option value="architecture">Architecture</option>
                        </select>
                    </div>
                </div>

                <!-- Sort -->
                <div class="col-lg-2 col-md-6">
                    <div class="filter-select">
                        <i class="fas fa-sort"></i>
                        <select class="filter-input" id="sortFilter">
                            <option value="latest">Latest</option>
                            <option value="oldest">Oldest</option>
                            <option value="popular">Popular</option>
                        </select>
                    </div>
                </div>

                <!-- Layout Toggle -->
                <div class="col-lg-3 col-md-6">
                    <div class="layout-toggle">
                        <button class="layout-btn active" data-layout="grid" title="Grid View">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="layout-btn" data-layout="masonry" title="Masonry View">
                            <i class="fas fa-th-large"></i>
                        </button>
                        <button class="layout-btn" data-layout="justified" title="Justified View">
                            <i class="fas fa-grip-horizontal"></i>
                        </button>
                        <button class="layout-btn" data-layout="slider" title="Slider View">
                            <i class="fas fa-images"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     FEATURED ALBUMS SECTION
============================ -->
<section class="featured-albums-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-star"></i>
                Featured
            </span>
            <h2 class="section-title">Featured Albums</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="featured-album-card large">
                    <div class="album-image-wrapper">
                        <img src="{{ asset('storage/albums/vesak-2023.jpg') }}"
                             alt="Vesak Celebration 2023"
                             class="album-image">
                        <div class="album-overlay">
                            <div class="album-content">
                                <span class="album-count">
                                    <i class="fas fa-images"></i>
                                    48 Photos
                                </span>
                                <h3 class="album-title">Vesak Celebration 2023</h3>
                                <p class="album-description">
                                    Beautiful moments from our grand Vesak festival celebration
                                </p>
                                <a href="#" class="album-btn" data-category="festivals">
                                    View Album
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                        <div class="featured-album-card small">
                            <div class="album-image-wrapper">
                                <img src="{{ asset('storage/albums/meditation-retreat.jpg') }}"
                                     alt="Meditation Retreat"
                                     class="album-image">
                                <div class="album-overlay">
                                    <div class="album-content">
                                        <span class="album-count">
                                            <i class="fas fa-images"></i>
                                            32 Photos
                                        </span>
                                        <h4 class="album-title">Meditation Retreat</h4>
                                        <a href="#" class="album-btn" data-category="meditation">
                                            View Album
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12" data-aos="fade-left" data-aos-delay="200">
                        <div class="featured-album-card small">
                            <div class="album-image-wrapper">
                                <img src="{{ asset('storage/albums/community-service.jpg') }}"
                                     alt="Community Service"
                                     class="album-image">
                                <div class="album-overlay">
                                    <div class="album-content">
                                        <span class="album-count">
                                            <i class="fas fa-images"></i>
                                            25 Photos
                                        </span>
                                        <h4 class="album-title">Community Service</h4>
                                        <a href="#" class="album-btn" data-category="community">
                                            View Album
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     MAIN GALLERY SECTION
============================ -->
<section class="main-gallery-section py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-image"></i>
                Collection
            </span>
            <h2 class="section-title">All Photos</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid active" id="galleryGrid" data-layout="grid">
            @forelse($photos as $index => $photo)
            <div class="gallery-item"
                 data-category="{{ $photo->category ?? 'all' }}"
                 data-aos="zoom-in"
                 data-aos-delay="{{ ($index % 12) * 50 }}">
                <div class="photo-card">
                    <div class="photo-image-wrapper">
                        <img src="{{ asset('storage/' . $photo->image) }}"
                             alt="{{ $photo->title ?? 'Gallery Photo' }}"
                             class="photo-image"
                             loading="lazy">
                        <div class="photo-overlay">
                            <div class="photo-actions">
                                <button class="photo-action-btn zoom-btn"
                                        data-image="{{ asset('storage/' . $photo->image) }}"
                                        data-title="{{ $photo->title ?? 'Photo' }}"
                                        data-description="{{ $photo->description ?? '' }}"
                                        data-category="{{ $photo->category ?? '' }}"
                                        data-date="{{ $photo->created_at->format('F d, Y') }}"
                                        title="View Fullscreen">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                                <button class="photo-action-btn download-btn"
                                        data-image="{{ asset('storage/' . $photo->image) }}"
                                        title="Download">
                                    <i class="fas fa-download"></i>
                                </button>
                                <button class="photo-action-btn share-btn"
                                        data-url="{{ url()->current() }}"
                                        title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                            @if($photo->title)
                            <div class="photo-info">
                                <h5 class="photo-title">{{ $photo->title }}</h5>
                                @if($photo->category)
                                <span class="photo-category">{{ $photo->category }}</span>
                                @endif
                            </div>
                            @endif
                        </div>
                        @if($photo->is_new)
                        <div class="new-badge">
                            <i class="fas fa-sparkles"></i>
                            New
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="empty-state">
                    <div class="empty-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <h4>No Photos Available</h4>
                    <p>Check back soon for beautiful moments from our temple!</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Load More Button -->
        @if($photos->hasMorePages())
        <div class="load-more-wrapper text-center mt-5" data-aos="fade-up">
            <button class="btn-load-more" id="loadMoreBtn">
                <span class="btn-text">Load More Photos</span>
                <span class="btn-icon"><i class="fas fa-chevron-down"></i></span>
            </button>
            <p class="load-info">Showing {{ $photos->count() }} of {{ $photos->total() }} photos</p>
        </div>
        @endif
    </div>
</section>

<!-- ============================
     INSTAGRAM SECTION
============================ -->
<section class="instagram-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fab fa-instagram"></i>
                Follow Us
            </span>
            <h2 class="section-title">@SambuddharajaViharaya</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
            <p class="section-description">
                Follow us on Instagram for daily inspiration and updates
            </p>
        </div>

        <div class="instagram-grid" data-aos="fade-up">
            @for($i = 1; $i <= 6; $i++)
            <div class="instagram-item">
                <img src="{{ asset('images/instagram/ig-' . $i . '.jpg') }}"
                     alt="Instagram Photo {{ $i }}"
                     class="instagram-image">
                <div class="instagram-overlay">
                    <div class="instagram-stats">
                        <span class="stat">
                            <i class="fas fa-heart"></i>
                            {{ rand(100, 500) }}
                        </span>
                        <span class="stat">
                            <i class="fas fa-comment"></i>
                            {{ rand(10, 50) }}
                        </span>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="https://instagram.com/sambuddharajaviharaya"
               target="_blank"
               class="btn-instagram">
                <i class="fab fa-instagram"></i>
                Follow on Instagram
            </a>
        </div>
    </div>
</section>

<!-- ============================
     UPLOAD CTA SECTION
============================ -->
<section class="upload-cta-section py-5">
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
                <div class="cta-content">
                    <div class="cta-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h2 class="cta-title">Share Your Moments</h2>
                    <p class="cta-description">
                        Have photos from our events? Share them with the community and help us
                        document our spiritual journey together.
                    </p>
                    <a href="{{ route('contact.create') }}" class="btn-cta">
                        <i class="fas fa-cloud-upload-alt"></i>
                        Submit Your Photos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     LIGHTBOX MODAL
============================ -->
<div class="lightbox-modal" id="lightboxModal">
    <button class="lightbox-close" id="lightboxClose">
        <i class="fas fa-times"></i>
    </button>

    <button class="lightbox-nav prev" id="lightboxPrev">
        <i class="fas fa-chevron-left"></i>
    </button>

    <button class="lightbox-nav next" id="lightboxNext">
        <i class="fas fa-chevron-right"></i>
    </button>

    <div class="lightbox-content">
        <div class="lightbox-image-wrapper">
            <img src="" alt="" id="lightboxImage" class="lightbox-image">
            <div class="lightbox-loader">
                <div class="spinner"></div>
            </div>
        </div>

        <div class="lightbox-info">
            <div class="info-left">
                <h3 class="lightbox-title" id="lightboxTitle"></h3>
                <p class="lightbox-description" id="lightboxDescription"></p>
                <div class="lightbox-meta">
                    <span class="meta-item" id="lightboxCategory"></span>
                    <span class="meta-item" id="lightboxDate"></span>
                </div>
            </div>
            <div class="info-right">
                <button class="lightbox-action-btn" id="lightboxDownload" title="Download">
                    <i class="fas fa-download"></i>
                </button>
                <button class="lightbox-action-btn" id="lightboxShare" title="Share">
                    <i class="fas fa-share-alt"></i>
                </button>
                <button class="lightbox-action-btn" id="lightboxFavorite" title="Favorite">
                    <i class="far fa-heart"></i>
                </button>
            </div>
        </div>

        <div class="lightbox-thumbnails" id="lightboxThumbnails">
            <!-- Thumbnails will be dynamically inserted -->
        </div>
    </div>

    <div class="lightbox-counter">
        <span id="currentPhoto">1</span> / <span id="totalPhotos">10</span>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<style>
/* ============================
   GALLERY HERO SECTION
============================ */
.gallery-hero {
    position: relative;
    min-height: 70vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    overflow: hidden;
    padding: 6rem 0 4rem;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.05)" d="M0,96L48,112C96,128,192,160,288,165.3C384,171,480,149,576,133.3C672,117,768,107,864,122.7C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
    background-size: cover;
}

.hero-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 50px 50px;
}

.hero-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.hero-particles .particle {
    position: absolute;
    width: 10px;
    height: 10px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    animation: particleFloat 15s infinite ease-in-out;
}

.hero-particles .particle:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; animation-duration: 12s; }
.hero-particles .particle:nth-child(2) { top: 40%; left: 30%; animation-delay: 2s; animation-duration: 15s; }
.hero-particles .particle:nth-child(3) { top: 60%; left: 50%; animation-delay: 4s; animation-duration: 18s; }
.hero-particles .particle:nth-child(4) { top: 30%; left: 70%; animation-delay: 1s; animation-duration: 14s; }
.hero-particles .particle:nth-child(5) { top: 80%; left: 85%; animation-delay: 3s; animation-duration: 16s; }

@keyframes particleFloat {
    0%, 100% { transform: translate(0, 0) scale(1); opacity: 0.3; }
    25% { transform: translate(50px, -50px) scale(1.2); opacity: 0.6; }
    50% { transform: translate(-30px, -100px) scale(0.8); opacity: 0.4; }
    75% { transform: translate(70px, -70px) scale(1.1); opacity: 0.5; }
}

.hero-content {
    position: relative;
    z-index: 1;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1.5rem;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 50px;
    color: white;
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 1.5rem;
}

.hero-title {
    font-size: clamp(2.5rem, 6vw, 4.5rem);
    font-weight: 800;
    color: white;
    margin-bottom: 1.5rem;
}

.gradient-text {
    background: linear-gradient(45deg, #fff, #f6d365);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-subtitle {
    font-size: 1.125rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    max-width: 700px;
    margin: 0 auto 3rem;
}

.hero-stats {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: white;
    margin-bottom: 0.25rem;
}

.stat-label {
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.8);
    margin: 0;
}

.stat-divider {
    width: 1px;
    height: 50px;
    background: rgba(255, 255, 255, 0.3);
}

.scroll-indicator {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
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
    0% { opacity: 1; transform: translateY(0); }
    100% { opacity: 0; transform: translateY(20px); }
}

/* ============================
   GALLERY CONTROLS
============================ */
.gallery-controls-section {
    margin-top: -60px;
    position: relative;
    z-index: 10;
    padding: 0 15px;
    margin-bottom: 4rem;
}

.controls-wrapper {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.search-box {
    position: relative;
    display: flex;
    align-items: center;
}

.search-box i {
    position: absolute;
    left: 1.25rem;
    color: #667eea;
    font-size: 1.125rem;
}

.search-input {
    width: 100%;
    padding: 0.875rem 1.25rem 0.875rem 3.5rem;
    border: 2px solid #e1e8ed;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s;
}

.search-input:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}

.filter-select {
    position: relative;
    display: flex;
    align-items: center;
}

.filter-select i {
    position: absolute;
    left: 1.25rem;
    color: #667eea;
    pointer-events: none;
    z-index: 1;
}

.filter-input {
    width: 100%;
    padding: 0.875rem 1.25rem 0.875rem 3.5rem;
    border: 2px solid #e1e8ed;
    border-radius: 12px;
    font-size: 1rem;
    background: white;
    cursor: pointer;
    transition: all 0.3s;
    appearance: none;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23667eea' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    background-size: 16px 12px;
}

.filter-input:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}

.layout-toggle {
    display: flex;
    gap: 0.5rem;
    background: #f8f9fa;
    padding: 0.5rem;
    border-radius: 12px;
}

.layout-btn {
    flex: 1;
    padding: 0.75rem;
    border: none;
    background: transparent;
    color: #636e72;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 1.125rem;
}

.layout-btn.active {
    background: white;
    color: #667eea;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.layout-btn:hover:not(.active) {
    color: #667eea;
}

/* ============================
   FEATURED ALBUMS
============================ */
.featured-albums-section {
    background: #f8f9fa;
}

.featured-album-card {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.featured-album-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.featured-album-card.large .album-image-wrapper {
    height: 500px;
}

.featured-album-card.small .album-image-wrapper {
    height: 238px;
}

.album-image-wrapper {
    position: relative;
    overflow: hidden;
}

.album-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.featured-album-card:hover .album-image {
    transform: scale(1.1);
}

.album-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 60%);
    display: flex;
    align-items: flex-end;
    padding: 2rem;
    opacity: 0;
    transition: opacity 0.4s;
}

.featured-album-card:hover .album-overlay {
    opacity: 1;
}

.album-content {
    width: 100%;
    transform: translateY(20px);
    transition: transform 0.4s;
}

.featured-album-card:hover .album-content {
    transform: translateY(0);
}

.album-count {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    color: white;
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.album-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: white;
    margin-bottom: 0.75rem;
}

.featured-album-card.small .album-title {
    font-size: 1.25rem;
}

.album-description {
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 1.5rem;
}

.album-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.875rem 1.75rem;
    background: white;
    color: #667eea;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s;
}

.album-btn:hover {
    transform: translateX(5px);
    box-shadow: 0 5px 20px rgba(255, 255, 255, 0.3);
    color: #667eea;
}

/* ============================
   MAIN GALLERY GRID
============================ */
.gallery-grid {
    display: grid;
    gap: 2rem;
}

.gallery-grid[data-layout="grid"] {
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
}

.gallery-grid[data-layout="masonry"] {
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    grid-auto-rows: 10px;
}

.gallery-grid[data-layout="justified"] {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.gallery-grid[data-layout="slider"] {
    grid-template-columns: 1fr;
    max-width: 1000px;
    margin: 0 auto;
}

.gallery-item {
    position: relative;
}

/* Masonry specific heights */
.gallery-grid[data-layout="masonry"] .gallery-item:nth-child(3n+1) .photo-image-wrapper {
    height: 400px;
    grid-row-end: span 40;
}

.gallery-grid[data-layout="masonry"] .gallery-item:nth-child(3n+2) .photo-image-wrapper {
    height: 300px;
    grid-row-end: span 30;
}

.gallery-grid[data-layout="masonry"] .gallery-item:nth-child(3n+3) .photo-image-wrapper {
    height: 350px;
    grid-row-end: span 35;
}

.photo-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.photo-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
}

.photo-image-wrapper {
    position: relative;
    height: 350px;
    overflow: hidden;
}

.gallery-grid[data-layout="slider"] .photo-image-wrapper {
    height: 600px;
}

.photo-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.photo-card:hover .photo-image {
    transform: scale(1.1);
}

.photo-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 60%);
    opacity: 0;
    transition: opacity 0.4s;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 1.5rem;
}

.photo-card:hover .photo-overlay {
    opacity: 1;
}

.photo-actions {
    display: flex;
    gap: 0.75rem;
    justify-content: center;
    opacity: 0;
    transform: translateY(-20px);
    transition: all 0.4s 0.1s;
}

.photo-card:hover .photo-actions {
    opacity: 1;
    transform: translateY(0);
}

.photo-action-btn {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    color: white;
    font-size: 1.125rem;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.photo-action-btn:hover {
    background: white;
    color: #667eea;
    transform: scale(1.1);
}

.photo-info {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.4s 0.2s;
}

.photo-card:hover .photo-info {
    opacity: 1;
    transform: translateY(0);
}

.photo-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: white;
    margin-bottom: 0.5rem;
}

.photo-category {
    display: inline-block;
    padding: 0.375rem 1rem;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    color: white;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.new-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    padding: 0.5rem 1rem;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: white;
    font-size: 0.75rem;
    font-weight: 600;
    border-radius: 50px;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    z-index: 2;
    box-shadow: 0 5px 15px rgba(245, 87, 108, 0.4);
}

/* ============================
   LOAD MORE
============================ */
.load-more-wrapper {
    margin-top: 3rem;
}

.btn-load-more {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 3rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 50px;
    font-size: 1.125rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.4s;
}

.btn-load-more:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
}

.btn-load-more .btn-icon {
    transition: transform 0.3s;
}

.btn-load-more:hover .btn-icon {
    transform: translateY(3px);
}

.load-info {
    margin-top: 1rem;
    color: #636e72;
    font-size: 0.875rem;
}

/* ============================
   INSTAGRAM SECTION
============================ */
.instagram-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 1rem;
}

.instagram-item {
    position: relative;
    aspect-ratio: 1;
    border-radius: 15px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.3s;
}

.instagram-item:hover {
    transform: scale(1.05);
}

.instagram-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.instagram-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
}

.instagram-item:hover .instagram-overlay {
    opacity: 1;
}

.instagram-stats {
    display: flex;
    gap: 2rem;
    color: white;
    font-weight: 600;
}

.instagram-stats .stat {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-instagram {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 2.5rem;
    background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.125rem;
    transition: all 0.3s;
}

.btn-instagram:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(188, 24, 136, 0.4);
    color: white;
}

/* ============================
   UPLOAD CTA
============================ */
.upload-cta-section {
    position: relative;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    overflow: hidden;
}

.cta-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.05)" d="M0,96L48,112C96,128,192,160,288,165.3C384,171,480,149,576,133.3C672,117,768,107,864,122.7C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat center;
    background-size: cover;
}

.cta-content {
    position: relative;
    z-index: 1;
    padding: 3rem 0;
}

.cta-icon {
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: white;
    margin: 0 auto 2rem;
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.cta-title {
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: 800;
    color: white;
    margin-bottom: 1rem;
}

.cta-description {
    font-size: 1.125rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2.5rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.btn-cta {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 2.5rem;
    background: white;
    color: #667eea;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.125rem;
    transition: all 0.3s;
}

.btn-cta:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

/* ============================
   LIGHTBOX MODAL
============================ */
.lightbox-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.95);
    z-index: 10000;
    display: none;
    opacity: 0;
    transition: opacity 0.3s;
}

.lightbox-modal.active {
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 1;
}

.lightbox-close {
    position: absolute;
    top: 2rem;
    right: 2rem;
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    transition: all 0.3s;
    z-index: 10;
}

.lightbox-close:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: rotate(90deg);
}

.lightbox-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    transition: all 0.3s;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
}

.lightbox-nav:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-50%) scale(1.1);
}

.lightbox-nav.prev {
    left: 2rem;
}

.lightbox-nav.next {
    right: 2rem;
}

.lightbox-content {
    width: 90%;
    max-width: 1200px;
    position: relative;
}

.lightbox-image-wrapper {
    position: relative;
    max-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 2rem;
}

.lightbox-image {
    max-width: 100%;
    max-height: 70vh;
    border-radius: 10px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
}

.lightbox-loader {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.spinner {
    width: 50px;
    height: 50px;
    border: 4px solid rgba(255, 255, 255, 0.2);
    border-top-color: white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

.lightbox-info {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 2rem;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 2rem;
    margin-bottom: 1.5rem;
}

.info-left {
    flex: 1;
}

.lightbox-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 0.75rem;
}

.lightbox-description {
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 1rem;
}

.lightbox-meta {
    display: flex;
    gap: 1.5rem;
    flex-wrap: wrap;
}

.lightbox-meta .meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.875rem;
}

.info-right {
    display: flex;
    gap: 1rem;
}

.lightbox-action-btn {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    color: white;
    font-size: 1.125rem;
    cursor: pointer;
    transition: all 0.3s;
}

.lightbox-action-btn:hover {
    background: white;
    color: #667eea;
    transform: scale(1.1);
}

.lightbox-thumbnails {
    display: flex;
    gap: 1rem;
    overflow-x: auto;
    padding: 1rem 0;
}

.lightbox-thumbnails::-webkit-scrollbar {
    height: 8px;
}

.lightbox-thumbnails::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
}

.lightbox-thumbnails::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.3);
    border-radius: 10px;
}

.lightbox-thumbnail {
    width: 100px;
    height: 80px;
    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;
    opacity: 0.5;
    transition: all 0.3s;
    border: 2px solid transparent;
    flex-shrink: 0;
}

.lightbox-thumbnail:hover,
.lightbox-thumbnail.active {
    opacity: 1;
    border-color: white;
}

.lightbox-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.lightbox-counter {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 0.75rem 2rem;
    border-radius: 50px;
    color: white;
    font-weight: 600;
}

/* ============================
   SECTION HEADERS
============================ */
.section-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1.5rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
    color: #2d3436;
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
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
    color: #636e72;
    max-width: 600px;
    margin: 0 auto;
}

/* ============================
   EMPTY STATE
============================ */
.empty-state {
    text-align: center;
    padding: 5rem 2rem;
}

.empty-icon {
    font-size: 5rem;
    color: #667eea;
    margin-bottom: 1.5rem;
    opacity: 0.3;
}

.empty-state h4 {
    font-size: 1.75rem;
    color: #2d3436;
    margin-bottom: 0.75rem;
}

.empty-state p {
    color: #636e72;
    font-size: 1.125rem;
}

/* ============================
   RESPONSIVE
============================ */
@media (max-width: 991px) {
    .gallery-controls-section {
        margin-top: -40px;
    }

    .controls-wrapper {
        padding: 1.5rem;
    }

    .gallery-grid[data-layout="grid"],
    .gallery-grid[data-layout="masonry"] {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    }

    .instagram-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .featured-album-card.large .album-image-wrapper {
        height: 350px;
    }
}

@media (max-width: 768px) {
    .gallery-hero {
        min-height: 60vh;
        padding: 4rem 0 3rem;
    }

    .scroll-indicator {
        display: none;
    }

    .hero-stats {
        gap: 1rem;
    }

    .stat-divider {
        display: none;
    }

    .gallery-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem;
    }

    .instagram-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .lightbox-nav {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }

    .lightbox-nav.prev {
        left: 1rem;
    }

    .lightbox-nav.next {
        right: 1rem;
    }

    .lightbox-close {
        top: 1rem;
        right: 1rem;
        width: 40px;
        height: 40px;
        font-size: 1.125rem;
    }

    .lightbox-info {
        flex-direction: column;
        padding: 1.5rem;
    }

    .layout-toggle {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .photo-image-wrapper {
        height: 250px !important;
    }

    .featured-album-card.small .album-image-wrapper {
        height: 200px;
    }
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

    // Counter Animation
    const statNumbers = document.querySelectorAll('.stat-number');
    let hasAnimated = false;

    const animateNumbers = () => {
        statNumbers.forEach(stat => {
            const target = parseInt(stat.dataset.count);
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;

            const updateNumber = () => {
                current += increment;
                if (current < target) {
                    stat.textContent = Math.ceil(current);
                    requestAnimationFrame(updateNumber);
                } else {
                    stat.textContent = target;
                }
            };

            updateNumber();
        });
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated) {
                animateNumbers();
                hasAnimated = true;
            }
        });
    }, { threshold: 0.5 });

    const heroStats = document.querySelector('.hero-stats');
    if (heroStats) {
        observer.observe(heroStats);
    }

    // Search Functionality
    const searchInput = document.getElementById('searchGallery');
    const galleryItems = document.querySelectorAll('.gallery-item');

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();

            galleryItems.forEach(item => {
                const title = item.querySelector('.photo-title')?.textContent.toLowerCase() || '';
                const category = item.dataset.category?.toLowerCase() || '';

                if (title.includes(searchTerm) || category.includes(searchTerm)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }

    // Category Filter
    const categoryFilter = document.getElementById('categoryFilter');
    if (categoryFilter) {
        categoryFilter.addEventListener('change', function() {
            const selectedCategory = this.value.toLowerCase();

            galleryItems.forEach(item => {
                const itemCategory = item.dataset.category?.toLowerCase() || '';

                if (selectedCategory === 'all' || itemCategory === selectedCategory) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }

    // Album Filter Buttons
    const albumBtns = document.querySelectorAll('.album-btn');
    albumBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const category = this.dataset.category;

            if (categoryFilter) {
                categoryFilter.value = category;
                categoryFilter.dispatchEvent(new Event('change'));
            }

            // Scroll to gallery
            const gallerySection = document.querySelector('.main-gallery-section');
            if (gallerySection) {
                gallerySection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Layout Toggle
    const layoutBtns = document.querySelectorAll('.layout-btn');
    const galleryGrid = document.getElementById('galleryGrid');

    layoutBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            layoutBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const layout = this.dataset.layout;
            galleryGrid.dataset.layout = layout;
        });
    });

    // Lightbox Functionality
    const lightboxModal = document.getElementById('lightboxModal');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxDescription = document.getElementById('lightboxDescription');
    const lightboxCategory = document.getElementById('lightboxCategory');
    const lightboxDate = document.getElementById('lightboxDate');
    const lightboxClose = document.getElementById('lightboxClose');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');
    const currentPhotoSpan = document.getElementById('currentPhoto');
    const totalPhotosSpan = document.getElementById('totalPhotos');

    let currentImageIndex = 0;
    let allImages = [];

    // Collect all images
    document.querySelectorAll('.zoom-btn').forEach((btn, index) => {
        allImages.push({
            src: btn.dataset.image,
            title: btn.dataset.title,
            description: btn.dataset.description,
            category: btn.dataset.category,
            date: btn.dataset.date
        });

        btn.addEventListener('click', function() {
            currentImageIndex = index;
            openLightbox();
        });
    });

    totalPhotosSpan.textContent = allImages.length;

    function openLightbox() {
        if (allImages.length === 0) return;

        const image = allImages[currentImageIndex];

        lightboxImage.src = image.src;
        lightboxTitle.textContent = image.title;
        lightboxDescription.textContent = image.description;
        lightboxCategory.innerHTML = `<i class="fas fa-folder"></i> ${image.category}`;
        lightboxDate.innerHTML = `<i class="far fa-calendar-alt"></i> ${image.date}`;
        currentPhotoSpan.textContent = currentImageIndex + 1;

        lightboxModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightboxModal.classList.remove('active');
        document.body.style.overflow = '';
    }

    function showPrevImage() {
        currentImageIndex = (currentImageIndex - 1 + allImages.length) % allImages.length;
        openLightbox();
    }

    function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % allImages.length;
        openLightbox();
    }

    lightboxClose.addEventListener('click', closeLightbox);
    lightboxPrev.addEventListener('click', showPrevImage);
    lightboxNext.addEventListener('click', showNextImage);

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!lightboxModal.classList.contains('active')) return;

        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') showPrevImage();
        if (e.key === 'ArrowRight') showNextImage();
    });

    // Click outside to close
    lightboxModal.addEventListener('click', function(e) {
        if (e.target === lightboxModal) {
            closeLightbox();
        }
    });

    // Download functionality
    const downloadBtns = document.querySelectorAll('.download-btn');
    downloadBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const imageUrl = this.dataset.image;
            const link = document.createElement('a');
            link.href = imageUrl;
            link.download = imageUrl.split('/').pop();
            link.click();
        });
    });

    document.getElementById('lightboxDownload')?.addEventListener('click', function() {
        const imageUrl = lightboxImage.src;
        const link = document.createElement('a');
        link.href = imageUrl;
        link.download = imageUrl.split('/').pop();
        link.click();
    });

    // Share functionality
    const shareBtns = document.querySelectorAll('.share-btn');
    shareBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const url = this.dataset.url;

            if (navigator.share) {
                navigator.share({
                    title: 'Sambuddaraja Viharaya Gallery',
                    url: url
                });
            } else {
                // Fallback: copy to clipboard
                navigator.clipboard.writeText(url);
                alert('Link copied to clipboard!');
            }
        });
    });

    // Scroll indicator
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', function() {
            const controlsSection = document.querySelector('.gallery-controls-section');
            if (controlsSection) {
                controlsSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    // Favorite functionality (toggle)
    document.getElementById('lightboxFavorite')?.addEventListener('click', function() {
        const icon = this.querySelector('i');
        if (icon.classList.contains('far')) {
            icon.classList.remove('far');
            icon.classList.add('fas');
            this.style.color = '#f5576c';
        } else {
            icon.classList.remove('fas');
            icon.classList.add('far');
            this.style.color = '';
        }
    });

    console.log('✨ Gallery Page Loaded Successfully!');
});
</script>
@endpush

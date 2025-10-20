@extends('layouts.app')

@section('title', 'Latest News')

@section('content')

<!-- ============================
     NEWS HERO SECTION
============================ -->
<section class="news-hero">
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
                        <i class="fas fa-newspaper"></i>
                        Stay Updated
                    </span>
                    <h1 class="hero-title">
                        Latest <span class="gradient-text">News</span>
                    </h1>
                    <p class="hero-subtitle">
                        Discover the latest happenings, events, and spiritual teachings from our temple community.
                        Stay connected with our journey of peace and enlightenment.
                    </p>
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
     FILTERS & SEARCH SECTION
============================ -->
<section class="filters-section">
    <div class="container">
        <div class="filters-wrapper" data-aos="fade-up">
            <div class="row g-3 align-items-center">
                <!-- Search Bar -->
                <div class="col-lg-5 col-md-6">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text"
                               class="search-input"
                               id="searchNews"
                               placeholder="Search news articles...">
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="col-lg-3 col-md-6">
                    <div class="filter-select">
                        <i class="fas fa-filter"></i>
                        <select class="filter-input" id="categoryFilter">
                            <option value="">All Categories</option>
                            <option value="events">Events</option>
                            <option value="teachings">Teachings</option>
                            <option value="community">Community</option>
                            <option value="announcements">Announcements</option>
                        </select>
                    </div>
                </div>

                <!-- Sort By -->
                <div class="col-lg-2 col-md-6">
                    <div class="filter-select">
                        <i class="fas fa-sort"></i>
                        <select class="filter-input" id="sortFilter">
                            <option value="latest">Latest First</option>
                            <option value="oldest">Oldest First</option>
                            <option value="popular">Most Popular</option>
                        </select>
                    </div>
                </div>

                <!-- View Toggle -->
                <div class="col-lg-2 col-md-6">
                    <div class="view-toggle">
                        <button class="view-btn active" data-view="grid">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="view-btn" data-view="list">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     FEATURED NEWS SECTION
============================ -->
@if($featuredNews->isNotEmpty())
<section class="featured-news-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-star"></i>
                Featured
            </span>
            <h2 class="section-title">Top Stories</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
        </div>

        <div class="row g-4">
            @foreach($featuredNews->take(2) as $index => $item)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="featured-card">
                    <div class="featured-image-wrapper">
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/default-news.jpg') }}"
                             alt="{{ $item->title }}"
                             class="featured-image">
                        <div class="featured-badge">
                            <i class="fas fa-fire"></i> Featured
                        </div>
                        <div class="image-overlay"></div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-meta">
                            <span class="meta-item">
                                <i class="far fa-calendar-alt"></i>
                                {{ $item->created_at->format('M d, Y') }}
                            </span>
                            <span class="meta-item">
                                <i class="far fa-clock"></i>
                                {{ $item->created_at->diffForHumans() }}
                            </span>
                            @if($item->category)
                            <span class="meta-category">{{ $item->category }}</span>
                            @endif
                        </div>
                        <h3 class="featured-title">
                            <a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a>
                        </h3>
                        <p class="featured-excerpt">
                            {{ Str::limit(strip_tags($item->content), 150) }}
                        </p>
                        <a href="{{ route('news.show', $item->id) }}" class="read-more-btn">
                            Continue Reading
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- ============================
     ALL NEWS SECTION
============================ -->
<section class="all-news-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-newspaper"></i>
                All Articles
            </span>
            <h2 class="section-title">Recent News</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
        </div>

        <div class="news-grid" id="newsGrid">
            @forelse($news as $index => $item)
            <div class="news-item" data-aos="fade-up" data-aos-delay="{{ ($index % 6) * 50 }}">
                <article class="news-card">
                    <div class="news-image-wrapper">
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/default-news.jpg') }}"
                             alt="{{ $item->title }}"
                             class="news-image"
                             loading="lazy">
                        <div class="news-date-badge">
                            <span class="date-day">{{ $item->created_at->format('d') }}</span>
                            <span class="date-month">{{ $item->created_at->format('M') }}</span>
                        </div>
                        @if($item->category)
                        <div class="news-category-badge">{{ $item->category }}</div>
                        @endif
                        <div class="image-overlay"></div>
                    </div>
                    <div class="news-body">
                        <div class="news-meta">
                            <span class="meta-item">
                                <i class="far fa-clock"></i>
                                {{ $item->created_at->diffForHumans() }}
                            </span>
                            @if($item->author)
                            <span class="meta-item">
                                <i class="far fa-user"></i>
                                {{ $item->author }}
                            </span>
                            @endif
                        </div>
                        <h3 class="news-title">
                            <a href="{{ route('news.show', $item->id) }}">
                                {{ Str::limit($item->title, 60) }}
                            </a>
                        </h3>
                        <p class="news-excerpt">
                            {{ Str::limit(strip_tags($item->content), 120) }}
                        </p>
                        <div class="news-footer">
                            <a href="{{ route('news.show', $item->id) }}" class="read-more-link">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            @if($item->views)
                            <span class="views-count">
                                <i class="far fa-eye"></i>
                                {{ $item->views }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="card-shine"></div>
                </article>
            </div>
            @empty
            <div class="col-12">
                <div class="empty-state" data-aos="fade-up">
                    <div class="empty-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h4>No News Available</h4>
                    <p>Check back soon for the latest updates from our temple!</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($news->hasPages())
        <div class="pagination-wrapper mt-5" data-aos="fade-up">
            {{ $news->links('vendor.pagination.custom') }}
        </div>
        @endif
    </div>
</section>

<!-- ============================
     NEWSLETTER SECTION
============================ -->
<section class="newsletter-section py-5">
    <div class="newsletter-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
                <div class="newsletter-content">
                    <div class="newsletter-icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h2 class="newsletter-title">Subscribe to Our Newsletter</h2>
                    <p class="newsletter-description">
                        Get the latest news, events, and spiritual teachings delivered directly to your inbox.
                    </p>
                    <form class="newsletter-form" id="newsletterForm">
                        <div class="input-group">
                            <input type="email"
                                   class="form-control newsletter-input"
                                   placeholder="Enter your email address"
                                   required>
                            <button type="submit" class="btn-newsletter">
                                Subscribe
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                        <p class="newsletter-note">
                            <i class="fas fa-lock"></i>
                            We respect your privacy. Unsubscribe at any time.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<style>
/* ============================
   NEWS HERO SECTION
============================ */
.news-hero {
    position: relative;
    min-height: 60vh;
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
    font-size: clamp(2.5rem, 6vw, 4rem);
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
    margin: 0 auto;
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
   FILTERS SECTION
============================ */
.filters-section {
    margin-top: -60px;
    position: relative;
    z-index: 10;
    padding: 0 15px;
    margin-bottom: 4rem;
}

.filters-wrapper {
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

.view-toggle {
    display: flex;
    gap: 0.5rem;
    background: #f8f9fa;
    padding: 0.5rem;
    border-radius: 12px;
}

.view-btn {
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

.view-btn.active {
    background: white;
    color: #667eea;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.view-btn:hover:not(.active) {
    color: #667eea;
}

/* ============================
   FEATURED NEWS SECTION
============================ */
.featured-news-section {
    background: #f8f9fa;
}

.featured-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.featured-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.featured-image-wrapper {
    position: relative;
    height: 350px;
    overflow: hidden;
}

.featured-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.featured-card:hover .featured-image {
    transform: scale(1.1);
}

.featured-badge {
    position: absolute;
    top: 1.5rem;
    left: 1.5rem;
    padding: 0.5rem 1.25rem;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: white;
    font-size: 0.875rem;
    font-weight: 600;
    border-radius: 50px;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    z-index: 2;
    box-shadow: 0 5px 15px rgba(245, 87, 108, 0.4);
}

.image-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 50%;
    background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
}

.featured-content {
    padding: 2rem;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.featured-meta {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
    margin-bottom: 1rem;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #636e72;
    font-size: 0.875rem;
}

.meta-item i {
    color: #667eea;
}

.meta-category {
    padding: 0.375rem 1rem;
    background: rgba(102, 126, 234, 0.1);
    color: #667eea;
    font-size: 0.75rem;
    font-weight: 600;
    border-radius: 50px;
    text-transform: uppercase;
}

.featured-title {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.3;
}

.featured-title a {
    color: #2d3436;
    text-decoration: none;
    transition: color 0.3s;
}

.featured-title a:hover {
    color: #667eea;
}

.featured-excerpt {
    color: #636e72;
    line-height: 1.8;
    margin-bottom: 1.5rem;
    flex: 1;
}

.read-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.875rem 1.75rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s;
    align-self: flex-start;
}

.read-more-btn:hover {
    transform: translateX(5px);
    box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
    color: white;
}

.read-more-btn i {
    transition: transform 0.3s;
}

.read-more-btn:hover i {
    transform: translateX(5px);
}

/* ============================
   ALL NEWS SECTION
============================ */
.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
}

.news-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
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

.news-date-badge {
    position: absolute;
    top: 1.5rem;
    left: 1.5rem;
    width: 60px;
    height: 60px;
    background: white;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    z-index: 2;
}

.date-day {
    font-size: 1.5rem;
    font-weight: 800;
    color: #667eea;
    line-height: 1;
}

.date-month {
    font-size: 0.75rem;
    font-weight: 600;
    color: #636e72;
    text-transform: uppercase;
    margin-top: 0.25rem;
}

.news-category-badge {
    position: absolute;
    top: 1.5rem;
    right: 1.5rem;
    padding: 0.5rem 1rem;
    background: rgba(102, 126, 234, 0.9);
    backdrop-filter: blur(10px);
    color: white;
    font-size: 0.75rem;
    font-weight: 600;
    border-radius: 50px;
    text-transform: uppercase;
    z-index: 2;
}

.news-body {
    padding: 1.5rem;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.news-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #e1e8ed;
}

.news-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.4;
}

.news-title a {
    color: #2d3436;
    text-decoration: none;
    transition: color 0.3s;
}

.news-title a:hover {
    color: #667eea;
}

.news-excerpt {
    color: #636e72;
    line-height: 1.7;
    margin-bottom: 1.5rem;
    flex: 1;
}

.news-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 1rem;
    border-top: 1px solid #e1e8ed;
}

.read-more-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s;
}

.read-more-link:hover {
    gap: 1rem;
    color: #764ba2;
}

.views-count {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #636e72;
    font-size: 0.875rem;
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
   NEWSLETTER SECTION
============================ */
.newsletter-section {
    position: relative;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    overflow: hidden;
}

.newsletter-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.05)" d="M0,96L48,112C96,128,192,160,288,165.3C384,171,480,149,576,133.3C672,117,768,107,864,122.7C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat center;
    background-size: cover;
}

.newsletter-content {
    position: relative;
    z-index: 1;
    padding: 3rem 0;
}

.newsletter-icon {
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

.newsletter-title {
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: 800;
    color: white;
    margin-bottom: 1rem;
}

.newsletter-description {
    font-size: 1.125rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2.5rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.newsletter-form {
    max-width: 600px;
    margin: 0 auto;
}

.newsletter-form .input-group {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.newsletter-input {
    flex: 1;
    padding: 1rem 1.5rem;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50px;
    font-size: 1rem;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    color: white;
}

.newsletter-input::placeholder {
    color: rgba(255, 255, 255, 0.6);
}

.newsletter-input:focus {
    outline: none;
    border-color: white;
    background: rgba(255, 255, 255, 0.15);
}

.btn-newsletter {
    padding: 1rem 2.5rem;
    background: white;
    color: #667eea;
    border: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    white-space: nowrap;
}

.btn-newsletter:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.newsletter-note {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.875rem;
    text-align: center;
    margin: 0;
}

.newsletter-note i {
    margin-right: 0.5rem;
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
    .filters-section {
        margin-top: -40px;
    }

    .filters-wrapper {
        padding: 1.5rem;
    }

    .news-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 1.5rem;
    }

    .featured-image-wrapper {
        height: 250px;
    }
}

@media (max-width: 768px) {
    .news-hero {
        min-height: 50vh;
        padding: 4rem 0 3rem;
    }

    .scroll-indicator {
        display: none;
    }

    .news-grid {
        grid-template-columns: 1fr;
    }

    .newsletter-form .input-group {
        flex-direction: column;
    }

    .btn-newsletter {
        width: 100%;
        justify-content: center;
    }

    .view-toggle {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .featured-content {
        padding: 1.5rem;
    }

    .featured-title {
        font-size: 1.5rem;
    }

    .news-body {
        padding: 1.25rem;
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

    // Search functionality
    const searchInput = document.getElementById('searchNews');
    const newsGrid = document.getElementById('newsGrid');
    const newsItems = newsGrid.querySelectorAll('.news-item');

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();

            newsItems.forEach(item => {
                const title = item.querySelector('.news-title a').textContent.toLowerCase();
                const excerpt = item.querySelector('.news-excerpt').textContent.toLowerCase();

                if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }

    // View toggle functionality
    const viewBtns = document.querySelectorAll('.view-btn');

    viewBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            viewBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const view = this.dataset.view;

            if (view === 'list') {
                newsGrid.style.gridTemplateColumns = '1fr';
            } else {
                newsGrid.style.gridTemplateColumns = 'repeat(auto-fill, minmax(350px, 1fr))';
            }
        });
    });

    // Newsletter form submission
    const newsletterForm = document.getElementById('newsletterForm');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;

            // Here you would typically send this to your backend
            alert('Thank you for subscribing! We\'ll send updates to: ' + email);
            this.reset();
        });
    }

    // Scroll indicator
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', function() {
            const filtersSection = document.querySelector('.filters-section');
            if (filtersSection) {
                filtersSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    console.log('✨ News Page Loaded Successfully!');
});
</script>
@endpush

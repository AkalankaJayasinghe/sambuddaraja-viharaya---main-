@extends('layouts.app')

@section('title', $news->title)

@section('content')

<!-- ============================
     NEWS DETAIL HERO
============================ -->
<section class="news-detail-hero">
    <div class="hero-image-wrapper">
        <img src="{{ $news->image ? asset('storage/' . $news->image) : asset('images/default-news.jpg') }}"
             alt="{{ $news->title }}"
             class="hero-image">
        <div class="hero-overlay"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <nav aria-label="breadcrumb" data-aos="fade-down">
                <ol class="breadcrumb custom-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></li>
                    @if($news->category)
                    <li class="breadcrumb-item">{{ $news->category }}</li>
                    @endif
                    <li class="breadcrumb-item active">Article</li>
                </ol>
            </nav>

            <div class="article-header" data-aos="fade-up">
                @if($news->category)
                <span class="category-badge">{{ $news->category }}</span>
                @endif
                <h1 class="article-title">{{ $news->title }}</h1>

                <div class="article-meta">
                    <div class="meta-left">
                        @if($news->author)
                        <div class="author-info">
                            <div class="author-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="author-details">
                                <span class="author-name">{{ $news->author }}</span>
                                <span class="author-role">Author</span>
                            </div>
                        </div>
                        @endif

                        <div class="meta-items">
                            <span class="meta-item">
                                <i class="far fa-calendar-alt"></i>
                                {{ $news->created_at->format('F d, Y') }}
                            </span>
                            <span class="meta-item">
                                <i class="far fa-clock"></i>
                                {{ $news->created_at->diffForHumans() }}
                            </span>
                            @if($news->reading_time)
                            <span class="meta-item">
                                <i class="fas fa-book-reader"></i>
                                {{ $news->reading_time }} min read
                            </span>
                            @endif
                            @if($news->views)
                            <span class="meta-item">
                                <i class="far fa-eye"></i>
                                {{ number_format($news->views) }} views
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     ARTICLE CONTENT SECTION
============================ -->
<section class="article-content-section py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                <article class="article-wrapper" data-aos="fade-up">
                    <!-- Social Share Sticky -->
                    <div class="social-share-sticky">
                        <h5 class="share-title">Share</h5>
                        <div class="share-buttons-vertical">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                               target="_blank"
                               class="share-btn facebook"
                               title="Share on Facebook">
                                <i class="fab fa-facebook-f"></i>
                                <span class="share-count">{{ rand(10, 100) }}</span>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($news->title) }}"
                               target="_blank"
                               class="share-btn twitter"
                               title="Share on Twitter">
                                <i class="fab fa-twitter"></i>
                                <span class="share-count">{{ rand(5, 50) }}</span>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($news->title) }}"
                               target="_blank"
                               class="share-btn linkedin"
                               title="Share on LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                                <span class="share-count">{{ rand(3, 30) }}</span>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($news->title . ' ' . url()->current()) }}"
                               target="_blank"
                               class="share-btn whatsapp"
                               title="Share on WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                                <span class="share-count">{{ rand(15, 80) }}</span>
                            </a>
                            <button class="share-btn copy"
                                    onclick="copyToClipboard('{{ url()->current() }}')"
                                    title="Copy Link">
                                <i class="fas fa-link"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Article Content -->
                    <div class="article-body">
                        {!! nl2br(e($news->content)) !!}
                    </div>

                    <!-- Tags -->
                    @if(isset($news->tags) && $news->tags)
                    <div class="article-tags">
                        <h5 class="tags-title">
                            <i class="fas fa-tags"></i>
                            Tags
                        </h5>
                        <div class="tags-list">
                            @foreach(explode(',', $news->tags) as $tag)
                            <a href="#" class="tag-item">{{ trim($tag) }}</a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Share Bottom -->
                    <div class="share-bottom">
                        <h5 class="share-title">Share this article</h5>
                        <div class="share-buttons-horizontal">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                               target="_blank"
                               class="share-btn-h facebook">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($news->title) }}"
                               target="_blank"
                               class="share-btn-h twitter">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}"
                               target="_blank"
                               class="share-btn-h linkedin">
                                <i class="fab fa-linkedin-in"></i>
                                <span>LinkedIn</span>
                            </a>
                            <a href="mailto:?subject={{ urlencode($news->title) }}&body={{ urlencode(url()->current()) }}"
                               class="share-btn-h email">
                                <i class="fas fa-envelope"></i>
                                <span>Email</span>
                            </a>
                        </div>
                    </div>

                    <!-- Author Bio -->
                    @if($news->author)
                    <div class="author-bio-card">
                        <div class="author-avatar-large">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="author-bio-content">
                            <h4 class="author-bio-name">{{ $news->author }}</h4>
                            <p class="author-bio-role">Contributing Author</p>
                            <p class="author-bio-text">
                                Dedicated to sharing insights and updates about our temple's activities,
                                spiritual teachings, and community events. Passionate about spreading the
                                message of peace and mindfulness.
                            </p>
                            <div class="author-social">
                                <a href="#" class="author-social-link"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="author-social-link"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="author-social-link"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Navigation -->
                    <div class="article-navigation">
                        @if($previousNews)
                        <a href="{{ route('news.show', $previousNews->id) }}" class="nav-link prev-article">
                            <span class="nav-label">
                                <i class="fas fa-arrow-left"></i>
                                Previous Article
                            </span>
                            <span class="nav-title">{{ Str::limit($previousNews->title, 50) }}</span>
                        </a>
                        @else
                        <div class="nav-link disabled"></div>
                        @endif

                        @if($nextNews)
                        <a href="{{ route('news.show', $nextNews->id) }}" class="nav-link next-article">
                            <span class="nav-label">
                                Next Article
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="nav-title">{{ Str::limit($nextNews->title, 50) }}</span>
                        </a>
                        @else
                        <div class="nav-link disabled"></div>
                        @endif
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <aside class="sidebar-wrapper">
                    <!-- Search Widget -->
                    <div class="sidebar-widget search-widget" data-aos="fade-up" data-aos-delay="0">
                        <h4 class="widget-title">
                            <i class="fas fa-search"></i>
                            Search News
                        </h4>
                        <div class="search-box">
                            <input type="text"
                                   class="search-input"
                                   placeholder="Search articles...">
                            <button class="search-btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-widget categories-widget" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="widget-title">
                            <i class="fas fa-folder-open"></i>
                            Categories
                        </h4>
                        <ul class="categories-list">
                            <li>
                                <a href="#">
                                    <span class="category-name">Events</span>
                                    <span class="category-count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="category-name">Teachings</span>
                                    <span class="category-count">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="category-name">Community</span>
                                    <span class="category-count">15</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="category-name">Announcements</span>
                                    <span class="category-count">6</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="category-name">Meditation</span>
                                    <span class="category-count">10</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Recent Posts Widget -->
                    @if($recentNews->isNotEmpty())
                    <div class="sidebar-widget recent-posts-widget" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="widget-title">
                            <i class="fas fa-newspaper"></i>
                            Recent Articles
                        </h4>
                        <div class="recent-posts-list">
                            @foreach($recentNews->take(5) as $recent)
                            <a href="{{ route('news.show', $recent->id) }}" class="recent-post-item">
                                <div class="recent-post-image">
                                    <img src="{{ $recent->image ? asset('storage/' . $recent->image) : asset('images/default-news.jpg') }}"
                                         alt="{{ $recent->title }}">
                                </div>
                                <div class="recent-post-content">
                                    <h6 class="recent-post-title">{{ Str::limit($recent->title, 50) }}</h6>
                                    <span class="recent-post-date">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ $recent->created_at->format('M d, Y') }}
                                    </span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Newsletter Widget -->
                    <div class="sidebar-widget newsletter-widget" data-aos="fade-up" data-aos-delay="300">
                        <div class="newsletter-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4 class="widget-title">Newsletter</h4>
                        <p class="newsletter-text">
                            Subscribe to get the latest news and updates delivered to your inbox.
                        </p>
                        <form class="newsletter-form">
                            <input type="email"
                                   class="newsletter-input"
                                   placeholder="Your email address"
                                   required>
                            <button type="submit" class="newsletter-btn">
                                Subscribe
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Popular Tags Widget -->
                    <div class="sidebar-widget tags-widget" data-aos="fade-up" data-aos-delay="400">
                        <h4 class="widget-title">
                            <i class="fas fa-tags"></i>
                            Popular Tags
                        </h4>
                        <div class="tags-cloud">
                            <a href="#" class="tag-cloud-item">Meditation</a>
                            <a href="#" class="tag-cloud-item">Buddhism</a>
                            <a href="#" class="tag-cloud-item">Peace</a>
                            <a href="#" class="tag-cloud-item">Community</a>
                            <a href="#" class="tag-cloud-item">Dharma</a>
                            <a href="#" class="tag-cloud-item">Mindfulness</a>
                            <a href="#" class="tag-cloud-item">Events</a>
                            <a href="#" class="tag-cloud-item">Teachings</a>
                            <a href="#" class="tag-cloud-item">Temple</a>
                            <a href="#" class="tag-cloud-item">Spiritual</a>
                        </div>
                    </div>

                    <!-- CTA Widget -->
                    <div class="sidebar-widget cta-widget" data-aos="fade-up" data-aos-delay="500">
                        <div class="cta-icon">
                            <i class="fas fa-hands-praying"></i>
                        </div>
                        <h4 class="cta-title">Join Our Community</h4>
                        <p class="cta-text">
                            Experience peace and spiritual growth with us.
                        </p>
                        <a href="{{ route('contact.create') }}" class="cta-btn">
                            Get Involved
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     RELATED NEWS SECTION
============================ -->
@if($relatedNews->isNotEmpty())
<section class="related-news-section py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-newspaper"></i>
                Related Articles
            </span>
            <h2 class="section-title">You May Also Like</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
        </div>

        <div class="row g-4">
            @foreach($relatedNews->take(3) as $index => $related)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <article class="related-card">
                    <div class="related-image-wrapper">
                        <img src="{{ $related->image ? asset('storage/' . $related->image) : asset('images/default-news.jpg') }}"
                             alt="{{ $related->title }}"
                             class="related-image">
                        <div class="related-overlay"></div>
                    </div>
                    <div class="related-body">
                        <div class="related-meta">
                            <span class="meta-item">
                                <i class="far fa-calendar-alt"></i>
                                {{ $related->created_at->format('M d, Y') }}
                            </span>
                        </div>
                        <h4 class="related-title">
                            <a href="{{ route('news.show', $related->id) }}">
                                {{ Str::limit($related->title, 60) }}
                            </a>
                        </h4>
                        <p class="related-excerpt">
                            {{ Str::limit(strip_tags($related->content), 100) }}
                        </p>
                        <a href="{{ route('news.show', $related->id) }}" class="related-link">
                            Read Article
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- ============================
     BACK TO NEWS CTA
============================ -->
<section class="back-cta-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <div class="back-cta-content">
                    <h3 class="back-cta-title">Want to Read More?</h3>
                    <p class="back-cta-text">
                        Explore more articles and stay updated with the latest news from our temple.
                    </p>
                    <a href="{{ route('news.index') }}" class="btn-back">
                        <i class="fas fa-arrow-left"></i>
                        Back to All News
                    </a>
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
   NEWS DETAIL HERO
============================ */
.news-detail-hero {
    position: relative;
    min-height: 70vh;
    display: flex;
    align-items: flex-end;
    padding-bottom: 3rem;
    overflow: hidden;
}

.hero-image-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.8) 100%);
}

.hero-content {
    position: relative;
    z-index: 1;
}

/* Breadcrumb */
.custom-breadcrumb {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    display: inline-flex;
    margin-bottom: 2rem;
}

.custom-breadcrumb .breadcrumb-item {
    color: rgba(255, 255, 255, 0.8);
}

.custom-breadcrumb .breadcrumb-item.active {
    color: white;
}

.custom-breadcrumb .breadcrumb-item a {
    color: white;
    text-decoration: none;
    transition: opacity 0.3s;
}

.custom-breadcrumb .breadcrumb-item a:hover {
    opacity: 0.8;
}

.custom-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, 0.6);
}

/* Article Header */
.article-header {
    max-width: 900px;
}

.category-badge {
    display: inline-block;
    padding: 0.5rem 1.25rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    font-size: 0.875rem;
    font-weight: 600;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 1.5rem;
}

.article-title {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 800;
    color: white;
    line-height: 1.2;
    margin-bottom: 2rem;
}

.article-meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
    flex-wrap: wrap;
}

.author-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.author-avatar {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
}

.author-details {
    display: flex;
    flex-direction: column;
}

.author-name {
    font-size: 1.125rem;
    font-weight: 600;
    color: white;
}

.author-role {
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.7);
}

.meta-items {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.875rem;
}

.meta-item i {
    color: rgba(255, 255, 255, 0.7);
}

/* ============================
   ARTICLE CONTENT
============================ */
.article-wrapper {
    position: relative;
}

/* Social Share Sticky */
.social-share-sticky {
    position: sticky;
    top: 100px;
    left: -80px;
    float: left;
    margin-left: -80px;
    z-index: 100;
}

.share-title {
    font-size: 0.875rem;
    font-weight: 600;
    color: #636e72;
    margin-bottom: 1rem;
    text-align: center;
}

.share-buttons-vertical {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.share-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s;
    position: relative;
    font-size: 1.125rem;
}

.share-btn.facebook { background: #3b5998; }
.share-btn.twitter { background: #1da1f2; }
.share-btn.linkedin { background: #0077b5; }
.share-btn.whatsapp { background: #25d366; }
.share-btn.copy { background: #636e72; cursor: pointer; border: none; }

.share-btn:hover {
    transform: translateX(-5px) scale(1.1);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    color: white;
}

.share-count {
    font-size: 0.625rem;
    position: absolute;
    bottom: -5px;
    background: white;
    color: #2d3436;
    padding: 0.125rem 0.375rem;
    border-radius: 10px;
    font-weight: 600;
}

/* Article Body */
.article-body {
    background: white;
    padding: 3rem;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    font-size: 1.125rem;
    line-height: 1.8;
    color: #2d3436;
    margin-bottom: 2rem;
}

.article-body p {
    margin-bottom: 1.5rem;
}

.article-body h2,
.article-body h3,
.article-body h4 {
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-weight: 700;
    color: #2d3436;
}

.article-body h2 { font-size: 2rem; }
.article-body h3 { font-size: 1.5rem; }
.article-body h4 { font-size: 1.25rem; }

.article-body img {
    max-width: 100%;
    height: auto;
    border-radius: 15px;
    margin: 2rem 0;
}

.article-body blockquote {
    border-left: 4px solid #667eea;
    padding-left: 2rem;
    margin: 2rem 0;
    font-style: italic;
    color: #636e72;
}

/* Tags */
.article-tags {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    margin-bottom: 2rem;
}

.tags-title {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 1.25rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 1.5rem;
}

.tags-title i {
    color: #667eea;
}

.tags-list {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
}

.tag-item {
    padding: 0.5rem 1.25rem;
    background: rgba(102, 126, 234, 0.1);
    color: #667eea;
    text-decoration: none;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
    transition: all 0.3s;
}

.tag-item:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
}

/* Share Bottom */
.share-bottom {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    margin-bottom: 2rem;
}

.share-buttons-horizontal {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.share-btn-h {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.875rem 1.5rem;
    border-radius: 12px;
    color: white;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s;
}

.share-btn-h.facebook { background: #3b5998; }
.share-btn-h.twitter { background: #1da1f2; }
.share-btn-h.linkedin { background: #0077b5; }
.share-btn-h.email { background: #636e72; }

.share-btn-h:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    color: white;
}

/* Author Bio */
.author-bio-card {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 3rem;
    border-radius: 20px;
    display: flex;
    gap: 2rem;
    align-items: flex-start;
    margin-bottom: 2rem;
    color: white;
}

.author-avatar-large {
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    flex-shrink: 0;
}

.author-bio-content {
    flex: 1;
}

.author-bio-name {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}

.author-bio-role {
    font-size: 1rem;
    opacity: 0.8;
    margin-bottom: 1rem;
}

.author-bio-text {
    line-height: 1.8;
    opacity: 0.9;
    margin-bottom: 1.5rem;
}

.author-social {
    display: flex;
    gap: 1rem;
}

.author-social-link {
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s;
}

.author-social-link:hover {
    background: white;
    color: #667eea;
    transform: translateY(-3px);
}

/* Navigation */
.article-navigation {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.nav-link {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    text-decoration: none;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    transition: all 0.3s;
}

.nav-link:not(.disabled):hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
}

.nav-link.disabled {
    opacity: 0;
    pointer-events: none;
}

.nav-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
    font-weight: 600;
    color: #667eea;
    text-transform: uppercase;
}

.nav-title {
    font-size: 1rem;
    font-weight: 600;
    color: #2d3436;
}

.prev-article .nav-label {
    justify-content: flex-start;
}

.next-article {
    text-align: right;
}

.next-article .nav-label {
    justify-content: flex-end;
}

/* ============================
   SIDEBAR
============================ */
.sidebar-wrapper {
    position: sticky;
    top: 100px;
}

.sidebar-widget {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    margin-bottom: 2rem;
}

.widget-title {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 1.25rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid #e1e8ed;
}

.widget-title i {
    color: #667eea;
}

/* Search Widget */
.search-widget .search-box {
    display: flex;
    gap: 0.5rem;
}

.search-widget .search-input {
    flex: 1;
    padding: 0.875rem 1.25rem;
    border: 2px solid #e1e8ed;
    border-radius: 12px;
    font-size: 1rem;
}

.search-widget .search-input:focus {
    outline: none;
    border-color: #667eea;
}

.search-btn {
    padding: 0.875rem 1.5rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s;
}

.search-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
}

/* Categories Widget */
.categories-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.categories-list li {
    margin-bottom: 0.75rem;
}

.categories-list a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.875rem 1.25rem;
    background: #f8f9fa;
    border-radius: 10px;
    color: #2d3436;
    text-decoration: none;
    transition: all 0.3s;
}

.categories-list a:hover {
    background: rgba(102, 126, 234, 0.1);
    color: #667eea;
    transform: translateX(5px);
}

.category-count {
    width: 30px;
    height: 30px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.875rem;
    font-weight: 600;
    color: #667eea;
}

/* Recent Posts Widget */
.recent-posts-list {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
}

.recent-post-item {
    display: flex;
    gap: 1rem;
    text-decoration: none;
    transition: all 0.3s;
}

.recent-post-item:hover {
    transform: translateX(5px);
}

.recent-post-image {
    width: 80px;
    height: 80px;
    border-radius: 10px;
    overflow: hidden;
    flex-shrink: 0;
}

.recent-post-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.recent-post-item:hover .recent-post-image img {
    transform: scale(1.1);
}

.recent-post-content {
    flex: 1;
}

.recent-post-title {
    font-size: 0.9375rem;
    font-weight: 600;
    color: #2d3436;
    margin-bottom: 0.5rem;
    line-height: 1.4;
}

.recent-post-date {
    font-size: 0.8125rem;
    color: #636e72;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Newsletter Widget */
.newsletter-widget {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-align: center;
}

.newsletter-widget .widget-title {
    color: white;
    border-color: rgba(255, 255, 255, 0.2);
    justify-content: center;
}

.newsletter-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0 auto 1.5rem;
}

.newsletter-text {
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 1.5rem;
}

.newsletter-input {
    width: 100%;
    padding: 0.875rem 1.25rem;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    color: white;
    margin-bottom: 1rem;
}

.newsletter-input::placeholder {
    color: rgba(255, 255, 255, 0.6);
}

.newsletter-input:focus {
    outline: none;
    border-color: white;
    background: rgba(255, 255, 255, 0.15);
}

.newsletter-btn {
    width: 100%;
    padding: 0.875rem 1.5rem;
    background: white;
    color: #667eea;
    border: none;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
}

.newsletter-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

/* Tags Cloud Widget */
.tags-cloud {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
}

.tag-cloud-item {
    padding: 0.5rem 1rem;
    background: rgba(102, 126, 234, 0.1);
    color: #667eea;
    text-decoration: none;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
    transition: all 0.3s;
}

.tag-cloud-item:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
}

/* CTA Widget */
.cta-widget {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-align: center;
}

.cta-widget .widget-title {
    color: white;
    border-color: rgba(255, 255, 255, 0.2);
    justify-content: center;
}

.cta-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0 auto 1.5rem;
}

.cta-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.cta-text {
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 1.5rem;
}

.cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.875rem 2rem;
    background: white;
    color: #667eea;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s;
}

.cta-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

/* ============================
   RELATED NEWS
============================ */
.related-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    height: 100%;
    transition: all 0.4s;
}

.related-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
}

.related-image-wrapper {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.related-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s;
}

.related-card:hover .related-image {
    transform: scale(1.1);
}

.related-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 50%;
    background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);
}

.related-body {
    padding: 1.5rem;
}

.related-meta {
    margin-bottom: 1rem;
}

.related-title {
    font-size: 1.125rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.4;
}

.related-title a {
    color: #2d3436;
    text-decoration: none;
    transition: color 0.3s;
}

.related-title a:hover {
    color: #667eea;
}

.related-excerpt {
    color: #636e72;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.related-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s;
}

.related-link:hover {
    gap: 1rem;
    color: #764ba2;
}

/* ============================
   BACK CTA
============================ */
.back-cta-section {
    background: #f8f9fa;
}

.back-cta-content {
    padding: 3rem 2rem;
}

.back-cta-title {
    font-size: 2rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 1rem;
}

.back-cta-text {
    color: #636e72;
    font-size: 1.125rem;
    margin-bottom: 2rem;
}

.btn-back {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 2.5rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s;
}

.btn-back:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
    color: white;
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
   RESPONSIVE
============================ */
@media (max-width: 991px) {
    .social-share-sticky {
        position: static;
        float: none;
        margin-left: 0;
        margin-bottom: 2rem;
    }

    .share-buttons-vertical {
        flex-direction: row;
        justify-content: center;
    }

    .article-body {
        padding: 2rem;
    }

    .author-bio-card {
        flex-direction: column;
        text-align: center;
    }

    .article-navigation {
        grid-template-columns: 1fr;
    }

    .next-article {
        text-align: left;
    }

    .next-article .nav-label {
        justify-content: flex-start;
    }

    .sidebar-wrapper {
        position: static;
    }
}

@media (max-width: 768px) {
    .news-detail-hero {
        min-height: 60vh;
        padding-bottom: 2rem;
    }

    .article-title {
        font-size: 2rem;
    }

    .article-meta {
        flex-direction: column;
        align-items: flex-start;
    }

    .article-body {
        padding: 1.5rem;
        font-size: 1rem;
    }

    .share-buttons-horizontal {
        flex-direction: column;
    }

    .share-btn-h {
        width: 100%;
        justify-content: center;
    }

    .author-bio-card {
        padding: 2rem;
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

    // Copy to clipboard function
    window.copyToClipboard = function(text) {
        navigator.clipboard.writeText(text).then(function() {
            alert('Link copied to clipboard!');
        }, function(err) {
            console.error('Could not copy text: ', err);
        });
    };

    // Smooth scroll for breadcrumb links
    document.querySelectorAll('.custom-breadcrumb a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // Newsletter form submission
    const newsletterForms = document.querySelectorAll('.newsletter-form');
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            alert('Thank you for subscribing! We\'ll send updates to: ' + email);
            this.reset();
        });
    });

    // Highlight current section in sidebar while scrolling
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.custom-breadcrumb .breadcrumb-item a');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });
    });

    console.log('✨ News Detail Page Loaded Successfully!');
});
</script>
@endpush

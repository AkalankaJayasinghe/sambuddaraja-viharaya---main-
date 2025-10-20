@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- ============================
     ABOUT HERO SECTION
============================ -->
<section class="about-hero">
    <div class="hero-overlay"></div>
    <div class="hero-pattern"></div>
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="hero-content">
                    <span class="hero-badge">
                        <i class="fas fa-om"></i>
                        About Us
                    </span>
                    <h1 class="hero-title">
                        Sambuddaraja <br>
                        <span class="gradient-text">Viharaya</span>
                    </h1>
                    <p class="hero-subtitle">
                        A sacred sanctuary where ancient Buddhist wisdom meets modern spiritual practice.
                        Discover peace, compassion, and enlightenment.
                    </p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <h3 class="stat-number" data-count="25">0</h3>
                            <p class="stat-label">Years of Service</p>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <h3 class="stat-number" data-count="5000">0</h3>
                            <p class="stat-label">Devotees</p>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <h3 class="stat-number" data-count="150">0</h3>
                            <p class="stat-label">Events Yearly</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="hero-image-wrapper">
                    <div class="floating-shape shape-1"></div>
                    <div class="floating-shape shape-2"></div>
                    <div class="floating-shape shape-3"></div>
                    <img src="https://i.ibb.co/1LK2r1y/temple.jpg"
                         alt="Sambuddaraja Viharaya Temple"
                         class="hero-image">
                    <div class="image-decoration">
                        <i class="fas fa-dharmachakra"></i>
                    </div>
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
     MISSION & VISION SECTION
============================ -->
<section class="mission-vision-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Mission Card -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="info-card mission-card">
                    <div class="card-icon-wrapper">
                        <div class="card-icon">
                            <i class="fas fa-hands-praying"></i>
                        </div>
                        <div class="icon-pulse"></div>
                    </div>
                    <h2 class="card-title">Our Mission</h2>
                    <div class="title-underline"></div>
                    <p class="card-description">
                        Sambuddaraja Viharaya is dedicated to promoting the teachings of the Buddha,
                        nurturing compassion, mindfulness, and harmony among devotees. Our temple
                        stands as a beacon of light for spiritual development and community service.
                    </p>
                    <ul class="feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Preserve and teach authentic Buddhist traditions</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Foster spiritual growth through meditation</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Serve the community with compassion</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="info-card vision-card">
                    <div class="card-icon-wrapper">
                        <div class="card-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="icon-pulse"></div>
                    </div>
                    <h2 class="card-title">Our Vision</h2>
                    <div class="title-underline"></div>
                    <p class="card-description">
                        To become a leading spiritual center that bridges ancient Buddhist wisdom with
                        contemporary life, creating a harmonious community where everyone finds peace,
                        purpose, and enlightenment.
                    </p>
                    <ul class="feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Build a global community of mindful practitioners</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Promote interfaith dialogue and understanding</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Create lasting positive social impact</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     HISTORY TIMELINE SECTION
============================ -->
<section class="history-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-history"></i>
                Our Journey
            </span>
            <h2 class="section-title">A Legacy of Devotion</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
            <p class="section-description">
                Decades of serving the community with unwavering commitment to Buddhist values
            </p>
        </div>

        <div class="timeline">
            <!-- Timeline Item 1 -->
            <div class="timeline-item" data-aos="fade-up">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-year">1998</div>
                    <h4 class="timeline-title">Foundation</h4>
                    <p class="timeline-text">
                        Sambuddaraja Viharaya was established by dedicated monks and devotees
                        with a vision to create a spiritual sanctuary for the community.
                    </p>
                </div>
            </div>

            <!-- Timeline Item 2 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-year">2005</div>
                    <h4 class="timeline-title">Temple Expansion</h4>
                    <p class="timeline-text">
                        Major renovation and expansion project completed, adding meditation halls
                        and educational facilities to better serve our growing community.
                    </p>
                </div>
            </div>

            <!-- Timeline Item 3 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-year">2012</div>
                    <h4 class="timeline-title">Community Programs Launch</h4>
                    <p class="timeline-text">
                        Initiated regular Dhamma classes, meditation sessions, and social welfare
                        programs that continue to transform lives today.
                    </p>
                </div>
            </div>

            <!-- Timeline Item 4 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-year">2018</div>
                    <h4 class="timeline-title">International Recognition</h4>
                    <p class="timeline-text">
                        Received recognition from international Buddhist organizations for
                        outstanding contributions to spiritual education and community service.
                    </p>
                </div>
            </div>

            <!-- Timeline Item 5 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-year">2023</div>
                    <h4 class="timeline-title">Digital Transformation</h4>
                    <p class="timeline-text">
                        Launched online platforms to reach global audiences, offering virtual
                        meditation sessions and Dhamma teachings to devotees worldwide.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     CORE VALUES SECTION
============================ -->
<section class="values-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-gem"></i>
                Core Values
            </span>
            <h2 class="section-title">Guiding Principles</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
            <p class="section-description">
                The fundamental values that shape our temple community
            </p>
        </div>

        <div class="row g-4">
            <!-- Value 1 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon devotion-icon">
                            <i class="fas fa-praying-hands"></i>
                        </div>
                    </div>
                    <h3 class="value-title">Devotion</h3>
                    <p class="value-description">
                        Encouraging spiritual practice, daily meditation, and deep connection
                        with Buddhist teachings for inner transformation.
                    </p>
                    <div class="value-decoration"></div>
                </div>
            </div>

            <!-- Value 2 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon education-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                    </div>
                    <h3 class="value-title">Education</h3>
                    <p class="value-description">
                        Teaching Dhamma and Buddhist philosophy to all generations through
                        comprehensive programs and compassionate guidance.
                    </p>
                    <div class="value-decoration"></div>
                </div>
            </div>

            <!-- Value 3 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon service-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                    </div>
                    <h3 class="value-title">Service</h3>
                    <p class="value-description">
                        Supporting the community through kind actions, unity, and selfless
                        dedication to the welfare of all beings.
                    </p>
                    <div class="value-decoration"></div>
                </div>
            </div>

            <!-- Value 4 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon compassion-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <h3 class="value-title">Compassion</h3>
                    <p class="value-description">
                        Cultivating loving-kindness and empathy towards all living beings,
                        embracing everyone with warmth and understanding.
                    </p>
                    <div class="value-decoration"></div>
                </div>
            </div>

            <!-- Value 5 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon mindfulness-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                    </div>
                    <h3 class="value-title">Mindfulness</h3>
                    <p class="value-description">
                        Promoting awareness, presence, and conscious living in every moment
                        through dedicated practice and reflection.
                    </p>
                    <div class="value-decoration"></div>
                </div>
            </div>

            <!-- Value 6 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon harmony-icon">
                            <i class="fas fa-yin-yang"></i>
                        </div>
                    </div>
                    <h3 class="value-title">Harmony</h3>
                    <p class="value-description">
                        Creating peaceful coexistence, unity in diversity, and balance in all
                        aspects of temple life and community relations.
                    </p>
                    <div class="value-decoration"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     CALL TO ACTION SECTION
============================ -->
<section class="cta-section py-5">
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <div class="cta-content">
                    <div class="cta-icon">
                        <i class="fas fa-hands-praying"></i>
                    </div>
                    <h2 class="cta-title">Join Our Spiritual Journey</h2>
                    <p class="cta-description">
                        Experience the transformative power of Buddhist teachings. Join our community
                        for meditation, Dhamma talks, and spiritual growth.
                    </p>
                    {{-- <div class="cta-buttons">
                        {{-- <a href="{{ route('events') }}" class="btn-custom btn-custom-light"> --}}
                            <span class="btn-custom-text">View Events</span>
                            <span class="btn-custom-icon"><i class="fas fa-calendar-alt"></i></span>
                        </a> --}}
                        <a href="{{ route('contact.create') }}" class="btn-custom btn-custom-outline">
                            <span class="btn-custom-text">Contact Us</span>
                            <span class="btn-custom-icon"><i class="fas fa-envelope"></i></span>
                        </a>
                    </div>
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
   ROOT VARIABLES
============================ */
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --gold-gradient: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
    --temple-color: #8b4513;
}

/* ============================
   ABOUT HERO SECTION
============================ */
.about-hero {
    position: relative;
    min-height: 85vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    overflow: hidden;
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

.min-vh-75 {
    min-height: 75vh;
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
    line-height: 1.2;
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
    margin-bottom: 2.5rem;
    max-width: 500px;
}

.hero-stats {
    display: flex;
    align-items: center;
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

.hero-image-wrapper {
    position: relative;
    padding: 2rem;
}

.floating-shape {
    position: absolute;
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
}

.shape-1 {
    width: 200px;
    height: 200px;
    top: -20px;
    right: -20px;
    animation: float 6s ease-in-out infinite;
}

.shape-2 {
    width: 150px;
    height: 150px;
    bottom: -10px;
    left: -10px;
    animation: float 8s ease-in-out infinite reverse;
}

.shape-3 {
    width: 100px;
    height: 100px;
    top: 50%;
    left: 50%;
    animation: float 7s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(10deg); }
}

.hero-image {
    width: 100%;
    height: auto;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    position: relative;
    z-index: 1;
}

.image-decoration {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    width: 80px;
    height: 80px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: #667eea;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    animation: rotate 20s linear infinite;
    z-index: 2;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* ============================
   MISSION & VISION SECTION
============================ */
.mission-vision-section {
    background: #f8f9fa;
    padding: 5rem 0;
}

.info-card {
    padding: 3rem 2.5rem;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    height: 100%;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.info-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: var(--primary-gradient);
}

.info-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
}

.card-icon-wrapper {
    position: relative;
    display: inline-block;
    margin-bottom: 2rem;
}

.card-icon {
    width: 80px;
    height: 80px;
    background: var(--primary-gradient);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    position: relative;
    z-index: 1;
}

.icon-pulse {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
    background: var(--primary-gradient);
    border-radius: 20px;
    opacity: 0.3;
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.3; }
    50% { transform: translate(-50%, -50%) scale(1.2); opacity: 0; }
}

.card-title {
    font-size: 2rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 1rem;
}

.title-underline {
    width: 60px;
    height: 4px;
    background: var(--primary-gradient);
    border-radius: 2px;
    margin-bottom: 1.5rem;
}

.card-description {
    color: #636e72;
    line-height: 1.8;
    margin-bottom: 2rem;
}

.feature-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.feature-list li {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1rem;
    color: #2d3436;
}

.feature-list i {
    color: #667eea;
    font-size: 1.25rem;
    margin-top: 0.25rem;
    flex-shrink: 0;
}

/* ============================
   HISTORY TIMELINE
============================ */
.history-section {
    padding: 5rem 0;
}

.timeline {
    position: relative;
    max-width: 900px;
    margin: 0 auto;
    padding: 2rem 0;
}

.timeline::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 3px;
    height: 100%;
    background: var(--primary-gradient);
}

.timeline-item {
    position: relative;
    padding: 2rem 0;
}

.timeline-item:nth-child(odd) .timeline-content {
    margin-left: 0;
    margin-right: auto;
    text-align: right;
    padding-right: 3rem;
}

.timeline-item:nth-child(even) .timeline-content {
    margin-left: auto;
    margin-right: 0;
    padding-left: 3rem;
}

.timeline-content {
    position: relative;
    width: calc(50% - 30px);
    padding: 2rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.4s;
}

.timeline-content:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
}

.timeline-dot {
    position: absolute;
    top: 2.5rem;
    left: 50%;
    transform: translateX(-50%);
    width: 20px;
    height: 20px;
    background: white;
    border: 4px solid #667eea;
    border-radius: 50%;
    z-index: 1;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.2);
}

.timeline-year {
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background: var(--primary-gradient);
    color: white;
    font-weight: 700;
    border-radius: 50px;
    margin-bottom: 1rem;
}

.timeline-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 1rem;
}

.timeline-text {
    color: #636e72;
    line-height: 1.8;
    margin: 0;
}

/* ============================
   CORE VALUES SECTION
============================ */
.values-section {
    background: #f8f9fa;
    padding: 5rem 0;
}

.value-card {
    padding: 3rem 2rem;
    background: white;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    text-align: center;
    height: 100%;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.value-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
}

.value-icon-wrapper {
    margin-bottom: 2rem;
}

.value-icon {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: white;
    position: relative;
}

.devotion-icon { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.education-icon { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
.service-icon { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
.compassion-icon { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
.mindfulness-icon { background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); }
.harmony-icon { background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); }

.value-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 1rem;
}

.value-description {
    color: #636e72;
    line-height: 1.8;
    margin: 0;
}

.value-decoration {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--primary-gradient);
    transform: scaleX(0);
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.value-card:hover .value-decoration {
    transform: scaleX(1);
}

/* ============================
   CTA SECTION
============================ */
.cta-section {
    position: relative;
    padding: 6rem 0;
    background: var(--primary-gradient);
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

.cta-title {
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: 800;
    color: white;
    margin-bottom: 1.5rem;
}

.cta-description {
    font-size: 1.125rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    margin-bottom: 2.5rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-buttons {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-custom-light {
    background: white;
    color: #667eea;
}

.btn-custom-outline {
    background: transparent;
    border: 2px solid white;
    color: white;
}

.btn-custom-outline:hover {
    background: white;
    color: #667eea;
}

/* ============================
   SECTION HEADER COMMON
============================ */
.section-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1.5rem;
    background: var(--primary-gradient);
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
    background: var(--primary-gradient);
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
   RESPONSIVE
============================ */
@media (max-width: 991px) {
    .timeline::before {
        left: 20px;
    }

    .timeline-item:nth-child(odd) .timeline-content,
    .timeline-item:nth-child(even) .timeline-content {
        width: calc(100% - 80px);
        margin-left: 80px;
        text-align: left;
        padding-left: 2rem;
        padding-right: 0;
    }

    .timeline-dot {
        left: 20px;
    }

    .hero-stats {
        gap: 1rem;
    }

    .stat-divider {
        display: none;
    }
}

@media (max-width: 768px) {
    .about-hero {
        min-height: auto;
        padding: 4rem 0;
    }

    .hero-image-wrapper {
        margin-top: 3rem;
    }

    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }

    .cta-buttons .btn-custom {
        width: 100%;
        max-width: 300px;
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

    // Animate hero stats numbers
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
                    stat.textContent = Math.ceil(current).toLocaleString();
                    requestAnimationFrame(updateNumber);
                } else {
                    stat.textContent = target.toLocaleString() + '+';
                }
            };

            updateNumber();
        });
    };

    // Trigger animation on scroll
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

    // Scroll indicator
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', () => {
            const missionSection = document.querySelector('.mission-vision-section');
            if (missionSection) {
                missionSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
});
</script>
@endpush

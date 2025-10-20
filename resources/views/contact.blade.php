@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- ============================
     CONTACT HERO SECTION
============================ -->
<section class="contact-hero">
    <div class="hero-overlay"></div>
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
                        <i class="fas fa-paper-plane"></i>
                        Get in Touch
                    </span>
                    <h1 class="hero-title">
                        Contact <span class="gradient-text">Us</span>
                    </h1>
                    <p class="hero-subtitle">
                        We'd love to hear from you. Whether you have questions about our services,
                        events, or just want to connect, we're here to help.
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
     CONTACT INFO CARDS
============================ -->
<section class="contact-info-section">
    <div class="container">
        <div class="row g-4">
            <!-- Phone Card -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="info-card">
                    <div class="info-icon phone-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h4 class="info-title">Call Us</h4>
                    <p class="info-text">
                        <a href="tel:+1234567890">+1 (234) 567-890</a>
                    </p>
                    <p class="info-text">
                        <a href="tel:+1234567891">+1 (234) 567-891</a>
                    </p>
                    <span class="info-label">Mon-Sun: 6AM - 8PM</span>
                </div>
            </div>

            <!-- Email Card -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="info-card">
                    <div class="info-icon email-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4 class="info-title">Email Us</h4>
                    <p class="info-text">
                        <a href="mailto:info@sambuddaraja.org">info@sambuddaraja.org</a>
                    </p>
                    <p class="info-text">
                        <a href="mailto:contact@sambuddaraja.org">contact@sambuddaraja.org</a>
                    </p>
                    <span class="info-label">We reply within 24hrs</span>
                </div>
            </div>

            <!-- Location Card -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="info-card">
                    <div class="info-icon location-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4 class="info-title">Visit Us</h4>
                    <p class="info-text">
                        123 Temple Street<br>
                        Sacred City, SC 12345<br>
                        United States
                    </p>
                    <span class="info-label">Come visit anytime</span>
                </div>
            </div>

            <!-- Social Card -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="info-card">
                    <div class="info-icon social-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h4 class="info-title">Follow Us</h4>
                    <div class="social-links">
                        <a href="#" class="social-link facebook" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link twitter" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link instagram" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link youtube" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                    <span class="info-label">Stay connected</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     CONTACT FORM & MAP SECTION
============================ -->
<section class="contact-form-section py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-7" data-aos="fade-right">
                <div class="form-wrapper">
                    <div class="section-header mb-4">
                        <span class="section-badge">
                            <i class="fas fa-edit"></i>
                            Send Message
                        </span>
                        <h2 class="section-title">Get In Touch</h2>
                        <div class="title-decorator">
                            <span class="decorator-line"></span>
                            <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                            <span class="decorator-line"></span>
                        </div>
                        <p class="section-description">
                            Fill out the form below and we'll get back to you as soon as possible.
                        </p>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success alert-custom" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger alert-custom" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            Please correct the errors below.
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form" id="contactForm">
                        @csrf

                        <div class="row g-4">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">
                                        <i class="fas fa-user"></i>
                                        Full Name <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           id="name"
                                           name="name"
                                           value="{{ old('name') }}"
                                           placeholder="Enter your full name"
                                           required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">
                                        <i class="fas fa-envelope"></i>
                                        Email Address <span class="text-danger">*</span>
                                    </label>
                                    <input type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           id="email"
                                           name="email"
                                           value="{{ old('email') }}"
                                           placeholder="your.email@example.com"
                                           required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label">
                                        <i class="fas fa-phone"></i>
                                        Phone Number
                                    </label>
                                    <input type="tel"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           id="phone"
                                           name="phone"
                                           value="{{ old('phone') }}"
                                           placeholder="+1 (234) 567-890">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Subject -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject" class="form-label">
                                        <i class="fas fa-tag"></i>
                                        Subject <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control @error('subject') is-invalid @enderror"
                                            id="subject"
                                            name="subject"
                                            required>
                                        <option value="">Select a subject</option>
                                        <option value="general" {{ old('subject') == 'general' ? 'selected' : '' }}>General Inquiry</option>
                                        <option value="meditation" {{ old('subject') == 'meditation' ? 'selected' : '' }}>Meditation Classes</option>
                                        <option value="events" {{ old('subject') == 'events' ? 'selected' : '' }}>Events & Programs</option>
                                        <option value="donation" {{ old('subject') == 'donation' ? 'selected' : '' }}>Donation</option>
                                        <option value="volunteer" {{ old('subject') == 'volunteer' ? 'selected' : '' }}>Volunteer</option>
                                        <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message" class="form-label">
                                        <i class="fas fa-comment-dots"></i>
                                        Your Message <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control @error('message') is-invalid @enderror"
                                              id="message"
                                              name="message"
                                              rows="6"
                                              placeholder="Tell us how we can help you..."
                                              required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="char-counter">
                                        <span id="charCount">0</span> / 1000 characters
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="btn-submit">
                                    <span class="btn-text">Send Message</span>
                                    <span class="btn-icon">
                                        <i class="fas fa-paper-plane"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Map & Additional Info -->
            <div class="col-lg-5" data-aos="fade-left">
                <div class="map-wrapper">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.2412648750455!2d-73.98731668459395!3d40.74844097932847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1635180909134!5m2!1sen!2sus"
                                width="100%"
                                height="400"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- Opening Hours -->
                <div class="hours-card mt-4">
                    <h4 class="hours-title">
                        <i class="fas fa-clock"></i>
                        Opening Hours
                    </h4>
                    <ul class="hours-list">
                        <li>
                            <span class="day">Monday - Friday</span>
                            <span class="time">6:00 AM - 8:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Saturday - Sunday</span>
                            <span class="time">5:00 AM - 9:00 PM</span>
                        </li>
                        <li class="highlight">
                            <span class="day">Special Events</span>
                            <span class="time">Check Calendar</span>
                        </li>
                    </ul>
                </div>

                <!-- Quick Actions -->
                <div class="quick-actions mt-4">
                    <h4 class="actions-title">Quick Actions</h4>
                    <div class="action-buttons">
                        {{-- <a href="{{ route('events') }}" class="action-btn">
                            <i class="fas fa-calendar-alt"></i>
                            <span>View Events</span>
                        </a> --}}
                        {{-- <a href="{{ route('donate') }}" class="action-btn">
                            <i class="fas fa-hand-holding-heart"></i>
                            <span>Make Donation</span>
                        </a> --}}
                        {{-- <a href="{{ route('volunteer') }}" class="action-btn">
                            <i class="fas fa-hands-helping"></i>
                            <span>Volunteer</span>
                        </a> --}}
                        <a href="{{ route('gallery.index') }}" class="action-btn">
                            <i class="fas fa-images"></i>
                            <span>View Gallery</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     FAQ SECTION
============================ -->
<section class="faq-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">
                <i class="fas fa-question-circle"></i>
                FAQ
            </span>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="title-decorator">
                <span class="decorator-line"></span>
                <span class="decorator-icon"><i class="fas fa-lotus"></i></span>
                <span class="decorator-line"></span>
            </div>
            <p class="section-description">
                Find answers to common questions about our temple and services
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion custom-accordion" id="faqAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="0">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                <i class="fas fa-clock me-3"></i>
                                What are your temple visiting hours?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our temple is open Monday to Friday from 6:00 AM to 8:00 PM, and Saturday to Sunday from 5:00 AM to 9:00 PM. Special events may have different timings. Please check our events calendar for specific program schedules.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                <i class="fas fa-pray me-3"></i>
                                Do I need to register for meditation classes?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                While drop-ins are welcome for general meditation sessions, we recommend registering for structured courses and special programs. This helps us prepare materials and ensure adequate space for all participants.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                <i class="fas fa-hand-holding-usd me-3"></i>
                                How can I make a donation?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can make donations online through our secure donation page, in person at the temple, or by mail. We accept various payment methods including credit cards, bank transfers, and checks. All donations are tax-deductible.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                <i class="fas fa-parking me-3"></i>
                                Is parking available at the temple?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we have a dedicated parking lot with space for 50+ vehicles. During major events, additional parking is available at the nearby community center. Street parking is also available on a first-come, first-served basis.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                <i class="fas fa-users me-3"></i>
                                Can I volunteer at the temple?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely! We welcome volunteers of all ages and backgrounds. Opportunities include event assistance, teaching, maintenance, and community outreach. Please visit our volunteer page or contact us directly to learn more about current opportunities.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================
     CTA SECTION
============================ -->
<section class="cta-section py-5">
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
                <div class="cta-content">
                    <div class="cta-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <h2 class="cta-title">Need Immediate Assistance?</h2>
                    <p class="cta-description">
                        Our team is available to help you with any urgent inquiries or spiritual guidance.
                    </p>
                    <div class="cta-phone">
                        <a href="tel:+1234567890" class="phone-link">
                            <i class="fas fa-phone-alt"></i>
                            +1 (234) 567-890
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
   CONTACT HERO SECTION
============================ */
.contact-hero {
    position: relative;
    min-height: 60vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    overflow: hidden;
    padding: 6rem 0;
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
    max-width: 600px;
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
   CONTACT INFO CARDS
============================ */
.contact-info-section {
    margin-top: -80px;
    position: relative;
    z-index: 10;
    padding: 0 15px;
    margin-bottom: 5rem;
}

.info-card {
    background: white;
    padding: 2.5rem 2rem;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    text-align: center;
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
    height: 4px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.info-card:hover::before {
    transform: scaleX(1);
}

.info-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.info-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 1.5rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    position: relative;
}

.phone-icon { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.email-icon { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
.location-icon { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
.social-icon { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }

.info-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 1rem;
}

.info-text {
    color: #636e72;
    margin-bottom: 0.5rem;
    line-height: 1.6;
}

.info-text a {
    color: #667eea;
    text-decoration: none;
    transition: color 0.3s;
}

.info-text a:hover {
    color: #764ba2;
}

.info-label {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: rgba(102, 126, 234, 0.1);
    color: #667eea;
    font-size: 0.875rem;
    font-weight: 600;
    border-radius: 50px;
    margin-top: 1rem;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin: 1rem 0;
}

.social-link {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s;
}

.social-link.facebook { background: #3b5998; }
.social-link.twitter { background: #1da1f2; }
.social-link.instagram { background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); }
.social-link.youtube { background: #ff0000; }

.social-link:hover {
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

/* ============================
   CONTACT FORM SECTION
============================ */
.contact-form-section {
    padding: 3rem 0;
}

.form-wrapper {
    background: white;
    padding: 3rem;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.form-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    color: #2d3436;
    margin-bottom: 0.75rem;
}

.form-label i {
    color: #667eea;
}

.form-control {
    padding: 0.875rem 1.25rem;
    border: 2px solid #e1e8ed;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s;
}

.form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}

.form-control.is-invalid {
    border-color: #f5576c;
}

.invalid-feedback {
    display: block;
    margin-top: 0.5rem;
    font-size: 0.875rem;
}

.char-counter {
    text-align: right;
    font-size: 0.875rem;
    color: #636e72;
    margin-top: 0.5rem;
}

.alert-custom {
    border: none;
    border-radius: 12px;
    padding: 1rem 1.5rem;
    margin-bottom: 2rem;
    display: flex;
    align-items: center;
}

.alert-success {
    background: rgba(76, 209, 55, 0.1);
    color: #27ae60;
}

.alert-danger {
    background: rgba(245, 87, 108, 0.1);
    color: #c0392b;
}

.btn-submit {
    width: 100%;
    padding: 1rem 2rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 12px;
    font-size: 1.125rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    cursor: pointer;
    transition: all 0.4s;
    position: relative;
    overflow: hidden;
}

.btn-submit::before {
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

.btn-submit:hover::before {
    width: 400px;
    height: 400px;
}

.btn-submit:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
}

.btn-icon {
    transition: transform 0.3s;
}

.btn-submit:hover .btn-icon {
    transform: translateX(5px);
}

/* ============================
   MAP & ADDITIONAL INFO
============================ */
.map-wrapper {
    background: white;
    padding: 1rem;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.map-container {
    border-radius: 15px;
    overflow: hidden;
}

.map-container iframe {
    filter: grayscale(0.3);
    transition: filter 0.3s;
}

.map-container:hover iframe {
    filter: grayscale(0);
}

.hours-card {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.hours-title {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 1.5rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 1.5rem;
}

.hours-title i {
    color: #667eea;
}

.hours-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.hours-list li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 0;
    border-bottom: 1px solid #e1e8ed;
}

.hours-list li:last-child {
    border-bottom: none;
}

.hours-list li.highlight {
    background: rgba(102, 126, 234, 0.1);
    padding: 1rem;
    border-radius: 10px;
    border-bottom: none;
    margin-top: 0.5rem;
}

.day {
    font-weight: 600;
    color: #2d3436;
}

.time {
    color: #667eea;
    font-weight: 600;
}

.quick-actions {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.actions-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 1.5rem;
}

.action-buttons {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.action-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    padding: 1.5rem 1rem;
    background: rgba(102, 126, 234, 0.05);
    border: 2px solid transparent;
    border-radius: 12px;
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
    text-align: center;
    transition: all 0.3s;
}

.action-btn i {
    font-size: 1.5rem;
}

.action-btn:hover {
    background: rgba(102, 126, 234, 0.1);
    border-color: #667eea;
    transform: translateY(-5px);
}

/* ============================
   FAQ SECTION
============================ */
.faq-section {
    background: #f8f9fa;
    padding: 5rem 0;
}

.custom-accordion .accordion-item {
    background: white;
    border: none;
    border-radius: 15px;
    margin-bottom: 1rem;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    overflow: hidden;
}

.custom-accordion .accordion-button {
    padding: 1.5rem 2rem;
    font-size: 1.125rem;
    font-weight: 600;
    color: #2d3436;
    background: white;
    border: none;
    box-shadow: none;
    transition: all 0.3s;
}

.custom-accordion .accordion-button:not(.collapsed) {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.custom-accordion .accordion-button:not(.collapsed) i {
    color: white;
}

.custom-accordion .accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23667eea'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.custom-accordion .accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.custom-accordion .accordion-body {
    padding: 1.5rem 2rem 2rem 4rem;
    color: #636e72;
    line-height: 1.8;
}

/* ============================
   CTA SECTION
============================ */
.cta-section {
    position: relative;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 5rem 0;
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
    animation: pulse 2s infinite;
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
    margin-bottom: 2rem;
}

.cta-phone .phone-link {
    display: inline-flex;
    align-items: center;
    gap: 1rem;
    padding: 1.25rem 3rem;
    background: white;
    color: #667eea;
    font-size: 1.5rem;
    font-weight: 700;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.4s;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.cta-phone .phone-link:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

/* ============================
   SECTION HEADER COMMON
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
   RESPONSIVE
============================ */
@media (max-width: 991px) {
    .contact-info-section {
        margin-top: -60px;
        margin-bottom: 3rem;
    }

    .form-wrapper,
    .map-wrapper,
    .hours-card,
    .quick-actions {
        margin-bottom: 2rem;
    }

    .action-buttons {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .contact-hero {
        min-height: 50vh;
        padding: 4rem 0;
    }

    .scroll-indicator {
        display: none;
    }

    .form-wrapper {
        padding: 2rem 1.5rem;
    }

    .custom-accordion .accordion-button {
        font-size: 1rem;
        padding: 1.25rem 1.5rem;
    }

    .custom-accordion .accordion-body {
        padding: 1rem 1.5rem 1.5rem 3rem;
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

    // Character counter for message field
    const messageField = document.getElementById('message');
    const charCount = document.getElementById('charCount');

    if (messageField && charCount) {
        messageField.addEventListener('input', function() {
            const length = this.value.length;
            charCount.textContent = length;

            if (length > 1000) {
                charCount.style.color = '#f5576c';
            } else if (length > 900) {
                charCount.style.color = '#f39c12';
            } else {
                charCount.style.color = '#636e72';
            }
        });

        // Trigger on load if there's old value
        if (messageField.value) {
            charCount.textContent = messageField.value.length;
        }
    }

    // Form validation enhancement
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('.btn-submit');
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
            submitBtn.disabled = true;
        });
    }

    // Scroll indicator
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', function() {
            const contactInfoSection = document.querySelector('.contact-info-section');
            if (contactInfoSection) {
                contactInfoSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    // Smooth scroll for all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#!') {
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

    // Auto-hide success message
    const successAlert = document.querySelector('.alert-success');
    if (successAlert) {
        setTimeout(function() {
            successAlert.style.transition = 'opacity 0.5s';
            successAlert.style.opacity = '0';
            setTimeout(function() {
                successAlert.remove();
            }, 500);
        }, 5000);
    }

    console.log('✨ Contact Page Loaded Successfully!');
});
</script>
@endpush

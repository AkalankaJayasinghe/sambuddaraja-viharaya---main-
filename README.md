# Sambuddaraja Viharaya - Temple Website

A modern, responsive website for Sambuddaraja Viharaya built with Laravel 10.

## Features

- **Home Page**: Welcome section with featured news and photo gallery
- **About Page**: Information about the temple and its mission
- **News System**: Latest news and announcements with admin management
- **Photo Gallery**: Image gallery with admin upload capabilities
- **Contact Form**: Visitor contact form with email notifications
- **Volunteer Page**: Information about volunteer opportunities
- **Admin Panel**: Content management system for news and gallery

## Tech Stack

- **Framework**: Laravel 10.49.1
- **PHP**: 8.1+
- **Database**: MySQL
- **Frontend**: Bootstrap 5, AOS (Animate on Scroll)
- **Authentication**: Laravel Sanctum

## Installation

1. Clone the repository:
```bash
git clone https://github.com/AkalankaJayasinghe/sambuddaraja-viharaya---main-.git
cd sambuddaraja-viharaya---main-
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Set up environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database in `.env` file and run migrations:
```bash
php artisan migrate
```

5. Create storage link and start the server:
```bash
php artisan storage:link
php artisan serve
```

## Models & Features

- **News**: Title, content, image, category, featured status, view count
- **Gallery**: Title, image upload
- **Contact**: Name, email, phone, subject, message
- **User**: Authentication for admin access

## Routes

- `/` - Home page
- `/about` - About page
- `/news` - News listing
- `/news/{id}` - Individual news article
- `/gallery` - Photo gallery
- `/contact` - Contact form
- `/volunteer` - Volunteer information
- `/admin/*` - Admin panel (requires authentication)

## License

Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

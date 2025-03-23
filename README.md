# GardenGlow - Flower Shop Application

GardenGlow is a sophisticated full-stack flower shop application designed to provide a seamless shopping experience for customers while offering comprehensive management capabilities for administrators. This dual-focused platform bridges the gap between customer satisfaction and business operations by integrating powerful features on both ends.
The application enables customers to explore a diverse catalog of floral arrangements, complete purchases with ease, and share their experiences through testimonials. On the administrative side, GardenGlow provides a robust dashboard with real-time analytics, comprehensive inventory management, order processing, employee management, and content moderation capabilities.
Built with modern technologies and following best practices in web development, GardenGlow represents a complete solution for flower shop businesses seeking to establish or enhance their online presence.

## Features

### For Customers
* Browse a wide variety of flowers and arrangements
* Contact on whatsapp for the desired flower
* Submit testimonials to share their experiences
* Responsive and user-friendly interface for seamless browsing

### For Admins
* **Dashboard**: A centralized interface to manage the website
  * Manage employees (add, edit, or remove)
  * Manage flowers (add, update, or delete products)
  * View and process customer orders
  * Moderate customer testimonials (approve or delete)
* **Data Visualization**: Interactive charts to visualize flower categories
* **Admin Authentication**: Secure login system to access the dashboard

## Technologies Used

### Frontend
* **HTML5**, **CSS3**, **JavaScript** for the core structure and design
* **Bootstrap** for responsive and modern UI
* **Chart.js** for data visualization in the admin dashboard

### Backend
* **Laravel** (PHP framework) for backend logic
* **MySQL** for database management
* **Laravel Breeze** for secure admin authentication

### Other Tools
* **Git** for version control

## Installation

### Prerequisites
* PHP (>= 8.0)
* Composer
* MySQL
* Node.js (for frontend dependencies)

### Steps

1. Clone the repository:
```bash
git clone https://github.com/BoutainaBoudiouane/Flowers_shop.git
cd Flowers_shop
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install frontend dependencies:
```bash
npm install
```

4. Set up the `.env` file:
   * Copy `.env.example` to `.env`
   * Update database credentials and other environment variables

5. Generate the application key:
```bash
php artisan key:generate
```

6. Run migrations and seed the database:
```bash
php artisan migrate --seed
```

7. Compile frontend assets:
```bash
npm run dev
```

8. Start the development server:
```bash
php artisan serve
```

9. Access the application at `http://localhost:8000`

## Contact

Email : boutainaboudiouane@gmail.com

Github : https://github.com/BoutainaBoudiouane

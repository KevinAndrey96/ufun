# Turnkey WordPress & WooCommerce Tech Store Template (wordpress-tech-store)

[![WordPress](https://img.shields.io/badge/WordPress-6.x%20%7C%205.x-21759B?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org)
[![WooCommerce](https://img.shields.io/badge/WooCommerce-Ready-96588A?style=for-the-badge&logo=woocommerce&logoColor=white)](https://woocommerce.com)
[![PHP](https://img.shields.io/badge/PHP-8.1%20%7C%208.2-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![MariaDB](https://img.shields.io/badge/MariaDB-10.11-003545?style=for-the-badge&logo=mariadb&logoColor=white)](https://mariadb.org)
[![Docker](https://img.shields.io/badge/Docker-Compose-2496ED?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com)
[![Betheme](https://img.shields.io/badge/Theme-Betheme%20Premium-FF6C37?style=for-the-badge)](https://muffingroup.com/betheme/)

A complete, production-grade turnkey e-commerce store template powered by **WordPress**, **WooCommerce**, and the versatile **Betheme** engine. Engineered for immediate local containerized deployment via Docker Compose or single-step migration to cPanel / VPS hosting.

---

## 🌟 Key Highlights & Template Architecture

- **Full WooCommerce Engine**: Ready-to-use product catalog, shopping cart, customer checkout, category navigation, inventory tracking, and transactional order emails.
- **Betheme Engine Integration**: Pre-configured with Betheme core layouts, dynamic responsive grid, modern typography, customizable headers, and mobile navigation.
- **Visual Hero Sliders**: Powered by Slider Revolution with layered responsive banners and promotional calls to action.
- **Form Automation**: Contact Form 7 integrated for customer inquiries, support requests, and quotation flows.
- **Environment-Aware Configuration**: Dynamic `wp-config.php` that respects containerized environment variables while gracefully falling back to local database settings.
- **Turnkey Database Seed**: Complete relational database dump (`ufun.sql`) with pre-populated shop options, catalog taxonomies, layouts, and page structures.

---

## 🏗️ System Architecture & Stack

```
+-------------------------------------------------------------+
|                     Client Browser                          |
+-------------------------------------------------------------+
                              | HTTP (Port 8080)
                              v
+-------------------------------------------------------------+
|              WordPress App Container (PHP 8.2)              |
|  - Core WordPress & WooCommerce Routing                     |
|  - Betheme Template Engine & Customizer Assets              |
|  - Plugins: WooCommerce, Slider Revolution, Contact Form 7  |
+-------------------------------------------------------------+
                              | TCP / MySQL protocol
                              v
+-------------------------------------------------------------+
|              Database Service (MariaDB 10.11)               |
|  - Schema: ufun (Tables: wp_posts, wp_postmeta, wp_options) |
|  - Auto-initialization from ufun.sql on first boot          |
+-------------------------------------------------------------+
                              |
                              v
+-------------------------------------------------------------+
|              phpMyAdmin Service (Port 8081)                 |
|  - Web UI for direct inspection of catalog and tables       |
+-------------------------------------------------------------+
```

---

## 🚀 Quick Start with Docker Compose

Get the entire e-commerce store running locally with zero pre-installed PHP or MySQL runtime dependencies:

### 1. Clone the Repository
```bash
git clone git@github.com-personal:KevinAndrey96/ufun.git
cd ufun
```

### 2. Launch the Stack
```bash
docker compose up -d
```

Docker will:
1. Initialize the MariaDB database service.
2. Automatically import `ufun.sql` on initial creation.
3. Boot the WordPress container on port `8080`.
4. Spin up phpMyAdmin on port `8081`.

### 3. Access the Applications
- **Storefront**: [http://localhost:8080](http://localhost:8080)
- **WordPress Admin**: [http://localhost:8080/wp-admin](http://localhost:8080/wp-admin) (User: `admin`, Password: `admin123`)
- **phpMyAdmin**: [http://localhost:8081](http://localhost:8081) (Server: `db`, User: `ufun_user`, Password: `ufun_password`)

---

## 💻 Manual Deployment (LAMP / cPanel / Shared Hosting)

To deploy to traditional hosting or a VPS without Docker:

1. Upload all repository files to your web root (`public_html/` or `/var/www/html/`).
2. Create a MySQL/MariaDB database in your hosting control panel.
3. Import the included database backup `ufun.sql`.
4. Update database credentials in `wp-config.php` or provide environment variables:
   ```php
   define( 'DB_NAME', 'your_database_name' );
   define( 'DB_USER', 'your_database_user' );
   define( 'DB_PASSWORD', 'your_database_password' );
   define( 'DB_HOST', 'localhost' );
   ```
5. Update your domain URL using WP-CLI or SQL if migrating from localhost:
   ```sql
   UPDATE wp_options SET option_value = 'https://yourdomain.com' WHERE option_name IN ('siteurl', 'home');
   ```

---

## 📦 Installed Plugins & Components

| Plugin | Purpose | Status |
| :--- | :--- | :---: |
| **WooCommerce** | E-commerce catalog, shopping cart, checkout, payments | Active |
| **Slider Revolution** | Responsive animated hero banners | Active |
| **Contact Form 7** | Interactive contact, support, and feedback forms | Active |
| **Duplicate Post** | One-click duplication for products and promotional pages | Active |
| **Akismet Anti-Spam** | Protection against automated comment and form spam | Active |

---

## 🛡️ License & Attributions

- WordPress core is licensed under the **GNU General Public License v2 or later**.
- WooCommerce is licensed under the **GNU General Public License v3**.
- Custom layout modifications, configuration scripts, and template structuring are maintained for developer portfolio demonstration and deployment template usage.

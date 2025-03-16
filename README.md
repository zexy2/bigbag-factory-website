# Industrial Bags and Packaging E-Commerce Project

Modern, responsive, and multilingual e-commerce website project for industrial bags and packaging solutions.

## 🚀 Features

### 📦 Product Management
- Detailed product catalog and filtering system
- Product variations (size, color, material)
- Stock tracking and management
- Bulk product management

### 🌐 User Interface
- Modern and responsive design
- Mobile-first approach
- Multi-language support (TR/EN)
- Fast page loading
- WhatsApp integration

### 🚛 Shipping and Logistics
- Shipment tracking system
- Delivery status updates
- Logistics reporting
- Cargo integration

### 🔒 Security
- GDPR compliant
- SSL/TLS encryption
- Secure form processing
- Cookie policy management

## 💻 Technical Requirements

### Server Requirements
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache 2.4 or higher
  - mod_rewrite
  - mod_expires
  - mod_deflate

### Browser Support
- Chrome (last 2 versions)
- Firefox (last 2 versions)
- Safari (last 2 versions)
- Edge (last 2 versions)

## 🛠 Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/username/repo-name.git
   ```

2. Configure the necessary files:
   ```bash
   cp config.php.example config.php
   ```

3. Edit config.php:
   - Database connection details
   - Site URL and name
   - Email settings
   - WhatsApp number
   - API keys

4. Check language files:
   - lang/tr.php
   - lang/en.php

5. Configure .htaccess according to your server

## 📁 Project Structure

```
root/
├── assets/                 # Static files
│   ├── css/               # CSS files
│   ├── js/                # JavaScript files
│   ├── images/            # Image files
│   └── videos/            # Video files
├── includes/              # PHP include files
├── lang/                  # Language files
├── scripts/              # Script files
└── [other files]
```

See `project-structure` file for detailed file structure.

## 🔧 Development

### Style Files
- `assets/css/style.css` - Main style file
- Using Bootstrap 5.3.0 framework
- Theme management with CSS variables

### JavaScript
- `assets/js/main.js` - Main JavaScript file
- ES6+ syntax
- Modular structure

### PHP
- PSR-4 standards
- Object-oriented approach
- MVC-like structure

## 🌍 Multi-language Support

Language files are located in the `lang/` directory:
- `tr.php` - Turkish translations
- `en.php` - English translations

To add a new language:
1. Create a new language file
2. Translate language variables
3. Add to language options

## 📱 Mobile Compatibility

- Responsive design
- Mobile-first approach
- Touch-friendly interface
- Optimized images

## 🔐 Security Measures

- Input validation
- XSS protection
- CSRF token usage
- SQL injection protection
- Secure file upload

## 🚀 Performance

- Image optimization
- Browser caching
- Gzip compression
- CSS/JS minification
- Lazy loading

## 👥 Contributing

1. Fork it
2. Create your feature branch (`git checkout -b feature/NewFeature`)
3. Commit your changes (`git commit -am 'Add new feature: X'`)
4. Push to the branch (`git push origin feature/NewFeature`)
5. Create a Pull Request

## 📄 License

This project is licensed under the MIT License. See the `LICENSE` file for details. 
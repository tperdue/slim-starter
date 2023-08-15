# Slim 4 PHP Skeleton Project

This project provides a minimal skeleton folder structure for a Slim 4 PHP application. It's designed to be straightforward, easily understandable, and extendable. While it can serve as a foundation for others, its primary aim is to offer a consistent structure for personal projects.

## Requirements

- PHP version 8 or greater
- NPM/Node for frontend assets compilation and script running

## Project Structure

```
.
├── README.md                 # This documentation file
├── app                       # Application-specific logic
│   └── Controllers           # Controller classes
│       ├── BaseController.php
│       └── PageController.php
├── bootstrap                 # Bootstrapping the application
│   ├── app.php               # Main application bootstrap
│   └── container.php         # Dependency Injection Container setup
├── composer.json             # Composer dependencies file
├── composer.lock             # Locked versions of dependencies
├── package.json              # NPM packages file
├── project_structure.txt     # File outlining the project structure (meta)
├── public                    # Publicly accessible files
│   └── index.php             # Entry point
├── routes                    # Route definitions
│   ├── api                   # API-specific routes
│   │   └── adminApiRoutes.php
│   └── web                   # Web routes
│       └── pageRoutes.php
└── views                     # Template files
    └── home.twig
```

## Installation

1. Clone this repository:
    ```bash
    git clone [repository-url] your-project-name
    ```

2. Navigate to the project directory:
    ```bash
    cd your-project-name
    ```

3. Install PHP dependencies via Composer:
    ```bash
    composer install
    ```

4. Install frontend dependencies via NPM:
    ```bash
    npm install
    ```

## Usage

Run your application using your preferred PHP server setup. For local development, PHP's built-in server might suffice:

```bash
php -S localhost:8080 -t public/
```

Access the application in your browser at `http://localhost:8080`.


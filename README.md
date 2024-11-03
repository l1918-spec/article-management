# article-management-
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Simple Article Management Application

## Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Overview
The Simple Article Management Application is a Laravel-based project that provides a straightforward interface for managing articles. Users can view, create, edit, and delete articles easily.

## Features
- **Homepage:** Displays a list of articles.
- **Add Article Page:** Allows users to create new articles.
- **Edit Article Page:** Users can modify existing articles.
- **Delete Article Functionality:** Users can remove articles.
- **Middleware:**
  - Verifies if a user is authenticated before accessing certain routes.
  - Redirects unauthenticated users to the login page (though login functionality is not included).

## Technologies Used
- **Framework:** Laravel
- **Database:** MySQL
- **ORM:** Eloquent ORM for database interactions

## Database Configuration
- The application uses a MySQL database with a table named `articles` that includes the following columns:
  - `id`: Primary key
  - `title`: Article title
  - `content`: Article content
  - `created_at`: Timestamp for when the article was created
  - `updated_at`: Timestamp for when the article was last updated

## Installation
To set up the Simple Article Management Application locally, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/l1918-spec/article-management.git
   cd article-management
   
lydiacharif02@gmail.com



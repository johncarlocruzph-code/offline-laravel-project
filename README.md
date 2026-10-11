# Offline Lost and Found

A lightweight Laravel web application for managing lost and found items in a local, offline-friendly environment. The app allows users to report missing or found items, browse them by status, update their state, and remove outdated records.

It is built as a simple CRUD system using Laravel 13, SQLite, Blade templates, and a custom front-end layout.

## Overview

This project is designed for small communities, offices, schools, or local organizations that need a simple lost-and-found list without depending on an external database or cloud service.

Users can:

- add new lost or found items
- view every item in a central list
- filter items by status
- update an item from lost to found to claimed
- delete records when they are no longer needed

## Features

- Local-first data storage using SQLite
- Status tracking for:
  - lost
  - found
  - claimed
- Dashboard-style homepage with summary counters
- Filtered item views by item state
- Responsive UI built with Blade templates and custom CSS
- CRUD routes for creating, viewing, editing, and deleting items

## Tech Stack

- PHP 8.3
- Laravel 13
- SQLite database
- Blade templating
- Vite + Node.js for front-end asset building

## Project Structure

```text
.
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ItemController.php
│   ├── Models/
│   │   └── Item.php
│   └── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── database.sqlite
│   ├── migrations/
│   │   └── 2026_10_05_033833_create_items_table.php
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── items/
│       ├── layouts/
│       └── partials/
├── routes/
│   └── web.php
├── tests/
├── .env.example
├── composer.json
├── package.json
├── vite.config.js
├── artisan
├── phpunit.xml
└── README.md
```

## Application Flow

The project revolves around the `Item` model:

- a user reports an item from the create form
- the data is validated and saved to the `items` table
- items are shown on the home and items pages
- the status can be changed through the edit screen
- each item can be deleted from its details page

## Data Model

The `items` table includes:

| Column | Type | Description |
| --- | --- | --- |
| id | bigint | Auto-increment primary key |
| name | string | Item name |
| description | string | Short detail about the item |
| location | string | Where it was found or lost |
| status | string | lost, found, or claimed |
| created_at | timestamp | Record creation time |
| updated_at | timestamp | Last update time |

## Routes

| Route | Method | Purpose |
| --- | --- | --- |
| `/` | GET | Homepage with summary counts |
| `/about` | GET | About page |
| `/items` | GET | List all items |
| `/items/status/{status}` | GET | Filter items by status |
| `/items/create` | GET | Show create form |
| `/items` | POST | Save new item |
| `/items/{id}` | GET | Show item details |
| `/items/{id}/edit` | GET | Show status update form |
| `/items/{id}` | PUT | Update an item status |
| `/items/{id}` | DELETE | Remove an item |

## Requirements

Before starting, make sure you have:

- PHP 8.3 or newer
- Composer
- Node.js and npm
- A local terminal or command prompt

## Installation

### Option 1: Manual setup

1. Clone the repository:

```bash
git clone https://github.com/johncarlocruzph-code/offline-laravel-project.git
cd offline-laravel-project
```

2. Install PHP dependencies:

```bash
composer install
```

3. Copy the environment file:

```bash
cp .env.example .env
```

4. Generate the application key:

```bash
php artisan key:generate
```

5. Make sure the SQLite database file exists:

```bash
touch database/database.sqlite
```

6. Run the database migrations:

```bash
php artisan migrate
```

7. Install front-end dependencies and build assets:

```bash
npm install
npm run build
```

8. Start the local development server:

```bash
php artisan serve
```

9. Open your browser at:

```text
http://localhost:8000
```

### Option 2: One-command setup

This project includes a Composer setup script that performs the main installation steps automatically:

```bash
composer run setup
```

This script runs the following actions:

- installs Composer dependencies
- creates `.env` if missing
- generates the Laravel app key
- runs migrations
- installs npm packages
- builds Vite assets

## Running the App

Use the development server when working locally:

```bash
php artisan serve
```

For asset hot reloading during front-end work:

```bash
npm run dev
```

## Common Commands

```bash
php artisan migrate
php artisan migrate:fresh
php artisan route:list
php artisan test
```

## How the App Works

1. A user opens the homepage and sees the total counts for lost, found, and claimed items.
2. They choose to report a new item.
3. The system validates key information such as name, description, location, and item status.
4. The item is stored in the SQLite database.
5. The item appears in the item list and can be filtered by category.
6. The item status can be updated over time until the record is resolved.

## Notes

- The application is intentionally simple and local-first.
- It does not include authentication or user accounts.
- It is suitable for a small offline environment or demo project.
- The database is SQLite, which keeps setup simple and portable.

## Customization Ideas

You can extend the app by adding:

- item photos
- search by keyword
- user authentication
- admin-only moderation
- export to CSV
- email notifications for status changes

## License

This project is open-source and uses the MIT license.

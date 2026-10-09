# IT0049 Basic Point-of-Sale System

A basic four-page Point-of-Sale account management website created with CodeIgniter 4. This project demonstrates routing, controllers, views, passing data to views, and displaying static PHP array records.

## Student Information

- **Name:** Joselito Gabriel Victorino
- **Section:** TW32
- **Professor:** Von Magbitang

## Pages

| Route | Page | Description |
|---|---|---|
| `/` | Home | Landing page of the POS system |
| `/about` | About | Information about the project |
| `/customers` | Customer Accounts | Displays five customer records |
| `/users` | User Accounts | Displays five user or staff records |

## Features

- Four working CodeIgniter pages
- Explicit route definitions
- Separate controllers and views
- Five sample customer records
- Five sample user or staff records
- Static PHP arrays as temporary data sources
- `foreach` loops for displaying records
- Escaped output using `esc()`
- Navigation between all four pages
- Shared CSS stylesheet
- Responsive page layout

## Technologies Used

- PHP 8.2
- CodeIgniter 4.7.5
- Composer
- HTML5
- CSS3
- XAMPP
- Visual Studio Code

## Installation and Setup

1. Clone the repository:

   ```bash
   git clone YOUR_REPOSITORY_URL
   ```

2. Enter the project folder:

   ```bash
   cd it0049-pos
   ```

3. Install the required Composer packages:

   ```bash
   composer install
   ```

4. Create the environment file:

   Windows:

   ```bat
   copy env .env
   ```

   macOS or Linux:

   ```bash
   cp env .env
   ```

5. Configure these values in `.env`:

   ```ini
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
   ```

6. Start the development server:

   ```bash
   php spark serve
   ```

7. Open the application:

   ```text
   http://localhost:8080
   ```

## Project Structure

```text
app/
├── Config/
│   └── Routes.php
├── Controllers/
│   ├── Pages.php
│   ├── Customers.php
│   └── Users.php
└── Views/
    ├── pages/
    │   ├── home.php
    │   └── about.php
    ├── customers/
    │   └── index.php
    └── users/
        └── index.php

public/
└── css/
    └── style.css
```

## Data Source

This activity does not use a database. Customer and user records are stored in static PHP arrays inside their respective controllers.

Because the activity specifically requires no database at this stage, no database export is included.
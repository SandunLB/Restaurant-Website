
# Restaurant Website

A simple restaurant website built using PHP, CSS, HTML, and MySQL.

## Features

- Display menu items
- Search by categories
- Table reservations
- User authentication
- Admin panel for managing menu and reservations

## Technologies Used

- PHP
- HTML
- CSS
- MySQL

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/your-username/restaurant-website.git
    ```

2. Navigate to the project directory:
    ```sh
    cd restaurant-website
    ```

3. Import the MySQL database:
    - Create a database named `restaurant_website`.
    - Import the `database.sql` file:
        ```sql
        mysql -u your-username -p restaurant_website < sql/database.sql
        ```

4. Configure the database connection:
    - Open `config.php`.
    - Update the database details:
        ```php
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'your-username');
        define('DB_PASSWORD', 'your-password');
        define('DB_NAME', 'restaurant_website');
        ```

5. Start the local development server:
    ```sh
    php -S localhost:8000
    ```

6. Open your browser and go to:
    ```
    http://localhost:8000
    ```


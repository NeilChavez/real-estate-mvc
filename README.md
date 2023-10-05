
# Real Estate Web Application Using PHP and MySQL

This is a web-based platform that facilitates property management through a comprehensive CRUD (Create, Read, Update, Delete) system. Admin user can effortlessly create new property listings, read and display property information, update existing listings. The application offers a responsive design, ensuring a seamless user experience across devices. 

[![Real Estate Home page](/media/real-estate-home.png 'Real Estate')](https://real-estate-neil.domcloud.io/)


## Main Features

Here are theprincipal features ofthis application:

- **Functional Admin Panel:** The admin panel empowers administrators to manage the entire system efficiently.

- **Admin Control for Properties and Sellers:** Administrator has full control to read, create, update, and delete properties and sellers.

## Access the Login Screen

To visit the login screen, you can go to [https://real-estate-neil.domcloud.io/login](https://real-estate-neil.domcloud.io/login) and use the following credentials:

- **Username:** admintest@email.com
- **Password:** 12345

These credentials will allow you to access the login screen of the application.
![Login page](/media/real-estate-login.gif)


# Installation

Follow these steps to set up and run the project on your local environment.

## 1. Clone the Repository

First, clone this repository to your local machine using the following command in your terminal:

```bash
git clone https://github.com/NeilChavez/real-estate-mvc.git
```

## 2. Configure the Database

Import the provided database file (database.sql) into your database management system (e.g., PhpMyAdmin) to create the database structure and load initial data.

## 3. Configure Database Connection

Open the db.php file in the /includes/config
directory and update the database connection parameters with the information corresponding to your configuration:

```php 
 $connection = new mysqli("localhost", "root", "", "database_name");
```

Update the database connection parameters to match your specific configuration:

```php
Replace "localhost" with your database host (e.g., "your_db_host").
Replace "root" with your database username (e.g., "your_db_username").
Replace "" with your database password (if applicable) between the double quotes (e.g., "your_db_password").
Replace "real_state" with your database name (e.g., "your_database_name").
```

## 4. Run the Project

Use a local web server or the built-in PHP development server to run the application. Below is an example using the built-in PHP server:

```bash
cd public
php -S localhost:3000
```

You can now access the application in your web browser by navigating to the URL http://localhost:3000.
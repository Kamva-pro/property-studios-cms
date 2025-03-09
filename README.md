## PROPERTY STUDIOS - Contact Management System
A Content Management System for Property Studios which uses prioritizes code maintainability 
through a modular approach using an MVC architecture. 

---

## Table of Contents
1. [Features](#features)
   - [Prioritized Features](#prioritized-features)
   - [Completed Features](#completed-features)
2. [Assumptions](#assumptions)
3. [Installation and Setup](#installation-and-setup)
   - [Prerequisites](#prerequisites)
   - [Step-by-Step Setup](#step-by-step-setup)
4. [Using the Application](#using-the-application)
5. [Future Enahncements](#future-enhancements)
---

## Features

### Prioritized Features
1. **Maintanable Structure**:
   - The application follows the **MVC (Model-View-Controller)** pattern to ensure separation of concerns, making it maintainable, extendable, and scalable.
   
2. **Dynamic Routing**:
   - A dynamic base URL (`BASE_PATH`) is set based on the root folder's name, allowing the application to route to different screens regardless of the folder structure.
   - URL rewriting in `.htaccess` ensures the app always starts from the base URL, not the `public` folder.

3. **Form Submission with Validation**:
   - Users can submit forms in a safe and seamless environment.
   - Input is validated for security, and data is written to the database using prepared statements to prevent SQL injections.

4. **Admin Authentication**:
   - Admin users are authenticated using credentials defined in the local database (e.g., phpMyAdmin).
   - Admins can log in to view all user submissions, sorted by the latest submission first.

5. **Environment Configuration**:
   - The application uses a `.env` file for configuration, allowing users to specify database credentials and other settings.

---

### Completed Features
- **Dynamic Base URL**: Automatically adjusts based on the root folder's name.
- **Form Submission**: Users can submit forms, and data is validated and saved to the database.
- **Admin Panel**: Authenticated admins can view all submissions.
- **Routing**: Dynamic routing handles navigation between pages (home, submit, success, login, logout, admin).
- **Error Handling**: Basic error handling for invalid inputs and failed submissions.
- **Environment Configuration**: Database credentials are configured via a `.env` file.

---

## Assumptions
1. **Server Setup**:
   - The application assumes you are using a local development environment with:
     - An **Apache server** (via XAMPP, WAMP, or similar).
     - **PHP** installed (version 8.0 or higher).
     - **MySQL** database.

2. **Database Configuration**:
   - The database connection details (e.g., host, username, password) are provided in a `.env` file.
   - A table named `user_submissions` exists in the database with the following fields:
     - `id` (Primary Key, Auto Increment)
     - `name` (varchar)
     - `email` (varchar)
     - `message` (text)
     - `submitted_at` (datetime)

3. **Admin Authentication**:
   - Admin credentials are stored in the local database (e.g., phpMyAdmin).
   - Admins log in using the same credentials connected to their localhost setup.

4. **Folder Structure**:
   - The application is placed in the correct folder for the local server:
     - **XAMPP**: `htdocs` folder.
     - **WAMP**: `www` folder.

---

## Installation and Setup

### Prerequisites
Before running the application, ensure you have the following installed:
- **Apache Server** (via XAMPP, WAMP, or similar).
- **PHP** (version 8.0 or higher).
- **MySQL** or another supported database.
- **Composer** (for dependency management).

---

### Step-by-Step Setup
1. **Start Your Server**:
   - Launch XAMPP or WAMP and start the **Apache** and **MySQL** services.

2. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/property-studios-cms.git
   cd property-studios-cms

3. **Install Dependencies**:
   ```bash
   composer install
   ```

### Create the Database

1. Open phpMyAdmin (usually accessible at [http://localhost/phpmyadmin](http://localhost/phpmyadmin)).
2. Create a new database (e.g., `property_studios_cms`).
3. Create a table named `user_submissions` with the following fields:

```sql
CREATE TABLE user_submissions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submitted_at DATETIME
);
```

### Configure the .env File

1. Open the `.env` file in the root directory.
2. Update the following variables with your database credentials:

```env
DB_HOST=localhost
DB_USER=your-database-username
DB_PASS=your-database-password
DB_NAME=your-database-name
```

### Move the Application to the Correct Folder

- **If using XAMPP**, move the application folder to:
  ```
  C:\xampp\htdocs\
  ```
- **If using WAMP**, move the application folder to:
  ```
  C:\wamp64\www\
  ```

## Using the Application

### Access the Application

Open your browser and navigate to the folder you have just cloned eg.:

```
http://localhost/property-studios-cms
```

### Submit a Form

1. Fill out the form on the homepage and submit it.
3. The data will be validated and saved to the database.
3. Upon a succesful submission you shall be redirected to the success page, where a success message will be displayed.
4. After 3 seconds you will be redirected back to the home page.

### Log in as an Admin

1. Navigate to the login page:
   ```
   http://localhost/property-studios-cms/login
   ```
2. Use the admin credentials stored in your local database to log in. These credentials need to match those saved inside your `.env` file.

### View Submissions

1. After logging in, you will be redirected to the admin panel.
2. View all user submissions, sorted by the latest submission first.


## Future Enhancements
1. **Pagination** - add some pagintion within the tables to split large lists and provide easier querying.
2. **Session Security** - add session protection for admin users to avoid things such as session hijacking.



# AIIST Enrollment Tracker - CodeIgniter 4

## Overview
AIIST Enrollment Tracker is a CodeIgniter 4 web application designed for AIIST, a leading digital college in Monrovia, Liberia. This app helps business personnel track potential enrollees and students who have purchased application forms. It also provides administrators with tools to monitor activities and manage user accounts.

## Features
### Business Personnel
- Log in and track prospective students using contact information gathered from social media (e.g., Facebook).
- Mark whether a person has purchased a form and/or has enrolled.
- Track students who have purchased application forms.

### Administrators
- Monitor logs to review department activities.
- Add new users and deactivate accounts.

## Installation Guide
### Prerequisites
- PHP 8.0 or higher
- MySQL Database
- Apache/Nginx Web Server
- Composer (for managing dependencies)

### Setup Instructions
1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/aiist-enrollment-tracker.git
   cd aiist-enrollment-tracker
   ```
2. **Install Dependencies**
   ```bash
   composer install
   ```
3. **Import the Database**
   - Locate the SQL file in the root directory.
   - Import it into your MySQL database using a tool like phpMyAdmin or the MySQL command line:
     ```bash
     mysql -u your_username -p your_database_name < database.sql
     ```
4. **Configure the Environment**
   - Rename the `.env.example` file to `.env` (if not already done).
   - Set your database connection details inside the `.env` file:
     ```ini
     database.default.hostname = localhost
     database.default.database = your_database_name
     database.default.username = your_db_user
     database.default.password = your_db_password
     database.default.DBDriver = MySQLi
     ```
5. **Run the Application**
   - Start the local development server:
     ```bash
     php spark serve
     ```
   - Access the application at `http://localhost:8080`.

## Login Credentials
### Admin
- **Email:** `admin@gmail.com`
- **Password:** `123456`

### Test User
- **Email:** `testuser@gmail.com`
- **Password:** `123456`

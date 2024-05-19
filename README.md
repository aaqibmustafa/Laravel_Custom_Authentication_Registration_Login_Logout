# Laravel Custom Authentication Registration Login Logout

This project demonstrates a simple custom authentication system built using Laravel. It includes user registration, login, dashboard access, and logout functionality.

## Features

- User registration
- User login
- Dashboard access for logged-in users
- Logout functionality

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 7.3
- Composer
- Laravel >= 8.x
- XAMPP or similar (for local development)
- Node.js and npm (optional, for frontend asset compilation)

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**:
    ```sh
    git clone https://github.com/aaqibmustafa/Laravel_Custom_Authentication_Registration_Login_Logout.git
    cd Laravel_Custom_Authentication_Registration_Login_Logout
    ```

2. **Install dependencies**:
   
    composer install
   

3. **Set up environment variables**:
    - Copy the `.env.example` file to `.env`:
    ```sh
    cp .env.example .env
    ```
    - Update the `.env` file with your database credentials and other necessary configurations.

4. **Generate an application key**:
    ```sh
    php artisan key:generate
    ```

5. **Run database migrations**:
    ```sh
    php artisan migrate
    ```

6. **Serve the application**:
    ```sh
    php artisan serve
    ```

The application will be available at `http://localhost:8000`.

## File Structure

- **routes/web.php**: Defines the web routes for the application.
- **app/Http/Controllers/CustomAuthController.php**: Contains the logic for user registration, login, dashboard access, and logout.
- **resources/views/auth/registration.blade.php**: Registration view template.
- **resources/views/auth/login.blade.php**: Login view template.
- **resources/views/dashboard.blade.php**: Dashboard view template.

## Routes

- **GET /**: Displays the login form.
- **GET /registration**: Displays the registration form.
- **POST /register-user**: Handles user registration.
- **POST /login-user**: Handles user login.
- **GET /dashboard**: Displays the dashboard for logged-in users.
- **GET /logout**: Logs out the user and redirects to the login page.

## Controller Methods

- **login()**: Returns the login view.
- **registration()**: Returns the registration view.
- **registerUser(Request $request)**: Handles the user registration process, including validation and storing the user data.
- **loginUser(Request $request)**: Handles the user login process, including validation and session management.
- **dashboard()**: Returns the dashboard view for logged-in users.



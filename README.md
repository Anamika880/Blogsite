# Blogsite

Welcome to the Blogsite repository. This `README` provides information on how to set up and run this Laravel project. Please follow the steps below to get started.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP (7.4+ recommended)
- Composer
- Node.js (with npm)
- MySQL or other supported database system

## Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/your-username/your-project.git
    ```

2. Navigate to the project directory:

    ```bash
    cd your-project
    ```

3. Install PHP dependencies using Composer:

    ```bash
    composer install
    ```

4. Install JavaScript dependencies using npm:

    ```bash
    npm install

    ```

5. Copy the `.env.example` file to `.env` and configure your environment variables (database, mail, etc.):

    ```bash
    cp .env.example .env
    ```

6. Generate the application key:

    ```bash
    php artisan key:generate
    ```

7. Run database migrations:

    ```bash
    php artisan migrate
    ```

8. Start the development server:

    ```bash
    php artisan serve
    ```

Your Laravel project should now be up and running. Access it in your web browser at `http://localhost:8000`.

## Usage

- Access the project at `http://localhost:8000`.
- 
 Login using route /login with sample login credentials:

 For Admin 
 username - admin@gmail.com
 password - 11111111

 For Author
 username - author@gmail.com
 password - 11111111

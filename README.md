

README.md

# Task Management App

This is "Taskaty App" a task management application built using Laravel framework. It allows users to manage their tasks by creating, updating, and deleting them. The application utilizes Laravel Breeze for authentication and Blade as the templating engine. The Repository design pattern is also implemented for data abstraction and separation of concerns.

## Features

- User Registration and Login: Users can register for an account and log in to the application.
- Task Management: Users can create, view, update, and delete tasks.
- Authentication: Authentication is handled using Laravel Breeze, which provides a simple and customizable authentication system.

## Installation

1. Clone the repository:

```shell
git clone 
```

2. Navigate to the project directory:

```shell
cd task-management-app
```

3. Install the dependencies:

```shell
composer install
```

4. Configure the environment variables:

   - Rename the `.env.example` file to `.env`.
   - Update the `.env` file with your database credentials and other necessary configurations.


5. Run the database migrations:

```shell
php artisan migrate
```

6. Start the development server:

```shell
php artisan serve
```

7. Access the application in your browser at `http://localhost:8000`.

## Usage

Once the application is installed and running, you can register for an account or log in if you already have one. After logging in, you will be able to create tasks with due date in future only, update tasks and delete them.

## Laravel Breeze

Laravel Breeze is a lightweight Laravel package that provides a minimal and customizable authentication system. It includes features like user registration, login, password reset, and email verification. In this application, we have used Laravel Breeze to handle user authentication , I customized all layout provided by Breez with minimal Boostrap layout.

## Blade Templating Engine

Blade is Laravel's powerful templating engine that allows you to write clean and expressive views. It provides features like template inheritance, control structures, and reusable components. In this application, Blade is used to create the user interface and render dynamic data.

## Repository Design Pattern and Services

The Repository design pattern is utilized in this application to separate the data access logic from the core business logic. This pattern introduces an abstraction layer that enables seamless switching between different data sources without impacting the higher-level code. With the implementation of repositories, it becomes effortless to substitute the underlying data storage mechanism, such as a database, without making modifications to the application's core functionality.

By employing repositories, code organization, maintainability, and testability are greatly improved. The repository pattern facilitates better separation of concerns, allowing the business logic to remain decoupled from the specific implementation details of data access.

In addition, the Service pattern is employed to inject the Repository into it. This approach enhances code organization and reduces coupling between classes. By utilizing the Service pattern, the responsibilities of different parts of the application are properly segregated, leading to a more modular and maintainable codebase. 


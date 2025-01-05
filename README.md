# JustWriteIt

<img src="public/logo-side-text.svg" alt="JustWriteIt Logo" width="200" height="150">

JustWriteIt is a blog application built with Laravel. It allows users to create,
edit, and manage blog posts with ease. The application includes features such as
user authentication, post categorization, and more.

## Features

- User Authentication
- Create, Read, Update, Delete (CRUD) for Blog Posts
- Post Categorization
- User Roles (Admin, Author, Reader)
- Comments on Posts
- Featured Posts
- Search and Filter Posts

## Installation

1. Clone the repository:

   ```sh
   git clone https://github.com/yourusername/justwriteit.git
   cd justwriteit
   ```

2. Install dependencies:

   ```sh
   composer install
   npm install
   ```

3. Copy the [.env.example](http://_vscodecontentref_/1) file to
   [.env](http://_vscodecontentref_/2) and configure your environment variables:

   ```sh
   cp .env.example .env
   ```

4. Generate an application key:

   ```sh
   php artisan key:generate
   ```

5. Run the database migrations:

   ```sh
   php artisan migrate
   ```

6. Build the front-end assets:

   ```sh
   npm run dev
   ```

7. Start the development server:

   ```sh
   php artisan serve
   ```

8. Visit `http://localhost:8000` in your browser to see the application.

## Usage

- Register a new account or log in with an existing account.
- Create, edit, and delete blog posts.
- Browse posts by category or search for specific posts.
- Comment on posts and interact with other users.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request
with your changes.

## License

This project is licensed under the MIT License. See the LICENSE file for
details.

## Contact

For any questions or suggestions, please contact
[yourname@example.com](mailto:yourname@example.com).

---

Happy blogging with JustWriteIt!

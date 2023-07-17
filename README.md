# Travel Blog Project

This is a travel blog project developed using Laravel, PHP, and MySQL for the backend, and HTML, CSS, and JavaScript for the frontend. The project allows users to create accounts, publish blog posts with media content, and incorporates user authentication and authorization for secure access to personal profiles and blog management. The blog posts submitted by users will be verified by an admin, who can either approve or reject them. Only the approved posts will be displayed on the homepage.

Features
User registration and authentication: Users can create accounts and authenticate themselves to access the blog features.
User authorization: Different user roles can be assigned, such as regular users and admin, to manage access and permissions.
Blog post creation: Authenticated users can create and publish blog posts, including text and media content.
Admin approval workflow: Admins can review and approve or reject blog posts submitted by users.
Homepage with approved posts: Only the approved blog posts will be displayed on the homepage for all users to view.

## Project Setup
1. Open your git CLI and clone the repository to your xampp directory (usually C://xampp/htdocs/laravel_blogproject):
  ```bash
   git clone https://github.com/MasshuraMadhurja/laravel_blogproject.git
   ```

2. Go to http://localhost/phpmyadmin on browser and create a new database 'blogproject2' following this: 
https://media.geeksforgeeks.org/wp-content/uploads/20210316195142/php3.jpg

3. open the project directory (C://xampp/htdocs/laravel_blogproject) on git CLI and execute the following commands serially : 

```
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
```

4. Now run the project : 

```
php artisan serve
```


```
Super Admin Credentials:

email: admin@gmail.com
password: 12345678

User Credentials used:
1. email: user@gmail.com
   password: 12345678
1. email: user2@gmail.com
   password: 12345678

```
5. Open your web browser and visit `http://localhost:8000` to access Laravel Hospital Management.

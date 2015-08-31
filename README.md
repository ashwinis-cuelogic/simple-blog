Simple Blog application

PHP version 5.5.9

Framework : CodeIgniter-3.0.0

Database: Mysql


Application setup:

Create database using the schema using file Sql/blog_app.sql

Change DB configurations to your local in application/config/database.php file


Clone this project locally

$ git clone https://github.com/ashwinis-cuelogic/simple-blog.git

The application contains 5 models,

User model 
Blog model 
Comment model 
Blog category model 
User type model

Database Design:

User has many Blogs Blog belongs to User

User has many Comments through Blog Blog has many comments
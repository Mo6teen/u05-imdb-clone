# U05 - IMDB clone

## About the project

(Background, purpose, goals...)

## How to get started

Since this is a Laravel project you need to have Docker installed on your machine and also Docker extension in your code editor before you begin. We have been using Visual Studio Code as code editor.

With that in place open your project in your code editor and run **docker-compose up** in terminal. With Docker up and running and if you use VS code you click on Docker symbol. Then find the running container for your project, right click on the line ending with **\_php** and choose **attach shell**. You can attach several shells, and you will need more than one to serve on one and be able to make migrations and other things on another.

Then click on one of the running shells and run **cd lmdb/**, which is the Laravel project name for this app. Then run **php artisan serve --host 0.0.0.0 --port 8000** to start your local server. Then you can open your browser and type **localhost:8000** to see the application home page.

<<<<<<< HEAD
To log in to the database you can use Admine. You need to log in with the login details in the env file (DB_CONNECTION, DB_HOST, DB_USERNAME, DB_PASSWORD). When you are logged in you need to create a database named for example LMDB, make sure you have the same database name in env file. Then go back to your code editor and run **php artisan migrate** to get all the application tables into your database.
=======
To log in to the database you can use Adminer. You need to log in with the login details in the env file (DB_CONNECTION, DB_HOST, DB_USERNAME, DB_PASSWORD). When you are logged in you need to create a database named for example LMDB, make sure you have the same database name in env file. Then go back to your code editor and run **php artisan migrate** to get all the application tables into your database. 
>>>>>>> 57059463333cc1adb871445d0c3e5c4b67ff5a54

You will also need to change the mail section in env file to this to make the reset password function work:

```
MAIL_MAILER=smtp
MAIL_HOST=smtp-mail.outlook.com (if you use outlook, gmail if you use gmail)
MAIL_PORT=587
MAIL_USERNAME=yourMail@mail.com
MAIL_PASSWORD=yourPassword
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=yourMail@mail.com
MAIL_FROM_NAME="${APP_NAME}"
```

## Role based system

In this application there are three role types.

The first one is the guest user which only has access to read and has no dashboard.

The second one is the regular user who is signed in. The user has a dashboard (userdashboard) and can there:

- Create a watchlist by adding movies.
- Create other lists, named by the user, with movies.
- Change user settings (email and password).

The regular user can also write reviews on movies (needs to be approved by admin).

The third role is admin (whos dashboard is admindashboard), who can do everything a regular user can plus:

- Create new movies.
- Handle reviews (approve and delete).
- Make CRUD operations on users (change role and delete user).

To create your first admin register a user at **localhost:8000/registration**, a user by default gets role 1 at registration. Then go to adminer and change the user role to 0 in users table.

## The views

### The login view

By navigating to **localhost:8000/registration** or simply click "register" in nav-bar visitors can registrate themselves to become regular users (name, email, password). After successful registration the visitor gets redirected to **localhost:8000/login** to fill in email and password. Forgot password? No problem - click **forgot password**, type in email adress and the user will get a reset password link sent to their email inbox.

### The dashboard view

If the user has role 1 (regular user) the user will be redirected to the user dashboard after login. If the user role is 0 the user is an admin and will be redirected to the admin dashboard. If the user tries to type admin dashboard or vice versa in adress field there will be no success, they will stay on their dashboard. Read about what a user based on role can do on their dashboard under "Role based system" section above.

### Fill with more views

......

## User stories

## Database structure

## Design patterns

## Contributors

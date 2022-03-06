# U05 - IMDB clone

## About the project

This project started of as a school assignment with the purpose to learn more about how to build a backend with laravel and the main focus throughout the project has been backend functionality.

The goal of the project has been to create a website modelled after the famous site IMDB, which is a website where a user can find information about most movies. The team wanted to create a cleaner, more accessible version of IMDB and still offer many of its functionalities, which you can read more about below.

The name LMDB is short for Lobster Movie Database and lobsters have been the theme for the project. In the future if you find that you are in the mood for a movie about lobsters LMDB will be the website to turn to for recommendations. 🦞

## How to get started

Since this is a Laravel project you need to have Docker installed on your machine and also Docker extension in your code editor before you begin. We have been using Visual Studio Code as code editor.

With that in place open your project in your code editor and run **docker-compose up** in terminal. With Docker up and running and if you use VS code you click on Docker symbol. Then find the running container for your project, right click on the line ending with **\_php** and choose **attach shell**. You can attach several shells, and you will need more than one to serve on one and be able to make migrations and other things on another.

Then click on one of the running shells and run **cd lmdb/**, which is the Laravel project name for this app. Then run **php artisan serve --host 0.0.0.0 --port 8000** to start your local server. Then you can open your browser and type **localhost:8000** to see the application home page.

To log in to the database you can use Adminer. You need to log in with the login details in the env file (DB_CONNECTION, DB_HOST, DB_USERNAME, DB_PASSWORD). When you are logged in you need to create a database named for example LMDB, make sure you have the same database name in env file. Then go back to your code editor and run **php artisan migrate** to get all the application tables into your database.

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

To create your first admin register a user at **localhost:8000/registration**, a user by default gets role 1 at registration. Then go to Adminer and change the user role to 0 in users table.

## The views

### The login view

By navigating to **localhost:8000/registration** or simply click "register" in nav-bar visitors can registrate themselves to become regular users (name, email, password). After successful registration the visitor gets redirected to **localhost:8000/login** to fill in email and password. Forgot password? No problem - click **forgot password**, type in email adress and the user will get a reset password link sent to their email inbox.

### The dashboard view

If the user has role 1 (regular user) the user will be redirected to the user dashboard after login. If the user role is 0 the user is an admin and will be redirected to the admin dashboard. If the user tries to type admin dashboard or vice versa in adress field there will be no success, they will stay on their dashboard. Read about what a user based on role can do on their dashboard under "Role based system" section above.

### The single movie view

When a visitor clicks on a movie they are interested in they will be redirected to that movies own view. Here they can read more about the movie, add it to their watchlist, read reviews and if they are signed in they can also leave a review. If a visitor who is not signed in tries to leave a review on a movie they will be redirected to the login view. To avoid offensive reviews a review will need approval from an admin before it is visible to visitors of the page.

### The handle users view

Only an admin is able to access the handle users view. Here they can see all users that are registered to the website in alphabetical order. The admin can choose to either update a user, which will redirect them to a new view to preform the operation on that specific user, or delete a user.

### The edit-user view

When an admin has chosen to update a user they will be redirected to this view. Here they can see all the information about the user and change the users role from regular user to admin or vice versa.

### The handlereviews view

An admin can view pending reviews by accessing "Handle reviews" on the dashboard. An admin can choose to either approve or delete the review. If it is approved, it will disappear from the handlereviews view and appear in the reviews section for the movie that the review belongs to.

## User stories

- Website user: Focus on basic read-functions on the website and minimizing redirections.
- Registered website user: Focus on the users ability to structure information like creating lists and reviews.
- Admin: Focus on keeping track of users and keeping the website updated.
- Power user: Focus on accessibility when it comes to creating lists and reviews.
- Confused user: Focus on overall accessibility and presentation of information on the website.

## Database structure

In this chapter we will explain which tables we are using and how they are connected. The tables we are using are as follows:

- users
- password_resets
- watchlists
- customlists
- listentries
- movies
- reviews

Here is an img displaying the table name and the columns

![alt text](https://i.imgur.com/XnGMisF.png)

The User and the Movie tables are the main tables in our database. Here is an img off our tables connecting.

```
                    User                               Movies
                     |                                    |
                     |                                    |
Password Reset-------|                                    |
                     |---- Reviews -----------------------|
                     |                                    |
                     |---- Watchlist ---------------------|
                     |                                    |
                     |---- Customlists --|                |
                                         |                |
                                         |--- Listentry --|
```

![alt text](https://i.imgur.com/PT7Aa8X.png)

From users we have connections to reviews and watchlists which are also connected to the movies table. Our ideal was to have lists which are connected with an user_id and a movie_id which we then could display in the frontend.

The customlists is connected to listenries. We can see that listentries is connected to movies table and customlists is connected to users table.
The listentries table has the information of an movie_id and a customlists_id. customlists_id is connected to the correct customlists id and having been connected to the users table with user_id column we can now see for example that customlists id 1 has user_id 1 and has movie_id 1 added to that list.

## Contributors

Dimosthenis Emmanouil, github: Albatraoz12
Louise Hedman, github: louisehedman
Frida Nicander, github: frinica
André Mourad, github: Mo6teen

<a href = "https://github.com/Mo6teen/u05-imdb-clone/graphs/contributors">
  <img src = "https://contrib.rocks/image?repo = GitHub_Albatraoz12/u05-imdb-clone"/>
</a>
<a href = "https://github.com/Mo6teen/u05-imdb-clone/graphs/contributors">
  <img src = "https://contrib.rocks/image?repo = GitHub_username/repository_name"/>
</a>

# U05 - IMDB clone

## About the project

(Background, purpose, goals...)

## How to get started

Since this is a Laravel project you need to have Docker installed on your machine and the Docker extension in your code editor before you begin. We have been using Visual Studio Code. 

With that in place open your project in your code editor and run **docker compose up** in terminal. With Docker up and running and if you use VS code you click on Docker symbol. Then find the running container for your procect, right click on the line ending with **_php** and choose **attach shell**. You can attach several shells, and you will need more than one to serve on one and be able to make migrations and other things on another. 

Then click on one of the running shells and run **cd lmdb/**, which is the Laravel project name for this app. Then run **php artisan serve --host 0.0.0.0 --port 8000** to start your local server. Then you can open your browser and type **localhost:8000** to see the application home page. 

To log in to the database which is located in Adminer you need to log in with the login details in the env file. When you are logged in you need to create a database named LMDB. Then go back to your code editor and run **php artisan migrate** to get all the application tables into your database. 

## Role based system
In this application there is three role types. 

The first one is the guest user which only have access to read and has no dashboard. 

The second one is the regular user who is signed in. The user has a dashboard (userdashboard) and can there:
* Create a watchlist by adding movies. 
* Create other lists with movies named by the user. 
* Change user settings (email and password). 

The regular user can also write reviews on movies (needs to be approved by admin). 

The third role is admin (which dashboard is admindashboard), who can do everything a regular user can plus:
* Create movies. 
* Handle reviews. 
* Make CRUD operations on users (change role and delete user).

TTo create your first admin either create a user in users table in adminer with role 0, or navigate to register user in **localhost:8000/registration** and create a user, a user by default gets role 1 at registration, then go to adminer and change the user role to 0 in users table. 

## The views

### The login view
By navigating to **localhost:8000/registration** or simply click "register" in nav-bar visitors can registrate themselves to become regular users (name, email, password). After successful registration the visitor gets redirected to **localhost:8000/login** to fill in email and password. Forgot password? No problem - click **forgot password**, type in email adress and the user will get a reset password link sent to their email inbox. 

### The dashboard view
If the user has role 1 (regular user) the user will be redirected to user dashboard after login. If the user role is 0 the user is admin and will be redirected to admin dashboard. If the user tries to type admin dashboard or vice versa in adress field there will be no success, they will stay on their dashboard. Read about what a user based on role can do on their dashboard under "Role based system" section above. 

## User stories

## Database structure

## Design patterns

## Contributors 
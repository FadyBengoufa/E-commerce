# E-commerce
How to Setup a Laravel Project:

1. Clone GitHub repo for this project locally

https://github.com/FadyBengoufa/E-commerce.git

or download the zip folder

2. cd into this e-commerce project after you cloned it

3. Install Composer Dependencies this will add a composer.json file

composer install

4. Install NPM Dependencies this will add a packages.json file

npm install or yarn

5-Create a copy of your .env file

cp .env.example .env

6. Generate an app encryption key and add it to the .env file in the APP_KEY field

php artisan key:generate

7. Create an empty database for our application

in this project name it "e-com"

8. In the .env file, add database information to allow Laravel to connect to the database by filling these filed:

(DB_HOST,DB_PORT,DB_DATABASE,DB_USERNAME,DB_PASSWORD)

9. Migrate the database

php artisan migrate

10.Seed the database[OPTIONAL]

php artisan db:seed

To access the admin dashboard you need to go to admin/login then add in the database in the admins table using the terminal by typing:

"php artisan tinker"

then create an admin instance : 

$admin = new App\Admin();

add the name and email and the hashed password :

$admin->name = "adminname"

$admin->email = "adminname@gmail.com"

$admin->password = Hash::make(123456789); //need to be at least 8 characters

$admin->save();

Then you can log in as admin !

and Hopefully that's all you need to start your project.



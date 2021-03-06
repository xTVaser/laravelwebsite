# laravelwebsite
Software Enginneering

# Cloning the repository
- sudo dnf install git
- git clone https://github.com/xTVaser/laravelwebsite.git
- clone the entire repository, DO NOT work on master, OR merge with master  
- dev branch is used for database changes and internal workings, do not use it to develop front end pages.
- you can branch off master to do view changes and such, as this is a stable branch, or the branch rob/will create soon.  

# Steps to Setting up Docker
- sudo dnf install docker
- chmod +x setup.sh  
- run setup ./setup.sh (you may need to be added to the docker group)  
- composer install  
- composer update
- php artisan serve  (turns on web server on port 8080)
- php artisan migrate  (updates database)

# Developing on this environment 
- ensure your docker mysql container is running: 'docker ps'
- start the web server 'php artisan serve'
- connect to it using the url: 'localhost:8080'
- open the laravel app folder using your editor of choice, atom whatever.

# Add yourself to the Docker Group
- sudo groupadd docker  
- sudo gpasswd -a <username> docker  
- logout and log back in.  

# Common Folder Locations 
- Views and Layouts - resources/views  
- Controllers - app/httpd/controllers  
- Models - app/
- Routes File - app/httpd/

# If you'd like to view the database
- download http://dev.mysql.com/downloads/file/?id=460630
- navigate to the file run 'sudo dnf install <the file>'
- open workbench and you should be able to access the :3306 database.
 
# If the website displays an error such as "table.x.. does not exist" 
- run php artisan migrate  

# If you are getting column not found errors, etc, or cannot run 'php artisan migrate'
- Open MySQL workbench, and drop all of the tables in the EARS database. 
- Now you can run a php artisan migrate
- If this still fails, try running a php artisan migrate:install first
- You can now seed the database with php artisan db:seed
  
# If you run into issues with composer or various package errors such as "HTMLService..." Errors
Delete your composer.lock file
Run 'composer install && composer update'

# Helpful Websites
http://bootsnipp.com/forms

# How to Run Application
- Start web server and MongoDB
- Install the MongoDB PHP driver as given by you(add mongo.so to your config file)
- Change the MongoDB setting in the inc/Config.class.php file if you have authentication for the MongoDB.
- Access the index page depend on your configuration.

# Libaries used
- Smarty template engine
- Bootstrap
- JQuery

If you have any problem running my test project, contact me through my email.


# IT Consultis Backend Test

## How to run the app 
- Install PHP and MongoDB
- Install MongoDB PHP driver (http://php.net/manual/en/mongo.installation.php)
- Clone the project using the command "git clone https://mdespeisse@bitbucket.org/mdespeisse/backend-test.git"
- Go in the project main directory
- Start the server using the command "php -S localhost:8000"
- Start MongoDB using the command "mongod -dbpath .\server\data"
- Connect to http://localhost:8000

## Objective

Create a working PHP web application that will...

- [x] Render a web page containing a file upload form 
- [x] Allow a user to upload the XML document located in `files/flux.xml` using the form
- [x] Parse the records contained in the uploaded XML document
- [x] Save the records to a database
- [x] Display the records in the database on the web page
- [/] Allow a user to update and delete the records on that web page via AJAX
- [/] Allow a user to create a record on that web page via AJAX

#### Things we are looking for...
- Clean, readable code that demonstrates a solid understanding of object-oriented programming in PHP
- A document that explains how to install and run the application

#### Bonus points if you...
- Create PHPUnit tests
- Demonstrate a solid understanding of object-oriented programming in Javascript
- Make the web UI look and feel great
- Create some kind of scripted installation process (e.g. `composer create-project`)
- Demonstrate a working knowledge of branching, merging and tagging with Git

## How to take the test

- Fork this repository 
- Create the web application and push it your repository
- Notify us when everything is pushed!

Feel free to use whatever frameworks, libraries, and tools you have at your disposal.

Good luck!
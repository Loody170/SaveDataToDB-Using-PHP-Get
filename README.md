# SaveDataToDB-Using-PHP-Get
This repository contains the deliverables for task 3, week 4 for the Smart Methods company IoT summer training.

This project contains two files, a HTML file that is a web page that takes any integer, and when submitted it will be processed in the other file which is the PhP file.

The process.php file takes that integer and saves it using the GET method. and sends it to a database and create a record for the number there. each time a new integer is sent a new record will be created.

the database i used is a self hosted database(using localhost) in a page called phpmyadmin. its a tool that allows users to host a database locally on their computer, so thats what i used and what is present in the php code. it can be changed to other databases as long the parameters are changed to the new database parameters using the mysqli_connect() method in php.
also I made the records get created using the prepared statement function, which is better and more secure.

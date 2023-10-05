NGO Management System
=====

Simple NGO Management System built with  php as a Mini Project for deeper understandin of how databases are managed and work flow of it
Technologies used 
* BOOTSTRAP
* PHP
* MYSQL
* javaScript

## Features
* Login ,Signup ,Edit  
* Manage Donors
* Admin Donors Volunteers and their roles
* Record Transactions Donated Money
* Donate Money 
* Add Volunteer Tasks
* View Tasks of volunteers

## Roles
### 1.  Admin
Has access to all the features
### 2.  Donor
Can Donate
* View Donations
* Manage Transactions
* Donate Items

### 3. Volunteer
The Volunteer who is Conducting Tasks
* Record Tasks
* Add Task

# Software Requirements
* xampp
* browser

Screenshots Of the Project.

![helping](https://github.com/Kapcool12/Donation_Management_System/assets/94378669/2c00b73f-5e07-4f95-a152-b568bc75de63)

![Screenshot (138)](https://github.com/Kapcool12/Donation_Management_System/assets/94378669/f1e35be5-fa67-4de6-8feb-b14ef6b85c3e)

![Screenshot (139)](https://github.com/Kapcool12/Donation_Management_System/assets/94378669/327cffc5-5869-471b-9705-a88cb70d315d)

# Quick Guide

1. Clone this repo to your documents root e.g under `c:\xampp\htdocs\` on windows
2. Import the `ngo.sql` file to your database. (You can create a database called ngo using phpmyadmin and import this file into it)
3. open `pdo.php` file and enter your database settings
```php
$pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=ngo','root', '');
```
4. Open the url to your project e.g "[http://localhost/Your-Folder-Name](http://localhost/Your-Folder-Name)"

# MINOR PROJECT
## Version 1.1.3

Resort Website Using HTML, CSS, JavaScript, PHP And MySQL


### FEATURES
------------
Public Website for Visitors where visitors can see the facilities, rooms, reviews, location, and policies of the resort. More than that, they can book rooms and add their reviews about the resort.

	[PUBLIC WEBSITE LINK --> ](http://localhost/MINOR_PROJECT/)

Admin page (dashboard) where admin can only see. Username and password are needed to log in to the dashboard. They are given below. In the dashboard, admin can see the details of all staffs, the status of rooms, reviews, and the number of visitors visiting the public website of the resort.

	[ADMIN PAGE LINK --> ](http://localhost/MINOR_PROJECT/admin.html)

	USERNAME AND PASSWORD OF DASHBORD
	-------------------------------------
	USERNAME --> admin
	PASSWORD --> password


### SETUP GUIDE (Linux)
-----------------------

 1. Download and install the Project under /var/www/html folder.
 
	**$ cd /var/www/html/**
	
	**$ git clone https://github.com/Abhijith7674/MINOR_PROJECT.git**
	
 2. After installation, run the below command in the terminal to set read, write, and execute permissions to files.
 
	**$ sudo chmod -R 777 /var/www/html/MINOR_PROJECT/**
	
 3. Then, we need to run setup.php to complete the remaining setup. However, setup.php is also used to reset this project, so this file needs to be secure. Thus, it is kept protected inside the admin folder and requires a username and password for access. Therefore, first, we need to log in to the Dashboard. After logging in, we will gain access to execute setup.php.
 
	**• USERNAME AND PASSWORD OF DASHBORD**
	
		USERNAME --> admin
		PASSWORD --> password
		
	**• LOGIN TO DASHBOARD**
	
		[DASHBOARD LINK --> ](http://localhost/MINOR_PROJECT/admin.html)

	**• EXECUTE setup.php**
	
		[SETUP LINK --> ](http://localhost/MINOR_PROJECT/admin/settings/setup.php)

4. The last step is to set our database details. In this step, you need to open the source code with any editor software and set your hostname, username, and password in database.php.

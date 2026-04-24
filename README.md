Via APACHE

http://localhost/Cuisine/

Via PhpmyAdmin 

http://localhost/phpmyadmin/

## Database Setup

To create an admin user for your MySQL database:

1. Access phpMyAdmin at `http://localhost/phpmyadmin/`
2. Log in with root (no password by default)
3. Go to the "User accounts" tab
4. Click "Add user account"
5. Fill in:
   - User name: `admin` (or your preferred name)
   - Host name: `localhost`
   - Password: Set a strong password
6. Under "Global privileges", check "Check All" to give full admin rights
7. Click "Go" to create the user

Use these credentials in your PHP code to connect to the database instead of root.
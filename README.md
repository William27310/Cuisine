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

## Starting a New PHP Project

If you want to start another PHP project alongside Cuisine:

1. **Revert Apache config** (if you changed DocumentRoot to Cuisine):
   - Edit `C:\xampp\apache\conf\httpd.conf`
   - Change DocumentRoot back to `"C:/xampp/htdocs"`
   - Change Directory back to `"C:/xampp/htdocs"`
   - Restart Apache

2. **Create new project folder**: In `C:\xampp\htdocs\`, create a new folder (e.g., `NewProject`)

3. **Copy structure**: Copy the files from Cuisine to the new folder, or start fresh with index.php, etc.

4. **Access it**: Visit `http://localhost/NewProject/` in your browser

This way, you can have multiple projects under htdocs, each accessible as `http://localhost/ProjectName/`.
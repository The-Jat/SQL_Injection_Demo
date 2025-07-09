## How to use

1. **Import the Database**
   - Open phpMyAdmin or use the MySQL command line.
   - Import the `database.sql` file provided in this project to create the necessary tables and data.

2. **Set Up the Project**
   - Copy the entire `sql_injection_demo` folder into the `htdocs` directory of your XAMPP installation (usually `C:\xampp\htdocs\`).

3. **Start XAMPP**
   - Launch XAMPP Control Panel.
   - Start both the Apache and MySQL services.

4. **Access the Application**
   - Open your web browser and go to:  
     [http://localhost/sql_injection_demo/](http://localhost/sql_injection_demo/)

5. **Try the Vulnerable Login**
   - On the login page, enter the following credentials:
     - **Username:** `' OR '1'='1' --`
     - **Password:** *(anything you wish)*
   - This demonstrates a classic SQL Injection vulnerability, allowing you to bypass authentication.

6. **You will see "Welcome Admin" displayed on the page.**

> **Warning:** This project is for educational purposes only. Do not use vulnerable code in production environments.
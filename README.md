
# General Information
---------------------

This is a PHP Chat based on **LE CHAT v.1.14**. An up-to-date copy of this script can be downloaded at [https://github.com/DanWin/le-chat-php](https://github.com/DanWin/le-chat-php).  
The original Perl **LE CHAT** script by **Lucky Eddie** can be downloaded at [this GitHub fork](https://github.com/virtualghetto/lechat). If you want to download my version, you can download it from (https://github.com/TheInternetGod/AnonChat).

If you add your own cool features or have a feature request, please tell me and I will add them if I like them.  
Please also let me know about any bugs you find in the code, so I can fix them.

### A note about the origin of the name "LE CHAT":
The "LE" in the name can be taken as "Lucky Eddie" or, since the script was meant to be lean and easy on server resources, as "Light Edition." It may even be the French word for "the" if you prefer. Translated from French to English, "le chat" means: "the cat."

---

## Features:
* Optimized for **Tor**  
* No **JavaScript** needed  
* **Cookies** supported, but not needed  
* **Captcha**  
* Multiple languages  
* Members and guests  
* **Waiting room** for guests  
* **Moderatoral approval** of new guests  
* Public, member, moderator, and admin-only chats  
* **Private messages**  
* Multi-line messages  
* Change **font**, **colour**, and **refresh rate** in profile settings  
* **Autologout** when inactive for some time  
* **Image embedding**  
* Notes for **admins** and **moderators**  
* Clone the chat to have multiple tabs  
* **Kick chatters**  
* Clean selected messages  
* Clean the whole room  
* **Plain text** message filter  
* **Regex** message filter  
* And more...

---

## Hosting Guide for **Anon Chat**

### Overview

**Anon Chat** is a simple, anonymous PHP chat application that allows users to chat without the need for registration using personal data. It supports multiple features like private messaging, image embedding, multi-language support, and more.

This guide will walk you through the steps of hosting **Anon Chat** on your local server (e.g., XAMPP) or a live web server.

---

## Requirements

Before you start, ensure that you have the following installed and configured:

### 1. **PHP Version**:  
- PHP 7.2 or higher is required for this application to work.

### 2. **Required PHP Extensions**:  
Make sure the following PHP extensions are enabled:

- `pdo_mysql`  
- `pdo_sqlite`  
- `intl`  
- `gettext`  
- `pcre`  
- `mbstring`  
- `date`

If you're unsure whether these extensions are enabled, you can check via your `phpinfo()` or in your hosting control panel.

### 3. **Database**:  
You can use **SQLite** or **MySQL** (recommended) for your database. Make sure the database extensions (`pdo_mysql` or `pdo_sqlite`) are enabled on your server.

---

## Setup Instructions

### Step 1: **Install a Local Server (Optional)**

To test the application locally, we recommend using a local server like **XAMPP**. Follow these steps if you want to test the application before hosting it live:

1. Download and install **XAMPP** from [here](https://www.apachefriends.org/index.html).
2. Start the **Apache** and **MySQL** services from the XAMPP control panel.
3. Place the **Anon Chat** files inside the `htdocs` directory in the XAMPP installation folder (C:\xampp\htdocs\).
4. Access the application and setup the superacmin account in your browser by going to (http://localhost/chat.php?action=setup).

### Step 2: **Configure the Database**

1. Edit the `chat.php` file to configure your database settings. This includes specifying whether you're using SQLite or MySQL.
2. If you're using **MySQL**, create a database (e.g., `anon_chat`) and ensure the user has proper permissions.
3. The application will automatically create the necessary tables once the connection is successful. You do not need to create tables manually.

### Step 3: **Test Database Connection**

- Open `test_db.php` in your browser.
- If the connection is successful, the tables will be automatically created. If there's an issue with the connection, ensure that the database credentials in `chat.php` are correct.

### Step 4: **Finalize Configuration**

Once the database is successfully connected and tables are created:

1. Ensure that the chat works correctly on your local server by accessing `chat.php` or `chat.php?action=setup` in the browser.
2. Test various features such as messaging, private chats, and image embedding to ensure everything is functioning as expected.

---

## Hosting the Application

Once you are familiar with the application and everything works locally, you can upload it to a live server. Follow these steps:

### Step 1: **Upload Files to Your Hosting Server**

Upload the entire **Anon Chat** folders and files to the **htdocs** or equivalent directory on your hosting platform.

### Step 2: **Database Configuration**

Configure the `chat.php` file with the correct database connection settings (hostname, username, password, and database name). This is the same as the configuration you did for the local server.

---

## Troubleshooting: .htaccess File

If the **chat.php** file is blocked by your hosting platform (even if the database connection is working fine), you might need to add a `.htaccess` file in the root directory of your application.

### Creating a `.htaccess` File

Create a file named `.htaccess` in the root directory where your `chat.php` file is located and add the following code:

```
# Enable URL rewriting
RewriteEngine On

# Redirect all requests to chat.php if they don't match an existing file or directory
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ chat.php?action=$1 [QSA,L]

# Prevent directory listing
Options -Indexes

# Set proper permissions for chat file access
<Files "chat.php">
    Order allow,deny
    Allow from all
</Files>

# Set the default charset to UTF-8
AddDefaultCharset UTF-8

# Handle PHP errors gracefully
ErrorDocument 404 /404.html
ErrorDocument 500 /500.html

```

## Conclusion

You are now ready to host and use **Anon Chat**! The application automatically creates the necessary database tables, so you only need to configure the database connection. If you run into any issues with server access, adding the `.htaccess` file should resolve the problem.

Feel free to reach out if you encounter any issues during setup.

Happy chatting! 😊

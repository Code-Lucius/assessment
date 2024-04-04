# assessment

# The Bank

The Bank is an app that helps users send and receive money in real time.

## Language Used

Laravel

## Usage

1. Clone the git repository

* Open your terminal or command prompt.
* Navigate to your desired project directory.
* Use the git clone command to clone the repository.

```
git clone <repository_url> <folder_name>
```
2. Install Composer Dependencies
* Laravel uses Composer for PHP dependency management.
* Navigate to your project folder.
* Run composer install to install PHP dependencies.

```
composer install
```
3. Generate an application key.

```
php artisan key:generate
```
4. Import assessment.sql database file provided in this repo to your local phpMyadmin

5. Set up .env file
* Duplicate the .env.example file and rename it to .env.
* Open the .env file and set your database connection details.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=assessment
DB_USERNAME=root
DB_PASSWORD=
```
6.  Start the Development Server
* Use Artisan and XAMPP to start the Laravel development server.

```
php artisan serve
```

7. Use postman to test endpoints.
* End point to get all users.
```
http://127.0.0.1:8000/get-users
```
* End point to get all wallets.
```
http://127.0.0.1:8000/get-wallets
```
* End point to get specific wallet by id.
Replace "id" in endpoint below with wallet Id.
```
http://127.0.0.1:8000/get-wallet/id
```
* End point to get send money from one wallet to another.
```
http://127.0.0.1:8000/send/senderid/receiverid/amount
```

Created By Emeka David. Enjoy!

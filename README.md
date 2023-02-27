## **Getting Started**

To get started with the application, follow these steps:

1. Clone the repository to your local machine:

```
git clone https://github.com/<username>/<repository-name>.git

```

1. Navigate to the project directory:

```
cd <repository-name>

```

1. Start the Laravel Sail environment:

```
./vendor/bin/sail up

```
## On windows

On windows you will need to use the docker backend or docker desktop alongside a distribution of Windows Subsystem for Linux 

Steps: 

Clone this repo

go to this repo’s directory

type the following command to start wsl 

```jsx
wsl
```

then use this command to start up

```
./vendor/bin/sail up -d 

```

1. Install Composer dependencies:

```
./vendor/bin/sail composer install

```

1. Create the .env file:

```
cp .env.example .env

```

1. Generate the Laravel application key:

```
./vendor/bin/sail artisan key:generate

```

1. Run the database migrations:

```
./vendor/bin/sail artisan migrate

```

1. Seed the database:

```
./vendor/bin/sail artisan db:seed

```

1. Access the application in your web browser at **[http://localhost](http://localhost/)**.

## **Notes**

- If you need to run additional Sail commands, you can prefix them with **`./vendor/bin/sail`**, for example: **`./vendor/bin/sail test`**.
- If you make changes to the database schema, you can update the database by running **`./vendor/bin/sail artisan migrate`**.
- If you need to stop the Sail environment, you can run **`./vendor/bin/sail down`**.
- For more information on using Laravel Sail, see the **[official documentation](https://laravel.com/docs/sail)**.
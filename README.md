# Wonde Student List!

Hi To everyone at Wonde, this is just a preamble about the test I have received. As opposed to test in different ways and it's all the different charges of the API give me. Are use the PHP client that one supplies, and I have created a simple test case response in the form of this test. I have amended the code a few times and made improvements.
I have kept it simple because of the complexities of the API has.
If I had more time, I wouldn't mind it authentication as well, but this is a simple test case and we're not focusing on authentication. Click some links and view the students that are in each class.


# Setup

You will need a Terminal to execute the commands below. I have used Laravel framework to help me speed up the development of test.

- You will need to have docker installed to complete the installation.
- You will also need to have composer installed in your system globally or locally.
- You will need PHP 7.2 or greater.



## 	Installation

Run The following commands in the source folder once you have downloaded the files from the git repo.

    composer install
Next make the Env file for laravel

    cp .env.example .env
    php artisan key:generate

Now we need to activate Laravel sail. To use the alias in the current terminal use:

    alias  sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
Next we need to install sail.

    php artisan  sail:install

To run sail use this command:

    **Without alias:**
    ./vendor/bin/sail up
    **With alias:**
    sail up

Please also add the correct database credentials into the **.env** file.

    DB_DATABASE=laravel

    DB_USERNAME=sail

    DB_PASSWORD=password
    

## 	Viewing the data
Go to `0.0.0.0` To now see the new Wonde teachers home page.
To view a teacher and their classes, click one of the teachers from the left hand pane and it will open a new window tab.
You can now view the class, subject name where applicable and each class has a table and you will need to scroll down.

## 	Future improvements

1. Authentication
2. Roles added and data privacy
3. Data pagination
4. Improvements to the API that allows data to be more streamlined.
5. Better Exception handling.

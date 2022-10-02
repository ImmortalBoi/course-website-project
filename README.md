<p align="center">
  <img src="https://github.com/ImmortalBoi/course-website-project/blob/main/readmeimgs/Online_Courses_Website_Project.png" />
</p>

<h1 align="center" style="color:#f95627;font-family:ver">Welcome to Project OCW</h1>

<h2 style="font-weight:bold"> Project Objective&#127919: </h2> 

### In this project we provide an insights on what modern online Courses web application would look like.

<hr>
<p align="center" style="font-size: 18px;font-weight:bold">&#128158Firstly, here is word from our team&#128158</p>

In our project, we were given the task to develop an interactive website for the purpose of providing Courses for our users to advance their knowledge of any topic that they find interesting. 

This project was developed via the usage of laravel's latest framework, although this project isn't complete in our standards and is still in beta version, we will continue working on the project and try to provide updates later on. 

We would like to thank RMZ tech for their continuous support and tutoring, we would specially like to thank Eng. Mohamed Gamal for his efforts in providing us the necessary tools and knowledge to work on this project.

<p style="text-align: center ;text-indent: 300px">-The PUA Team&#128150</p>
<hr>

## Team Members:

| Name | Github |
| ----- | ------------|
|Ahmed Hemida | [@Ahemida96](https://github.com/Ahemida96)
|Khaled Eldesoukey | [@ImmortalBoi](https://github.com/ImmortalBoi)
|Mohamed Ahmed | [@Devikaze](https://github.com/Devikaze)
|Habeba Ahmed| [@Habeba-Ahmed]()

<hr>
<a name="requirements"></a>
## Requirements:

Package | Version
--- | ---
[Node](https://nodejs.org/en/) | V14.19.1+
[Npm](https://nodejs.org/en/)  | V6.14.16+ 
[Composer](https://getcomposer.org/)  | V2.2.6+
[Php](https://www.php.net/)  | V8.0.17+
[Mysql](https://www.mysql.com/)  |V8.0.27+

<a name="installation"></a>
## Installation

> **Warning**
> Make sure to follow the requirements first.

Here is how you can run the project locally:
1. Clone this repo
    ```sh
    git clone https://github.com/ImmortalBoi/course-website-project
    ```

1. Go into the project root directory
    ```sh
    cd course-website-project
    ```

1. Copy .env.example file to .env file
    ```sh
    cp .env.example .env
    ```
1. Create database `course_website_project` (you can change database name)

1. Go to `.env` file 
    - set database credentials (`DB_DATABASE=course_website_project`, `DB_USERNAME=root`, `DB_PASSWORD=`)
    > Make sure to follow your database username and password

1. Install PHP dependencies 
    ```sh
    composer install
    ```

1. Generate key 
    ```sh
    php artisan key:generate
    ```
1. Link storage
    ```
    php artisan storage:link 
    ```
1. install front-end dependencies
    ```sh
    npm install && npm run dev
    ```

1. Run migration
    ```
    php artisan migrate
    ```
    
1. Run seeder
    ```
    php artisan db:seed --class=AdminSeeder
    ```
    this command will create an Admin user:
     > email: admin@gmail.com , password: password


1. Run server 
   
    ```sh
    php artisan serve
    ```  

1. Visit `localhost:8000` in your favorite browser.     

    > Make sure to follow your Laravel local Development Environment.


## Features

- Page Dark/Light mode activated via these button:

    ![dark](https://github.com/ImmortalBoi/course-website-project/blob/main/readmeimgs/moon.PNG) ![light](https://github.com/ImmortalBoi/course-website-project/blob/main/readmeimgs/sun.PNG)
- dark main page
    ![darkTheme](https://github.com/ImmortalBoi/course-website-project/blob/main/readmeimgs/darkscreen.png)
- light main page
    ![lightTheme](https://github.com/ImmortalBoi/course-website-project/blob/main/readmeimgs/lightscreen.png)

- Control Admin panel:

    ![courses](https://github.com/ImmortalBoi/course-website-project/blob/main/readmeimgs/courses.png)
    ![categories](https://github.com/ImmortalBoi/course-website-project/blob/main/readmeimgs/categories.png)

- Contact form:

    ![form](https://github.com/ImmortalBoi/course-website-project/blob/main/readmeimgs/contactform.png)



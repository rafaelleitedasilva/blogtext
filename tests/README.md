<h1>Documentation Test 📝 </h1>

Installation:

-    Git clone the project `git clone https://github.com/rafaelleitedasilva/blogtext.git`
-    Copy .env.example to .env file
-    Upload the project with `docker compose up -d --build`
-    Run `docker exec blogtext-app composer update`
     `docker exec blogtext-app php artisan key:generate`
     `docker exec blogtext-app php artisan migrate`

<h1> Tests </h1>
The testing environment uses its own sqlite database and .env.testing instead of the standard .env . You will need to create the tests utilizing phpUnit, the command is:

-    `php artisan make:test NameOfTest`

Some of the commands that you can use on TDD is:

-> assertTrue()
-> assertFalse()
-> assertEquals()
-> assertNull()
-> assertContains()
-> assertCount()
-> assertEmpty()
-> assertTrue() and assertFalse()

<h1>License 📄</h1>
This project is licensed under the GNU GENERAL PUBLIC LICENSE - see the LICENSE.md file for details.

<h1>Contributing 🤝</h1>
Contributions are welcome!
To contribute to this project, please fork this repository and submit a pull request.

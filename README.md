# Coding Dojo Template

Use this repository as a template for coding dojo project.

# How to run it?

Fork given repository to your account and clone it locally. 
Then download composer, install dependencies and run tests. 
All steps are described below.

Create a fork of this repository (upper right corner on GitHub).

- Clone the repository to your machine.
```
$ git clone <your repository fork url> ./coding-dojo
```

- Enter folder with cloned code
```
$ cd coding-dojo
```      

- Download composer (use browser if you don't have curl or alternative) 
and make sure it's located in project folder.
```
~/coding-dojo $ curl https://getcomposer.org/composer.phar --output composer.phar
```

- Install dependencies with composer
```
~/coding-dojo $ php composer.phar install
```

- Try running phpunit and make sure you have successful output (like below).
Output doesn't have to be exactly the same, what matters is the last line.
```
~/coding-dojo $ ./vendor/bin/phpunit tests                               
PHPUnit 8.4-dev by Sebastian Bergmann and contributors.

Runtime:       PHP 7.3.9 with Xdebug 2.7.2
Configuration: /home/pawel/coding-dojo-template/phpunit.xml

.                                                                   1 / 1 (100%)

Time: 26 ms, Memory: 4.00 MB

OK (1 test, 1 assertion)
```

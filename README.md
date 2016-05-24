angular-symfony-master
===============

Project Bootstrap for an angularJS + Symfony webservices project + sonata admin bundle to hundle website dashboard

Introduction
------------

This project is a template application with secured communication via a RestFul API between the client part with AngularJS and the server part with Symfony2 powered by sonata admin bundle to handle all CRUDS realated to the webapp

Installation
------------

Clone the project :

	git clone https://github.com/thaer899/angular-symfony-master angular-symfony-master

Update packages :

	cd angular-symfony-master
	composer.phar self-update
	composer.phar install

Update schemas (FOSUserBundle) :

 	php app/console doctrine:schema:create

Create and activate user :

	php app/console fos:user:create
	php app/console fos:user:activate

Link project to your webserver and access it :

	ln -snf ./ /var/www/html/angular-symfony-master
	firefox http://localhost/angular-symfony-master/ &

Authentication system (FOSUserBundle)
---------------------

Admin dashboard system (SonataAdminBundle)
-----------------------




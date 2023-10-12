# test-technique-symfony-2023

The project is made with Docker that provides the MariaDB and Symfony image.

This project is a demonstration of a simple site where a user can create and log into an account to access a protected page.

To launch the project, go into the repo and play this line :
``docker-compose up``

It should launch the project at this address : http://localhost:8000

In case you need to access the Database, just go into the docker console of MariaDB and use this line :
``mariadb -h localhost -u admin db_users`` 
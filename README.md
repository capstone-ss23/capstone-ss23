# Capstone Spring 2023
## Computer Science & Engineering -- Michigan State University

### Initial setup
* Clone repo with `git clone git@github.com:capstone-ss23/capstone-ss23.git`
    - If this fails, make sure you have [set up an SSH key to work with GitHub.](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/about-ssh)
* Copy `.env`, `auth.json`, and `site.php` to the root of the repo.
* Start the Docker containers in the background (will take a while the first time) `sudo docker-compose up --detach`
    - Note: On Windows, make sure you have [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed, and run this and all other commands without `sudo`.
* Set up the website with composer, if you haven't already. Since it is available inside the Docker container, you do not need to install it. Simply run `sudo docker compose exec server /var/www/capstone-ss23/install_deps.sh`.
* Navigate to http://localhost:8081 and make sure PHPMyAdmin works
* Navigate to http://localhost:8080 and make sure the site loads
    - Warning: the site sets a cookie when you attempt to log in. Since no tables have been set up, do NOT log in yet. 
* Create all tables by navigating to http://localhost:8080/cl/setup/tables
* Log in with username `cbowen` and empty password
* Create a new user for yourself (Course Console -> Management -> Users -> Add User)
* Log out and log back in as new user

### Starting the server
Run `sudo docker-compose up --detach` from the repo root to run Docker in the background. Run without `--detach` to view the logs directly (useful for debugging).

### Killing the server
If you need to kill the servers, run `sudo docker-compose down`. The database will remain across reboots.

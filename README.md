# Capstone Spring 2023
## Computer Science & Engineering -- Michigan State University

### Initial setup
* Clone repo with `git clone git@github.com:capstone-ss23/capstone-ss23.git`
    - If this fails, make sure you have [set up an SSH key to work with GitHub.](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/about-ssh)
* Copy `.env`, `auth.json`, and `site.php` to the root of the repo.
* Run composer

```{bash}
composer --prefer-install=source install
composer update
composer run cl-installer
```

* Start the Docker containers (will take a while the first time)
    - `sudo docker-compose up`

* Navigate to http://localhost:8081 and make sure PHPMyAdmin works
* Navigate to http://localhost:8080 and make sure the site works
* Create all tables by navigating to http://localhost:8080/cl/setup/tables
* Log in with username `cbowen` and empty password
* Create a new user for yourself (Course Console -> Management -> Users -> Add User)
* Log out and log back in as new user

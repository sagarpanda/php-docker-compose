# PHP Docker Compose

Run php in docker with mysql and adminer

### Initial

```sh
mkdir mydql-data
```

### Run

```sh
docker compose up
# Apache server is running at 9000 port
# Adminer is running at 8080 port

docker ps -a
# Show process status of all docker (both stopped and running) containers

docker rm <APACHE_CONTAINER_ID>
# To delete a container
# Run the above cmd if you come across the below error
# Error response from daemon: Duplicate mount point: /var/www/html
```

### Adminer

- Use `root` as userid and `pass` as password to login to adminer
- Create a database `testdb`
- Create a table `users` with two columns `name` and `city`

# Ports-like-2-mysql-projects

To avoid the error of 3306 colission You can use a different port.
The tricky part is which ports to use when to connect to it and from where.

```yaml
lm1-mysql:
        container_name: lm1-mysql
        image: 'mariadb:10.3.22-bionic'
        restart: unless-stopped
        ports:
            - '3316:3306'
        volumes:
            - type: bind
              source: ./db/mysql
              target: /var/lib/mysql
            - type: bind
              source: ./db/docker-entrypoint-initdb.d
              target: /docker-entrypoint-initdb.d
        environment:
            TZ: Europe/Riga
            LANG: en_US.UTF-8
            MYSQL_ROOT_PASSWORD: $MYSQL_PASSWORD
            MYSQL_USER: lm1-user
            MYSQL_PASSWORD: $MYSQL_PASSWORD
            INIT_TOKUDB: 1
            INIT_ROCKSDB: 0
        networks:
            lm1-net:
                ipv4_address: 172.71.3.13
        command: '--sql-mode= --server-id=1 --log-bin=mysql-bin --expire_logs_days=3'
    lm1-pma:
        container_name: lm1-pma
        image: 'phpmyadmin/phpmyadmin'
        restart: always
        depends_on:
        - lm1-mysql
        environment:
            MYSQL_ROOT_PASSWORD: $MYSQL_PASSWORD
            MYSQL_USER: lm1-user
            MYSQL_PASSWORD: $MYSQL_PASSWORD
            PMA_HOST: lm1-mysql  
            PMA_PORT: 3306o

```

In the example above the mysql 3306 port is changed to 3316.

## So which one to set in PMA or API to DB? Is it 3306 or 3316?

The answer is **3306** - because it is the port that works inside the container network.
**3316** can be used to connect from the machine that hosts it.   

### This how it looks on the host machine

### And PMA can open MYSQL when the port is 3306 when outer port is 3316




## How to check used ports?

```shell
 netstat -tulpn | grep LISTEN
```


# Generate a local test SSL certificate for https

## Article that helped
* [How To Create an SSL Certificate on Nginx for Ubuntu 14.04](https://www.digitalocean.com/community/tutorials/how-to-create-an-ssl-certificate-on-nginx-for-ubuntu-14-04).

## Instructions

`sudo mkdir /etc/nginx/ssl`

`sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt`
			
```
Generating a 2048 bit RSA private key			
........................................+++			
..........................................................................+++			
writing new private key to '/etc/nginx/ssl/nginx.key'			
-----			
You are about to be asked to enter information that will be incorporated			
into your certificate request.			
What you are about to enter is what is called a Distinguished Name or a DN.			
There are quite a few fields but you can leave some blank			
For some fields there will be a default value,			
If you enter '.', the field will be left blank.			
-----			
Country Name (2 letter code) [AU]:LV			
State or Province Name (full name) [Some-State]:			
Locality Name (eg, city) []:Riga			
Organization Name (eg, company) [Internet Widgits Pty Ltd]:mysite.local
Organizational Unit Name (eg, section) []:IT			
Common Name (e.g. server FQDN or YOUR name) []:mysite.local
Email Address []:me@mysite.local
```

## Set the path to the certs in your site's NGINX vhost

```		
listen 443 ssl;			
ssl_certificate /etc/nginx/ssl/nginx.crt;			
ssl_certificate_key /etc/nginx/ssl/nginx.key;
```

## Restart NGINX
`sudo systemctl restart nginx.service`
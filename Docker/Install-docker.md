# 1. Install docker

* [Digitalocean: How To Install and Use Docker on Ubuntu 16.04.](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-16-04)
* [Docker: Install on ubuntu using repo.](https://docs.docker.com/install/linux/docker-ce/ubuntu/#install-using-the-repository)

```shell
sudo apt-get install apt-transport-https ca-certificates curl software-properties-common -y
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
sudo apt-get install docker-ce -y
```

## [Manage Docker as a non-root user](https://docs.docker.com/install/linux/linux-postinstall/#manage-docker-as-a-non-root-user)

```shell
sudo groupadd docker
sudo usermod -aG docker $USER
```

Log out and log back in so that your group membership is re-evaluated.

### Verify

```shell
docker run hello-world
```

> Result:
> Hello from Docker! This message shows that your installation appears to be working correctly.

## [Configure Docker to start on boot](https://docs.docker.com/install/linux/linux-postinstall/#configure-docker-to-start-on-boot)

```shell
sudo systemctl enable docker
```

> Result:
> Synchronizing state of docker.service with SysV init with /lib/systemd/systemd-sysv-install...
> Executing /lib/systemd/systemd-sysv-install enable docker
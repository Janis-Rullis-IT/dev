# 1. Install docker

* [Digitalocean: How To Install and Use Docker on Ubuntu 16.04.](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-16-04)
* [Docker: Install on ubuntu using repo.](https://docs.docker.com/install/linux/docker-ce/ubuntu/#install-using-the-repository)

```shell
sudo apt-get install apt-transport-https ca-certificates curl software-properties-common -y
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
sudo apt-get update
apt-cache policy docker-ce
```

```
docker-ce:
  Installed: (none)
  Candidate: 5:19.03.13~3-0~ubuntu-focal
  Version table:
     5:19.03.13~3-0~ubuntu-focal 500
        500 https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
```

```shell
sudo apt-get install docker-ce -y
sudo systemctl status docker
```

```
● docker.service - Docker Application Container Engine
     Loaded: loaded (/lib/systemd/system/docker.service; enabled; vendor preset>
     Active: active (running) since Tue 2020-09-22 14:31:43 EEST; 12s ago
TriggeredBy: ● docker.socket
       Docs: https://docs.docker.com
   Main PID: 43390 (dockerd)
```

## [Manage Docker as a non-root user](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04)

```shell
sudo usermod -aG docker ${USER}
su - ${USER}
id -nG
```
> j adm cdrom sudo dip plugdev lpadmin lxd sambashare docker


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

# Install AWS tools

* [Installing the AWS Command Line Interface.](https://docs.aws.amazon.com/cli/latest/userguide/installing.html)

```shell
sudo apt install python-pip -y
pip install awscli --upgrade --user
```
> Result: Successfully installed PyYAML awscli ...

Verify

```shell
aws --version
```

> aws-cli/1.15.10 Python/2.7.12 Linux/4.13.0-39-generic botocore/1.10.10

## [Config](https://docs.aws.amazon.com/cli/latest/userguide/cli-chap-getting-started.html)

```shell
aws configure
```

> AWS Secret Access Key [None]: ...
> Default region name [None]: eu-west-1
> Default output format [None]: json

## [Log into AWS ECR](https://docs.aws.amazon.com/AmazonECR/latest/userguide/ECR_AWSCLI.html)

```shell
aws ecr get-login --no-include-email --region eu-west-1
```

> docker login ..... amazonaws.com


### Execute
In terminal the code received from the previous command.

```shell
docker login ... amazonaws.com
```

> Login Succeeded

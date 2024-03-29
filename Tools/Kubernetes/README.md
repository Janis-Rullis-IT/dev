# Kubernetes

## [Install `kubectl`](https://docs.aws.amazon.com/eks/latest/userguide/install-kubectl.html)

```shell
cd ~
curl -o kubectl https://amazon-eks.s3-us-west-2.amazonaws.com/1.21.2/2021-07-05/bin/linux/amd64/kubectl
chmod +x ./kubectl
mkdir -p $HOME/bin && cp ./kubectl $HOME/bin/kubectl && export PATH=$PATH:$HOME/bin
echo 'export PATH=$PATH:$HOME/bin' >> ~/.bashrc
kubectl version --short --client
```
> Client Version: v1.21.2-13+d2965f0db10712

## [Install IAM authenticator](https://docs.aws.amazon.com/eks/latest/userguide/install-aws-iam-authenticator.html)

```shell
cd ~
curl -o aws-iam-authenticator https://amazon-eks.s3-us-west-2.amazonaws.com/1.21.2/2021-07-05/bin/linux/amd64/aws-iam-authenticator
chmod +x ./aws-iam-authenticator
mkdir -p $HOME/bin && cp ./aws-iam-authenticator $HOME/bin/aws-iam-authenticator && export PATH=$PATH:$HOME/bin
echo 'export PATH=$PATH:$HOME/bin' >> ~/.bashrc
aws-iam-authenticator help
```

## Auth with `export` credentials

* Copy them in term.
* Update the config with `aws eks --region eu-central-1 update-kubeconfig --name INSTANCE_NAME`.

## List

```shell
kubectl get svc
kubectl get pods
```

## Info

```shell
kubectl api-resources
kubectl describe pods POD_NAME
kubectl logs POD_NAME
```

## Connect

```shell
kubectl exec -it POD_NAME -c app /bin/bash
```

## Copy

### From the remote instance

```shell
kubectl cp INSTANCE_NAME:PATH_ON_THE_INSTANCE LOCAL_PATH
kubectl cp yolo-123:/var/www/apple.txt apple.txt
```

## Multiple clusters / contexts in 1 config

```shell
kubectl config get-contexts
kubectl config use-context OTHER_CONTEXT
```

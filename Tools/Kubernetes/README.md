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

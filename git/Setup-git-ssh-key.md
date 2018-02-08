# Fix `Permission denied (publickey).` when cloning from the github

One of the cases when this can happen is when You are trying to clone a repo
from github using SSH but haven't added Your SSH key to your github account.

![image](/images/fix-permission-denied-publickey/error.png)

## Solution - add the SSH key

## Check if You have it

`ls ~/.ssh/`

There should be the `id_rsa.pub` file.

## Generate the SSH key if You don't have it
In my case there is only `known_hosts` file. 

![image](/images/fix-permission-denied-publickey/ls-ssh.png)

So we need to generate the key.

`ssh-keygen`

![image](/images/fix-permission-denied-publickey/ssh-keygen.png)

## Get the SSH key

`cat ~/.ssh/id_rsa.pub`

This will print out a long string that starts with `ssh-rsa` and ends with
the name of Your computer and the username which in my case is `j@x16`.

![image](/images/fix-permission-denied-publickey/cat-id-rsa-pub.png)

Copy this string exactly from the start of the `ssh-rsa` till the end of `j@x16`.

## Add the key to Your github account
* Go to [https://github.com/settings/ssh/new](https://github.com/settings/ssh/new).
* In the `title` field add something to identify from which computer and account
this ssh comes.
* Paste the string into the `key` field. Remove any trailing spaces or newlines.
* Submit.

## That's it!
Now you can clone the repo without the error.

## FAQ

### Q: Is it OK to re-generate the id_rsa.pub key multiple times?
A: Yes, no problem. Just repeat steps beginning with "Generate the SSH key if You don't have it" . Just choose 'y' when the command will ask if you want to overwrite the file.
If `sign_and_send_pubkey: signing failed: agent refused operation` error happens then you need to reboot Your computer. At least that helped for me.

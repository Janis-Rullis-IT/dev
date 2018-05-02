# Setup and configure Netbeans

## Install
* [websiteforstudents.com: HOW TO INSTALL NETBEANS ON UBUNTU 16.04 / 17.10 / 18.04 WITH ORACLE JDK 8 SUPPORT](https://websiteforstudents.com/how-to-install-netbeans-on-ubuntu-16-04-17-10-18-04/)

### INSTALL ORACLE JAVA JDK 8

```shell
sudo add-apt-repository ppa:webupd8team/java -y
sudo apt update
sudo apt install oracle-java8-set-default -y
javac -version
```

> javac 1.8.0_171

* [Download the latest stable version.](http://bits.netbeans.org/download)

### Launch

```shell
chmod a+x netbeans-t.....
./netbeans-t.....
```

## Enable dark theme
* Tools/Plugins/Available plugins/Darcula LAF theme.

## Add MD support
* Markdown Support https://github.com/madflow/flow-netbeans-markdown

## Add Bash / C++
* https://stackoverflow.com/a/1641335
* C++ Plugin.

## Enable [PSR-2 formatting](http://www.php-fig.org/psr/psr-2/) in Netbeans 8.2
* [Download PSR auto-formatting for NetBeans.](https://github.com/allebb/netbeans-psr-formatting#installation)
* Tools/Options/Import
* Check All.

## Vue.js syntax highlight

### [Associate with HTML (stackoverflow.com)](https://stackoverflow.com/a/43216290)

* Options/Miscellaneous/Files
* New File extension -vue.
* Associated File - HTML Files (text/html).

### [Avoid some warnings (blogs.oracle.com)](https://blogs.oracle.com/geertjan/custom-elements-attributes-in-html-in-netbeans-ide)

Put into netbeans/customs.js

```json
{ "elements": {}, "attributes": { "v-if": {}, "@submit.prevent": { "context": "form" }, "@click": {}, "@keyup.enter": {}, "scoped": { "context": "style" }, "v-for": {}, "v-model": {} } }
```

## Load stored settings
* [Downlaod](nb-settings.zip)
* Tools/Options/Import.

## Adjust Tools/Editor/Formatting
* Select 'All Languages' in the 'Language' selector.
* Un-check 'Expand Tabs to Spaces'.
* Set Tab Size to 4 (2 for work).

![image](images/editor-formatting.png)

## Adjust Tools/Fonts & Colors
* Select 'All Languages' in the 'Language' selector.
* Set 'Monospaced 16 Bold'.

![image](images/fonts-and-colors.png)

## Adjust Tools/Keymap

### Set 'Ctrl + Shift + D' for Delete line
* Search for 'Delete'.
* Select 'Delete Line' row.
* Press 'Ctrl + Shift + D'.

![image](images/keymap.png)

## Export settings /Tools/Export
![image](images/export.png)


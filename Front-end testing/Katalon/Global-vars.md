# [Katalon global variables](https://docs.katalon.com/display/KD/Design+a+Test+Suite#DesignaTestSuite-VariableBinding)

## Goal

Define URL, account, timeout and use it everywhere. Easy to change in one place.

## Introduction

Katalon above v.1.3 puts Global Variables under Execution Profiles which works just like .env files for specific environments like PROD, DEV or TESTING.

## Setup

* Left-click on Profiles in the left side-bar / New / Execution Profile.
* Give the Profile / .ENV file a name like 'DEV'.
* In the table click 'Add'.
* Give the variable name and value like 'username', 'dev.admin' and click OK.
* Then go to Your test case and find the username input row.
* Double-click on it, select Value Type 'Global Variable' and for the Value choose from the select (start writing 'user' and it will be suggested).

### Variables

In the script tab variable code looks like this ` GlobalVariable.username`.

### You can also copy an existing profile

## Select the desired environment

At the top right corner there is dropdown. By the default there is selected 'default'.

![images/Global-vars.png](images/Global-vars.png)
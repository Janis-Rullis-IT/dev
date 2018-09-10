#!/bin/bash
# Revert to the latest commit, after traveling through commits.
# ./reset.sh

cd ..
git checkout package-lock.json
git checkout version.txt
git checkout master

# Open a graphic interface to view the commit history. Here you can
# collect the desired commit's hash, to which you want to switch.
gitk

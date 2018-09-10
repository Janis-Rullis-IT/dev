#!/bin/bash
# Switch to a specific commit and re-build the code.
# ./switch.sh COMMIT_HASH 
# To reset to the latest commit use ./reset

cd ..
git checkout package-lock.json
git checkout version.txt
git checkout $1
docker exec -it CONTAINER bash -c "cd /var/www && npm install && npm run build"

git add *
git commit -a -m 'update'
git push origin master
ssh derek@l1 "cd /srv/http/lucid/ && git pull"

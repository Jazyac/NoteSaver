git add .

echo 'Enter the commit message:'
read commitMessage

git commit -m "$commitMessage"

git push heroku master
git push github master
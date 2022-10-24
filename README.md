# phpMyAdmin themes

Various contributed themes.

## Download

Themes can be downloaded at <https://www.phpmyadmin.net/themes/>.


## How to contribute

### Get started

- Go to the [phpmyadmin/themes](https://github.com/phpmyadmin/themes) repository
- "Fork" the repository (see: [GitHub tutorial on how to fork a repository](https://docs.github.com/en/get-started/quickstart/fork-a-repo#forking-a-repository))
- "Clone" your forked repository locally (see: [GitHub tutorial on how to clone a repository](https://docs.github.com/en/get-started/quickstart/fork-a-repo#cloning-your-forked-repository))

### Updating/Creating themes

If you already have the theme in your local phpMyAdmin folder, then delete the theme folder here and replace it with your local version (folder).

For example:

```sh
rm -r /home/username/phpmyadmin/themes/mytheme
cp -r /var/www/phpMyAdmin/themes/mytheme /home/username/phpmyadmin/themes/
```

#### Update the version

Update "version" in `/home/username/phpmyadmin/themes/mytheme/theme.json` with the new version (of your theme).

#### Create a branch and commit the changes

Learn more about what is a commit: [here](https://github.com/git-guides/git-commit)

For example:

```sh
# Go to the repository folder (your fork)
cd /home/username/phpmyadmin/themes/
# Create a new branch for your changes
git checkout -b mytheme-version-x.y.z
# Add your changes to git
git add ./mytheme
# Commit them
git commit -m "[mytheme] version x.y.z"
```

#### Push the changes and open a pull-request

Make the push:
```sh
git push
```

And then open a new pull-request: https://github.com/phpmyadmin/themes/pulls

## Releasing

There is a script `create-release.sh` which creates a zip file with the theme and optionally
tags the git repository and uploads it to the phpMyAdmin website.

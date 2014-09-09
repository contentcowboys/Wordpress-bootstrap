# Wp-Bootstrap

This is an default starter Wordpress bootstrap to quickly start and setup an Wordpress project.

## First things first

When you installed this Wordpress there are a couple of things you should do:

1. change user password and username (! Very Important !)

## Default login
username: IAmRootUser
password: VmzCgPvjHXNNpQa

## CHMOD settings

Change Chmod settings ( make sure the apache owner is correct on teh first line )

```dos
chown www-data:www-data -R *          # Let apache be owner
find . -type d -exec chmod 755 {} \;  # Change directory permissions rwxr-xr-x
find . -type f -exec chmod 644 {} \;  # Change file permissions rw-r--r--
chmod 644 .htaccess
```

file / folder         | Setting
-------------         |:-------------:
Root /                | 0755
.htaccess             | 0644
wp-admin/index.php    | 0644
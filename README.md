# wordpress-ansible

Ansible project for Wordpress on Ubuntu 20.04 on Oracle Cloud Infrastructure

# Pre-reqs

Install these ansible galaxy modules:

 - community.mysql - https://galaxy.ansible.com/community/mysql
 - community.general - https://galaxy.ansible.com/community/general

# Steps to configure

 1. Configure nginx config file: example.com (replace "example.com" with your domain).
 2. Rename the example.com file to your domain name.
 3. Replace "example.com" with your domain name in the "main.yml" file.
 4. Update the password field in the "wp-config.php" file
 5. Replace the salts in the "wp-config.php" with your own from here: https://api.wordpress.org/secret-key/1.1/salt/
 6. Update the password fields in "hosts.ini", the "wordpressuser" password should match the "wp-config.php" file.
 7. Update the "hosts.ini" file with your server IP.

# Run time

Run "ansible-playbook main.yml -b" from your cloned repo.
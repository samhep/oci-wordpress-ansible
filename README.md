# wordpress-ansible

Ansible project for Wordpress on Ubuntu 20.04 on Oracle Cloud Infrastructure

# Steps to configure

 1. Configure nginx config file: example.com (replace "example.com" with your domain).
 2. Rename the example.com file to your domain name.
 3. Update the password field in the "wp-config.php" file.
 4. Update the password fields in "hosts.ini", the "wordpressuser" password should match the "wp-config.php" file.
 5. Update the "hosts.ini" file with your server IP.

# Run time

Run "ansible-playbook main.yml -b" from your cloned repo.
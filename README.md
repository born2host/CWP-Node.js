# CWP-Node.js
https://www.born2host.com

CWP Node.js Installer

This installer lets you choose Node.js version 6 or 8 and then install it on your server. 

When you need to update Node.js it\`s done by "yum -y update".

How to install 

Step 1: Open /usr/local/cwpsrv/htdocs/resources/admin/include/3rdparty.php and put inside:

Node.js Installer 

Step 2: Download nodejs.php and put it inside: /usr/local/cwpsrv/htdocs/resources/admin/modules/ 

Step 3: Navigate your web browser to http://your-domain.tld:2030/, log in with root, go to Developers Menu -> Node.js Installer, choose the version you like of Node.js and press "Install Node.js". 

Step 4: Check Node.js and NPM versions: Node.js: node -v NPM: npm -v 

Step 5: Have fun!

# Slim PHP MVC Framework

Experimenting MVC web application with PHP micro framework Slim.


- - -


### How to install:

1. Clone the repo into root directory of server.
2. Go into directory
3. Install the Slim Framework `composer require slim/slim:3.*`


- - -

# About Slim Framework


## Installation

To install slim use composer. Go into directory and:

`composer require slim/slim:3.*`

| or |
 
`composer create-project slim/slim-skeleton [your-directory-name] 3`


Slim 3 Documentation: `https://www.slimframework.com/docs/v3/#welcome`


- - -


## Apache HTTP Server

How to change Apache's root directory:

- 1.Open the file httpd.conf from the location `apache/conf`
- 2.Search for DocumentRoot and update it to your new directory  ` DocumentRoot "path/to/root" `
- 3.Then find the Directory and Update it to new location like this ` <Directory "D:/www"> `

restart the Apache server.

More details:

` https://www.slimframework.com/docs/v3/start/web-servers.html `

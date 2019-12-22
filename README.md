![website-logo](website_logo.png)
<br/><br/>
# KnowledgeHUB : A vulnerable education portal
This project's **sole purpose** is for website security testing keeping in mind the [OWASP Top 10](https://www.cloudflare.com/learning/security/threats/owasp-top-10/).<br/>
The major web vulnerabilities in this project are :<br/>
1) SQL Injection<br/>
2) Stored XSS<br/>
3) Shell Uploading<br/>
4) Clickjacking<br/>
5) Business Logic<br/>
6) Cross Site Request Forgery (CSRF)<br/>

# Languages<br/>

![standard-readme compliant](https://img.shields.io/badge/frontend-HTML5-orange.svg?style=flat-square)
![standard-readme compliant](https://img.shields.io/badge/frontend-CSS-blue.svg?style=flat-square)
![standard-readme compliant](https://img.shields.io/badge/frontend-Bootstrap-blueviolet.svg?style=flat-square)
![standard-readme compliant](https://img.shields.io/badge/frontend-Javascript-yellow.svg?style=flat-square)<br/>
![standard-readme compliant](https://img.shields.io/badge/backend-PHP-906EDA.svg?style=flat-square)
![standard-readme compliant](https://img.shields.io/badge/backend-Ajax-0E8AEE.svg?style=flat-square)
![standard-readme compliant](https://img.shields.io/badge/backend-SQL-F0BD2C.svg?style=flat-square)<br/>
# Objective<br/>
The project signifies the importance of website security in today's world as it emphasizes on the major attacks that usually occur accross the world. It contains intentional web vulnerabilities and the methods of securing it are present in the code itself. <br/>
# Requirements<br/>
#### 1) Code Editor<br/>
Today we are surrounded by several code editors. If you use Mac, I strongly recommend [Sublime Text](https://www.sublimetext.com/). <br/>
For Windows and Linux users, [Visual Studio Code](https://code.visualstudio.com/) is one of the best.<br/>
#### 2) Browser<br/>
People often use [Chrome](https://www.google.com/chrome/); however, for web development and security testing; I recommend [Firefox](https://www.mozilla.org/en-US/firefox/new/).<br/>
#### 3) Server Hosting
If you are excellent with [NodeJS](https://nodejs.org/en/), then you can easily make server at localhost. But, a much faster and easier way to do this is by using [XAMPP](https://www.apachefriends.org/download.html). This project was created using XAMPP.
#### 4) Vulnerability Tester
Since this project revolves around web testing, use of a vulnerability software is helpful. I recommend [Burp Suite](https://portswigger.net/burp) for this task. <br/>
# Extra Requirements<br/>
### Firefox Browser<br/>
Type 'about:config' in your search bar. After the advance settings tab open, goto 'network.proxy.allow_hijacking_localhost'. If it is set to FALSE, double click on it to make it TRUE.<br/>
### Database Creation<br/>
If you are using XAMPP, then you should first open the control tab and start Apache and MySQL. After this, Go to your browser and type in 'localhost'. You will be greeted by XAMPP Welcome Page. On top right corner, you will see 'phpmyadmin'. Go there and create a new database called 'studyportal'. After creating it, look carefully for 'Import' option on the dashboard of the database. Click on it and choose the file to be uploaded. In the ZIP folder of my project, I have included a SQL file named 'studyportal.sql' . Upload this file and your database is ready. Do the similar steps for another database named 'hacking' and upload 'hacking.sql' .<br/>
### Burp Suite Setup
For setting up Burp Suite, [Click Here](https://support.portswigger.net/customer/portal/articles/1783055-configuring-your-browser-to-work-with-burp). Also, to download Burp Suite Certificate, [Click Here](http://burp/). If you are unable to access webpage, then wait for some time and access it later.<br/>

# Screenshots

# License
[Apache Version 2.0](https://www.apache.org/licenses/LICENSE-2.0)



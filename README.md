# Installation Instructions

## This document will only guide you to setup the CTF in a windows environment

```bash
1. Install XAMPP and composer on windows 
```
```bash
2. Go to the htdocs folder and run 'git clone https://github.com/niranRameshPeiris/neurone-ctf.git'
```
```bash
3. cd into the 'neurone-ctf' folder and then execute 'composer install' command 
```
```bash
4. Go to the drive where you have installed your windows Ex - "C:\Windows\System32\drivers\etc"
```
```bash
5. open 'hosts' file with notepad++
```
```bash
6. Insert '127.0.0.1 neurone' line to the file and then save it 
```
```bash
7. open 'xampp\apache\conf\extra' folder 
```
```bash
8. open 'httpd-vhosts.conf' file
```
```bash
9. Add below code and save the file
```
```bash
<VirtualHost neurone:80>
    ServerAdmin neurone
    DocumentRoot "....path to xamp...../xampp/htdocs/neurone-ctf/public"
    ServerName neurone
    ErrorLog "logs/neurone-error.log"
    CustomLog "logs/neurone-access.log" common
</VirtualHost>
```
```bash
10. restart apache service
```
```bash
11. go to this link 'http://neurone/'
```

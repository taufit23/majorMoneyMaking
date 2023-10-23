{
"name": "majorMoneyMaking",
"host": "ftp.galerykreatif.com",
"protocol": "ftp",
"port": 21,
"username": "gale3130",
"password": "Tauf1t23!",
"remotePath": "/public_html/",
"uploadOnSave": false,
"useTempFile": false,
"openSsh": false,
"watcher": {
"files": "\*.{js,css,php}",
"autoUpload": true,
"autoDelete": false
},

"profiles": {
"dev": {
"host": "dev-host",
"remotePath": "/",
"uploadOnSave": true
},
"prod": {
"host": "prod-host",
"remotePath": "/"
}
},
"defaultProfile": "dev"

}

@echo off

rem call C:\xampp\xampp_shell.bat
start /B "" URL.URL &

start symfony server:start --no-tls --port=8000

exit
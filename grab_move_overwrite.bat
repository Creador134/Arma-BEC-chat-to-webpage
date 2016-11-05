@echo off
:start
timeout 120
FOR /F %%I IN ('DIR *.log* /B /O:-D') DO COPY %%I C:\xampp\htdocs\chat\chat.txt /Y & GOTO :start
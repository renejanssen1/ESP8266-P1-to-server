# P1-Meter-ESP8266
Software for the ESP2866 Wemos D1 that sends P1 smart meter data to a Server (with CRC checking)

### Installation instrucions
- Make sure that your ESP8266 can be flashed from the Arduino environnment: https://github.com/esp8266/Arduino
- Place the .php files on your server, create a database and import the .sql file. Open the connect.php and fill this with your credentials.
- Place all other files from this repository in a directory. Open the .ino file.
- Adjust WIFI, serverIP settings at the top of the file
- Compile and flash

### Connection of the P1 meter to the ESP8266
A nice and good working smartmeter can be found on http://enri.nl/pcb/

![p1-v2](https://user-images.githubusercontent.com/94928681/184541638-d1a8d923-88c5-4a0c-bc29-48b04a21f8dd.jpg)

### Website.
When everything goes right then it looks like this, even on your mobile.

![IMG_0047](https://user-images.githubusercontent.com/94928681/184691546-63a0e2b1-2bc3-48cc-b7cf-aa862ab5e998.PNG)

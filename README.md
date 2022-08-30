# P1-Meter-ESP8266
Software for the ESP2866 Wemos D1 that sends P1 smart meter data to a Server using a CronAlarm at 5 minutes

### Installation ESP
- script works with the latest boardmanager ESP8266.
- add the libary Cronalarms from Martin Laclaustra.
- The Cron in the script is set to repeat every 5 minutes.

### If your server has an .htacces en .htpasswd file
- go to this website https://www.base64encode.org/ 
- Enter your name and password, something like this "username:password" Please notice the colon ":" in between username and password.
- Hit the Encode button and write down your code.

![image](https://user-images.githubusercontent.com/94928681/187403982-59c8a2d3-2855-401a-9871-f20d5e2c809f.png)

Scrol in the ino file to this row
```
		clientGet.println("Authorization: Basic code=");
```
and change it with your own code
```
		clientGet.println("Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=");
```


### Connection of the P1 meter to the ESP8266
A nice and good working smartmeter can be found on http://enri.nl/pcb/

![p1-v2](https://user-images.githubusercontent.com/94928681/184541638-d1a8d923-88c5-4a0c-bc29-48b04a21f8dd.jpg)

### Website.
When everything goes right then it looks like this, even on your mobile.

![IMG_0047](https://user-images.githubusercontent.com/94928681/184691546-63a0e2b1-2bc3-48cc-b7cf-aa862ab5e998.PNG)

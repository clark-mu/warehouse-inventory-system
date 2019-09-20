## Oswa - inv


#Warehouse inventory system
- - - -

The application was initially created by **Siamon Hasan**, useing [php](http:php.net), [mysql](https://www.mysql.com) and [bootstrap](http://getbootstrap.com).


OSWA-INV is a web based Inventory System, that will allow you to keep tracking of the quantity buying and selling price of the products existing in your warehouse or business. When creating a new products, you can set a quantity,buying and selling price.

****

If you find any bug, and a fix for that bug, please leave a comment on the github page for this project and i will push the change into the master branch.

### Installing this application is fairly easy, just follow these steps:
****

1. Download the latest version with git (`git clone https://github.com/siamon123/warehouse-inventory-system.git`)

2. Import/load oswa_inv.sql into your mysql database. This should set up the basic structure of the database system.

3. Modify the includes/config.php and change the variables to match your host, database, username and passwords.

4. Change all Folder permission inside uploads folder either add them to group call `www` if available or `777`.

5. Then loging by typing **username** and **password**:


   Administrator        | Special User           | Default User
   ---------------------| -----------------------| -------------------
   **Username** : admin | **Username** : special | **Username** : user
   **Password** : admin | **Password** : special | **Password** : user

6. Good luck!  

- - - -

## DON'T FORGET TO GIVE US FEEDBACK

- - - -

Like  [@OSWA](https://www.facebook.com/oswapp) on Facebook for more project.

Don't forget to visit [oswapp.com](http://oswapp.com "OSWA")


***
Here are the changes not from the original aurthor:
It is a fast and light weight stock management software. Unfortunately Siamon didn't update for couple of years. To make more people able to use this, I added i18n (Multi-languages) to this project. You can download the POEdit or anyother .po editor to modify the language pack from locale folder.
***

Some akwward things are:
- The php is poorly handling the HTTP_ACCEPT_LANGUAGE via the funcion locale_accept_from_http. Maybe just because I suck. Right now the file is able identiry the browser requests language as en_US, zh_CN, vi_VN. If you want more language more than that, you need to modify the scripts in includes/load.php
- The i18n is based on gettext(). Which means, your server need to be able to handle that. My server was Ubuntu Server. After installing the gettext (sudo apt-get install gettext) and generate the desired language packs, the translations start to work. You may need this too if you find the translation is not working. I didn't find a perfect way because I suck.

***
How to add a new language?
1. Know your language code. The code is a combination of 2 letters language code following ISO-639-1 and the 2 letters country code following with an underscore. e.g, en_US or zh_CN.

2. Create the following path locale/<Your language code>/LC_MESSAGES. Copy the file locale/en_US/LC_MESSAGES/default.po to the path you just created.
   
3. Edit it with POEdit or anyother .po file editor. Translate all the items, save it, and convert it to the .mo file. By default, the POEdit will generate the .mo file just after you save the po file. Make sure the newly translated default.mo is in the path you just created.

4. Modify the includes/load.php, find the related code, then add your language just like the other language. You may have to adjust them a little bit to suit your server situation.

5. Enjoy!

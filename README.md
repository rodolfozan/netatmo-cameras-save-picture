# netatmo-cameras-save-picture

### Informations:

A simple PHP Script for saving pictures from Netatmo cameras to a specific folder 

### Configuration:

Please enter the IP Adress of your camera, your Netatmo SecureID and the directory name where you wish to save the pictures in the "Constants" section

For example:

	const IPADRESSE = "192.168.178.93"; 
	const SECUREID = "1234567890abcdefghijklmnopqrstyz";
	const DIRTOSAVE = "netatmocampics";

### How to get your Netatmo SecureID

1. Create account on Netatmo Dev and login
1. Create a new app if you have not already done so.
1. Select "Documentation" -> "Security" in the main menu
1. Click on GET/gethomedata in the menu tree on the left 
1. Press the "Try it out" button in the right area
1. Click the "execute /gethomedata" button

Now you will find your SecureID in the "Server response" area under the section "cameras". It is located in the "vpn_url" - see the following screenshot.

xx


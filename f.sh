#ftp 216.151.164.80
#ftp 216.151.164.80
#ftp durai@localhost 
ftp durai@216.151.164.80 <<EOD
prompt
cd /webspace/httpdocs/carnatic.heaerie.com/mcar10.1.4/
mput $*
EOD

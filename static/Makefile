WEBROOT=/var/www/hiwa
IMGDIR=${WEBROOT}
IMGOWNER=www-data
IMGGRP=www-data
IMGPERM=664

INSTALL=/usr/bin/install
.phony: installcss installing install

none:
	echo "Not doing anything unless told what."

installcss:
	cp *.css  ${WEBROOT}

installimg:
	$(INSTALL) -o $(IMGOWNER) -g $(IMGGRP) -m $(IMGPERM) hiwa.png $(IMGDIR)
	
install: installcss installing
	

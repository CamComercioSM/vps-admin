#!/bin/bash
git pull origin main
rsync -av --delete /home/wwvpsi/repositories/vps-admin/ /home/wwvpsi/public_html/
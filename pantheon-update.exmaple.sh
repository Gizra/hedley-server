#!/bin/bash

#
# Copy local changes to the Pantheon folder.
#

PROFILE=hedley

MAKE_DIR=/var/www/hedley
PANTHEON_DIR=/var/www/pantheon-hedley

cd $PANTHEON_DIR
git pull

rm -rf $PANTHEON_DIR/profiles/$PROFILE
cp -R $MAKE_DIR/$PROFILE $PANTHEON_DIR/profiles/$PROFILE
#!/bin/sh
# Simple script to check for common errors in themes

do_lint() {
    echo "== Linting $1 =="

    if [ ! -d $1 ] ; then
        echo " * Does not exist!"
        return 1
    fi

    cd $1

    VERSION=
    if [ -f info.inc.php ] ; then
        if grep -q theme_full_version info.inc.php ; then
            VERSION=`php -r "include './info.inc.php'; echo \\\$theme_full_version;"`
            echo " * Version from info.inc.php: $VERSION"
        else
            echo " * Old theme, no version available!"
        fi
    else
        echo " * Missing info.inc.php!"
    fi

    if [ ! -f theme.json ] ; then
        echo " * Missing theme.json, skipping further checks!"
        cd ..
        return 0
    fi
    JVERSION=`php -r "echo json_decode(file_get_contents('theme.json'), true)['version'];"`
    echo " * Version from theme.json: $JVERSION"
    if [ -n "$VERSION" -a "$JVERSION" != "$VERSION" ] ; then
        echo " * Versions do not match: theme.json ($JVERSION), info.inc.php ($VERSION)"
        cd ..
        return 1
    fi
    VERSION=$JVERSION
    echo " * Supported phpMyAdmin versions: `php -r "echo implode(', ', json_decode(file_get_contents('theme.json'), true)['supports']);"`"

    cd ..
}

if [ -z "$1" ] ; then
    echo "Usage: lint-theme.sh [--all|THEMEDIR]"
    exit 1
fi

if [ "x$1" = "x--all" ] ; then
    for dir in `find . -mindepth 1 -maxdepth 1 -type d` ; do
        do_lint $dir
        if [ $? -ne 0 ] ; then
            exit 0
        fi
    done
else
    do_lint $1
    exit $?
fi

#!/bin/sh

set -e

usage() {
    echo 'Usage: create-release.sh dir [--tag] [--upload USERNAME]'
    echo
    echo 'Creates a zip for themes download and optionally tags the git tree and uploads to sf.net'
}

if [ "x$1" = "x-h" -o "x$1" = "x--help" ] ; then
    usage
    exit 0
fi
if [ $# -eq 0 ] ; then
    usage
    exit 1
fi

THEME="${1%/}"
if [ ! -d "$THEME" ] ; then
    echo "Directory $THEME does not exist!"
    exit 2
fi

shift

TAG=0
UPLOAD=0

while [ $# -gt 0 ] ; do
    case "$1" in
        --tag)
            TAG=1
            shift
            ;;
        --upload)
            UPLOAD=1
            shift
            UPLOAD_USER="$1"
            if [ -z "$UPLOAD_USER" ] ; then
                echo "Missing sf.net username for upload!"
                usage
                exit 1
            fi
            shift
            ;;
        *)
            echo "Unknown parameter: $1"
            usage
            exit 1
            ;;
    esac
done

VERSION=`php -r "include '$THEME/info.inc.php'; echo \\\$theme_full_version;"`
NAME=$THEME-$VERSION

echo "Creating release for $THEME $VERSION ($NAME)"

mkdir -p release

rm -rf release/$NAME* release/$THEME

cp -r $THEME release/$THEME

cd release

7za a -bd -tzip $NAME.zip $THEME

cd ..

echo "Release files:"
ls -la release/$NAME.zip

if [ $TAG -eq 1 ] ; then
    git tag -a -m "Tagging release of theme $THEME $VERSION" $NAME
fi

if [ $UPLOAD -eq 1 ] ; then
    sftp $UPLOAD_USER,phpmyadmin@frs.sourceforge.net <<EOT
cd /home/frs/project/p/ph/phpmyadmin/themes
mkdir $THEME
cd $THEME
mkdir $VERSION
cd $VERSION
put release/$NAME.zip
EOT
fi


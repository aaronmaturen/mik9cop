#!/bin/bash

# K9 Hero Guardians Theme Packager
# Creates a production-ready zip file for WordPress theme installation

set -e  # Exit on any error

THEME_NAME="mik9cop"
THEME_DIR="theme"
OUTPUT_DIR="dist"
TIMESTAMP=$(date +"%Y%m%d-%H%M%S")
ZIP_NAME="${THEME_NAME}-${TIMESTAMP}.zip"

echo "=========================================="
echo "K9 Hero Guardians Theme Packager"
echo "=========================================="
echo ""

# Create output directory if it doesn't exist
mkdir -p "$OUTPUT_DIR"

# Create temporary directory for packaging
TEMP_DIR=$(mktemp -d)
PACKAGE_DIR="$TEMP_DIR/$THEME_NAME"

echo "📦 Preparing theme files..."

# Copy theme files to temporary directory
cp -r "$THEME_DIR" "$PACKAGE_DIR"

# Remove development files and directories that shouldn't be in production
echo "🧹 Cleaning development files..."
find "$PACKAGE_DIR" -name ".DS_Store" -delete
find "$PACKAGE_DIR" -name "Thumbs.db" -delete
find "$PACKAGE_DIR" -name ".git*" -delete
find "$PACKAGE_DIR" -name "node_modules" -type d -exec rm -rf {} + 2>/dev/null || true
find "$PACKAGE_DIR" -name ".sass-cache" -type d -exec rm -rf {} + 2>/dev/null || true

# Create the zip file
echo "🗜️  Creating zip file..."
cd "$TEMP_DIR"
zip -r "$ZIP_NAME" "$THEME_NAME" -q

# Move zip to output directory
mv "$ZIP_NAME" "$OLDPWD/$OUTPUT_DIR/"

# Clean up temporary directory
cd "$OLDPWD"
rm -rf "$TEMP_DIR"

echo ""
echo "✅ Theme packaged successfully!"
echo ""
echo "📍 Location: $OUTPUT_DIR/$ZIP_NAME"
echo ""
echo "=========================================="
echo "Installation Instructions:"
echo "=========================================="
echo "1. Go to your WordPress admin dashboard"
echo "2. Navigate to Appearance → Themes"
echo "3. Click 'Add New' → 'Upload Theme'"
echo "4. Choose: $OUTPUT_DIR/$ZIP_NAME"
echo "5. Click 'Install Now'"
echo "6. Click 'Activate' when installation completes"
echo ""
echo "🎉 Your theme is ready to upload!"
echo ""

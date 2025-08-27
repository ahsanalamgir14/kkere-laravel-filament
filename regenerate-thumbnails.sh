#!/bin/bash

echo "Starting ad thumbnail regeneration with improved quality..."

# Run the Artisan command to regenerate thumbnails
php artisan ads:regenerate-thumbnails --force

echo "Thumbnail regeneration completed!"
echo "New thumbnails have been generated with:"
echo "- Higher resolution (500x500 for listing, 400x400 for regular)"
echo "- Better quality (95% for listing, 90% for regular)"
echo "- Enhanced sharpening and contrast"
echo "- Improved image optimization settings"

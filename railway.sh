#!/bin/bash

# Install SQLite (for Alpine-based Railway environment)
apk add sqlite

# Ensure SQLite database file exists
touch database/database.sqlite

# Run Laravel migrations
php artisan migrate --force

# Build frontend
npm install
npm run build

# Serve Laravel app
php artisan serve --host=0.0.0.0 --port=8080

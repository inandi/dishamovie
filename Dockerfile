# Use a lightweight image as a base
FROM nginx:alpine

# Copy the index.html file to the default nginx directory
COPY index.html /usr/share/nginx/html/

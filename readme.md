Description

Blog CMS built with Laravel


Features

· Create Blog<br>
· Categories per post<br>
· Middleware <br>
· Admin Panel<br>
· Charts on Admin Panel <br>
· Media Uploader on Admin Panel <br>
· Updated Comment section and use of Disqus API <br>
· Search Post by name or body<br>

#Installation

Its very simple, you just need to follow the standard Laravel installation

git clone https://github.com/antonispat10/Laravel_Blog_with_CMS<br>
cd Laravel_Blog_with_CMS<br>
composer install<br>
# Setup your .env file to match you desired database
php artisan key:generate <br>
php artisan migrate --seed <br>
login with the email admin@admin.com and password: 543210 in order to view
and use the admin panel
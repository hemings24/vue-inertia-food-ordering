# vue-inertia-food-delivery
Laravel + Vue(Inertia) Food Delivery App

1. Download vue-inertia-food-delivery
2. Copy folder to Laravel projects folder
3. Copy vue-inertia-food-delivery\\.env.example to vue-inertia-food-delivery\\.env
4. Update .env APP_URL=http://localhost to APP_URL=http://localhost:8000
5. CLI: cd vue-inertia-food-delivery
6. composer install
7. php artisan key:generate
8. mysql -u root -p -e "CREATE DATABASE vue_inertia_food_delivery"
9. php artisan migrate:fresh --seed
10. npm install
11. php artisan serve
12. npm run dev

http://localhost:8000

User Logins
-----------
admin:    admin@admin.com        |  password
<br>
vendor:   fbednar@example.com    |  password
<br>
staff:    mozelle74@example.net  |  password
<br>
customer: customer@admin.com     |  password

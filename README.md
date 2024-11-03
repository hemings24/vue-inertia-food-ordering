# vue-inertia-food-ordering
Laravel + Vue(Inertia) Food Ordering App

1. Download vue-inertia-food-ordering
2. Copy folder to Laravel projects folder
3. Copy vue-inertia-food-ordering\\.env.example to vue-inertia-food-ordering\\.env
4. Update .env APP_URL=http://localhost to APP_URL=http://localhost:8000
5. CLI: cd vue-inertia-food-ordering
6. composer install
7. php artisan key:generate
8. mysql -u root -p -e "CREATE DATABASE vue_inertia_food_ordering"
9. php artisan migrate:fresh --seed
10. npm install
11. php artisan serve
12. npm run dev

http://localhost:8000

User Logins
-----------
admin:    admin@admin.com        |  password
<br>
vendor:   vendor@vendor.com      |  password
<br>
staff:    staff@staff.com        |  password
<br>
customer: customer@customer.com  |  password

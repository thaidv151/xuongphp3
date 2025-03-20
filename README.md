
1. clone project
``` bash
git clone https://github.com/thaidv151/laravel-project2.git
```


2. install php libaries
``` bash
# create vendor
composer update
```


3. install js libraies
```bash
npm i
```


4. Create .env file
 - Copy `.env.example` to `.env`
 - Config `.env`

5. Build js, css qua thư mục public
```bash
npm run build
```


6. Create db
```bash
php artisan migrate
```

7. Create fake db
```bash
php artisan db:seed
```
8. Gennerate key
```bash
#Tao APP_KEY trong env
```
7. Run project
```bash 
npm run dev
php run dev
```
composer run dev 
```


# test_task
---
## Technologies Used
- Laravel, PHP, MySQL
- HTML, CSS
## ⚙️ Requirements

Before running the project, make sure you have the following installed:

- **PHP** 8.1+
- **Composer**  
- **Git**  
- **MySQL** (or another supported database)

### Laravel

1. Clone the repository:
   ```bash
   git clone https://github.com/olksy/test_task.git
   
2. Navigate into the project folder:
   ```bash
   cd test_task

3. Install PHP dependencies:
   ```bash
   composer install

4. Copy the .env file.
- ⚠️ Important: do not forget to change the DB settings make everything work properly!
```bash
cp .env.example .env
```
  
5. Generate application key:
   ```bash
   php artisan key:generate

6. Run database migrations and seeders:
   ```bash
   php artisan migrate --seed

7. Start the Laravel server:
   ```bash
   php artisan serve

The Laravel app will run at http://127.0.0.1:8000/home

## Author & Contact
- **Author**: Olksy
- **GitHub**: https://github.com/olksy
- **Email**: olksyzatyliuk@gmail.com
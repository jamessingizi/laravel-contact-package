# Laravel contact form package

[![Issues](https://img.shields.io/github/issues/jamessingizi/laravel-contact-package?style=flat-square&logo=appveyor)](https://github.com/jamessingizi/laravel-contact-package/issues)
[![Stars](https://img.shields.io/github/stars/jamessingizi/laravel-contact-package?style=flat-square&logo=appveyor)](https://github.com/jamessingizi/laravel-contact-package/stargazers)
[![License](https://img.shields.io/github/license/jamessingizi/laravel-contact-package?style=flat-square&logo=appveyor)](https://github.com/jamessingizi/laravel-contact-package/blob/main/LICENSE)


Contact is a simple and extensible contact form package for laravel projects.

- Simple and easy to use
- Highly configurable
- Extensible and customizable
- Uses TailwindCSS for views
- Saves contact form to database and sends an email to specified email address

## Contact

The recommended way to install Contact is through
[Composer](https://getcomposer.org/).

```bash
composer require jamessingizi/contact
```

After installation, run 
```bash
php artisan migrate
```
 to create required database tables.

To publish configs, run 

```bash
php artisan vendor:publish
```

The above command will publish a config file named contact.php in the config file of your project. Change the 'send_email_to' value to the email you want to send emails to. For sending emails you will need to define email settings in the .env file of your application

The package uses laravel queues and will automatically queue emails if a queue is defined.

Once installed the contact form will be available at the '/contact' route of your project




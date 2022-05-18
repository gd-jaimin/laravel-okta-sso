<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Steps to Check Application

PHP Version :- 7.4.19
Laravel Version :- 8.75

- Take git pull
- Install composer using composer install
- Copy .env.example and create .env
- Setup db and update in env and run migrations
- npm install && npm run dev
- Setup OKTA Webapp using below steps
	- Signup to OKTA and go admin
	- Go to Application
	- Create App Integration -> OIDC - OpenID Connect -> Web Application and go to next
	- Fill integration name as per your choice
	- Sign-in redirect URIs : http://localhost:8000/login/okta/callback
	- Sign-out redirect URIs : Sign-out redirect URIs
	- Controlled access : Allow everyone in your organization to access
	- Click on Save and in application detail page copy below details in update in env
	- OKTA_CLIENT_ID, OKTA_CLIENT_SECRET, OKTA_BASE_URL(Okta domain from detail page and put "https://OktaDomainValue")
- PHP artisan serve
Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

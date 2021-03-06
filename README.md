# Laravel 5.5.x Front-end Preset For Bulma CSS

Preset for Bulma CSS scaffolding on new Laravel 5.5 project.
Includes pagination blade files.

*Current version*: **Bulma 0.6.1**

## Usage
0. If not a fresh install of Laravel, make sure you committed to your repository or that you have a backup of your files.
1. Fresh install Laravel 5.5 and `cd` to your app.
2. Install this preset via `composer require flavius-constantin/laravel-bulma-preset:dev-master`. Laravel 5.5.x will automatically discover this package. No need to register the service provider.
3. Use `php artisan preset bulma` for basic Bulma preset. **OR** Use `php artisan preset bulma-auth` for basic preset, Auth route entry and Bulma Auth views in one go. (**NOTE**: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `npm install`
5. `npm run dev`

## License
MIT

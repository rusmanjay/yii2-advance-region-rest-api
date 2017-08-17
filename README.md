# Yii2 Advance Region Rest API

1. Install Yii2 Advance
2. Checkout this repository under folder Yii2 project
3. Add `Yii::setAlias('@region', dirname(dirname(__DIR__)) . '/yii2-advance-region-rest-api')` in `@common/config/bootstrap.php`
4. Create database
5. Setup database configuration in `@console/config/main.php`
6. Run migration `php yii migrate --migrationPath=@region/migrations`

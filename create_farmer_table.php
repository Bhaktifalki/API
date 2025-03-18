public function up()
{
    Schema::create('farmers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('phone')->unique();
        $table->string('location');
        $table->timestamps();
    });
}


📄 database/migrations/xxxx_xx_xx_create_farmers_table.php
php artisan migrate
php artisan make:seeder FarmerSeeder

use App\Models\Farmer;
use Illuminate\Database\Seeder;

class FarmerSeeder extends Seeder
{
    public function run()
    {
        Farmer::insert([
            ['name' => 'John Doe', 'phone' => '1234567890', 'location' => 'Texas'],
            ['name' => 'Jane Smith', 'phone' => '9876543210', 'location' => 'California'],
            ['name' => 'Michael Johnson', 'phone' => '4567891230', 'location' => 'Florida'],
        ]);
    }
}


📄 database/seeders/FarmerSeeder.php


php artisan make:seeder FarmerSeeder

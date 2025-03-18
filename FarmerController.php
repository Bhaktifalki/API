namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    // List all farmers
    public function index()
    {
        $farmers = Farmer::all();
        return response()->json([
            'success' => true,
            'data' => $farmers,
        ]);
    }

    // Store a new farmer
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15|unique:farmers',
            'location' => 'required|string|max:255',
        ]);

        $farmer = Farmer::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $farmer,
        ], 201);
    }

    // Show a specific farmer
    public function show($id)
    {
        $farmer = Farmer::find($id);

        if (!$farmer) {
            return response()->json([
                'success' => false,
                'message' => 'Farmer not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $farmer,
        ]);
    }

    // Update a farmer
    public function update(Request $request, $id)
    {
        $farmer = Farmer::find($id);

        if (!$farmer) {
            return response()->json([
                'success' => false,
                'message' => 'Farmer not found',
            ], 404);
        }

        $request->validate([
            'name' => 'sometimes|string|max:255',
            'phone' => 'sometimes|string|max:15|unique:farmers,phone,' . $id,
            'location' => 'sometimes|string|max:255',
        ]);

        $farmer->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $farmer,
        ]);
    }

    // Delete a farmer
    public function destroy($id)
    {
        $farmer = Farmer::find($id);

        if (!$farmer) {
            return response()->json([
                'success' => false,
                'message' => 'Farmer not found',
            ], 404);
        }

        $farmer->delete();

        return response()->json([
            'success' => true,
            'message' => 'Farmer deleted successfully',
        ]);
    }
}
/📄 app/Http/Controllers/Api/FarmerController.php
php artisan make:model Farmer -m


php artisan make:controller Api/FarmerController

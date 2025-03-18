use App\Http\Controllers\Api\FarmerController;

Route::prefix('farmers')->group(function () {
    Route::get('/', [FarmerController::class, 'index']);
    Route::post('/', [FarmerController::class, 'store']);
    Route::get('/{id}', [FarmerController::class, 'show']);
    Route::put('/{id}', [FarmerController::class, 'update']);
    Route::delete('/{id}', [FarmerController::class, 'destroy']);
});


📄 routes/api.php


✅ Step 6: Test Using Postman or cURL
curl -X GET http://localhost:8000/api/farmers

<?php
namespace App\Http\Controllers;

use App\Services\Savers\SaverFactory;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'save_method' => 'required|in:db,email'
        ]);

        $saver = SaverFactory::make($data['save_method']);

        $saver->save($data);

        return response()->json(['message' => 'Успешно сохранено!']);
    }
}
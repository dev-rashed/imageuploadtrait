<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SettingsController extends Controller {
    public function store(Request $request) {
        if($request->hasFile('logo')) {
            $file = $this->uploadImage($request->file($type),'public', 'images');
            $setting->value = "images/" . $file;
        }
    }
    
    public function destroy($path) {
        $this->deleteImage($setting->value, 'public', '');
    }
}

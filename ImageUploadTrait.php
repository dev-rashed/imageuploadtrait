<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait ImageUploadTrait
{
    /**
     * Upload an image file to the specified disk and return its file name.
     *
     * @param  UploadedFile  $image
     * @param  string  $disk
     * @param  string  $path
     * @return string|null
     */
    public function uploadImage(UploadedFile $image, string $disk = 'public', string $path = ''): ?string
    {
        $filename = uniqid().'.'.$image->getClientOriginalExtension();
        $image->storeAs($path, $filename, ['disk' => $disk]);

        return $filename;
    }

    /**
     * Delete an image file from the specified disk.
     *
     * @param  string  $filename
     * @param  string  $disk
     * @param  string  $path
     * @return bool
     */
    public function deleteImage(string $filename, string $disk = 'public', string $path = ''): bool
    {
        return Storage::disk($disk)->delete($path.$filename);
    }
}

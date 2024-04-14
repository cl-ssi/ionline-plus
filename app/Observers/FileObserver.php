<?php

namespace App\Observers;

use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileObserver
{
    /**
     * Handle the File "created" event.
     */
    public function created(File $file): void
    {
        //
    }

    /**
     * Handle the File "updated" event.
     */
    public function updated(File $file): void
    {
        if ($file->isDirty('storage_path')) {
            $originalPath = $file->getOriginal('storage_path');
            if (Storage::exists($originalPath)) {
                Storage::delete($originalPath);
            }
        }
    }

    /**
     * Handle the File "deleted" event.
     */
    public function deleted(File $file): void
    {
        if (Storage::exists($file->storage_path)) {
            Storage::delete($file->storage_path);
        }
    }

    /**
     * Handle the File "restored" event.
     */
    public function restored(File $file): void
    {
        //
    }

    /**
     * Handle the File "force deleted" event.
     */
    public function forceDeleted(File $file): void
    {
        //
    }
}

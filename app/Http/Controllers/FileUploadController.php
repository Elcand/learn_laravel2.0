<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploadController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('file-upload', compact('files'));
    }

    public function store(Request $request)
    {
        // $file = Storage::disk('local')->put('/', $request->file('file'));
        // $file = $request->file('file')->store('/', 'local');
        // $file = $request->file('file')->store('/', 'dir_public');

        $file = $request->file('file');
        $customName = 'laravel_' . Str::uuid();
        $ext = $file->getClientOriginalExtension(); // .png
        $fileName = $customName . '.' . $ext;

        $path = $file->storeAs('/', $fileName, 'dir_public');

        $fileStore = new File();
        $fileStore->file_path = '/uploads/' . $path;
        $fileStore->save();

        dd('stored');
    }

    function download()
    {
        return Storage::disk('local')->download('RbvP3ZgMVU7lfM3VMKRGHuRCeHJ0q8vuEQyvjZa0.jpg');
    }
}

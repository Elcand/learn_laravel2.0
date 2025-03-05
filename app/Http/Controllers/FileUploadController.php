<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $file = $request->file('file')->store('/', 'public');

        $fileStore = new File();
        $fileStore->file_path = $file;
        $fileStore->save();

        dd('stored');
    }

    function download()
    {
        return Storage::disk('local')->download('RbvP3ZgMVU7lfM3VMKRGHuRCeHJ0q8vuEQyvjZa0.jpg');
    }
}

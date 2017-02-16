<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Support\Facades\Response;
class DownloadController extends Controller
{
    public function download($id)
    {
        $file_name = Upload::find($id)->file_name;
        $file = storage_path('app/uploads/' . $file_name);

        return Response::download($file, $file_name);
    }
}

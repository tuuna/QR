<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Support\Facades\Response;
class DownloadController extends Controller
{
    public function download($id)
    {
        $file = storage_path('app/uploads/' . Upload::find($id)->file_name);

        return Response::download($file, '自定义文件名');
    }
}

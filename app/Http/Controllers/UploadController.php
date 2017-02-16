<?php

namespace App\Http\Controllers;

use App\Repositories\uploadRepository;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    protected $upload;

    public function __construct(uploadRepository $upload)
    {
        $this->upload = $upload;
    }

    public function completeUpload(Request $request)
    {
        $time = time();
        $request->file('file')->storeAs('uploads',$time.'.'.$request->file('file')->extension()) ?
                $this->upload->create([
                    'file_name' => $time.'.'.$request->file('file')->extension(),
                    'image' => $request->file('file')->extension()
                ]) :
                flash('上传失败!','danger');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\Task;
class TaskController extends Controller
{

    public function index(int $id)
    {
        //foldersテーブルのすべてのデータを取得
        $folders = Folder::all();
        //foldersテーブルのidがルートパラメータと一緒の値を取得
        $folder = Folder::find($id);
        //folder_idカラムが$folderのidと同じ値を取得する
        $tasks = Task::where('folder_id', $folder->id)->get();

        return view('tasks/index', [
            'folders' => $folders,
            'folder_id' => $folder->id,
            'tasks' => $tasks,
        ]);
    }
}

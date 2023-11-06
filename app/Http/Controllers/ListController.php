<?php

namespace App\Http\Controllers;

use App\Models\ListModel;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index() {
        $lists = ListModel::all();
        return view('lists.index', ['listsForView' => $lists]);
    }

    public function create() {
        return view("lists.create");
    }

    public function store(Request $request) {
        $data = $request->all();
        $newData = ListModel::create([
            'tasks' => $data['tasks'],
            'status' => $data['status'],
            'priority' => $data['priority']
        ]);

        return redirect()->route('lists_index')->withMessage("Successfully submitted new task");


        return;
    }
}

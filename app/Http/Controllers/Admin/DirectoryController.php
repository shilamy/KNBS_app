<?php

namespace App\Http\Controllers\Admin;

use App\Models\Directory;
use App\Http\Controllers\Controller;
use App\Http\Requests\DirectoryFormRequest;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index(){
        return view('admin/directory/index');
    }
    
    public function create(){

        return view('admin/directory/create');

    }
    public function store(DirectoryFormRequest $request){
        $validatedData = $request->validated();

        $directory = new Directory;

        $directory->name =$validatedData['name'];
        $directory->department = $validatedData['department'];
        $directory->extension = $validatedData['extension'];
        $directory->floor= $validatedData['floor'];
        $directory->status=$request->status == true ? '1':'0';
        $directory->save();

        return redirect( 'admin/directory')->with('message', 'Directory Added successfully');

    }
    public function edit(Directory $directory)
    {
        return view('admin.directory.edit', compact('directory'));

    }

    public function update (DirectoryFormRequest $request, $directory)
    {
        $validatedData = $request-> validated();// validating the form request

        $directory = Directory::findOrFail($directory);

        $directory->name = $validatedData['name'];
        $directory->department = $validatedData['department'];
        $directory->extension = $validatedData['extension'];
        $directory->floor = $validatedData['floor'];

        $directory->status = $request->status == true ?'1':'0';

        $directory->update();

        return redirect('admin/directory')->with('message','Directory Updated Successfully');

    }

}

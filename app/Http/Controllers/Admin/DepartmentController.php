<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DepartmentFormRequest;
use App\Models\Directory;
use App\Models\Extension;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {


        $department = Department::all();
        return view('admin.department.index',compact('department'));
    }

    public function create()
    {

        $directories = Directory::all();
        $extensions = Extension::all();
        return view('admin.department.create',compact('directories','extensions'));
    }



    public function store(DepartmentFormRequest $request)
    {
        $validatedData  = $request->validated();

        $directory = Directory::findOrFail($validatedData['directory_id']);

        $department = $directory->department()->create([
            'directory_id' => $validatedData['directory_id'],
            'name' => $validatedData['name'],
            'extension' => $validatedData['extension'],
           'status'=>$request->status == true ? '1':'0',

        ]);
      //  $department->department()->create([

           // 'department_id'=> $department,

       // ]);

        return redirect('/admin/department')->with('message','Department Added Successfully ') ;

    }

    public function edit(int $department_id)
    {
        $directories = Directory::all();
        $extensions = Extension::all();
        $department = Department::findOrFail($department_id);
         return view('admin.department.edit', compact('directories', 'extensions','department'));

    }
    public function update(  DepartmentFormRequest $request, int $department_id)
    {
        $validatedData = $request->validated();
        $department = Directory::findOrFail($validatedData['directory_id'])
                        ->department()->where('id',$department_id)->first();
         if($department)
         {
            $department->update([
                'directory_id' => $validatedData['directory_id'],
                'name' => $validatedData['name'],
                'extension' => $validatedData['extension'],
               'status'=>$request->status == true ? '1':'0',

            ]);
            return redirect('/admin/department')->with('message','Department Updated Successfully ') ;
         }
         else{
            return redirect('admin/department')->with('message','No Such Product Id Found');
         }
    }
    public function destroy(int $department_id)
    {
        $department = Department::findOrFail($department_id);
        $department->delete();
        return redirect()->back()->with('message','Department Deleted ');

    }



}

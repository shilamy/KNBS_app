<?php

namespace App\Http\Livewire\Admin\Extension;

use App\Models\Extension;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $extension, $department, $username, $status, $extension_id;

     public function rules()
     {
        return [
            'extension'=> 'required|string',
            'department'=> 'required|string',
            'username'=> 'required|string',
            'status' => 'nullable',
        ];

     }

     public function resetInput()
     {
        $this->extension = NULL;
        $this->department = NULL;
        $this->username = NULL;
        $this->status = NULL;
        $this->extension_id = NULL;

     }



    public function storeExtension()
    {
        $validatedData = $this->validate();
        Extension::create([
            'extension' => $this->extension,
            'department' => $this->department,
            'username' => $this->username,
            'status' => $this->status == true ?'1':'0',

        ]);
        session()->flash('message', 'Extension Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    public function editExtension(int $extension_id)
    {
        $this->extension_id = $extension_id;
        $extension = Extension::findORFail($extension_id);
        $this->extension = $extension-> extension;
        $this->department = $extension-> department;
        $this->username = $extension-> UserName;
        $this->status = $extension-> status;
    }
    public function updateExtension()
    {
        $validatedData = $this->validate();
        Extension::findORFail($this->extension_id)-> update([
            'extension' => $this->extension,
            'department' => $this->department,
            'username' => $this->username,
            'status' => $this->status == true ?'1':'0',

        ]);
        session()->flash('message', 'Extension Updated Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function deleteExtension($extension_id)
    {
        $this->extension_id = $extension_id;
    }

    public function destroyExtension()
    {
        Extension::findOrFail($this->extension_id)->delete();
        session()->flash('message', 'Extension Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function render()

    {
        $extensions = Extension::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.extension.index',['extensions' => $extensions])

                    ->extends('layouts.admin')

                    ->section('content');
    }
}

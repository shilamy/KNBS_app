<?php

namespace App\Http\Livewire\Admin\Directory;

use Livewire\Component;
use App\Models\Directory;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $directory_id;
    public function deleteDirectory($directory_id)
    {

        $this->directory_id = $directory_id;

    }
    public function destroyDirectory()
    {
    $directory = Directory::find($this->directory_id);

    $directory->delete();
    session()->flash('message','Directory Deleted');
       $this->dispatchBrowserEvent('close-modal');

}
    public function render()
    {
        $directories =  Directory::orderBy('id', 'DESC')->paginate(10);

        return view('livewire.admin.directory.index',['directories'=>$directories]);
    }
}

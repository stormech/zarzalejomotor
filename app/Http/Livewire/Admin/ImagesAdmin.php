<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ImagesAdmin extends Component
{
    private $user;

    protected $listeners = ['refreshImage','delete'];

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function refreshImage()
    {
        return redirect()->to('admin/images');
    }

    public function files(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);
        $url = Storage::put('public/images/principal', $request->file('file'));

        $user = auth()->user();

        $user->image()->create([
            'url'=> $url,
        ]);
        
    }

    public function delete(Image $image)
    {
       Storage::delete([$image->url]);

       $image->delete();

       return redirect()->to('admin/images');
       
    }

    public function render()
    {
        $this->user = auth()->user();

        return view('livewire.admin.images-admin')->layout('layouts.admin');
    }
}

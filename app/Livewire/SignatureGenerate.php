<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Aws\S3\S3Client;

class SignatureGenerate extends Component
{
    use WithFileUploads;

    public $nombre = '', $cargo = '', $telefono = '', $email = '', $url, $indice = '+593';
    public $firma,$imagen='';

    #[Validate('image')] // 1MB Max
    public $photo;

    protected $rules = [
        'nombre' => 'required',
        'cargo' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
    ];

    public function mount()
    {
        $this->firma = Storage::get('public/firma/firma.txt');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.signature-generate');
    }

    public function copy()
    {
        $this->validate();
        try {
            $archivo = $this->photo->storePublicly('adv','s3');
            $this->imagen = Storage::disk('s3')->url($archivo);
           
            $this->dispatch('post-created', $this->imagen);
        } catch (\Exception $e) {
            $this->dispatch('error', 'Complete el formulario');
        }
    }

}

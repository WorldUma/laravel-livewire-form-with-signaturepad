<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Livewire\Rule;
use Illuminate\Support\Facades\Hash;

class Counter extends Component
{
    // public $count =1;
    // public $user = 'ulagambigai';
    // public function increment(){
    //     $this->count++;
    // }
    // public function decrement(){
    //     $this->count--;
    // }
    // public function submit(){
    //     dump('welcome');
    // }

    
    public $name;
    
    public $email;
    
    public $password;

    public $signature='';

    public $signatureImage;

    public $listeners = ['saveSignature'];

    
    public function saveSignature($signatureData)
    {
        // Method to save the signature
        $this->signatureImage = $signatureData; // Emit an event to save the signature via JavaScript
        dd($$this->signatureImage);
        //$this->emit('saveSignature', $signatureData);
    }
    
    public function render()
    {
        return view('livewire.counter')->layout('welcome');
    }
    public function createNewUser(){
        $validated = $this->validate([
            'name' => 'required|min:2|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'signature' => 'required'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'signature' => $this->signatureImage
        ]);
        $this->reset(['name','email','password']);
        request()>session()->flash('success','User Created Successfull');
    }
}

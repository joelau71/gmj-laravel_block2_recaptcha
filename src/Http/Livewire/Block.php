<?php

namespace GMJ\LaravelBlock2Recaptcha\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Block extends Component
{
    protected $listeners = ["validateRecaptchaV3"];

    public function validateRecaptchaV3($token, $callback)
    {
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('gmj.laravel_block2_recaptcha_config.secret'),
            'response' => $token
        ])->json();

        if (!$response["success"] || $response['score'] < config('gmj.laravel_block2_recaptcha_config.score')) {
            return false;
        }

        $this->emit($callback);
    }

    public function render()
    {
        return view('LaravelBlock2Recaptcha::livewire.block');
    }
}

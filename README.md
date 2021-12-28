# gmj-laravelBlock2Recaptcha

Laravel Block for google recaptcha v3
dependence: livewire and alpine js
env:
RECAPTCHAV3_SITEKEY={your google recaptcha sitekey number}
RECAPTCHAV3_SECRET={your google recaptcha secret number}

layout app need add:

```
<script src="https://www.google.com/recaptcha/api.js?render={{ config('laravel_block2_recaptcha_config.key') }}"></script>
```

sample:

```
<form x-data x-on:submit.prevent="$dispatch('recaptcha')">
    <x-LaravelBlock2Recaptcha id="contact" action="send" />
</form>
```

or

```
<div x-data>
    <x-LaravelBlock2Recaptcha id="contact" action="send" />
    <div x-on:click="$dispatch('recaptcha')">send</div>
</div>
```

composer require gmj/laravel_block2_recaptcha

in terminal run: php artisan vendor:publish --provider="GMJ\LaravelBlock2Recaptcha\LaravelBlock2RecaptchaServiceProvider" --force

php artisan db:seed --class=LaravelBlock2RecaptchaSeeder

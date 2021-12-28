<div
    x-on:recaptcha.window="execute"
    x-data="{
        execute(){
            grecaptcha.ready(() => {
                grecaptcha.execute('{{ config('gmj.laravel_block2_recaptcha_config.key') }}', {action: '{{ $attributes['id'] }}'})
                    .then((token) => {
                        Livewire.emit('validateRecaptchaV3', token, '{{ $attributes["action"] }}');  
                    });
                });
            }
        }"
    >
        <livewire:LaravelBlock2RecaptchaLivewire /> 
</div>
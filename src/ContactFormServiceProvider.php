<?php

namespace MAAK\ContactForm;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/main.php', 'contactForm');
    }

    public function boot()
    {
        require __DIR__.'\routes\route.php';

        $this->loadViewsFrom(__DIR__.'/views','contactForm');

        $this->publishes([
            __DIR__.'/config/main.php' => config_path('contactForm.php'),
            __DIR__.'/views' => base_path('resources/views/contactForm'),
            __DIR__.'/views/emails' => base_path('resources/views/contactForm/mails'),
            __DIR__.'/views/assets' => public_path('vendor/maak/contactForm/assets'),
        ]);

    }


}

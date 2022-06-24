<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // VerifyEmail::toMailUsing(function ($notifiable, $url) {
        //     return (new MailMessage)
        //     ->subject(Lang::get('Verify Email Address'))
        //     ->line(Lang::get('Your password is market1234. Please click the button below to verify your email address. '. $notifiable['first_name']))
        //     ->action(Lang::get('Verify Email Address'), $url)
        //     ->line(Lang::get('You can submit your query by filling the form on our website.'. '\n' .'If you did not create an account, no further action is required.'));
        // });
    }
}

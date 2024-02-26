<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Atymic\Twitter\Twitter;

class ChannelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Twitter::class, function ($app) {
            // Use the concrete implementation of Twitter, replace with the actual class
            return new ConcreteTwitterImplementation([
                'api_key' => '2ifbTqfwUuhcHLv8qZYOCJvH1',
                'api_secret' => 'QngHIK9FcS4qzs6lGIiHZT3b2qdb2Q4ACLoFajMi6l62MgMNeQ',
                'access_token' => '930079490-RyWSWWQ9vSSkLyOwt2IX9uY7K8AYfc303lAJLphO',
                'access_secret' => 'syIqUikJpWH3M33ch7zY338l4LX5tU61jbtFRa2NDwff6',
            ]);
        });
    }
}
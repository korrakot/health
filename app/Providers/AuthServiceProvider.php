<?php

namespace ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Model' => 'ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}

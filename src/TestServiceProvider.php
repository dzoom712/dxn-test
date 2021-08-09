<?php

namespace Dxn\test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    protected $defer = true; //延迟加载服务

    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__. '/views', 'test');
        $this->publishes([
            __DIR__. 'views' => base_path('resources/views/vendor/packagetest'), // 发布视图目录到resources 下
            __DIR__. 'config/packagetest.php' => config_path('test.php'), //发布配置文件到 laravel 的config 下
        ]);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: crisen
 * Date: 2017/1/11
 * Time: 11:32
 */

namespace Crisen\LaravelGitDeploy;

use Illuminate\Support\ServiceProvider;


class DeployServiceProvider extends ServiceProvider
{

    public function boot()
    {
        require __DIR__ . '/routes.php';
    }


    public function register()
    {

    }
}
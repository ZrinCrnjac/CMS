<?php
 
namespace App\Providers;
 
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Models\Menu;
 
class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        //$menus = Menu::all();
        
        //View::share('menus', $menus);
    }
}
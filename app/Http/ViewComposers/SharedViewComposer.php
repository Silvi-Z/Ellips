<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Country;
use App\Models\Feedback;
use App\Models\News;
use App\Models\Order;
use App\Models\Services\Interfaces\PageServiceInterface;
use App\Models\SocialNetwork;
use App\Models\System;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session as Sess;

class SharedViewComposer
{

    protected $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function lang(View $view)
    {
        return $view->with('lang', app()->getLocale());
    }


    public function categories(View $view)
    {
         return $view->with('categories', Category::all());
    }
    public function systems(View $view)
    {
        return $view->with('systems', System::all());
    }

    public function withSession(View $view)
    {
        return $view->with('session', $this->session);
    }


    public function socialNetworks(View $view)
    {
        return $view
            ->with('social_networks', SocialNetwork::all());
    }

    public function clients(View $view)
    {
        return $view
            ->with('clients', Client::all());
    }


}

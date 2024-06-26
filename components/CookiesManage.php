<?php

namespace WebBook\GDPR\Components;

use Cms\Classes\ComponentBase;
use WebBook\GDPR\Models\CookiesSettings;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use Redirect;
use Input;
use Session;
use Flash;
use Form;
use Log;
use App;

class CookiesManage extends ComponentBase
{

    public function componentDetails() {

        return [
            'name'        => 'webbook.gdpr::lang.components.cookies_manage.name',
            'description' => 'webbook.gdpr::lang.components.cookies_manage.description'
        ];
    }

    public function defineProperties(){

        return [
        ];
    }

    public function onRun() {

        $this->page['sgCookies'] = CookiesSettings::getSGCookies();
        $this->page['sgCookiesLocalePrefix'] = CookiesSettings::getSGCookiesLocalePrefix();
    }

    public function onRender() {
    }
}

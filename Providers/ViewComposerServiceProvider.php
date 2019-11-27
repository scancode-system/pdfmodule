<?php

namespace Modules\Pdf\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\Pdf\Http\ViewComposers\Settings\SettingComposer;


class ViewComposerServiceProvider extends ServiceProvider {

	public function boot() {
		// setting
		View::composer('pdf::loader.settings.body', SettingComposer::class);
	}

	public function register() {
        //
	}

}

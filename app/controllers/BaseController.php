<?php

class BaseController extends Controller {

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));

        // This rank should be rendered on all pages
        View::share('playersMini', App::make('Metin\Services\HighscoreService')->playersTopMini());
        View::share('guildsMini', App::make('Metin\Services\HighscoreService')->guildsTopMini());
    }

    /**
     * Redirect back with old input and the specified data.
     *
     * @param  array $data
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectBack($data = [])
    {
        return Redirect::back()->withInput()->with($data);
    }

    /**
     * Redirect user to a specific route with global error and input
     *
     * @param $route
     * @param $error
     * @return mixed
     */
    public function redirectWithError($route, $error)
    {
        return Redirect::route($route)->withInput()->withErrors(array(
            'global' => $error
        ));
    }
}

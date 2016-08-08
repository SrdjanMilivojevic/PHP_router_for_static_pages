<?php

final class Application
{
    private $landingPage = 'home';
    private $url;
    private $actions = [];

    public function __construct()
    {
        $this->url = isset($_GET['url']) ? filter_var(rtrim($_GET['url'], FILTER_SANITIZE_URL)) : $this->landingPage;
    }

    public function route($path, Closure $closure)
    {
        if ($path === '/') {
            $path = '/home';
        }
        $path = trim($path, '/');
        $this->actions[$path] = $closure;
    }

    public function run()
    {
        return isset($this->actions[$this->url]) ?
            call_user_func($this->actions[$this->url]) :
            call_user_func($this->actions[$this->landingPage]);
    }
}

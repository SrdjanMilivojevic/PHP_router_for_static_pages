<?php

final class Application
{
    /**
     * Default(Landing) page name.
     */
    const LANDING_PAGE = 'home';

    /**
     * @var $url [Requested URI segment]
     */
    private $url;

    /**
     * @var $actions [Array of roots as key-url => value-closure]
     */
    private $actions = [];

    /**
     * Construct the object with requested url, or set the default url
     * if there istnt one set.
     */
    public function __construct()
    {
        $this->url = isset($_GET['url']) ? filter_var(rtrim($_GET['url'], FILTER_SANITIZE_URL)) : self::LANDING_PAGE;
    }

    /**
     * Set the roots.
     * @param $url string [Url to be requested]
     * @param $closure closure [Action to preform]
     */
    public function route($url, Closure $closure)
    {
        if ($url === '/') {
            $url = '/home';
        }
        $url = trim($url, '/');
        $this->actions[$url] = $closure;
    }

    /**
     * Run the action of requested root;
     * if it doest exist: return action
     * of the landing page instead.
     */
    public function run()
    {
        return isset($this->actions[$this->url]) ?
            call_user_func($this->actions[$this->url]) :
            call_user_func($this->actions[self::LANDING_PAGE]);
    }
}

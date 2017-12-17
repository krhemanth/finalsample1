<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:25 PM
 */

class routes
{

    public static function getRoutes()
    {
        
      $routes[]=self::create('GET','show','homepage','homepageController','show');  
      $routes[]=self::create('GET','create','homepage','accountsController','create');  
      $routes[]=self::create('GET','show','tasks','tasksController','show');
      $routes[]=self::create('GET','all','tasks','tasksController','all');    
      $routes[]=self::create('GET','all','accounts','accountsController','all');
      $routes[]=self::create('GET','show','accounts','accountsController','show');
      $routes[]=self::create('POST','login','accounts','accountsController','login');
      $routes[]=self::create('POST','delete','tasks','tasksController','delete');
      $routes[]=self::create('POST','delete','accounts','accountsController','delete');
      $routes[]=self::create('GET','edit','accounts','accountsController','edit');
      $routes[]=self::create('POST','save','accounts','accountsController','save');
      $routes[]=self::create('POST','save','tasks','tasksController','save');
      $routes[]=self::create('POST','insert','tasks','tasksController','insert');
      $routes[]=self::create('GET','register','accounts','accountsController','register');
      $routes[]=self::create('POST','register','accounts','accountsController','store');
      $routes[]=self::create('POST','insert','tasks','tasksController','insert');
      $routes[]=self::create('GET','getTodo','tasks','tasksController','getTodo');
      $routes[]=self::create('GET','Logout','accounts','accountsController','logout');
      $routes[]=self::create('GET','ViewProfile','accounts','accountsController','ViewProfile');
        return $routes;
    }

    public static function create($http_method,$action,$page,$controller,$method) {
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
        
        return $route;
    }
}

//this is the route prototype object  you would make a factory to return this

class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}
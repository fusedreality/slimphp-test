<?php

namespace Controllers;

/**
 * Used to show how we can also use controllers to do same actions.
 */
class HelloController
{
    protected $container;

    /**
     * Set up this controller with neccessary container
     */
    public function __construct(\Slim\Container $container) {
        $this->container = $container;
    }

    /**
     * Handle the 'Goodbye' event
     */
    public function index($request, $response, $args) {
      return $this->container->get('view')->render($response, 'name.twig', [
        'name' => $args['name']
      ]);
    }
}
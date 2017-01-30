<?php

namespace AppBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 */
class Configuration implements ConfigurationInterface{
  /**
   * {@inheritdoc}
   */
  public function getConfigTreeBuilder(){
    $treeBuilder = new TreeBuilder();
    $treeBuilder->root('app');
    
    //Here you should define the parameters that are allowed to configure your bundle.
    //See http://symfony.com/doc/current/cookbook/bundles/extension.html for more information on the topic
    return $treeBuilder;
  }
}


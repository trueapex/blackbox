<?php
  /**
   * Drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   */
  
  /* $aliases['staging'] = array(
    'uri' => 'www.example.staging',
    'db-url' => '',
    'db-allows-remote' => TRUE,
    'remote-host' => '',
    'remote-user' => '',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'sites/default/files',
      '%drush-script' => 'drush',
     ),
  ); */
  
  $aliases['local'] = array(
    'uri' => 'http://www.example.local',
    'root' => '/home/vagrant/sites/example/code',
    'path-aliases' => array(
      '%files' => 'sites/default/files',
      '%drush-script' => 'drush',
    )
  );
  
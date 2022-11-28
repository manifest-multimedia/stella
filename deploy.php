<?php
namespace Deployer;

require 'recipe/statamic.php';

// Config

set('repository', 'https://github.com/manifest-multimedia/stella.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('staging')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/Stella Africa Website');
host(' production')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/Stella Africa Website');

// Hooks

after('deploy:failed', 'deploy:unlock');

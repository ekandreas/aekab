<?php
date_default_timezone_set('Europe/Stockholm');

include_once 'vendor/ekandreas/docker-bedrock/recipe.php';
include_once 'vendor/deployer/deployer/recipe/common.php';
include_once 'vendor/ekandreas/dipwpe/main.php';

env('remote.name','aekab');
env('remote.path','/mnt/persist/www/aekab.se');
env('remote.ssh','root@andreasek.se');
env('remote.database','aekab');
env('remote.domain','aekab.se');
env('local.domain','aekab.dev');
env('local.is_elastic',false);

server( 'development', 'default', 22 )
    ->env('container','aekab')
    ->env('deploy_path','/var/www/aekab');

server( 'production', 'andreasek.se', 22 )
    ->env('deploy_path','/mnt/persist/www/aekab.se')
    ->user( 'root' )
    ->env('branch', 'master')
    ->stage('production')
    ->identityFile();

set('repository', 'git@github.com:ekandreas/aekab.git');

// Symlink the .env file for Bedrock
set('env', 'prod');
set('keep_releases', 10);
set('shared_dirs', ['web/app/uploads','web/app/themes/aekab/.cache']);
set('shared_files', ['.env', 'web/.htaccess', 'web/robots.txt']);
set('env_vars', '/usr/bin/env');

task('deploy:restart', function () {
    writeln('Purge cache...');
    run( 'rm -Rf web/app/themes/aekab/.cache && mkdir -p shared/web/app/themes/aekab/.cache' );
})->desc('Restarting apache2 and varnish');

task( 'deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:vendors',
    'deploy:shared',
    'deploy:symlink',
    'cleanup',
    'deploy:restart',
    'success'
] )->desc( 'Deploy your Bedrock project, eg dep deploy production' );

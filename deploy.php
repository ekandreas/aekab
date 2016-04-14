<?php
date_default_timezone_set('Europe/Stockholm');

include_once 'vendor/ekandreas/docker-bedrock/recipe.php';
include_once 'vendor/ekandreas/dipwpe/main.php';

env('remote.name','aekab');
env('remote.path','/home/forge/www.aekab.se');
env('remote.ssh','forge@178.62.249.226');
env('remote.database','aekab');
env('remote.domain','aekab.se');
env('local.domain','aekab.dev');
env('local.is_elastic',false);

server( 'development', 'default', 22 )
    ->env('container','bedrock')
    ->env('deploy_path','/var/www/aekab');

server( 'production', '178.62.249.226', 22 )
    ->env('deploy_path','/home/forge/www.aekab.se')
    ->user( 'forge' )
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
//set('writable_dirs', ['web/app/uploads']);

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
    'deploy:writable',
    'deploy:symlink',
    'cleanup',
    'deploy:restart',
    'success'
] )->desc( 'Deploy your Bedrock project, eg dep deploy production' );

task('pull:files', function () {
    writeln('Getting uploads, long duration first time! (approx. 60s)');
    runLocally('rsync --exclude .cache -re ssh {{remote.ssh}}:{{remote.path}}/web/app/uploads web/app', 999);
});

task('pull:deactivate', function () {
    writeln('Deactivate SEO');
    runLocally('cd web && wp plugin deactivate wordpress-seo', 999);
});

task('pull', [
    'pull:create_database_dump',
    'pull:get_database_dump',
    'pull:restore_database',
    'pull:search_and_replace_database',
    'pull:files',
    'pull:elastic',
    'pull:deactivate',
    'pull:cleanup',
]);

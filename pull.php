<?php

task( 'pull:dump', function () {

    writeln( 'Creating a new database dump' );
    run( 'mysqldump aekab > /tmp/aekab.sql' );

} );

task( 'pull:fetch_dump', function () {

    writeln( 'Getting database dump' );
    runLocally( 'scp root@andreasek.se:/tmp/aekab.sql aekab.sql', 999 );

} );

task( 'pull:resolve_dump', function () {

    writeln( 'Restore database inside vagrant' );
    runLocally( 'vagrant ssh -c "mysql -u root -proot aekab < /home/vagrant/www/aekab/aekab.sql"', 999 );

} );

task( 'pull:set_vagrant_wp', function () {

    writeln( 'Restore wp after pull' );
    runLocally( 'vagrant ssh -c "cd web && wp search-replace "www.aekab.se" "aekab.dev" && wp rewrite flush"',
        999 );

} );

task( 'pull:uploads', function () {

    writeln( 'Getting uploads, long duration first time!' );
    runLocally( 'rsync -re ssh root@andreasek.se:{{deploy_path}}/shared/web/app/uploads web/app',
        999 );

} );

task( 'pull:cleanup', function () {

    writeln( 'Cleaning up locally...' );
    runLocally( 'rm aekab.sql' );
    runLocally( 'rm -Rf web/app/themes/aekab/.cache && mkdir web/app/themes/aekab/.cache' );


} );

task( 'pull', [
    'pull:dump',
    'pull:fetch_dump',
    'pull:resolve_dump',
    'pull:set_vagrant_wp',
    'pull:uploads',
    'pull:cleanup',
] );


<?php
namespace Deployer;

require 'recipe/composer.php';
// デプロイ先
server('staging', '13.112.171.83', 22)
    ->user('ec2-user')
    ->identityFile()
    ->forwardAgent()
    ->env('deploy_path', '~/test/');
set('ssh_type', 'native');
// リポジトリ
set('repository', 'https://github.com/arexxxx/test.git');

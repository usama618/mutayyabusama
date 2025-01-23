<?php

namespace Deployer;

# Call default recipe
require 'recipe/common.php';

# Project name
set('application', 'mutayyabusama');

# Define Git-Repository
set('repository', 'git@github.com:usama618/mutayyabusama.git');

# [Optional] Allocate tty for git clone. The default value is false.
set('git_tty', true);

# Set maximum releases backup
set('keep_releases', 5);

# To solve this issue: Can't detect http user name. Please set up the `http_user` config parameter.
# set('http_user', 'www-data');
# set('writable_mode', 'chmod');
# set('use_relative_symlink', '0');

# Set Server
inventory('hosts.yaml');

# DocumentRoot / WebRoot for the TYPO3 installation
set('typo3_webroot', 'public');

# Shared directories
set('shared_dirs', [
   '{{typo3_webroot}}/fileadmin',
   '{{typo3_webroot}}/typo3temp',
   '{{typo3_webroot}}/uploads',
]);

# Shared files
set('shared_files', [
   '{{typo3_webroot}}/.htaccess'
]);

# Writeable directories
set('writable_dirs', [
   'config',
   'var',
   '{{typo3_webroot}}/fileadmin',
   '{{typo3_webroot}}/typo3temp',
   '{{typo3_webroot}}/typo3conf',
   '{{typo3_webroot}}/uploads'
]);

# Main TYPO3 task
task('deploy', [
   'deploy:info',
   'deploy:prepare',
   'deploy:lock',
   'deploy:release',
   'deploy:update_code',
   'deploy:shared',
   'deploy:vendors',
   'deploy:writable',
   'deploy:symlink',
   'deploy:unlock',
   'cleanup',
])->desc('Deploy your project');
after('deploy', 'success');

# [Optional] If the deployment fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
Laravel Credentials
===================


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/GrahamCampbell/Laravel-Credentials/trend.png)](https://bitdeli.com/free "Bitdeli Badge")
[![Build Status](https://travis-ci.org/GrahamCampbell/Laravel-Credentials.png?branch=develop)](https://travis-ci.org/GrahamCampbell/Laravel-Credentials)
[![Coverage Status](https://coveralls.io/repos/GrahamCampbell/Laravel-Credentials/badge.png?branch=develop)](https://coveralls.io/r/GrahamCampbell/Laravel-Credentials)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Credentials/badges/quality-score.png?s=b384661adefa74fb4c695e50c7832c7f1ceea470)](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Credentials)
[![Latest Version](https://poser.pugx.org/graham-campbell/credentials/v/stable.png)](https://packagist.org/packages/graham-campbell/credentials)
[![Still Maintained](http://stillmaintained.com/GrahamCampbell/Laravel-Credentials.png)](http://stillmaintained.com/GrahamCampbell/Laravel-Credentials)


## What Is Laravel Credentials?

Laravel Credentials is a cool way to authenticate in [Laravel 4.1](http://laravel.com).  

* Laravel Credentials was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell).  
* Laravel Credentials relies on my [Laravel Core](https://github.com/GrahamCampbell/Laravel-Core) package.  
* Laravel Credentials uses [Travis CI](https://travis-ci.org/GrahamCampbell/Laravel-Credentials) to run tests to check if it's working as it should.  
* Laravel Credentials uses [Scrutinizer CI](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Credentials) and [Coveralls](https://coveralls.io/r/GrahamCampbell/Laravel-Credentials) to run additional tests and checks.  
* Laravel Credentials uses [Composer](https://getcomposer.org) to load and manage dependencies.  
* Laravel Credentials provides a [change log](https://github.com/GrahamCampbell/Laravel-Credentials/blob/develop/CHANGELOG.md), [releases](https://github.com/GrahamCampbell/Laravel-Credentials/releases), and a [wiki](https://github.com/GrahamCampbell/Laravel-Credentials/wiki).  
* Laravel Credentials is licensed under the Apache License, available [here](https://github.com/GrahamCampbell/Laravel-Credentials/blob/develop/LICENSE.md).  


## System Requirements

* PHP 5.4.7+ or PHP 5.5+ is required.
* You will need [Laravel 4.1](http://laravel.com) because this package is designed for it.  
* You will need [Composer](https://getcomposer.org) installed to load the dependencies of Laravel Credentials.  


## Installation

Please check the system requirements before installing Laravel Credentials.  

To get the latest version of Laravel Credentials, simply require it in your `composer.json` file.  

`"graham-campbell/credentials": "dev-master"`  

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.  

You will need to register the [Laravel Core](https://github.com/GrahamCampbell/Laravel-Core) service provider before you attempt to load the Laravel Credentials service provider. Open up `app/config/app.php` and add the following to the `providers` key.  

`'Cartalyst\Sentry\SentryServiceProvider'`  
`'GrahamCampbell\Queuing\QueuingServiceProvider'`  
`'GrahamCampbell\Security\SecurityMinServiceProvider'`  
`'GrahamCampbell\Binput\BinputServiceProvider'`  
`'GrahamCampbell\Passwd\PasswdServiceProvider'`  

Once Laravel Credentials is installed, you need to register the service provider. Open up `app/config/app.php` and add the following to the `providers` key.  

`'GrahamCampbell\Credentials\CredentialsServiceProvider'`  

You can register the three facades in the `aliases` key of your `app/config/app.php` file if you like.  

`'UserProvider' => 'GrahamCampbell\Credentials\Facades\UserProvider'`  
`'GroupProvider' => 'GrahamCampbell\Credentials\Facades\GroupProvider'`  
`'Credentials' => 'GrahamCampbell\Credentials\Facades\Credentials'`  

You will additionally need to replace `app/config/queue.php` with the `queue.php` provided in the root folder of this repo. This config allows us to specify different queues for special jobs.  


## Usage

There is currently no usage documentation besides the [API Documentation](http://grahamcampbell.github.io/Laravel-Credentials
) for Laravel Credentials.  

You may see an example of implementation in [CMS Core](https://github.com/GrahamCampbell/CMS-Core).  


## Updating Your Fork

The latest and greatest source can be found on [GitHub](https://github.com/GrahamCampbell/Laravel-Credentials).  
Before submitting a pull request, you should ensure that your fork is up to date.  

You may fork Laravel Credentials:  

    git remote add upstream git://github.com/GrahamCampbell/Laravel-Credentials.git

The first command is only necessary the first time. If you have issues merging, you will need to get a merge tool such as [P4Merge](http://perforce.com/product/components/perforce_visual_merge_and_diff_tools).  

You can then update the branch:  

    git pull --rebase upstream develop
    git push --force origin <branch_name>

Once it is set up, run `git mergetool`. Once all conflicts are fixed, run `git rebase --continue`, and `git push --force origin <branch_name>`.  


## Pull Requests

Please submit pull requests against the develop branch.  

* Any pull requests made against the master branch will be closed immediately.  
* If you plan to fix a bug, please create a branch called `fix-`, followed by an appropriate name.  
* If you plan to add a feature, please create a branch called `feature-`, followed by an appropriate name.  
* Please follow the [PSR-2 Coding Style](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) and [PHP-FIG Naming Conventions](https://github.com/php-fig/fig-standards/blob/master/bylaws/002-psr-naming-conventions.md).  


## License

Apache License  

Copyright 2013 Graham Campbell  

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at  

 http://www.apache.org/licenses/LICENSE-2.0  

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.  
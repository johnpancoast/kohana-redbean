kohana-redbean
==============
A __very__ basic integration of [Redbean](http://redbeanphp.com/) into [Kohana](http://kohanaframework.org/) v3.0+.

Install
-------
* Add as Kohana [module](http://kohanaframework.org/3.2/guide/kohana/modules).
* Get redbean repo by running `git submodule update --init` from with the redbean module directory.
* Copy the config/redbean.php to your application/config/redbean.php and add your DB settings.
* Check out Redbean's documentation.

Notes
-----
* This code is very early and is only enough to get something working ATM.
* It's very well possible that classes will be added to this module in which case it will only support
  Kohana v3.3 since the classes must adhere to [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md).

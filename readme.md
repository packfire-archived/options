#Packfire Options

> Better CLI argument processing in PHP

Options helps you to parse CLI arguments using callbacks and Closures (in PHP 5.3+) effectively. Implementing the [NDesk.Options (C#)](http://www.ndesk.org/Options) in PHP, you will be able to write neat CLI applications in PHP quickly.

##Requirements

- >= PHP 5.3

##Installation

To install Packfire Options, add the entry to your `composer.json` "require" section:

    "packfire/options": "1.0.*"


##Usage

	use Packfire\Options\OptionSet;

    $command = null;
    $quiet = false;
    $force = false;
    $linker = false;
    $file = '';

	$options = new OptionSet();

    $options->addIndex(0, function($value) use(&$command) {
                $command = $value;
            });
    $options->add('q', function() use(&$quiet) {
                $quiet = true;
            });
    $options->add('l', function() use(&$linker) {
                $linker = true;
            });
    $options->add('f', function() use(&$force) {
                $force = true;
            });
    $options->add('file=', function($value) use(&$file) {
                $file = $value;
            });

	$options->parse($_SERVER['argv']);

##Projects using Packfire Options

 - [PDC Dependency Checker](https://github.com/packfire/pdc)

##Contributors

- Sam-Mauris Yong (@thephpdeveloper)

##License

Packfire Options is licensed under the BSD 3-Clause License. See license file in repository for details.
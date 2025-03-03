
# Matex

Matex is a PHP Mathematical expression parser and evaluator library.
It allows safe execution and calculation of the arbitrary expressions.


## Installation

Matex can be installed using Composer package manager or manually connected to your project.

### Composer way

Make sure the [Composer](https://getcomposer.org) is installed and your project is properly configured to use Composer tool.
Execute in console the following code in order to connect Matex library:

```bash
$ composer require choate/matex
```

It will adjust the composer.json file of your project by adding Matex library as an requrement.
Check if Composer's `/vendor/autoload.php` is included/required in your project.

### Manual way

Download the Matex package and extract it in your project libraries folder.
If you use a custom php autoloader, the classes located in `/src/` folder are PSR-4 compatible, so may adjust the autoloader configuration and/or move the folder according to your rules.

For complete manual linking way, include the `src/Evaluator.php` in your project:

```php
<?php
	require 'path/to/matex/src/Evaluator.php';
```

### Testing

Once everything is properly configured, the `\Matex\` namespace classes should be available for usage.
The following code should run without any errors and will output `3` as result:

```php
$evaluator = new \choate\matex\Evaluator();
echo $evaluator->execute('1 + 2');
```


## Usage

See [examples](../examples/README.md) for code samples.


## Operators

Matex supports the following operators:

	+	Addition
	-	Subtraction 
	*	Multiplication
	/	Division
	^	Exponentiation
	%	Modulus
    ==	Equal
    !=	Not equal
    <	Less than
    <=	Less than or equal to
    >	Greater than
    >=	Greater than or equal to 
    &&	And
    ||	Or
   


## Author

Choate - <choate.yao@gmail> - https://github.com/choate

Dorin Marcoci - <dorin.marcoci@gmail.com> - <https://www.marcodor.com>


## License

Matex is distributed under [MIT license](../LICENSE.md).

<?php

/**
 * Test: Latte\Runtime\Filters::repeat()
 */

use Latte\Runtime\Filters;
use Latte\Runtime\FilterInfo;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


test(function () {
	$info = new FilterInfo('text');
	Assert::same('',  Filters::repeat($info, '', 1));
	Assert::same('ab',  Filters::repeat($info, 'ab', 1));
	Assert::same('',  Filters::repeat($info, 'ab', 0));
	Assert::same('ababababab',  Filters::repeat($info, 'ab', 5));
});


test(function () {
	$info = new FilterInfo('html');
	Assert::same('',  Filters::repeat($info, '', 1));
	Assert::same('ab',  Filters::repeat($info, 'ab', 1));
	Assert::same('',  Filters::repeat($info, 'ab', 0));
	Assert::same('ababababab',  Filters::repeat($info, 'ab', 5));
});

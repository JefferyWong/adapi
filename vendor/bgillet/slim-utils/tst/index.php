<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php'; 

use BenGee\Slim\Utils\StringUtils;

?>
<html>
<head>
<title>Test page for slim-utils package</title>
</head>
<body>
<h1>Test page for slim-utils package</h1>
<hr />
<h3>Test for StringUtils class</h3>
<ul>
	<li>emptyOrSpaces() method
		<ul>
			<li>
				<pre>StringUtils::emptyOrSpaces('Not an empty string')</pre>
				Result : <?php $result = StringUtils::emptyOrSpaces('Not an empty string'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::emptyOrSpaces('')</pre>
				Result : <?php $result = StringUtils::emptyOrSpaces(''); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::emptyOrSpaces(null)</pre>
				Result : <?php $result = StringUtils::emptyOrSpaces(null); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::emptyOrSpaces(false)</pre>
				Result : <?php $result = StringUtils::emptyOrSpaces(false); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::emptyOrSpaces(true)</pre>
				Result : <?php $result = StringUtils::emptyOrSpaces(true); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::emptyOrSpaces('    ')</pre>
				Result : <?php $result = StringUtils::emptyOrSpaces('    '); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::emptyOrSpaces('\r\n')</pre>
				Result : <?php $result = StringUtils::emptyOrSpaces('\r\n'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::emptyOrSpaces(array())</pre>
				Result : <?php $result = StringUtils::emptyOrSpaces(array()); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::emptyOrSpaces(array(1))</pre>
				Result : <?php $result = StringUtils::emptyOrSpaces(array(1)); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::emptyOrSpaces(array(1, 2, 3))</pre>
				Result : <?php $result = StringUtils::emptyOrSpaces(array(1, 2, 3)); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
		</ul>
	</li>
	<li>camelize() method
		<ul>
			<li>
				<pre>StringUtils::camelize(null, false)</pre>
				Result : <?php
                         try 
                         { 
                             $result = StringUtils::camelize(null, false);
                         }
                         catch (\Exception $e)
                         {
                             $result = '[!!! Exception !!!]';
                         }
                         echo $result . ' (' . ($result == '[!!! Exception !!!]' ? 'SUCCESS' : 'FAILED') . ')';
                         ?>
			</li>
			<li>
				<pre>StringUtils::camelize(array(), false)</pre>
				Result : <?php
                         try 
                         { 
                             $result = StringUtils::camelize(array(), false);
                         }
                         catch (\Exception $e)
                         {
                             $result = '[!!! Exception !!!]';
                         }
                         echo $result . ' (' . ($result == '[!!! Exception !!!]' ? 'SUCCESS' : 'FAILED') . ')';
                         ?>
			</li>
			<li>
				<pre>StringUtils::camelize('a string to camelize1', false)</pre>
				Result : <?php $result = StringUtils::camelize('a string to camelize1', false); echo $result . ' (' . ($result == 'aStringToCamelize1' ? 'SUCCESS' : 'FAILED') . ')'; ?>
			</li>
			<li>
				<pre>StringUtils::camelize('a string to camelize_2', true)</pre>
				Result : <?php $result = StringUtils::camelize('a string to camelize_2', true); echo $result . ' (' . ($result == 'AStringToCamelize2' ? 'SUCCESS' : 'FAILED') . ')'; ?>
			</li>
			<li>
				<pre>StringUtils::camelize('À_string-TO camelize=3', false)</pre>
				Result : <?php $result = StringUtils::camelize('À_string-TO camelize=3', false); echo $result . ' (' . ($result == 'aStringToCamelize3' ? 'SUCCESS' : 'FAILED') . ')'; ?>
			</li>
		</ul>
	</li>
	<li>startsWith() method
		<ul>
			<li>
				<pre>StringUtils::startsWith(null, '')</pre>
				Result : <?php 
                         try
                         {
                            $result = StringUtils::startsWith(null, '');
                         }
                         catch (\Exception $e)
                         {
                            $result = '[!!! Exception !!!]';
                         }
                         echo $result . ' (' . ($result == '[!!! Exception !!!]' ? 'SUCCESS' : 'FAILED') . ')';
                         ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('', array())</pre>
				Result : <?php 
                         try
                         {
                            $result = StringUtils::startsWith('', array());
                         }
                         catch (\Exception $e)
                         {
                            $result = '[!!! Exception !!!]';
                         }
                         echo $result . ' (' . ($result == '[!!! Exception !!!]' ? 'SUCCESS' : 'FAILED') . ')';
                         ?>
			</li>
			<li>
				<pre>StringUtils::startsWith(array(), null)</pre>
				Result : <?php 
                         try
                         {
                            $result = StringUtils::startsWith(array(), null);
                         }
                         catch (\Exception $e)
                         {
                            $result = '[!!! Exception !!!]';
                         }
                         echo $result . ' (' . ($result == '[!!! Exception !!!]' ? 'SUCCESS' : 'FAILED') . ')';
                         ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('', '')</pre>
				Result : <?php $result = StringUtils::startsWith('', ''); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('', 'test')</pre>
				Result : <?php $result = StringUtils::startsWith('', 'test'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('test string', '')</pre>
				Result : <?php $result = StringUtils::startsWith('test string', ''); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('test string', 'te')</pre>
				Result : <?php $result = StringUtils::startsWith('test string', 'te'); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('test string', 'es')</pre>
				Result : <?php $result = StringUtils::startsWith('test string', 'es'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('test string', '\r\ntest')</pre>
				Result : <?php $result = StringUtils::startsWith('test string', '\r\ntest'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('test string', 'tests')</pre>
				Result : <?php $result = StringUtils::startsWith('test string', 'tests'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('\r\ntest string', 'test')</pre>
				Result : <?php $result = StringUtils::startsWith('\r\ntest string', 'test'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('\r\ntest string', '\r\ntest')</pre>
				Result : <?php $result = StringUtils::startsWith('\r\ntest string', '\r\ntest'); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('\r\ntest string', '\r')</pre>
				Result : <?php $result = StringUtils::startsWith('\r\ntest string', '\r'); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::startsWith('\r\ntest string', '\n')</pre>
				Result : <?php $result = StringUtils::startsWith('\r\ntest string', '\n'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
		</ul>
	</li>
	<li>endsWith() method
		<ul>
			<li>
				<pre>StringUtils::endsWith(null, '')</pre>
				Result : <?php 
                         try
                         {
                            $result = StringUtils::endsWith(null, '');
                         }
                         catch (\Exception $e)
                         {
                            $result = '[!!! Exception !!!]';
                         }
                         echo $result . ' (' . ($result == '[!!! Exception !!!]' ? 'SUCCESS' : 'FAILED') . ')';
                         ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('', array())</pre>
				Result : <?php 
                         try
                         {
                            $result = StringUtils::endsWith('', array());
                         }
                         catch (\Exception $e)
                         {
                            $result = '[!!! Exception !!!]';
                         }
                         echo $result . ' (' . ($result == '[!!! Exception !!!]' ? 'SUCCESS' : 'FAILED') . ')';
                         ?>
			</li>
			<li>
				<pre>StringUtils::endsWith(array(), null)</pre>
				Result : <?php 
                         try
                         {
                            $result = StringUtils::endsWith(array(), null);
                         }
                         catch (\Exception $e)
                         {
                            $result = '[!!! Exception !!!]';
                         }
                         echo $result . ' (' . ($result == '[!!! Exception !!!]' ? 'SUCCESS' : 'FAILED') . ')';
                         ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('', '')</pre>
				Result : <?php $result = StringUtils::endsWith('', ''); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('', 'test')</pre>
				Result : <?php $result = StringUtils::endsWith('', 'test'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('test string', '')</pre>
				Result : <?php $result = StringUtils::endsWith('test string', ''); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('test string', 'ng')</pre>
				Result : <?php $result = StringUtils::endsWith('test string', 'ng'); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('test string', 'te')</pre>
				Result : <?php $result = StringUtils::endsWith('test string', 'te'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('test string', '\r\nstring')</pre>
				Result : <?php $result = StringUtils::endsWith('test string', '\r\nstring'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('test string', 'strings')</pre>
				Result : <?php $result = StringUtils::endsWith('test string', 'strings'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('test string\r\n', 'string')</pre>
				Result : <?php $result = StringUtils::endsWith('test string\r\n', 'string'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('test string\r\n', 'string\r\n')</pre>
				Result : <?php $result = StringUtils::endsWith('test string\r\n', 'string\r\n'); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('test string\r\n', '\n')</pre>
				Result : <?php $result = StringUtils::endsWith('test string\r\n', '\n'); echo ($result ? 'true (SUCCESS)' : 'false (FAILED)'); ?>
			</li>
			<li>
				<pre>StringUtils::endsWith('test string\r\n', '\r')</pre>
				Result : <?php $result = StringUtils::endsWith('test string\r\n', '\r'); echo ($result ? 'true (FAILED)' : 'false (SUCCESS)'); ?>
			</li>
		</ul>
	</li>
</ul>
</body>
</html>

<?php
// change data types in variables
//changing of boolean to integer
echo 'Boolean "true" to integer:';
var_dump((int)true);
echo 'Boolean "false" to integer:';
var_dump((int)false);
echo PHP_EOL;

echo 'Integer "1" to boolean:';
var_dump((bool)1);
echo 'Integer "0" to boolean:';
var_dump((bool)0);
echo 'Integer "-3" to boolean:';
var_dump((bool)-3);
echo PHP_EOL;

echo 'Float "56.73" to integer:';
var_dump((int)56.73);
echo 'Integer "56" to float:';
var_dump((float)56);
echo PHP_EOL;

echo 'String "red apples" to integer:';
var_dump((int)'red apples');
echo 'String "10 apples" to integer:';
var_dump((int)'10 apples');
echo 'String "10 apples and 6 pears" to integer:';
var_dump((int)'10 apples and 6 pears');
echo 'Integer "125" to string: ';
var_dump((string)'125');
echo PHP_EOL;

echo 'Array "[1, 2, 3]" to srting: ';
var_dump((string)[1, 2, 3]);
echo 'String "red aples" to array: ';
var_dump((array)'red apples');
echo PHP_EOL;

echo 'Array "[1, 2, 3]" to object: ';
var_dump((object)[1, 2, 3]);
echo 'Object "stdClass" to array: ';
var_dump((array)'stdClass');
echo PHP_EOL;

echo 'String "10 apples" to boolean: ';
var_dump((bool)'10 apples');
echo 'Boolean "true" to string: ';
var_dump((string)'true');
echo 'Float "89.45" to string: ';
var_dump((string)'89.45');
echo PHP_EOL;


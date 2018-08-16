<?php
//text strings in different formats
$author = 'Oscar Wild';
echo 'Simple single-quoted string with variable by $author' . PHP_EOL;
echo 'Simple single-quoted string with escaping by \'' . $author . '\'' . PHP_EOL;
echo "Simple double-quoted string with variable by {$author}" . PHP_EOL;
echo "Double-quoted string with escape sequences\n by '{$author}'" . PHP_EOL;

echo PHP_EOL;
echo <<<HEREDOC
It was famous roman 
created by great author
"{$author}"
HEREDOC;

echo PHP_EOL . PHP_EOL;
echo <<<'NOWDOC'
It was famous roman 
created by great author
"{$author}"
NOWDOC;









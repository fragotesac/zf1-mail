<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.0.0', '>=')) {
    return array();
}

$ignoreErrors   = array();
$ignoreErrors[] = array(
    'message' => '#^Binary operation "\\^" between \\(string\\|false\\) and non\\-empty\\-string results in an error\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/src/Zend/Mail/Protocol/Smtp/Auth/Crammd5.php',
);

return array('parameters' => array('ignoreErrors' => $ignoreErrors));

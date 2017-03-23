<?php

use JsonSchema\Validator;

require __DIR__ . '/../../../vendor/autoload.php';

header('Content-Type: text/plain');
http_response_code(200);

// Decode the request body
$data = json_decode(file_get_contents('php://input'));

$validator = new Validator();

foreach ([1, 2] as $version) {
    $validator->validate($data, (object)['$ref' => 'file://' . realpath("schema-v{$version}.json")]);

    if ($validator->isValid()) {
        echo "JSON is valid for version $version.\n";
    } else {
        echo "JSON is invalid for version $version. Violations:\n";
        foreach ($validator->getErrors() as $error) {
            echo sprintf(
                "[%s] %s\n",
                $error['property'],
                $error['message']
            );
        }
    }
}

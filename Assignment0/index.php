<?php

function isValid($s) {
    $stack = [];
    $map = 
    [
        ")" => "(",
        "]" => "[",
        "}" => "{"
    ];

    $chars = str_split($s);

    foreach ($chars as $c) 
    {
        if ($c === "(" || $c === "[" || $c === "{") 
        {
            array_push($stack, $c);
        } 
        else 
        {
            if (empty($stack)) return false;

            $top = array_pop($stack);

            if ($top !== $map[$c]) return false;
        }
    }

    return empty($stack);
}

echo isValid("()[]{}") ? "true" : "false";
echo "\n";
echo isValid("([)]") ? "true" : "false";

?>

<?php
require_once "./reflection/Some.php";

$refclass = new ReflectionClass("Some");
$methods = get_class_methods("ReflectionClass");

foreach ($methods as $method) {

    echo $refclass->hasMethod($method) ? $method . '<br/>' : "";
}

$methods = $refclass->getMethods();

$props = [
    "isUserDefined",
    "isInternal",
    "isPublic",
    "isAbstract",
    "isProtected",
    "isPublic",
    "isPrivate",
    "isStatic",
    "isFinal",
    "isConstructor",
];
echo "<pre>";
foreach ($methods as $method) {
    echo "<hr>Метод: ", $method, "<br>";
    foreach ($props as $prop) {
        echo "$prop: ", $method->$prop(), "<br>";
    }
}
echo "</pre>";

$method = $refclass->getMethod("someFunc");
$parameters = $method->getParameters();
$props = [
    "allowsNull",
    "getDefaultValue",
    "getName",
    "getPosition",
    "isArray",
    "isCallable",
];
echo "<pre>";
//print_r($methods);
foreach ($parameters as $parameter) {
    echo "<hr>Аргумент: ", $parameter->getName(), "<br>";
    foreach ($props as $prop) {
        echo "$prop: ", $parameter, "<br>";
    }
}
echo "</pre>";

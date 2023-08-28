<?php
function buildDefinitionList ($definitions)
{
    if (empty($definitions)) {
        return '';
    }

    $result = [];
    foreach ($definitions as $definition) {
        $name = $definition[0];
        $description = $definition[1];
        $result[] = "<dt>{$name}</dt><dd>{$description</dd>";
    }
    $innerValue = implode('', $result);
    $result = "<dl>{$innerValue}</dl>";

    return $result;
}
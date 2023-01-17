<?php
echo 'Create your list of choices: ' . "\n\n";

$choices = array();

do {
  $choices[] = readline('Add a choice? (Type 0 to stop)');

} while ('0' != end($choices));

array_pop($choices);

echo $choices;


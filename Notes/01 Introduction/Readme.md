# A) The First Steps
PHP(Hypertext Preprocessor) is a server side scripting language which is used to perform operations on database.
### 1) Embedding PHP

For embedding Php in HTML we use the format 
```
<?php   ?>
```
Their are other formats available as well but they may not be supported or turned on by the user running the script on his machine. So we use the default format.

### 2) Using Dynamic Data

We declare variables in php using the **$ sign** 

Example:
```
<?php $title = "Any title"; ?>
---
<h1><?php echo $title; ?></h1>
```

So the above example clearly states how we can define a variable in PHP and further use it in our html code.

### 3) Comments

Their are two types of comments available in Php

- **Single Line Comment** 
```
//This is a single line comment
```
- **Multi Line Comment**
```
/* This is a multi line
  comment */
```

# B) Data Types and More

### 1)Variables

In php we can assign integers, strings, images, html code and various different types in variables. But at a time we can assign only one value to a variable like every other language.
```
<?php 
    $var1 = 100;
    $var2 = 'NAME';
    //We use . to concatenate a string with variables in php
    echo $var1 . " " . $var2;
?>
```

### 2)Arrays

In php we are also provided with the arrays. So the various ways to define arrays in php are stated in the example given below. The arrays in php are zero based indexed. The arrays in php can have values of different data types at the same time as well.
```
$arr1 = array(23, 43, 23, 51, 'hi', '<h1>Hello</h1>');
/* This is another way to declare arrays in php 
  $arr2 = [];
*/
//This code would print 43
echo $arr1[1];
```
Other than this their is a function in php to print the whole array along with their indexes.
```
print_r($arr1);
```
The output to the above code would be
```
Array([0] => 23 [1] => 43 [2] => 23 [3] => 51 [4] => hi [5] => HELLO)
```


In php we are also provided with the facility of using key value pairs but with a different name to it. In php we use **associative arrays**, below is a typical example of associative arrays.
```
$names = array('first name' => 'David', 'second name' => 'Hilton');
echo print_r($names);
echo $names['first name'];
```

# C) Control Structures

### 1) if statement

The below code is self explanatory and will clear the concept of if statements in php.
```
<?php
  $a = 10;
  $b = 20;
  if($a > $b) {
    echo "a is greater than b";
  }
  else if($a < $b) {
    echo "a is less than b";
  }
  else {
    echo "a is equal to b";
  }
?>
```

### 2) Comparison operators

- equal ==
- identical ===
- compare ( > ), ( < ), ( >= ), ( <= ) 
- not equal !=
- not identical !==

### 3) Logical Operators

- AND &&
- OR ||
- NOT !

### 4) Switch statements 

```
<?php
  $num = 10;
  switch($num) {
    case 1: 
      echo "This is 1";
      break;
    case 10: 
      echo "This is 10";
      break;
    case 100: 
      echo "This is 100";
      break;
    default:
      echo "Default case";
  }
?>
```

### 5) Loops

#### a) While loop
```
$a = 1;
while($a < 5) {
  echo $a;
  $a++;
}
```
#### b) For loop
```
for($a = 1; $a < 10; $a++) {
  echo $a . "<br>";
}
```
#### c) Foreach loop
```
$numbers = array(234, 23, 342, 5466, 657, 82342);
foreach($numbers as $number) {
  echo $number . "<br>";
}
```

# D) Functions, Global Variables and Constants


### 1) Functions

#### Defining Functions

```
function basic() {
  calculate();
  echo "<br>";
  saySomething();
}

function calculate() { 
  echo 10 + 20;
}

function saySomething() {
  echo "I am not in the mood to say anything at all";
}

basic();
```

#### Function Parameters

```
function calculate($a, $b) {
  $sum = $a + $b;
  echo $sum;
}

calculate(10, 20);
```

#### Return Values from Functions

```
function add($a, $b) {
  $sum = $a + $b;
  return $sum;
}

$result = add(10, 20);
```

### 2) Global Variables and Scope

If we want to change the value of a global variable inside a function we can do something like

```
$x = "outside";   //global 
function fun() {
  global $x;
  $x = "inside";
}

echo $x;  //Outputs outside
fun();
echo $x;  //Outputs inside
```

### 3) Constants

For defining a constant we use something like
```
define(NAME, "David");
```
If we try to change the value of NAME it will create an error.

When using the const keyword, only scalar data (boolean, integer, float and string) can be contained in constants prior to PHP 5.6. From PHP 5.6 onwards, it is possible to define a constant as a scalar expression, and it is also possible to define an array constant. It is possible to define constants as a resource, but it should be avoided, as it can cause unexpected results.
```
const CONSTANT = 'Hello World';
```
It is possible to assign an array with this method like so.
```
const ANIMALS = array('dog', 'cat', 'bird');
```
Some examples from the docs below, so you can copy it and try it in your php file.
```
// Works as of PHP 5.3.0
const CONSTANT = 'Hello World';
echo CONSTANT;

// Works as of PHP 5.6.0
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;
const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // outputs "cat"

// Works as of PHP 7
define('ANIMALS', array('dog', 'cat', 'bird'));
echo ANIMALS[1]; // outputs "cat"
```

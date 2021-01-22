# A) The First Steps

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

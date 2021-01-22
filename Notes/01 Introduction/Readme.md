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

In php we can assign integers, strings, images, html code and various different types in variables.
```
<?php 
    $var1 = 100;
    $var2 = 'NAME';
    //We use . to concatenate a string with variables in php
    echo $var1 . " " . $var2;
?>
```

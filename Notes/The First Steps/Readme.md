## Embedding PHP

For embedding Php in HTML we use the format 
```
<?php   ?>
```
Their are other formats available as well but they may not be supported or turned on by the user running the script on his machine. So we use the default format.

## Using Dynamic Data

We declare variables in php using the **$ sign** 

Example:
```
<?php $title = "Any title"; ?>
---
<h1><?php echo $title; ?></h1>
```

So the above example clearly states how we can define a variable in PHP and further use it in our html code.

## Comments

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

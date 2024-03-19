<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
</body>
</html>

<?php
    /*
        PHP Regular Expressions, What is a Regular Expression?
        A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for. A regular expression can be a single character, or a more complicated pattern. Regular expressions can be used to perform all types of text search and text replace operations.

        Syntax, In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers.

        $expression = /searchpattern/modifiers
        $expression = #search/pattern#modifiers
        $expression = ~searchpattern~modifiers

        ex. $expression = /we/i

        Regular Expression Functions
        PHP provides a variety of functions that allow you to use regular expressions.
        The most common functions are:

        Function 	        Description
        preg_match() 	    Returns 1 if the pattern was found in the string and 0 if not
        preg_match_all() 	Returns the number of times the pattern was found in the string, which  
                            may also be 0
        preg_replace() 	    Returns a new string where matched patterns have been replaced 
                            with another string

    */ 

    $string= "welcome to world of php regular expression with 1 12 123 1234 11";
    $pattern = "/to/i";
    echo preg_match($pattern, $string);
?>  
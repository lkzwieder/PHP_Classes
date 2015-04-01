MinifierCSS.php
===

This minifier class was made with a few things in mind:
- Simplicity
- Legibility
- Performance

The result was less than 15 lines.

In order to use this class properly you need to call the minify function with the CSS-string you want to minify.

``` php
$minified = MinifierCSS::minify($css);
```

###The methods and functions I used to do this class was tested in order to choose the best performance.
And that's all folks!
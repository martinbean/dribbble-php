# PHP Wrapper for Dribbble API

## Authors
* Martin Bean (martin@mcbwebdesign.co.uk)  
* Zach Dunn (zach@onemightyroar.com)

## Change Log

### 2.2
* Made library completely PSR-0 compliant
* Updated method names to be camelCased

### 2.1
* Added Composer support

### 2.0
* Completely re-factored; check out the new examples

### 1.0
* Player class now supports draftees and followers. See the new example page for use cases.  
* New proposed MIT license added to the repo.  
* Player class now returns specific player lists instead of entire player objects for `draftees()` and `following()`  
* The old `following()` method is now `shots_by_following()`, since it makes more sense semantically.  

## Install
Simply deploy the files onto your web server's file system. Requires the cURL and JSON extensions to be enabled on your web server.

## Thanks
Jeremy Weiskotten, who inspired me to write this. If Ruby on Rails is more your flavour, check out his Ruby gem, swish, which is a Ruby wrapper for the Dribbble API: http://github.com/jeremyw/swish
Some cues were also taken from Facebook's PHP SDK for version 2.0.
    
## License
Licensed under the MIT license. See LICENSE.txt for further information.

## Bugs
Please track bugs using the issues tab of this project on GitHub [https://github.com/martinbean/dribbble-php/issues](https://github.com/martinbean/dribbble-php/issues)
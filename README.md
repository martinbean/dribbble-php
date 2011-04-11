# PHP Wrapper for Dribbble API

## AUTHORS
Martin Bean (martin@mcbwebdesign.co.uk)
Zach Dunn (zach@onemightyroar.com)

## ChangeLog
** 2/6/2011 (Zach Dunn)**
- Tagged for v1.0
- Player class now supports draftees and followers. See the new example page for use cases. 
- New proposed MIT license added to the repo.
- Player class now returns specific player lists instead of entire player objects for `draftees()` and `following()`
- The old `following()` method is now `shots_by_following()`, since it makes more sense semantically.

## NEWS
-

## INSTALL
Simply deploy the files onto your web server's file system. Your server does require the `fopen` option though until an alternative method is used to fetch data from URLs.

## THANKS
Jeremy Weiskotten, who inspired me to write this. If Ruby on Rails is more your flavour, check out his Ruby gem, swish, which is a Ruby wrapper for the Dribbble API: http://github.com/jeremyw/swish
    
## COPYING / LICENSE
Licensed under the MIT license. See LICENSE.txt for further information.

## BUGS
Please track bugs using the issues tab of this project on GitHub [https://github.com/martinbean/dribbble-php/issues](https://github.com/martinbean/dribbble-php/issues)
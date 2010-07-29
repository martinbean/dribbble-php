<?php
/**
 * Examples for using the Dribbble API PHP wrapper
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 */

require_once('src/dribbble.php');

$dribbble = new Dribbble();

# find a shot
$shot = $dribbble->shot->find(38126);

# see some data about the shot
$shot->title;
$shot->image_url;
$shot->url;
$shot->player->name;

# Find more shots
# inspiring       = $dribbble->shot->popular();
# call_the_police = $dribbble->shot->everyone();
# yay_noobs       = $dribbble->shot->debuts();

# Paginate through shots (default is 15 per page, max 30)
$dribbble->shot->popular(array('page' => 2, 'per_page' => 3));
$dribbble->shot->everyone(array('page' => 10, 'per_page' => 5));
$dribbble->shot->debuts(array('page' => 5, 'per_page' => 30));

# Find a player
$player = $dribbble->player->find('martinbean');

# See some data about the player
$player->name;
$player->avatar_url;
$player->url;
$player->location;

# List a player's shots
$player->shots();
$player->shots(array('page' => 2, 'per_page' => 10));

# List shots by player's that this player follows
$player->following(array('page' => 5, 'per_page' => 30));
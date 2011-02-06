<?php

 error_reporting(E_ALL); 
 ini_set("display_errors", 1); 

require_once('../src/dribbble.php');

$dribbble = new Dribbble();

# find a shot
$player = $dribbble->player->find('simplebits');

# Get last 3 draftees on first page
$draftees = $player->draftees(array('page' => 1, 'per_page' => 3));

# API returns 15 per page by default
$following = $player->following(array('page' => 1));

$recent_shots = $player->shots(array('page' => 1, 'per_page' => 3));

?>
<!DOCTYPE html>
<html>

	<head>
		<title>Player Examples | Dribbble PHP</title>
		<link rel="stylesheet" href="css/style.css" />
		
	</head>
	
	<body>
	
		<header>
			<h1>dribbble API (PHP) / <span>Player Info</span></h1>
		</header>
		
		<section>
			<img class="avatar" src="<?php echo $player->avatar_url; ?>" alt="<?php echo $player->username; ?>"/>
			<h1><?php echo $player->name; ?> (<?php echo $player->username; ?>)</h1>
			<p><?php echo $player->location; ?> / <a href="http://twitter.com/<?php echo $player->twitter_screen_name; ?>">Twitter</a> / <a href="<?php echo $player->url; ?>">Profile on Dribbble</a></p>
			<p><strong>Stats:</strong> Following <?php echo $player->following_count; ?>, drafted  <?php echo $player->draftees_count; ?>,  <?php echo $player->shots_count; ?> shots,  <?php echo $player->followers_count; ?> followers</p>
		</section>
		
		<section>
		
			<h1>Recent Shots</h1>
			
			<ul class="shots">
			<?php
			
				//If we're using the same dribbble object, this will overwrite previous calls
				
				foreach ($recent_shots as $shot) { ?>
				
				<li>
					<h2><a href="<?php echo $shot->url;?>"><?php echo $shot->title; ?></a></h2> 
					<a href="<?php echo $shot->url;?>"><img src="<?php echo $shot->image_url; ?>" alt="<?php echo $shot->title; ?>"/></a>
					<p>Posted <?php echo date('M jS, Y',strtotime($shot->created_at)); ?></a>
				</li>
				
			<?php } ?>
			
			</ul>
			
		</section>
		
		<section>
			
			<h1>Draftees</h1>
			<p>Displaying first 3 returned</p>
			<?php if($draftees) : ?>
			
				<ul class="player-list">
				<?php foreach ($draftees as $draftee) : ?>
					<li><a href="<?php echo $draftee->url; ?>"><?php echo $draftee->name; ?></a></li>
				<?php endforeach; ?>
				</ul>
				
			<?php else : ?>
				<p><?php echo $player->username; ?> hasn't drafted anyone yet.</p>
			<?php endif; ?>
			
			<h1>Following</h1>
			
			<?php if ($following) : ?>
				<p>Displaying first page returned</p>
				<ul class="player-list">
				
				<?php foreach ($following as $user) { ?>
					
					<li><a href="<?php echo $user->url; ?>"><?php echo $user->name; ?></a></li>
					
				<?php } ?>
				
				</ul>
			
			<?php else : ?>
			
				<p><?php echo $player->username; ?> isn't following anyone yet.</p>
			
			<?php endif; ?>
		</section>
		
		<footer>
			<p>This page uses the <a href="http://github.com/martinbean/dribbble-php" title="Dribbble PHP Wrapper on GitHub" target="_blank">Dribbble PHP Wrapper</a> built for <a href="http://dribbble.com/api">Dribbble's API</a>.</p>
		</footer>
		
	</body>

</html>
<?php

require_once('../src/dribbble.php');

$dribbble = new Dribbble();

# find a shot
$shot = $dribbble->shot->find(62170);

# Get first 5 comments on first page
$comments = $shot->comments(array('page' => 1, 'per_page' => 5));

?>
<!DOCTYPE html>
<html>

	<head>
		<title>Comment Examples | Dribbble PHP</title>
		<link rel="stylesheet" href="css/style.css" />
		
	</head>
	
	<body>
	
		<header>
			<h1>dribbble API (PHP) / <span>Comments</span></h1>
		</header>
		
		<section>
		
			<h1>Original Shot</h1>
			
			<ul class="shots">
				<li>
					<h2><a href="<?php echo $shot->url;?>"><?php echo $shot->title; ?></a></h2> 
					<a href="<?php echo $shot->url;?>"><img src="<?php echo $shot->image_url; ?>" alt="<?php echo $shot->title; ?>"/></a>
					<p>from <a href="<?php echo $shot->player->url; ?>"><?php echo $shot->player->name; ?></a>
				</li>
			</ul>
			
		</section>
		
		<section>
			<h1>Comments</h1>
			<?php if ($comments) : ?>
	
				<ul class="comments">
				
				<?php foreach ($comments as $comment) { ?>
					
					<li>
						<p><span class="author"><a href="<?php echo $comment->player->url; ?>"><?php echo $comment->player->name; ?></a> says:</span> <?php echo $comment->body; ?></p>
					</li>
					
				<?php } ?>
				
				</ul>
			
			<?php else : ?>
			
				<p>No comments on this shot yet</p>
			
			<?php endif; ?>
		</section>
		
		<footer>
			<p>This page uses the <a href="http://github.com/martinbean/dribbble-php" title="Dribbble PHP Wrapper on GitHub" target="_blank">Dribbble PHP Wrapper</a> built for <a href="http://dribbble.com/api">Dribbble's API</a>.</p>
		</footer>
		
	</body>

</html>
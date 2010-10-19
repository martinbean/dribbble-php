<?php
/**
 * Examples for using the Dribbble API PHP wrapper
 * An expansion of the wrapper that includes start of comments
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 * Edits by Zach Dunn (onemightyroar.com)
 */

error_reporting(E_ALL); 
ini_set("display_errors", 1); 

require_once('src/dribbble.php');

echo "<h1>Dribbble w/ Comments</h1>";
$dribbble = new Dribbble();

# find a shot
$shot = $dribbble->shot->find(62170);

# Alternate Direct call to comments
# $comments = $dribbble->shot->find(21690)->comments(array('per_page' => 2));

# Get comments
$comments = $shot->comments(array('per_page' => 4));

if ($comments) :

	echo "<ol>";
	
	foreach ($comments as $comment) { ?>
		
		<li><?php echo $comment->body; ?> from <a href="<?php echo $comment->player->url; ?>"><?php echo $comment->player->name; ?></a></li>
		
	<?php }
	
	echo "</ol>";

else : 

	echo "No Comments";

endif;

#echo '<pre>';
#	var_dump($shot->comments());
#echo '</pre>';

?>
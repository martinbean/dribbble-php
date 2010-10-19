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

$dribbble = new Dribbble();

# find a shot (must come before comments/rebounds call
$shot = $dribbble->shot->find(65147);

# Get rebounds
$rebounds = $shot->rebounds(array('per_page' => 4));

echo "<h1>Rebounds of " . $shot->title . " (#" . $shot->id . ")</h1>";

if ($rebounds) :

	echo "<ol>";
	
	foreach ($rebounds as $rebound) { ?>
		
		<li>
			<h2><a href="<?php echo $rebound->url;?>"><?php echo $rebound->title; ?></a></h2> 
			<img src="<?php echo $rebound->image_url; ?>" alt="<?php echo $rebound->title; ?>"/>
			<p>from <a href="<?php echo $rebound->player->url; ?>"><?php echo $rebound->player->name; ?></a>
		</li>
		
	<?php }
	
	echo "</ol>";

else : 

	echo "No Rebounds";

endif;

?>
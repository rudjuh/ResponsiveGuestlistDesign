<?php
include 'header.php';
?>
	<div class="row content">
		<div class="col-md-8">
		<?php
if(empty($events)) {
    echo "<h2> No Events </h2>";
    return;
}
echo "<ul>";
$x = 0;
foreach($events as $e):
    //all of this should be in a pic helper
    //

    $imgPath = $this->Pic->getEventImagePath($e['Event']['id'], $e['Event']['created'], "small");

    //if (($imagesize = Cache::read('eventsimagesize-' . $e['Event']['id'])) === false):
    //$imagesize = getimagesize($imgPath);
    //Cache::write('eventsimagesize-' . $e['Event']['id'], $imagesize);
    //endif;
    //list($width, $height, $type, $attr) = $imagesize;

    $width = $height = 1;

    $ratio  = $width/$height;
    if($ratio < 1 && $width != 1) {
        $class = " fullWidth " ;
        $width = $height = "";
    } else if($ratio >= 1 && $width != 1){
        $class = " tempHeight fullWidth" ;
        $width = $height = "";
    } else {
        if ($width == 1 &&  $height== 1){

            $width = " width=\"140\"";
            $height= " height=\"140\" ";
        }
    }
    // RATIO : 1 ( 150/150)
    ?>
        <li class="musicEvent easeInOutAll200 ">

	        <a class="clearfix linkToEvent  easeInOutAll200" href="/london/clubs/<?php echo(!empty($e['Venue']['slug'])?$e['Venue']['slug']:'no-venue-slug'); ?>/event/<?php echo $e['Event']['id']; ?>/<?php echo $e['Event']['slug']; ?>/">

		        <div class="eventImage easeInOutAll200">
		        	<img class="easeInOutAll200 <?php if(!empty($class)) { echo $class; } ?>" src="<?php echo $imgPath; ?>" <?php echo $width.$height; ?> alt="music event " />
		        </div>

		        <div class="eventDescription  easeInOutAll200">
			        <div class="eventTitle">
			        	<h3> <?php echo $e['Event']['name']; ?> </h3>

			        	<p  class="eventDjs"><?php if(!empty( $e['Event']['maindjs'])): ?><?php echo $e['Event']['maindjs']; ?><?php endif; ?></p>
			        </div>

			        <ul class="eventDetails">
	                <li class="time">
							<span class="iconsEvent"> </span>
							<?php echo date('ga',strtotime($e['Event']['start'])); ?>
                            <?php if(!empty($e['Event']['end'])): ?>
                                <?php echo " - ".date('ga',strtotime($e['Event']['end'])); ?>
                            <?php endif; ?>
                    </li>
						<?php if(!empty($e['Venue'])):
                             echo '<li class="venue">
                                     <span class="iconsEvent"> </span>';
                                    echo $e['Venue']['name']; ?>
                                   </li>
                        <?php endif;?>

    <?php
    if(empty($e['Genre']) )
        echo "&nbsp";
    else
        echo '<li class="eventGenre"><span class="iconsEvent"> </span>';
    foreach($e['Genre'] as $g) {
        echo "<span> ".$g['name']."</span>";
    }
    echo "</li>"
    ?>
			        </ul>

			    </div>


			</a>
<br class="clr" />
        </li><!--musicevents-->
		<?php
    $x++;
endforeach;
?>

</ul>
<script>

    $('.musicEvent').each(function(i, el) {
        var element = $(el).find('p.eventDjs');
        element.text(element.text().substring(0, 25));
    });

</script>
		</div>
		
		<div class="col-md-4">
		
		</div>
	</div>



<?php
include 'footer.php';
?>
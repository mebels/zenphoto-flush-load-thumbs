<!--ATTENTION: It is only the div-box "padbox" snippet for loading thumbs-->
      
      <div id="padbox">
       <div class="albumdesc">			
				<?php echo nl2br(getAlbumDesc()); ?>
       </div>

<?php
// initial the PHP flush
if (ob_get_level() == 0) { ob_start(); }
?>
				<div id="images">
					<?php while (next_image()): ?>
						<div class="image">
							<div class="imagethumb">
								<a href="<?php echo html_encode(getImageURL()); ?>">
									<?php printImageThumb(getAnnotatedImageTitle(), "", "", getAnnotatedImageTitle()); ?>
								</a>
							</div>
						</div>
<?php
// start the PHP flush
ob_flush();
flush();
usleep(30000);
?>
					<?php endwhile; ?>
				</div>
				<br class="clearfloat">
				<div id="albums">
					<?php while (next_album()): ?>
						<div class="album">
							<div class="thumb">
								<a href="<?php echo html_encode(getAlbumURL()); ?>"><?php printAlbumThumbImage(getAnnotatedAlbumTitle(), "", "", getAnnotatedAlbumTitle()); ?></a>
							</div>
							<div class="albumdesc">
								<h3><a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php printAnnotatedAlbumTitle(); ?>"><?php printAlbumTitle(); ?></a></h3>
							</div>
						</div>
<?php
// start the PHP flush
ob_flush();
flush();
usleep(30000);
?>
					<?php endwhile; ?>
				</div>
				<br class="clearfloat">
			</div>

<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $row_count => $row):?>
	<div class="article">
		<div class="article-content">
			<h2 class="article-title"><?php print $row['title']; ?></h2>
			<p class="post-details">Posted on <span><?php print $row['created']; ?></span> in <?php print $row['name']; ?></p>
			<div class="article-teaser">
			<?php print $row['body']; ?> [...]
			</div>
			
			<div class="buttons">
			<div class="comments">Leave a Comment</div>
			<div class="continue">Continue Reading</div>
			</div>
		
		</div>
		<div class="article-img">
		<?php print $row['field_image']; ?>
		</div>
	</div>
<?php endforeach; ?>
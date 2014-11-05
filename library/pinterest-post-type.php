<?php



$postType = array(
		'singular_name'=> 'Pinterests'
);

$pinterests = new CheesecakePostTypes\PostType($postType);
$pinterests->register();

$taxonomy = array('singular'=>'apin', 'plural'=>'apins');
$pinterests->addTaxonomy($taxonomy);

$customPostTaxonomies = get_object_taxonomies('Pinterests');

if(count($customPostTaxonomies) > 0)
{
	foreach($customPostTaxonomies as $tax)
	{
		$args = array(
				'orderby' => 'name',
				'show_count' => 0,
				'pad_counts' => 0,
				'hierarchical' => 1,
				'taxonomy' => $tax,
				'title_li' => ''
		);

		wp_list_categories( $args );
	}
}

?>
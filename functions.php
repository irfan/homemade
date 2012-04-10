<?php

// dont wrap the content
// remove_filter('the_content', 'wpautop');
// remove_filter('the_excerpt', 'wpautop');

/*
function check_inline_pre($content) {
		$content = preg_replace('/(<pre[^>]*inline[^>]*>)(((?!<\\/pre>).)*)(<\\/pre>)(\\r\\n|\\n)<p>/s', '$1$2</pre>', $content);
		return $content;
}

add_filter('the_content', 'check_inline_pre');
*/

function getBlogSummary(){
	
	$id = 2;	// blog page's id

	$blog = array();
	
	$posts = new WP_Query();
	$blog['posts'] = $posts->query(array('post_type' => 'post', 'post_status' => 'publish'));
	
	$custom = get_post_custom($id);
	$blog['header'] = $custom['alternate_title'][0];
	$blog['description'] = $custom['description'][0];
	$blog['url'] = get_permalink($id);

	return $blog;
}

// arguments	: project page's id
// return	: summary data of projects

function getProjectsSummary($id = false){
	if(!$id) {
		$id = 7;	// project page's id
	}

	$all_pages = new WP_Query();
	$projects_page = $all_pages->query(array('post_type' => 'page'));
	
	$projects = array();

	$projects['pages'] = get_page_children(get_page($id)->ID, $projects_page);
	
	$projects['header']['page'] = get_page($id);
	$projects['header']['custom'] = get_post_custom($id);
	$projects['header']['permalink'] = get_permalink($id);
	$projects['header']['title'] = apply_filters('the_title', $projects_data['page']->post_title);

	return $projects;

}


// arguments	: page object
// return	: page's title, description and permalink

function getProjectInfo($page){
	
	$data = array();
	$data['title'] = get_the_title($page->ID);
	$data['desc'] = get_post_custom($page->ID);
	$data['permalink'] = get_permalink($page->ID);

	return $data;
}


// arguments: career page's id
// return: career summary data

function getCareerSummary($id = false){
	if(!$id) {
		$id = 6; // career page's id
	}
	
	$result = array();
	$result['header'] = array();
	$result['companies'] = array();

	$career 			= get_post_custom($id);
	$result['header']['permalink'] 	= get_permalink($id);
	$result['header']['title']	= $career['alternate_title'][0];
	$result['header']['description']= $career['description'][0];

	foreach ($career['Company'] as $company){
		$parts = explode('|', $company);
		$result['companies'][$parts[0]] = explode('|', $company);
	}
	rsort($result['companies']);
	
	return $result;
}

function getRelatedPosts($post){
	$id = $post->ID;
	$tags = wp_get_post_tags($id);
	
	$response = false;
	
	if($tags) {

		$ids = array();
		
		foreach($tags as $tag) {
			$ids[] = $tag->term_id;
		}

		$arguments = array(
			'tag__in' 		=> $ids,
			'post__not_in' 		=> array($id),
			'posts_per_page' 	=> 5,
			'caller_get_posts' 	=> 1,
			'post_status' 		=> 'publish',
			'post_type'		=> 'post'
		);
		
		$posts = new wp_query($arguments);
		
		if($posts->have_posts()){
			$response = $posts->get_posts();
		}
	}

	return $response;

}


function close_comments($posts) {
	
	if ( !is_single() )  {
		return $posts;
	}
	
	if( time() - strtotime($posts[0]->post_date_gmt ) > 12 * 30 * 24 * 60 * 60) {
		$posts[0]->comment_status = 'closed';
		$posts[0]->ping_status = 'closed';
	}
	
	return $posts;
	
}

add_filter('the_posts', 'close_comments');

?>







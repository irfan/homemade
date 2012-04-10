<?php
$args = array(
	'status' 	=> 'approve',
	'post_id' 		=> $post->ID,
	'type' 		=> '',
	
);
	
$comments = get_comments($args);
$comments = array_reverse($comments, true);

$commentcount = get_comments_number();

if($commentcount > 0):

?>
<section class="postAttributeSection" id="comments">
	<h2> <?= $commentcount; ?> Yorum Yapıldı</h2>
	<? foreach ($comments as $comment): ?> 
		<article class="comment" id="comment-<?= $comment->comment_ID; ?>">
			<header>
			<h3><?
		$author = $comment->comment_author;

		if(strlen($author) > 25) {
			$author = substr($author, 0, 25);
			$author = $author . '...';
		}

		if(!empty($comment->comment_author_url)) {
			echo '<a href="' . $comment->comment_author_url . '">' . $author . '</a>';
		} 
		else {
			echo $author; 
		}

		?>
</h3>
		<time pubdate datetime="<?= $comment->comment_date; ?>"><?= $comment->comment_date; ?></time>
	</header>
			<p><?= $comment->comment_content; ?></p>
		</article>
	<? endforeach; ?>
</section>
<? endif; ?>
<?php 

if ( $post->comment_status != 'closed') {
	comment_form(
		array(
			'comment_notes_before' => '',
			// 'comment_notes_after' => '',
			'fields' => array(
				
				'author'=>'<label for="author">' . __('Name') . '<span class="required"> Gerekli</span></label>' . 
					   '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author']).'"'.$aria_req.'/>',
						   
				'email' => '<label for="email">' . __('Email') . '<span class="required"> Gerekli</span></label>' . 
					   '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']).'"'.$aria_req.'/>',
						   
				'url' 	=> '<label for="url">' . __('Website') . '</label>' . 
					   '<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']).'"'.$aria_req.'/>'
			)
		)
	);
}
else {
	$tmp_date = date('d-m-Y', strtotime($post->post_date_gmt) + (12 * 30 * 24 * 60 * 60));
        echo '<p class="highlight comment-outofdate">Yorum eklemek için çok geç, ' . $tmp_date .' tarihinde yoruma kapatıldı.</p>';
}
  ?>



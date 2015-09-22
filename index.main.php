<?php
/**
/* This template is a modified version of the free version of Purple Beauty 
 * created by Dieter Schneider 2006 for www.webart.no.
 * You have to keep the link to webart.no in your footer, however
 * if you want to remove it and get the PSD file you can buy this
 * template for 5 dollars at www.webart.no/webshop. 
 *
 * evoskinned for b2evolution v1.9.* by EdB || http://wonderwinds.com/
 * evoskinned for b2evolution v2.4.1 by Afwas {@link http://www.blog.hemminga.net}
 *
 * @package evoskins
 * @subpackage purple_beauty
 *
 * @version $Id: index.main.php,v 1.16 2008/04/15 21:53:31 fplanque Exp $
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

if( version_compare( $app_version, '2.4.1' ) < 0 )
{ // Older 2.x skins work on newer 2.x b2evo versions, but newer 2.x skins may not work on older 2.x b2evo versions.
	die( 'This skin is designed for b2evolution 2.4.1 and above. Please <a href="http://b2evolution.net/downloads/index.html">upgrade your b2evolution</a>.' );
}

// This is the main template; it may be used to display very different things.
// Do inits depending on current $disp:
skin_init( $disp );

add_headline( '<!--[if lt IE 7]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script>
	<![endif]-->' );

// -------------------------- HTML HEADER INCLUDED HERE --------------------------
skin_include( '_html_header.inc.php' );
// Note: You can customize the default HTML header by copying the generic
// /skins/_html_header.inc.php file into the current skin folder.
// -------------------------------- END OF HEADER --------------------------------
?>


<div id="wrapper">

<div class="pageHeader">
	<?php
		// ------------------------- "Header" CONTAINER EMBEDDED HERE --------------------------
		// Display container and contents:
		skin_container( NT_('Header'), array(
				// The following params will be used as defaults for widgets included in this container:
				'block_start'       => '<div class="$wi_class$">',
				'block_end'         => '</div>',
				'block_title_start' => '<h1>',
				'block_title_end'   => '</h1>',
			) );
		// ----------------------------- END OF "Header" CONTAINER -----------------------------
	?>
</div>
<div class="PageTop">
	<?php
		// ------------------------- "Page Top" CONTAINER EMBEDDED HERE --------------------------
		// Display container and contents:
		skin_container( NT_('Page Top'), array(
				// The following params will be used as defaults for widgets included in this container:
				'block_start'         => '<div class="$wi_class$">',
				'block_end'           => '</div>',
				'block_display_title' => false,
				'list_start'          => '<ul class="bloglist">',
				'list_end'            => '</ul>',
				'item_start'          => '<li>',
				'item_end'            => '</li>',
			) );
		// ----------------------------- END OF "Page Top" CONTAINER -----------------------------
	?>
					<?php if ( true /* change to false to hide the blog list */ ) { ?>
				<?php
				  // START OF BLOG LIST
				  skin_widget( array(
						'widget' => 'colls_list_public',
						'block_start' => '',
						'block_end' => '',
						'block_display_title' => false,
						'list_start'          => '<ul class="bloglist">',
						'list_end'            => '</ul>',
						'item_start'          => '<li>',
						'item_end'            => '</li>',
						'item_selected_start' => '<li class="selected">',
						'item_selected_end' => '</li>',
					  ) );
				?>
				<?php } ?>
</div>

<div class="innerwrapper">

<div class="bSideBarLeft">
<?php
		// Display container contents:
		$Skin->container( NT_('Sidebar'), array(
				// The following (optional) params will be used as defaults for widgets included in this container:
				// This will enclose each widget in a block:
				'block_start' => '<div class="bSideItem $wi_class$">',
				'block_end' => '</div>',
				// This will enclose the title of each widget:
				'block_title_start' => '<h3>',
				'block_title_end' => '</h3>',
				// If a widget displays a list, this will enclose that list:
				'list_start' => '<ul>',
				'list_end' => '</ul>',
				// This will enclose each item in a list:
				'item_start' => '<li>',
				'item_end' => '</li>',
				// This will enclose sub-lists in a list:
				'group_start' => '<ul>',
				'group_end' => '</ul>',
				// This will enclose (foot)notes:
				'notes_start' => '<div class="notes">',
				'notes_end' => '</div>',
			) );
	?>
</div>




<div class="bSideBarRight">
<?php
		// Display container contents:
		$Skin->container( NT_('Sidebar 2'), array(
				// The following (optional) params will be used as defaults for widgets included in this container:
				// This will enclose each widget in a block:
				'block_start' => '<div class="bSideItem $wi_class$">',
				'block_end' => '</div>',
				// This will enclose the title of each widget:
				'block_title_start' => '<h3>',
				'block_title_end' => '</h3>',
				// If a widget displays a list, this will enclose that list:
				'list_start' => '<ul>',
				'list_end' => '</ul>',
				// This will enclose each item in a list:
				'item_start' => '<li>',
				'item_end' => '</li>',
				// This will enclose sub-lists in a list:
				'group_start' => '<ul>',
				'group_end' => '</ul>',
				// This will enclose (foot)notes:
				'notes_start' => '<div class="notes">',
				'notes_end' => '</div>',
			) );
	?>

	<?php
		// Please help us promote b2evolution and leave this logo on your blog:
		powered_by( array(
				'block_start' => '<div class="powered_by">',
				'block_end'   => '</div>',
				// Check /rsc/img/ for other possible images -- Don't forget to change or remove width & height too
				'img_url'     => '$rsc$img/b2evolution_button.png',
				'img_width'   => 80,
				'img_height'  => 15,
			) );
	?>
	
	<p>
		<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
	</p>
</div>

<!-- =================================== START OF MAIN AREA =================================== -->
<div class="bPosts">

	<?php
		// ------------------------- MESSAGES GENERATED FROM ACTIONS -------------------------
		messages( array(
				'block_start' => '<div class="action_messages">',
				'block_end'   => '</div>',
			) );
		// --------------------------------- END OF MESSAGES ---------------------------------
	?>

	<?php
		// ------------------- PREV/NEXT POST LINKS (SINGLE POST MODE) -------------------
		item_prevnext_links( array(
				'block_start' => '<table class="prevnext_post"><tr>',
				'prev_start'  => '<td>',
				'prev_end'    => '</td>',
				'next_start'  => '<td class="right">',
				'next_end'    => '</td>',
				'block_end'   => '</tr></table>',
			) );
		// ------------------------- END OF PREV/NEXT POST LINKS -------------------------
	?>

	<?php
		// ------------------------ TITLE FOR THE CURRENT REQUEST ------------------------
		request_title( array(
				'title_before'=> '<h2>',
				'title_after' => '</h2>',
				'title_none'  => '',
				'glue'        => ' - ',
				'title_single_disp' => true,
				'format'      => 'htmlbody',
			) );
		// ----------------------------- END OF REQUEST TITLE ----------------------------
	?>

	<?php
		// -------------------- PREV/NEXT PAGE LINKS (POST LIST MODE) --------------------
		mainlist_page_links( array(
				'block_start' => '<p class="center">'.T_('Pages:').' <strong>',
				'block_end' => '</strong></p>',
			) );
		// ------------------------- END OF PREV/NEXT PAGE LINKS -------------------------
	?>


	<?php
		// --------------------------------- START OF POSTS -------------------------------------
		// Display message if no post:
		display_if_empty();

		while( $Item = & mainlist_get_item() )
		{	// For each blog post, do everything below up to the closing curly brace "}"
		?>

		<?php
			// ------------------------------ DATE SEPARATOR ------------------------------
			$MainList->date_if_changed( array(
					'before'      => '<h2>',
					'after'       => '</h2>',
					'date_format' => '#',
				) );
		?>

		<div id="<?php $Item->anchor_id() ?>" class="bPost bPost<?php $Item->status_raw() ?>" lang="<?php $Item->lang() ?>">

			<?php
				$Item->locale_temp_switch(); // Temporarily switch to post locale (useful for multilingual blogs)
			?>

			<div class="bSmallHead">
			<?php
				// Permalink:
				$Item->permanent_link( array(
						'text' => '#icon#',
					) );

				$Item->issue_time( array(
						'before'    => ' ',
						'after'     => '',
					));

				$Item->author( array(
						'before'    => ', '.T_('by').' ',
						'after'     => '',
					) );

				$Item->msgform_link();
				echo ', ';

				$Item->wordcount();
				echo ' '.T_('words');
				echo ', ';
				$Item->views();

				$Item->locale_flag( array(
						'before'    => ' &nbsp; ',
						'after'     => '',
					) );
			?>

			<br />

			<?php
				$Item->categories( array(
					'before'          => T_('Categories').': ',
					'after'           => ' ',
					'include_main'    => true,
					'include_other'   => true,
					'include_external'=> true,
					'link_categories' => true,
				) );
			?>
			</div>

			<h3 class="bTitle"><?php $Item->title(); ?></h3>

			<?php
				// ---------------------- POST CONTENT INCLUDED HERE ----------------------
				skin_include( '_item_content.inc.php', array(
						'image_size'	=>	'fit-400x320',
					) );
				// Note: You can customize the default item feedback by copying the generic
				// /skins/_item_feedback.inc.php file into the current skin folder.
				// -------------------------- END OF POST CONTENT -------------------------
			?>

			<?php
				// List all tags attached to this post:
				$Item->tags( array(
						'before' =>         '<div class="bSmallPrint">'.T_('Tags').': ',
						'after' =>          '</div>',
						'separator' =>      ', ',
					) );
			?>

			<div class="bSmallPrint">
				<?php
					// Permalink:
					$Item->permanent_link( array(
							'class' => 'permalink_right',
						) );

					// Link to comments, trackbacks, etc.:
					$Item->feedback_link( array(
									'type' => 'comments',
									'link_before' => ' &bull; ',
									'link_after' => '',
									'link_text_zero' => T_('Leave a comment'),
									'link_text_one' => T_('1 comment'),
									'link_text_more' => T_('%d comments'),
									'link_title' => '#',
									'use_popup' => false,
								) );

					// Link to comments, trackbacks, etc.:
					$Item->feedback_link( array(
									'type' => 'trackbacks',
									'link_before' => ' &bull; ',
									'link_after' => '',
									'link_text_zero' => T_('Leave a trackback'),
									'link_text_one' => T_('1 trackback'),
									'link_text_more' => T_('%d trackbacks'),
									'link_title' => '#',
									'use_popup' => false,
								) );

					$Item->edit_link( array( // Link to backoffice for editing
							'before'    => ' &bull; ',
							'after'     => '',
						) );
				?>
			</div>

			<?php
				// ------------------ FEEDBACK (COMMENTS/TRACKBACKS) INCLUDED HERE ------------------
				skin_include( '_item_feedback.inc.php', array(
						'before_section_title' => '<h4>',
						'after_section_title'  => '</h4>',
					) );
				// Note: You can customize the default item feedback by copying the generic
				// /skins/_item_feedback.inc.php file into the current skin folder.
				// ---------------------- END OF FEEDBACK (COMMENTS/TRACKBACKS) ---------------------
			?>

			<?php
				locale_restore_previous();	// Restore previous locale (Blog locale)
			?>
		</div>
		<?php
		} // ---------------------------------- END OF POSTS ------------------------------------
	?>

	<?php
		// -------------------- PREV/NEXT PAGE LINKS (POST LIST MODE) --------------------
		mainlist_page_links( array(
				'block_start' => '<p class="center"><strong>',
				'block_end' => '</strong></p>',
   				'prev_text' => '&lt;&lt;',
   				'next_text' => '&gt;&gt;',
			) );
		// ------------------------- END OF PREV/NEXT PAGE LINKS -------------------------
	?>

	<?php
		// -------------- MAIN CONTENT TEMPLATE INCLUDED HERE (Based on $disp) --------------
		skin_include( '$disp$', array(
				'disp_posts'  => '',		// We already handled this case above
				'disp_single' => '',		// We already handled this case above
				'disp_page'   => '',		// We already handled this case above
			) );
		// Note: you can customize any of the sub templates included here by
		// copying the matching php file into your skin directory.
		// ------------------------- END OF MAIN CONTENT TEMPLATE ---------------------------
	?>

</div><!-- class="innerwrapper" -->
</div><!-- class="wrapper" -->

<!-- =================================== START OF FOOTER =================================== -->
<div class="pageFooter">
	<?php
		// Display container and contents:
		skin_container( NT_("Footer"), array(
				// The following params will be used as defaults for widgets included in this container:
			) );
		// Note: Double quotes have been used around "Footer" only for test purposes.
	?>
	
	<p class="baseline">
		<?php
			// Display footer text (text can be edited in Blog Settings):
			$Blog->footer_text( array(
					'before'      => '',
					'after'       => ' &bull; ',
				) );
		?>

		<?php
			// Display a link to contact the owner of this blog (if owner accepts messages):
			$Blog->contact_link( array(
					'before'      => '',
					'after'       => ' &bull; ',
					'text'   => T_('Contact'),
					'title'  => T_('Send a message to the owner of this blog...'),
				) );
		?>

		<?php display_param_link( $skin_links ) ?> Design by <a href="http://www.webart.no/webshop" title="http://www.webart.no/webshop">Dieter Schneider</a> &bull; evoSkinned by <a href="http://wonderwinds.com" title="http://wonderwinds.com">EdB</a> and <a href="http://www.blog.hemminga.net">Afwas</a>

		<?php
			// Display additional credits:
 			// If you can add your own credits without removing the defaults, you'll be very cool :))
		 	// Please leave this at the bottom of the page to make sure your blog gets listed on b2evolution.net
			credits( array(
					'list_start'  => ' &bull; '.T_('Credits').': ',
					'list_end'    => ' ',
					'separator'   => '|',
					'item_start'  => ' ',
					'item_end'    => ' ',
				) );
		?>
	</p>
</div>
</div>

<?php
// ------------------------- HTML FOOTER INCLUDED HERE --------------------------
skin_include( '_html_footer.inc.php' );
// Note: You can customize the default HTML footer by copying the
// _html_footer.inc.php file into the current skin folder.
// ------------------------------- END OF FOOTER --------------------------------
?>
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package westcoastracingjunkie
 */

get_header();
?>
<div id="primary-simple" class="content-area bg-light">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bg-white p-2 p-lg-5">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-8">
									<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'westcoastracingjunkie' ); ?></h1>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();

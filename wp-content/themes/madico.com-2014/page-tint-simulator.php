<?php 
/**
 * Template Name: Tint Simulator
 */
 
get_header();
?>

<link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/tint-simulator.css" rel="stylesheet">

<div class="splash">
	<?php include( 'banner.php'); ?>
</div>

<?php show_breadcrumb(); ?>

<div id="columns">

	<div class="main clearfix">
		<?php the_post(); ?>
		<h1><?php the_title(); ?></h1>
		
		<div class="cms">
			<?php the_content(); ?>
		</div><!--// end .cms -->
	</div><!--// end .main -->
	
	<div class="simulator clearfix">
		<div class="secondary">
			<h2>Choose a tint&hellip;</h2>
			<form class="chooser">
				<div id="dropdown-brand"></div>
				<div id="dropdown-product"></div>
				<div id="dropdown-shade"></div>
			</form><!--// end .chooser -->
		</div>
		<div class="primary">
			<h2></h2>
			<h3></h3>
			<div class="sedan">
				<div class="original"></div>
				<div class="mask"></div>
				<div class="tint"></div>
			</div>
		</div>
		<div class="loading">
		   <span class="ball"></span>
		   <span class="label">Loading</span>
      </div>
		<p class="disclaimer">
		   * Please consult your local dealer regarding automotive tint laws in your area.<br>
   		* Images are for illustrative purposes only, actual tint samples may vary
		</p>
	</div><!--// end .simulator -->
	
</div><!--// end #columns -->
	
</div><!--// end #page -->
</div><!--// end #container -->
</div><!--// end #background -->
</div><!--// end #content -->

<!-- Templates -->
<script id="dropdown-filter" type="text/x-handlebars-template">
<div class="filter-control row-fluid clearfix">
	<label for="{{filter}}" class="control-label span6 alpha">{{filter}}</label>
	<select id="{{filter}}" class="span6 omega">
		 {{#each items}}
		 <option value="{{value}}" class="{{class}}">{{label}}</option>
		 {{/each}}
	</select>
</div><!--// end .row -->
</script>

<?php $v = filemtime( get_stylesheet_directory() . '/js/tint-simulator.js' ); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/handlebars.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.color.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tint-simulator.min.js?v=<?php echo $v; ?>"></script>

<?php get_footer(); ?>
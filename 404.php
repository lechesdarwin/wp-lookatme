<?php get_header() ?>
<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>4<span>0</span>4</h1>
			</div>
			<h2>the page you requested could not found</h2>
			<form class="notfound-search" role="search" method="get"  action="<?php echo home_url( '/' ); ?>">
				<input type="text" placeholder="Search..." name="s" id="s" > 
				<button type="submit"><span></span></button>
			</form>
		</div>
    </div>
<?php get_footer() ?>
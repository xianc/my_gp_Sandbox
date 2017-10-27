
		</div><!-- end content div -->

		<footer>
		</footer>

		<script src="http://sandbox.x7.org/xchen/js/wcd-CTAdropdowns.js"></script>
	</body>
</html>
<?php
	$pageContents = ob_get_contents (); // Get all the page's HTML into a string
	ob_end_clean (); // Wipe the buffer

	// Replace <!--TITLE--> with $pageTitle variable contents, and print the HTML
	echo str_replace ('<title>Xian\'s Sandbox</title>', 
		'<title>Xian\'s Sandbox - '.$pageTitle.'</title>', $pageContents);
?>
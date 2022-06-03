	<div class="footer">Footer</div>
</div>
</body>
<script src="public/js/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var controller = '<?php echo isset($_GET['controller']) ? $_GET['controller'] : 'index'; ?>'
	$('.header a.'+controller).addClass('active');
})
</script>
</html>


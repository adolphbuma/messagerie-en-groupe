<script type="text/javascript">
	 $('#send').click(function() {
	 	

	 	var message=$('#v').val();
	 	if (message!='') {
	 		$.post('ajax/post.php',{message:send},function(){
	 			$('#v').val("");
	 		})
	 	}
	 });
</script>
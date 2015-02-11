<!-- this would usually be used within a module or plugin -->
	<script>
	function load_article(id) {
		jQuery.get('index.php?option=com_content&view=article&template=system&id='+id, function(data, textStatus, xhr) {
		  jQuery('.app').html(data);
		  //optional stuff to do after success
		});
}
</script>
<div class="app">
	
</div>

<a href onclick="load_article(1)">1</a> <!-- onclick loads article 1 into app -->
<a href onclick="load_article(2)">2</a> <!-- onclick loads article 2 into app -->
<a href onclick="load_article(3)">3</a> <!-- onclick loads article 3 into app -->
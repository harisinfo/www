<div id="footer">
		LikeMyHair.co.uk &#169; {$smarty.now|date_format}
	</div>

{literal}	
	<script type="text/javascript">

	var option_v = 'city';

	/*var options = {
		script:"http://www.likemyhair.co.uk/lookup.php?json=true&limit=10&",
		varname:"city",
		json:true,
		shownoresults:false,
		maxresults:10,
		callback: function (obj) { document.getElementById('hidden').value = obj.id; }
	};*/
	
	var options = {
		script:"http://www.likemyhair.co.uk/lookup-v2.php?json=true&limit=10&",
		varname:"city",
		json:true,
		shownoresults:false,
		maxresults:10,
		callback: function (obj) { document.getElementById('hidden').value = obj.id; }
	};
	
	var as_json = new bsn.AutoSuggest('city', options);


</script>
{/literal}
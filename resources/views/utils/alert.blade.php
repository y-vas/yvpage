
@if (!empty($_GET['alert']))
	<div class="bg-{{ $_GET['acol'] ?? 'info' }} alert" role="alert">
		{{ $_GET['alert'] }}
	</div>
@endif

<script type="text/javascript">
	$( document ).ready(function() {
		str = window.location.href

		if (localStorage.getItem("restart") == 'true') {
			localStorage.removeItem('restart');

			url = new URL(str);
			params = new URLSearchParams(url.search.slice(1));

			params.delete('alert');
			params.delete('acol');
			window.location.replace(str.split('?')[0] +'?'+ params.toString());
		}

		if (str.includes('alert=')) {
			localStorage.setItem("restart", true);
		}

	});
</script>

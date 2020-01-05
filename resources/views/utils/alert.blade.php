
@if (!empty($_SESSION['alert']))
	<div class="bg-{{ $_SESSION['acol'] ?? 'info' }} alert" role="alert">
		{{ $_SESSION['alert'] }}
	</div>
@endif

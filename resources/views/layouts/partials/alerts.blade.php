@php
	$type = session()->has('success') ? 'success' : 'danger';
	$msgType = session()->has('success') ? 'Success' : 'Error';
	$msg = session()->has('success') ? session('success') : session('error');
@endphp
<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
  <strong>{{ $msgType }}!</strong> {{ $msg }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
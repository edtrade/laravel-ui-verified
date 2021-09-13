
<ul class="nav nav-pills flex-column">

	<li class="nav-item">
		<a class="nav-link {{ onPage('account') }}" 
			href="{{ route('account.index') }}">
			{{__('Account overview')}}
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link	{{ onPage('*/profile') }}" 
			href="{{ route('account.profile.index') }}">
			{{__('Profile')}}
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link {{ onPage('*/password') }}" 
			href="{{ route('account.password.index') }}">
			{{__('Change password')}}
		</a>
	</li>		

</ul>
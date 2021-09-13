@extends('account.layouts.default')

@section('content')
	<div class="card">
		<div class="card-body">
			<!--Change Password Form-->
			<form action="{{ route('account.password.store') }}" method="POST">
				@csrf()
				<div class="form-group">
					<label for="current_password">{{_('Current Password')}}</label>
					<input class="form-control @error('current_password') is-invalid @enderror" 
						type="password" 
						name="current_password">
					@error('current_password')
						<div class="text-danger"> {{ $message }} </div>
					@enderror
				</div>

				<div class="form-group">
					<label for="password">{{_('New Password')}}</label>
					<input class="form-control @error('password') is-invalid @enderror" 
						type="password" 
						name="password">
					@error('password')
						<div class="text-danger"> {{ $message }} </div>
					@enderror
				</div>

				<div class="form-group">
					<label for="password_confirmation">{{_('Confirm New Password')}}</label>
					<input class="form-control @error('password_confirmation') is-invalid @enderror" 
						type="password" 
						name="password_confirmation">
					@error('password_confirmation')
						<div class="text-danger"> {{ $message }} </div>
					@enderror
				</div>				

				<button class="btn btn-primary" type="submit">
					{{__('Update')}}
				</button>
			</form>

		</div>
	</div>
@endsection

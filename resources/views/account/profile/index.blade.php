@extends('account.layouts.default')

@section('content')
	<div class="card">
		<div class="card-body">
			
			<form action="{{ route('account.profile.store') }}" method="POST">
				@csrf()
				<div class="form-group">
					<label for="name">Name</label>
					<input class="form-control @error('name') is-invalid @enderror" 
						type="text" 
						name="name" 
						value="{{ old('name', auth()->user()->name) }}">
					@error('name')
						<div class="text-danger"> {{ $message }} </div>
					@enderror
				</div>

				<div class="form-group">
					<label for="name">Email</label>
					<input class="form-control @error('email') is-invalid @enderror" 
						type="email" 
						name="email" 
						value="{{ old('email', auth()->user()->email) }}">
					@error('email')
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

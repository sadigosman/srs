{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('country', 'Country:') !!}
			{!! Form::text('country') !!}
		</li>
		<li>
			{!! Form::label('state', 'State:') !!}
			{!! Form::text('state') !!}
		</li>
		<li>
			{!! Form::label('province', 'Province:') !!}
			{!! Form::text('province') !!}
		</li>
		<li>
			{!! Form::label('city', 'City:') !!}
			{!! Form::text('city') !!}
		</li>
		<li>
			{!! Form::label('street', 'Street:') !!}
			{!! Form::text('street') !!}
		</li>
		<li>
			{!! Form::label('comment', 'Comment:') !!}
			{!! Form::text('comment') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
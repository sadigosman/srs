{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('country', 'Country:') !!}
			{!! Form::text('country') !!}
		</li>
		<li>
			{!! Form::label('desc', 'Desc:') !!}
			{!! Form::text('desc') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
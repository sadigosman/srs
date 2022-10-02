{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('cert_no', 'Cert_no:') !!}
			{!! Form::text('cert_no') !!}
		</li>
		<li>
			{!! Form::label('major', 'Major:') !!}
			{!! Form::text('major') !!}
		</li>
		<li>
			{!! Form::label('issue_date', 'Issue_date:') !!}
			{!! Form::text('issue_date') !!}
		</li>
		<li>
			{!! Form::label('app_id', 'App_id:') !!}
			{!! Form::text('app_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
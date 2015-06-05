@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">PERFORMANCE APPRAISAL</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="flash-message">
				        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
				          @if(Session::has('alert-' . $msg))
				          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
				          @endif
				        @endforeach
			        </div>
			      <div >
			        {!! Html::ul($errors->all()) !!}
			      </div>
			       @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                     @endif
					<table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Employee Name</td>
                                        <td>Position</td>
                                        <td>Date Hired</td>
                                        <td>Date Evaluated</td>
                                        <td colspan="2"><center>Action</center></td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($paf as $key => $value)
                                    <tr>
                                        <td class="bg-parimary">{{ $value->id }}</td>
                                        <td class="bg-parimary">{{ $value->EmployeeName }}</td>
                                        <td class="bg-parimary">{{ $value->Position }}</td>
                                        <td class="bg-parimary">{{ $value->DateHired }}</td>
                                        <td class="bg-parimary">{{ $value->DateEvaluated }}</td>
                                   
                                        <!-- we will also add show, edit, and delete buttons -->
                                        <td>
                                            
                                            <a class="btn btn-small btn-info" href="{{ URL::to('paf/' . $value->id . '/edit') }}">Edit Form</a>
                                        </td>
                                        <td>
                                            <!-- delete the user (uses the destroy method DESTROY /users/{id} -->
                                            <!-- we will add this later since its a little more complicated than the other two buttons -->
                                            {!! Form::open(array('url' => 'paf/' . $value->id, 'class' => 'pull-left')) !!}
                                                {!! Form::hidden('_method', 'DELETE') !!}
                                                {!! Form::submit('Delete this Form?', array('class' => 'btn btn-warning')) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                        </table>  
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

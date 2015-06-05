@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">Performance Appraisal</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('paf') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<table class="table joene">
								<tr>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Name of Employee:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="EmployeeName" value="{{ old('EmployeeName') }}">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Employment Status:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="EmploymentStatus" value="{{ old('EmploymentStatus') }}">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Date Hired:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="DateHired" id="DateHired" value="{{ old('DateHired') }}">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Position:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="Position" value="{{ old('Position') }}">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Date Evaluated:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="DateEvaluated" id="DateEvaluated" value="{{ old('DateEvaluated') }}">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Next Evaluation Date:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="NextEvaluation" id="NextEvaluation" value="{{ old('NextEvaluation') }}">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Immediate Supervisor:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="Supervisor" value="{{ old('Supervisor') }}">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Period covered:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="PeriodFrom" id="PeriodFrom" value="{{ old('PeriodFrom') }}" placeholder="From"><br/>
												<input type="text" class="form-control" name="PeriodTo" id="PeriodTo" value="{{ old('PeriodTo') }}" placeholder="To">
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>

						<p>Standards/Criteria</p>
						<p class="text-info"><small>In the box highlighted Grey, score your own capability or knowledge in the following areas in terms<br/> of your current role requirements (1-3 = poor, 4-6= Satisfactory, 7-9 = Good, 10 = Excellent) if appropriate bring evidence.</small></p>


						<table class="table">
							<tr>
								<td>
									<p>Results</p>

									<p><small>Works towards meeting and surpassing required Key Performance Indicator (KPI) as set by management for your position.</small></p>

								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Employee)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="ResultsEScore" value="{{ old('ResultsEScore') }}"><br/>
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Superior)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="ResultsSScore" value="{{ old('ResultsSScore') }}"><br/>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group">
  										<label for="comment">Comments:</label>
  										<textarea class="form-control" rows="5" name="ResultsComment" id="ResultsComment"></textarea>
									</div>
								</td>

							</tr>
							<tr>
								<td>
									<p>Attendance, Punctuality & Production Hours</p>

									<p><small>Arrives on time, informs management of absences and tardiness following the <br/>call in procedure of the Company, schedules leave ahead of time, <br/>and arrives at meetings & pre –shift briefings on time. Ensures that 7.5 calling hours is achieved.</small></p>

								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Employee)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="AttendanceEScore" value="{{ old('AttendanceEScore') }}"><br/>
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Superior)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="AttendanceSScore" value="{{ old('AttendanceSScore') }}"><br/>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group">
  										<label for="comment">Comments:</label>
  										<textarea class="form-control" rows="5" name="AttendanceComment" id="AttendanceComment"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<p>Communication Skills</p>

									<p><small>Expresses ideas effectively both orally and in writing and uses appropriate communication methods.</small></p>

								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Employee)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="CommsEScore" value="{{ old('CommsEScore') }}"><br/>
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Superior)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="CommsSScore" value="{{ old('CommsSScore') }}"><br/>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group">
  										<label for="comment">Comments:</label>
  										<textarea class="form-control" rows="5" name="CommsComment" id="CommsComment"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<p>Quality of Work</p>

									<p><small>Demonstrates thorough knowledge of his/her responsibilities and sufficient knowledge on the nature and product of the business.</small></p>

								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Employee)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="QualityWorkEScore" value="{{ old('QualityWorkEScore') }}"><br/>
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Superior)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="QualityWorkSScore" value="{{ old('QualityWorkSScore') }}"><br/>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group">
  										<label for="comment">Comments:</label>
  										<textarea class="form-control" rows="5" name="QualityWorkComment" id="QualityWorkComment"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<p>Teamwork</p>

									<p><small>Cooperates and collaborates with colleagues and superiors.</small></p>

								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Employee)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="TeamworkEScore" value="{{ old('TeamworkEScore') }}"><br/>
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Superior)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="TeamworkSScore" value="{{ old('TeamworkSScore') }}"><br/>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group">
  										<label for="comment">Comments:</label>
  										<textarea class="form-control" rows="5" name="TeamworkComment" id="TeamworkComment"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<p>Job Knowledge</p>

									<p><small>Demonstrates thorough knowledge of his/her responsibilities and shows <br/>sufficient knowledge on the nature and product of the business.<br/> How do you keep yourself up-to-date with your job roles and responsibilities?</small></p>

								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Employee)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="JobKnowEScore" value="{{ old('JobKnowEScore') }}"><br/>
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Superior)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="JobKnowSScore" value="{{ old('JobKnowSScore') }}"><br/>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group">
  										<label for="comment">Comments:</label>
  										<textarea class="form-control" rows="5" name="JobKnowComment" id="JobKnowComment"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<p>Work Ethics</p>

									<p><small>Displays positive outlook at work and always present the Company and its clients in a positive and professional manner. <br>How do you maintain your positivity and energy at work?</small></p>

								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Employee)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="WorkEthEScore" value="{{ old('WorkEthEScore') }}"><br/>
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="col-md-4 control-label">Score (Superior)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="WorkEthSScore" value="{{ old('WorkEthSScore') }}"><br/>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group">
  										<label for="comment">Comments:</label>
  										<textarea class="form-control" rows="5" name="WorkEthicsComment" id="WorkEthicsComment"></textarea>
									</div>
								</td>
							</tr>

						</table>
						<p class="text-danger"><b>Please consider the following points for discussion and make comments below</b></p>
						<div class="form-group">
							<div class="col-md-6">
								<label for="comment">1.	What do you consider as your biggest achievements at QDF within the last three (3) months?</label>
								<textarea class="form-control" rows="5" name="ques1" id="ques1"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<label for="comment">2.	What are your career goals in the next three (3) months?</label>
								<textarea class="form-control" rows="5" name="ques2" id="ques2"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<label for="comment">3.	What elements of your job do you find most difficult? What do you consider as your biggest challenge at work?</label>
								<textarea class="form-control" rows="5" name="ques3" id="ques3"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<label for="comment">4.	What action could be taken to improve your performance in your current position by you, and you’re superior?</label>
								<textarea class="form-control" rows="5" name="ques4" id="ques4"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<label for="comment">5.	What sort of training/experiences would benefit you in the next year? Not just job-skills - also your natural strengths and personal passions you'd like to develop - you and your work can benefit from these.</label>
								<textarea class="form-control" rows="5" name="ques5" id="ques5"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<label for="comment">6.	What do you like and dislike about working for this organization?</label>
								<textarea class="form-control" rows="5" name="ques6" id="ques6"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<label for="comment">7.	What incentives would motivate you in the workplace?</label>
								<textarea class="form-control" rows="5" name="ques7" id="ques7"></textarea>
							</div>
						</div>

						<p class="text-danger"><b>Employer’s Comments and Appraisal Results</b></p>
						<div class="form-group">
							<table class="table joene">
								<tr>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Employee’s Signature: </label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="EmployeeSign" value="{{ old('EmployeeSign') }}">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Discussed by:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="DiscussedBy" value="{{ old('DiscussedBy') }}">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Date:</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="DiscussedByDate" id="DiscussedByDate" value="{{ old('DiscussedByDate') }}">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Appraiser’s Signature:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="AppraisersSign" value="{{ old('AppraisersSign') }}">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Discussed to:</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="DiscussedTo" value="{{ old('DiscussedTo') }}">
											</div>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="col-md-4 control-label">Date:</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="DiscussedToDate" id="DiscussedToDate" value="{{ old('DiscussedToDate') }}">
											</div>
										</div>
									</td>
								</tr>
								
								
							</table>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

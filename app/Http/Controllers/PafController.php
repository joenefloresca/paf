<?php namespace App\Http\Controllers;

use \App\Http\Models\Paf;
use Validator;
use Input;
use Redirect;
use Session;
use Request;
use View;

class PafController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$paf = Paf::all();
		return view('paf.index')->with(array('paf' => $paf));
		
	}

	public function create()
	{
		return view('paf.create');
	}

	public function store()
	{
		$rules = array(
            'EmployeeName'     => 'required|unique:pafs',
            'EmploymentStatus'  		   => 'required',
            'DateHired'  		   => 'required',
            'Position'  		   => 'required',
            'DateEvaluated'  		   => 'required',
            'NextEvaluation'  		   => 'required',
            'Supervisor'  		   => 'required',
            'PeriodFrom'  		   => 'required',
            'PeriodTo'  		   => 'required',
            'PeriodTo'  		   => 'required',
            'ResultsEScore'  		   => 'required',
            'AttendanceEScore'  		   => 'required',
            'CommsEScore'  		   => 'required',
            'QualityWorkEScore'  		   => 'required',
            'TeamworkEScore'  		   => 'required',
            'JobKnowEScore'  		   => 'required',
            'WorkEthEScore'  		   => 'required',
            'ques1'  		   => 'required',
            'ques2'  		   => 'required',
            'ques3'  		   => 'required',
            'ques4'  		   => 'required',
            'ques5'  		   => 'required',
            'ques6'  		   => 'required',
            'ques7'  		   => 'required',
        );
		
		$validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) 
        {
            return Redirect::to('paf/create')->withErrors($validator);
        }
        else
        {
        	$paf = new Paf;
            $paf->EmployeeName 	= Input::get('EmployeeName');
            $paf->EmploymentStatus = Input::get('EmploymentStatus');
            $paf->DateHired = Input::get('DateHired');
            $paf->Position = Input::get('Position');
            $paf->DateEvaluated = Input::get('DateEvaluated');
            $paf->NextEvaluation = Input::get('NextEvaluation');
            $paf->Supervisor = Input::get('Supervisor');
            $paf->PeriodFrom = Input::get('PeriodFrom');
            $paf->PeriodTo = Input::get('PeriodTo');
            $paf->ResultsEScore = Input::get('ResultsEScore');
            $paf->ResultsSScore = Input::get('ResultsSScore');
            $paf->ResultsSScore = Input::get('ResultsSScore');
            $paf->ResultsComment = Input::get('ResultsComment');
            $paf->AttendanceEScore = Input::get('AttendanceEScore');
            $paf->AttendanceSScore = Input::get('AttendanceSScore');
            $paf->AttendanceComment = Input::get('AttendanceComment');
            $paf->CommsEScore = Input::get('CommsEScore');
            $paf->CommsSScore = Input::get('CommsSScore');
            $paf->CommsComment = Input::get('CommsComment');
            $paf->QualityWorkEScore = Input::get('QualityWorkEScore');
            $paf->QualityWorkSScore = Input::get('QualityWorkSScore');
            $paf->QualityWorkComment = Input::get('QualityWorkComment');
            $paf->TeamworkEScore = Input::get('TeamworkEScore');
            $paf->TeamworkSScore = Input::get('TeamworkSScore');
            $paf->TeamworkComment = Input::get('TeamworkComment');
            $paf->JobKnowEScore = Input::get('JobKnowEScore');
            $paf->JobKnowSScore = Input::get('JobKnowSScore');
            $paf->JobKnowComment = Input::get('JobKnowComment');
            $paf->WorkEthEScore = Input::get('WorkEthEScore');
            $paf->WorkEthSScore = Input::get('WorkEthSScore');
            $paf->WorkEthicsComment = Input::get('WorkEthicsComment');
            $paf->ques1 = Input::get('ques1');
            $paf->ques2 = Input::get('ques2');
            $paf->ques3 = Input::get('ques3');
            $paf->ques4 = Input::get('ques4');
            $paf->ques5 = Input::get('ques5');
            $paf->ques6 = Input::get('ques6');
            $paf->ques7 = Input::get('ques7');
            $paf->EmployeeSign = Input::get('EmployeeSign');
            $paf->DiscussedBy = Input::get('DiscussedBy');
            $paf->DiscussedByDate = Input::get('DiscussedByDate');
            $paf->AppraisersSign = Input::get('AppraisersSign');
            $paf->DiscussedTo = Input::get('DiscussedTo');
            $paf->DiscussedToDate = Input::get('DiscussedToDate');
            $paf->save();
           
            Session::flash('alert-success', 'Form submitted successfully.');

            return Redirect::to('paf/create');
        }
	}

	public function edit($id)
	{
		$paf = Paf::find($id);
		return View::make('paf.edit')->with('paf', $paf);
	}

	public function update($id)
	{
		$rules = array(
            'EmployeeName'     => 'required|unique:pafs',
            'EmploymentStatus'  		   => 'required',
            'DateHired'  		   => 'required',
            'Position'  		   => 'required',
            'DateEvaluated'  		   => 'required',
            'NextEvaluation'  		   => 'required',
            'Supervisor'  		   => 'required',
            'PeriodFrom'  		   => 'required',
            'PeriodTo'  		   => 'required',
            'PeriodTo'  		   => 'required',
            'ResultsEScore'  		   => 'required',
            'AttendanceEScore'  		   => 'required',
            'CommsEScore'  		   => 'required',
            'QualityWorkEScore'  		   => 'required',
            'TeamworkEScore'  		   => 'required',
            'JobKnowEScore'  		   => 'required',
            'WorkEthEScore'  		   => 'required',
            'ques1'  		   => 'required',
            'ques2'  		   => 'required',
            'ques3'  		   => 'required',
            'ques4'  		   => 'required',
            'ques5'  		   => 'required',
            'ques6'  		   => 'required',
            'ques7'  		   => 'required',
        );
		
		$validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) 
        {
            return Redirect::to('paf/' . $id . '/edit')->withErrors($validator);
        }
        else
        {
        	$paf = Paf::find($id);
            $paf->EmployeeName 	= Input::get('EmployeeName');
            $paf->EmploymentStatus = Input::get('EmploymentStatus');
            $paf->DateHired = Input::get('DateHired');
            $paf->Position = Input::get('Position');
            $paf->DateEvaluated = Input::get('DateEvaluated');
            $paf->NextEvaluation = Input::get('NextEvaluation');
            $paf->Supervisor = Input::get('Supervisor');
            $paf->PeriodFrom = Input::get('PeriodFrom');
            $paf->PeriodTo = Input::get('PeriodTo');
            $paf->ResultsEScore = Input::get('ResultsEScore');
            $paf->ResultsSScore = Input::get('ResultsSScore');
            $paf->ResultsSScore = Input::get('ResultsSScore');
            $paf->ResultsComment = Input::get('ResultsComment');
            $paf->AttendanceEScore = Input::get('AttendanceEScore');
            $paf->AttendanceSScore = Input::get('AttendanceSScore');
            $paf->AttendanceComment = Input::get('AttendanceComment');
            $paf->CommsEScore = Input::get('CommsEScore');
            $paf->CommsSScore = Input::get('CommsSScore');
            $paf->CommsComment = Input::get('CommsComment');
            $paf->QualityWorkEScore = Input::get('QualityWorkEScore');
            $paf->QualityWorkSScore = Input::get('QualityWorkSScore');
            $paf->QualityWorkComment = Input::get('QualityWorkComment');
            $paf->TeamworkEScore = Input::get('TeamworkEScore');
            $paf->TeamworkSScore = Input::get('TeamworkSScore');
            $paf->TeamworkComment = Input::get('TeamworkComment');
            $paf->JobKnowEScore = Input::get('JobKnowEScore');
            $paf->JobKnowSScore = Input::get('JobKnowSScore');
            $paf->JobKnowComment = Input::get('JobKnowComment');
            $paf->WorkEthEScore = Input::get('WorkEthEScore');
            $paf->WorkEthSScore = Input::get('WorkEthSScore');
            $paf->WorkEthicsComment = Input::get('WorkEthicsComment');
            $paf->ques1 = Input::get('ques1');
            $paf->ques2 = Input::get('ques2');
            $paf->ques3 = Input::get('ques3');
            $paf->ques4 = Input::get('ques4');
            $paf->ques5 = Input::get('ques5');
            $paf->ques6 = Input::get('ques6');
            $paf->ques7 = Input::get('ques7');
            $paf->EmployeeSign = Input::get('EmployeeSign');
            $paf->DiscussedBy = Input::get('DiscussedBy');
            $paf->DiscussedByDate = Input::get('DiscussedByDate');
            $paf->AppraisersSign = Input::get('AppraisersSign');
            $paf->DiscussedTo = Input::get('DiscussedTo');
            $paf->DiscussedToDate = Input::get('DiscussedToDate');
            $paf->save();
           
            Session::flash('alert-success', 'Form updated successfully.');

            return Redirect::to('paf');
        }
	}

	public function destroy($id)
    {
        
        $paf = Paf::find($id);
        $paf->delete();
       
        Session::flash('message', 'Successfully deleted the form!');
        return Redirect::to('paf');
    }

}

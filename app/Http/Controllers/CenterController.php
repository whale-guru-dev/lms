<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Center;
use App\Models\CenterAccessibility;
use App\Models\UserCenterAccessibility;
use App\Models\CenterContact;
use App\Models\CenterFinance;
use App\Models\CenterSchedule;
use App\Models\CenterSummary;
use App\Models\UserModulePermission;


//test

class CenterController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index()
    {
    	return view('pages.center');
    }

    public function center($id)
    {
    	
    	return redirect('/Center/'.$id.'/Summary');
    }

    public function subpage($id, $subpage)
    {
    	$center = Center::find($id);
    	
    	if($center){
    		switch ($subpage) {
	    		case 'Summary':
	    			$summary = CenterSummary::where('center_id',$id)->first();
	    			$contact = CenterContact::where('center_id',$id)->first();
	    			return view('pages.center.summary',['id'=>$id,'summary'=>$summary,'contact'=>$contact]);
	    			break;

	    		case 'Finance':
	    			$finance = CenterFinance::where('center_id',$id)->first();
	    			return view('pages.center.finance',['id'=>$id,'finance'=>$finance]);
	    			break;

	    		case 'Schedule':
	    			$schedule = CenterSchedule::where('center_id',$id)->get();
	    			if(count($schedule)>0)
	    				return view('pages.center.schedule',['id'=>$id,'schedule'=>$schedule]);
	    			else
	    				return view('pages.center.start_schedule');
	    			break;

	    		case 'Resources':
	    			# code...
	    			break;

	    		case 'Courses':
	    			# code...
	    			break;
	    		default:
	    			# code...
	    			break;
	    	}
    	}else{
    		abort(404);
    	}
    	
    }

    public function newcenter(Request $request)
    {
    	$center = new Center;
    	$center->name = $request->name;
    	$center->code = $request->code;
    	$center->save();
    	$center_summary = new CenterSummary;
    	$center_summary->center_id = $center->id;
    	$center_summary->save();

    	$center_finance = new CenterFinance;
    	$center_finance->center_id = $center->id;
    	$center_finance->save();

    	$center_contact = new CenterContact;
    	$center_contact->center_id = $center->id;
    	$center_contact->save();

    	$center->center_summary_id = $center_summary->id;
    	$center->center_finance_id = $center_finance->id;
    	$center->center_contact_id = $center_contact->id;
    	$center->save();

    	$summary = CenterSummary::where('center_id',$center->id)->first();
    	$contact = CenterContact::where('center_id',$center->id)->first();
    	return view('pages.center.summary',['summary'=>$summary,'contact'=>$contact]);


    }

    public function editsubpageview($id,$subpage)
    {
    	$center = Center::find($id);
    	if($center){
    		switch ($subpage) {
	    		case 'Summary':
	    			$summary = CenterSummary::where('center_id',$id)->first();
	    			$contact = CenterContact::where('center_id',$id)->first();
	    			return view('pages.center.edit_summary',['id'=>$id,'summary'=>$summary,'contact'=>$contact]);
	    			break;

	    		case 'Finance':
	    			$finance = CenterFinance::where('center_id',$id)->first();
	    			return view('pages.center.edit_finance',['id'=>$id,'finance'=>$finance]);
	    			break;

	    		case 'Schedule':
	    			$schedule = CenterSchedule::where('center_id',$id)->get();
	    			return view('pages.center.edit_schedule',['id'=>$id,'schedule'=>$schedule]);
	    			break;

	    		case 'Resources':
	    			# code...
	    			break;

	    		case 'Courses':
	    			# code...
	    			break;
	    		default:
	    			# code...
	    			break;
	    	}
    	}else{
    		abort(404);
    	}
    	
    }

    public function editsubpage($id, $subpage, Request $request)
    {
    	switch ($subpage) {
    		case 'Summary':
    			$summary = CenterSummary::where('center_id',$id)->first();
		    	$summary->update(['center_general_info_phone'=>$request['phone'],
		    					  'center_general_info_fax'=>$request['fax'],
		    					  'center_general_info_email'=>$request['email'],
		    					  'center_location_from_date'=>$request['from_date'],
		    					  'center_location_to_date'=>$request['to_date'],
		    					  'center_location_addr'=>$request['addr'],
		    					  'center_location_country'=>$request['country'],
		    					  'center_location_state'=>$request['state'],
		    					  'center_location_city'=>$request['city'],
		    					  'center_location_region'=>$request['region']]);
		    	$contact = CenterContact::where('center_id',$request['center_id'])->first();
		    	$contact->update(['center_contact_manager'=>$request['manager'],
		    					  'center_contact_senior_manager'=>$request['sr_manager'],
		    					  'center_contact_district_manager'=>$request['ds_manager'],
		    					  'center_contact_incident_manager'=>$request['inc_manager']]);
		    	return redirect('/Center/'.$id.'/Summary');
    			break;

    		case 'Finance':
    			$finance = CenterFinance::where('center_id',$id)->first();
		    	$finance->update(['company_info_billing_name'=>$request['name'],
		    					  'company_info_billing_email'=>$request['email'],
		    					  'company_info_reg_no'=>$request['reg_no'],
		    					  'company_info_tax_reg_no'=>$request['tax_reg_no'],
		    					  'company_info_tax_reg_date'=>$request['reg_date'],
		    					  'company_info_billing_addr'=>$request['addr'],
		    					  'company_info_tax'=>$request['tax'],
		    					  'company_info_tax_percent'=>$request['percent'],
		    					  'company_info_currency'=>$request['curr'],
		    					  'bank_detail_name'=>$request['bank_name'],
		    					  'bank_detail_acc_name'=>$request['acc_name'],
		    					  'bank_detail_branch_code'=>$request['branch_code'],
		    					  'bank_detail_acc_number'=>$request['acc_num'],
		    					  'bank_detail_swift'=>$request['swift']]);
		    	return redirect('/Center/'.$id.'/Finance');
    			break;

    		case 'Schedule':
    			foreach($request->dow as $dow){
    				$schedule = CenterSchedule::where('center_id',$id)->first();
    				if($schedule){
    					$schedule->update([
		    					  'date_of_week_id'=>$dow+1,
		    					  'open_time'=>$request['from_tm'][$dow],
		    					  'closed_time'=>$request['to_tm'][$dow],
		    					  'day_closed'=>$request['closed'][$dow],
		    					  'more_hours'=>$request['more'][$dow]]);
    				}else{
    					$schedule->create(['center_id'=>$id,
		    					  'date_of_week_id'=>$dow+1,
		    					  'open_time'=>$request['from_tm'][$dow],
		    					  'closed_time'=>$request['to_tm'][$dow],
		    					  'day_closed'=>$request['closed'][$dow],
		    					  'more_hours'=>$request['more'][$dow]]);
    				}
		    		
    			}
    			
		    	return redirect('/Center/'.$id.'/Schedule');
    			break;

    		case 'Resources':
    			# code...
    			break;

    		case 'Courses':
    			# code...
    			break;
    		default:
    			# code...
    			break;
    	}
    }

    public function masterfrances($mf_id)
    {

    	return view('pages.center.masterfrances');
    }

    public function licenseholder($mf_id,$lh_id)
    {
    	return view('pages.center.licenseholder');
    }

}

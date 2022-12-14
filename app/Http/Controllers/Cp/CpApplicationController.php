<?php
namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Http\Request;
use App\Models\CP\CpApplication;

use Yajra\Datatables\Datatables;
//use Datatables;

class CpApplicationController extends Controller
{
	public function index()
	{
		return view('cp.req-change-subsidize.index');
	}

	// เป็นฟังก์ชันสำหรับแสดงผลข้อมูล
	public function data_list(Request $request)
	{
		$filter_cb = $request->input('filter_cb');

		$query = CpApplication::query()
					->when($filter_cb, function($query, $filter_cb){
						return $query->where('cb_org_id', $filter_cb);
					});

		return Datatables::of($query)
						->addIndexColumn()
						->addColumn('application_no',function($item){
							return $item->application_no;
						})
						->addColumn('full_name',function($item){
							return $item->FullName;
						})
						->order( function ($query){
							$query->orderBy('id','desc');
						})
						->rawColumns(['application_no'])
						->make(true);
	}
}
?>
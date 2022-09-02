<?php
use Illuminate\Support\Facades\DB;

class HelperCP {

	public static function CBOrg()
	{
		$cb = DB::table('cb_org')
				->select('id', DB::raw("CONCAT(code,' : ',name) AS cb_name") )
				->where('active',1)
				->pluck('cb_name','id')
				->toArray();
		return $cb;
	}

	public static function CBmou()
	{
		$cb_mou = DB::table('basic_mou')
					->select('id','contract_no')
					->pluck('contract_no','id')
					->toArray();
		return $cb_mou;
	}
}

?>
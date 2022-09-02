@extends('layout.master')

@section('content')
<div>
	<?php
		try{
			echo  DB::connection()->getDatabaseName();
			// if( DB::connection()->getPdo() ){
			// 	echo "Successfully connect to the database" . DB::connection()->getDatabaseName();
			// }
		}catch(Exception $e){
			echo "Unable to connect";
		}
	?>
</div>
@endsection
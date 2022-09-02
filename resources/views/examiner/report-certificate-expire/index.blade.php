@extends('layout.master')
@section('content')
<div class="card shadow-lg">
	<div class="card-body">
		<div class="row">
			<h4 class="text-title">ข้อมูลเจ้าหน้าที่สอบที่ใกล้หมดอายุ</h4>
		</div>
		{!! Form::open(['url' => '']) !!}

		<div id="box_search">
			<div class="row mt-4">
				<div class="col-md-2">
					@php
					$criteria_search = ['1' =>'เลขที่ใบสมัคร', '2'=>'เลขบัตรประชาชน', '3' =>'ชื่อ-นามสกุล'];
					@endphp
					{!! Form::label('filter_search', 'ค้นหาจาก', ['class' => 'text-label']) !!}
					{!! Form::select('filter_search', $criteria_search, null, ['class' => 'form-control','id' =>
					'filter_search']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('keyword', 'คำค้น', ['class' => 'text-label']) !!}
					{!! Form::text('keyword', null, ['class' => 'form-control','placeholder' =>'กรอกคำค้น...'] ) !!}
				</div>
				<div class="col-md-4">
					{!! Form::label('cb', 'องค์กรรับรอง', ['class' => 'text-label']) !!}
					{!! Form::select('cb', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control','id' => 'cb']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('cert_expire', 'วันที่ใกล้หมดอายุ', ['class' => 'text-label']) !!}
					{!! Form::select('cert_expire', ['30' => '30', '60' => '60'], null, ['class' => 'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mt-3 text-center">
					{!! Form::submit('ค้นหา', ['class'=>'btn btn-primary']) !!}
					{!! Form::reset('ล้างค่า', ['class'=>'btn btn-secondary']) !!}
				</div>
			</div>
 		</div>
		{!! Form::close() !!}

		<br><br>
		<!-- การแสดงผลลัพธ์ -->
		<div class="row">
			<div class="col-md-12 text-right">
				<div>
					{!! Form::button('พิมพ์', ['class'=>'btn btn-primary']) !!}
					{!! Form::button('Excel', ['class'=>'btn btn-success']) !!}
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-hover" width="100%">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">ชื่อ-สกุล</th>
								<th scope="col">คุณวุฒิวิชาชีพ/เลขที่ใบประกาศ</th>
								<th scope="col">วันที่หมดอายุ</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('page-scripts')
<script>

</script>
@endpush
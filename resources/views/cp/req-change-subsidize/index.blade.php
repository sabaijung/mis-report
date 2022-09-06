@extends('layout.master')
@section('content')
<div class="card shadow-lg">
	<div class="card-body">
		<div class="row">
			<h4 class="text-title">ขอเปลี่ยนแปลงข้อมูลผู้สมัคร</h4>
		</div>
		<!-- {!! Form::open(['url' => '']) !!} -->
		{!! Form::open(['method' => '', 'class' => '']) !!}
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
					{!! Form::select('cb', HelperCP::CBOrg(), null, ['class' => 'form-control','id' => 'cb']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('mou', 'เลขที่ MOU', ['class' => 'text-label']) !!}
					{!! Form::select('mou', HelperCP::CBmou(), null, ['class' => 'form-control', 'id' => 'mou']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mt-3 text-center">
					<!-- {!! Form::submit('ค้นหา', ['class'=>'btn btn-primary']) !!} -->
					<button type="button" class="btn btn-primary" id="btn_search">ค้นหา</button>
					{!! Form::reset('ล้างค่า', ['class'=>'btn btn-secondary']) !!}
				</div>
			</div>
		</div>
		{!! Form::close() !!}

		<br><br>
		<!-- การแสดงผลลัพธ์ -->
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-hover" id="showData" width="100%">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">เลขที่ใบสมัคร</th>
								<th scope="col">ชื่อ-สกุล</th>
								<th scope="col">ประเภท/คุณวุฒิวิชาชีพ</th>
								<th scope="col">สถานะ/ชำระ</th>
								<th scope="col">จัดการ</th>
							</tr>
						</thead>
						<tbody>
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
$(document).ready(function(){
	$(function(){
		var table = $("#showData").DataTable({
			processing: true,
			serverSide: true,
			searching: false,
			ajax:{
				url: "{!! url('cp/req-change-subsidize/data_list') !!}",
				data: function(d){
					d.filter_search = $("#filter_search").val();
					d.filter_keyword = $("#keyword").val();
					d.filter_cb = $("#cb").val();
					d.filter_mou = $("#mou").val();
				}
			},
			columns:[
				{
					data:'DT_RowIndex',
					searchable:false,
					orderable: false
				},
				{
					data:'application_no',
					name:'application_no'
				},
				{
					data:'full_name',
					name:'full_name'
				}
			],
			columnDefs:[
				{
					className:"text-center",
					targets:1
				}
			]
		});

		$("#btn_search").click(function(){
			//alert("fff");
			table.draw();
		})

	})

})

</script>
@endpush
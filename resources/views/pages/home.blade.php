@extends('layouts.main')

@section('content')
<div class="dashboard-inner">
	<div class="container">
		<div class="row center">
			<div class="boxs-a">
				<a href="#modal-a1" class="single-box waves-effect waves-light modal-trigger">
					<div class="inner-part">
						<div class="icon"></div>
						<h4>Dashboard</h4>
						<p>Complete Summary</p>
					</div>
				</a>
			</div>

			<div class="boxs-a">
				<a href="{{url('/Center')}}" class="single-box waves-effect waves-light modal-trigger">
					<div class="inner-part">
						<div class="icon"></div>
						<h4>Centres</h4>
						<p>Centres management</p>
					</div>
				</a>
			</div>

			<div class="boxs-a">
				<a href="{{url('/Student/'.$centername)}}" class="single-box waves-effect waves-light modal-trigger">
					<div class="inner-part">
						<div class="icon"></div>
						<h4>Students</h4>
						<p>View Students</p>
					</div>
				</a>
			</div>

			<div class="boxs-a">
				<a href="#modal-a4" class="single-box waves-effect waves-light modal-trigger">
					<div class="inner-part">
						<div class="icon"></div>
						<h4>Courses</h4>
						<p>Edit Available Courses</p>
					</div>
				</a>
			</div>

			<div class="boxs-a">
				<a href="#modal-a5" class="single-box waves-effect waves-light modal-trigger">
					<div class="inner-part">
						<div class="icon"></div>
						<h4>Human Resources</h4>
						<p>Short Description</p>
					</div>
				</a>
			</div>

			<div class="boxs-a">
				<a href="#modal-a6" class="single-box waves-effect waves-light modal-trigger">
					<div class="inner-part">
						<div class="icon"></div>
						<h4>Inventory</h4>
						<p>Inventory Management</p>
					</div>
				</a>
			</div>

			<div class="boxs-a">
				<a href="#modal-a7" class="single-box waves-effect waves-light modal-trigger">
					<div class="inner-part">
						<div class="icon"></div>
						<h4>Accounts</h4>
						<p>Bank Accounts Details</p>
					</div>
				</a>
			</div>

			<div class="boxs-a">
				<a href="#modal-a8" class="single-box waves-effect waves-light modal-trigger">
					<div class="inner-part">
						<div class="icon"></div>
						<h4>Communication Centre </h4>
						<p>Comm Centres</p>
					</div>
				</a>
			</div>

			<div class="boxs-a">
				<a href="#modal-a9" class="single-box waves-effect waves-light modal-trigger">
					<div class="inner-part">
						<div class="icon"></div>
						<h4>System Administration</h4>
						<p>System Administrations</p>
					</div>
				</a>
			</div>

			<div class="boxs-a">
				<a href="#modal-a10" class="single-box waves-effect waves-light modal-trigger">
					<div class="inner-part">
						<div class="icon"></div>
						<h4>User Management</h4>
						<p>User Management Editor</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal Structure -->
<div id="modal-a1" class="modal">
	<div class="modal-content">
		<div class="modal-box-a">
			<div class="modal-inner">
				<h3>Courses</h3>

				<div class="button-box">
					<a class="waves-effect waves-light btn-large full-width" href="">Print Lesson Rolls</a>
				</div>

				<div class="button-box">
					<a class="waves-effect waves-light btn-large full-width" href="">Mark Attendance</a>
				</div>
			</div>
		</div>

		<div class="modal-box-a">
			<div class="modal-inner">
				<h3>CRM</h3>

				<div class="button-box">
					<a class="waves-effect waves-light btn-large full-width" href="">Check Enquiries</a>
				</div>

				<div class="button-box">
					<a class="waves-effect waves-light btn-large full-width" href="">Check Trial Students</a>
				</div>
			</div>
		</div>

		<div class="modal-box-a">
			<div class="modal-inner">
				<h3>COMMUNICATION</h3>

				<div class="button-box">
					<a class="waves-effect waves-light btn-large full-width" href="">Aprovals</a>
				</div>
			</div>
		</div>

		<div class="modal-box-a">
			<div class="modal-inner">
				<h3>accounts</h3>

				<div class="button-box">
					<a class="waves-effect waves-light btn-large full-width" href="">Bank Transfer Payments</a>
				</div>
			</div>
		</div>

		<div class="modal-box-a">
			<div class="modal-inner">
				<h3>pools</h3>

				<div class="button-box">
					<a class="waves-effect waves-light btn-large full-width" href="">Upload Cheques</a>
				</div>

				<div class="button-box">
					<a class="waves-effect waves-light btn-large full-width" href="">Upload Credit Cards Receipts</a>
				</div>
			</div>
		</div>
	</div>
	<!--  <div class="modal-footer">
	<a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
	</div> -->
</div>
@endsection
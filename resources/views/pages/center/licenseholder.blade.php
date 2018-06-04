@extends('pages.center')

@section('center_content')
<div class="col s12 m8 l9 right-side-area">

	<div class="sub-header">
		<div class="header-inner">
			<ul>
				<li>
					<a href="">                            
						<div class="inner-part">
							<div class="icon">
							</div>
							<h4>Summary</h4>
							<p>General Information</p>
						</div>
					</a>
				</li>

				<li>
					<a href="">                            
						<div class="inner-part">
							<div class="icon">
							</div>
							<h4>Finance</h4>
							<p>General Information</p>
						</div>
					</a>
				</li>

				<li>
					<a href="">                            
						<div class="inner-part">
							<div class="icon">
							</div>
							<h4>Schedule</h4>
							<p>classroom and teacher</p>
						</div>
					</a>
				</li>

				<li>
					<a href="">                            
						<div class="inner-part">
							<div class="icon">
							</div>
							<h4>Resource</h4>
							<p>short description</p>
						</div>
					</a>
				</li>

				<li>
					<a href="">                            
						<div class="inner-part">
							<div class="icon">
							</div>
							<h4>Course</h4>
							<p>edit available course</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="schedule-area center-part">
		<div class="header">
			<div class="col s12 m10">
				<div class="header-text">

				<h5><img src="{{asset('assets/img/building.png')}}" alt=""> <span class="col-l-blue">Centre 01</span></h5>
				</div>
			</div>

			<div class="col s12 m2">
				<div class="print-btn input-field">
					<select class="browser-default">
						<option value="" disabled selected>Action</option>
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<div class="sec-area">
		<div class="col s4">
			<img src="{{asset('assets/img/statistics.png')}}" alt=""> <h4>Statistics <span class="color-blue">Licence Holder 01</span></h4>

			<div class="franchise-info-box licence_holder">
				<a href="">
					<div class="single-info z-depth-1">
						<div class="left-icon"></div>
						<ul>
							<li><strong>16</strong></li>
							<li>Centres</li>
						</ul>
					</div>
				</a>

				<a href=""> 
					<div class="single-info z-depth-1">
						<div class="left-icon"></div>
						<ul>
							<li><strong>74</strong></li>
							<li>CLassrooms</li>
						</ul>
					</div>
				</a>

				<a href="">
					<div class="single-info z-depth-1">
						<div class="left-icon"></div>
						<ul>
							<li><strong>215</strong></li>
							<li>Courses</li>
						</ul>
					</div>
				</a>

				<a href=""> 
					<div class="single-info z-depth-1">
						<div class="left-icon"></div>
						<ul>
							<li><strong>438</strong></li>
							<li>Students</li>
						</ul>
					</div>
				</a>
			</div>    

		</div>

		<div class="col s8">
			<div class="card-info-area">
				<div class="g-info z-depth-1">
					<div class="title-a">
						<h5>General Information</h5>
						<div class="icon-edit"><a href=""><i class="material-icons dp48">create</i></a></div>
					</div>

					<div class="info-table">
						<table>
							<tr>
								<td>Company 
								Registration Number</td>
								<td colspan="3">
									<input disabled value="802873504" id="disabled" type="text" class="validate">
								</td>
							</tr>

							<tr>
								<td>Country Registered</td>
								<td colspan="3">
									<input disabled value="Singapore" id="disabled" type="text" class="validate">
								</td>
							</tr>

							<tr>
								<td>Tax Registration Number</td>
								<td colspan="3">
									<input disabled value="802873504" id="disabled" type="text" class="validate">
								</td>
							</tr>

							<tr>
								<td>Tax Registration Date</td>
								<td colspan="3">
									<input disabled value="01/01/2017" id="disabled" type="text" class="validate datepicker">
								</td>
							</tr>

							<tr>
								<td>Tax Utilised</td>
								<td>
									<input disabled value="GST" id="disabled" type="text" class="validate">
								</td>

								<td>
									<input disabled value="10%" id="disabled" type="text" class="validate">
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="contact-info">
					<div class="title-b"><h5>Contacts</h5></div>
					<div class="contact-list">
						<div class="contact-box">
							<div class="profile-pic">
								<img src="{{asset('assets/img/avatar2.png')}}" alt="">
							</div>

							<div class="prfile-details">
								<ul>
									<li>Peter Jenkins</li>
									<li>Centre Manager</li>
								</ul>
							</div>
						</div>

						<div class="contact-box">
							<div class="profile-pic">
								<img src="{{asset('assets/img/avatar2.png')}}" alt="">
							</div>

							<div class="prfile-details">
								<ul>
									<li>Peter Jenkins</li>
									<li>Centre Manager</li>
								</ul>
							</div>
						</div>

						<div class="contact-box">
							<div class="profile-pic">
								<img src="{{asset('assets/img/avatar2.png')}}" alt="">
							</div>

							<div class="prfile-details">
								<ul>
									<li>Peter Jenkins</li>
									<li>Centre Manager</li>
								</ul>
							</div>
						</div>

						<div class="contact-box">
							<div class="profile-pic">
								<img src="{{asset('assets/img/avatar2.png')}}" alt="">
							</div>

							<div class="prfile-details">
								<ul>
									<li>Peter Jenkins</li>
									<li>Centre Manager</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>                  
		</div>
	</div>
</div>
@endsection

@section('center_modal')



@endsection
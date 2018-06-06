@extends('pages.center')

@section('center_content')


<div class="col s12 m8 l9 right-side-area">

    <div class="sub-header">
        <div class="header-inner">
          <ul>
            <li>
              <a href="{{URL::to('Center/'.$id.'/Summary')}}">                            
                <div class="inner-part">
                  <div class="icon">
                  </div>
                  <h4>Summary</h4>
                  <p>General Information</p>
                </div>
              </a>
            </li>

            <li>
              <a href="{{URL::to('Center/'.$id.'/Finance')}}">                            
                <div class="inner-part">
                  <div class="icon">
                  </div>
                  <h4>Finance</h4>
                  <p>General Information</p>
                </div>
              </a>
            </li>

            <li>
              <a href="{{URL::to('Center/'.$id.'/Schedule')}}">                            
                <div class="inner-part">
                  <div class="icon">
                  </div>
                  <h4>Schedule</h4>
                  <p>classroom and teacher</p>
                </div>
              </a>
            </li>

            <li>
              <a href="{{URL::to('Center/'.$id.'/Resources')}}">                            
                <div class="inner-part">
                  <div class="icon">
                  </div>
                  <h4>Resource</h4>
                  <p>short description</p>
                </div>
              </a>
            </li>

            <li>
              <a href="{{URL::to('Center/'.$id.'/Courses')}}">                            
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

    <div class="schedule-area center-part ">
      	<div class="header">
          	<div class="col s12 m10">
              	<div class="header-text">
                  
              		<h5><img src="{{asset('assets/img/building.png')}}" alt=""> <span class="col-l-blue">{{App\Models\Center::find($id)->center_name}}</span></h5>
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

	<div class="sec-area company-details">
		<form action="" method="POST" id="finance_form">
			@csrf
		<div class="col s12 m6 l5">
			<div class="card-info-area">
				<div class="g-info z-depth-1">
					<div class="title-a">
						<h5>Company Information</h5>
						<!-- <div class="icon-edit"><a href=""><i class="material-icons dp48">create</i></a></div> -->
					</div>

					<div class="info-table">
						<table>
							<tr>
								<td>Billing Name</td>
								<td colspan="4">
									<input value="{{$finance->company_info_billing_name}}" name="name" type="text" class="validate">
								</td>
							</tr>

							<tr>
								<td>Billing E-Mail</td>
								<td colspan="4">
									<input value="{{$finance->company_info_billing_email}}" name="email"  type="text" class="validate">
								</td>
							</tr>

							<tr>
								<td>Comapany Registration No</td>
								<td colspan="4">
									<input value="{{$finance->company_info_reg_no}}" name="reg_no" type="text" class="validate">
								</td>
							</tr>

							<tr>
								<td>Tax Registration No</td>
								<td colspan="4">
								  <input value="{{$finance->company_info_tax_reg_no}}" name="tax_reg_no" type="text" class="validate">
								</td>

							</tr>

							<tr>
								<td>Tax Registration Date</td>
								<td colspan="4">
								  <input value="{{$finance->company_info_tax_reg_date}}" name="reg_date" class="datepicker">
								</td>

							</tr>

							<tr>
								<td>Billing Address</td>
								<td colspan="4">
									<label>
										<input type="checkbox" class="filled-in" name="same_center_location" />
										<span> Same as Centre Location</span>
									</label>
								</td>
							</tr>

							<tr>
								<td></td>                                  
								<td colspan="4">                                 
									<textarea id="textarea1" class="" name="addr" placeholder="16 Badenoch Avenue Glenhaven NSW 2156 Australia">{{$finance->company_info_billing_addr}}</textarea>
								</td>
							</tr>

							<tr>
								<td>Tax</td>
								<td>
									<input value="{{$finance->company_info_tax}}" name="tax" type="text" class="validate">
								</td>
								<td>
									<input value="{{$finance->company_info_tax_percent}}" name="percent" type="text" class="validate">
								</td>
							</tr>

							<tr>
								<td>Currency</td>
								<td colspan="4">
									<input value="{{$finance->company_info_currency}}" name="curr" type="text" class="validate">
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>                  
		</div>

		<div class="col s12 m6 l5">

			<div class="card-info-area">
				<div class="g-info z-depth-1">
					<div class="title-a center">
						<h5>Bank Details</h5>
					</div>

					<div class="info-table">
						<table>
							<tr>
								<td>Bank Name</td>
								<td>
									<input value="{{$finance->bank_detail_name}}" name="bank_name" type="text" class="validate">
								</td>
								<td><img src="{{asset('assets/img/ANZ-brand.png')}}" alt=""></td>
							</tr>

							<tr>
								<td>Acc Name</td>
								<td colspan="3">
									<input value="{{$finance->bank_detail_acc_name}}" name="acc_name" type="text" class="validate">
								</td>
							</tr>

							<tr>
								<td>Branch Code</td>
								<td colspan="3">
									<input value="{{$finance->bank_detail_branch_code}}" name="branch_code" type="text" class="validate">
								</td>
							</tr>

							<tr>
								<td>Acc Number</td>
								<td colspan="3">
									<input value="{{$finance->bank_detail_acc_number}}" name="acc_num" type="text" class="validate">
								</td>
							</tr>

							<tr>
								<td>SWIFT</td>
								<td colspan="3">
									<input value="{{$finance->bank_detail_swift}}" name="swift" type="text" class="validate">
								</td>                             
							</tr>
						</table>
					</div>

					<h4 class="center">Invoicing</h4>
					<a class="waves-effect waves-light btn-large full-width z-depth-4">go to finance module</a>
				</div>
			</div>  
		</div>
		<div class="col l2"></div>
		<button class="btn btn primary" onclick="event.preventDefault();document.getElementById('finance_form').submit();">Save</button>
	</form>
	</div>

</div>

@endsection

@section('center_modal')

@endsection

@section('add_js')
<script type="text/javascript">
	$("input[name='same_center_location']").change(function() {
            if($("input[name='same_center_location']").is(':checked')){
            	$("textarea#textarea1").val("<?php echo App\Models\CenterSummary::where('center_id',$finance->center_id)->first()->center_location_addr;?>");
            }else{
            	$("textarea#textarea1").val("<?php echo $finance->company_info_billing_addr;?>");
            }
	});

</script>
@endsection
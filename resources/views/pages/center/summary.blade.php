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

      <div class="schedule-area center-part">
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

      <div class="sec-area">

        <div class="col s7">
          <div class="card-info-area">
            <div class="g-info z-depth-1">
              <div class="title-a">
                <h5>General Information</h5>
                <div class="icon-edit"><a href="{{'Summary/Edit'}}"><i class="material-icons dp48">create</i></a></div>
              </div>
             
              <div class="info-table">
                <table>
                  <tr>
                    <td>Phone</td>
                    <td colspan="3">
                      <input disabled value="{{$summary->center_general_info_phone}}" name="phone" id="disabled" type="text" class="validate">
                    </td>
                  </tr>

                  <tr>
                    <td>Fax</td>
                    <td colspan="3">
                      <input disabled value="{{$summary->center_general_info_fax}}" name="fax" id="disabled" type="text" class="validate">
                    </td>
                  </tr>

                  <tr>
                    <td>Email</td>
                    <td colspan="3">
                      <input disabled value="{{$summary->center_general_info_email}}" name="email" id="disabled" type="text" class="validate">
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
                      <li>{{$contact->center_contact_manager}}</li>
                      <li>Contact Manager</li>
                    </ul>
                  </div>
                </div>

                <div class="contact-box">
                  <div class="profile-pic">
                    <img src="{{asset('assets/img/avatar2.png')}}" alt="">
                  </div>

                  <div class="prfile-details">
                    <ul>
                      <li>{{$contact->center_contact_senior_manager}}</li>
                      <li>Senior Manager</li>
                    </ul>
                  </div>
                </div>

                <div class="contact-box">
                  <div class="profile-pic">
                    <img src="{{asset('assets/img/avatar2.png')}}" alt="">
                  </div>

                  <div class="prfile-details">
                    <ul>
                      <li>{{$contact->center_contact_district_manager}}</li>
                      <li>District Manager</li>
                    </ul>
                  </div>
                </div>

                <div class="contact-box">
                  <div class="profile-pic">
                    <img src="{{asset('assets/img/avatar2.png')}}" alt="">
                  </div>

                  <div class="prfile-details">
                    <ul>
                      <li>{{$contact->center_contact_incident_manager}}</li>
                      <li>Incident Manager</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          
          </div>   
          
          <div class="franchise-info-box">
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

           

        <div class="col s5">
          <div class="location-info z-depth-1">
            <div class="title-c"><h5>Location</h5></div>
            <div class="google-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.969348608624!2d114.04311731537273!3d22.316998947927225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403fc288479ab71%3A0xd2becc5f792a1ad5!2sDisneyland!5e0!3m2!1sen!2sbd!4v1527013398434" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="info-table">
              <table>
                <tr>
                  <td>From</td>
                  <td><div class="date-a"><input name="from_date" disabled="" class="datepicker" value="{{$summary->center_location_from_date}}"></div> </td>
                  <td>to</td>
                  <td><div class="date-a"><input name="to_date" disabled="" class="datepicker" value="{{$summary->center_location_to_date}}"></div> </td>
                </tr>

                <tr>
                  <td>Address</td>
                  <td colspan="3">
                    <input disabled value="{{$summary->center_location_addr}}" name="addr" id="disabled" type="text" class="validate">
                  </td>
                </tr>

                <tr>
                  <td>Country</td>
                  <td colspan="3">
                    <input disabled value="{{$summary->center_location_country}}" name="country" id="disabled" type="text" class="validate">
                  </td>
                </tr>

                <tr>
                  <td>State</td>
                  <td colspan="3">
                    <input disabled value="{{$summary->center_location_state}}" name="state" id="disabled" type="text" class="validate">
                  </td>
                </tr>

                <tr>
                  <td>City</td>
                  <td colspan="3">
                    <input disabled value="{{$summary->center_location_city}}" name="city" id="disabled" type="text" class="validate">
                  </td>
                </tr>

                <tr>
                  <td>Region</td>
                  <td colspan="3"> 
                    <input disabled value="{{$summary->center_location_region}}" name="region" id="disabled" type="text" class="validate">
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

      </div>

    </div>

<!--Schedule Model-->
@endsection

@section('center_modal')
<!-- Modal Structure -->
<div id="schedule-a1" class="modal">
  <div class="modal-content">
    <div class="top-part"> <h5>Writing Enrichment  <span class="col-l-blue">Level 1</span></h5></div>
    <div class="sec-part">
      <div class="row">
        <div class="col m6">
          <ul class="date-time">
            <li><img src="{{asset('assets/img/modal_cal.png')}}" alt=""> Wednesday, January 31, 2018</li>
            <li><img src="{{asset('assets/img/clock.png')}}" alt=""> 10.00 - 12.00  AM</li>
          </ul>

          <div class="table-area">
            <table>
              <tr>
                <td>Lesson</td>
                <td>T1 W2</td>
              </tr>

              <tr>
                <td>Class</td>
                <td>
                  <ul>
                    <li><h6>Writing Enrichment Level 1</h6></li>
                    <li><div class="gray-col">Wednesday P2-L2-001-TWC-B1-SAT1400</div></li>
                  </ul>
                </td>
              </tr>

              <tr>
                <td>Teacher</td>
                <td>Peter Jackson</td>
              </tr>

              <tr>
                <td>Centre</td>
                <td>Chatswood</td>
              </tr>

              <tr>
                <td>Classroom</td>
                <td>B404</td>
              </tr>
            </table>
          </div>
          <a class="outline-btn waves-effect waves-light btn" href="">Manage Lesson</a>
          <a class="normal-btn waves-effect waves-light btn" href="">Manage Class</a>
        </div>

        <div class="col m6">
          <div class="info-box">
            <div class="col s12 m6">
              <div class="card-panel">

                <div class="info-box-inner">
                  <h4>Information</h4>

                  <ul>
                    <li><img src="{{asset('assets/img/student_samll.png')}}" alt=""> <div class="right-text">5 <br>Reguler Students</div></li>
                    <li><img src="{{asset('assets/img/clock_white.png')}}" alt=""> <div class="right-text">1 <br>Trial Students</div></li>
                    <li><img src="{{asset('assets/img/arrow_right_left.png')}}" alt=""> <div class="right-text">1 <br>Replacement Students</div></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="normal-btn modal-close waves-effect waves-green btn">Back</a>
  </div>
</div>
<!--Schedule Model End-->

@endsection
@extends('layouts.main')

@section('content')
<?php
$gender = ['Male','Female'];
use App\Models\BillingAccount;
use \Carbon\Carbon;
$bas = BillingAccount::all();
?>
<div class="secend-nav">
    <div class="row">
        <ul>
            <li><a href="{{url('/Student/'.$student->id.'/Summary')}}"><span class="nav-icon"></span> Summary</a></li>
            <li><a href="{{url('/Student/'.$student->id.'/Class')}}"><span class="nav-icon"></span> Class</a></li>
            <li><a href="{{url('/Student/'.$student->id.'/Enrollment')}}"><span class="nav-icon"></span> Enrolment</a></li>
            <li><a href=""><span class="nav-icon"></span> Communication</a></li>
            <li><a href=""><span class="nav-icon"></span> Finance</a></li>
            <li><a href=""><span class="nav-icon"></span> Log</a></li>
            <li><a href=""><span class="nav-icon"></span> Files</a></li>
        </ul>
    </div>
</div>   
<!-- Main wrapper -->

<div class="main-wrapper">  
    <div class="row">
        <div class="col s12 m12 l6">
            <div class="user-info">               
                <div class="inner-top-part">
                    <div class="top-left">
                        <p>{{$student->student_id}}</p>
                        <h5>{{$student->student_surname.' '.$student->student_given_name}} <span class="badge-green">Enrolled</span></h5>
                    </div>
                    <div class="top-right">
                      
                    <div class="col s12 m3">
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>Action</option>
                                <option value="1">Enroll as Trial Student in Course</option>
                                <option value="2">Enroll as Student in Course</option>
                                <option value="3">Reserve Student in Course </option>
                              </select>
                      </div>
                     </div>                        
                    </div>
                </div>
                <div class="user-more-info">
                    <div class="user-image z-depth-1">
                        <img src="" alt="">
                              <div class="icon-edit"><a href=""><i class="material-icons dp48">create</i></a></div>
                    </div>
                    <div class="profile-info-area z-depth-1">
                        
                          <div class="title-a">
                              <h5>Profile</h5>
                              <div class="icon-edit"><a href=""><i class="material-icons dp48">create</i></a></div>
                          </div>
                          <div class="inner-part-a">
                              <div class="table-profile">
                                  <table>
                                     <thead>
                                         <tr>
                                             <td>Nickname</td>
                                             <td>{{$student->student_nickname}}</td>
                                         </tr>
                                     </thead>   
                                      <tr>
                                          <td>Given Names</td>
                                          <td>{{$student->student_given_name}}</td>
                                      </tr>
                                      <tr>
                                          <td>Surname</td>
                                          <td>{{$student->student_surname}}</td>
                                      </tr>
                                      <tr>
                                          <td>Gender</td>
                                          <td>{{$gender[$student->student_gender]}}</td>
                                      </tr>
                                      <tr>
                                          <td>Date of Birth</td>
                                          <td>{{$student->student_dob}} ({{Carbon::parse($student->student_dob)->age}})</td>
                                      </tr>
                                  </table>
                              </div>
                          </div>
                          <div class="inner-part-a">
                              <div class="table-profile">
                                  <table>
                                      <tr>
                                          <td>Enrolled Since</td>
                                          <td>{{$student->student_enrolled_since}}</td>
                                      </tr>
                                      <tr>
                                          <td>School</td>  

                                          <td>{{$student->student_school}}</td>
                                      </tr>
                                      <tr>
                                          <td>Contract</td>
                                          <td></td>
                                      </tr>
                                      <tr>
                                          <td><a class="btn" href="">Generate</a></td>
                                          <td>
                                      <form action="#">
                                        <div class="file-field input-field">
                                          <div class="btn">
                                            <span>Upload</span>
                                            <input type="file">
                                          </div>
                                        </div>
                                      </form>
                                    </td>
                                      </tr>
                                      <tr>
                                          <td>Billing Account</td>
                                          <td>{{$bas->where('id',$student->student_billing_account_id)->first()->billing_account_name}}</td>
                                      </tr>
                                  </table>
                              </div>
                          </div>
                          
                    </div>
                </div>
                
                
                <div class="bottom-part-relation-info">
                    
                  <div class="card-info-area">
                      <div class="g-info z-depth-1">
                          <div class="title-a">
                              <h5>Relationships</h5>
                              <div class="icon-edit"><a href="#relationship-a1" class="modal-trigger modal-close"><i class="material-icons dp48">create</i></a></div>
                          </div>
                      
                  <div class="inner-part-a">    
                      <div class="table-profile">
                          <table>
                              <tr>
                                  <td colspan="2">Parents/Guardian</td>
                              </tr>
                              <tr>
                                  <td>Mother</td>
                                 <td>Gabbie Budiman</td>
                              </tr>
                              <tr>
                                  <td>Father</td>
                                  <td>Geoff Budiman</td>
                              </tr>
                          </table>
                      </div>
                      </div>
                  <div class="inner-part-a">    
                      <div class="table-profile">
                          <table>
                              <tr>
                                  <td colspan="2">Siblings</td>
                              </tr>
                              <tr>
                                  <td>Brother</td>
                                 <td>Gabriel Budiman</td>
                              </tr>
                              <tr>
                                  <td>Sister</td>
                                  <td>Georgie Budiman</td>
                              </tr>
                          </table>
                      </div>
                      </div>
                      </div>
                      <div class="contact-info">
                          <div class="title-b"><h5>Outstanding</h5></div>
                          <div class="contact-list">
                              <div class="contact-box">
                                 <div class="profile-pic">
                                     <img src="{{asset('assets/img/payment-icon.png')}}" alt="">
                                 </div>
                                  <div class="prfile-details">
                                      <ul>
                                          <li>2</li>
                                          <li>Payments</li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="contact-box">
                                 <div class="profile-pic">
                                     <img src="{{asset('assets/img/fields-icon.png')}}" alt="">
                                 </div>
                                  <div class="prfile-details">
                                      <ul>
                                          <li>8</li>
                                          <li>Fields</li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="contact-box">
                                 <div class="profile-pic">
                                     <img src="{{asset('assets/img/uncommited-icon.png')}}" alt="">
                                 </div>
                                  <div class="prfile-details">
                                      <ul>
                                          <li>2</li>
                                          <li>Uncommitted</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>    
                </div>
                
            </div>
        </div> 
        <div class="col s12 m12 l6">
            <div class="archive-area">
                <h4>Archive Enrolments</h4>
                <div class="right-part-select">
                    
                    <div class="col s12 m3">
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>Course Type</option>
                                <option value="1">options</option>
                                <option value="2">options</option>
                                <option value="3">options</option>
                              </select>
                      </div>
                     </div>
                    <div class="col s12 m3">
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>Enrollment Type</option>
                                <option value="1">options</option>
                                <option value="2">options</option>
                                <option value="3">options</option>
                              </select>
                      </div>
                     </div>
                </div>
            </div>
            <div class="enrolment-single-area">
                
                <div class="user-more-info">
                    <div class="profile-info-area z-depth-1">
                        
                          <div class="title-a">
                              <h5>English Level 3 </h5><span class="badge-blue">Full EnrollMENT</span>
                              <div class="icon-edit"><a href=""><i class="material-icons dp48">settings</i></a>
                                  <ul class="selection-list">
                                     <li><a href="">Replacement Lesson</a></li>
                                     <li><a href="">Generate Next Term Fees</a></li>
                                     <li><a href="">More Actions</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="inner-part-a">
                              <div class="table-profile">
                                  <table>
                                     <thead>
                                         <tr>                                 
                                             <td>Classes <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Teacher <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Pregression <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Start Date <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>End Date <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Attendance <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                         </tr>
                                     </thead>   
                                      <tr>
                                          <td>
                                             <ul>
                                              <li>Saturday </li>
                                              <li><small>02:00 PM - 03:00 PM</small></li>
                                            </ul>
                                          </td>
                                          <td>Abbie Waterhouse</td>
                                          <td><span class="squ-dage-green">commited</span></td>
                                          <td>01 / Feb / 2017</td>
                                          <td>01 / Dec / 2017</td>
                                          <td class="attendance-info center">
                                              <ul>
                                                  <li><strong>85,2 %</strong></li>
                                                  <li><small>23 /27</small></li>
                                              </ul>
                                          </td>
                                      </tr>
                                  </table>
                              </div>
                          </div>                          
                    </div>
                </div>
                
                
                <div class="user-more-info">
                    <div class="profile-info-area z-depth-1">
                        
                          <div class="title-a">
                              <h5>English Level 3 </h5><span class="badge-org">RESERVED EnrollMENT</span>
                              <div class="icon-edit"><a href=""><i class="material-icons dp48">settings</i></a>
                              
                                    <ul class="selection-list">
                                     <li><a href="">Convert to Full Envrollment</a></li>
                                     <li><a href="">Cancel Reservation</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="inner-part-a">
                              <div class="table-profile">
                                  <table>
                                     <thead>
                                         <tr>                                 
                                             <td>Classes <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Teacher <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Pregression <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Start Date <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>End Date <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Attendance <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                         </tr>
                                     </thead>   
                                      <tr>
                                          <td>
                                             <ul>
                                              <li>Saturday </li>
                                              <li><small>02:00 PM - 03:00PM</small></li>
                                            </ul>
                                          </td>
                                          <td>Abbie Waterhouse</td>
                                          <td><span class="squ-dage-red">Uncommited</span></td>
                                          <td>01 / Feb / 2017</td>
                                          <td>01 / Dec / 2017</td>
                                          <td class="attendance-info center">
                                              <ul>
                                                  <li><strong>85,2 %</strong></li>
                                                  <li><small>23 /27</small></li>
                                              </ul>
                                          </td>
                                      </tr>
                                  </table>
                              </div>
                          </div>                          
                    </div>
                </div>
                
                <div class="user-more-info">
                    <div class="profile-info-area z-depth-1">
                        
                          <div class="title-a">
                              <h5>English Level 3 </h5><span class="badge-org">RESERVED EnrollMENT</span>
                              <div class="icon-edit"><a href=""><i class="material-icons dp48">settings</i></a>
                              
                                    <ul class="selection-list">
                                     <li><a href="">Convert to Full Envirolment</a></li>
                                     <li><a href="">Cancel Reservation</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="inner-part-a">
                              <div class="table-profile">
                                  <table>
                                     <thead>
                                         <tr>                                 
                                             <td>Classes <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Teacher <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Pregression <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Start Date <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>End Date <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                             <td>Attendance <i class="material-icons dp48">keyboard_arrow_down</i></td>
                                         </tr>
                                     </thead>   
                                      <tr>
                                          <td>
                                             <ul>
                                              <li>Saturday </li>
                                              <li><small>02:00 PM - 03:00PM</small></li>
                                            </ul>
                                          </td>
                                          <td>Abbie Waterhouse</td>
                                          <td><span class="squ-dage-red">Uncommited</span></td>
                                          <td>01 / Feb / 2017</td>
                                          <td>01 / Dec / 2017</td>
                                          <td class="attendance-info center">
                                              <ul>
                                                  <li><strong>85,2 %</strong></li>
                                                  <li><small>23 /27</small></li>
                                              </ul>
                                          </td>
                                      </tr>
                                  </table>
                              </div>
                          </div>                          
                    </div>
                </div>
                
                
            </div>
        </div> 
    </div>
</div>   

<!--Schedule Model-->

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
                     <td><ul>
                         <li><h6>Writing Enrichment Level 1</h6></li>
                         <li><div class="gray-col">Wednesday P2-L2-001-TWC-B1-SAT1400</div></li>
                     </ul></td>
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


  <!---  Relationship Modals  -->
  <div id="relationship-a1" class="modal">
    <div class="modal-content">
      <div class="modal-top-part">  
        <h4>Relationship</h4>
        <p>personal information</p>
      </div>

      <div class="mid-part">
        <h6>Parents/guardians</h6>
        <a href="#personal-a1" class="btn modal-trigger modal-close">Add <i class="material-icons dp48">add</i></a>
        <br>
        <h6>siblings</h6>
        <a href="#guardian-a1" class="btn modal-trigger modal-close">Add <i class="material-icons dp48">add</i></a>
        <br>
      </div>
    </div>
  </div>
<!-- Relationship End -->


<!-- Add Parent/Guardian -->

  <!-- Modal Structure -->
  <div id="guardian-a1" class="modal">
    <div class="modal-content">
      <div class="modal-top-part">  
        <h4>Relationship</h4>
        <p>personal information</p>
      </div>

      <div class="search-area">
        <form action="">
          <input type="text" placeholder="SEARCH (Name, Mobile, Email)">
          <button>GO</button>
        </form>
      </div>
      
      <div class="info-table-c">
        <table>
          <tr>
            <td>Daniel Aiello</td>
            <td>0474000888</td>
            <td>daiello@me.com</td>
          </tr>
        </table>
      </div>

      <a href="" class="btn">create new</a>
    </div>
  </div>

  <div id="personal-a1" class="modal">
    <div class="modal-content">
      <div class="modal-top-part">  
        <h4>Relationship</h4>
        <p>personal information</p>
      </div>

      <div class="search-area">
        <form action="">
            <div class="input-field">
            <input id="first_name" class="validate" type="text">
            <label for="first_name" class="">First Name</label>
          </div>

          <div class="input-field">
            <input id="parent_name" class="validate" type="text">
            <label for="last_name" class="">Last Name</label>
          </div>

          <div class="input-field">
            <input id="parent_name" class="validate" type="text">
            <label for="parent_name" class="">Mobile</label>
          </div>

          <div class="input-field">
            <input id="parent_name" class="validate" type="text">
            <label for="parent_name" class="">Email</label>
          </div>
          
          <div class="input-field">
            <input id="parent_name" class="validate" type="text">
            <label for="parent_name" class="">Parent Name</label>
          </div>
        </form>
      </div>

      <a href="#guardian-a1" class="btn modal-trigger modal-close">SEARCH EXISTING</a>
      <a href="" class="btn">create</a>
    </div>
  </div>

@endsection
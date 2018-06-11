@extends('layouts.main')

@section('content')
<?php
$gender = ['Male','Female'];

use \Carbon\Carbon;

?>
<div class="secend-nav">
    <div class="row">
        <ul>
            <li><a href="{{url('/'.$centername.'/Student/'.$student->id.'/Summary')}}"><span class="nav-icon"></span> Summary</a></li>
            <li><a href="{{url('/'.$centername.'/Student/'.$student->id.'/Class')}}"><span class="nav-icon"></span> Class</a></li>
            <li><a href="{{url('/'.$centername.'/Student/'.$student->id.'/Enrollment')}}"><span class="nav-icon"></span> Enrolment</a></li>
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
                  <div class="arrow-back"><a href="{{url('/'.$centername.'/Student')}}"><i class="material-icons dp48">arrow_back</i></a></div> 
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
                      <form action="{{url('/'.$centername.'/Student/'.$student->id.'/PropicChange')}}" method="POST" enctype="multipart/form-data" id="propic-form">
                        @csrf
                           <div class="icon-edit">

                            <a href="#" onclick="event.preventDefault();document.getElementById('propic-form').submit();" id="image-upload-btn" style="display: none;"><i class="material-icons dp48">save</i></a>

                            <input type="file" accept=".png, .jpg, .jpeg" id="image-file-btn" name="propic">
                            <i class="material-icons dp48">create</i>

                            
                          </div>

                          <img src="{{asset('assets/propic/'.$student->student_profile_pic)}}" id="propic-img" alt="Profile Picture" width="100%">
         
                      </form>
                      
                     </div>
                    <div class="profile-info-area z-depth-1" id="view-profile">
                        <div class="title-a">
                            <h5>Profile</h5>
                            <div class="icon-edit"><a href="" onclick="event.preventDefault();editprofile()"><i class="material-icons dp48">create</i></a></div>
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
                                        <td>Full Names</td>
                                        <td>{{$student->student_full_name}}</td>
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
                                    <!-- <tr>
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
                                    </tr> -->
                                    <tr>
                                        <td>Billing Account</td>
                                        <td>{{$student->billingaccount->first_name.' '.$student->billingaccount->last_name}}</td>
                                        
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="profile-info-area z-depth-1" id="edit-profile" style="display: none;">
                      <form action="{{url('/'.$centername.'/Student/'.$student->id.'/EditStudent')}}" method="POST" id="edit-profile-form"> 
                                @csrf
                        <div class="title-a">
                            <h5>Edit Profile</h5>
                            <div class="icon-edit">
                              <a href="#" onclick="event.preventDefault();back();"><i class="material-icons dp48">create</i></a>

                              <a href="#" onclick="event.preventDefault();document.getElementById('edit-profile-form').submit();"><i class="material-icons dp48">save</i></a></div>
                        </div>
                        <div class="inner-part-a">
                            <div class="table-profile">
                              
                                <table>
                                   <thead>
                                       <tr>
                                           <td>Nickname</td>
                                           <td><input type="text" name="nickname" value="{{$student->student_nickname}}"></td>
                                       </tr>
                                   </thead>   
                                    <tr>
                                        <td>Full Names</td>
                                        <td><input type="text" name="fullName" value="{{$student->student_full_name}}"></td>
                                    </tr>

                                    <tr>
                                        <td>Gender</td>
                                        <td>
                                          <p>
                                            <label>
                                              <input class="with-gap" name="gender" type="radio"  value="0" <?php echo $student->student_gender==0?"checked":'';?>/>
                                              <span>Male</span>
                                            </label>
                                          
                                            <label>
                                              <input class="with-gap" name="gender" type="radio"  value="1" <?php echo $student->student_gender==1?"checked":'';?>/>
                                              <span>Female</span>
                                            </label>
                                          </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td><input name="dob" class="datepicker" value="{{$student->student_dob}}"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="inner-part-a">
                            <div class="table-profile">
                                <table>
                                    <tr>
                                        <td>Enrolled Since</td>
                                        <td><input name="enrolled_since" class="datepicker"  value="{{$student->student_enrolled_since}}"></td>
                                    </tr>
                                    <tr>
                                        <td>School</td>  
                                        <td><input type="text" name="school" value="{{$student->student_school}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Contract</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><a class="btn" href="">Generate</a></td>
                                        <td>
                                          <div class="file-field input-field">
                                              <div class="btn upload-btn">
                                                <span>Upload</span>
                                                <input type="file">
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                      </form>
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
                              @foreach($student->parents as $parent)
                                @if($parent->pivot->classification == 0)
                                <tr>
                                    <td>{{$parent->parent_type == 0 ? 'Father' : 'Mother'}}</td>
                                   <td>{{ $parent->fName.' '.$parent->lName}}</td>
                                </tr>
                                @endif
                              @endforeach
                          </table>
                      </div>
                      </div>
                  <div class="inner-part-a">    
                      <div class="table-profile">
                          <table>
                              <tr>
                                  <td colspan="2">Siblings</td>
                              </tr>
                              @foreach($student->sibling as $sibling)

                                <tr>
                                  <td>{{$sibling->pivot->sibling_type == 0 ? 'Brother' : 'Sister'}}</td>
                                  <td>{{$sibling->student_full_name}}</td>
                                </tr>

                              @endforeach
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


<!-- Add Sibling -->

  <!-- Modal Structure -->
  <div id="guardian-a1" class="modal">
    <div class="modal-content">
      <div class="modal-top-part">  
        <h4>Add Sibling</h4>
        <p>Find Sibling</p>
      </div>

      <div class="search-area">
        <!-- <form action=""> -->
          <div class="input-field col s6 s12 blue-text">
            <i class="blue-text material-icons prefix" style="cursor: pointer;" onclick="searchstudentsibling()">search</i>
            <input type="text" placeholder="Nickname, Given Name, Surname, School" id="search-sibling-val">
          </div>
          
        <!-- </form> -->
      </div>

      <div class="info-table-c">
        <table>
          <thead>
            <tr>
              <th>Select</th>
              <th>Date of Birth</th>
              <th>Nick Name</th>
              <th>Full Name</th>
              <th>School</th>
            </tr>
          </thead>
          <tbody id="find-student-sibling">
          </tbody>
        </table>
      </div>
      <br>
      <form action="{{url('/'.$centername.'/Student/'.$student->id.'/AddSibling')}}" method="POST" id="add-sibling">
        @csrf
        <input type="hidden" name="siblingid" id="siblingid">
      </form>
      <a href="#" class="btn" onclick="event.preventDefault();addsibling();">Add</a>

    </div>
  </div>
<!-- END SIBLING -->

<!-- Find Parent -->

  <!-- Modal Structure -->
  <div id="guardian-a2" class="modal">
    <div class="modal-content">
      <div class="modal-top-part">  
        <h4>Add Parent</h4>
        <p>Find Parent</p>
      </div>

      <div class="search-area">

        <div class="input-field col s6 s12 blue-text">
          <i class="blue-text material-icons prefix" style="cursor: pointer;" onclick="searchstudentparent()">search</i>
          <input type="text" placeholder="First Name, Last Name, Mobile, Email" id="search-parent-val">
        </div>
      </div>
      
      <div class="info-table-c">
        <table>
          <thead>
            <tr>
              <th>Select</th>
              <th>Fist Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Mobile</th>
            </tr>
          </thead>
          <tbody id="find-student-parent">
          </tbody>
        </table>
      </div>
      <form action="{{url('/'.$centername.'/Student/'.$student->id.'/AddParent')}}" method="POST" id="add-parent">
        @csrf
        <input type="hidden" name="parentid" id="parentid">
      </form>
      <a href="#" class="btn" onclick="event.preventDefault();addparent();">Add</a>
    </div>
  </div>
<!-- END SIBLING -->

<!-- Parent Modal -->
  <div id="personal-a1" class="modal">
    <div class="modal-content">
      <div class="modal-top-part">  
        <h4>Add Parent</h4>
        <p>personal information</p>
      </div>

      <div class="search-area">
        <form action="{{url('/'.$centername.'/Student/'.$student->id.'/NewParent')}}" method="POST" id="newparent-form">
          @csrf
          <div class="input-field">
            <input id="first_name" class="validate" type="text" name="fName" required="">
            <label for="first_name" class="">First Name</label>
          </div>

          <div class="input-field">
            <input id="last_name" class="validate" type="text" name="lName" required="">
            <label for="last_name" class="">Last Name</label>
          </div>

          <div class="input-field">
            <input id="mobile" class="validate" type="text" name="mobile" required="">
            <label for="mobile" class="">Mobile</label>
          </div>

          <div class="input-field">
            <input id="email" class="validate" type="text" name="email" required="">
            <label for="email" class="">Email</label>
          </div>

          <div class="input-field">
            <input id="addr" class="validate" type="text" name="addr" required="">
            <label for="addr" class="">Address</label>
          </div>
          
          <div class="input-field">
            <label  class="">Parent Type</label>
            <br>
            <p>
              <label>
                <input class="with-gap" name="parent_type" type="radio"  value="0" checked="" />
                <span>Father</span>
              </label>
            
              <label>
                <input class="with-gap" name="parent_type" type="radio"  value="1" />
                <span>Mother</span>
              </label>
            </p>
          </div>
        </form>
      </div>

      <a href="#guardian-a2" class="btn modal-trigger modal-close">SEARCH EXISTING</a>
      <a href="" class="btn" onclick="event.preventDefault();document.getElementById('newparent-form').submit();">create</a>
    </div>
  </div>
<!-- END PARENT MODAL -->
@endsection

@section('add_js')
<script type="text/javascript">
  function editprofile(){
    $("#view-profile").hide();
    $("#edit-profile").show();
  }

  function back(){
    $("#view-profile").show();
    $("#edit-profile").hide();
  }

  function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#propic-img').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#image-file-btn").change(function() {
    readURL(this);
    $("#image-upload-btn").show();
  });

  function searchstudentsibling(){
    var search = $("#search-sibling-val").val();
    $.ajax({
      url : '{{url('/Search/Student/Sibling')}}',
      type : 'POST',
      data : {
        "_token" : "{{ csrf_token() }}",
        'current' : "{{$student->id}}",
        "query" : search
      },
      dataType : 'html',
      success : function(data){
        var student = JSON.parse(data)['student'];
        var searchelement = "";
        var i = 0;

        student.forEach(function(){
          searchelement += "<tr><td><p><label><input type=\"checkbox\" class=\"filled-in\" name=\"selStu\" value=\""+student[i]['id']+"\"/><span></span></label></p></td><td>"+student[i]['student_dob']+"</td><td>"+student[i]['student_nickname']+"</td><td>"+student[i]['student_full_name']+"</td><td>"+student[i++]['student_school']+"</td></tr>" ;
        });

        $("#find-student-sibling").html(searchelement);
      },
      error : function(){
        console.log("error")
      }
    });
  }

  function searchstudentparent(){
    var search = $("#search-parent-val").val();
    $.ajax({
      url : '{{url('/Search/Student/Parent')}}',
      type : 'POST',
      data : {
        "_token" : "{{ csrf_token() }}",
        'current' : "{{$student->id}}",
        "query" : search
      },
      dataType : 'html',
      success : function(data){
        var parent = JSON.parse(data)['parent'];
        var searchelement = "";
        var i = 0;

        parent.forEach(function(){
          searchelement += "<tr><td><p><label><input type=\"checkbox\" class=\"filled-in\" name=\"selParent\" value=\""+parent[i]['id']+"\"/><span></span></label></p></td><td>"+parent[i]['fName']+"</td><td>"+parent[i]['lName']+"</td><td>"+parent[i]['email']+"</td><td>"+parent[i++]['mobile']+"</td></tr>" ;
        });

        $("#find-student-parent").html(searchelement);
      },
      error : function(){
        console.log("error")
      }
    });
  } 

  function addsibling(){

    var selected_ids = new Array();
    $.each($("input[name='selStu']:checked"), function() {
      selected_ids.push($(this).val());
    });

    $("#siblingid").val(selected_ids);

    $("#add-sibling").submit()

  }

  function addparent(){

    var selected_ids = new Array();
    $.each($("input[name='selParent']:checked"), function() {
      selected_ids.push($(this).val());
    });

    $("#parentid").val(selected_ids);

    $("#add-parent").submit()

  }
</script>
@endsection
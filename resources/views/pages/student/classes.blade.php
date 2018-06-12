@extends('layouts.main')

@section('content')

<div class="secend-nav">
    <div class="row">
        <ul>
            <li><a href="{{url('/Student/'.$centername.'/'.$student->id.'/Summary')}}"><span class="nav-icon"></span> Summary</a></li>
            <li><a href="{{url('/Student/'.$centername.'/'.$student->id.'/Class')}}"><span class="nav-icon"></span> Class</a></li>
            <li><a href="{{url('/Student/'.$centername.'/'.$student->id.'/Enrollment')}}"><span class="nav-icon"></span> Enrollment</a></li>
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
          <div class="col s12">
                        
              <div class="inner-top-part">
                <div class="arrow-back"><a href="{{url('/'.$centername.'/Student')}}"><i class="material-icons dp48">arrow_back</i></a></div> 
                  <div class="top-left">
                      <p>456234789</p>
                      <h5>Matthew Budiman <span class="badge-green">Enrolled</span></h5>
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
              
              <div class="archive-area courses-sec">
                  <h4>Courses</h4>
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
                                  <option value="" disabled selected>Enrolment Type</option>
                                  <option value="1">options</option>
                                  <option value="2">options</option>
                                  <option value="3">options</option>
                                </select>
                        </div>
                       </div>
                      <div class="col s12 m3">
                        <div class="input-field">
                                <select>
                                  <option value="" disabled selected>Cronologycal</option>
                                  <option value="1">options</option>
                                  <option value="2">options</option>
                                  <option value="3">options</option>
                                </select>
                        </div>
                       </div>
                      <div class="col s12 m3">
                        <div class="input-field">
                                <select>
                                  <option value="" disabled selected>Active</option>
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
                              <h5>English Level 3 </h5><span class="badge-blue">Full EnrolMENT</span>
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
                                              <li><small>02:00 PM - 03:00PM</small></li>
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
                              <h5>English Level 3 </h5><span class="badge-org">RESERVED EnrolMENT</span>
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
                  
                <button data-target="enrol-a1" class="modal-trigger modal-button btn">Enrol Into Course 1</button>
                <button data-target="enrol-a2" class="modal-trigger modal-button btn">Enrol Into Course 2</button>
                <button data-target="enrol-into-course-a1" class="modal-trigger modal-button btn">Enrol into Course 2</button>
                <button data-target="note-a1" class="modal-trigger modal-button btn">NOTE</button>
                <button data-target="course-summary" class="modal-trigger modal-button btn">Course Summary</button>
              </div>
          </div> 
      </div>
  </div>   

<!--Schedule Model-->

  <!-- Modal Structure -->
  <div id="enrol-a1" class="modal">
    <div class="modal-content">
     <div class="modal-top-part">  
        <h4>Enrol Into Course </h4>
        <p>Course type and schedule </p>
      </div>
        
      <div class="inner-top-part">
          <img src="{{asset('assets/img/black_course.png')}}" alt="">
          <div class="top-left">
              <p>Primary 1 (WE-P1)</p>
              <h5>Writing Enrichment <span class="badge-blue">Full EnrolMENT</span></h5>
          </div>
      </div>
      <div class="mid-part">
          <h6>Choose a Named Date Range</h6>
          <a href="" class="btn-large">CHOOSE NAMED DATE RANGE</a>
      </div>
      <div class="choose-class  z-depth-1">
          <h5>choose class</h5>
          
          <div class="class-list">
              <input type="radio" name="avatar" id="av_1">
              <label for="av_1">
                  <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_2">
              <label for="av_2">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_3">
              <label for="av_3">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_4">
              <label for="av_4">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_5">
              <label for="av_5">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_6">
              <label for="av_6">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_7">
              <label for="av_7">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_8">
              <label for="av_8">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_9">
              <label for="av_9">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_10">
              <label for="av_10">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>
              <input type="radio" name="avatar" id="av_11">
              <label for="av_11">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>
              <input type="radio" name="avatar" id="av_12">
              <label for="av_12">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

          </div>
      </div>
      
      <div class="bottom-buttons center">
          
        <a href="" class="btn-large">BACK</a>
        <a href="" class="btn-large">NEXT</a>
      </div>
    </div>
  </div>
<!--Schedule Model End-->

  <!-- Modal Structure -->
  <div id="enrol-a2" class="modal">
    <div class="modal-content">
      <div class="modal-top-part">  
        <h4>Enrol Into Course </h4>
        <p>Course type and schedule </p>
      </div>

      <div class="inner-top-part">

          <div class="top-left">
              <p>Primary 1 (WE-P1)</p>
              <h5>Writing Enrichment <span class="badge-blue">Full EnrolMENT</span></h5>
          </div>
      </div>

      <div class="mid-part">
        <div class="input-field">
          <input type="text" class="datepicker">
          <label>Starting Date</label>
        </div>
        <a href="" class="btn-large">Add End Date</a>
      </div>

      <div class="choose-class  z-depth-1">
            
        <div class="inner-bottom-left">
          <h4>Enrol Into Course </h4>
          <p>Classes from : February 01, 2018</p>
        </div>

        <div class="inner-bottom-right">
            
          <a href="" class="btn runded">Next Years</a>
          <a href="" class="btn runded">Enter Date</a>
        </div>

         <div class="bttom-filter-area">
          <button data-target="modal-filters" class="modal-trigger modal-button">Advanced Filters <i class="material-icons dp48">sort</i></button>
         </div>    
              
          <div class="class-list">
              <input type="radio" name="avatar" id="av_1">
              <label for="av_1">
                  <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_2">
              <label for="av_2">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_3">
              <label for="av_3">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_4">
              <label for="av_4">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_5">
              <label for="av_5">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_6">
              <label for="av_6">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_7">
              <label for="av_7">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_8">
              <label for="av_8">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_9">
              <label for="av_9">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

              <input type="radio" name="avatar" id="av_10">
              <label for="av_10">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>
              <input type="radio" name="avatar" id="av_11">
              <label for="av_11">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>
              <input type="radio" name="avatar" id="av_12">
              <label for="av_12">
                    <div class="single-class">
                     <div class="class-no">2</div>
                      <ul>
                          <li>Wednesday</li>
                         <li>15th June 2018</li>
                         <li>11.00 AM - 01.00 PM </li>
                      </ul>
                  </div>
              </label>

          </div>
            
        </div>
        
        <div class="bottom-buttons center">
            
        <a href="" class="btn-large">BACK</a>
        <a href="" class="btn-large">NEXT</a>
      </div>
    </div>
  </div>
<!--Schedule Model End-->


  <!-- Modal Structure -->
  <div id="enrol-into-course-a1" class="modal">
    <div class="modal-content">
      <div class="modal-top-part">  
        <h4>Enrol Into Course </h4>
        <p>Course type and schedule </p>
      </div>
        
      <div class="inner-top-part">
          <div class="col s12">
            <div class="input-field">
              <select>
                <option value="" disabled selected>Action</option>
                <option value="1">Enroll as Trial Student in Course</option>
                <option value="2">Enroll as Student in Course</option>
                <option value="3">Reserve Student in Course </option>
              </select>
            </div>
          </div>
           
          <div class="input-field">
            <input id="parent_name" class="validate" type="text">
            <label for="parent_name" class="">Select a centre</label>
          </div>
          
          <div class="input-field">
            <input id="parent_name" class="validate" type="text">
            <label for="parent_name" class="">First select the course type</label>
          </div> 
      </div>

      <div class="search-filter">
        <h6>Choose a course</h6>
          <div class="serach-box-a">
            <input type="text" placeholder="Type to Quickfilter">
          </div>
          <div class="search-result">
            <p>Writing Enrichment - Primary - WE-P1</p>
            <p>Writing Enrichment - Primary - WE-P1</p>
          </div>
      </div>

      <br>

      <a href="" class="btn-large">cancel</a>
      <a href="" class="btn-large">next</a>
    </div>
  </div>
<!--Schedule Model End-->


  <!-- Modal Structure -->
  <div id="note-a1" class="modal">
    <div class="modal-content center">
      <div class="modal-top-part center">  
        <h3><strong>Note !</strong></h3>
        <p>For siblings/multicourse discounts - enrol in course 
        before pressingpay now or sending 
        payment advices. </p>
      </div>
      <p>
        <label>
          <input type="checkbox" class="filled-in" />
          <span>Dont show me again</span>
        </label>
      </p>
          
      <a href="" class="btn-large">close</a>
    </div>
  </div>
<!--Schedule Model End-->





  <!-- Modal Structure -->
  <div id="course-summary" class="modal">
    <div class="modal-content">
        <div class="modal-top-part">            
          <h4>Enrol Into Course</h4>
          <p>Course type and schedule</p>
        </div>

        <div class="profile-info-area">
            
              <div class="title-a">
                  <h5>Summary</h5>
              </div>
              <div class="inner-part-a">
                  <div class="table-profile">   

                      <table>
                             <tr>
                                 <td>Student</td>
                                 <td>Daniel Aiello</td>
                             </tr>    
                          <tr>
                              <td>Enrolment Type</td>
                              <td>Full Enrolment</td>
                          </tr>
                          <tr>
                              <td>Course</td>
                              <td>Writing - Primary 1 (WE-P1)</td>
                          </tr>
                          <tr>
                              <td>Class</td>
                              <td>Wednesday 11.00 AM - 01.00 PM (ML-2-WED-11-1)</td>
                          </tr>
                          <tr>
                              <td>Start Date</td>
                              <td>TL-L1 - 11th February 2018</td>
                          </tr>
                      </table>
                  </div>
              
              <div class="title-a">
                  <h5>billing account</h5>
              </div>
              <div class="table-profile">
                  <table> 
                      <tr>
                          <td>Billing Account</td>
                          <td>Lisa Aiello</td>
                      </tr>
                  </table>
              </div>
              </div>
              <div class="inner-part-a">
                 
              <div class="title-a center">
                  <h5>amount</h5>
              </div>
                  <div class="table-profile">
                      <table>
                          <tr>
                              <td>Course Fees</td>
                              <td>Term 1</td>
                          </tr>
                          <tr>
                              <td>From</td>  

                              <td>
                              <div class="input-field">
                                <input type="text" class="datepicker">
                                <label>Date of birth</label>
                              </div>
                         </td>
                          </tr>
                          <tr>
                              <td>To</td>
                              <td>
                              <div class="input-field">
                                <input type="text" class="datepicker">
                                <label>Date of birth</label>
                              </div>
                         </td>
                          </tr>
                          <tr>
                              <td>Fee</td>
                              <td>
                                <input type="text" class="validate">
                         </td>
                          </tr>
                          <tr>
                              <td>Registration Fee</td>
                              <td>
                             <table>
                                 <tr>
                                     <td><input type="text"></td>
                                     <td>GST  </td>
                                     <td><input type="text"></td>
                                 </tr>
                             </table>
                         </td>
                          </tr>
                          <tr>
                              <td>Total (with GST)</td>
                              <td>
                                <input type="text" class="validate">
                         </td>
                          </tr>
                      </table>
                      <a href="" class="btn-large gray-c full-width">Manualy / adjust</a>
                  </div>
                  <div class="bottom-buttons center">
                      
                  <a href="" class="btn">Back</a>
                  <a href="" class="btn">Pay now</a>
                  </div>
              </div>
              
        </div>
    </div>
    <div class="modal-footer">
    </div>
  </div>

@endsection
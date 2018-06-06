@extends('layouts.main')

@section('content')

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
        <div class="col s12">
                      
                <div class="inner-top-part">
                   <div class="arrow-back"><a href=""><i class="material-icons dp48">arrow_back</i></a></div> 
                    <div class="top-left">
                        <p>456234789</p>
                        <h5>Matthew Budiman</h5>
                    </div>
                    <div class="top-right">
                      
                    <div class="col s12 m3">
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>Action</option>
                                <option value="1">Suspend Student</option>
                                <option value="2">Withdraw Student</option>
                                <option value="3">Replacement Lesson (For Student) </option>
                                <option value="4">Class Change </option>
                                <option value="5">Course Change </option>
                                <option value="6">Advance Absent Notification </option>
                              </select>
                      </div>
                     </div>                        
                    </div>
                </div>
            <div class="archive-area courses-sec">
                <h4>Lesson</h4>
                <div class="right-part-select">
                    
                    <div class="col s12 m3">
                      <div class="input-field filter-box-b">
                           <i class="material-icons dp48">sort</i>
                            <input type="text" placeholder="Quick Filter">
                      </div>
                     </div>
                </div>
            </div>
            <div class="subject-area">
                
                <div class="user-more-info">
                    <div class="profile-info-area z-depth-1">
                        <div class="title-left-side">
                            <h4>Mathematics</h4>
                            <p>Level 5</p>
                        </div>
                        
                        <ul>
                            <li>
                  <div class="input-field">
                    <input type="text" class="datepicker">
                    <label>Start Date</label>
                  </div></li>
                            <li><img src="{{asset('assets/img/tab_icon_cal.png')}}" alt=""></li>
                            <li>
                  <div class="input-field">
                    <input type="text" class="datepicker">
                    <label>End Date</label>
                  </div></li>
                           <li><img src="{{asset('assets/img/tab_icon_cal.png')}}" alt=""></li>
                            <li>
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>Attendance</option>
                                <option value="1">option</option>
                                <option value="2">option</option>
                                <option value="3">option </option>
                              </select>
                     </div>
                       
                       </li>
                       <li>
                           <p>Attendance</p>
                           <h4>23<span class="gray-c">/27 -</span> <span class="blue-c">80.5%</span></h4>
                       </li>
                    </ul>
                        
                   
                    <div class="data-table">
                        <table>				
                            <thead>
                                    <td>Centre</td>                                
                                    <td>Term</td>                                
                                    <td>Class</td>                                
                                    <td><span class="black-c">Teacher</span> <i class="material-icons dp48">arrow_upward</i></td>                                
                                    <td>No.</td>
                                    <td>Date</td>
                                    <td>Day</td>                                
                                    <td>From</td>                                
                                    <td>to</td>                                
                                    <td>Comments</td>                                
                                    <td>Attended</td>                               
                                    <td>Late</td>                                
                                    <td>Absence</td>                                
                                    <td>Replacements</td>                                
                            </thead>																																		
		       																		Sick		12/30/2017

                            <tr>
                                <td>Kellyville North</td>
                                <td><small>Term 2</small><p>2017</p></td>
                                <td>ML5-SAT112</td>
                                <td>Abbie Waterhouse</td>
                                <td>01</td>
                                <td>12/30/2017</td>
                                <td>Sat</td>
                                <td>11AM</td>
                                <td>2PM</td>
                                <td><span class="color-gray">No Comments</span></td>
                                <td><i class="material-icons dp48 green">check</i></td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                            </tr>													

                            <tr>
                                <td>Kellyville North</td>
                                <td><small>Term 2</small><p>2017</p></td>
                                <td>ML5-SAT112</td>
                                <td>Abbie Waterhouse</td>
                                <td>01</td>
                                <td>12/30/2017</td>
                                <td>Sat</td>
                                <td>11AM</td>
                                <td>2PM</td>
                                <td><span class="color-gray">No Comments</span></td>
                                <td><i class="material-icons dp48 green">check</i></td>
                                <td>No</td>
                                <td>Sick</td>
                                <td>
                                   <ul>
                                    <li>Scheduled for</li>
                                    <li>12/30/2017</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Kellyville North</td>
                                <td><small>Term 2</small><p>2017</p></td>
                                <td>ML5-SAT112</td>
                                <td>Abbie Waterhouse</td>
                                <td>01</td>
                                <td>12/30/2017</td>
                                <td>Sat</td>
                                <td>11AM</td>
                                <td>2PM</td>
                                <td><span class="color-gray">No Comments</span></td>
                                <td><i class="material-icons dp48 red">close</i></td>
                                <td>yes</td>
                                <td>Sick</td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>Kellyville North</td>
                                <td><small>Term 2</small><p>2017</p></td>
                                <td>ML5-SAT112</td>
                                <td>Abbie Waterhouse</td>
                                <td>01</td>
                                <td>12/30/2017</td>
                                <td>Sat</td>
                                <td>11AM</td>
                                <td>2PM</td>
                                <td><span class="color-gray">No Comments</span></td>
                                <td><i class="material-icons dp48 green">check</i></td>
                                <td>No</td>
                                <td>Sick</td>
                                <td>
                                   <ul>
                                    <li>Scheduled for</li>
                                    <li>12/30/2017</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>     
            </div>
                </div> 
    </div>

  
      
            <button data-target="class-change-1" class="modal-trigger modal-button btn">Class Change</button>
            <button data-target="replacement-lesson-a" class="modal-trigger modal-button btn">Replacement Lesson</button>
            <button data-target="replacement-lesson-b" class="modal-trigger modal-button btn">Replacement Lesson 2</button>
            
            <button data-target="replacement-choose-class" class="modal-trigger modal-button btn">Replacement Choose Class</button>
            <button data-target="replacement-choose-class-2" class="modal-trigger modal-button btn">Replacement Choose Class 2</button>
            <button data-target="withdraw-student" class="modal-trigger modal-button btn">Withdraw Student</button>
            <button data-target="suspend-student" class="modal-trigger modal-button btn">Suspend Student </button>
            <button data-target="class-full" class="modal-trigger modal-button btn">Class is Full</button>
            <button data-target="class-change-bill" class="modal-trigger modal-button btn">Class Chnage Bill</button>
  </div>
   
</div>   
</div>   

<!--Replacement Model-->
 

  <!-- Modal Structure -->
  <div id="replacement-lesson-a" class="modal">
    <div class="modal-content">
     <div class="modal-top-part">  
      <h4>Replacement Lesson </h4>
      <p>Course type and schedule </p>
        </div>
        
                <div class="inner-top-part">
                    <img src="{{asset('assets/img/black_course.png')}}" alt="">
                    <div class="top-left">
                        <h5>Matthew Budiman</h5>
                        <p>Writting Enrichment - Kellyville</p>
                    </div>
                </div>
                <div class="mid-part replaced-a">
                        
                          <div class="title-a">
                              <h5>lesson being replaced:</h5>
                          </div>
                              <div class="table-profile">		

                                  <table>
                                         <tr>
                                             <td>Teacher</td>
                                             <td>Kellyville</td>
                                         </tr>		
                                      <tr>
                                          <td>Enrolment Type</td>
                                          <td>Full Enrolment</td>
                                      </tr>
                                      <tr>
                                          <td>Course Type</td>
                                          <td>Term 2, Lesson 1</td>
                                      </tr>
                                      <tr>
                                          <td>Class</td>
                                          <td>Monday, February 12th, 2018
                                            02.00 PM - 03.00 PM 
                                            (ML-2-WED-11-1)</td>
                                      </tr>
                                  </table>
                              </div>
                </div>
                <div class="exchange-icon btn"><img src="{{asset('assets/img/switch-icon.png')}}" alt=""></div>
                <div class="mid-part replacment-b z-depth-1">
                        
                          <div class="title-a">
                              <h5>Replacement lesson:</h5>
                          </div>
                              <div class="table-profile">		

                                  <table>
                                         <tr>
                                             <td>Teacher</td>
                                             <td>Kellyville</td>
                                         </tr>		
                                      <tr>
                                          <td>Enrolment Type</td>
                                          <td>Full Enrolment</td>
                                      </tr>
                                      <tr>
                                          <td>Course Type</td>
                                          <td>Term 2, Lesson 1</td>
                                      </tr>
                                      <tr>
                                          <td>Class</td>
                                          <td>Monday, February 12th, 2018
                                            02.00 PM - 03.00 PM 
                                            (ML-2-WED-11-1)</td>
                                      </tr>
                                  </table>
                              </div>
                </div>
                <br>
                <div class="bottom-buttons center">
                <a href="" class="btn-large">cancel rechedule</a>
                    
                </div>
    </div>
  </div>
<!--Schedule Model End-->

  <!-- Modal Structure -->
  <div id="class-change-1" class="modal">
    <div class="modal-content">
     <div class="modal-top-part">  
      <h4>Class Change</h4>
      <p>Course type and schedule</p>
        </div>
        <div class="row">
            <div class="col s12 l6">
                
                <div class="inner-top-part">

                    <div class="top-left">
                      <h4>Reason</h4>
                    </div>
                </div>
                <div class="mid-part">
                   
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>Action</option>
                                <option value="1">Enroll as Trial Student in Course</option>
                                <option value="2">Enroll as Student in Course</option>
                                <option value="3">Reserve Student in Course </option>
                              </select>
                    <label>Personal preference change</label>
                  </div>
                    <a href="" class="btn-large">Remarks</a>
                </div>
                
                <div class="mid-bottom-part">
                    <h4>change from</h4>
                    <div class="point-a">                        
                    <div class="icon-sm-co"></div>
                      <ul>
                          <li><h6>Writing Enrichment</h6></li>
                          <li>Kellyville</li>
                      </ul>
                    </div>
                    <div class="point-a">                        
                    <div class="icon-sm-ca"></div>
                      <ul>
                          <li><h6>Saturday 02.00 PM - 03.00 PM</h6></li>
                          <li>ML - SAT 2 - 4</li>
                      </ul>
                    </div>
                </div>
                
                <div class="bottom-part">
                    <h4>When will the change take effect?</h4>
                    
                <div class="mid-part">
                  <div class="input-field">
                    <input type="text" class="datepicker">
                    <label>Starting Date</label>
                  </div>
                    <a href="" class="btn-large">Add End Date</a>
                </div>
                <span>Last lesson of current class:</span> <span class="gray">T1-L1 - Wed 11 Feb 18</span>
                </div>
            </div>
            <div class="col s12 l6">
                
                <div class="choose-class  z-depth-1">
                    
      <div class="inner-bottom-left">
          <h4>Enrol Into Course </h4>
      <p>Classes from : February 01, 2018</p>
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
                
                    <div class="bottom-buttons right">
                        
                    <a href="" class="btn-large">BACK</a>
                    <a href="" class="btn-large">NEXT</a>
                    </div>
            </div>
        </div>
                
    </div>
  </div>
<!--Schedule Model End-->


  <!-- Modal Structure -->
  <div id="replacement-lesson-b" class="modal">
    <div class="modal-content">
     <div class="modal-top-part">  
      <h4>Replacement Lesson</h4>
      <p>Course type and schedule</p>
        </div>
        
               
                <div class="mid-bottom-part">
                    <h4>change from</h4>
                    <div class="point-a">                        
                    <div class="icon-sm-co"></div>
                      <ul>
                          <li><h6>Writing Enrichment</h6></li>
                          <li>Kellyville</li>
                      </ul>
                    </div>
                    <div class="point-a">                        
                    <div class="icon-sm-ca"></div>
                      <ul>
                          <li><h6>Saturday 02.00 PM - 03.00 PM</h6></li>
                          <li>ML - SAT 2 - 4</li>
                      </ul>
                    </div>
                </div>
                
                <div class="inner-top-part">

                <div class="input-field">
                     <h4>Replacement with</h4>
                      <input id="Replacement2" class="validate" type="text" placeholder="sAslloLfeasrsthoisncXou(TrsXeW(8X5.)">
                      <label for="Replacement2" class=""></label>
                    </div>
                    
                    <br>
                    
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
                    
                    
                <br>
                
                    <a href="" class="btn-large">cancel</a>
                    <a href="" class="btn-large">request aproval</a>
    </div>
  </div>
<!--Schedule Model End-->
        </div>

  <!-- Modal Structure -->
  <div id="replacement-choose-class" class="modal">
    <div class="modal-content">
     <div class="modal-top-part">  
          <h4>Replacement Lesson</h4>
          <p>Course type and schedule</p>      
     </div>
        
                <div class="inner-top-part">

                    <div class="top-left">
                      <h4>choose class</h4>
                    </div>
                </div>
                <div class="mid-part">                   
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>options</option>
                                <option value="1">Enroll as Trial Student in Course</option>
                                <option value="2">Enroll as Student in Course</option>
                                <option value="3">Reserve Student in Course </option>
                              </select>
                  </div>
                     <br>
                     <h4>Choose lesson to replace</h4>
                    <a href="" class="btn-large outline">LESSON Available</a>
                </div>
                <br>
                <div class="bottom-buttons center">
                    <a href="" class="btn-large">cancel</a>
                    <a href="" class="btn-large">request aproval</a>
                    
                </div>
    </div>
  </div>
<!--Schedule Model End-->
 
  <!-- Modal Structure -->
  <div id="replacement-choose-class-2" class="modal">
    <div class="modal-content">
     <div class="modal-top-part">  
          <h4>Replacement Lesson</h4>
          <p>Course type and schedule</p>      
     </div>
                <div class="inner-top-part">

                    <div class="top-left">
                      <h4>choose class</h4>
                    </div>
                    
                <div class="mid-part">                   
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>options</option>
                                <option value="1">Enroll as Trial Student in Course</option>
                                <option value="2">Enroll as Student in Course</option>
                                <option value="3">Reserve Student in Course </option>
                              </select>
                  </div>
                     <br>
                     <h4>Choose lesson to replace</h4>
                    
                <div class="input-field">
                      <input id="Replacement-3" class="validate" type="text" placeholder="T1W3 (7th Mar 18)">
                      <label for="Replacement-3" class=""></label>
                    </div>
                </div>
                <br>
                <div class="bottom-buttons">
                    <a href="" class="btn-large">cancel</a>
                    <a href="" class="btn-large">request aproval</a>
                    
                </div>
                </div>
                
    </div>
  </div>
<!--Schedule Model End-->




  <!-- Modal Structure -->
  <div id="withdraw-student" class="modal">
    <div class="modal-content">
     <div class="modal-top-part">  
          <h4>Withdraw Student</h4>
          <p>Course type and schedule</p>      
     </div>
               
          
                <div class="mid-bottom-part">
                    <h4>Course information</h4>
                    <div class="point-a">                        
                    <div class="icon-sm-co"></div>
                      <ul>
                          <li><h6>Writing Enrichment</h6></li>
                          <li>Kellyville</li>
                      </ul>
                    </div>
                    <div class="point-a">                        
                    <div class="icon-sm-ca"></div>
                      <ul>
                          <li><h6>Saturday 02.00 PM - 03.00 PM</h6></li>
                          <li>ML - SAT 2 - 4</li>
                      </ul>
                    </div>
                </div>  
                
                
                <div class="inner-top-part">

                    <div class="top-left">
                      <h4>Reason</h4>
                    </div>
                </div>
                <div class="mid-part withdraw-s">
                   
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>Action</option>
                                <option value="1">Enroll as Trial Student in Course</option>
                                <option value="2">Enroll as Student in Course</option>
                                <option value="3">Reserve Student in Course </option>
                              </select>
                    <label>Personal preference change</label>
                  </div>
                </div>
                   
                      
                            
                <div class="inner-top-part withdrow-b">

                    
                <div class="mid-part">  
                      <h4>Date advised</h4>                 
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>options</option>
                                <option value="1">Enroll as Trial Student in Course</option>
                                <option value="2">Enroll as Student in Course</option>
                                <option value="3">Reserve Student in Course </option>
                              </select>
                  </div>
                     <br>
                     <h4>Choose lesson to replace</h4>
                    
                <div class="input-field s12 m6">
                      <input id="Replacement-3" class="validate" type="text" placeholder="T1W3 (7th Mar 18)">
                      <label for="Replacement-3" class=""></label>
                    </div>
                     <br>
                     <h4 class="color-gray">Date advised</h4>
                    <table>
                        <tr>
                            <td>
                  <div class="input-field">
                    <input type="text" class="datepicker" value="January 02, 2018">
                    <label></label>
                  </div></td>
                            <td>TO</td>
                            <td>
                  <div class="input-field">
                    <input type="text" class="datepicker" value="January 02, 2018">
                    <label></label>
                  </div></td>
                        </tr>
                    </table>
                </div>
                <div class="re-mark">
                    
          <p>
      <label>
        <input type="checkbox" class="filled-in" />
        <span>Refund Course Fees</span>
      </label>
    </p>
               <a href="" class="btn-large">Remarks</a>
                </div>
                <br>
                <div class="bottom-buttons">
                    <a href="" class="btn-large">cancel</a>
                    <a href="" class="btn-large">request aproval</a>
                    
                </div>
                </div>
                
    </div>
  </div>
<!--Schedule Model End-->



  <!-- Modal Structure -->
  <div id="suspend-student" class="modal">
    <div class="modal-content">
     <div class="modal-top-part">  
          <h4>Suspend Student</h4>
          <p>Course type and schedule</p>      
     </div>
               
          
                <div class="mid-bottom-part">
                    <h4>Course information</h4>
                    <div class="point-a">                        
                    <div class="icon-sm-co"></div>
                      <ul>
                          <li><h6>Writing Enrichment</h6></li>
                          <li>Kellyville</li>
                      </ul>
                    </div>
                    <div class="point-a">                        
                    <div class="icon-sm-ca"></div>
                      <ul>
                          <li><h6>Saturday 02.00 PM - 03.00 PM</h6></li>
                          <li>ML - SAT 2 - 4</li>
                      </ul>
                    </div>
                </div>  
                
                
                <div class="inner-top-part">

                    <div class="top-left">
                      <h4>Reason</h4>
                    </div>
                </div>
                <div class="mid-part withdraw-s">
                   
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>Action</option>
                                <option value="1">Enroll as Trial Student in Course</option>
                                <option value="2">Enroll as Student in Course</option>
                                <option value="3">Reserve Student in Course </option>
                              </select>
                    <label>Personal preference change</label>
                  </div>
                  
               <a href="" class="btn-large">Remarks</a>
                </div>
                   
                      
                            
                <div class="inner-top-part withdrow-b">

                    
                <div class="mid-part">  
                      <h4>Date advised</h4>                 
                      <div class="input-field">
                              <select>
                                <option value="" disabled selected>options</option>
                                <option value="1">Enroll as Trial Student in Course</option>
                                <option value="2">Enroll as Student in Course</option>
                                <option value="3">Reserve Student in Course </option>
                              </select>
                  </div>
                     <br>
                     <h4>Choose lesson to replace</h4>
                    
                <div class="input-field s12 m6">
                      <input id="Replacement-3" class="validate" type="text" placeholder="T1W3 (7th Mar 18)">
                      <label for="Replacement-3" class=""></label>
                    </div>
                     <br>
                     <h4 class="color-gray">Date advised</h4>
                    <table>
                        <tr>
                            <td>
                  <div class="input-field">
                    <input type="text" class="datepicker" value="January 02, 2018">
                    <label></label>
                  </div></td>
                            <td>TO</td>
                            <td>
                  <div class="input-field">
                    <input type="text" class="datepicker" value="January 02, 2018">
                    <label></label>
                  </div></td>
                        </tr>
                    </table>
                </div>
                <div class="student-return-info mid-part">
                   
                     <h4 class="color-gray">When does The student return</h4>
                  <div class="input-field">
                    <input type="text" class="datepicker" value="January 02, 2018">
                    <label></label>
                  </div>
                </div>
                <br>
                <div class="bottom-buttons">
                    <a href="" class="btn-large">Back</a>
                    <a href="" class="btn-large">Next</a>
                    
                </div>
                </div>
                
    </div>
  </div>
<!--Schedule Model End-->




  <!-- Modal Structure -->
  <div id="class-full" class="modal">
    <div class="modal-content">
     <div class="modal-top-part">  
          <h4>Class is Full</h4>
          <p>Course type and schedule</p>      
     </div>
               <div class="information-card">
                   
                <div class="mid-part replaced-a left-align">
                        <div class="close-icon"><i class="material-icons dp48">close</i></div>
                          <div class="title-a">
                              <span class="icon-info"><i class="material-icons dp48">info</i></span> <h5> Information</h5>
                          </div>
                              <div class="table-profile">		
		
                                  <table>
                                         <tr>
                                             <td>Course</td>
                                             <td>Writing Enrichment - Primary 1 (WE-P1)</td>
                                         </tr>		
                                      <tr>
                                          <td>Course</td>
                                          <td>Wednesday 11.00 AM - 01.00 PM
			(ML-2-WED-11-1)</td>
                                      </tr>
                                  </table>
                              </div>
                </div>
               </div>
          
               <p class="center p-text">The class selected has reached it's maximum advised capacity. Are you want to add this student intp this class anyway?</p> 
                
                
                  
                <div class="bottom-buttons">
                    <a href="" class="btn-large">Cancel</a>
                    <a href="" class="btn-large">Add</a>
                    
                </div>
                
    </div>
  </div>
<!--Schedule Model End-->


  <!-- Modal Structure -->
  <div id="class-change-bill" class="modal">
    <div class="modal-content">
     <div class="modal-top-part"> 
         <div class="arrow-back"><a href=""><i class="material-icons dp48">arrow_back</i></a></div>
         <div class="top-left">
          <h4>Class Change</h4>
          <p>Course type and schedule</p>              
         </div>      
     </div>
         <div class="row">
             <div class="col s12 m6">
                 
               <div class="information-card">
                   
                <div class="mid-part replaced-a left-align">
                        <div class="close-icon"><i class="material-icons dp48">close</i></div>
                          <div class="title-a">
                              <span class="icon-info"><i class="material-icons dp48">info</i></span> <h5> Information</h5>
                          </div>
                          <p class="p-text">
                              Class was successful changed, tap button Class Change to edit class.
                          </p>
                          <a href="" class="btn">Class Change</a>
                </div>
               </div>
               <div class="row">
                   <div class="col s12 m6">
                       <ul class="wallet-heading">
                           <li><img src="{{asset('assets/img/invoice-blue.png')}}" alt=""></li>
                           <li>Billing Account</li>
                       </ul>
                       <div class="table-profile">
                           <table>
                               <tr>
                                   <td>Billing Account</td>
                                   <td>Lisa Aiello</td>
                               </tr>
                           </table>
                       </div>
                       	
                   </div>
                   <div class="col s12 m6">
                       <div class="outline-box">
                           <div class="left-box-a">
                               <img src="{{asset('assets/img/wallet-gray.png')}}" alt="">
                           </div>
                           <div class="right-box-a">
                               
                           <h3 class="color-blue">-$60</h3>
                           <small>Total Balance</small>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="row right-part-btn">
                   <div class="col s12">
                       <a href="" class="btn outline">Other Enrol for Student or Sibling</a>
                       <a href="" class="btn">Send Payment / Advice</a>
                   </div>
               </div>
             </div>
             
             <div class="col s12 m6">
                 <div class="right-part-a z-depth-1">
                     
                       <ul class="wallet-heading">
                           <li><img src="{{asset('assets/img/ammount-blue.png')}}" alt=""></li>
                           <li>Amount to be Billed</li>
                       </ul>
                       
                       
                       <div class="table-profile">
                           <table>		
			  	

                               <tr>
                                   <td>Course Fees</td>
                                   <td>Term 1 </td>
                               </tr>
                               <tr>
                                   <td>Fee</td>
                                   <td>$50 per Lesson x 6 Lesson</td>
                               </tr>
                               <tr>
                                   <td>Discount Adjustment</td>
                                   <td><span class="gray">- $100 </span></td>
                               </tr>
                           </table>
                       </div>
                       
                       
                       <div class="outline-box">
                           <div class="left-box-a">
                               <img src="{{asset('assets/img/moneybag-gray.png')}}" alt="">
                           </div>
                           <div class="right-box-a">
                           <h3 class="color-blue">$260</h3>
                           <small>Subtotal</small>                               
                           </div>
                       </div>
                       <div class="outline-box color-blue">
                           <div class="left-box-a">
                               <img src="{{asset('assets/img/moneybag-white.png')}}" alt="">
                           </div>
                           <div class="right-box-a">
                           <h3 class="color-blue">$286</h3>
                           <small>Total (with GST)</small>
                           </div>
                       </div>
                 </div>
                 
                 <br>
                 
                <div class="bottom-buttons">
                    <a href="" class="btn-large outline">Pay Later</a>
                    <a href="" class="btn-large">Pay Now</a>
                    
                </div>
             </div>
         </div> 

    </div>
  </div>

@endsection
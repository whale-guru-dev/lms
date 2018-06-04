@extends('layouts.main')

@section('content')

<div class="secend-nav">
    <div class="row">
        <ul>
            <li><a href=""><span class="nav-icon"></span> Summary</a></li>
            <li><a href=""><span class="nav-icon"></span> Enrolment</a></li>
            <li><a href=""><span class="nav-icon"></span> Communication</a></li>
            <li><a href=""><span class="nav-icon"></span> Finance</a></li>
            <li><a href=""><span class="nav-icon"></span> Files</a></li>
        </ul>
    </div>
</div>   

<!-- Main wrapper -->

<div class="main-wrapper">  
<div class="row">
<!--Side Bar-->
     
      <div class="col s12 m4 l3 side-bar"> 
      
           <div class="course-side-bar">
               
  <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">more_vert</i> <div class="side-bar-icon-big"></div>
      <ul class="side-top-text">
          <li><h4>Course Type</h4></li>
          <li><p>4 Course Available - 3 Course Full <span class="short-line"></span></p></li>
      </ul>
       </div>
      <div class="collapsible-body">
      
      
          <ul class="collapsible inner-cat">
            <li>
              <div class="collapsible-header">
                      <h6>Course Available      <span class="short-line"></span></h6>
               </div>
              <div class="collapsible-body">
                <ul class="sub-cat">
                    <li><a href=""><span class="cion-small"></span> Course - 01</a></li>
                    <li><a href=""><span class="cion-small"></span> Course - 01</a></li>
                </ul>

              </div>
            </li>
          </ul>
      
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">more_vert</i> <div class="side-bar-icon-big"></div>
      <ul class="side-top-text">
          <li><h4>Teacher</h4></li>
          <li><p>4 Teacher Available <span class="short-line"></span></p></li>
      </ul>
       </div>
      <div class="collapsible-body">
   
          <ul class="collapsible inner-cat">
            <li>
              <div class="collapsible-header">
                      <h6>Course Available      <span class="short-line"></span></h6>
               </div>
              <div class="collapsible-body">
                <ul class="sub-cat">
                    <li><a href=""><span class="cion-small"></span> Course - 01</a></li>
                    <li><a href=""><span class="cion-small"></span> Course - 01</a></li>
                </ul>

              </div>
            </li>
          </ul>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">more_vert</i> <div class="side-bar-icon-big"></div>
      <ul class="side-top-text">
          <li><h4>Vacancies</h4></li>
          <li><p>100 Vacancies Available <span class="short-line"></span></p></li>
      </ul>
       </div>
      <div class="collapsible-body">
      
          <ul class="collapsible inner-cat">
            <li>
              <div class="collapsible-header">
                      <h6>Course Available      <span class="short-line"></span></h6>
               </div>
              <div class="collapsible-body">
                <ul class="sub-cat">
                    <li><a href=""><span class="cion-small"></span> Course - 01</a></li>
                    <li><a href=""><span class="cion-small"></span> Course - 01</a></li>
                </ul>

              </div>
            </li>
          </ul>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">more_vert</i> <div class="side-bar-icon-big"></div>
      <ul class="side-top-text">
          <li><h4>Classroom</h4></li>
          <li><p>8 Class Open <span class="short-line"></span></p></li>
      </ul>
       </div>
      <div class="collapsible-body">
 
          <ul class="collapsible inner-cat">
            <li>
              <div class="collapsible-header">
                      <h6>Course Available      <span class="short-line"></span></h6>
               </div>
              <div class="collapsible-body">
                <ul class="sub-cat">
                    <li><a href=""><span class="cion-small"></span> Course - 01</a></li>
                    <li><a href=""><span class="cion-small"></span> Course - 01</a></li>
                </ul>

              </div>
            </li>
          </ul>
      </div>
    </li>
  </ul>
           </div>   

      </div>

<!--Side Bar End-->


<!--Right Side -->        

      <div class="col s12 m8 l9 right-side-area">
          <div class="schedule-area">
              <div class="header">
                  <div class="col s12 m6">
                      <div class="header-text">
                          
                      <h5>TimeTable <span class="col-l-blue">&#8226; Castwood</span></h5>
                      <p>From 12 Feb to 19 Feb 2018</p>
                      </div>
                  </div>
                  <div class="col s12 m6">
                      <div class="print-btn">
                          <a class="waves-effect waves-light btn z-depth-4  modal-trigger" href="#schedule-a1"> Print</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  
<!--Right Side End-->
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
             <li><img src="img/modal_cal.png" alt=""> Wednesday, January 31, 2018</li>
             <li><img src="img/clock.png" alt=""> 10.00 - 12.00  AM</li>
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
                         <li><img src="img/student_samll.png" alt=""> <div class="right-text">5 <br>Reguler Students</div></li>
                         <li><img src="img/clock_white.png" alt=""> <div class="right-text">1 <br>Trial Students</div></li>
                         <li><img src="img/arrow_right_left.png" alt=""> <div class="right-text">1 <br>Replacement Students</div></li>
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
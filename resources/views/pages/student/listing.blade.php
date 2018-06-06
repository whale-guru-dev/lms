@extends('layouts.main')

@section('content')
<?php
use \Carbon\Carbon;
use App\Models\Center;
$centers = Center::all();
$status = ['InActive','Active'];
$status_class = ['status-inactive','status-active'];
?>
<div class="main-wrapper">  
  <div class="row">
  <!--Side Bar-->

    <div class="col s12 m4 l3 side-bar centre_list"> 

      <div class="filter-area">
        <img src="{{asset('assets/img/student-3.png')}}" alt="student">
        <div class="right-text">

          <h4>Students</h4>
          <p>The Write Connection</p>
        </div>

        <div class="search-box">
          <form action="">  
            <button>
              <img src="{{asset('assets/img/search_right.png')}}" alt="">
            </button>
            <div class="chips chips-autocomplete"></div>  
          </form>

          <p>
            <label>
              <input type="checkbox" class="filled-in" checked="checked" />
              <span>Centre</span>
            </label>
          </p>

          <p>
            <label>
              <input type="checkbox" class="filled-in" />
              <span>Course</span>
            </label>
          </p>

          <p>
            <label>
              <input type="checkbox" class="filled-in" />
              <span>Teacher</span>
            </label>
          </p>

          <p>
            <label>
              <input type="checkbox" class="filled-in" />
              <span>Enrolment Period</span>
            </label>
          </p>  
        </div>  

        <div class="bttom-filter-area">
          <p>
            <label>
              <input type="checkbox" class="filled-in" />
              <span>Status</span>
            </label>
          </p>

          <button data-target="modal-filters" class="modal-trigger modal-button">Advanced Filters <i class="material-icons dp48">sort</i></button>
          <button data-target="modal-other-center" class="modal-trigger modal-button">Search other centre <i class="material-icons dp48">sort</i></button>
          <button data-target="modal-new-student" class="modal-trigger modal-button">New Student <i class="material-icons dp48">sort</i></button>
        </div>
      </div>
    </div>

    <!--Side Bar End-->


    <!--Right Side -->        

    <div class="col s12 m8 l9 right-side-area">

    <!--   <div class="sub-header">
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
      </div> -->

      <div class="schedule-area center-part ">
        <div class="header">
          <div class="col s12 m10">
            <div class="header-text">

            <h5><span class="col-l-blue">{{$students->count()}}</span></h5>
            <p>Records found</p>
            </div>
          </div>

          <div class="col s12 m2">
            <div class="print-btn input-field">
              <button>New Students <i class="material-icons dp48">add</i></button>
            </div>
          </div>
        </div>
      </div>

      <div class="sec-area user-status">
        <div class="status-table">

          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Dob</th>
                <th>Centre</th>
                <th>Since</th>
                <th>ID No. <i class="material-icons dp48">arrow_upward</i></th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              @foreach($students as $std)
                <tr>
                  <td style="text-align: left;">
                    <a href="{{url('/Student/'.$std->id.'/Summary')}}">
                      <div class="avatar-box">
                        <img src="{{asset('assets/propic/mdefault.png')}}" alt="">
                      </div>
                    
                      {{$std->student_surname.' '.$std->student_given_name}}
                    </a>
                  </td>
                  <td>{{$std->student_dob}} <sub>{{Carbon::parse($std->student_dob)->age}} y/o</sub></td>
                  <td>{{$centers->where('id',$std->center_id)->first()->center_name}}</td>
                  <td>{{$std->student_enrolled_since}} <sub>2 yr 10 mo</sub></td>
                  <td>{{$std->student_id}}</td>
                  <td><div class="{{$status_class[$std->student_status]}}"></div> {{$status[$std->student_status]}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="pagination-area">
          <div class="pagin-box">
            <select class="browser-default">
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Rows    7</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>

            <div class="page-showing">22 - 29 of 100</div>
            <ul class="pagination">
              <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
              <li class="z-depth-4 waves-effect active "><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <!--Right Side End-->
  </div>
</div>   

  <!-- Modal Structure -->
<div id="modal-filters" class="modal">
  <div class="modal-content">
    <div class="modal-top-part">            
      <h4>Advanced Filters</h4>
      <p>Short Description...</p>
    </div>

    <div class="modal-bottom-part">
      <form action="">
        <div class="row">
          <div class="col s12 l6">

            <div class="input-field">
              <select>
                <optgroup label="team 1">
                  <option value="1">Brightside Ave</option>
                  <option value="2">Brightside Ave</option>
                </optgroup>

                <optgroup label="team 2">
                  <option value="3">Brightside Ave</option>
                  <option value="4">Brightside Ave</option>
                </optgroup>
              </select>
              <label>Centres</label>
            </div>

            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Show All</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Teacher</label>
            </div>

            <div class="row">

              <div class="input-field col s12 l6">
                <input type="text" class="datepicker">
                <label>Enrolment Date</label>
              </div> 

              <div class="input-field col s12 l6">
                <input type="text" class="datepicker">
              </div>
            </div>

            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Show All</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>COURSE</label>
            </div>

            <div class="input-field">
              <input id="parent_name" type="text" class="validate">
              <label for="parent_name">Parent Name</label>
            </div>

            <div class="input-field">
              <input id="telephone" type="tel" class="validate">
              <label for="telephone">Parent Mobile</label>
            </div>

            <div class="input-field">
              <input id="email" type="email" class="validate">
              <label for="email">Parent email</label>
            </div>

          </div>

          <div class="col s12 l6">
            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Show All</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Course type</label>
            </div>

            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Show All</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Status</label>
            </div>

            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Active</option>
                <option value="2">Option 2</option>
              </select>
              <label>Active</label>
            </div>

            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Show All</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>missing info</label>
            </div>

            <div class="row">

              <div class="input-field col s12 l6">
                <select>
                  <option value="" disabled selected>From</option>
                  <option value="1">Show All</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Age</label>
              </div>

              <div class="input-field col s12 l6">
                <select>
                  <option value="" disabled selected>To</option>
                  <option value="1">Show All</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
            </div>

            <div class="row">

              <div class="input-field col s12 l6">
                <select>
                  <option value="" disabled selected>From</option>
                  <option value="1">Show All</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>number of enrolments</label>
              </div>

              <div class="input-field col s12 l6">
                <select>
                  <option value="" disabled selected>To</option>
                  <option value="1">Show All</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
            </div> 

            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Show All</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Payment Status</label>
            </div>
          </div>
        </div>
        <!--   <div class="row">
        <button  data-target="" class="modal-trigger full-width">Search other centre</button>
        </div> -->

        <div class="row">                  
          <div class="col s12 m6">
          </div>

          <div class="col s12 m6">
            <div class="row">
              <div class="col s12 m6">
                <button class="modal-button">Clear</button>

              </div>

              <div class="col s12 m6">
                <button class="modal-button">Apply & Search <i class="material-icons dp48">arrow_forward</i></button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
  </div>
</div>

  <!-- Modal Structure -->
<div id="modal-other-center" class="modal">
  <div class="modal-content">
    <div class="modal-top-part">            
      <h4>Search Other Centre</h4>
      <p>Short Description...</p>
    </div>

    <div class="modal-bottom-part">
      <form action="">
        <div class="row">
          <div class="col s12">

            <div class="input-field">
              <input id="student_id" type="text" class="validate">
              <label for="student_id">Student ID</label>
            </div>

            <div class="input-field">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>

            <div class="input-field">
              <input id="Last_name" type="text" class="validate">
              <label for="Last_name">Last Name</label>
            </div>

            <div class="input-field">
              <input type="text" class="datepicker">
              <label>Date of birth</label>
            </div>

            <div class="input-field">
              <input type="text" class="validate">
              <label>Parent/guardian mobile</label>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col s12 m6">
            <button class="modal-button">Clear</button>
          </div>

          <div class="col s12 m6">
            <button class="modal-button">Look-up <i class="material-icons dp48">arrow_forward</i></button>
          </div>
        </div>

      </form>
    </div>
  </div>
  <div class="modal-footer">
  </div>
</div>

  <!-- Modal Structure -->
<div id="modal-new-student" class="modal">
  <div class="modal-content">
    <div class="modal-top-part">            
      <h4>New Student</h4>
      <p>mandatory details</p>
    </div>

    <div class="modal-bottom-part">
      <h5>Student Detaitls</h5>

      <form action="" method="POST">
        <div class="row">
          <div class="col s12 l5">

            <div class="input-field">
              <input id="KnownAs" type="text" class="validate" name="nickname">
              <label for="KnownAs">Known As</label>
            </div>

            <div class="input-field">
              <input id="first_name" type="text" class="validate" name="fName">
              <label for="first_name">First Name</label>
            </div>

            <div class="input-field">
              <input id="Last_name" type="text" class="validate" name="mName">
              <label for="Last_name">Middle Name</label>
            </div>

            <div class="input-field">
              <input id="Last_name" type="text" class="validate" name="lName">
              <label for="Last_name">Last Name</label>
            </div>

            <button class="waves-effect waves-light btn-small" type="submit">save</button>

          </div>

          <div class="col s12 l7">
            <div class="new-student-area-right">

              <div class="top-title center">
                <h4>billing account details</h4>
                <p>Who is the billing contact for this students</p>
              </div>

              <div class="row">
                <div class="col s12 m4">
                  <button class="modal-button">student</button>
                </div>

                <div class="col s12 m4">
                  <button class="modal-button">existing account/parent </button>
                </div>

                <div class="col s12 m4">
                  <button class="modal-button">New account/parent </button>
                </div>
              </div>

              <div class="input-field">
                <input id="first_name2" type="text" class="validate">
                <label for="first_name2">First Name</label>
              </div>

              <div class="input-field">
                <input id="Last_name2" type="text" class="validate">
                <label for="Last_name2">Last Name</label>
              </div>

              <div class="input-field">
                <input id="mobile_no" type="text" class="validate">
                <label for="mobile_no">Mobile</label>
              </div>

              <div class="input-field">
                <input id="email_add" type="email" class="validate">
                <label for="email_add">email address</label>
              </div>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>
  <div class="modal-footer">
  </div>
</div>

@endsection
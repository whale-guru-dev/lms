@extends('layouts.main')

@section('content')

<div class="secend-nav">
    <div class="row">
        <ul>
            <li><a href="{{url('/Student/'.$centername.'/'.$student->id.'/Summary')}}"><span class="nav-icon"></span> Summary</a></li>
            <li><a href="{{url('/Student/'.$centername.'/'.$student->id.'/Class')}}"><span class="nav-icon"></span> Class</a></li>
            <li><a href="{{url('/Student/'.$centername.'/'.$student->id.'/Enrollment')}}"><span class="nav-icon"></span> Enrollment</a></li>
            <li><a href=""><span class="nav-icon"></span> Communication</a></li>
            <li><a href="{{url('/Student/'.$centername.'/'.$student->id.'/Finance')}}"><span class="nav-icon"></span> Finance</a></li>
            <li><a href="{{url('/Student/'.$centername.'/'.$student->id.'/Log')}}"><span class="nav-icon"></span> Log</a></li>
            <li><a href="{{url('/Student/'.$centername.'/'.$student->id.'/Files')}}"><span class="nav-icon"></span> Files</a></li>
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

      <div class="data-date-a">
              
        <ul>
          <li>Date from</li>
          <li><img src="{{asset('assets/img/tab_icon_cal.png')}}" alt=""></li>
          <li>
            <div class="input-field">
              <input type="text" class="datepicker">
              <label>Start Date</label>
            </div>
          </li>
          <li>TO</li>
          <li><img src="{{asset('assets/img/tab_icon_cal.png')}}" alt=""></li>
          <li>
            <div class="input-field">
              <input type="text" class="datepicker">
              <label>End Date</label>
            </div>
          </li>
          <li>
            <div class="search-btn">
              <button><i class="material-icons">search</i></button>
            </div>
          </li>
        </ul>
      </div>
        
      <div class="sec-area data-table-a">
        <div class="status-table">
                  						    						 						
          <table>
            <thead>
              <tr>
                <th>ID LOG <i class="material-icons dp48">arrow_upward</i></th>
                <th>time and date</th>
                <th>USER</th>
                <th>Note</th>
                <th></th>
              </tr>
            </thead>

            <tbody>		    					     		    	
              <tr>
                <td>51020</td>
                <td>December 03, 2018</td>
                <td>Ailleo, Daniel</td>
                <td>Mathew Budiman Enrolled into Course; Writing Enrichment Level 1</td>
                <td><i class="material-icons dp48">chevron_right</i></td>
              </tr>    					     		    	
              <tr>
                <td>51020</td>
                <td>December 03, 2018</td>
                <td>Ailleo, Daniel</td>
                <td>Mathew Budiman Enrolled into Course; Writing Enrichment Level 1</td>
                <td><i class="material-icons dp48">chevron_right</i></td>
              </tr>    					     		    	
              <tr>
                <td>51020</td>
                <td>December 03, 2018</td>
                <td>Ailleo, Daniel</td>
                <td>Mathew Budiman Enrolled into Course; Writing Enrichment Level 1</td>
                <td><i class="material-icons dp48">chevron_right</i></td>
              </tr>    					     		    	
              <tr>
                <td>51020</td>
                <td>December 03, 2018</td>
                <td>Ailleo, Daniel</td>
                <td>Mathew Budiman Enrolled into Course; Writing Enrichment Level 1</td>
                <td><i class="material-icons dp48">chevron_right</i></td>
              </tr>    					     		    	
              <tr>
                <td>51020</td>
                <td>December 03, 2018</td>
                <td>Ailleo, Daniel</td>
                <td>Mathew Budiman Enrolled into Course; Writing Enrichment Level 1</td>
                <td><i class="material-icons dp48">chevron_right</i></td>
              </tr>
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
              <li class="disabled">
                <a href="#!">
                  <i class="material-icons">chevron_left</i>
                </a>
              </li>
              <li class="z-depth-4 waves-effect active ">
                <a href="#!">
                  <i class="material-icons">chevron_right</i>
                </a>
              </li>
            </ul>
          </div>
        </div>
    
      </div>
    </div>
  </div>
</div>
@endsection


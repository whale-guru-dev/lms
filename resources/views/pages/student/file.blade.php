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

      <div class="franchise-info-box contract">
        <a href="">
          <div class="single-info z-depth-1">
            <div class="left-icon"></div>
            <ul>
              <li><strong>Contract-01</strong></li>
              <li>January 01, 2018</li>
            </ul>
          </div>
        </a>

        <a href="">
          <div class="single-info z-depth-1">
            <div class="left-icon"></div>
            <ul>
              <li><strong>Contract-01</strong></li>
              <li>January 01, 2018</li>
            </ul>
          </div>
        </a>

        <a href="">
          <div class="single-info z-depth-1">
            <div class="left-icon"></div>
            <ul>
              <li><strong>Contract-01</strong></li>
              <li>January 01, 2018</li>
            </ul>
          </div>
        </a>
      </div>    

    </div>
  </div>
</div>
@endsection
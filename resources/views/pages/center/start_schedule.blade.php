@extends('pages.center')

@section('center_content')
<div class="col s12 m8 l9 right-side-area">

  <div class="schedule-area center-part">
    <div class="header">
      <div class="col s12 m10">
        <div class="header-text">

          <h5><img src="{{asset('assets/img/building.png')}}" alt=""> <span class="col-l-blue">Centre 01</span></h5>
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

  <div class="sec-area trading-time">  
    <div class="col s12">
      <div class="title-a">
        <h5>Regular Trading Hours</h5>
      </div>
    </div>

    <div class="col s12 l10">  
      <div class="franchise-info-box">
        <a href="">
          <div class="single-info z-depth-1">
            <div class="left-icon"></div>
            <ul>
              <li>
                <strong>Use Default Schedule</strong>
              </li>
            </ul>
          </div>
        </a>

        <a href=""> 
          <div class="single-info z-depth-1">
            <div class="left-icon"></div>
            <ul>
              <li>
                <strong>Copy From Another Form</strong>
              </li>
            </ul>
          </div>
        </a>

        <a href="Schedule/Edit"> 
          <div class="single-info z-depth-1">
            <div class="left-icon"></div>
            <ul>
              <li><strong>Start Blank</strong></li>
            </ul>
          </div>
        </a>
      </div>                
    </div>
  </div>
</div>

@endsection

@section('center_modal')



@endsection
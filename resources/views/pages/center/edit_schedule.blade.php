@extends('pages.center')

@section('center_content')

<?php
	$day = ['Monday','Tuesday','wednesday','thursday','friday','saturday','Sunday'];
?>
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

    	  <div class="schedule-area center-part ">

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
          <div class="sec-area trading-hours">
            <form action="" method="POST" id="schedule_form">
              @csrf
              <div class="title-box">
                  <h4>Regular Trading Hours</h4>
              </div>
              <div class="trading-time-area">
                  <div class="open-close">
                      
                  </div>
                  <div class="trading-time">
                    <?php $i=0;?>
                    @if(count($schedule)>0)
                  	@foreach($schedule as $sch)
                    <input type="hidden" name="dow[]" value="<?php echo $i;?>">
                      <div class="single-day">
                          <h5>{{$day[$sch->date_of_week_id-1]}}</h5>
                          <div class="time-div">  <input type="text" name="from_tm[{{$i}}]"  class="timepicker" value="{{Carbon\Carbon::parse($sch->open_time)->format('g:i A')}}"></div>
                          <span>to</span>
                          <div class="time-div">  <input type="text" name="to_tm[{{$i}}]" class="timepicker" value="{{Carbon\Carbon::parse($sch->closed_time)->format('g:i A')}}"></div>
                          
                          <ul>
                              <li>
                              <label>
                                <input type="checkbox" name="closed[{{$i}}]"  class="filled-in" <?php echo $sch->day_closed == 'on'?  'checked': ''?> />
                                <span> day closed</span>
                              </label>
                             </li>
                              <li>
                              <label>
                                <input type="checkbox" name="more[{{$i++}}]" class="filled-in" <?php echo $sch->more_hours == 'on'?  'checked': ''?>  />
                                <span> more hours</span>
                              </label>
                             </li>
                          </ul>
                      </div>
                    @endforeach
                    @else
                    @for($ii=0;$ii<7;$ii++)
                    <input type="hidden" name="dow[]" value="<?php echo $ii;?>">
                      <div class="single-day">
                          <h5>{{$day[$ii]}}</h5>
                          <div class="time-div">  <input type="text" name="from_tm[{{$ii}}]"  class="timepicker" value=""></div>
                          <span>to</span>
                          <div class="time-div">  <input type="text" name="to_tm[{{$ii}}]" class="timepicker" value=""></div>
                          
                          <ul>
                              <li>
                              <label>
                                <input type="checkbox" name="closed[{{$ii}}]"  class="filled-in"  checked="checked" />
                                <span> day closed</span>
                              </label>
                             </li>
                              <li>
                              <label>
                                <input type="checkbox" name="more[{{$ii}}]" class="filled-in"  checked="checked"/>
                                <span> more hours</span>
                              </label>
                             </li>
                          </ul>
                      </div>
                    @endfor
                    @endif
                  </div>
              </div>
              <a class="waves-effect waves-light btn-large z-depth-4" href="#" onclick="event.preventDefault();document.getElementById('schedule_form').submit();">Save Schedule</a>
              
              <h5>Regular Trading Hours</h5>
              <a class="waves-effect waves-light btn-large z-depth-4" href="">manage exceptions</a>
            </form>
          </div>

</div>

@endsection

@section('center_modal')



@endsection
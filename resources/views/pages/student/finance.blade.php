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

      <div class="row">
        <div class="col m3"></div>
        <div class="col m6">
                
        <div class="billing-account-area">
            <h3 class="center">billing account</h3>
            
            <div class="billing-details z-depth-1">
              <div class="billing-nav">
                <ul>
                    <li><a href=""><span class="nav-list"><img src="{{asset('assets/img/active-gray.png')}}" alt="">
                    <p>1. open billing</p>
                    </span></a></li>
                    <li><a href=""><span class="nav-list"><img src="{{asset('assets/img/overdue-blue.png')}}" alt="">
                    <p>2. overdue billing</p>
                    </span></a></li>
                    <li><a href=""><span class="nav-list"><img src="{{asset('assets/img/complete-gray.png')}}" alt="">
                    <p>3. Complete billing</p>
                    </span></a></li>
                </ul>
              </div>
                    
              <div class="row">
                <div class="col s12 m6">
                      
                  <div class="account-info-ad">
                  
                    <div class="title-a">
                      <h5><img src="{{asset('assets/img/general-blue.png')}}" alt=""> Account information</h5>
                    </div>
                    <div class="table-profile">		
                      <table>
                        <tr>
                          <td>Account ID</td>
                          <td>100813</td>
                        </tr>		
                        <tr>
                          <td>Account Name</td>
                          <td>Lisa Zarb</td>
                        </tr>
                        <tr>
                          <td>Number</td>
                          <td>+6147000888</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>lisa@zarb.com</td>
                        </tr>
                        <tr>
                          <td>Classification</td>
                          <td>Parent</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="col s12 m6">
                      
                  <div class="account-info-ad">
                  		
                    <div class="contact-info">
                      <div class="contact-list">
                                       
                        <div class="title-a">
                          <h5><img src="{{asset('assets/img/student-blue-sm.png')}}" alt=""> students</h5>
                        </div>

                        <div class="contact-box">
                          <div class="profile-pic">
                            <img src="{{asset('assets/img/avatar2.png')}}" alt="">
                          </div>

                          <div class="prfile-details">
                            <ul>
                              <li>206554</li>
                              <li>Daniel Aiello</li>
                            </ul>
                          </div>
                        </div>

                        <div class="contact-box">
                          <div class="profile-pic">
                            <img src="{{asset('assets/img/avatar2.png')}}" alt="">
                          </div>

                          <div class="prfile-details">
                            <ul>
                              <li>206554</li>
                              <li>Daniel Aiello</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                            
              <div class="bottom-btn center">
                <a href="" class="btn-large">go to account</a>
              </div>
              <br>
            </div>
                    
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
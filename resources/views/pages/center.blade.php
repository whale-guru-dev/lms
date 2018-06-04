@extends('layouts.main')

@section('content')
<?php
  $centers = App\Models\Center::all();

?>
<div class="main-wrapper">  
  <div class="row">
    <!--Side Bar-->

    <div class="col s12 m4 l3 side-bar centre_list"> 

      <div class="filter-area">
        <img src="{{asset('assets/img/sidebar_icon_centre.png')}}" alt="">
        <div class="right-text">

          <h4>Centre List</h4>
          <p>The Write Connection</p>
        </div>

        <div class="search-box">
          <form action="">                
            <input class="filter-put" type="text" placeholder="Quick Search">
            <input type="submit">
          </form>
        </div>  
      </div>

      <div class="course-side-bar">

        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">more_vert</i> <div class="side-bar-icon-big"></div>
              <ul class="side-top-text">
                <li><a href="{{URL::to('Center/MasterFrances/1')}}"><h4>Master Franchise 01</h4></a></li>
                <li><p>2 Licence Holder - 3 Centre <span class="short-line"></span></p></li>
              </ul>
            </div>
            <div class="collapsible-body">

              <ul class="collapsible inner-cat">
                <li>
                  <div class="collapsible-header">
                    <h6><a href="{{URL::to('Center/MasterFrances/1/LicenseHolder/1')}}">Licence Holder 01</a>      <span class="short-line"></span></h6>
                  </div>
                  <div class="collapsible-body">
                    <ul class="sub-cat">
                      @foreach($centers as $center) 
                      <li><a href="{{URL::to('Center/' . $center->id)}}"><span class="cion-small"></span>{{$center->center_name}}</a></li>
                      @endforeach
                    </ul>

                  </div>
                </li>
              </ul>

<!--               <ul class="collapsible inner-cat">
                <li>
                  <div class="collapsible-header">
                    <h6>Licence Holder 01      <span class="short-line"></span></h6>
                  </div>

                  <div class="collapsible-body">
                    <ul class="sub-cat">
                      <li><a href=""><span class="cion-small"></span> Centre - 01</a></li>
                      <li><a href=""><span class="cion-small"></span> Centre - 02</a></li>
                    </ul>

                  </div>
                </li>
              </ul> -->
            </div>
          </li>

          <!-- <li>
            <div class="collapsible-header"><i class="material-icons">more_vert</i> <div class="side-bar-icon-big"></div>
              <ul class="side-top-text">
                <li><h4>Master Franchise 02</h4></li>
                <li><p>1 Licence Holder - 2 Centre <span class="short-line"></span></p></li>
              </ul>
            </div>

            <div class="collapsible-body">

              <ul class="collapsible inner-cat">
                <li>
                  <div class="collapsible-header">
                    <h6>Licence Holder 01      <span class="short-line"></span></h6>
                  </div>

                  <div class="collapsible-body">
                    <ul class="sub-cat">
                      <li><a href=""><span class="cion-small"></span> Centre - 01</a></li>
                      <li><a href=""><span class="cion-small"></span> Centre - 02</a></li>
                    </ul>

                  </div>
                </li>
              </ul>

              <ul class="collapsible inner-cat">
                <li>
                  <div class="collapsible-header">
                    <h6>Licence Holder 01      <span class="short-line"></span></h6>
                  </div>

                  <div class="collapsible-body">
                    <ul class="sub-cat">
                      <li><a href=""><span class="cion-small"></span> Centre - 01</a></li>
                      <li><a href=""><span class="cion-small"></span> Centre - 02</a></li>
                    </ul>

                  </div>
                </li>
              </ul>
            </div>
          </li>

          <li>
            <div class="collapsible-header"><i class="material-icons">more_vert</i> <div class="side-bar-icon-big"></div>
              <ul class="side-top-text">
                <li><h4>Master Franchise 03</h4></li>
                <li><p>1 Licence Holder - 2 Centre <span class="short-line"></span></p></li>
              </ul>
            </div>

            <div class="collapsible-body">

              <ul class="collapsible inner-cat">
                <li>
                  <div class="collapsible-header">
                    <h6>Licence Holder 01      <span class="short-line"></span></h6>
                  </div>

                  <div class="collapsible-body">
                    <ul class="sub-cat">
                      <li><a href=""><span class="cion-small"></span> Centre - 01</a></li>
                      <li><a href=""><span class="cion-small"></span> Centre - 02</a></li>
                    </ul>

                  </div>
                </li>
              </ul>

              <ul class="collapsible inner-cat">
                <li>
                  <div class="collapsible-header">
                    <h6>Licence Holder 01      <span class="short-line"></span></h6>
                  </div>

                  <div class="collapsible-body">
                    <ul class="sub-cat">
                      <li><a href=""><span class="cion-small"></span> Centre - 01</a></li>
                      <li><a href=""><span class="cion-small"></span> Centre - 02</a></li>
                    </ul>

                  </div>
                </li>
              </ul>
            </div>
          </li>

          <li>
            <div class="collapsible-header"><i class="material-icons">more_vert</i> <div class="side-bar-icon-big"></div>
              <ul class="side-top-text">
                <li><h4>Master Franchise 04</h4></li>
                <li><p>1 Licence Holder - 2 Centre <span class="short-line"></span></p></li>
              </ul>
            </div>

            <div class="collapsible-body">

              <ul class="collapsible inner-cat">
                <li>
                  <div class="collapsible-header">
                    <h6>Licence Holder 01      <span class="short-line"></span></h6>
                  </div>

                  <div class="collapsible-body">
                    <ul class="sub-cat">
                      <li><a href=""><span class="cion-small"></span> Centre - 01</a></li>
                      <li><a href=""><span class="cion-small"></span> Centre - 02</a></li>
                    </ul>

                  </div>
                </li>
              </ul>

              <ul class="collapsible inner-cat">
                <li>
                  <div class="collapsible-header">
                    <h6>Licence Holder 01      <span class="short-line"></span></h6>
                  </div>

                  <div class="collapsible-body">
                    <ul class="sub-cat">
                      <li><a href=""><span class="cion-small"></span> Centre - 01</a></li>
                      <li><a href=""><span class="cion-small"></span> Centre - 02</a></li>
                    </ul>

                  </div>
                </li>
              </ul>
            </div>
          </li> -->
        </ul>
      </div>   

    </div>

    <!--Side Bar End-->

    <!--Right Side -->        
    @yield('center_content')


  <!--Right Side End-->
  </div>
</div>
@yield('center_modal')

@endsection

@section('add_js')
@yield('add_js')
@endsection
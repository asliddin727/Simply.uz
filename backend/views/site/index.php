<?php
$this->title = 'Dashboard';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="container-fluid">
    

   

<div class="row">
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box">
<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
<div class="info-box-content">
<span class="info-box-text">CPU Traffic</span>
<span class="info-box-number">
10
<small>%</small>
</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
<div class="info-box-content">
<span class="info-box-text">Likes</span>
<span class="info-box-number">41,410</span>
</div>

</div>

</div>


<div class="clearfix hidden-md-up"></div>
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
<div class="info-box-content">
<span class="info-box-text">Sales</span>
<span class="info-box-number">760</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
<div class="info-box-content">
<span class="info-box-text">New Members</span>
<span class="info-box-number">2,000</span>
</div>

</div>

</div>

</div>


    




    <div class="card bg-gradient-success">
        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">
        <i class="far fa-calendar-alt"></i>
        Calendar
        </h3>

        <div class="card-tools">

        <div class="btn-group">
        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
        <i class="fas fa-bars"></i>
        </button>
        <div class="dropdown-menu" role="menu">
        <a href="#" class="dropdown-item">Add new event</a>
        <a href="#" class="dropdown-item">Clear events</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">View calendar</a>
        </div>
        </div>
        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
        <i class="fas fa-times"></i>
        </button>
        </div>

        </div>

        <div class="card-body pt-0">

        <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">November 2022</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="10/30/2022" class="day old weekend">30</td><td data-action="selectDay" data-day="10/31/2022" class="day old">31</td><td data-action="selectDay" data-day="11/01/2022" class="day">1</td><td data-action="selectDay" data-day="11/02/2022" class="day">2</td><td data-action="selectDay" data-day="11/03/2022" class="day">3</td><td data-action="selectDay" data-day="11/04/2022" class="day">4</td><td data-action="selectDay" data-day="11/05/2022" class="day weekend">5</td></tr><tr><td data-action="selectDay" data-day="11/06/2022" class="day weekend">6</td><td data-action="selectDay" data-day="11/07/2022" class="day">7</td><td data-action="selectDay" data-day="11/08/2022" class="day">8</td><td data-action="selectDay" data-day="11/09/2022" class="day">9</td><td data-action="selectDay" data-day="11/10/2022" class="day">10</td><td data-action="selectDay" data-day="11/11/2022" class="day">11</td><td data-action="selectDay" data-day="11/12/2022" class="day weekend">12</td></tr><tr><td data-action="selectDay" data-day="11/13/2022" class="day weekend">13</td><td data-action="selectDay" data-day="11/14/2022" class="day active today">14</td><td data-action="selectDay" data-day="11/15/2022" class="day">15</td><td data-action="selectDay" data-day="11/16/2022" class="day">16</td><td data-action="selectDay" data-day="11/17/2022" class="day">17</td><td data-action="selectDay" data-day="11/18/2022" class="day">18</td><td data-action="selectDay" data-day="11/19/2022" class="day weekend">19</td></tr><tr><td data-action="selectDay" data-day="11/20/2022" class="day weekend">20</td><td data-action="selectDay" data-day="11/21/2022" class="day">21</td><td data-action="selectDay" data-day="11/22/2022" class="day">22</td><td data-action="selectDay" data-day="11/23/2022" class="day">23</td><td data-action="selectDay" data-day="11/24/2022" class="day">24</td><td data-action="selectDay" data-day="11/25/2022" class="day">25</td><td data-action="selectDay" data-day="11/26/2022" class="day weekend">26</td></tr><tr><td data-action="selectDay" data-day="11/27/2022" class="day weekend">27</td><td data-action="selectDay" data-day="11/28/2022" class="day">28</td><td data-action="selectDay" data-day="11/29/2022" class="day">29</td><td data-action="selectDay" data-day="11/30/2022" class="day">30</td><td data-action="selectDay" data-day="12/01/2022" class="day new">1</td><td data-action="selectDay" data-day="12/02/2022" class="day new">2</td><td data-action="selectDay" data-day="12/03/2022" class="day new weekend">3</td></tr><tr><td data-action="selectDay" data-day="12/04/2022" class="day new weekend">4</td><td data-action="selectDay" data-day="12/05/2022" class="day new">5</td><td data-action="selectDay" data-day="12/06/2022" class="day new">6</td><td data-action="selectDay" data-day="12/07/2022" class="day new">7</td><td data-action="selectDay" data-day="12/08/2022" class="day new">8</td><td data-action="selectDay" data-day="12/09/2022" class="day new">9</td><td data-action="selectDay" data-day="12/10/2022" class="day new weekend">10</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2022</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month active">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year active">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
        </div>

    </div>
    
</div>
@extends('dashboard.layouts.app')

@section('content')
@if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif

<div class="content-i">
  <div class="content-box">
    <div class="element-wrapper compact pt-4">
      <div class="element-actions">
        <a class="btn btn-primary btn-sm" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a><a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>Make Payment</span></a>
      </div>
      <h6 class="element-header">
        Dashboard main page
      </h6>
    </div>

    <div class="row">
      <div class="col-lg-7 col-xxl-6">
        <!--START - CHART-->
        <div class="element-wrapper">
          <div class="element-box">
            <div class="element-actions">
              <div class="form-group">
                <select class="form-control form-control-sm">
                  <option selected="true">
                    Last 30 days
                  </option>
                  <option>
                    This Week
                  </option>
                  <option>
                    This Month
                  </option>
                  <option>
                    Today
                  </option>
                </select>
              </div>
            </div>
            <h5 class="element-box-header">
              Balance History
            </h5>
            <div class="el-chart-w"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
              <canvas data-chart-data="13,28,19,24,43,49,40,35,42,46" height="153" id="liteLineChartV2" width="513" style="display: block; width: 513px; height: 153px;"></canvas>
            </div>
          </div>
        </div>
        <!--END - CHART-->
      </div>
    </div>

  </div>
</div>
@endsection
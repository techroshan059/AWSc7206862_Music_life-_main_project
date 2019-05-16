@extends('layouts.app')

@section('ktmspice-admin-content')
<div class="row">
                <div class="col-md-3 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-0">Total Orders</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                        <h2 class="mb-0">2.9K</h2>
                                       
                                    </div>
                                  
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-shopping-cart text-info icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-0">Total Sales</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                        <h2 class="mb-0">6.9M</h2>
                                       
                                    </div> 
                                </div>
                                <div class="d-inline-block">
                                    <i class="fa fa-credit-card text-danger icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-0">Total Customers</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                        <h2 class="mb-0">20.8k</h2>
                                        
                                    </div>
                                   
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-user text-info icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-0">Total Staffs</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                        <h2 class="mb-0">0</h2>
                                       
                                    </div>
                                    
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-users text-danger icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                  <h4 class="card-title">
                    <i class="fas fa-chart-line"></i>
                    Sales Analytics
                  </h4>
                  <canvas id="orders-chart" width="850" height="424" class="chartjs-render-monitor" style="display: block; height: 212px; width: 425px;"></canvas>
                  <div id="orders-chart-legend" class="orders-chart-legend"><ul class="legend0"><li><span class="legend-label" style="background-color:#392c70"></span>Delivered</li><li><span class="legend-label" style="background-color:#d1cede"></span>Estimated</li></ul></div>                  
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-calendar-alt"></i>
                    Recent Activity
                  </h4>
                  <ul class="solid-bullet-list">
                    <li>
                      <h5>4 people shared a post
                        <span class="float-right text-muted font-weight-normal small">8:30 AM</span>
                      </h5>
                      <p class="text-muted">It was an awesome work!</p>
                      <div class="image-layers">
                        <div class="img-sm profile-image-text bg-warning rounded-circle image-layer-item">M</div>
                        <img class="img-sm rounded-circle image-layer-item" src="{{url('images/faces/face3.jpg')}}" alt="profile">
                        <img class="img-sm rounded-circle image-layer-item" src="{{url('images/faces/face5.jpg')}}" alt="profile">
                        <img class="img-sm rounded-circle image-layer-item" src="{{url('images/faces/face6.jpg')}}" alt="profile">
                      </div>
                    </li>
                    <li>
                      <h5>Stella posted in a group
                        <span class="float-right text-muted font-weight-normal small">11:40 AM</span>
                      </h5>
                      <p class="text-muted">The team has done a great job</p>
                    </li>
                    <li>
                      <h5>Dobrick posted in material
                        <span class="float-right text-muted font-weight-normal small">4:30 PM</span>
                      </h5>
                      <p class="text-muted">Great work. Keep it up!</p>
                    </li>
                    <li>
                      <h5>Dobrick posted in material
                        <span class="float-right text-muted font-weight-normal small">4:30 PM</span>
                      </h5>
                      <p class="text-muted">Great work. Keep it up!</p>
                    </li>
                  </ul>
                  <div class="border-top pt-3">
                    <div class="d-flex justify-content-between">
                      <button class="btn btn-outline-dark">More</button>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-table"></i>
                   Latest Order
                  </h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Customer</th>
                          <th>Item code</th>
                          <th>Orders</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="font-weight-bold">
                            Clifford Wilson
                          </td>
                          <td class="text-muted">
                            PT613
                          </td>
                          <td>
                            350
                          </td>
                          <td>
                            <label class="badge badge-success badge-pill">Dispatched</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Mary Payne
                          </td>
                          <td class="text-muted">
                            ST456
                          </td>
                          <td>
                            520
                          </td>
                          <td>
                            <label class="badge badge-warning badge-pill">Processing</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Adelaide Blake
                          </td>
                          <td class="text-muted">
                            CS789
                          </td>
                          <td>
                            830
                          </td>
                          <td>
                            <label class="badge badge-danger badge-pill">Failed</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Adeline King
                          </td>
                          <td class="text-muted">
                            LP908
                          </td>
                          <td>
                            579
                          </td>
                          <td>
                            <label class="badge badge-primary badge-pill">Delivered</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Bertie Robbins
                          </td>
                          <td class="text-muted">
                            HF675
                          </td>
                          <td>
                            790
                          </td>
                          <td>
                            <label class="badge badge-info badge-pill">On Hold</label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>

 @stop()
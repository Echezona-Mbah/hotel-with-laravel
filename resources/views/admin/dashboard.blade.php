<?php use \App\Http\Controllers\Admin\DashboardController;?>
{{-- {{ DashboardController::totalDeposit(); }} --}}
@include('admin.head')
@include('admin.sidebar')






          <div class="nk-content">
            <div class="container-fluid">
              <div class="nk-content-inner">
                <div class="nk-content-body">
                  <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                      <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">
                          Dashboard Overview
                        </h3>
                        <div class="nk-block-des text-soft">
                          <p>Welcome to DashLite Dashboard Template.</p>
                        </div>
                      </div>
                      <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                          <a
                            href="#"
                            class="btn btn-icon btn-trigger toggle-expand me-n1"
                            data-target="pageMenu"
                            ><em class="icon ni ni-more-v"></em
                          ></a>
                          <div
                            class="toggle-expand-content"
                            data-content="pageMenu"
                          >
                            <ul class="nk-block-tools g-3">
                              <li>
                                <div class="dropdown">
                                  <a
                                    href="#"
                                    class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                    data-bs-toggle="dropdown"
                                    ><em
                                      class="d-none d-sm-inline icon ni ni-calender-date"
                                    ></em
                                    ><span
                                      ><span class="d-none d-md-inline"
                                        >Last</span
                                      >
                                      30 Days</span
                                    ><em
                                      class="dd-indc icon ni ni-chevron-right"
                                    ></em
                                  ></a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                      <li>
                                        <a href="#"
                                          ><span>Last 30 Days</span></a
                                        >
                                      </li>
                                      <li>
                                        <a href="#"
                                          ><span>Last 6 Months</span></a
                                        >
                                      </li>
                                      <li>
                                        <a href="#"
                                          ><span>Last 1 Years</span></a
                                        >
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                              <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-primary"
                                  ><em class="icon ni ni-reports"></em
                                  ><span>Reports</span></a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nk-block">
                    <div class="row g-gs">
                      <div class="col-md-4">
                        <div class="card card-bordered card-full">
                          <div class="card-inner">
                            <div class="card-title-group align-start mb-0">
                              <div class="card-title">
                                <h6 class="title">Total Booking</h6>
                              </div>
                              <div class="card-tools">
                                <em
                                  class="card-hint icon ni ni-help-fill"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="left"
                                  title="Total Booking"
                                ></em>
                              </div>
                            </div>
                            <div class="card-amount">
                              <span class="amount"> {{ DashboardController::totalDeposit(); }} </span
                              ><span class="change down text-danger"
                                ><em class="icon ni ni-arrow-long-down"></em
                                >1.93%</span
                              >
                            </div>
                            <div class="invest-data">
                              <div class="invest-data-amount g-2">
                                <div class="invest-data-history">
                                  <div class="title">This Month</div>
                                  <div class="amount">1913</div>
                                </div>
                                <div class="invest-data-history">
                                  <div class="title">This Week</div>
                                  <div class="amount">1125</div>
                                </div>
                              </div>
                              <div class="invest-data-ck">
                                <canvas
                                  class="iv-data-chart"
                                  id="totalBooking"
                                ></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card card-bordered card-full">
                          <div class="card-inner">
                            <div class="card-title-group align-start mb-0">
                              <div class="card-title">
                                <h6 class="title">Rooms Available</h6>
                              </div>
                              <div class="card-tools">
                                <em
                                  class="card-hint icon ni ni-help-fill"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="left"
                                  title="Total Room"
                                ></em>
                              </div>
                            </div>
                            <div class="card-amount">
                              <span class="amount">{{ DashboardController::totalAvailableRooms();}} </span>
                            </div>
                            <div class="invest-data">
                              <div class="invest-data-amount g-2">
                                <div class="invest-data-history">
                                  <div class="title">Booked (Month)</div>
                                  <div class="amount">913</div>
                                </div>
                                <div class="invest-data-history">
                                  <div class="title">Booked (Week)</div>
                                  <div class="amount">125</div>
                                </div>
                              </div>
                              <div class="invest-data-ck">
                                <canvas
                                  class="iv-data-chart"
                                  id="totalRoom"
                                ></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card card-bordered card-full">
                          <div class="card-inner">
                            <div class="card-title-group align-start mb-0">
                              <div class="card-title">
                                <h6 class="title">Expenses</h6>
                              </div>
                              <div class="card-tools">
                                <em
                                  class="card-hint icon ni ni-help-fill"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="left"
                                  title="Total Expenses"
                                ></em>
                              </div>
                            </div>
                            <div class="card-amount">
                              <span class="amount">
                                {{ DashboardController::sumMoney(); }}
                                <span class="currency currency-usd"
                                  >USD</span
                                ></span
                              >
                            </div>
                            <div class="invest-data">
                              <div class="invest-data-amount g-2">
                                <div class="invest-data-history">
                                  <div class="title">This Month</div>
                                  <div class="amount">
                                    3,540.59
                                    <span class="currency currency-usd"
                                      >USD</span
                                    >
                                  </div>
                                </div>
                                <div class="invest-data-history">
                                  <div class="title">This Week</div>
                                  <div class="amount">
                                    1,259.28
                                    <span class="currency currency-usd"
                                      >USD</span
                                    >
                                  </div>
                                </div>
                              </div>
                              <div class="invest-data-ck">
                                <canvas
                                  class="iv-data-chart"
                                  id="totalExpenses"
                                ></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-4">
                        <div class="card card-bordered card-full">
                          <div class="card-inner d-flex flex-column h-100">
                            <div class="card-title-group mb-3">
                              <div class="card-title me-1">
                                <h6 class="title">Top Selected Package</h6>
                                <p>In last 30 days top selected package.</p>
                              </div>
                              <div class="card-tools mt-n1 me-n1">
                                <div class="drodown">
                                  <a
                                    href="#"
                                    class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white"
                                    data-bs-toggle="dropdown"
                                    >30 Days</a
                                  >
                                  <div
                                    class="dropdown-menu dropdown-menu-end dropdown-menu-xs"
                                  >
                                    <ul class="link-list-opt no-bdr">
                                      <li>
                                        <a href="#"><span>7 Days</span></a>
                                      </li>
                                      <li>
                                        <a href="#"><span>15 Days</span></a>
                                      </li>
                                      <li>
                                        <a href="#"><span>30 Days</span></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-list gy-3">
                              <div class="progress-wrap">
                                <div class="progress-text">
                                  <div class="progress-label">
                                    Strater Package
                                  </div>
                                  <div class="progress-amount">58%</div>
                                </div>
                                <div class="progress progress-md">
                                  <div
                                    class="progress-bar"
                                    data-progress="58"
                                  ></div>
                                </div>
                              </div>
                              <div class="progress-wrap">
                                <div class="progress-text">
                                  <div class="progress-label">
                                    Honeymoon Package
                                  </div>
                                  <div class="progress-amount">43%</div>
                                </div>
                                <div class="progress progress-md">
                                  <div
                                    class="progress-bar bg-warning"
                                    data-progress="43"
                                  ></div>
                                </div>
                              </div>
                              <div class="progress-wrap">
                                <div class="progress-text">
                                  <div class="progress-label">
                                    Vacation Package
                                  </div>
                                  <div class="progress-amount">33%</div>
                                </div>
                                <div class="progress progress-md">
                                  <div
                                    class="progress-bar bg-azure"
                                    data-progress="33"
                                  ></div>
                                </div>
                              </div>
                              <div class="progress-wrap">
                                <div class="progress-text">
                                  <div class="progress-label">
                                    Continental Package
                                  </div>
                                  <div class="progress-amount">29%</div>
                                </div>
                                <div class="progress progress-md">
                                  <div
                                    class="progress-bar bg-pink"
                                    data-progress="29"
                                  ></div>
                                </div>
                              </div>
                              <div class="progress-wrap">
                                <div class="progress-text">
                                  <div class="progress-label">
                                    Spring Package
                                  </div>
                                  <div class="progress-amount">18.49%</div>
                                </div>
                                <div class="progress progress-md">
                                  <div
                                    class="progress-bar bg-orange"
                                    data-progress="18.49"
                                  ></div>
                                </div>
                              </div>
                              <div class="progress-wrap">
                                <div class="progress-text">
                                  <div class="progress-label">
                                    All suite Package
                                  </div>
                                  <div class="progress-amount">16%</div>
                                </div>
                                <div class="progress progress-md">
                                  <div
                                    class="progress-bar bg-teal"
                                    data-progress="16"
                                  ></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-xxl-5">
                        <div class="card card-bordered h-100">
                          <div class="card-inner">
                            <div class="card-title-group align-start pb-3 g-2">
                              <div class="card-title">
                                <h6 class="title">Sales Revenue</h6>
                                <p>In last 30 days revenue from rent.</p>
                              </div>
                              <div class="card-tools">
                                <em
                                  class="card-hint icon ni ni-help"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="left"
                                  title="Revenue of this month"
                                ></em>
                              </div>
                            </div>
                            <div class="analytic-au">
                              <div
                                class="analytic-data-group analytic-au-group g-3"
                              >
                                <div class="analytic-data analytic-au-data">
                                  <div class="title">Monthly</div>
                                  <div class="amount">9.28K</div>
                                  <div class="change up">
                                    <em class="icon ni ni-arrow-long-up"></em
                                    >4.63%
                                  </div>
                                </div>
                                <div class="analytic-data analytic-au-data">
                                  <div class="title">Weekly</div>
                                  <div class="amount">2.69K</div>
                                  <div class="change down">
                                    <em class="icon ni ni-arrow-long-down"></em
                                    >1.92%
                                  </div>
                                </div>
                                <div class="analytic-data analytic-au-data">
                                  <div class="title">Daily (Avg)</div>
                                  <div class="amount">0.94K</div>
                                  <div class="change up">
                                    <em class="icon ni ni-arrow-long-up"></em
                                    >3.45%
                                  </div>
                                </div>
                              </div>
                              <div class="analytic-au-ck">
                                <canvas
                                  class="analytics-au-chart"
                                  id="analyticAuData"
                                ></canvas>
                              </div>
                              <div class="chart-label-group">
                                <div class="chart-label">01 Jan, 2020</div>
                                <div class="chart-label">30 Jan, 2020</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-xxl-3">
                        <div class="card card-bordered h-100">
                          <div class="card-inner">
                            <div class="card-title-group">
                              <div class="card-title">
                                <h6 class="title">Room Booking Chart</h6>
                              </div>
                              <div class="card-tools">
                                <div class="drodown">
                                  <a
                                    href="#"
                                    class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white"
                                    data-bs-toggle="dropdown"
                                    >30 Days</a
                                  >
                                  <div
                                    class="dropdown-menu dropdown-menu-end dropdown-menu-xs"
                                  >
                                    <ul class="link-list-opt no-bdr">
                                      <li>
                                        <a href="#"><span>7 Days</span></a>
                                      </li>
                                      <li>
                                        <a href="#"><span>15 Days</span></a>
                                      </li>
                                      <li>
                                        <a href="#"><span>30 Days</span></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="traffic-channel">
                              <div class="traffic-channel-doughnut-ck">
                                <canvas
                                  class="analytics-doughnut"
                                  id="BookingData"
                                ></canvas>
                              </div>
                              <div class="traffic-channel-group g-2">
                                <div class="traffic-channel-data">
                                  <div class="title">
                                    <span
                                      class="dot dot-lg sq"
                                      data-bg="#9cabff"
                                    ></span
                                    ><span>Single</span>
                                  </div>
                                  <div class="amount">
                                    1913 <small>58.63%</small>
                                  </div>
                                </div>
                                <div class="traffic-channel-data">
                                  <div class="title">
                                    <span
                                      class="dot dot-lg sq"
                                      data-bg="#1ee0ac"
                                    ></span
                                    ><span>Double</span>
                                  </div>
                                  <div class="amount">
                                    859 <small>23.94%</small>
                                  </div>
                                </div>
                                <div class="traffic-channel-data">
                                  <div class="title">
                                    <span
                                      class="dot dot-lg sq"
                                      data-bg="#f9db7b"
                                    ></span
                                    ><span>Delux</span>
                                  </div>
                                  <div class="amount">
                                    482 <small>12.94%</small>
                                  </div>
                                </div>
                                <div class="traffic-channel-data">
                                  <div class="title">
                                    <span
                                      class="dot dot-lg sq"
                                      data-bg="#ffa353"
                                    ></span
                                    ><span>Suit</span>
                                  </div>
                                  <div class="amount">
                                    138 <small>4.49%</small>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-5">
                        <div class="card card-bordered h-100">
                          <div class="card-inner">
                            <div class="card-title-group pb-3 g-2">
                              <div class="card-title">
                                <h6 class="title">Income vs Expenses</h6>
                                <p>
                                  How was your income and Expenses this month.
                                </p>
                              </div>
                              <div
                                class="card-tools shrink-0 d-none d-sm-block"
                              >
                                <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">7 D</a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link active">1 M</a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">3 M</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="analytic-ov">
                              <div
                                class="analytic-data-group analytic-ov-group g-3"
                              >
                                <div class="analytic-data analytic-ov-data">
                                  <div class="title text-primary">Income</div>
                                  <div class="amount">2.57K</div>
                                  <div class="change down">
                                    <em class="icon ni ni-arrow-long-down"></em
                                    >12.37%
                                  </div>
                                </div>
                                <div class="analytic-data analytic-ov-data">
                                  <div class="title text-danger">Expenses</div>
                                  <div class="amount">3.5K</div>
                                  <div class="change down">
                                    <em class="icon ni ni-arrow-long-up"></em
                                    >8.37%
                                  </div>
                                </div>
                              </div>
                              <div class="analytic-ov-ck">
                                <canvas
                                  class="analytics-line-large"
                                  id="analyticOvData"
                                ></canvas>
                              </div>
                              <div class="chart-label-group ms-5">
                                <div class="chart-label">01 Jan, 2020</div>
                                <div class="chart-label d-none d-sm-block">
                                  15 Jan, 2020
                                </div>
                                <div class="chart-label">30 Jan, 2020</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-xxl-3">
                        <div class="card card-bordered card-full">
                          <div class="card-inner-group">
                            <div class="card-inner">
                              <div class="card-title-group">
                                <div class="card-title">
                                  <h6 class="title">New Customer</h6>
                                </div>
                                <div class="card-tools">
                                  <a href="customers.html" class="link"
                                    >View All</a
                                  >
                                </div>
                              </div>
                            </div>
                            <div class="card-inner card-inner-md">
                              <div class="user-card">
                                <div class="user-avatar bg-primary-dim">
                                  <span>AB</span>
                                </div>
                                <div class="user-info">
                                  <span class="lead-text">Abu Bin Ishtiyak</span
                                  ><span class="sub-text"
                                    >info@softnio.com</span
                                  >
                                </div>
                                <div class="user-action">
                                  <div class="drodown">
                                    <a
                                      href="#"
                                      class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                      ><em class="icon ni ni-more-h"></em
                                    ></a>
                                    <div
                                      class="dropdown-menu dropdown-menu-end"
                                    >
                                      <ul class="link-list-opt no-bdr">
                                        <li>
                                          <a href="#"
                                            ><em class="icon ni ni-setting"></em
                                            ><span>Action Settings</span></a
                                          >
                                        </li>
                                        <li>
                                          <a href="#"
                                            ><em class="icon ni ni-notify"></em
                                            ><span>Push Notification</span></a
                                          >
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-inner card-inner-md">
                              <div class="user-card">
                                <div class="user-avatar bg-pink-dim">
                                  <span>SW</span>
                                </div>
                                <div class="user-info">
                                  <span class="lead-text">Sharon Walker</span
                                  ><span class="sub-text"
                                    >sharon-90@example.com</span
                                  >
                                </div>
                                <div class="user-action">
                                  <div class="drodown">
                                    <a
                                      href="#"
                                      class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                      ><em class="icon ni ni-more-h"></em
                                    ></a>
                                    <div
                                      class="dropdown-menu dropdown-menu-end"
                                    >
                                      <ul class="link-list-opt no-bdr">
                                        <li>
                                          <a href="#"
                                            ><em class="icon ni ni-setting"></em
                                            ><span>Action Settings</span></a
                                          >
                                        </li>
                                        <li>
                                          <a href="#"
                                            ><em class="icon ni ni-notify"></em
                                            ><span>Push Notification</span></a
                                          >
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-inner card-inner-md">
                              <div class="user-card">
                                <div class="user-avatar bg-warning-dim">
                                  <span>GO</span>
                                </div>
                                <div class="user-info">
                                  <span class="lead-text">Gloria Oliver</span
                                  ><span class="sub-text"
                                    >gloria_72@example.com</span
                                  >
                                </div>
                                <div class="user-action">
                                  <div class="drodown">
                                    <a
                                      href="#"
                                      class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                      ><em class="icon ni ni-more-h"></em
                                    ></a>
                                    <div
                                      class="dropdown-menu dropdown-menu-end"
                                    >
                                      <ul class="link-list-opt no-bdr">
                                        <li>
                                          <a href="#"
                                            ><em class="icon ni ni-setting"></em
                                            ><span>Action Settings</span></a
                                          >
                                        </li>
                                        <li>
                                          <a href="#"
                                            ><em class="icon ni ni-notify"></em
                                            ><span>Push Notification</span></a
                                          >
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-inner card-inner-md">
                              <div class="user-card">
                                <div class="user-avatar bg-success-dim">
                                  <span>PS</span>
                                </div>
                                <div class="user-info">
                                  <span class="lead-text">Phillip Sullivan</span
                                  ><span class="sub-text"
                                    >phillip-85@example.com</span
                                  >
                                </div>
                                <div class="user-action">
                                  <div class="drodown">
                                    <a
                                      href="#"
                                      class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                      ><em class="icon ni ni-more-h"></em
                                    ></a>
                                    <div
                                      class="dropdown-menu dropdown-menu-end"
                                    >
                                      <ul class="link-list-opt no-bdr">
                                        <li>
                                          <a href="#"
                                            ><em class="icon ni ni-setting"></em
                                            ><span>Action Settings</span></a
                                          >
                                        </li>
                                        <li>
                                          <a href="#"
                                            ><em class="icon ni ni-notify"></em
                                            ><span>Push Notification</span></a
                                          >
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-inner card-inner-md">
                              <div class="user-card">
                                <div class="user-avatar bg-danger-dim">
                                  <span>TI</span>
                                </div>
                                <div class="user-info">
                                  <span class="lead-text">Tasnim Ifrat</span
                                  ><span class="sub-text"
                                    >tasif-85@example.com</span
                                  >
                                </div>
                                <div class="user-action">
                                  <div class="drodown">
                                    <a
                                      href="#"
                                      class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                      ><em class="icon ni ni-more-h"></em
                                    ></a>
                                    <div
                                      class="dropdown-menu dropdown-menu-end"
                                    >
                                      <ul class="link-list-opt no-bdr">
                                        <li>
                                          <a href="#"
                                            ><em class="icon ni ni-setting"></em
                                            ><span>Action Settings</span></a
                                          >
                                        </li>
                                        <li>
                                          <a href="#"
                                            ><em class="icon ni ni-notify"></em
                                            ><span>Push Notification</span></a
                                          >
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-xxl-4">
                        <div class="card card-bordered card-full">
                          <div class="card-inner border-bottom">
                            <div class="card-title-group">
                              <div class="card-title">
                                <h6 class="title">Recent Activities</h6>
                              </div>
                              <div class="card-tools">
                                <ul class="card-tools-nav">
                                  <li>
                                    <a href="#"><span>Cancel</span></a>
                                  </li>
                                  <li class="active">
                                    <a href="#"><span>All</span></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <ul class="nk-activity">
                            <li class="nk-activity-item">
                              <div
                                class="nk-activity-media user-avatar bg-success"
                              >
                                <img src="../images/avatar/c-sm.jpg" alt="" />
                              </div>
                              <div class="nk-activity-data">
                                <div class="label">
                                  Keith Jensen requested for room.
                                </div>
                                <span class="time">2 hours ago</span>
                              </div>
                            </li>
                            <li class="nk-activity-item">
                              <div
                                class="nk-activity-media user-avatar bg-warning"
                              >
                                HS
                              </div>
                              <div class="nk-activity-data">
                                <div class="label">
                                  Harry Simpson placed a Order.
                                </div>
                                <span class="time">2 hours ago</span>
                              </div>
                            </li>
                            <li class="nk-activity-item">
                              <div
                                class="nk-activity-media user-avatar bg-azure"
                              >
                                SM
                              </div>
                              <div class="nk-activity-data">
                                <div class="label">
                                  Stephanie Marshall cancelled booking.
                                </div>
                                <span class="time">2 hours ago</span>
                              </div>
                            </li>
                            <li class="nk-activity-item">
                              <div
                                class="nk-activity-media user-avatar bg-purple"
                              >
                                <img src="../images/avatar/d-sm.jpg" alt="" />
                              </div>
                              <div class="nk-activity-data">
                                <div class="label">
                                  Nicholas Carr confirmed booking.
                                </div>
                                <span class="time">2 hours ago</span>
                              </div>
                            </li>
                            <li class="nk-activity-item">
                              <div
                                class="nk-activity-media user-avatar bg-pink"
                              >
                                TM
                              </div>
                              <div class="nk-activity-data">
                                <div class="label">
                                  Timothy Moreno placed a Order.
                                </div>
                                <span class="time">2 hours ago</span>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nk-footer">
            <div class="container-fluid">
              <div class="nk-footer-wrap">
                <div class="nk-footer-copyright">
                  &copy; 2023 DashLite. Template by
                  <a href="https://softnio.com/" target="_blank">Softnio</a>
                </div>
                <div class="nk-footer-links">
                  <ul class="nav nav-sm">
                    <li class="nav-item dropup">
                      <a
                        href="#"
                        class="dropdown-toggle dropdown-indicator has-indicator nav-link"
                        data-bs-toggle="dropdown"
                        data-offset="0,10"
                        ><span>English</span></a
                      >
                      <div
                        class="dropdown-menu dropdown-menu-sm dropdown-menu-end"
                      >
                        <ul class="language-list">
                          <li>
                            <a href="#" class="language-item"
                              ><span class="language-name">English</span></a
                            >
                          </li>
                          <li>
                            <a href="#" class="language-item"
                              ><span class="language-name">Español</span></a
                            >
                          </li>
                          <li>
                            <a href="#" class="language-item"
                              ><span class="language-name">Français</span></a
                            >
                          </li>
                          <li>
                            <a href="#" class="language-item"
                              ><span class="language-name">Türkçe</span></a
                            >
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a data-bs-toggle="modal" href="#region" class="nav-link"
                        ><em class="icon ni ni-globe"></em
                        ><span class="ms-1">Select Region</span></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-bs-dismiss="modal"
            ><em class="icon ni ni-cross-sm"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h5 class="title mb-4">Select Your Country</h5>
            <div class="nk-country-region">
              <ul class="country-list text-center gy-2">
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/arg.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Argentina</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/aus.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Australia</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/bangladesh.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Bangladesh</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/canada.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name"
                      >Canada <small>(English)</small></span
                    ></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/china.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Centrafricaine</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/china.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">China</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/french.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">France</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/germany.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Germany</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/iran.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Iran</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/italy.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Italy</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/mexico.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">México</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/philipine.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Philippines</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/portugal.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Portugal</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/s-africa.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">South Africa</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/spanish.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Spain</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/switzerland.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">Switzerland</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/uk.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">United Kingdom</span></a
                  >
                </li>
                <li>
                  <a href="#" class="country-item"
                    ><img
                      src="../images/flags/english.png"
                      alt=""
                      class="country-flag"
                    /><span class="country-name">United State</span></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ul class="nk-sticky-toolbar">
      <li class="demo-layout">
        <a
          class="toggle tipinfo"
          data-target="demoML"
          href="#"
          title="Main Demo Preview"
          ><em class="icon ni ni-dashlite"></em
        ></a>
      </li>
      <li class="demo-thumb">
        <a
          class="toggle tipinfo"
          data-target="demoUC"
          href="#"
          title="Use Case Concept"
          ><em class="icon ni ni-menu-squared"></em
        ></a>
      </li>
      <li class="demo-settings">
        <a
          class="toggle tipinfo"
          data-target="settingPanel"
          href="#"
          title="Demo Settings"
          ><em class="icon ni ni-setting-alt"></em
        ></a>
      </li>
      <li class="demo-purchase">
        <a
          class="tipinfo"
          target="_blank"
          href="https://1.envato.market/e0y3g"
          title="Purchase"
          ><em class="icon ni ni-cart"></em
        ></a>
      </li>
    </ul>
    <div
      class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right"
      data-content="demoML"
      data-toggle-overlay="true"
      data-toggle-body="true"
      data-toggle-screen="any"
    >
      <div class="nk-demo-head">
        <h6 class="mb-0">Switch Demo Layout</h6>
        <a
          class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2"
          data-target="demoML"
          href="#"
          ><em class="icon ni ni-cross"></em
        ></a>
      </div>
      <div class="nk-demo-list" data-simplebar>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo1/index.html"
            ><div class="nk-demo-image bg-blue">
              <img
                class="bg-purple"
                src="../../images/landing/layout-1d.jpg"
                srcset="https://dashlite.net/images/landing/layout-1d2x.jpg 2x"
                alt="Demo Layout 1"
              />
            </div>
            <span class="nk-demo-title"><strong>Demo Layout 1</strong></span></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo2/index.html"
            ><div class="nk-demo-image bg-purple">
              <img
                src="../../images/landing/layout-2d.jpg"
                srcset="https://dashlite.net/images/landing/layout-2d2x.jpg 2x"
                alt="Demo Layout 2"
              />
            </div>
            <span class="nk-demo-title"><strong>Demo Layout 2</strong></span></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo3/index.html"
            ><div class="nk-demo-image bg-success">
              <img
                src="../../images/landing/layout-3d.jpg"
                srcset="https://dashlite.net/images/landing/layout-3d2x.jpg 2x"
                alt="Demo Layout 3"
              />
            </div>
            <span class="nk-demo-title"><strong>Demo Layout 3</strong></span></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo4/index.html"
            ><div class="nk-demo-image bg-indigo">
              <img
                src="../../images/landing/layout-4d.jpg"
                srcset="https://dashlite.net/images/landing/layout-4d2x.jpg 2x"
                alt="Demo Layout 4"
              />
            </div>
            <span class="nk-demo-title"><strong>Demo Layout 4</strong></span></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo5/index.html"
            ><div class="nk-demo-image bg-orange">
              <img
                src="../../images/landing/layout-5d.jpg"
                srcset="https://dashlite.net/images/landing/layout-5d2x.jpg 2x"
                alt="Demo Layout 5"
              />
            </div>
            <span class="nk-demo-title"><strong>Demo Layout 5</strong></span></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo6/index.html"
            ><div class="nk-demo-image bg-purple">
              <img
                src="../../images/landing/layout-6d.jpg"
                srcset="https://dashlite.net/images/landing/layout-6d2x.jpg 2x"
                alt="Demo Layout 6"
              />
            </div>
            <span class="nk-demo-title"><strong>Demo Layout 6</strong></span></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo7/index.html"
            ><div class="nk-demo-image bg-teal">
              <img
                src="../../images/landing/layout-7d.jpg"
                srcset="https://dashlite.net/images/landing/layout-7d2x.jpg 2x"
                alt="Demo Layout 7"
              />
            </div>
            <span class="nk-demo-title"><strong>Demo Layout 7</strong></span></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo8/index.html"
            ><div class="nk-demo-image bg-azure">
              <img
                src="../../images/landing/layout-8d.jpg"
                srcset="https://dashlite.net/images/landing/layout-8d2x.jpg 2x"
                alt="Demo Layout 8"
              />
            </div>
            <span class="nk-demo-title"><strong>Demo Layout 8</strong></span></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo9/index.html"
            ><div class="nk-demo-image bg-pink">
              <img
                src="../../images/landing/layout-9d.jpg"
                srcset="https://dashlite.net/images/landing/layout-9d2x.jpg 2x"
                alt="Demo Layout 9"
              />
            </div>
            <span class="nk-demo-title"><strong>Demo Layout 9</strong></span></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/landing/index.html"
            ><div class="nk-demo-image bg-red">
              <img
                src="../../images/landing/main-landing.jpg"
                srcset="
                  https://dashlite.net/images/landing/main-landing2x.jpg 2x
                "
                alt="Landing Page"
              />
            </div>
            <span class="nk-demo-title"
              ><strong>Landing Page</strong>
              <span class="badge badge-danger ml-1">Free</span></span
            ></a
          >
        </div>
      </div>
    </div>
    <div
      class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right"
      data-content="demoUC"
      data-toggle-overlay="true"
      data-toggle-body="true"
      data-toggle-screen="any"
    >
      <div class="nk-demo-head">
        <h6 class="mb-0">Use Case Concept</h6>
        <a
          class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2"
          data-target="demoUC"
          href="#"
          ><em class="icon ni ni-cross"></em
        ></a>
      </div>
      <div class="nk-demo-list" data-simplebar>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo9/copywriter/index.html"
            ><div class="nk-demo-image bg-indigo">
              <img
                src="../../images/landing/demo-ai-copywriter.jpg"
                srcset="
                  https://dashlite.net/images/landing/demo-ai-copywriter2x.jpg 2x
                "
                alt="ai-copywriter"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo9</em><br /><strong
                >Ai Copywriter Panel</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo7/pharmacy/index.html"
            ><div class="nk-demo-image bg-warning">
              <img
                src="../../images/landing/demo-pharmacy.jpg"
                srcset="
                  https://dashlite.net/images/landing/demo-pharmacy2x.jpg 2x
                "
                alt="pharmacy"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo7</em><br /><strong
                >Pharmacy Management Panel</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo5/loan/index.html"
            ><div class="nk-demo-image bg-purple">
              <img
                src="../../images/landing/demo-loan.jpg"
                srcset="https://dashlite.net/images/landing/demo-loan2x.jpg 2x"
                alt="loan"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo5</em><br /><strong
                >Loan Management Panel</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo2/ecommerce/index.html"
            ><div class="nk-demo-image bg-dark">
              <img
                src="../../images/landing/demo-ecommerce.jpg"
                srcset="
                  https://dashlite.net/images/landing/demo-ecommerce2x.jpg 2x
                "
                alt="Ecommerce"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo2</em><br /><strong
                >E-Commerce Panel</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo2/lms/index.html"
            ><div class="nk-demo-image bg-danger">
              <img
                src="../../images/landing/demo-lms.jpg"
                srcset="https://dashlite.net/images/landing/demo-lms2x.jpg 2x"
                alt="LMS"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo2</em><br /><strong
                >LMS / Learning Management System</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo1/crm/index.html"
            ><div class="nk-demo-image bg-info">
              <img
                src="../../images/landing/demo-crm.jpg"
                srcset="https://dashlite.net/images/landing/demo-crm2x.jpg 2x"
                alt="CRM / Customer Relationship"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo1</em><br /><strong
                >CRM / Customer Relationship Management</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo7/hospital/index.html"
            ><div class="nk-demo-image bg-indigo">
              <img
                src="../../images/landing/demo-hospital.jpg"
                srcset="
                  https://dashlite.net/images/landing/demo-hospital2x.jpg 2x
                "
                alt="Hospital Managemen"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo7</em><br /><strong
                >Hospital Management</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="index-2.html"
            ><div class="nk-demo-image bg-pink">
              <img
                src="../../images/landing/demo-hotel.jpg"
                srcset="https://dashlite.net/images/landing/demo-hotel2x.jpg 2x"
                alt="Hotel Managemen"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo1</em><br /><strong
                >Hotel Management</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo3/cms/index.html"
            ><div class="nk-demo-image bg-dark">
              <img
                src="../../images/landing/demo-cms.jpg"
                srcset="https://dashlite.net/images/landing/demo-cms2x.jpg 2x"
                alt="cms"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo3</em><br /><strong
                >CMS Panel</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo5/crypto/index.html"
            ><div class="nk-demo-image bg-warning">
              <img
                src="../../images/landing/demo-buysell.jpg"
                srcset="
                  https://dashlite.net/images/landing/demo-buysell2x.jpg 2x
                "
                alt="Crypto BuySell / Wallet"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo5</em><br /><strong
                >Crypto BuySell Panel</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo6/invest/index.html"
            ><div class="nk-demo-image bg-indigo">
              <img
                src="../../images/landing/demo-invest.jpg"
                srcset="
                  https://dashlite.net/images/landing/demo-invest2x.jpg 2x
                "
                alt="HYIP / Investment"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo6</em><br /><strong
                >HYIP / Investment Panel</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo3/apps/file-manager.html"
            ><div class="nk-demo-image bg-purple">
              <img
                src="../../images/landing/demo-file-manager.jpg"
                srcset="
                  https://dashlite.net/images/landing/demo-file-manager2x.jpg 2x
                "
                alt="File Manager"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo3</em><br /><strong
                >Apps - File Manager</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo4/subscription/index.html"
            ><div class="nk-demo-image bg-primary">
              <img
                src="../../images/landing/demo-subscription.jpg"
                srcset="
                  https://dashlite.net/images/landing/demo-subscription2x.jpg 2x
                "
                alt="SAAS / Subscription"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo4</em><br /><strong
                >SAAS / Subscription Panel</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/covid/index.html"
            ><div class="nk-demo-image bg-danger">
              <img
                src="../../images/landing/demo-covid19.jpg"
                srcset="
                  https://dashlite.net/images/landing/demo-covid192x.jpg 2x
                "
                alt="Covid Situation"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Covid</em><br /><strong
                >Coronavirus Situation</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo3/apps/messages.html"
            ><div class="nk-demo-image bg-success">
              <img
                src="../../images/landing/demo-messages.jpg"
                srcset="
                  https://dashlite.net/images/landing/demo-messages2x.jpg 2x
                "
                alt="Messages"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo3</em><br /><strong
                >Apps - Messages</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo3/apps/mailbox.html"
            ><div class="nk-demo-image bg-purple">
              <img
                src="../../images/landing/demo-inbox.jpg"
                srcset="https://dashlite.net/images/landing/demo-inbox2x.jpg 2x"
                alt="Inbox"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo3</em><br /><strong
                >Apps - Mailbox</strong
              ></span
            ></a
          >
        </div>
        <div class="nk-demo-item">
          <a href="https://dashlite.net/demo3/apps/chats.html"
            ><div class="nk-demo-image bg-purple">
              <img
                src="../../images/landing/demo-chats.jpg"
                srcset="https://dashlite.net/images/landing/demo-chats2x.jpg 2x"
                alt="Chats / Messenger"
              />
            </div>
            <span class="nk-demo-title"
              ><em class="text-primary">Demo3</em><br /><strong
                >Apps - Chats</strong
              ></span
            ></a
          >
        </div>
      </div>
    </div>
    <div
      class="nk-demo-panel toggle-slide toggle-slide-right"
      data-content="settingPanel"
      data-toggle-overlay="true"
      data-toggle-body="true"
      data-toggle-screen="any"
    >
      <div class="nk-demo-head">
        <h6 class="mb-0">Preview Settings</h6>
        <a
          class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2"
          data-target="settingPanel"
          href="#"
          ><em class="icon ni ni-cross"></em
        ></a>
      </div>
      <div class="nk-opt-panel" data-simplebar>
        <div class="nk-opt-set">
          <div class="nk-opt-set-title">Direction Change</div>
          <div class="nk-opt-list col-2x">
            <div
              class="nk-opt-item only-text active"
              data-key="dir"
              data-update="ltr"
            >
              <span class="nk-opt-item-bg"
                ><span class="nk-opt-item-name">LTR Mode</span></span
              >
            </div>
            <div class="nk-opt-item only-text" data-key="dir" data-update="rtl">
              <span class="nk-opt-item-bg"
                ><span class="nk-opt-item-name">RTL Mode</span></span
              >
            </div>
          </div>
        </div>
        <div class="nk-opt-set">
          <div class="nk-opt-set-title">Main UI Style</div>
          <div class="nk-opt-list col-2x">
            <div
              class="nk-opt-item only-text active"
              data-key="style"
              data-update="ui-default"
            >
              <span class="nk-opt-item-bg"
                ><span class="nk-opt-item-name">Default</span></span
              >
            </div>
            <div
              class="nk-opt-item only-text"
              data-key="style"
              data-update="ui-clean"
            >
              <span class="nk-opt-item-bg"
                ><span class="nk-opt-item-name">Clean</span></span
              >
            </div>
            <div
              class="nk-opt-item only-text"
              data-key="style"
              data-update="ui-shady"
            >
              <span class="nk-opt-item-bg"
                ><span class="nk-opt-item-name">Shady</span></span
              >
            </div>
            <div
              class="nk-opt-item only-text"
              data-key="style"
              data-update="ui-softy"
            >
              <span class="nk-opt-item-bg"
                ><span class="nk-opt-item-name">Softy</span></span
              >
            </div>
          </div>
        </div>
        <div class="nk-opt-set nk-opt-set-aside">
          <div class="nk-opt-set-title">Sidebar Style</div>
          <div class="nk-opt-list col-4x">
            <div class="nk-opt-item" data-key="aside" data-update="is-light">
              <span class="nk-opt-item-bg is-light"
                ><span class="bg-lighter"></span></span
              ><span class="nk-opt-item-name">White</span>
            </div>
            <div class="nk-opt-item" data-key="aside" data-update="is-default">
              <span class="nk-opt-item-bg is-light"
                ><span class="bg-light"></span></span
              ><span class="nk-opt-item-name">Light</span>
            </div>
            <div
              class="nk-opt-item active"
              data-key="aside"
              data-update="is-dark"
            >
              <span class="nk-opt-item-bg"><span class="bg-dark"></span></span
              ><span class="nk-opt-item-name">Dark</span>
            </div>
            <div class="nk-opt-item" data-key="aside" data-update="is-theme">
              <span class="nk-opt-item-bg"><span class="bg-theme"></span></span
              ><span class="nk-opt-item-name">Theme</span>
            </div>
          </div>
        </div>
        <div class="nk-opt-set nk-opt-set-header">
          <div class="nk-opt-set-title">Header Style</div>
          <div class="nk-opt-list col-4x">
            <div
              class="nk-opt-item active"
              data-key="header"
              data-update="is-light"
            >
              <span class="nk-opt-item-bg is-light"
                ><span class="bg-lighter"></span></span
              ><span class="nk-opt-item-name">White</span>
            </div>
            <div class="nk-opt-item" data-key="header" data-update="is-default">
              <span class="nk-opt-item-bg is-light"
                ><span class="bg-light"></span></span
              ><span class="nk-opt-item-name">Light</span>
            </div>
            <div class="nk-opt-item" data-key="header" data-update="is-dark">
              <span class="nk-opt-item-bg"><span class="bg-dark"></span></span
              ><span class="nk-opt-item-name">Dark</span>
            </div>
            <div class="nk-opt-item" data-key="header" data-update="is-theme">
              <span class="nk-opt-item-bg"><span class="bg-theme"></span></span
              ><span class="nk-opt-item-name">Theme</span>
            </div>
          </div>
        </div>
        <div class="nk-opt-set nk-opt-set-skin">
          <div class="nk-opt-set-title">Primary Skin</div>
          <div class="nk-opt-list">
            <div
              class="nk-opt-item active"
              data-key="skin"
              data-update="default"
            >
              <span class="nk-opt-item-bg"
                ><span class="skin-default"></span></span
              ><span class="nk-opt-item-name">Default</span>
            </div>
            <div class="nk-opt-item" data-key="skin" data-update="blue">
              <span class="nk-opt-item-bg"><span class="skin-blue"></span></span
              ><span class="nk-opt-item-name">Blue</span>
            </div>
            <div class="nk-opt-item" data-key="skin" data-update="egyptian">
              <span class="nk-opt-item-bg"
                ><span class="skin-egyptian"></span></span
              ><span class="nk-opt-item-name">Egyptian</span>
            </div>
            <div class="nk-opt-item" data-key="skin" data-update="purple">
              <span class="nk-opt-item-bg"
                ><span class="skin-purple"></span></span
              ><span class="nk-opt-item-name">Purple</span>
            </div>
            <div class="nk-opt-item" data-key="skin" data-update="green">
              <span class="nk-opt-item-bg"
                ><span class="skin-green"></span></span
              ><span class="nk-opt-item-name">Green</span>
            </div>
            <div class="nk-opt-item" data-key="skin" data-update="red">
              <span class="nk-opt-item-bg"><span class="skin-red"></span></span
              ><span class="nk-opt-item-name">Red</span>
            </div>
          </div>
        </div>
        <div class="nk-opt-set">
          <div class="nk-opt-set-title">Skin Mode</div>
          <div class="nk-opt-list col-2x">
            <div
              class="nk-opt-item active"
              data-key="mode"
              data-update="light-mode"
            >
              <span class="nk-opt-item-bg is-light"
                ><span class="theme-light"></span></span
              ><span class="nk-opt-item-name">Light Skin</span>
            </div>
            <div class="nk-opt-item" data-key="mode" data-update="dark-mode">
              <span class="nk-opt-item-bg"
                ><span class="theme-dark"></span></span
              ><span class="nk-opt-item-name">Dark Skin</span>
            </div>
          </div>
        </div>
        <div class="nk-opt-reset">
          <a href="#" class="reset-opt-setting">Reset Setting</a>
        </div>
      </div>
    </div>
    <div class="pmo-lv pmo-dark">
      <a class="pmo-close" href="#"><em class="ni ni-cross"></em></a
      ><a
        class="pmo-wrap"
        target="_blank"
        href="https://softnio.com/get-early-access/"
        ><div class="pmo-text text-white">
          Looking for functional script for HYIP Investment Platform? Check out
          <em class="ni ni-arrow-long-right"></em></div
      ></a>
    </div>
    <a
      class="pmo-st pmo-dark"
      target="_blank"
      href="https://softnio.com/get-early-access/"
      ><div class="pmo-st-img">
        <img src="../../images/landing/promo-investorm.png" alt="Investorm" />
      </div>
      <div class="pmo-st-text">
        Looking for Advanced <br />
        HYIP Investment Platform?
      </div></a
    >
    @include('admin.footer')


@extends('layout.user-master')


@section('content')

      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
        <div class="layout-px-spacing">
          <div class="middle-content container-xxl p-0">
            <div class="row layout-top-spacing">
              <div
                class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing"
              >
                <div class="widget widget-chart-one">
                  <div class="widget-heading">
                    <h5 class="">Grafik Responden</h5>
                    <div class="task-action">
                      <div class="dropdown">
                        <a
                          class="dropdown-toggle"
                          href="#"
                          role="button"
                          id="renvenue"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-more-horizontal"
                          >
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                          </svg>
                        </a>
                        <div
                          class="dropdown-menu left"
                          aria-labelledby="renvenue"
                          style="will-change: transform"
                        >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Weekly</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Monthly</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Yearly</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="widget-content">
                    <div id="revenueMonthly"></div>
                  </div>
                </div>
              </div>

              <div
              class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing"
            >
              <div class="widget widget-activity-four">
                <div class="widget-heading">
                  <h5 class="">Recent Activities</h5>
                </div>

                <div class="widget-content">
                  <div class="mt-container-ra mx-auto">
                    <div class="timeline-line">


                      <div class="item-timeline timeline-success">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>
                            Send Mail to
                            <a href="javascript:void(0);">HR</a> and
                            <a href="javascript:void(0);">Admin</a>
                          </p>
                          <span class="badge">Completed</span>
                          <p class="t-time">2 min ago</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-danger">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>Backup <span>Files EOD</span></p>
                          <span class="badge">Pending</span>
                          <p class="t-time">14:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-dark">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>
                            Collect documents from
                            <a href="javascript:void(0);">Sara</a>
                          </p>
                          <span class="badge">Completed</span>
                          <p class="t-time">16:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-warning">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>
                            Conference call with
                            <a href="javascript:void(0);">Marketing Manager</a
                            >.
                          </p>
                          <span class="badge">In progress</span>
                          <p class="t-time">17:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-secondary">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>Rebooted Server</p>
                          <span class="badge">Completed</span>
                          <p class="t-time">17:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-warning">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>Send contract details to Freelancer</p>
                          <span class="badge">Pending</span>
                          <p class="t-time">18:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-dark">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>
                            Kelly want to increase the time of the project.
                          </p>
                          <span class="badge">In Progress</span>
                          <p class="t-time">19:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-success">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>Server down for maintanence</p>
                          <span class="badge">Completed</span>
                          <p class="t-time">19:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-secondary">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>Malicious link detected</p>
                          <span class="badge">Block</span>
                          <p class="t-time">20:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-warning">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>Rebooted Server</p>
                          <span class="badge">Completed</span>
                          <p class="t-time">23:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-primary">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p><span>Updated</span> Server Logs</p>
                          <span class="badge">Pending</span>
                          <p class="t-time">Just Now</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-success">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>
                            Send Mail to
                            <a href="javascript:void(0);">HR</a> and
                            <a href="javascript:void(0);">Admin</a>
                          </p>
                          <span class="badge">Completed</span>
                          <p class="t-time">2 min ago</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-danger">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>Backup <span>Files EOD</span></p>
                          <span class="badge">Pending</span>
                          <p class="t-time">14:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-dark">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>
                            Collect documents from
                            <a href="javascript:void(0);">Sara</a>
                          </p>
                          <span class="badge">Completed</span>
                          <p class="t-time">16:00</p>
                        </div>
                      </div>

                      <div class="item-timeline timeline-warning">
                        <div
                          class="t-dot"
                          data-original-title=""
                          title=""
                        ></div>
                        <div class="t-text">
                          <p>
                            Conference call with
                            <a href="javascript:void(0);">Marketing Manager</a
                            >.
                          </p>
                          <span class="badge">In progress</span>
                          <p class="t-time">17:00</p>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row widget-statistic">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">31.6K</p>
                                        <h5 class="">Responden Kuesioner 1</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">1,900</p>
                                        <h5 class="">Responden Kuesioner 1</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">2000</p>
                                        <h5 class="">Responden Kuesioner 1</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
          </div>
        </div>
        <!--  END CONTENT AREA  -->
      </div>
      <!--  END CONTENT AREA  -->

      @endsection

@extends('layouts.dashboard')

@section('title')
    Dashboard | Product
@endsection
@section('content')

<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Transactions</h2>
                <p class="dashboard-subtitle">
                  Big result start from the small one
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12 mt-2">
                    <ul
                      class="nav nav-pills mb-3"
                      id="pills-tab"
                      role="tablist"
                    >
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="pills-buy-tab"
                          data-toggle="pill"
                          href="#pills-buy"
                          role="tab"
                          aria-controls="pills-buy"
                          aria-selected="true"
                          >Buy Product</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="pills-sell-tab"
                          data-toggle="pill"
                          href="#pills-sell"
                          role="tab"
                          aria-controls="pills-sell"
                          aria-selected="false"
                          >Sell Product</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div
                        class="tab-pane fade show active"
                        id="pills-buy"
                        role="tabpanel"
                        aria-labelledby="pills-buy-tab"
                      >
                        <a
                          href="dashboard-transactions-detail.html"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard-recent-transactions-1.png"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">Shirup Marzzan</div>
                              <div class="col-md-3">Ruli Gandari</div>
                              <div class="col-md-3">08 Maret 2023</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img src="/images/arrow-next.svg" alt="" />
                              </div>
                            </div>
                          </div>
                        </a>
                        <a
                          href="dashboard-transactions-detail.html"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard-recent-transactions-2.png"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">LeBrone X</div>
                              <div class="col-md-3">Ruli Gandari</div>
                              <div class="col-md-3">07 Maret 2023</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img src="/images/arrow-next.svg" alt="" />
                              </div>
                            </div>
                          </div>
                        </a>
                        <a
                          href="dashboard-transactions-detail.html"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard-recent-transactions-3.png"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">Sofa Lembut</div>
                              <div class="col-md-3">Ruli Gandari</div>
                              <div class="col-md-3">06 Maret 2023</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img src="/images/arrow-next.svg" alt="" />
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="pills-sell"
                        role="tabpanel"
                        aria-labelledby="pills-sell-tab"
                      >
                        <a
                          href="dashboard-transactions-detail.html"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard-recent-transactions-1.png"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">Shirup Marzzan</div>
                              <div class="col-md-3">Ruli Gandari</div>
                              <div class="col-md-3">08 Maret 2023</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img src="/images/arrow-next.svg" alt="" />
                              </div>
                            </div>
                          </div>
                        </a>
                        <a
                          href="dashboard-transactions-detail.html"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard-recent-transactions-2.png"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">LeBrone X</div>
                              <div class="col-md-3">Ruli Gandari</div>
                              <div class="col-md-3">07 Maret 2023</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img src="/images/arrow-next.svg" alt="" />
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
@push('addon-script')
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
@endpush
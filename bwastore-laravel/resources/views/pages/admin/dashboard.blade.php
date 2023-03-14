@extends('layouts.admin')

@section('title')
    Dashboard
@endsection
@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Dashboard</h2>
                <p class="dashboard-subtitle">Welcome to Administrator Panel</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Customer</div>
                        <div class="dashboard-card-subtitle">{{ $customer }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Revenue</div>
                        <div class="dashboard-card-subtitle">Rp. {{ $revenue }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Transactions</div>
                        <div class="dashboard-card-subtitle">{{ $transaction }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>
                    {{-- <a
                      href="dashboard-trasactions-detail.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="images/dashboard-recent-transactions-1.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Shirup Marzzan</div>
                          <div class="col-md-3">Ruli Gandari</div>
                          <div class="col-md-3">08 Maret 2023</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img src="images/arrow-next.svg" alt="" />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a
                      href="dashboard-trasactions-detail.html"
                      class="card card-list d-block">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="images/dashboard-recent-transactions-2.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">LeBrone X</div>
                          <div class="col-md-3">Ruli Gandari</div>
                          <div class="col-md-3">07 Maret 2023</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img src="images/arrow-next.svg" alt="" />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a
                      href="dashboard-trasactions-detail.html"
                      class="card card-list d-block">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="images/dashboard-recent-transactions-3.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Sofa Lembut</div>
                          <div class="col-md-3">Ruli Gandari</div>
                          <div class="col-md-3">06 Maret 2023</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img src="images/arrow-next.svg" alt="" />
                          </div>
                        </div>
                      </div>
                    </a> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
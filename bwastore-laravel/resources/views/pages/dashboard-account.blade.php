@extends('layouts.dashboard')

@section('title')
    Dashboard | Account
@endsection
@section('content')

<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">My Account</h2>
                <p class="dashboard-subtitle">Update your current profile</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form
                      action="
                    "
                    >
                      <div class="card">
                        <div class="card-body">
                          <div class="row mb-2">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="addressOne">Your Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="addressOne"
                                  id="addressOne"
                                  value="Name"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="addressOne">Your E-mail</label>
                                <input
                                  type="email"
                                  class="form-control"
                                  name="addressOne"
                                  id="addressOne"
                                  value="Email"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="addressOne">Address 1</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="addressOne"
                                  id="addressOne"
                                  value="Setra Duta Cemara"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="addressOne">Address 2</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="addressOne"
                                  id="addressOne"
                                  value="Blok B2 No. 34"
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="Province">Province</label>
                                <select
                                  name="province"
                                  id="province"
                                  class="form-control"
                                >
                                  <option value="West Java">West Java</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="City">City</label>
                                <select
                                  name="city"
                                  id="city"
                                  class="form-control"
                                >
                                  <option value="Majalengka">Majalengka</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="Postal Code">Postal Code</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="postalCode"
                                  id="postalCode"
                                  value="45468"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="County">County</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="Country"
                                  id="Country"
                                  value="Indonesia"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="Mobile">Mobile</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="mobile"
                                  id="mobile"
                                  value="+62 822222"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
                              >
                                Save Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
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
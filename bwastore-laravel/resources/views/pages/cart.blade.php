@extends('layouts.app')

@section('title')
    Store | Cart
@endsection
@section('content')
<div class="page-content page-cart">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Cart</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart">
                <thead>
                  <tr>
                    <td>Image</td>
                    <td>Name &amp; Seller</td>
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 15%">
                      <img
                        src="images/product-detail-1.png"
                        alt=""
                        class="cart-image w-100"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Sofa Ternyaman</div>
                      <div class="product-subtitle">by Ruli Gandari</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">$29,112</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 15%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 15%">
                      <img
                        src="images/product-detail-3.png"
                        alt=""
                        class="cart-image w-100"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Sofa Ternyaman</div>
                      <div class="product-subtitle">by Ruli Gandari</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">$29,112</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 15%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 15%">
                      <img
                        src="images/product-detail-4.png"
                        alt=""
                        class="cart-image w-100"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Sofa Ternyaman</div>
                      <div class="product-subtitle">by Ruli Gandari</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">$29,112</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 15%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-4">Shipping Details</h2>
            </div>
          </div>
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
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
                <select name="province" id="province" class="form-control">
                  <option value="West Java">West Java</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="City">City</label>
                <select name="city" id="city" class="form-control">
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
                  value="Majalengka"
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
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <h2>Payment Informations</h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-4 col-md-2">
              <div class="product-title">$10</div>
              <div class="product-subtitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">$200</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">$500</div>
              <div class="product-subtitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success">$392.290</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a
                href="success.html"
                class="btn btn-success mt-4 px-4 btn-block"
              >
                Checkout Now</a
              >
            </div>
          </div>
        </div>
      </section>
    </div>@endsection
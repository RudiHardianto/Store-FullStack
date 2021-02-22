@extends('layouts.dashboard')

@section('title', 'Dashboard Transactions Details')

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">#STORE0839</h2>
      <p class="dashboard-subtitle">Transactions / Details</p>
    </div>
    <!-- Content -->
    <div class="dashboard-content" id="transactionsDetails">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img src="/images/product-details-dashboard.png" alt="" class="w-75 mb-3" />
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">Costumer Name</div>
                      <div class="product-subtitle">Rudi Aja</div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">Product Name</div>
                      <div class="product-subtitle">Martapura</div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">
                        Date of Transaction
                      </div>
                      <div class="product-subtitle">
                        12 Januari 2020
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">status</div>
                      <div class="product-subtitle text-danger">
                        Pending
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">Total Amount</div>
                      <div class="product-subtitle">$280,409</div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">Mobile</div>
                      <div class="product-subtitle">
                        +628 2020 11111
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mt-4">
                  <h5>Shipping Informations</h5>
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">Address I</div>
                      <div class="product-subtitle">
                        Setra Duta Cemara
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">Address II</div>
                      <div class="product-subtitle">
                        Blok B2 No. 34
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">Province</div>
                      <div class="product-subtitle">West Java</div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">City</div>
                      <div class="product-subtitle">West Java</div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">Postal Code</div>
                      <div class="product-subtitle">123999</div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="product-title">Country</div>
                      <div class="product-subtitle">Indonesia</div>
                    </div>
                    <div class="col-6 col-md-3">
                      <div class="product-title">Status</div>
                      <select name="status" id="status" class="form-control" v-model="status">
                        <option value="UNPAID">Unpaid</option>
                        <option value="PENDING">Pendding</option>
                        <option value="SHIPPING">Shipping</option>
                        <option value="SUCCESS">Success</option>
                      </select>
                    </div>
                    <template v-if="status == 'SHIPPING'">
                      <div class="col-6 col-md-3">
                        <div class="product-title">Input Resi</div>
                        <input type="text" class="form-control" name="resi" v-model="resi" />
                      </div>
                      <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-success btn-block mt-4">
                          Update Resi
                        </button>
                      </div>
                    </template>
                  </div>
                </div>
              </div>
              <div class="col-12 text-right mt-4">
                <button type="submit" class="btn btn-success btn-lg mt-4">
                  Save Now
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
  var transactionsDetails = new Vue({
    el: '#transactionsDetails',
    data: {
      status: 'SHIPPING',
      resi: 'JNE20839149021',
    },
  });
</script>
@endpush
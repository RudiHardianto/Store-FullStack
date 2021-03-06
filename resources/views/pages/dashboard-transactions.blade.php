@extends('layouts.dashboard')

@section('title', 'Dashboard Transactions')

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Transactions</h2>
      <p class="dashboard-subtitle">
        Big result start from the small one
      </p>
    </div>
    <!-- Content -->
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12 mt-2">
          <!-- Tabs -->
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-sellProduct-tab" data-toggle="pill" href="#pills-sellProduct"
                role="tab" aria-controls="pills-sellProduct" aria-selected="true">Sell Product</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-buyProduct-tab" data-toggle="pill" href="#pills-buyProduct" role="tab"
                aria-controls="pills-buyProduct" aria-selected="false">Buy Product</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-sellProduct" role="tabpanel"
              aria-labelledby="pills-sellProduct-tab">
              <!-- Transactions -->
              <a href="{{ route('dashboard-transaction-details') }}" class="card card-list d-block">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-1.png" alt="" />
                    </div>
                    <div class="col-md-4">Shirup Marzzan</div>
                    <div class="col-md-3">Angga Riski</div>
                    <div class="col-md-3">12 januari 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" alt="" />
                    </div>
                  </div>
                </div>
              </a>
              <a href="{{ route('dashboard-transaction-details') }}" class="card card-list d-block">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-2.png" alt="" />
                    </div>
                    <div class="col-md-4">LeBrone X</div>
                    <div class="col-md-3">Masayoshi</div>
                    <div class="col-md-3">11 januari 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" alt="" />
                    </div>
                  </div>
                </div>
              </a>
              <a href="{{ route('dashboard-transaction-details') }}" class="card card-list d-block">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-3.png" alt="" />
                    </div>
                    <div class="col-md-4">Soffa Lembutte</div>
                    <div class="col-md-3">Shayna</div>
                    <div class="col-md-3">15 januari 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" alt="" />
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tab-pane fade" id="pills-buyProduct" role="tabpanel" aria-labelledby="pills-buyProduct-tab">
              <!-- Transactions -->
              <a href="{{ route('dashboard-transaction-details') }}" class="card card-list d-block">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-2.png" alt="" />
                    </div>
                    <div class="col-md-4">LeBrone X</div>
                    <div class="col-md-3">Masayoshi</div>
                    <div class="col-md-3">11 januari 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" alt="" />
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
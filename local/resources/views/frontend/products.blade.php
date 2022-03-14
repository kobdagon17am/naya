@extends('main.maindash')
@section('title')
NAYA GREEN - ผลิตภัณฑ์
@endsection

@section('style')
@endsection

@section('mainbody')
<div class="bg-headG">
  <div class="container-fluid">
    <div class="titlePage">
      <div class="caption">
        <h1>ผลิตภัณฑ์</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item active" aria-current="page">ผลิตภัณฑ์</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="">
  <div class="container container-main py-4 py-xl-5">
    <div class="row">
      <div class="col-sm-12">
        <p class="text-center fw-semibold small">PRODUCTS</p>
        <h1 class="fw-normal text-center text-green">ผลิตภัณฑ์ NAYA GREEN</h1>
        <div class="lineY-center"></div>
        <p class="text-center">ทุกรายการ คิดค้น วิจัย ผลิตขึ้นมาเพื่อผู้บริโภค<br>โดยมุ่งเน้นความปลอดภัยต่อสุขภาพ</p>
        <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tabProduct" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-healthy-tab" data-bs-toggle="pill" data-bs-target="#pills-healthy" type="button" role="tab" aria-controls="pills-healthy" aria-selected="true">Naya Green Healthy</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-homeUse-tab" data-bs-toggle="pill" data-bs-target="#pills-homeUse" type="button" role="tab" aria-controls="pills-homeUse" aria-selected="false">Naya Green Home Use</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-kased-tab" data-bs-toggle="pill" data-bs-target="#pills-kased" type="button" role="tab" aria-controls="pills-kased" aria-selected="false">Naya Green Kased</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-healthy" role="tabpanel" aria-labelledby="pills-healthy-tab">
            <div class="row">
              <div class="col-lg-6 offset-lg-3 text-center">
                <h4 class="titleTypePd">NAYA GREEN <span class="fw-normal">HEALTHY</span></h4>
                <p>{!! isset($product_type) ? $product_type[0]->detail : '' !!}</p>
              </div>
            </div>
            <div class="row justify-content-center">
              @foreach($product_1 as $item => $value)
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{ url('products-detail') }}/{{ $value->id }}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="{{ isset($value->product_pics) ? asset('local/public/upload/product/'.$value->product_pics) : '' }}">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">{{ isset($value) ? $value->product_name_th : '' }}</h5>
                  </a>
                </div>
              </div>
              @endforeach
              <div class="row">
                <div class="col-sm-12">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      {!! $product_1->links() !!}
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-homeUse" role="tabpanel" aria-labelledby="pills-homeUse-tab">
            <div class="row">
              <div class="col-lg-6 offset-lg-3 text-center">
                <h4 class="titleTypePd">NAYA GREEN <span class="fw-normal">HOUSE USE</span></h4>
                <p>{!! isset($product_type) ? $product_type[1]->detail : '' !!}</p>
              </div>
            </div>
            <div class="row justify-content-center">
              @foreach($product_2 as $item => $value)
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{ url('products-detail') }}/{{ $value->id }}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="{{ isset($value->product_pics) ? asset('local/public/upload/product/'.$value->product_pics) : '' }}">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">{{ isset($value) ? $value->product_name_th : '' }}</h5>
                  </a>
                </div>
              </div>
              @endforeach
              <div class="row">
                <div class="col-sm-12">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      {!! $product_2->links() !!}
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-kased" role="tabpanel" aria-labelledby="pills-kased-tab">
            <div class="row">
              <div class="col-lg-6 offset-lg-3 text-center">
                <h4 class="titleTypePd">NAYA GREEN <span class="fw-normal">KASED</span></h4>
                <p>{!! isset($product_type) ? $product_type[2]->detail : '' !!}</p>
              </div>
            </div>
            <div class="row justify-content-center">
              @foreach($product_3 as $item => $value)
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{ url('products-detail') }}/{{ $value->id }}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="{{ isset($value->product_pics) ? asset('local/public/upload/product/'.$value->product_pics) : '' }}">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">{{ isset($value) ? $value->product_name_th : '' }}</h5>
                  </a>
                </div>
              </div>
              @endforeach
              <div class="row">
                <div class="col-sm-12">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      {!! $product_3->links() !!}
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')

@endsection
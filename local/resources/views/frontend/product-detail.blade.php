@extends('main.maindash')
@section('title')
NAYA GREEN - ผลิตภัณฑ์
@endsection

@section('style')
@endsection

@section('mainbody')
<div class="bg-light">
  <div class="container container-main">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0" style="--bs-breadcrumb-divider: '>';">
        <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
        <li class="breadcrumb-item"><a href="{{url('products')}}">ผลิตภัณฑ์</a></li>
        @foreach($product as $item => $value)
        <li class="breadcrumb-item active" aria-current="page">{{ isset($value) ? $value->product_name_th : '' }}</li>
        @endforeach
      </ol>
    </nav>
  </div>
</div>
<div class="">
  <div class="container container-small py-4">
    <div class="row">
      <div class="col-sm-6">
        @foreach($product as $item => $value)
        <img src="{{ isset($value->product_pics) ? asset('local/public/upload/product/'.$value->product_pics) : '' }}" width="420" height="420" class="mw-100 mb-2">
        @endforeach
      </div>
      <div class="col-sm-6">
        <p class="small text-muted mb-0">PRODUCTS</p>
        @foreach($product as $item => $value)
        <h4 class="text-green text-uppercase">{{ isset($value) ? $value->product_name_en : '' }}</h4>
        <p>{{ isset($value) ? $value->product_detail : '' }}</p>
        <div class="bg-lightGreen p-3">
          @php
          $num = $value->capsule;
          $cp = strval($num);

          $num1 = $value->retail_price;
          $rep = strval($num1);

          $num2 = $value->member_price;
          $mem = strval($num2);

          $num3 = $value->pv;
          $pv = strval($num3);
          @endphp

          @if(isset($value->capsule))
          <p>บรรจุ {{number_format((float)$cp)}} แคปซูล</p>
          @endif
          <dl class="row mb-0">
            @if(isset($value->retail_price))
            <dt class="col-sm-3 fw-normal">ราคาขายปลีก :</dt>
            <dd class="col-sm-9">{{number_format((float)$rep)}} บาท</dd>
            @endif

            @if(isset($value->member_price))
            <dt class="col-sm-3 fw-normal text-green">ราคาสมาชิก :</dt>
            <dd class="col-sm-9 text-green">{{number_format((float)$mem)}} บาท</dd>
            @endif

            @if(isset($value->pv))
            <dt class="col-sm-3 fw-medium text-green mb-lg-0">PV :</dt>
            <dd class="col-sm-9 text-green mb-lg-0">{{number_format((float)$pv)}} PV</dd>
            @endif
          </dl>
          <hr class="">
          @if(isset($value->FDA_No))
          <p class="mb-0">เลขที่ อย {{ isset($value) ? $value->FDA_No : '' }}</p>
          @endif
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<div class="bg-bottomPD">
  <div class="container container-main py-4">
    <ul class="nav nav-pills mb-3" id="pills-productsInside" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-pd01-tab" data-bs-toggle="pill" data-bs-target="#pills-pd01" type="button" role="tab" aria-controls="pills-pd01" aria-selected="true">รายละเอียดสินค้า</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-pd02-tab" data-bs-toggle="pill" data-bs-target="#pills-pd02" type="button" role="tab" aria-controls="pills-pd02" aria-selected="false">ส่วนประกอบสำคัญ</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-pd03-tab" data-bs-toggle="pill" data-bs-target="#pills-pd03" type="button" role="tab" aria-controls="pills-pd03" aria-selected="false">วิธีรับประทาน</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-pd04-tab" data-bs-toggle="pill" data-bs-target="#pills-pd04" type="button" role="tab" aria-controls="pills-pd04" aria-selected="false">คำเตือน</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-pd01" role="tabpanel" aria-labelledby="pills-pd01-tab">
        <p>{!! isset($product[0]) ? $product[0]->detail : '' !!}</p>
      </div>
      <div class="tab-pane fade" id="pills-pd02" role="tabpanel" aria-labelledby="pills-pd02-tab">
        <p>{!! isset($product[0]) ? $product[0]->detail_product_key : '' !!}</p>
      </div>
      <div class="tab-pane fade" id="pills-pd03" role="tabpanel" aria-labelledby="pills-pd03-tab">
        <p>{!! isset($product[0]) ? $product[0]->detail_product_how : '' !!}</p>
      </div>
      <div class="tab-pane fade" id="pills-pd04" role="tabpanel" aria-labelledby="pills-pd04-tab">
        <p>{!! isset($product[0]) ? $product[0]->detail_product_warnings : '' !!}</p>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')

@endsection
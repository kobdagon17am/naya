@extends('main.maindash')
@section('title')
NAYA GREEN - ข่าวสารและโปรโมชั่น
@endsection

@section('style')
@endsection

@section('mainbody')
<div class="bg-light">
  <div class="container container-main">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0" style="--bs-breadcrumb-divider: '>';">
        <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
        <li class="breadcrumb-item"><a href="products.php">ผลิตภัณฑ์</a></li>
        <li class="breadcrumb-item active" aria-current="page">นายา เซซามีน</li>
      </ol>
    </nav>
  </div>
</div>
<div class="">
  <div class="container container-small py-4">
    <div class="row">
      <div class="col-sm-6">
        <img src="images/products/pd01_inside.png" class="mw-100 mb-2">
      </div>
      <div class="col-sm-6">
        <p class="small text-muted mb-0">PRODUCTS</p>
        <h4 class="text-green text-uppercase">Naya Sesameen</h4>
        <p>ผลิตภัณฑ์เสริมอาหารน้ำมันงาชนิดแคปซูล</p>
        <div class="bg-lightGreen p-3">
          <p>บรรจุ 120 แคปซูล</p>
          <dl class="row mb-0">
            <dt class="col-sm-3 fw-normal">ราคาขายปลีก :</dt>
            <dd class="col-sm-9">3,000 บาท</dd>

            <dt class="col-sm-3 fw-normal text-green">ราคาสมาชิก :</dt>
            <dd class="col-sm-9 text-green">2,400 บาท</dd>

            <dt class="col-sm-3 fw-medium text-green mb-lg-0">PV :</dt>
            <dd class="col-sm-9 text-green mb-lg-0">1,000 PV</dd>
          </dl>
          <hr class="">
          <p class="mb-0">เลขที่ อย 13-1-01563-5-0001</p>
        </div>
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
        <p>นาย่าเซซามีน พลัส น้ำมันงาสกัดเย็น สกัดจากน้ำมันงา 2 ชนิด งาขาว, งาดำ, น้ำมันงามีสารเซซามีน มีคุณสมบัติทางชีวภาพสูงมาก</p>
        <ul>
          <li class="mb-2">กระตุ้นการเผาผลาญไขมัน ( Fatty Acid Oxidation )</li>
          <li class="mb-2">ปรับสมดุล คอเลสเตอรอล (Reduction of Cholesterol ) ทั้งในด้านการยับยั้งการสังเคราะห์ และการดูดซึม</li>
          <li class="mb-2">ปรับสมดุล ไขมันในเลือด ( Hypolipidemic Effect )</li>
          <li class="mb-2">เสริมประสิทธิภาพของวิตามินอีเพิ่มขึ้นถึง 10 เท่า (Enhancement of Vitamin E ) เหมาะสำหรับพัฒนาเป็นเครื่องสำอาง</li>
          <li class="mb-2">ยับยั้งปฏิกริยาการเติมออกซิเจนของอะมีลอยด์โปรตีน ( Neuroprotective Effect ) เป็นกลไกที่ช่วย เซลล์ความทรงจำ</li>
          <li class="mb-2">ปรับสมดุล ภาวะพร่องออกซิเจน (Effect on Hypoxic and Oxidative Stress )</li>
          <li class="mb-2">มีฤทธิ์ต้านอนุมูลอิสระสูง ( Antioxidant Effect )</li>
          <li class="mb-2">มีฤทธิ์ต่อต้านการอักเสบ ( Anti – Inflammatory Effect )</li>
        </ul>
      </div>
      <div class="tab-pane fade" id="pills-pd02" role="tabpanel" aria-labelledby="pills-pd02-tab">
        <p class="text-green">ส่วนประกอบสำคัญใน 1 แคปซูล :</p>
        <ul>
          <li>น้ำมันงาขาว / White Sesame Oil 200 มก.</li>
          <li>น้ำมันงาดำ / Black Sesame Oil 200 มก.</li>
        </ul>
      </div>
      <div class="tab-pane fade" id="pills-pd03" role="tabpanel" aria-labelledby="pills-pd03-tab">
        <p class="text-green">วิธีการรับประทาน :</p>
        <p>วันละ 2 แคปซูล</p>
      </div>
      <div class="tab-pane fade" id="pills-pd04" role="tabpanel" aria-labelledby="pills-pd04-tab">
        <p class="text-danger">คำเตือน :</p>
        <p>อ่านคำเตือนบนฉลากก่อนบริโภค</p>
      </div>
    </div>
  </div>
</div>
@section('js')
@endsection

@endsection
@extends('main.maindash')
@section('title')
NAYA GREEN - โอกาสทางธุรกิจ
@endsection

@section('style')
@endsection

@section('mainbody')
<div class="bg-headG">
  <div class="container-fluid">
    <div class="titlePage">
      <div class="caption">
        <h1>โอกาสทางธุรกิจ</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item active" aria-current="page">โอกาสทางธุรกิจ</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="">
  <div class="container container-small py-4 py-xl-5">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="fs-14 fw-light">แผนธุรกิจ</h3>
        <h1 class="text-green text-uppercase fw-normal fs-32">การเริ่มต้นธุรกิจมีให้เลือก 6 ระดับ</h1>
        <div class="lineY-left"></div>
        <div class="d-flex border-1 py-2">
          <div class="flex-shrink-0">
            <span class="fa-stack">
              <i class="fas fa-circle fa-stack-2x text-green"></i>
              <span class="fa-stack-1x fa-inverse">MB</span>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="fw-normal text-green my-1">ระดับ Member (MB)</h5>
            <p class="mb-0">มียอดซื้อสินค้าส่วนตัว 50 PV</p>
          </div>
        </div>
        <div class="d-flex border-1 py-2">
          <div class="flex-shrink-0">
            <span class="fa-stack">
              <i class="fas fa-circle fa-stack-2x text-green"></i>
              <span class="fa-stack-1x fa-inverse">A</span>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="fw-normal text-green my-1">ระดับ Agent (A)</h5>
            <p class="mb-0">มียอดซื้อสินค้าส่วนตัว 1,000 PV</p>
          </div>
        </div>
        <div class="d-flex border-1 py-2">
          <div class="flex-shrink-0">
            <span class="fa-stack">
              <i class="fas fa-circle fa-stack-2x text-green"></i>
              <span class="fa-stack-1x fa-inverse">S</span>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="fw-normal text-green my-1">ระดับ Super (S)</h5>
            <p class="mb-0">มียอดซื้อสินค้าส่วนตัว 2,000 PV</p>
          </div>
        </div>
        <div class="d-flex border-1 py-2">
          <div class="flex-shrink-0">
            <span class="fa-stack">
              <i class="fas fa-circle fa-stack-2x text-green"></i>
              <span class="fa-stack-1x fa-inverse">M</span>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="fw-normal text-green my-1">ระดับ Manager (M)</h5>
            <p class="mb-0">มียอดซื้อสินค้าส่วนตัว 4,000 PV</p>
          </div>
        </div>
        <div class="d-flex border-1 py-2">
          <div class="flex-shrink-0">
            <span class="fa-stack">
              <i class="fas fa-circle fa-stack-2x text-green"></i>
              <span class="fa-stack-1x fa-inverse">SM</span>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="fw-normal text-green my-1">ระดับ Senior Manager (SM)</h5>
            <p class="mb-0">มียอดซื้อสินค้าส่วนตัว 8,000 PV</p>
          </div>
        </div>
        <div class="d-flex border-1 py-2">
          <div class="flex-shrink-0">
            <span class="fa-stack">
              <i class="fas fa-circle fa-stack-2x text-green"></i>
              <span class="fa-stack-1x fa-inverse">D</span>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="fw-normal text-green my-1">ระดับ Director (D)</h5>
            <p class="mb-0">มียอดซื้อสินค้าส่วนตัว 16,000 PV</p>
          </div>
        </div>
        <div class="d-flex border-1 py-2">
          <div class="flex-shrink-0">
            <span class="fa-stack">
              <i class="fas fa-circle fa-stack-2x text-green"></i>
              <span class="fa-stack-1x fa-inverse">SD</span>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="fw-normal text-green my-1">ระดับ Senior Director (SD)</h5>
            <p class="mb-0">มียอดซื้อสินค้าส่วนตัว 32,000 PV</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="offer-pic">
          <img src="images/oportunity-pic01.jpg" class="imgBuild">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-greenF">
  <div class="container conatiner-main py-5">
    <h3 class="fs-14 text-center text-white fw-light">Earning</h3>
    <h1 class="text-white text-uppercase fw-normal fs-32 text-center">รับรายได้ง่าย ๆ 4 ช่องทาง</h1>
    <div class="lineY-center"></div>
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <div class="opportuny-box">
          <img src="images/opportunity-recommend.jpg">
          <div class="boxWhite">
            <div class="text-center">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x text-lightGreen"></i>
                <span class="fa-stack-1x text-green">1</span>
              </span>
              <h5 class="text-green fw-normal">โบนัสค่าแนะนำ 15%<br>(Fast Start Bonus)</h5>
              <p class="mb-0">คือ รายได้ที่เกิดจากการซื้อสินค้าของสมาชิกใหม่ที่เราแนะนตรง หรือสมาชิกเก่าที่เราแนะนำตรงกลับมาซื้อสินค้าใหม่ คำนวณจากคะแนนของสินค้าที่ซื้อ</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="opportuny-box">
          <img src="images/opportunity-manage.jpg">
          <div class="boxWhite">
            <div class="text-center">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x text-lightGreen"></i>
                <span class="fa-stack-1x text-green">2</span>
              </span>
              <h5 class="text-green fw-normal">โบนัสค่าบริหารทีม 30%<br>(Balance Team Bonus)</h5>
              <p class="mb-0">คือ รายได้จากการสร้างทีมงานนักธุรกิจและเครือข่ายผู้บริโภค คำนวณจากคะแนนทีมอ่อน</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="opportuny-box">
          <img src="images/opportunity-team01.jpg">
          <div class="boxWhite">
            <div class="text-center">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x text-lightGreen"></i>
                <span class="fa-stack-1x text-green">3</span>
              </span>
              <h5 class="text-green fw-normal">Auto-Ship Unilevel 5%</h5>
              <p class="mb-0">คือ โบนัสที่ได้จากคะแนนที่แลกซื้อสินค้าในแผน Unilevel จ่ายสูงสุดถึง 20 ชั้น</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="opportuny-box">
          <img src="images/opportunity-team02.jpg">
          <div class="boxWhite">
            <div class="text-center">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x text-lightGreen"></i>
                <span class="fa-stack-1x text-green">4</span>
              </span>
              <h5 class="text-green fw-normal">Matching Bonus 5%</h5>
              <p class="mb-0">คือ โบนัสที่ได้จากการคำนวณคะแนนของแผนบาลานซ์ทีมแข็ง จ่ายสูงสุด 5 ชั้น</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-opportuniry">
  <div class="container conatiner-main py-5">
    <h3 class="fs-14 text-center fw-light">Special Bonus</h3>
    <h1 class="text-uppercase fw-normal fs-32 text-center">โบนัสพิเศษสำหรับศูนย์บริการสมาชิก</h1>
    <div class="lineY-center"></div>
    <p class="text-gray text-center">เป็นโบนัสที่เกิดจากการคีย์ผ่านระบบให้กับสมาชิกใหม่ ของศูนย์ยริการสมาชิก</p>
    <div class="table-responsive mt-4 bg-white">
      <table class="table table-bordered table-striped mb-0">
        <thead class="bg-success text-white">
          <tr class="text-center">
            <th class="fw-normal align-middle">ศูนย์บริการสมาชิก</th>
            <th class="fw-normal align-middle">เปิดสต็อกสินค้า (PV)</th>
            <th class="fw-normal align-middle">ตำแหน่งทางธุรกิจ</th>
            <th class="fw-normal align-middle">โบนัสจากการคีย์ผ่านโมบาย</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <td>มินิโมบาย</td>
            <td>30,000 PV</td>
            <td>Senior Director</td>
            <td>1% ของ PV</td>
          </tr>
          <tr class="text-center">
            <td>โมบาย</td>
            <td>70,000 PV</td>
            <td>Senior Director</td>
            <td>2% ของ PV</td>
          </tr>
          <tr class="text-center">
            <td>เซ็นเตอร์</td>
            <td>100,000 PV</td>
            <td>Senior Director</td>
            <td>3% ของ PV</td>
          </tr>
          <tr class="text-center">
            <td>สำนักงานตัวแทน</td>
            <td>400,000 PV</td>
            <td>Senior Director</td>
            <td>6% ของ PV</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@section('js')
@endsection

@endsection
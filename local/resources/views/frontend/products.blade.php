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
            <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
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
                <p>ทางเลือกของการดูแลสุขภาพ "อาหารเสริม" ตอบโจทย์การดูแลสุขภาพทุกเพศทุกวัย แบบครบวงจร โดยการรวบรวมสารอาหารที่ทรงคุณค่า จากแหล่งวัตถุดิบชั้นเลิศจากทั่วทุกมุมโลก และเน้นในเรื่องของการใช้นวัตกรรมในกระบวนการผลิต ทำให้ผลิตภัณฑ์ที่ได้นั้น มีมาตรฐาน ความปลอดภัยระดับสากลและเห็นผลในการรับประทานที่ชัดเจน</p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd01.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">นายา เซซามีน</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd02.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">นายา เซซามีน พลัส 3 งา</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd03.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">นาลิซ่า</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd04.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">กาแฟ 3เอส ค๊อฟฟี่ พลัส</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd05.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">นายา คลอโรฟิลล์</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd06.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">แอปเปิ้ล & เบอรรี่ ดริ๊งค์</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd07.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">กาแฟ เอ็น วาย จี ค๊อฟฟี่ พลัส</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd08.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">กาแฟ แมนโกลด์ พลัส</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd09.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">อาซามิ</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-homeUse" role="tabpanel" aria-labelledby="pills-homeUse-tab">
            <div class="row">
              <div class="col-lg-6 offset-lg-3 text-center">
                <h4 class="titleTypePd">NAYA GREEN <span class="fw-normal">HOUSE USE</span></h4>
                <p>กลุ่มผลิตภัณฑ์สำหรับใช้ในครัวเรือน ที่เน้นสารสกัดจากสมุนไพรธรรมชาติ<br>ปลอดภัยต่อผู้ใช้ ไม่ทำลายสิ่งแวดล้อม</p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd10.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">นาย่า เฮิร์บ</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd11.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">เฮอเบิล เคลียร โซป</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd12.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">นาย่า โซป สูตรมะขาม</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd13.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">นาย่า โซป สูตรคาวตอง</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd14.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">นาย่า โซป สูตรมะขาม นมแพะ</h5>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd15.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">นาย่า โซป สูตรมังคุด</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-kased" role="tabpanel" aria-labelledby="pills-kased-tab">
            <div class="row">
              <div class="col-lg-6 offset-lg-3 text-center">
                <h4 class="titleTypePd">NAYA GREEN <span class="fw-normal">KASED</span></h4>
                <p>กลุ่มผลิตภัณฑ์ "อาหารเสริมสำหรับพืช" ที่ช่วยในการเพิ่มผลผลิตทางด้านการเกษตร<br>ฉีกกฎการกินอาหารของพืชโดยทั่วไป</p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-3">
                <div class="product-box mb-5">
                  <a href="{{url('products-detail')}}">
                    <div class="ratio ratio-1x1 mb-3">
                      <div class="content-overlay"></div>
                      <img src="images/products/pd16.png">
                      <div class="content-details fadeIn-bottom">
                        <p class="content-text">ดูรายละเอียด</p>
                      </div>
                    </div>
                    <h5 class="text-black">นาย่า แอตโต้</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@section('js')
@endsection

@endsection
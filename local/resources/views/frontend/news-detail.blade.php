@extends('main.maindash')
@section('title')
NAYA GREEN - ข่าวสารและโปรโมชั่น
@endsection

@section('style')
@endsection

@section('mainbody')
<div class="bg-headG">
  <div class="container-fluid">
    <div class="titlePage">
      <div class="caption">
        <h1>ข่าวสารและโปรโมชั่น</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
            <li class="breadcrumb-item"><a href="news.php">ข่าวสารและโปรโมชั่น</a></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="bg-light">
  <div class="container container-main py-4 py-xl-5">
    <div class="row">
      <div class="col-md-8 col-lg-9">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-newsD mb-3">
              <div class="card-body">
                <h5 class="card-title fw-normal">โปรโมชั่นประจำเดือน ตุลาคม #NayaGreen Promotion</h5>
                <p class="text-muted fs-12">11 กันยายน 2563 | <i class="fas fa-tags"></i> โปรโมชั่น</p>
                <hr>
                <div class="news-ContentD">
                  <p>โปรโมชั่นประจำเดือน ตุลาคม<br>#NayaGreenPromotion</p>
                  <p>ขอต้อนรับสู่ เดือน ตุลาคม ด้วย โปรเปิดเด็ดๆ กับ โปรโมชั่น #ถูกใจแม่ทีม<br>โปรแรงจริง เด็ดจริง บอกเลย ห้ามพลาด</p>
                  <ul>
                    <li>นาย่า เซซามีนพลัส 3 กระปุก รับเพิ่มอีก 1 กระปุก มูลค่า 3,000 .-</li>
                    <li>นาย่า เซซามีนพลัส 20 กระปุก รับเพิ่มอีก 10 กระปุก มูลค่า 24,000 .-</li>
                    <li>ผลิตภัณฑ์ รองพื้น ฌาร์ม 1 ขวด รับฟรี ฟองน้ำเกลี่ยรองพื้นทรงเห็ด</li>
                  </ul>
                  <p><b>รางวัลแนะนำสมาชิกใหม่</b></p>
                  <ul>
                    <li>แนะนำสมาชิกใหม่สมัครตำแหน่ง A ขึ้นไป 10 คน รับ นาย่า เซซามีน พลัส 2 กระปุก</li>
                    <li>แนะนำสมาชิกใหม่สมัครตำแหน่ง A ขึ้นไป 20 คน รับ นาย่า เซซามีน พลัส 5 กระปุก</li>
                    <li>แนะนำสมาชิกใหม่สมัครตำแหน่ง A ขึ้นไป 40 คน รับ นาย่า เซซามีน พลัส 12 กระปุก</li>
                  </ul>
                  <p>โปรโมชั่นนาย่ากรีนถูกใจแม่ทีม #NayaGreenPromotion</p>
                  <p>ตั้งแต่วันนี้ - 31 ต.ค. 64 เท่านั้น</p>
                  <p>#ของดีโปรโดน ต้องที่นาย่ากรีนเท่านั้น<br>#โปรเดือนตุลาคม #โปรดีถูกใจแม่ทีม<br>#สายรักสุขภาพ #NayaGreenPromotion<br>#โปรเด็ดสุดคุ้ม #โปรโมชั่นสุดพิเศษ</p>
                  <img src="images/news/news.webp" class="mw-100 w-50 mb-3"><br>
                  <img src="images/news/n03.png" class="mw-100 w-25 mb-3">
                  <img src="images/news/n04.png" class="mw-100 w-25 mb-3">
                  <img src="images/news/n05.png" class="mw-100 w-25 mb-3"><br>
                  <img src="images/news/n02.png" class="mw-100 w-50 mb-3">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-3">
        <div class="bg-white">
          <div class="px-3 pt-3">
            <h5 class="fw-normal">หมวดหมู่</h5>
            <ul class="nav flex-column" id="cateNews">
              <li class="nav-item">
                <a class="px-0 nav-link active" aria-current="page" href="#"><i class="fas fa-angle-right"></i> ข่าวสาร (13)</a>
              </li>
              <li class="nav-item">
                <a class="px-0 nav-link" href="#"><i class="fas fa-angle-right"></i> โปรโมชั่น (1)</a>
              </li>
              <li class="nav-item">
                <a class="px-0 nav-link" href="#"><i class="fas fa-angle-right"></i> ภาพกิจกรรม (6)</a>
              </li>
            </ul>
          </div>
          <hr>
          <div class="px-3 pb-3">
            <h5 class="fw-normal">ข่าวสารล่าสุด</h5>
            <a href="{{url('news-detail')}}" class="link-newRecent">
              <div class="d-flex box-recent mb-3">
                <div class="flex-shrink-0">
                  <img src="images/news/news.webp" alt="...">
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5>โปรโมชั่นประจำเดือน ตุลาคม #NayaGreen Promotion</h5>
                  <p class="fs-12 mb-0 text-muted">11 กันยายน 2563</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@section('js')
@endsection

@endsection
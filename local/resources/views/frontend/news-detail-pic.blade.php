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
                <h5 class="card-title fw-normal">กิจกรรมเสริมสร้างกำลังใจและใกล้ชิดผู้บริหารฯ</h5>
                <p class="text-muted fs-12">11 กันยายน 2563 | <i class="fas fa-tags"></i> ภาพกิจกรรม</p>
                <hr>
                <div class="news-ContentD">
                  <p>กิจกรรมเสริมสร้างความใกล้ชิดความเข้าใจในงานสมาชิกกับผู้บริหารบริษัทนาย่ากรีน จำกัด ครั้งที่1</p>
                  <a href="images/activityImg/sample01.png" data-fancybox="activity01">
                    <img src="images/activityImg/sample01.png" class="galleryImg">
                  </a>
                  <a href="images/activityImg/sample02.png" data-fancybox="activity01">
                    <img src="images/activityImg/sample02.png" class="galleryImg">
                  </a>
                  <a href="images/activityImg/sample03.png" data-fancybox="activity01">
                    <img src="images/activityImg/sample03.png" class="galleryImg">
                  </a>
                  <a href="images/activityImg/sample04.png" data-fancybox="activity01">
                    <img src="images/activityImg/sample04.png" class="galleryImg">
                  </a>
                  <a href="images/activityImg/sample05.png" data-fancybox="activity01">
                    <img src="images/activityImg/sample05.png" class="galleryImg">
                  </a>
                  <a href="images/activityImg/sample06.png" data-fancybox="activity01">
                    <img src="images/activityImg/sample06.png" class="galleryImg">
                  </a>
                  <a href="images/activityImg/sample07.png" data-fancybox="activity01">
                    <img src="images/activityImg/sample07.png" class="galleryImg">
                  </a>
                  <a href="images/activityImg/sample08.png" data-fancybox="activity01">
                    <img src="images/activityImg/sample08.png" class="galleryImg">
                  </a>
                  <a href="images/activityImg/sample09.png" data-fancybox="activity01">
                    <img src="images/activityImg/sample09.png" class="galleryImg">
                  </a>
                  <a href="images/activityImg/sample10.png" data-fancybox="activity01">
                    <img src="images/activityImg/sample10.png" class="galleryImg">
                  </a>
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
            <a href="news-detail.php" class="link-newRecent">
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
            <a href="news-detail.php" class="link-newRecent">
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
            <a href="news-detail.php" class="link-newRecent">
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
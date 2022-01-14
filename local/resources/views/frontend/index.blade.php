@extends('main.maindash')
@section('mainbody')
    <div class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 px-0">
                    <div class="owl-carousel owl-theme" id="homeSlide">
                        <div class="item"><img src="images/banner/banner01.png" class="mw-100 w-100"></div>
                        <div class="item"><img src="images/banner/banner02.png" class="mw-100 w-100"></div>
                        <div class="item"><img src="images/banner/banner03.png" class="mw-100 w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container container-main py-4 py-xl-5">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="text-uppercase fw-semibold fs-30">Welcome To</h3>
                    <h1 class="text-green text-uppercase fw-semibold fs-48">Naya Green</h1>
                    <div class="lineY-left"></div>
                    <div class="textInd50 my-4 my-lg-5">เรามีความแตกต่างจากธุรกิจทั่วไป เราเน้นให้ความสำคัญกับสมาชิกเป็นหลัก มีความโปร่งใส และมีแผนการตลาดที่ตอบโจทย์กับนักธุรกิจทุคนอย่างชัดเจนจ จ่างง่าย ไม่ซับซ้อน ตรงไปตรงมา และในตอนนี้ NAYA GREEN กำลังดำเนินการก่อสร้างสำนักงานแห่งใหม่ บนเนื้อที่มากกว่า 10 ไร่ ประกอบด้วย หอประชุมขนาดใหญ่ ขนาดกลาง และ ห้องประชุมย่อย อาคารสำนักงาน อาคารรับรอง เพื่อรองรับการเจริญเติบโตของสมาชิก ซึ่งสิ่งเหล่านี้จะเป็นการยืนยันให้เห็นถึงความตั้งใจของเรา และเน้นย้ำให้เห็นถึงความแตกต่าง ของธุรกิจ NAYA GREEN จากธุรกิจอื่นๆ อย่างชัดเจน</div>
                    <a href="" class="custom-btn btn-greenYb"><span>อ่านเพิ่มเติม</span></a>
                </div>
                <div class="col-sm-6 py-4 py-md-0">
                    <div class="ratio ratio-1x1">
                        <div><img src="images/office-building.jpg" class="mw-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 px-0">
                    <div class="ratio ratio-21x9">
                        <iframe width="100%" src="https://www.youtube.com/embed/2J7xlDH4QkA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container container-main py-4 py-xl-5">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="fw-normal text-center">ผลิตภัณฑ์ <span class="text-green fw-semibold">NAYA GREEN</span></h1>
                    <div class="lineY-center"></div>
                    <ul class="nav nav-pills mb-md-3 justify-content-center" id="pills-tabProduct" role="tablist">
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
                            <div class="container">
                                <p class="text-center">ทางเลือกของการดูแลสุขภาพ "อาหารเสริม" ตอบโจทย์การดูแลสุขภาพทุกเพศทุกวัย แบบครบวงจร โดยการรวบรวมสารอาหารที่ทรงคุณค่า จากแหล่งวัตถุดิบชั้นเลิศจากทั่วทุกมุมโลก</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <div class="product-box mb-3">
                                        <a href="product-detail.php">
                                            <div class="ratio ratio-1x1 mb-3">
                                                <div class="content-overlay"></div>
                                                <img src="images/products/pd01.png">
                                                <div class="content-details fadeIn-bottom">
                                                    <p class="content-text">ดูเพิ่มเติม</p>
                                                </div>
                                            </div>
                                            <h5 class="text-black">นายา เซซามีน</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="product-box mb-3">
                                        <a href="product-detail.php">
                                            <div class="ratio ratio-1x1 mb-3">
                                                <div class="content-overlay"></div>
                                                <img src="images/products/pd02.png">
                                                <div class="content-details fadeIn-bottom">
                                                    <p class="content-text">ดูเพิ่มเติม</p>
                                                </div>
                                            </div>
                                            <h5 class="text-black">นายา เซซามีน พลัส 3 งา</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="product-box mb-3">
                                        <a href="product-detail.php">
                                            <div class="ratio ratio-1x1 mb-3">
                                                <div class="content-overlay"></div>
                                                <img src="images/products/pd03.png">
                                                <div class="content-details fadeIn-bottom">
                                                    <p class="content-text">ดูเพิ่มเติม</p>
                                                </div>
                                            </div>
                                            <h5 class="text-black">นาลิซ่า</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="product-box mb-3">
                                        <a href="product-detail.php">
                                            <div class="ratio ratio-1x1 mb-3">
                                                <div class="content-overlay"></div>
                                                <img src="images/products/pd04.png">
                                                <div class="content-details fadeIn-bottom">
                                                    <p class="content-text">ดูเพิ่มเติม</p>
                                                </div>
                                            </div>
                                            <h5 class="text-black">กาแฟ 3เอส ค๊อฟฟี่ พลัส</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-homeUse" role="tabpanel" aria-labelledby="pills-homeUse-tab">
                            <div class="container">
                                <p class="text-center">กลุ่มผลิตภัณฑ์สำหรับใช้ในครัวเรือน ที่เน้นสารสกัดจากสมุนไพรธรรมชาติ ปลอดภัยต่อผู้ใช้ ไม่ทำลายสิ่งแวดล้อม</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <div class="product-box mb-5">
                                        <a href="product-detail.php">
                                            <div class="ratio ratio-1x1 mb-3">
                                                <div class="content-overlay"></div>
                                                <img src="images/products/pd10.png">
                                                <div class="content-details fadeIn-bottom">
                                                    <p class="content-text">ดูเพิ่มเติม</p>
                                                </div>
                                            </div>
                                            <h5 class="text-black">นาย่า เฮิร์บ</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="product-box mb-5">
                                        <a href="product-detail.php">
                                            <div class="ratio ratio-1x1 mb-3">
                                                <div class="content-overlay"></div>
                                                <img src="images/products/pd11.png">
                                                <div class="content-details fadeIn-bottom">
                                                    <p class="content-text">ดูเพิ่มเติม</p>
                                                </div>
                                            </div>
                                            <h5 class="text-black">เฮอเบิล เคลียร โซป</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="product-box mb-5">
                                        <a href="product-detail.php">
                                            <div class="ratio ratio-1x1 mb-3">
                                                <div class="content-overlay"></div>
                                                <img src="images/products/pd12.png">
                                                <div class="content-details fadeIn-bottom">
                                                    <p class="content-text">ดูเพิ่มเติม</p>
                                                </div>
                                            </div>
                                            <h5 class="text-black">นาย่า โซป สูตรมะขาม</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="product-box mb-5">
                                        <a href="product-detail.php">
                                            <div class="ratio ratio-1x1 mb-3">
                                                <div class="content-overlay"></div>
                                                <img src="images/products/pd13.png">
                                                <div class="content-details fadeIn-bottom">
                                                    <p class="content-text">ดูเพิ่มเติม</p>
                                                </div>
                                            </div>
                                            <h5 class="text-black">นาย่า โซป สูตรคาวตอง</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-kased" role="tabpanel" aria-labelledby="pills-kased-tab">
                            <div class="container">
                                <p class="text-center">กลุ่มผลิตภัณฑ์ "อาหารเสริมสำหรับพืช" ที่ช่วยในการเพิ่มผลผลิตทางด้านการเกษตร</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <div class="product-box mb-5">
                                        <a href="product-detail.php">
                                            <div class="ratio ratio-1x1 mb-3">
                                                <div class="content-overlay"></div>
                                                <img src="images/products/pd16.png">
                                                <div class="content-details fadeIn-bottom">
                                                    <p class="content-text">ดูเพิ่มเติม</p>
                                                </div>
                                            </div>
                                            <h5 class="text-black">นาย่า แอตโต้</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="products.php" class="custom-btn btn-greenYb"><span>ดูเพิ่มเติม</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-leaf">
        <div class="container container-small py-4 py-xl-5">
            <h1 class="fw-normal text-center fw-semibold">ข่าวสารล่าสุด</h1>
            <div class="lineY-center"></div>
            <div class="row marginBNewsH">
                <div class="col-sm-5">
                    <div class="box-newsHome mb-4">
                        <div class="ratio ratio-1x1">
                            <img src="images/news/n01.png">
                        </div>
                        <div class="dateN">
                            <div class="line"></div> 11 กันยายน 2563
                        </div>
                        <div class="titleNewsH newsHMain">โปรโมชั่นประจำเดือน ตุลาคม #NayaGreenPromotion</div>
                        <div class="detailNewsH newsHMain">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui ut ornare lectus sit amet est placerat in. Nibh praesent tristique magna sit amet purus. Facilisis mauris sit amet massa. Suscipit tellus mauris a diam maecenas sed enim ut. </div>
                        <a href="news-detail.php" class="stretched-link">อ่านเพิ่มเติม <div class="arrow-right"></div></a>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="box-newsHome mb-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="ratio ratio-1x1">
                                    <img src="images/news/n02.png">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dateN">
                                    <div class="line"></div> 1 กันยายน 2563
                                </div>
                                <div class="titleNewsH">โปรโมชั่นประจำเดือน ตุลาคม #NayaGreenPromotion</div>
                                <div class="detailNewsH">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui ut ornare lectus sit amet est placerat in. Nibh praesent tristique magna sit amet purus. Facilisis mauris sit amet massa. Suscipit tellus mauris a diam maecenas sed enim ut. </div>
                                <a href="news-detail.php" class="stretched-link">อ่านเพิ่มเติม <div class="arrow-right"></div></a>
                            </div>
                        </div>
                    </div>
                    <div class="box-newsHome mb-3">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="ratio ratio-1x1">
                                    <img src="images/news/n02.png">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dateN">
                                    <div class="line"></div> 17 สิงหาคม 2563
                                </div>
                                <div class="titleNewsH">โปรโมชั่นประจำเดือน ตุลาคม #NayaGreenPromotion</div>
                                <div class="detailNewsH">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui ut ornare lectus sit amet est placerat in. Nibh praesent tristique magna sit amet purus. Facilisis mauris sit amet massa. Suscipit tellus mauris a diam maecenas sed enim ut. </div>
                                <a href="news-detail.php" class="stretched-link">อ่านเพิ่มเติม <div class="arrow-right"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-green">
        <div class="container container-main py-4 py-xl-5">
            <div class="text-center text-white">
                <img src="images/logo.png" class="mw-100 contactLogo">
                <h5 class="fw-normal">บริษัท นาย่า กรีน จำกัด</h5>
                <p class="mb-4 mb-lg-5">33/3 หมู่ 3 ตำบลจอมทอง อำเภอเมือง จังหวัด พิษณุโลก 65000</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="contactBox bg-greenM">
                        <div class="iconContact">
                            <i class="fas fa-phone text-warning"></i>
                        </div>
                        <p class="mb-0 text-white heightDcontact">055-000716</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contactBox bg-greenM">
                        <div class="iconContact">
                            <i class="fas fa-clock text-warning"></i>
                        </div>
                        <p class="mb-0 text-white heightDcontact">เวลาทำการ 08.30 - 17.30น.<br>หยุดทุกวันอาทิตย์ และ วันนักขัตฤกษ์</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contactBox bg-greenM">
                        <div class="iconContactT">
                            <h5 class="text-warning fw-normal mb-0">สื่อสังคม</h5>
                        </div>
                        <div class="row heightDcontact">
                            <div class="col-4 text-center">
                                <a href=""><i class="fab fa-facebook-f fa-lg"></i></a>
                            </div>
                            <div class="col-4 text-center">
                                <a href=""><i class="fab fa-line fa-lg"></i></a>
                            </div>
                            <div class="col-4 text-center">
                                <a href=""><i class="fab fa-youtube fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gm bg-green">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 px-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.9915090776426!2d100.23355496529481!3d16.876314571784228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dfa3aae190df11%3A0xdaf4bbb99c574b9a!2zTmF5YSBHcmVlbiDguJnguLLguKLguYjguLLguIHguKPguLXguJkgTnlnMjAxNSDguITguKXguLHguIfguKrguLTguJnguITguYnguLIg4Lia4Lij4Li04Lip4Lix4LiXIOC4meC4suC4ouC5iOC4suC4geC4o-C4teC4mSDguIjguLPguIHguLHguJQ!5e0!3m2!1sen!2sth!4v1636945500748!5m2!1sen!2sth" class="googleMapSize" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    @endsection

@extends('main.maindash')
@section('title')
NAYA GREEN - สำนักงานตัวแทน
@endsection

@section('style')
@endsection

@section('mainbody')
<div class="bg-headG">
    <div class="container-fluid">
        <div class="titlePage">
            <div class="caption">
                <h1>สำนักงานตัวแทน</h1>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active" aria-current="page">สำนักงานตัวแทน</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
    <div class="container container-small py-4">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav nav-pills justify-content-center nav-fill" id="pills-tabOffice" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-central-tab" data-bs-toggle="pill" data-bs-target="#pills-central" type="button" role="tab" aria-controls="pills-central" aria-selected="true">ภาคกลาง</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-northern-tab" data-bs-toggle="pill" data-bs-target="#pills-northern" type="button" role="tab" aria-controls="pills-northern" aria-selected="false">ภาคเหนือ</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-northeastern-tab" data-bs-toggle="pill" data-bs-target="#pills-northeastern" type="button" role="tab" aria-controls="pills-northeastern" aria-selected="false">ภาคตะวันออกเฉียงเหนือ</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-bangkokSurrounding-tab" data-bs-toggle="pill" data-bs-target="#pills-bangkokSurrounding" type="button" role="tab" aria-controls="pills-bangkokSurrounding" aria-selected="false">กรุงเทพฯและปริมลฑล</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="bg-white">
    <div class="container container-main py-4 py-xl-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-central" role="tabpanel" aria-labelledby="pills-central-tab">
                        <h4 class="text-center fw-normal">สำนักงานตัวแทน NAYA GREEN ภาคกลาง</h4>
                        <div class="linegreenY"></div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central01.png" class="img-circleOffice">
                                    <h5>คุณปรีชาศิวัต ศิริประชาวรัตถ์</h5>
                                    <p>สำนักงานตัวแทนเขต จ.พิษณุโลก</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central02.png" class="img-circleOffice">
                                    <h5>คุณประนอม เรืองคำ</h5>
                                    <p>สำนักงานตัวแทนเขตบางระกำ จ. พิษณุโลก</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central03.png" class="img-circleOffice">
                                    <h5>คุณประภาวี สิงห์ลอ</h5>
                                    <p>สำนักงานตัวแทนเขต จ.พิษณุโลก</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central04.png" class="img-circleOffice">
                                    <h5>คุณวุฑฒินันท์ บุญธรรม</h5>
                                    <p>สำนักงานตัวแทนเขต จ.พิษณุโลก</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central05.png" class="img-circleOffice">
                                    <h5>คุณกัลยกร เฉยพ่วง</h5>
                                    <p>สำนักงานตัวแทนเขต จ.พิษณุโลก</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central06.png" class="img-circleOffice">
                                    <h5>คุณประนอม เรืองคำ</h5>
                                    <p>สำนักงานตัวแทนเขตบางระกำ จ. พิษณุโลก</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central07.png" class="img-circleOffice">
                                    <h5>คุณรัชชานนท์ ม่วงน้อย</h5>
                                    <p>สำนักงานตัวแทนเขตเขาทราย จ. พิจิตร</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central08.png" class="img-circleOffice">
                                    <h5>คุณศุดญา ศรีนาราง</h5>
                                    <p>สำนักงานตัวแทนเขตบึงนาราง จ.พิจิตร</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central09.png" class="img-circleOffice">
                                    <h5>คุณสุทธิพจน์ ธารบัวสวรรค์</h5>
                                    <p>สำนักงานตัวแทนเขต จ.นครสวรรค์</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central10.png" class="img-circleOffice">
                                    <h5>คุณวันทนา เลิศประพันธ์</h5>
                                    <p>สำนักงานตัวแทนเขต จ.สุโขทัย</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central11.png" class="img-circleOffice">
                                    <h5>คุณพรกนก อิ่มใจ</h5>
                                    <p>สำนักงานตัวแทนเขต จ.กำแพงเพชร</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central12.png" class="img-circleOffice">
                                    <h5>คุณบุณรอด ร้อยพรมมา</h5>
                                    <p>สำนักงานตัวแทนเขต จ.กำแพงเพชร</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central13.png" class="img-circleOffice">
                                    <h5>คุณพร้อมสิริ รัตนธนาพัฒน์</h5>
                                    <p>สำนักงานตัวแทนเขต จ.สุพรรณบุรี</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central14.png" class="img-circleOffice">
                                    <h5>คุณวีระ มัธยมำ</h5>
                                    <p>สำนักงานตัวแทนเขต จ.สุพรรณบุรี</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central15.png" class="img-circleOffice">
                                    <h5>คุณปรีชา วราศรัย</h5>
                                    <p>สำนักงานตัวแทนเขต จ.กาญจนบุรี</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central16.png" class="img-circleOffice">
                                    <h5>คุณสมพิศ ประกอบทอง</h5>
                                    <p>สำนักงานตัวแทนเขต จ.เพชรบูรณ์</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central17.png" class="img-circleOffice">
                                    <h5>คุณกฤษณา จันทร์เกิน</h5>
                                    <p>สำนักงานตัวแทนเขต จ.เพชรบูรณ์</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_central18.png" class="img-circleOffice">
                                    <h5>คุณยงยุทธ ปันนาำ</h5>
                                    <p>สำนักงานตัวแทนเขตหนองไผ่ จ. เพชรบูรณ์</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-northern" role="tabpanel" aria-labelledby="pills-northern-tab">
                        <h4 class="text-center fw-normal">สำนักงานตัวแทน NAYA GREEN ภาคเหนือ</h4>
                        <div class="linegreenY"></div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_north01.png" class="img-circleOffice">
                                    <h5>คุณธนกร วุฐิการณ์</h5>
                                    <p>สำนักงานตัวแทนเขต จ.เชียงใหม่</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_north02.png" class="img-circleOffice">
                                    <h5>คุณชาญชัย สายยืดำ</h5>
                                    <p>สำนักงานตัวแทนเขต จ.แพร่</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_north03.png" class="img-circleOffice">
                                    <h5>คุณณัฐวรรณ์ คำป่าแลว</h5>
                                    <p>สำนักงานตัวแทนเขต จ.ลำปาง</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_north04.png" class="img-circleOffice">
                                    <h5>คุณรุ่งทิวา รัตนา</h5>
                                    <p>สำนักงานตัวแทนเขต จ.เชียงใหม่</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-northeastern" role="tabpanel" aria-labelledby="pills-northeastern-tab">
                        <h4 class="text-center fw-normal">สำนักงานตัวแทน NAYA GREEN ภาคตะวันออกเฉียงเหนือ</h4>
                        <div class="linegreenY"></div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_northeast01.png" class="img-circleOffice">
                                    <h5>คุณละมัย พรมสด</h5>
                                    <p>สำนักงานตัวแทนเขต จ.บึงกาฬ</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_northeast02.png" class="img-circleOffice">
                                    <h5>คุณพุทธชนพัฒน์ พูนศรีนันทพัทรำ</h5>
                                    <p>สำนักงานตัวแทนเขต จ.ขอนแก่น</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_northeast03.png" class="img-circleOffice">
                                    <h5>คุณวิรัช มณีโชติ</h5>
                                    <p>สำนักงานตัวแทนเขต จ.อุดรธานี</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-bangkokSurrounding" role="tabpanel" aria-labelledby="pills-bangkokSurrounding-tab">
                        <h4 class="text-center fw-normal">สำนักงานตัวแทน NAYA GREEN กรุงเทพฯและปริมลฑล</h4>
                        <div class="linegreenY"></div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_bkkSurround01.png" class="img-circleOffice">
                                    <h5>คุณปัณฑิตา ปั้นวอ</h5>
                                    <p>สำนักงานตัวแทนเขต จ.ชลบุรี</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card rounded-0 p-3 text-center mb-3">
                                    <img src="images/office/office_bkkSurround02.png" class="img-circleOffice">
                                    <h5>คุณญาติกา ไพรวงษ์</h5>
                                    <p> สำนักงานตัวแทน จังหวัดอ่างทอง</p>
                                    <a href="" class="btn btn-icon btn-green"><i class="fas fa-phone"></i></a>
                                    <a href="" class="btn btn-icon btn-green"><i class="fab fa-line"></i></a>
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
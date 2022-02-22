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
            <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
            <!-- <img src="" class="breadcrumb-item" alt="..."> -->
            <li class="breadcrumb-item active" aria-current="page">ข่าวสารและโปรโมชั่น</li>
          </ol>
      </div>
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
          @foreach($news_1 as $item => $value)
          @php
          $con_date = date('d-m-Y', strtotime($value->new_date));
          $ex_dmy = explode('-',$con_date);
          $date = $ex_dmy[0];
          $month = $ex_dmy[1];
          if($month == '01'){
          $month = 'มกราคม';
          }elseif($month == '02'){
          $month = 'กุมภาพันธ์';
          }elseif($month == '03'){
          $month = 'มีนาคม';
          }elseif($month == '04'){
          $month = 'เมษายน';
          }elseif($month == '05'){
          $month = 'พฤษภาคม';
          }elseif($month == '06'){
          $month = 'มิถุนายน';
          }elseif($month == '07'){
          $month = 'กรกฎาคม';
          }elseif($month == '08'){
          $month = 'สิงหาคม';
          }elseif($month == '09'){
          $month = 'กันยายน';
          }elseif($month == '10'){
          $month = 'ตุลาคม';
          }elseif($month == '11'){
          $month = 'พฤศจิกายน';
          }elseif($month == '12'){
          $month = 'ธันวาคม';
          }else{
          $month = '';
          }
          $year = substr($ex_dmy[2],0,4)+543;
          @endphp
          <div class="col-md-6">
            <div class="card card-news">
              <img src="{{ isset($value->new_pics) ? asset('local/public/upload/news/'.$value->new_pics) : '' }}" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="dateNews">{{ $date . ' '.  $month . ' ' . $year}}</div>
                <p class="tagCate"><i class="fas fa-tags"></i> <span class="text-muted">{{ isset($value) ? $value->new_type_name : '' }}</span></p>
                <h5 class="card-title">{{ isset($value) ? $value->title : '' }}</h5>
                <p class="card-text">{{ isset($value) ? $value->new_detail_title : '' }}</p>
                <a href="{{ url('news-detail') }}/{{ $value->id }}" class="btn btn-outline-dark rounded-0 stretched-link">อ่านเพิ่มเติม</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                {!! $news_1->links() !!}
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-3">
        <div class="bg-white">
          <div class="px-3 pt-3">
            <h5 class="fw-normal">หมวดหมู่</h5>
            <ul class="nav flex-column" id="cateNews">
              <li class="nav-item">
                <a class="px-0 nav-link active" aria-current="page" href="{{url('news/info')}}"><i class="fas fa-angle-right"></i> ข่าวสาร ({{ $news_1->total() }})</a>
              </li>
              <li class="nav-item">
                <a class="px-0 nav-link" href="{{url('news/promotion')}}"><i class="fas fa-angle-right"></i> โปรโมชั่น ({{ $news_2->total() }})</a>
              </li>
              <li class="nav-item">
                <a class="px-0 nav-link" href="{{url('news/ac_picture')}}"><i class="fas fa-angle-right"></i> ภาพกิจกรรม ({{ $news_3->total() }})</a>
              </li>
            </ul>
          </div>
          <hr>
          <div class="px-3 pb-3">
            <h5 class="fw-normal">ข่าวสารล่าสุด</h5>
            @foreach($news_p as $item => $value)
            @php
            $con_date = date('d-m-Y', strtotime($value->new_date));
            $ex_dmy = explode('-',$con_date);
            $date = $ex_dmy[0];
            $month = $ex_dmy[1];
            if($month == '01'){
            $month = 'มกราคม';
            }elseif($month == '02'){
            $month = 'กุมภาพันธ์';
            }elseif($month == '03'){
            $month = 'มีนาคม';
            }elseif($month == '04'){
            $month = 'เมษายน';
            }elseif($month == '05'){
            $month = 'พฤษภาคม';
            }elseif($month == '06'){
            $month = 'มิถุนายน';
            }elseif($month == '07'){
            $month = 'กรกฎาคม';
            }elseif($month == '08'){
            $month = 'สิงหาคม';
            }elseif($month == '09'){
            $month = 'กันยายน';
            }elseif($month == '10'){
            $month = 'ตุลาคม';
            }elseif($month == '11'){
            $month = 'พฤศจิกายน';
            }elseif($month == '12'){
            $month = 'ธันวาคม';
            }else{
            $month = '';
            }
            $year = substr($ex_dmy[2],0,4)+543;
            @endphp
            <a href="{{ url('news-detail') }}/{{ $value->id }}" class="link-newRecent">
              <div class="d-flex box-recent mb-3">
                <div class="flex-shrink-0">
                  <img src="{{ isset($value->new_pics) ? asset('local/public/upload/news/'.$value->new_pics) : '' }}" alt="...">
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5>{{ isset($value) ? $value->title : '' }}</< /h5>
                    <p class="fs-12 mb-0 text-muted">{{ $date . ' '.  $month . ' ' . $year}}</p>
                </div>
              </div>
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')

@endsection
@extends('front.layout.master')

@section('main_content')
<section class="banner" style="background-image:  url('uploads/slide-1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="banner-content">
          <h2>Chuyến đi đến các thành phố đẹp</h2>
          <p>
            Khám phá các thành phố sôi động, đắm chìm trong các nền văn hóa đa dạng, đến thăm các địa danh,
            thưởng thức các món ăn địa phương và gắn kết với người dân địa phương mang đến những trải nghiệm khó quên.
          </p>
          <a class="btn btn-primary">
            Đọc thêm
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="special">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <!-- Phần bên trái -->
          <div class="col-md-6">
            <div class="left-side">
              <div class="inner">
                <h3>Chào Mừng Đến với Chúng Tôi</h3>
                <p>
                  Tại đây, nhiệm vụ của chúng tôi là biến những giấc mơ du lịch thành hiện thực bằng cách chứng minh những trải nghiệm được cá nhân hóa và đáng nhớ. Chúng tôi tận dụng chuyên môn và các đối tác đáng tin cậy của chúng tôi để đảm bảo mọi chuyến đi là liền mạch và thú vị.
                </p>
                <p>
                  Chúng tôi tin rằng du lịch thúc đẩy sự phát triển cá nhân và hiểu biết văn hóa. Mục tiêu của chúng tôi là giúp khám phá các điểm đến mới và kết nối với các nền văn hóa thợ lặn. Chúng tôi thúc đẩy du lịch bền vững đến các cộng đồng tác động tích cực và bảo tồn vẻ đẹp hành tinh của chúng tôi.
                </p>
                <a href="#" class="btn btn-primary">Đọc Thêm</a>
              </div>
            </div>
          </div>
          <!-- Phần bên phải -->
          <div class="col-md-6">
            <div class="right-side" style="background-image: url(uploads/about-1.jpg);">
              <!-- Phần background-image được thiết lập trong CSS -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container py-5">
    <h1 class="text-center mb-3">Những Địa Điểm Nổi Tiếng</h1>
    <p class="text-center text-muted mb-5">Khám phá những địa điểm du lịch nổi tiếng nhất</p>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="https://placehold.co/300x200" class="card-img-top" alt="Image of Đà Nẵng">
                <div class="card-body text-center">
                    <p class="card-text font-weight-bold">Đà Nẵng</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="https://placehold.co/300x200" class="card-img-top" alt="Image of Đà Lạt">
                <div class="card-body text-center">
                    <p class="card-text font-weight-bold">Đà Lạt</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="https://placehold.co/300x200" class="card-img-top" alt="Image of Phú Quốc">
                <div class="card-body text-center">
                    <p class="card-text font-weight-bold">Phú Quốc</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="https://placehold.co/300x200" class="card-img-top" alt="Image of Hà Nội">
                <div class="card-body text-center">
                    <p class="card-text font-weight-bold">Hà Nội</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="https://placehold.co/300x200" class="card-img-top" alt="Image of Hồ Chí Minh">
                <div class="card-body text-center">
                    <p class="card-text font-weight-bold">Hồ Chí Minh</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="https://placehold.co/300x200" class="card-img-top" alt="Image of Hà Giang">
                <div class="card-body text-center">
                    <p class="card-text font-weight-bold">Hà Giang</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="https://placehold.co/300x200" class="card-img-top" alt="Image of Tà Xùa">
                <div class="card-body text-center">
                    <p class="card-text font-weight-bold">Tà Xùa</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="https://placehold.co/300x200" class="card-img-top" alt="Image of Hải Phòng">
                <div class="card-body text-center">
                    <p class="card-text font-weight-bold">Hải Phòng</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <button class="btn btn-primary">View All Destinations</button>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">Popular Packages</h2>
        <p class="text-muted">Explore our most popular travel packages around the world</p>
    </div>
    <div class="row">
        <!-- Package 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img alt="Image of Venice Grand Canal" class="card-img-top" src="https://placehold.co/600x400" />
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Venice Grand Canal</h5>
                        <div class="badge badge-danger p-2">
                            <span>$150</span>
                            <span class="text-decoration-line-through">$250</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-muted ml-2">(4 Reviews)</span>
                    </div>
                    <div class="d-flex align-items-center text-muted mb-2">
                        <i class="fas fa-plane mr-2"></i>
                        <span>Italy</span>
                    </div>
                    <div class="d-flex align-items-center text-muted mb-2">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>14 Jun, 2024</span>
                    </div>
                    <div class="d-flex align-items-center text-muted">
                        <i class="fas fa-users mr-2"></i>
                        <span>25 Persons</span>
                        <i class="fas fa-clock ml-4 mr-2"></i>
                        <span>7 Days</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Package 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img alt="Image of Great Barrier Reef" class="card-img-top" src="https://placehold.co/600x400" />
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Great Barrier Reef</h5>
                        <div class="badge badge-danger p-2">
                            <span>$230</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-muted ml-2">(0 Reviews)</span>
                    </div>
                    <div class="d-flex align-items-center text-muted mb-2">
                        <i class="fas fa-plane mr-2"></i>
                        <span>Australia</span>
                    </div>
                    <div class="d-flex align-items-center text-muted mb-2">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>23 Sep, 2024</span>
                    </div>
                    <div class="d-flex align-items-center text-muted">
                        <i class="fas fa-users mr-2"></i>
                        <span>12 Persons</span>
                        <i class="fas fa-clock ml-4 mr-2"></i>
                        <span>3 Days</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Package 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img alt="Image of Similan Islands, Andaman Sea" class="card-img-top" src="https://placehold.co/600x400" />
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Similan Islands, Andaman Sea</h5>
                        <div class="badge badge-danger p-2">
                            <span>$540</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-muted ml-2">(34 Reviews)</span>
                    </div>
                    <div class="d-flex align-items-center text-muted mb-2">
                        <i class="fas fa-plane mr-2"></i>
                        <span>Thailand</span>
                    </div>
                    <div class="d-flex align-items-center text-muted mb-2">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>20 Jul, 2024</span>
                    </div>
                    <div class="d-flex align-items-center text-muted">
                        <i class="fas fa-users mr-2"></i>
                        <span>22 Persons</span>
                        <i class="fas fa-clock ml-4 mr-2"></i>
                        <span>5 Days</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <button class="btn btn-primary">View All Packages</button>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">Latest News</h2>
        <p class="text-muted">Check out the latest news and updates from our blog post</p>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="News image 1">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Partnering to create a strong community</h5>
                    <p class="card-text text-muted">In order to create a good community we need to work together. We need to help, support each other and be respectful to each other.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="News image 2">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Turning your emergency donation into instant aid</h5>
                    <p class="card-text text-muted">We are working hard to help the poor people. We are trying to provide them food, shelter, clothing, education and medical assistance.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="News image 3">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Charity provides educational boost for children</h5>
                    <p class="card-text text-muted">In order boost the education of the children, we are providing them books, pens, pencils, notebooks and other necessary things.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
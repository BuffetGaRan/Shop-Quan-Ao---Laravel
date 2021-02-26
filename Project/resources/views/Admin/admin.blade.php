<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <!-- Icon WEB -->
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>Admin Page</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" type="text/css" href="{{ asset('src/icon/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('src/BS/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-dashboard.css') }}">
</head>

<body>

<!-- Container -->
<!-- ----------------------- -->
<div class="container-fluid">

    <!-- Navbar -->
    <!-- ----------------------- -->
    <nav class="navbar navbar-expand-lg navbar-transparent ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:;">ADMIN</a>
            </div>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                            <p class="d-lg-none d-md-block">Some Actions</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Mike John responded to your email</a>
                            <a class="dropdown-item" href="#">You have 5 new tasks</a>
                            <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                            <a class="dropdown-item" href="#">Another Notification</a>
                            <a class="dropdown-item" href="#">Another One</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p class="d-lg-none d-md-block">Account</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <!-- ----------------------- -->
    <div class="content container-fluid">
            
        <!-- Add Product -->
        <!-- ----------------------- -->
        <div class="hidden__tab">
            <form id="form-create-product" action="admin/add-product" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="title">Thêm sản phẩm</div>
                <div class="name item">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="name">
                </div>
                <div class="price item">
                    <label>Giá sản phẩm</label>
                    <input type="number" name="price">
                </div>
                <div class="image item">
                    <label>Ảnh sản phẩm</label>
                    <input type="file" name="image">
                </div>
                <div class="desc item">
                    <label>Mô tả sản phẩm</label>
                    <textarea rows="3" name="desc"></textarea>
                </div>
                <div class="amount item">
                    <label>Số lượng sản phẩm</label>
                    <input type="number" name="amount">
                </div>
                <div class="discount item">
                    <label>Giảm giá sản phẩm</label>
                    <input type="number" name="discount">
                </div>
                <div class="type item">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="switch1" name="hot">
                        <label class="custom-control-label" for="switch1">SP Hot</label>
                    </div>
                    <div class="gender">
                        <label>Giới tính: </label>
                        <select name="gender_id">
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>
                    </div>
                    <div class="category">
                        <label>Phân Loại: </label>
                        <select name="product_category_id">
                            <option value="1">Quần</option>
                            <option value="2">Áo</option>
                        </select>
                    </div>
                </div>
                <button id="btn-create-product" class="btn btn-primary">Thêm sản phẩm</button>
            </form>

            <form id="form-update-product" action="admin/update-product" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="title">Sửa sản phẩm</div>
                <div class="name item">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="name">
                </div>
                <div class="price item">
                    <label>Giá sản phẩm</label>
                    <input type="number" name="price">
                </div>
                <div class="image item">
                    <label>Ảnh sản phẩm</label>
                    <input type="file" name="image">
                </div>
                <div class="desc item">
                    <label>Mô tả sản phẩm</label>
                    <textarea rows="3" name="desc"></textarea>
                </div>
                <div class="amount item">
                    <label>Số lượng sản phẩm</label>
                    <input type="number" name="amount">
                </div>
                <div class="discount item">
                    <label>Giảm giá sản phẩm</label>
                    <input type="number" name="discount">
                </div>
                <div class="type item">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="switch2" name="hot">
                        <label class="custom-control-label" for="switch2">SP Hot</label>
                    </div>
                    <div class="gender">
                        <label>Giới tính: </label>
                        <select name="gender_id">
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>
                    </div>
                    <div class="category">
                        <label>Phân Loại: </label>
                        <select name="product_category_id">
                            <option value="1">Quần</option>
                            <option value="2">Áo</option>
                        </select>
                    </div>
                </div>
                <input id="form-update" type="hidden" name="update" value="">
                <button id="btn-update-product" class="btn btn-primary">Sửa sản phẩm</button>
            </form>
        </div>

        <!-- Info Category Product -->
        <!-- ----------------------- -->
        <div class="row info__category__product">

            <!-- Total Product -->
            <!-- ----------------------- -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i id="total" class="product__data fas fa-info-circle"></i>
                        </div>
                        <p class="card-category">Tổng sản phẩm</p>
                        <h3 class="card-title">{{$countProduct}}
                            <small>SP</small>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="stats">
                           <!--  <i class="material-icons text-danger">warning</i>
                            <a href="javascript:;">Get More Space...</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hot Product -->
            <!-- ----------------------- -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i id="hot" class="product__data fas fa-info-circle"></i>
                        </div>
                        <p class="card-category">Sản phẩm hot</p>
                        <h3 class="card-title">{{$countHot}}
                            <small>SP</small>
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <!-- <i class="material-icons">date_range</i> Last 24 Hours -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sale Product -->
            <!-- ----------------------- -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">

                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i id="sale" class="product__data fas fa-info-circle"></i>
                        </div>
                        <p class="card-category">Sản phẩm giảm giá</p>
                        <h3 class="card-title">{{$countSale}}
                            <small>SP</small>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="stats">
                            <!-- <i class="material-icons">local_offer</i> Tracked from Github -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Product -->
            <!-- ----------------------- -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">

                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i id="male" class="product__data fas fa-info-circle"></i>
                        </div>
                        <p class="card-category gender__category">Sản phẩm Nam</p>
                        <h3 class="card-title gender__title">{{$countMale}}
                            <small>SP</small>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="stats">
                            <!-- <i class="material-icons">update</i> Just Updated -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- List Product -->
        <!-- ----------------------- -->
        <div class="row table__product">
            <div class="col-md-12">
                <div class="card">

                    <!-- Title List Product -->
                    <!-- ----------------------- -->
                    <div class="card-header card-header-primary">
                        <h4 class="card-title table__product__title">Tổng sản phẩm</h4>
                        <p class="card-category table__product__category">Bảng hiển thị toàn bộ sản phẩm</p>
                        <div class="add__product">
                            <div class="search">
                                <input id="txt__search" class="txt__search" type="text" name="search" placeholder="Seach Product">
                                <label class="btn__search"><i class="fas fa-search"></i></label>
                            </div>
                            <button id="btn__add__product">Thêm sản phẩm</button>
                        </div>
                        {{ csrf_field() }}
                    </div>

                    <!-- Table List Product -->
                    <!-- ----------------------- -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th>Ảnh</th>
                                    <th>Mô Tả</th>
                                    <th>Số Lượng</th>
                                    <th>Giảm Giá</th>
                                    <th>Đang HOT</th>
                                    <th>Giới Tính</th>
                                    <th>Sửa, Xóa</th>
                                </thead>

                                <tbody id="table-product"></tbody>
                            </table>
                            <div id="not-txt"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- List Cart -->
        <!-- ----------------------- -->
        <div class="row table__product">
            <div class="col-md-12">
                <div class="card">

                    <!-- Title List Product -->
                    <!-- ----------------------- -->
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tổng đơn hàng</h4>
                        <p class="card-category">Bảng hiển thị toàn bộ đơn hàng</p>
                    </div>

                    <!-- Table List Product -->
                    <!-- ----------------------- -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Ship</th>
                                </thead>

                                <tbody>
                                    @foreach($cart as $item)
                                        <tr class="tr">
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td class="text-primary">{{ $item->price }}$</td>
                                            <td><img width="100" src="{{ asset('Upload') }}/{{ $item->image }}"></td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>
                                                @if($item->ship == 0)
                                                    <button class="btn__ship"><a href="admin/ship/{{ $item->id }}">Await</button> 
                                                @elseif($item->ship == 1)
                                                    Done
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- List Users -->
        <!-- ----------------------- -->
        <div class="row table__users">
            <div class="col-md-12">
                <div class="card">

                    <!-- Title List Users -->
                    <!-- ----------------------- -->
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Khách hàng vip</h4>
                        <p class="card-category">Bảng những khách hàng mua nhiều nhất</p>
                    </div>

                    <!-- Table List Users -->
                    <!-- ----------------------- -->
                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>Top</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Quantity</th>
                                    <th>Purchased</th>
                                </thead>

                                <tbody>
                                    <?php $id = 0; $countAmount = 0; $countTotal = 0?>
                                    @foreach($duplicates as $item)
                                        <tr class="tr">
                                            <td>{{$id+=1}}</td>
                                            <td>{{ $item->user }}</td>
                                            <td class="text-primary">{{ $item->address }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{$amount[$countAmount++]}}</td>
                                            <td>{{$totalPrice[$countTotal++]}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- ----------------------- -->
    <footer class="footer">
        <div class="container-fluid">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="http://127.0.0.1:8000/">HOME</a>
                    </li>
                </ul>
            </nav>
            <div class="float-right">
                Upgrade contact with <b>Dev</b> for a better web.
            </div>
        </div>
    </footer>
</div>

    <script src="{{ asset('src/Jquery/jquery.js') }}"></script>
    <script src="{{ asset('src/index.js') }}" type="module"></script>
    <script src="{{ asset('src/BS/js/bootstrap.js') }}"></script>
    <script src="{{ asset('src/Js/test.js') }}"></script>

    <script>
        // $('#switch1').is(':checked')
        const hot = `
            @foreach($hot as $item)
            <tr class="tr">
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td class="text-primary">{{ $item->price }}$</td>
                <td><img width="100" src="{{ asset('Upload') }}/{{ $item->image }}"></td>
                <td><div class="desc">{{ $item->description }}</div></td>
                <td>{{ $item->amount }}</td>
                <td>{{ $item->discount }}%</td>
                <td>
                    @if($item->hot)
                        HOT
                    @else
                        Khong HOT
                    @endif
                </td>
                <td>
                    @if($item->gender_id == 1)
                        Nam
                    @else
                        Nu
                    @endif
                </td>
                <td class="action">
                    <button onclick="Update({{ $item->id }})" class="btn__update__product"><i class="fas fa-retweet"></i></button>
                    <form action="admin/delete-product" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="delete">
                        <button type="submit"><i class="fas fa-minus"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            `;

        const total = `
            @foreach($product as $item)
            <tr class="tr">
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td class="text-primary">{{ $item->price }}$</td>
                <td><img width="100" src="{{ asset('Upload') }}/{{ $item->image }}"></td>
                <td><div class="desc">{{ $item->description }}</div></td>
                <td>{{ $item->amount }}</td>
                <td>{{ $item->discount }}%</td>
                <td>
                    @if($item->hot)
                        HOT
                    @else
                        Khong HOT
                    @endif
                </td>
                <td>
                    @if($item->gender_id == 1)
                        Nam
                    @else
                        Nu
                    @endif
                </td>
                <td class="action">
                    <button onclick="Update({{ $item->id }})" class="btn__update__product"><i class="fas fa-retweet"></i></button>
                    <form action="admin/delete-product" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="delete">
                        <button type="submit"><i class="fas fa-minus"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            `;

        const sale = `
            @foreach($sale as $item)
            <tr class="tr">
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td class="text-primary">{{ $item->price }}$</td>
                <td><img width="100" src="{{ asset('Upload') }}/{{ $item->image }}"></td>
                <td><div class="desc">{{ $item->description }}</div></td>
                <td>{{ $item->amount }}</td>
                <td>{{ $item->discount }}%</td>
                <td>
                    @if($item->hot)
                        HOT
                    @else
                        Khong HOT
                    @endif
                </td>
                <td>
                    @if($item->gender_id == 1)
                        Nam
                    @else
                        Nu
                    @endif
                </td>
                <td class="action">
                    <button onclick="Update({{ $item->id }})" class="btn__update__product"><i class="fas fa-retweet"></i></button>
                    <form action="admin/delete-product" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="delete">
                        <button type="submit"><i class="fas fa-minus"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            `;

        const male = `
            @foreach($male as $item)
            <tr class="tr">
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td class="text-primary">{{ $item->price }}$</td>
                <td><img width="100" src="{{ asset('Upload') }}/{{ $item->image }}"></td>
                <td><div class="desc">{{ $item->description }}</div></td>
                <td>{{ $item->amount }}</td>
                <td>{{ $item->discount }}%</td>
                <td>
                    @if($item->hot)
                        HOT
                    @else
                        Khong HOT
                    @endif
                </td>
                <td>
                    @if($item->gender_id == 1)
                        Nam
                    @else
                        Nu
                    @endif
                </td>
                <td class="action">
                    <button onclick="Update({{ $item->id }})" class="btn__update__product"><i class="fas fa-retweet"></i></button>
                    <form action="admin/delete-product" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="delete">
                        <button type="submit"><i class="fas fa-minus"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            `;

        const female = `
            @foreach($female as $item)
            <tr class="tr">
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td class="text-primary">{{ $item->price }}$</td>
                <td><img width="100" src="{{ asset('Upload') }}/{{ $item->image }}"></td>
                <td><div class="desc">{{ $item->description }}</div></td>
                <td>{{ $item->amount }}</td>
                <td>{{ $item->discount }}%</td>
                <td>
                    @if($item->hot)
                        HOT
                    @else
                        Khong HOT
                    @endif
                </td>
                <td>
                    @if($item->gender_id == 1)
                        Nam
                    @else
                        Nu
                    @endif
                </td>
                <td class="action">
                    <button onclick="Update({{ $item->id }})" class="btn__update__product"><i class="fas fa-retweet"></i></button>
                    <form action="admin/delete-product" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="delete">
                        <button type="submit"><i class="fas fa-minus"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            `;

        $('#male').click(function(){
            if($('.gender__category').html().includes('Sản phẩm Nam')){
                $('.gender__category').html('Sản phẩm Nữ');
                $('.gender__title').html('{{$countFemale}} <small>SP</small>');
            }
            else{
                $('.gender__category').html('Sản phẩm Nam');
                $('.gender__title').html('{{$countMale}} <small>SP</small>');
            }
        });

        function Update(id){
            $('.hidden__tab').css('visibility', 'visible');
            $('#form-update-product').css('visibility', 'visible');
            $('body').addClass('body');
            $('#form-update').val(id);
        }

        $('#txt__search').keyup(function(){
            let value = $(this).val();
            if(value != ''){
                var _token = $('input[name="_token"]').val();
                $.ajax({url:"{{route('adminSearch')}}", method:"POST", data:{value:value, _token:_token},
                    success:function(data){
                        $('#table-product').html(data);
                    }
                });
            }
            else{
                $('#table-product').html(total);
            }

            if($('#table-product').html() == ''){
                $('#not-txt').text('Không có sản phẩm nào');
            }
            else{
                $('#not-txt').text('');
            }

            $(window).click(()=>{
                if($('#not-txt').text() == 'Không có sản phẩm nào'){
                    $('#table-product').html(total);
                    $('#not-txt').text('');
                }
            });
        });

    </script>
</body>

</html>
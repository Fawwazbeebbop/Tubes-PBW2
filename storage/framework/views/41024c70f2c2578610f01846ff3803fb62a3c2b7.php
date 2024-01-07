<!--Buat Camaba-->
<div class="row page-titles" style="border-radius: 0%">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" style="color: var(--primary)"><a href="dashboard"
                style="color: var(--primary)">Beranda</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
    </ol>
</div>
<div class="row">
    <div class="col-m-7">
        <div class="card transparent-card">
            <div class="bootstrap-carousel">
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo e(asset('sipenmaru/images/Banner-1.jpg')); ?>"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo e(asset('sipenmaru/images/Banner-2.jpg')); ?>"
                                alt="Second slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5">
        <div class="row">
            
        </div>
        
    </div>
</div>
</div>
<div class="row">
    <?php $__currentLoopData = $prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
            <div class="card" style="border-radius: 0%;">
                    <div class="new-arrival-product">
                        
                    </div>
                </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%;">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="<?php echo e(asset('sipenmaru/images/mesin.jpg')); ?>" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="ecom-product-detail.html"><h4 style="color: whitesmoke">Teknologi Rekayasa Manufaktur</h4></a>
                            
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="<?php echo e(asset('sipenmaru/images/mekatronika.jpeg')); ?>"
                            alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="ecom-product-detail.html"><h4 style="color: whitesmoke">Teknologi Rekayasa Mekatronika</h4></a>
                                
                            </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="<?php echo e(asset('sipenmaru/images/listrik.jpg')); ?>" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="ecom-product-detail.html"><h4 style="color: whitesmoke">Teknologi Listrik</h4></a>
                            
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="<?php echo e(asset('sipenmaru/images/trpl.jpg')); ?>" alt="">
                        <div class="carousel-caption d-none d-md-block" >
                            <a href="ecom-product-detail.html"><h4  style="color: whitesmoke">Teknologi Rekayasa Perangkat Lunak</h4></a>
                            
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="card transparent-card">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="first">
                                        
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="second">
                                        
                                    </div>
                                </div>
                                <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav slide-item-list mt-3" role="tablist">
                                        <li role="presentation" class="show">
                                            <a href="#first" role="tab" data-bs-toggle="tab">
                                                
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Tab slider End-->
                            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                <div class="product-detail-content">
                                    <!--Product details-->
                                    <div class="new-arrival-content pr">
                                        <h3>Ketentuan Umum</h3>
                                        <div class="custom-tab-1">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a href="#jpk" data-bs-toggle="tab"
                                                        class="nav-link active show">Jalur Prestasi Khusus</a>
                                                </li>
                                                <li class="nav-item"><a href="#reguler" data-bs-toggle="tab"
                                                        class="nav-link">Jalur Reguler</a>
                                                </li>
                                                <li class="nav-item"><a href="#karyawan" data-bs-toggle="tab"
                                                    class="nav-link">Jalur Karyawan</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="about-me" class="tab-pane fade active show">
                                                    <div class="profile-personal-info">
                                                        <br>
                                                        <h4 class="text-primary mb-4">Persyaratan</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">Siswa kelas XII SMA/SMK/MA/Sederajat lulus pada tahun berjalan.</li>
                                                            <li class="list-inline-item">Mengisi formulir pendaftaran.</li>
                                                            <li class="list-inline-item">Melampirkan Surat Penghasilan/Slip Gaji Orang Tua.</li>
                                                            <li class="list-inline-item">Sehat jasmani dan rohani serta tidak buta warna dilengkapi dengan Surat Keterangan Sehat.</li>
                                                            <li class="list-inline-item">Melampirkan pasfoto 3×4 dan 4×6 (@ 1 lembar)</li>
                                                            <li class="list-inline-item">Melampirkan fotokopi dokumen (Rapor, Akta Kelahiran, Sertifikat Prestasi <small>(jika ada)</small> )</li>
                                                        </ul>        
                                                    </div>
                                                </div>
                                                <div id="reguler" class="tab-pane fade">
                                                    <br>
                                                        <h4 class="text-primary mb-4">Persyaratan</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">Siswa kelas XII SMA/SMK/MA/Sederajat lulus pada tahun berjalan.</li>
                                                            <li class="list-inline-item">Mengisi formulir pendaftaran.</li>
                                                            <li class="list-inline-item">Melampirkan Surat Penghasilan/Slip Gaji Orang Tua.</li>
                                                            <li class="list-inline-item">Sehat jasmani dan rohani serta tidak buta warna dilengkapi dengan Surat Keterangan Sehat.</li>
                                                            <li class="list-inline-item">Melampirkan pasfoto 3×4 dan 4×6 (@ 1 lembar)</li>
                                                            <li class="list-inline-item">Melampirkan fotokopi dokumen (Rapor, Akta Kelahiran, Sertifikat Prestasi <small>(jika ada)</small> )</li>
                                                        </ul>    
                                                </div>
                                                <div id="karyawan" class="tab-pane fade">
                                                    <br>
                                                        <h4 class="text-primary mb-4">Persyaratan</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">Siswa kelas XII SMA/SMK/MA/Sederajat lulus pada tahun berjalan.</li>
                                                            <li class="list-inline-item">Mengisi formulir pendaftaran.</li>
                                                            <li class="list-inline-item">Melampirkan Surat Penghasilan/Slip Gaji Orang Tua.</li>
                                                            <li class="list-inline-item">Sehat jasmani dan rohani serta tidak buta warna dilengkapi dengan Surat Keterangan Sehat.</li>
                                                            <li class="list-inline-item">Melampirkan pasfoto 3×4 dan 4×6 (@ 1 lembar)</li>
                                                            <li class="list-inline-item">Melampirkan fotokopi dokumen (Rapor, Akta Kelahiran, Sertifikat Prestasi <small>(jika ada)</small> )</li>
                                                        </ul>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- review -->
            <div class="modal fade" id="reviewModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="text-center mb-4">
                                    <img class="img-fluid rounded" width="78" src="images/avatar/1.jpg" alt="DexignZone">
                                </div>
                                <div class="mb-3">
                                    <div class="rating-widget mb-4 text-center">
                                        <!-- Rating Stars Box -->
                                        <div class="rating-stars">
                                            <ul id="stars">
                                                <li class="star" title="Poor" data-value="1">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Fair" data-value="2">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Good" data-value="3">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Excellent" data-value="4">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="WOW!!!" data-value="5">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                                </div>
                                <button class="btn btn-success btn-block">RATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\enrollify\resources\views/dashboard/dashboard-user.blade.php ENDPATH**/ ?>
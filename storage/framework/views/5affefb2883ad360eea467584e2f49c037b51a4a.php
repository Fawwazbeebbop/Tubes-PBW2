<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('navbar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menunya'); ?>
Pendaftaran
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
<?php if(auth()->guard()->check()): ?>
<ul class="metismenu" id="menu">
    <li><a href="<?php echo e(route('dashboard')); ?>">
            <i class="fas fa-home"></i>
            <span class="nav-text">Beranda</span>
        </a>
    </li>
    <?php if(auth()->user()->role == 'Administrator'): ?>
    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-book"></i>
        <span class="nav-text">Data Master </span>
        </a>
        <ul aria-expanded="false">
            <li><a href="<?php echo e(route('data-user')); ?>">Pengguna</a></li>
            <li><a href="<?php echo e(route('data-sekolah')); ?>">Sekolah</a></li>
            <li><a href="<?php echo e(route('data-prodi')); ?>">Program Studi</a></li>
            <li><a href="<?php echo e(route('data-jadwal')); ?>">Jadwal Kegiatan</a></li>
        </ul>
    </li>
    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-database"></i>
        <span class="nav-text">Data Transaksi</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="<?php echo e(route('data-registration')); ?>">Pendaftaran</a></li>
            <li><a href="<?php echo e(route('data-pembayaran')); ?>">Pembayaran</a></li>
        </ul>
    </li>
    <li><a href="<?php echo e(route('data-pengumuman')); ?>" aria-expanded="false">
            <i class="fa fa-file"></i>
            <span class="nav-text">Pengumuman</span>
        </a>
    </li>
    <?php else: ?>
    <li class="mm-active"><a href="<?php echo e(route('data-registration')); ?>" aria-expanded="false">
            <i class="fa fa-database"></i>
            <span class="nav-text">Pendaftaran</span>
        </a>
    </li>
    <?php endif; ?>
</ul>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <form action="/update-registration/<?php echo e($viewData->id_pendaftaran); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="col-xl-12">
                <div class="custom-accordion">
                    <div class="card">
                        <a href="#personal-data" class="text-dark" data-bs-toggle="collapse">
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3"> <i class="uil uil-receipt text-primary h2"></i> </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Data Pribadi</h5>
                                        <p class="text-muted text-truncate mb-0">NISN, NIK, Nama, Jenis Kelamin, Pas
                                            Photo, TTL, dsb</p>
                                    </div>
                                    <div class="flex-shrink-0"> <i
                                            class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
                                </div>
                            </div>
                        </a>
                        <div id="personal-data" class="collapse show">
                            <div class="p-4 border-top">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label"  for="personal-data-nisn">NISN</label>
                                            <input type="text" value="<?php echo e($viewData->nisn); ?>" class="form-control" id="personal-data-nisn" name="nisn"
                                                placeholder="Enter NISN" value="<?php echo e(old('nisn')); ?>">
                                            <?php $__errorArgs = ['nisn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nik">NIK</label>
                                            <input type="text" value="<?php echo e($viewData->nik); ?>" class="form-control" id="personal-data-nik" name="nik"
                                                placeholder="Enter NIK" value="<?php echo e(old('nik')); ?>">
                                            <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-name">Nama</label>
                                            <input type="text" value="<?php echo e($viewData->nama_siswa); ?>" class="form-control" id="personal-data-name" name="nama"
                                                placeholder="Enter Name" value="<?php echo e(old('nama')); ?>">
                                            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-gender">Jenis Kelamin</label>
                                            <?php if($viewData->jenis_kelamin == 'Perempuan'): ?>
                                                <select class="form-control wide" name="jk" value="<?php echo e(old('jk')); ?>">
                                                    <option value="<?php echo e($viewData->jenis_kelamin); ?>" selected> <?php echo e($viewData->jenis_kelamin); ?></option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                </select>
                                            <?php else: ?>
                                                <select class="form-control wide" name="jk" value="<?php echo e(old('jk')); ?>">
                                                    <option value="<?php echo e($viewData->jenis_kelamin); ?>" selected> <?php echo e($viewData->jenis_kelamin); ?></option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            <?php endif; ?>
                                            <?php $__errorArgs = ['jk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data">Agama</label>
                                            <select class="form-control wide" name="agama" value="<?php echo e(old('agama')); ?>">
                                                <option value="<?php echo e(old('agama')); ?>"  selected><?php echo e($viewData->agama); ?>

                                                </option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Kong Hu Chu ">Kong Hu Chu</option>
                                                <option value="Lainnya">Etc</option>
                                            </select>
                                            <?php $__errorArgs = ['agama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-4 mb-lg-0">
                                            <label class="form-label">Tempat Lahir</label>
                                            <input type="text" value="<?php echo e($viewData->tempat_lahir); ?>" class="form-control" id="basicpill" name="tempatlahir"
                                                placeholder="Masukkan Tempat Lahir" value="<?php echo e(old('tempatlahir')); ?>">
                                            <?php $__errorArgs = ['tempatlahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 mb-lg-0">
                                            <label class="form-label" for="billing-city">Tanggal Lahir</label>
                                            <input type="date" value="<?php echo e($viewData->tanggal_lahir); ?>" class="form-control" id="basicpill" name="tanggallahir"
                                            placeholder="Masukkan Tanggal Lahir" value="<?php echo e(old('tanggallahir')); ?>">
                                            <?php $__errorArgs = ['tanggallahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <!--<input name="tanggallahir" class="datepicker-default form-control" id="datepicker" >-->
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-0">
                                            <label class="form-label" for="zip-code">Pas Foto</label>
                                            <div class="input-group">
                                                <span class="input-group-text">Upload</span>
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control" name="foto"
                                                        value="<?php echo e(old('foto')); ?>">
                                                    <input type="hidden" name="pathFoto" class="form-control-file"
                                                        value="<?php echo e($viewData->foto); ?>">
                                                </div>
                                            </div>
                                            <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="billing-address">Alamat</label>
                                    <textarea class="form-control" id="billing-address" rows="3" name="alamat"
                                        placeholder="Masukkan Alamat"><?php echo e($viewData->alamat); ?></textarea>
                                    <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nisn">Email</label>
                                            <input type="email" value="<?php echo e($viewData->email); ?>" class="form-control" id="personal-data-nisn" name="email"
                                                placeholder="Masukkan email" value="<?php echo e(old('email')); ?>">
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nik">Mobile
                                                Nomor Telepon/WhatsApp</label>
                                            <input type="number" value="<?php echo e($viewData->hp); ?>" class="form-control" id="personal-data-nik" name="nohp"
                                                placeholder="Masukkan No HP" value="<?php echo e(old('nohp')); ?>">
                                            <?php $__errorArgs = ['nohp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#registration-data" class="collapsed text-dark" data-bs-toggle="collapse">
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3"> <i class="uil uil-truck text-primary h2"></i> </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Data Pendaftaran</h5>
                                        <p class="text-muted text-truncate mb-0">Pilihan program studi </p>
                                    </div>
                                    <div class="flex-shrink-0"> <i
                                            class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
                                </div>
                            </div>
                        </a>
                        <div id="registration-data" class="collapse">
                            <div class="p-4 border-top">
                                <div class="mb-4">
                                    <label class="form-label" for="billing-address">Gelombang</label>
                                    <select class="form-control wide" name="gelombang">    
                                        <option value="<?php echo e($viewData->gelombang); ?>" selected><?php echo e($viewData->jadwal->nama_kegiatan); ?></option>
                                        <?php $__currentLoopData = $viewDataJadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <option value="<?php echo e($x->id); ?>"><?php echo e($x->nama_kegiatan); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    <?php $__errorArgs = ['gelombang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nisn">Pilihan 1</label>
                                            <input class="form-control" value="<?php echo e($viewData->pil1); ?>" list="datalistOptionsProdi" id="exampleDataList"
                                                placeholder="Cari Program Studi..." name="pil1" value="<?php echo e(old('pil1')); ?>" autocomplete='off' >
                                            <datalist id="datalistOptionsProdi">
                                                <?php $__currentLoopData = $viewProdi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($z->id_prodi); ?>"><?php echo e($z->nama_prodi); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </datalist>
                                            <?php $__errorArgs = ['pil1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nik">Pilihan 2</label>
                                            <input class="form-control" value="<?php echo e($viewData->pil2); ?>" list="datalistOptionsProdi" id="exampleDataList"
                                                placeholder="Type to search..." name="pil2" value="<?php echo e(old('pil2')); ?>" autocomplete='off' >
                                            <datalist id="datalistOptionsProdi">
                                                <?php $__currentLoopData = $viewProdi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($z->id_prodi); ?>"><?php echo e($z->nama_prodi); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </datalist>
                                            <?php $__errorArgs = ['pil2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#parental-data" class="collapsed text-dark" data-bs-toggle="collapse">
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3"> <i class="uil uil-bill text-primary h2"></i> </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Data Orang Tua</h5>
                                        <p class="text-muted text-truncate mb-0">Data orang tua, keuangan dan data.</p>
                                    </div>
                                    <div class="flex-shrink-0"> <i
                                            class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
                                </div>
                            </div>
                        </a>
                        <div id="parental-data" class="collapse">
                            <div class="p-4 border-top">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-name">Nama Ayah</label>
                                            <input type="text" value="<?php echo e($viewData->nama_ayah); ?>" class="form-control" id="personal-data-name" name="ayah"
                                                placeholder="Masukkan Nama Ayah" value="<?php echo e(old('ayah')); ?>">
                                            <?php $__errorArgs = ['ayah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-gender">Pekerjaan Ayah</label>
                                            <input class="form-control" value="<?php echo e($viewData->pekerjaan_ayah); ?>" list="datalistOptionsOccupation"
                                                id="exampleDataList" placeholder="Cari Pekerjaan..."
                                                name="pekerjaanayah" value="<?php echo e(old('pekerjaanayah')); ?>">
                                            <datalist id="datalistOptionsOccupation">
                                                <option value="Karyawan Swasta"></option>
                                                <option value="Karyawan BUMN"></option>
                                                <option value="Karyawan BUMD"></option>
                                                <option value="Karyawan Honorer"></option>
                                                <option value="PNS"></option>
                                                <option value="Wirausaha"></option>
                                                <option value="PNS"></option>
                                                <option value="Buruh"></option>
                                                <option value="Asisten Rumah Tangga"></option>
                                                <option value="Seniman"></option>
                                                <option value="Dokter"></option>
                                                <option value="Perawat"></option>
                                                <option value="Bidan"></option>
                                                <option value="Apoteker"></option>
                                                <option value="Pengajar"></option>
                                                <option value="Notaris"></option>
                                            </datalist>
                                            <?php $__errorArgs = ['pekerjaanayah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nik">Telepon Ayah</label>
                                            <input type="number" value="<?php echo e($viewData->nohp_ayah); ?>" class="form-control" id="personal-data-no" name="noayah"
                                                placeholder="Enter Father's Mobile" value="<?php echo e(old('noayah')); ?>">
                                            <?php $__errorArgs = ['pekerjaanayah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-name">Nama Ibu</label>
                                            <input type="text" value="<?php echo e($viewData->nama_ibu); ?>" class="form-control" id="personal-data-name" name="ibu"
                                                placeholder="Nama Ibu" value="<?php echo e(old('ibu')); ?>" autocomplete="off">
                                            <?php $__errorArgs = ['ibu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-gender">Pekerjaan Ibu</label>
                                            <input class="form-control" value="<?php echo e($viewData->pekerjaan_ibu); ?>" list="datalistOptionsOccupation"
                                                id="exampleDataList" placeholder="Cari Pekerjaan..."
                                                name="pekerjaanibu" value="<?php echo e(old('pekerjaanibu')); ?>">
                                            <datalist id="datalistOptionsOccupation">
                                                <option value="Karyawan Swasta"></option>
                                                <option value="Karyawan BUMN"></option>
                                                <option value="Karyawan BUMD"></option>
                                                <option value="Karyawan Honorer"></option>
                                                <option value="PNS"></option>
                                                <option value="Wirausaha"></option>
                                                <option value="PNS"></option>
                                                <option value="Buruh"></option>
                                                <option value="Asisten Rumah Tangga"></option>
                                                <option value="Ibu Rumah Tangga"></option>
                                                <option value="Seniman"></option>
                                                <option value="Dokter"></option>
                                                <option value="Perawat"></option>
                                                <option value="Bidan"></option>
                                                <option value="Apoteker"></option>
                                                <option value="Pengajar"></option>
                                                <option value="Notaris"></option>
                                            </datalist>
                                            <?php $__errorArgs = ['pekerjaanibu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nik">Telepon Ibu</label>
                                            <input type="number" value="<?php echo e($viewData->nohp_ibu); ?>" class="form-control" id="personal-data-no" name="noibu"
                                                placeholder="Telepon Ibu" value="<?php echo e(old('noibu')); ?>">
                                            <?php $__errorArgs = ['noibu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nisn">Penghasilan Ayah</label>
                                            <select class="form-control wide" title="Recipient" name="penghasilan_ayah" required>
                                                <option value="<?php echo e($viewData->penghasilan_ayah); ?>" selected><?php echo e($viewData->penghasilan_ayah); ?></option>
                                                <option value="< 1.0000.000">< 1.000.000</option>
                                                <option value="1.000.000 - 2.500.000">1.000.000 - 2.500.000</option>
                                                <option value="2.500.000 - 5.000.000">2.500.000 - 5.000.000</option>
                                                <option value="5.000.000 - 7.500.000">5.000.000 - 7.500.000</option>
                                                <option value="7.500.000 - 10.000.000">7.500.000 - 10.000.000
                                                </option>
                                                <option value="> 10.0000.000"> > 10.000.000</option>
                                            </select>
                                            <?php $__errorArgs = ['penghasilan_ayah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nisn">Penghasilan Ibu</label>
                                            <select class="form-control wide" title="Recipient" name="penghasilan_ibu" required>
                                                <option value="<?php echo e($viewData->penghasilan_ibu); ?>" selected><?php echo e($viewData->penghasilan_ibu); ?></option>
                                                <option value="< 1.0000.000">
                                                    < 1.000.000</option>
                                                <option value="1.000.000 - 2.500.000">1.000.000 -
                                                    2.500.000
                                                </option>
                                                <option value="2.500.000 - 5.000.000">2.500.000 - 5.000.000</option>
                                                <option value="5.000.000 - 7.500.000">5.000.000 - 7.500.000</option>
                                                <option value="7.500.000 - 10.000.000">7.500.000 - 10.000.000
                                                </option>
                                                <option value="> 10.0000.000"> > 10.000.000</option>
                                            </select>
                                            <?php $__errorArgs = ['penghasilan_ibu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nisn">Berkas Orang Tua <small>kk,slip gaji</small>
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text">Upload</span>
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control" name="ftberkas_ortu"
                                                        value="<?php echo e(old('ftberkas_ortu')); ?>">

                                                    <input type="hidden" name="pathOrtu" class="form-control-file"
                                                        value="<?php echo e($viewData->berkas_ortu); ?>">
                                                </div>
                                            </div>
                                            <?php $__errorArgs = ['ftberkas_ortu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#school-data" class="collapsed text-dark" data-bs-toggle="collapse">
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3"> <i class="uil uil-truck text-primary h2"></i> </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Data sekolah asal dan nilai</h5>
                                                <p class="text-muted text-truncate mb-0">Sekolah asal, jurusan, nilai
                                                    raport dan ijazah</p>
                                    </div>
                                    <div class="flex-shrink-0"> <i
                                            class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
                                </div>
                            </div>
                        </a>
                        <div id="school-data" class="collapse">
                            <div class="p-4 border-top">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="billing-address">Nama Sekolah</label>
                                            <input class="form-control" value="<?php echo e($viewData->sekolah); ?>" list="datalistOptionsSekolah"
                                                id="exampleDataList" placeholder="Cari NPSN sekolah...." name="sekolah"
                                                value="<?php echo e(old('sekolah')); ?>">
                                            <datalist id="datalistOptionsSekolah">
                                                <?php $__currentLoopData = $viewSekolah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($z->id); ?>"><?php echo e($z->nama_sekolah); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </datalist>
                                            <?php $__errorArgs = ['sekolah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Semester 1</label>
                                            <input type="number" value="<?php echo e($viewData->smt1); ?>" class="form-control" name="smt1"
                                                placeholder="Masukkan nilai rata-rata" value="<?php echo e(old('smt1')); ?>">
                                            <?php $__errorArgs = ['smt1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Semester 2</label>
                                            <input type="number" value="<?php echo e($viewData->smt2); ?>" class="form-control" name="smt2"
                                                placeholder="Masukkan nilai rata-rata" value="<?php echo e(old('smt2')); ?>">
                                            <?php $__errorArgs = ['smt2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Semester 3</label>
                                            <input type="number" value="<?php echo e($viewData->smt3); ?>" class="form-control" name="smt3"
                                                placeholder="Masukkan nilai rata-rata" value="<?php echo e(old('smt3')); ?>">
                                            <?php $__errorArgs = ['smt3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Semester 4</label>
                                            <input type="number" value="<?php echo e($viewData->smt4); ?>" class="form-control" name="smt4"
                                                placeholder="Masukkan nilai rata-rata" value="<?php echo e(old('smt4')); ?>">
                                            <?php $__errorArgs = ['smt4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Semester 5</label>
                                            <input type="number" value="<?php echo e($viewData->smt5); ?>" class="form-control" name="smt5"
                                                placeholder="Masukkan nilai rata-rata" value="<?php echo e(old('smt5')); ?>">
                                            <?php $__errorArgs = ['smt5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Semester 6</label>
                                            <input type="number" value="<?php echo e($viewData->smt6); ?>" class="form-control" name="smt6"
                                                placeholder="Masukkan nilai rata-rata" value="<?php echo e(old('smt6')); ?>">
                                            <?php $__errorArgs = ['smt6'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="billing-address">Berkas Siswa</label>
                                            <div class="input-group">
                                                <span class="input-group-text">Upload</span>
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control" name="ftberkas_siswa"
                                                        value="<?php echo e(old('ftberkas_siswa')); ?>">

                                                    <input type="hidden" name="pathSiswa" class="form-control-file"
                                                        value="<?php echo e($viewData->berkas_siswa); ?>">
                                                </div>
                                            </div>
                                            <?php $__errorArgs = ['ftberkas_siswa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="billing-address">Prestasi <small>(jika ada)</small></label>
                                            <div class="input-group">
                                                <span class="input-group-text">Upload</span>
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control"
                                                        name="ftprestasi" value="<?php echo e(old('ftprestasi')); ?>">

                                                    <input type="hidden" name="pathPrestasi" class="form-control-file"
                                                        value="<?php echo e($viewData->prestasi); ?>">
                                                </div>
                                            </div>
                                            <?php $__errorArgs = ['ftprestasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <div class="text-end mt-2 mt-sm-0">
                                <button type="submit" name="add" class="btn btn-primary">Perbaharui</button>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row-->
                </div>
        </form>
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pmb-project-main\resources\views/pendaftaran/data-pendaftaran-edit-admin.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    PMB | ITENAS
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('navbar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menunya'); ?>
    Pembayaran
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
                <?php
                    $no = 1;
                ?>
                <?php $__currentLoopData = $viewDataUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($no == 1): ?>
                            <li><a href="data-registration" aria-expanded="false">
                                    <i class="fa fa-database"></i>
                                    <span class="nav-text">Pendaftaran</span>
                                </a>
                            </li>
                    <?php endif; ?>
                    <?php
                        $no++;
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-bottom: 15rem">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Data Pembayaran</h4>

                    <!-- center modal -->
                    <div>
                        <button class="btn btn-info waves-effect waves-light mb-4" onclick="printDiv('cetak')"><i class="fa fa-print"> </i></button>
                        
                    </div>

                    <div class="modal fade modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Pembayaran </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="save-payment" method="POST" enctype="multipart/form-data">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="userid" value="<?php echo e(auth()->user()->id); ?>">
                                        <div class="form-group">
                                            <div class="row">
                                                <input type="hidden" name="pathid" value="<?php echo e(auth()->user()->name); ?>">
                                                <div class="col-xl-4">
                                                    <label for="iduser">ID Pendaftaran</label>
                                                    <select class="form-control wide" title="id pendaftaran"
                                                        name="id_pendaftaran" required>
                                                        <option value="-">Pilih ID</option>
                                                        <?php $__currentLoopData = $viewIdPendaftaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($z->id_pendaftaran); ?>">
                                                                <?php echo e($z->id_pendaftaran); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="col-xl-8">
                                                    <label for="iduser">Status</label>
                                                    <select class="default-select form-control wide" title="status"
                                                        name="status" required>
                                                        <option value="-">Pilih Status</option>
                                                        <option value="Dibayar">Dibayar</option>
                                                                        <option value="Belum Bayar">Belum Bayar</option>
                                                                        <option value="Gratis">Gratis</option>
                                                                        <option value="Tidak Sah">Tidak Sah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="iduser">Bukti Pembayaran</label>
                                            <div class="input-group">
                                                <span class="input-group-text">Upload</span>
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control" name="bukti"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-top-0 d-flex">
                                            <button type="button" class="btn btn-danger light"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" name="add" class="btn btn-primary">Tambahkan</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                <div class="card-body" id="cetak">
                    <div class="table-responsive">
                        <?php echo e(csrf_field()); ?>

                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Pendaftaran</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Status</th>
                                    <th class="text-center">Bukti Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php $__currentLoopData = $viewData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($no++); ?></td>
                                        <td><a href="detail-registration/<?php echo e($x->pendaftaran->id_pendaftaran); ?>"><?php echo e($x->pendaftaran->id_pendaftaran); ?></a></td>
                                        <td><?php echo e($x->tgl_pembayaran); ?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <?php if($x->status == 'Dibayar'): ?>
                                                        <span class="badge badge-success">Dibayar<span
                                                                class="ms-1 fa fa-check"></span>
                                                        <?php elseif($x->status =='Belum Bayar'): ?>
                                                            <span class="badge badge-warning">Belum Dibayar<span
                                                                    class="ms-1 fas fa-stream"></span>
                                                            <?php elseif($x->status =='Tidak Sah'): ?>
                                                                <span class="badge badge-danger">Tidak Sah<span
                                                                        class="ms-1 fa fa-ban"></span>
                                                                        <?php elseif($x->status == 'Gratis'): ?>
                                                                        <span class="badge badge-success">Gratis<span
                                                                                class="ms-1 fa fa-check"></span>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-7" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                                    height="18px" viewbox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-7">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="/paid-payment/<?php echo e($x->id_pembayaran); ?>">Bayar</a><a
                                                                    class="dropdown-item"
                                                                    href="/unpaid-payment/<?php echo e($x->id_pembayaran); ?>">Belum Bayar</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="/invalid-payment/<?php echo e($x->id_pembayaran); ?>">Tidak Sah</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <?php if($x->bukti_pembayaran != null): ?>
                                                <a class="btn btn-light shadow btn-xs sharp me-1" title="Proof of Payment"
                                                    href="<?php echo e($x->bukti_pembayaran); ?>" download><i
                                                        class="fa fa-file-alt"></i></a>
                                            <?php else: ?>
                                                <?php if($x->status == "Gratis"): ?>
                                                Gratis Biaya Pendaftaran
                                                <?php else: ?>
                                                Tidak tersedia
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-primary shadow btn-xs sharp me-1" title="Edit"
                                                    data-bs-toggle="modal"
                                                    data-bs-target=".edit<?php echo e($x->id_pembayaran); ?>"><i
                                                        class="fa fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"
                                                        data-bs-toggle="modal"
                                                        data-bs-target=".delete<?php echo e($x->id_pembayaran); ?>"></i></a>
                                                <div class="modal fade delete<?php echo e($x->id_pembayaran); ?>" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Hapus Data</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center"><i
                                                                    class="fa fa-trash"></i><br> Apakah anda yakin ingin menghapus data ini?<br><?php echo e($x->id_pembayaran); ?>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger light"
                                                                    data-bs-dismiss="modal">Batalkan</button>
                                                                <a href="delete-payment/<?php echo e($x->id_pembayaran); ?>">
                                                                    <button type="submit" class="btn btn-danger shadow">
                                                                        Ya, Hapus Data!
                                                                    </button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                    <div class="modal fade edit<?php echo e($x->id_pembayaran); ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="mySmallModalLabel" aria-hidden="true">

                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Sunting Pembayaran</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="update-payment/<?php echo e($x->id_pembayaran); ?>" method="POST"
                                                        enctype="multipart/form-data">
                                                        <?php echo e(csrf_field()); ?>

                                                        <input type="hidden" name="userid" value="<?php echo e(auth()->user()->id); ?>">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <label for="iduser"> ID Pembayaran</label>
                                                                    <input type="text" class="form-control" id="nama"
                                                                        value="<?php echo e($x->id_pembayaran); ?>" name="id" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <label for="iduser"> ID Pendaftaran </label>
                                                                    <select class="form-control wide" title="id pendaftaran"
                                                                        name="id_pendaftaran" required>
                                                                        <option value="<?php echo e($x->id_pendaftaran); ?>" selected>
                                                                            <?php echo e($x->pendaftaran->id_pendaftaran); ?> || <?php echo e($x->pendaftaran->nama_siswa); ?></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xl-8">
                                                                    <label for="iduser">Status</label>
                                                                    <select class="default-select form-control wide"
                                                                        title="status" name="status" required>
                                                                        <option value="<?php echo e($x->status); ?>" selected>
                                                                            <?php echo e($x->status); ?></option>
                                                                        <option value="Dibayar">Dibayar</option>
                                                                        <option value="Belum Bayar">Belum Bayar</option>
                                                                        <option value="Tidak Sah">Tidak Sah</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="iduser">Bukti Pembayaran</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">Upload</span>
                                                                <div class="form-file">
                                                                    <input type="file" class="form-file-input form-control"
                                                                        name="bukti" >
                                                                    <input type="hidden" class="form-file-input form-control"
                                                                        name="pathnya" value="<?php echo e($x->bukti_pembayaran); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer border-top-0 d-flex">
                                                            <button type="button" class="btn btn-danger light"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" name="add"
                                                                class="btn btn-primary">Perbaharui Data</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pmb-project-main\resources\views/pembayaran/data-pembayaran-admin.blade.php ENDPATH**/ ?>
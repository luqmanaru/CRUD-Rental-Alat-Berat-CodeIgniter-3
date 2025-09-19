                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Alat Berat</h1>
                        <a href="<?php echo site_url('admin/tambahalatberat'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Alat Berat</a>
                    </div>

                    <!-- Notifikasi -->
                    <?php if ($this->session->flashdata('pesan')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('pesan'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Alat Berat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Alat</th>
                                            <th>Merk</th>
                                            <th>Jenis</th>
                                            <th>Plat Nomor</th>
                                            <th>Tahun</th>
                                            <th>Harga Sewa</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($alat as $a): ?>
                                        <tr>
                                            <td><?php echo $a->id_alat; ?></td>
                                            <td><?php echo $a->nama_alat; ?></td>
                                            <td><?php echo $a->merk; ?></td>
                                            <td><?php echo $a->jenis; ?></td>
                                            <td><?php echo $a->plat_nomor; ?></td>
                                            <td><?php echo $a->tahun; ?></td>
                                            <td><?php echo "Rp " . number_format($a->harga_sewa, 0, ',', '.'); ?></td>
                                            <td>
                                                <?php 
                                                if ($a->status == 'tersedia') {
                                                    echo '<span class="badge badge-success">Tersedia</span>';
                                                } elseif ($a->status == 'disewa') {
                                                    echo '<span class="badge badge-warning">Disewa</span>';
                                                } else {
                                                    echo '<span class="badge badge-danger">Perbaikan</span>';
                                                }
                                                ?>
                                            </td>
                                            <td width="120">
                                                <a href="<?php echo site_url('admin/editalatberat/'.$a->id_alat); ?>" class="btn btn-sm btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $a->id_alat; ?>">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <!-- Modal Hapus -->
                                        <div class="modal fade" id="deleteModal<?php echo $a->id_alat; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus alat berat <strong><?php echo $a->nama_alat; ?></strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a href="<?php echo site_url('admin/hapusalatberat/'.$a->id_alat); ?>" class="btn btn-danger">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Alat Berat</h1>
                        <a href="<?php echo site_url('admin/alatberat'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
                    </div>

                    <!-- Form Input -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Alat Berat</h6>
                        </div>
                        <div class="card-body">
                            <?php echo form_open('admin/simpanalatberat'); ?>
                            <div class="form-group">
                                <label for="nama_alat">Nama Alat</label>
                                <?php echo form_input('nama_alat', '', array('class' => 'form-control', 'id' => 'nama_alat', 'placeholder' => 'Masukkan nama alat berat')); ?>
                                <?php echo form_error('nama_alat', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <?php echo form_input('merk', '', array('class' => 'form-control', 'id' => 'merk', 'placeholder' => 'Masukkan merk alat berat')); ?>
                                <?php echo form_error('merk', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <?php echo form_input('jenis', '', array('class' => 'form-control', 'id' => 'jenis', 'placeholder' => 'Masukkan jenis alat berat')); ?>
                                <?php echo form_error('jenis', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="plat_nomor">Plat Nomor</label>
                                <?php echo form_input('plat_nomor', '', array('class' => 'form-control', 'id' => 'plat_nomor', 'placeholder' => 'Masukkan plat nomor')); ?>
                                <?php echo form_error('plat_nomor', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <?php echo form_input('tahun', '', array('class' => 'form-control', 'id' => 'tahun', 'placeholder' => 'Masukkan tahun pembuatan')); ?>
                                <?php echo form_error('tahun', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="harga_sewa">Harga Sewa per Hari</label>
                                <?php echo form_input('harga_sewa', '', array('class' => 'form-control', 'id' => 'harga_sewa', 'placeholder' => 'Masukkan harga sewa per hari')); ?>
                                <?php echo form_error('harga_sewa', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?php echo site_url('admin/alatberat'); ?>" class="btn btn-secondary">Batal</a>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

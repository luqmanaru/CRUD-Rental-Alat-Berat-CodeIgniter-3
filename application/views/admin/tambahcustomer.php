                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Customer</h1>
                        <a href="<?php echo site_url('admin/customer'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
                    </div>

                    <!-- Form Input -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Customer</h6>
                        </div>
                        <div class="card-body">
                            <?php echo form_open('admin/simpancustomer'); ?>
                            <div class="form-group">
                                <label for="nama_customer">Nama Customer</label>
                                <?php echo form_input('nama_customer', '', array('class' => 'form-control', 'id' => 'nama_customer', 'placeholder' => 'Masukkan nama customer')); ?>
                                <?php echo form_error('nama_customer', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <?php echo form_textarea('alamat', '', array('class' => 'form-control', 'id' => 'alamat', 'placeholder' => 'Masukkan alamat customer', 'rows' => '3')); ?>
                                <?php echo form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <?php echo form_input('no_hp', '', array('class' => 'form-control', 'id' => 'no_hp', 'placeholder' => 'Masukkan nomor HP')); ?>
                                <?php echo form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="no_ktp">No KTP</label>
                                <?php echo form_input('no_ktp', '', array('class' => 'form-control', 'id' => 'no_ktp', 'placeholder' => 'Masukkan nomor KTP')); ?>
                                <?php echo form_error('no_ktp', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <?php echo form_input('email', '', array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'Masukkan email customer')); ?>
                                <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?php echo site_url('admin/customer'); ?>" class="btn btn-secondary">Batal</a>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

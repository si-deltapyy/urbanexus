<?php

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://api.fonnte.com/send',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS => array(
// 'target' => '085876204872',
// 'message' => 'test message', 
// 'countryCode' => '62', //optional
// ),
//   CURLOPT_HTTPHEADER => array(
//     'Authorization: mmI+LQy6CdXBHh3CwMr7' //change TOKEN to your actual token
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;

// echo '<script>window.location="../verify-email"</script>';
// exit;
<?= $this->extend('admin/layout/create'); ?>
<?= $this->Section('content'); ?>
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body pl-6 pb-6">

                        //start
                        <h5 class="card-title">Form Input Dokumen</h5>
                        <div class="row">
                            <div class="col-12">
                                <form action="/Admin/Dokumen/save" method="Post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <div class="form-floating mb-4">
                                        <input type="text" value="<?= old('judul'); ?>" name="judul" class="form-control    " id="judul" placeholder="judul">
                                        <label for="judul">Judul</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('judul'); ?>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <select class="form-select <?= $validation->hasError('kategori_dokumen') ? 'is-invalid' : '' ?>" id="kategori_dokumen" name="kategori_dokumen" value="">
                                            <option value="<?= old('kategori_dokumen'); ?>">-- Pilih --</option>
                                            <?php foreach ($kategori as $list) { ?>
                                                <?php if ($list['id_kategori_dokumen'] == old('kategori_dokumen')) { ?>
                                                    <option value="<?= $list['id_kategori_dokumen'] ?>" selected><?= $list['kategori_dokumen']; ?></option>
                                                <?php continue;
                                                } ?>
                                                <option value="<?= $list['id_kategori_dokumen']; ?>"><?= $list['kategori_dokumen']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <label>Kategori Dokumen</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kategori_dokumen'); ?>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="text" value="<?= old('no'); ?>" name="no" class="form-control <?= $validation->hasError('no') ? 'is-invalid' : '' ?>" id="no" placeholder="no">
                                        <label for="no">No</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('no'); ?>
                                        </div>
                                    </div>
    
                                    <div class="form-floating mb-4">
                                        <input type="text" autocomplete="off" name="tahun" class="form-control <?= $validation->hasError('tahun') ? 'is-invalid' : '' ?>" id="tahun" placeholder="Tahun">
                                        <label for="tahun">Tahun</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tahun'); ?>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <select class="form-select <?= $validation->hasError('status_dokumen') ? 'is-invalid' : '' ?>" id="status_dokumen" name="status_dokumen" value="">
                                            <option value="<?= old('status_dokumen'); ?>">-- Pilih --</option>
                                            <?php foreach ($status as $list) { ?>
                                                <option value="<?= $list['id_status']; ?>"><?= $list['nama_status']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <label>Status Dokumen</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('status_dokumen'); ?>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="ditetapkan">Ditetapkan Pada</label>
                                                <input type="date" value="<?= old('ditetapkan'); ?>" name="ditetapkan" class="form-control <?= $validation->hasError('ditetapkan') ? 'is-invalid' : '' ?>" id="ditetapkan" placeholder="ditetapkan">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('ditetapkan'); ?>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <label for="berlaku">Berlaku Mulai</label>
                                                <input type="date" value="<?= old('berlaku'); ?>" name="berlaku" class="form-control <?= $validation->hasError('berlaku') ? 'is-invalid' : '' ?>" id="berlaku" placeholder="berlaku">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('berlaku'); ?>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <label for="sampai">Berlaku Sampai</label>
                                                <input type="date" value="<?= old('sampai'); ?>" name="sampai" class="form-control <?= $validation->hasError('sampai') ? 'is-invalid' : '' ?>" id="sampai" placeholder="sampai">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('sampai'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="pengganti_dokumen" >Dokumen yang diganti</label>
                                        <select class="form-select<?= $validation->hasError('status_dokumen') ? 'is-invalid' : '' ?>" id="pengganti_dokumen" name="pengganti_dokumen" data-toggle="select2">
                                            <option value="0">-- Pilih Dokumen Pengganti --</option>
                                            <option value="0">Tidak ada</option>
                                            <optgroup label="Daftar Dokumen">
                                            <?php foreach ($data1 as $list) { ?>
                                                <option value="<?= $list['id']; ?>"><?= $list['judul']; ?></option>
                                            <?php } ?>
                                            </optgroup>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('status_dokumen'); ?>
                                        </div>
                                    </div>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="1" id="terbatas" name="terbatas" <?= old('terbatas') == 1 ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="terbatas">
                                            Dokumen Terbatas
                                        </label>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="dokumen" class="form-label">Silahkan Pilih Dokumen</label>
                                        <input class="form-control form-control-sm <?= $validation->hasError('dokumen') ? 'is-invalid' : '' ?>" id="dokumen" name="dokumen" type="file" required>
                                        <canvas id="pdfViewer" height="20%"></canvas>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('dokumen'); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        <div class="col-6" align="right">
                                            <a href="/Admin/Dokumen" class="btn btn-secondary">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        // end

                        // start
                        <h5 class="card-title">Form cek Dokumen</h5>
                        <div class="row">
                            <div class="col-12">
                                <form action="/Admin/Dokumen/save" method="Post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <div class="form-floating mb-4">
                                        <input type="text" value="<?= old('judul'); ?>" name="judul" class="form-control    " id="judul" placeholder="judul">
                                        <label for="judul">Judul</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('judul'); ?>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <select class="form-select <?= $validation->hasError('kategori_dokumen') ? 'is-invalid' : '' ?>" id="kategori_dokumen" name="kategori_dokumen" value="">
                                            <option value="<?= old('kategori_dokumen'); ?>">-- Pilih --</option>
                                            <?php foreach ($kategori as $list) { ?>
                                                <?php if ($list['id_kategori_dokumen'] == old('kategori_dokumen')) { ?>
                                                    <option value="<?= $list['id_kategori_dokumen'] ?>" selected><?= $list['kategori_dokumen']; ?></option>
                                                <?php continue;
                                                } ?>
                                                <option value="<?= $list['id_kategori_dokumen']; ?>"><?= $list['kategori_dokumen']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <label>Kategori Dokumen</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kategori_dokumen'); ?>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="text" value="<?= old('no'); ?>" name="no" class="form-control <?= $validation->hasError('no') ? 'is-invalid' : '' ?>" id="no" placeholder="no">
                                        <label for="no">No</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('no'); ?>
                                        </div>
                                    </div>
    
                                    <div class="form-floating mb-4">
                                        <input type="text" autocomplete="off" name="tahun" class="form-control <?= $validation->hasError('tahun') ? 'is-invalid' : '' ?>" id="tahun" placeholder="Tahun">
                                        <label for="tahun">Tahun</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tahun'); ?>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <select class="form-select <?= $validation->hasError('status_dokumen') ? 'is-invalid' : '' ?>" id="status_dokumen" name="status_dokumen" value="">
                                            <option value="<?= old('status_dokumen'); ?>">-- Pilih --</option>
                                            <?php foreach ($status as $list) { ?>
                                                <option value="<?= $list['id_status']; ?>"><?= $list['nama_status']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <label>Status Dokumen</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('status_dokumen'); ?>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="ditetapkan">Ditetapkan Pada</label>
                                                <input type="date" value="<?= old('ditetapkan'); ?>" name="ditetapkan" class="form-control <?= $validation->hasError('ditetapkan') ? 'is-invalid' : '' ?>" id="ditetapkan" placeholder="ditetapkan">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('ditetapkan'); ?>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <label for="berlaku">Berlaku Mulai</label>
                                                <input type="date" value="<?= old('berlaku'); ?>" name="berlaku" class="form-control <?= $validation->hasError('berlaku') ? 'is-invalid' : '' ?>" id="berlaku" placeholder="berlaku">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('berlaku'); ?>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <label for="sampai">Berlaku Sampai</label>
                                                <input type="date" value="<?= old('sampai'); ?>" name="sampai" class="form-control <?= $validation->hasError('sampai') ? 'is-invalid' : '' ?>" id="sampai" placeholder="sampai">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('sampai'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="pengganti_dokumen" >Dokumen yang diganti</label>
                                        <select class="form-select<?= $validation->hasError('status_dokumen') ? 'is-invalid' : '' ?>" id="pengganti_dokumen" name="pengganti_dokumen" data-toggle="select2">
                                            <option value="0">-- Pilih Dokumen Pengganti --</option>
                                            <option value="0">Tidak ada</option>
                                            <optgroup label="Daftar Dokumen">
                                            <?php foreach ($data1 as $list) { ?>
                                                <option value="<?= $list['id']; ?>"><?= $list['judul']; ?></option>
                                            <?php } ?>
                                            </optgroup>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('status_dokumen'); ?>
                                        </div>
                                    </div>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="1" id="terbatas" name="terbatas" <?= old('terbatas') == 1 ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="terbatas">
                                            Dokumen Terbatas
                                        </label>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="dokumen" class="form-label">Silahkan Pilih Dokumen</label>
                                        <input class="form-control form-control-sm <?= $validation->hasError('dokumen') ? 'is-invalid' : '' ?>" id="dokumen" name="dokumen" type="file" required>
                                        <canvas id="pdfViewer" height="20%"></canvas>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('dokumen'); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        <div class="col-6" align="right">
                                            <a href="/Admin/Dokumen" class="btn btn-secondary">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        //end

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
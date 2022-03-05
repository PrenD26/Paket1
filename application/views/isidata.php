   <!-- Main Content -->
   <div class="main-content">
       <section class="section">
           <div class="section-header">
               <h1>Isi Data</h1>
               <div class="section-header-breadcrumb">
               <div class="breadcrumb-item active"><a href="<?=base_url('dashboard')?>">Dashboard</a></div>
               <div class="breadcrumb-item active"><a href="<?=base_url('riwayat')?>">Catatan Perjalanan</a></div>
                   <div class="breadcrumb-item">Isi Data</div>
               </div>
           </div>
           <div class="section-body">
               <div class="row ">
                   <div class="col-8 col-md-8 col-lg-8">
                       <div class="card">
                           <form action="<?= base_url('isidata/create') ?>" method="post">
                               <div class="card-header">

                                   <h4>Input Text</h4>
                               </div>
                               <div class="card-body">
                                   <div class="form-group">
                                       <label>Tanggal</label>
                                       <input type="date" class="form-control <?php if (form_error('tanggal')) {
                                                                                    echo ('is-invalid');
                                                                                } ?>" name="tanggal" placeholder="Masukkan Tanggal Perjalanan" value="<?= set_value('tanggal') ?>">
                                       <div class="invalid-feedback">
                                           <?= form_error('tanggal') ?>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label>Jam</label>
                                       <input type="time" class="form-control <?php if (form_error('waktu')) {
                                                                                    echo ('is-invalid');
                                                                                } ?>" name="waktu" placeholder="Masukkan Waktu Perjalanan" value="<?= set_value('waktu') ?>">
                                       <div class="invalid-feedback">
                                           <?= form_error('waktu') ?>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label>Lokasi Yang Dikunjungi</label>
                                       <input type="text" class="form-control <?php if (form_error('lokasi')) {
                                                                                    echo ('is-invalid');
                                                                                } ?>" name="lokasi" placeholder="Masukkan Lokasi Yang Dikunjungi" value="<?= set_value('lokasi') ?>">
                                       <div class="invalid-feedback">
                                           <?= form_error('lokasi') ?>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label>Suhu Tubuh</label>
                                       <input type="number" class="form-control <?php if (form_error('suhu_tubuh')) {
                                           echo('is-invalid');
                                       }?>" name="suhu_tubuh" value="<?=set_value('suhu_tubuh')?>" placeholder="Masukkan Suhu Tubuh">
                                <div class="invalid-feedback">
                                    <?=form_error('suhu_tubuh')?>
                                </div>   
                                </div>
                                   <div class="text-right">

                                       <button type="submit" class="btn btn-primary ">Simpan</button>
                                   </div>
                               </div>

                               <form>
                       </div>

                   </div>

               </div>
           </div>

       </section>
   </div>
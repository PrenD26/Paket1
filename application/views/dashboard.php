   <!-- Main Content -->
   <div class="main-content">
       <section class="section">
           <div class="section-header">
               <h1>Dashboard</h1>
               <div class="section-header-breadcrumb">
                   <div class="breadcrumb-item active"><a href="<?=base_url('dashboard')?>">Dashboard</a></div>
               </div>
           </div>

           <div class="section-body">
               <div class="col-12 mb-4">
                   <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="<?= base_url('assets/stisla') ?>/assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
                       <div class="hero-inner">
                           <h2>Welcome, <?= $this->session->userdata('nama') ?></h2>
                           <p class="lead">Anda Telah Berhasil Masuk Ke Aplikasi Peduli Diri</p>

                       </div>
                   </div>
               </div>
               <div class="text-right mt-5 mr-3"> 
               <a href="<?=base_url('isidata')?>" class="btn btn-primary">Isi Catatan Perjalanan</a>
           </div>
           </div>
       </section>
   </div>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Catatan Perjalanan</h1>
            <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?=base_url('dashboard')?>">Dashboard</a></div>
            <div class="breadcrumb-item">Catatan Perjalanan</div>
              
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Basic DataTables</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr class="text-center">
                                            <th >
                                                NO
                                            </th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Suhu Tubuh</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($riwayat as $ry) : ?>
                                            <tr class="text-center">
                                            <td ><?= $no++?></td>
                                                <td><?=date("D, d M Y", strtotime($ry['tanggal']));?></td>
                                                <td><?=$ry['waktu']?></td>
                                                <td><?=$ry['lokasi']?></td>
                                                <td><?=$ry['suhu_tubuh'] ?> °C</td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
</div>
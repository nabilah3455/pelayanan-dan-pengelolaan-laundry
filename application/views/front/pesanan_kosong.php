<style>
    .input {
        font-size: 30px;
        padding-bottom: 2rem;
    }

    .search-form {
        width: 500px;
        margin: 0 auto;
    }

    section {
        background-color: #0a183d;
        color: white;
    }

    .intro-section {
        padding: 5rem;
    }

    .data {
        padding-top: 15rem;
    }

    .judul {
        font-size: 30px;
    }

    .data img {
        background-color: #ff1e56;
        border-radius: 50%;
        display: block;
        margin: auto;
        padding: 2rem;
    }

    h4 {
        text-align: center;
        padding-bottom: 15rem;
    }

    .pesanan {
        margin: 4rem;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .riwayat {
        padding-top: 2rem;
    }

    .status {
        text-align: center;
    }

    .status li {
        display: inline-block;
        width: 180px;
        position: relative;
    }

    .icon {
        margin: 10px;
    }

    ul li .fa {
        background: #ccc;
        width: 25px;
        height: 25px;
        color: #fff;
        border-radius: 50%;
        padding: 5px;
    }

    ul li .fa::after {
        content: '';
        background: #ccc;
        height: 5px;
        width: 205px;
        display: block;
        position: absolute;
        left: 0;
        top: 80px;
        z-index: -1;
    }

    /* dalam antrian */
    .antrian li:nth-child(1) .fa {
        background: #148e14;
    }

    /* dalam antrian */
    .antrian li:nth-child(1) .fa::after {
        background: #148e14;
    }

    /* dicuci */
    .cuci li:nth-child(2) .fa {
        background: #148e14;
    }

    /* dicuci */
    .cuci li:nth-child(2) .fa::after {
        background: #148e14;
    }

    /* dicuci */
    .cuci li:nth-child(1) .fa {
        background: #60aa97;
    }

    /* dicuci */
    .cuci li:nth-child(1) .fa::after {
        background: #60aa97;
    }

    /* setrika */
    .setrika li:nth-child(3) .fa {
        background: #148e14;
    }

    /* setrika */
    .setrika li:nth-child(3) .fa::after {
        background: #148e14;
    }

    /* setrika */
    .setrika li:nth-child(1) .fa,
    .setrika li:nth-child(2) .fa {
        background: #60aa97;
    }

    /* setrika */
    .setrika li:nth-child(1) .fa::after,
    .setrika li:nth-child(2) .fa::after {
        background: #60aa97;
    }

    /* ambil */
    .ambil li:nth-child(4) .fa {
        background: #148e14;
    }

    /* ambil */
    .ambil li:nth-child(4) .fa::after {
        background: #148e14;
    }

    /* ambil */
    .ambil li:nth-child(1) .fa,
    .ambil li:nth-child(2) .fa,
    .ambil li:nth-child(3) .fa {
        background: #60aa97;
    }

    /* ambil */
    .ambil li:nth-child(1) .fa::after,
    .ambil li:nth-child(2) .fa::after,
    .ambil li:nth-child(3) .fa::after {
        background: #60aa97;
    }

    /* selesai */
    /* .selesai li:nth-child(4) .fa {
        background: #148e14;
    }

    /* selesai */
    .selesai li:nth-child(5) .fa::after {
        background: #148e14;
    }

    /* selesai */
    .selesai li:nth-child(1) .fa,
    .selesai li:nth-child(2) .fa,
    .selesai li:nth-child(3) .fa,
    .selesai li:nth-child(4) .fa,
    .selesai li:nth-child(5) .fa {
        background: #60aa97;
    }

    /* selesai */
    .selesai li:nth-child(1) .fa::after,
    .selesai li:nth-child(2) .fa::after,
    .selesai li:nth-child(3) .fa::after,
    .selesai li:nth-child(4) .fa::after,
    .selesai li:nth-child(5) .fa::after {
        background: #60aa97;
    }

    ul li:first-child .fa::after {
        width: 105px;
        left: 100px;
    }

    ul li:last-child .fa::after {
        width: 100px;
        right: 100px;
    }

    .ttd {
        float: right;
    }
</style>
<section class="intro-section">
    <div class="container">
        <div class="text-center input">
            Masukkan Nomor Seri atau Nomor Telepon
        </div>
        <div class="search-form">
            <form action="<?= base_url('konsumen/cari'); ?>" name="kode" method="GET">
                <input type="text" name="kode" placeholder="Input Here...">
                <button>Cari</button>
            </form>
        </div>
    </div>
</section>
<?php if ($username == "") { ?>
    <div class="data">
        <img src="<?= base_url('assets') ?>/images/media/folder.png" alt="" width="300"><br>
        <h4>Tidak Ada Data</h4>
    </div>
<?php } else { ?>
    <div class="pesanan">
        <div class="judul">
            <b>Riwayat Pesanan</b>
        </div>
        <hr>
        <!-- <img src="<?= base_url('assets/'); ?>images/member/2.jpg" height="200" width="200" alt="" class="foto"> -->
        <table style="line-height: 2;" width=100%>
            <tr>
                {data}
                <th width="15%">Nama Konsumen</th>
                <th width="1%">:</th>
                <th width="16%">{nama_konsumen}</th>
                <th width="8%">Telpon</th>
                <th width="1%">:</th>
                <th width="16%">{no_tlp}</th>
                <th rowspan=" 2" width="6%" valign="top">Alamat</th>
                <th rowspan="2" colspan="2" width="1%" valign="top">:</th>
                <th rowspan="2" colspan="2" valign="top">{alamat}</th>
                {/data}
                <!-- </tr>
        <tr>
            <th>Total Pesanan</th>
            <th>:</th>
            {data}
            <th>{total}</th>
            {/data}
        </tr> -->
        </table>
        <div class="riwayat">
            <table class="table table-borderless">
                <thead class="text-center">
                    <tr>
                        <th scope="col" width="5%">No.</th>
                        <th scope="col" width="15%">Nomor Seri</th>
                        <th scope="col">Tanggal_masuk</th>
                        <th scope="col" width="5%">Jumlah</th>
                        <th scope="col">Total Harga</th>
                        <!-- <th scope="col" width="5%">Invoice</th> -->
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $a = 1;
                        foreach ($items as $i) { ?>
                            <th scope="row" class="text-center"><?= $a ?></th>
                            <td class="text-center"><?= $i['no_seri'] ?></td>
                            <td class="text-center"><?= $i['tgl_masuk'] ?></td>
                            <td class=" text-center"><?= $i['jml_barang'] ?></td>
                            <td class="text-center">Rp. <?= $i['total'] ?></td>
                            <!-- <td class="text-center"><a type="button" class="btn btn-success" href="<?= base_url('konsumen/cetak_nota'); ?>?kode=<?= $i['no_seri']?>"><i class="fa fa-file"></i></a></td> -->
                            <td class="text-center"><a class="btn btn-primary" href="<?= base_url('konsumen/status_pesanan')?>?no_seri=<?= $i['no_seri'] ?>">
                                    Lihat Status Pesanan
                                </a>
                            </td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <?php $status = $i['status_pesanan'];
                            $antar = $i['antar'];
                                if ($status == '1') {
                            ?>
                                <div class="collapse" id="collapseExample<?= $i['no_seri'] ?>" aria-labelledby="collapseExample">

                                    <button class="btn btn-danger" disabled="disabled">Ajukan Komplain</button>
                                    <ul class="status antrian">
                                        <li class="garis">
                                            <img src="<?= base_url('assets'); ?>/images/steps/wardrobe.png" width="50px" class="icon"><br>
                                            <i class="fa fa-refresh steps"></i>
                                            <p>Dalam Antrian</p>
                                        </li>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/washing-machine.png" width="50px" class="icon"><br>
                                            <i class="fa fa-close"></i>
                                            <p>Sedang Dicuci</p>
                                        </li>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/laundry-service.png" width="50px" class="icon"><br>
                                            <i class="fa fa-close"></i>
                                            <p>Disetrika</p>
                                        </li>
                                        <?php if ($antar == 'tidak') { ?>
                                            <li>
                                                <img src="<?= base_url('assets'); ?>/images/steps/clean.png" width="50px" class="icon"><br>
                                                <i class="fa fa-close"></i>
                                                <p>Bisa Diambil</p>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <img src="<?= base_url('assets'); ?>/images/steps/delivery.png" width="50px" class="icon"><br>
                                                <i class="fa fa-close"></i>
                                                <p>Diantar</p>
                                            </li>
                                        <?php } ?>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/tick.png" width="50px" class="icon"><br>
                                            <i class="fa fa-close"></i>
                                            <p>Selesai</p>
                                        </li>
                                    </ul>
                                </div>
                            <?php } elseif ($status == '2') { ?>
                                <div class="collapse" id="collapseExample<?= $i['no_seri'] ?>" aria-labelledby="collapseExample">
                                    <button class="btn btn-danger" disabled="disabled">Ajukan Komplain</button>
                                    <ul class="status cuci">
                                        <li class="garis">
                                            <img src="<?= base_url('assets'); ?>/images/steps/wardrobe.png" width="50px" class="icon"><br>
                                            <i class="fa fa-check steps"></i>
                                            <p>Dalam Antrian</p>
                                        </li>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/washing-machine.png" width="50px" class="icon"><br>
                                            <i class="fa fa-refresh"></i>
                                            <p>Sedang Dicuci</p>
                                        </li>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/laundry-service.png" width="50px" class="icon"><br>
                                            <i class="fa fa-close"></i>
                                            <p>Disetrika</p>
                                        </li>
                                        <?php if ($antar == 'tidak') { ?>
                                            <li>
                                                <img src="<?= base_url('assets'); ?>/images/steps/clean.png" width="50px" class="icon"><br>
                                                <i class="fa fa-close"></i>
                                                <p>Bisa Diambil</p>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <img src="<?= base_url('assets'); ?>/images/steps/delivery.png" width="50px" class="icon"><br>
                                                <i class="fa fa-close"></i>
                                                <p>Diantar</p>
                                            </li>
                                        <?php } ?>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/tick.png" width="50px" class="icon"><br>
                                            <i class="fa fa-close"></i>
                                            <p>Selesai</p>
                                        </li>
                                    </ul>
                                </div>
                            <?php } elseif ($status == '4') { ?>
                                <div class="collapse" id="collapseExample<?= $i['no_seri'] ?>" aria-labelledby="collapseExample">
                                    <button class="btn btn-danger" disabled="disabled">Ajukan Komplain</button>
                                    <ul class="status setrika">
                                        <li class="garis">
                                            <img src="<?= base_url('assets'); ?>/images/steps/wardrobe.png" width="50px" class="icon"><br>
                                            <i class="fa fa-check steps"></i>
                                            <p>Dalam Antrian</p>
                                        </li>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/washing-machine.png" width="50px" class="icon"><br>
                                            <i class="fa fa-check"></i>
                                            <p>Sedang Dicuci</p>
                                        </li>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/laundry-service.png" width="50px" class="icon"><br>
                                            <i class="fa fa-refresh"></i>
                                            <p>Disetrika</p>
                                        </li>
                                        <?php if ($antar == 'tidak') { ?>
                                            <li>
                                                <img src="<?= base_url('assets'); ?>/images/steps/clean.png" width="50px" class="icon"><br>
                                                <i class="fa fa-close"></i>
                                                <p>Bisa Diambil</p>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <img src="<?= base_url('assets'); ?>/images/steps/delivery.png" width="50px" class="icon"><br>
                                                <i class="fa fa-close"></i>
                                                <p>Diantar</p>
                                            </li>
                                        <?php } ?>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/tick.png" width="50px" class="icon"><br>
                                            <i class="fa fa-close"></i>
                                            <p>Selesai</p>
                                        </li>
                                    </ul>
                                </div>
                            <?php } elseif ($status == '5') { ?>
                                <div class="collapse" id="collapseExample<?= $i['no_seri'] ?>" aria-labelledby="collapseExample">
                                    <button class="btn btn-danger" disabled="disabled">Ajukan Komplain</button>
                                    <ul class="status ambil">
                                        <li class="garis">
                                            <img src="<?= base_url('assets'); ?>/images/steps/wardrobe.png" width="50px" class="icon"><br>
                                            <i class="fa fa-check steps"></i>
                                            <p>Dalam Antrian</p>
                                        </li>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/washing-machine.png" width="50px" class="icon"><br>
                                            <i class="fa fa-check"></i>
                                            <p>Sedang Dicuci</p>
                                        </li>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/laundry-service.png" width="50px" class="icon"><br>
                                            <i class="fa fa-check"></i>
                                            <p>Disetrika</p>
                                        </li>
                                        <?php if ($antar == 'tidak') { ?>
                                            <li>
                                                <img src="<?= base_url('assets'); ?>/images/steps/clean.png" width="50px" class="icon"><br>
                                                <i class="fa fa-refresh"></i>
                                                <p>Bisa Diambil</p>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <img src="<?= base_url('assets'); ?>/images/steps/delivery.png" width="50px" class="icon"><br>
                                                <i class="fa fa-refresh"></i>
                                                <p>Diantar</p>
                                            </li>
                                        <?php } ?>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/tick.png" width="50px" class="icon"><br>
                                            <i class="fa fa-close"></i>
                                            <p>Selesai</p>
                                        </li>
                                    </ul>
                                </div>
                            <?php } elseif ($status == '7') { ?>
                                <div class="collapse" id="collapseExample<?= $i['no_seri'] ?>" aria-labelledby="collapseExample">
                               
                                    <?php if ($username != "") { ?>
                                        <a href="<?= base_url('konsumen/komplain'); ?>?id_pesanan=<?= $i['id_pesanan'] ?>" class="btn btn-danger">Ajukan Komplain</a>
                                    <?php } else { ?>
                                        <a href="<?= base_url('login'); ?>" class="btn btn-danger">Ajukan Komplain</a>

                                    <?php } ?>
                                    <!-- <a href="" data-toggle="modal" data-target="#komplain" class="btn btn-danger">Ajukan Komplain</a> -->
                                    <ul class="status selesai">
                                        <li class="garis">
                                            <img src="<?= base_url('assets'); ?>/images/steps/wardrobe.png" width="50px" class="icon"><br>
                                            <i class="fa fa-check steps"></i>
                                            <p>Dalam Antrian</p>
                                        </li>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/washing-machine.png" width="50px" class="icon"><br>
                                            <i class="fa fa-check"></i>
                                            <p>Sedang Dicuci</p>
                                        </li>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/laundry-service.png" width="50px" class="icon"><br>
                                            <i class="fa fa-check"></i>
                                            <p>Disetrika</p>
                                        </li>
                                        <?php if ($antar == 'tidak') { ?>
                                            <li>
                                                <img src="<?= base_url('assets'); ?>/images/steps/clean.png" width="50px" class="icon"><br>
                                                <i class="fa fa-check"></i>
                                                <p>Bisa Diambil</p>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <img src="<?= base_url('assets'); ?>/images/steps/delivery.png" width="50px" class="icon"><br>
                                                <i class="fa fa-check"></i>
                                                <p>Diantar</p>
                                            </li>
                                        <?php } ?>
                                        <li>
                                            <img src="<?= base_url('assets'); ?>/images/steps/tick.png" width="50px" class="icon"><br>
                                            <i class="fa fa-check"></i>
                                            <p>Selesai</p>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>
                            <hr>
                        </td>
                    </tr>
                <?php $a++;
                        } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>


<!-- Modal -->
<div class="bootstrap-modal">
    <div class="modal fade" id="basicModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bukti Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color: black">
                    <div class="kop_nota">
                        <div class="row">
                            <div class="col-lg-2">
                                LOGO
                            </div>
                            <div class="col-lg-8">
                                <div class="sub1">
                                    <b>PRIMA LESTARI<br>
                                </div>
                                <div class="sub2">
                                    LAUNDRY & DRY CLEAN CLEANING SERVICE<br></b>
                                </div>
                                Puri Bukit Depok Jl. Menteng III Rt. 04 Rw. 10 No. 18<br>
                                Hp. 0878 8135 6214<br>
                                <b>WA : 0857 1032 9617 NPWP. 25.687.980.0-403.000</b><br>
                            </div>
                        </div>
                        <hr>
                        <table width="100%" cellpadding="3">
                            <?php foreach ($data as $i) { ?>
                                <tr>
                                    <td width="13%" style="padding-left: 4px;">Cabang</td>
                                    <td width="2%">:</td>
                                    <td width="46%">Nanin</td>
                                    <td width="13%">Nomor Seri</td>
                                    <td width="2%">:</td>
                                    <td><?= $i['no_seri'] ?></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 4px;">Nama</td>
                                    <td>:</td>
                                    <td><?= $i['nama_konsumen'] ?></td>
                                    <td>Telepon</td>
                                    <td>:</td>
                                    <td><?= $i['no_tlp'] ?></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 4px;">Alamat</td>
                                    <td>:</td>
                                    <td colspan="4"><?= $i['alamat'] ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                        <div class="row" style="padding-top: 1rem;">
                            <?php foreach ($tanggal as $i) { ?>
                                <div class="col-lg-6">
                                    Terima Tanggal : <?= $i['tgl_masuk'] ?>
                                </div>
                                <div class="col-lg-6">
                                    Selesai Tanggal :
                                </div>
                            <?php } ?>
                        </div>
                        <table border="1" width="100%">
                            <tr align="center">
                                <td width="3%">No</td>
                                <td>Jenis Barang</td>
                                <td width="15%">Jumlah</td>
                                <td>Total Harga</td>
                            </tr>
                            <?php $a = 1;
                            foreach ($items as $i) { ?>
                                <tr>
                                    <td align="center"><?= $a ?></td>
                                    <td><?= $i['nama_barang'] ?></td>
                                    <td class="text-center"><?= $i['jml_barang'] ?></td>
                                    <td align="right">Rp. <?= $i['total'] ?></td>
                                </tr>
                            <?php $a++;
                            } ?>
                            <tr class="total" align="center">
                                <?php foreach ($total as $t) { ?>
                                    <td colspan="2">TOTAL</td>
                                    <td><?= $t['jml'] ?></td>
                                    <td>Rp. <?= $t['jumlah'] ?></td>
                                <?php } ?>
                            </tr>
                        </table>
                        <b class="ttd">Hormat Kami,</b>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <?php foreach ($data as $i) { ?> -->
                    <!-- <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button> -->
                    <a type="button" class="btn btn-success" href="<?= base_url('konsumen/cetak_nota'); ?>?kode={kode}">Cetak Nota</a>
                    <!-- <?php } ?> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
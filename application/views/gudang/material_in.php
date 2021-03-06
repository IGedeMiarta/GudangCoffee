     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
             <div class="container-fluid">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1>Bahan Masuk</h1>
                     </div>
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item"><a href="<?= base_url('owner') ?>">Home</a></li>
                             <li class="breadcrumb-item active">Bahan Masuk</li>
                         </ol>
                     </div>
                 </div>
             </div><!-- /.container-fluid -->
         </section>

         <!-- Main content -->
         <section class="content">

             <!-- Default box -->
             <div class="card">
                 <div class="card-header badge badge-dark">
                     <h5 class="text-dark">Tambah Material Masuk</h5>
                 </div>
                 <div class="card-body">
                     <form method="POST" action="<?= base_url('gudang/material_in_act') ?>">

                         <div class="form-group row">
                             <label for="example-text-input" class="col-sm-2 col-form-label">Nama Material</label>
                             <div class="col-sm-10">
                                 <select class="form-control" name="material">
                                     <option selected>-- Pilih</option>
                                     <?php foreach ($material as $mtrl) { ?>
                                         <option value="<?= $mtrl->kd_material; ?>"><?= $mtrl->bentuk . ' - ' . $mtrl->nama   ?></option>
                                     <?php } ?>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="example-text-input" class="col-sm-2 col-form-label">Kemasan</label>
                             <div class="col-sm-10">
                                 <select name="jumlah" id="" class="form-control">
                                     <option value="">--pilih</option>
                                     <option value="100">100 gram</option>
                                     <option value="150">150 gram</option>
                                 </select>
                             </div>
                         </div>

                         <div class="form-group row">
                             <label for="example-text-input" class="col-sm-2 col-form-label">Nama Supplier</label>
                             <div class="col-sm-10">
                                 <select class="form-control" name="supplier">
                                     <option selected>-- Pilih</option>
                                     <?php foreach ($supplier as $s) { ?>
                                         <option value="<?= $s->id_sup; ?>"><?= $s->nama_sup; ?></option>
                                     <?php } ?>
                                 </select>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-2">

                             </div>
                             <div class="col-sm-10">
                                 <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                             </div>
                         </div>

                     </form>
                 </div>

             </div>
             <div class="card">
                 <div class="card-header badge badge-warning">
                     <h5 class="text-dark">Data Material Masuk</h5>
                 </div>
                 <div class="card-body">
                     <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                         <thead>
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Nama Material </th>
                                 <th scope="col">Supplier</th>
                                 <th scope="col">Datang</th>
                                 <th class="text-center" scope="col">
                                     Masuk
                                 </th>
                                 <!-- <th scope="col">Detail</th> -->
                                 <th scope="col">Option</th>
                             </tr>
                         </thead>

                         <tbody>
                             <?php
                                $no = 1;
                                foreach ($masuk as $mtrl) { ?>
                                 <tr>
                                     <th width="10px" scope="row"><?= $no++ ?></th>

                                     <td><?= $mtrl->bentuk . ' - ' . $mtrl->nama ?></td>
                                     <td><?= $mtrl->nama_sup ?></td>
                                     <td><?= date("d M Y", strtotime($mtrl->waktu)) ?></td>
                                     <td class="text-center"><?= $mtrl->jumlah ?> gram</td>
                                     <!-- <td>
                                    <a href="" class="badge badge-info"><i class="wy-text-info"></i>Detail</a>
                                </td> -->
                                     <td>
                                         <a href="<?= base_url('gudang/material_in_edt/' . $mtrl->kd_material) ?>" class="badge badge-warning"><i class="dripicons-document-edit"></i> Edit</a>
                                         <a href="<?= base_url('gudang/material_in_del/' . $mtrl->kd_masuk) ?>" onclick="return confirm('Yakin Hapus?')" class="badge badge-danger"><i class="dripicons-trash"></i> Hapus</a>
                                     </td>
                                 </tr>
                             <?php } ?>
                         </tbody>
                     </table>
                 </div>
             </div>
             <!-- /.card -->

         </section>
         <!-- /.content -->
     </div>
     <!-- /.content-wrapper -->
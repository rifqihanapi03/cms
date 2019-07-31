<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Buku</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
            <label>nama_buku</label>
            <input type="text" name="nama_buku" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>penerbit</label>
            <input type="text" name="penerbit" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>tahun_keluar</label>
            <input type="text" name="tahun_keluar" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>jenis_buku</label>
            <input type="text" name="jenis_buku" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>gambar</label>
            <input type="text" name="gambar" class="form-control" placeholder="">
    </div>
	    <input type="hidden" name="id_buku" /> 
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

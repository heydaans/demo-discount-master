<section class="section">
  <div class="section-header">
    <h1>Transaksi</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Demo Diskon</a></div>
      <div class="breadcrumb-item">Transaksi</div>
    </div>
  </div>
  <div class="msg" style="display:none;">
    <?= @$this->session->flashdata('msg'); ?>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="col-5 text-left">
              <h4>Transaksi</h4>
            </div>
          </div>
          <br>
          <div class="card-body">
            <div class="card-body p-0" id="mrpList">
             <div class="table-responsive">
              <table class="table table-bordered">
                <tr>
                 <th>SKU</th>
                 <th>Item</th>
                 <th><div style="width: 120px;">QTY</div></th>
                 <th>Harga Per Item</th>
                 <th>Subtotal</th>
               </tr>
               <tr>
                 <td><p class="badge badge-primary"><?= $dataprod->sku ?></p></td> 
                 <td><p class="badge badge-primary"><?= $dataprod->product_name ?></p></td> 
                 <td><input class="form-control" type="text" placeholder="masukan qty penjualan" id="iqty"></td> 
                 <td><input class="form-control" type="text" value="<?= $dataprod->price ?>" id="iprice" readonly></td> 
                 <td><input class="form-control" type="text" id="isubtotal" readonly></td> 
               </tr>
             </table>
           </div>
         </div>
       </div>
       <?php if (!empty($dataprod->id_disc)) { ?>
        <div class="form-row">
          <div class="form-group col-md-7">
          </div>
          <div class="form-group col-md-4">
            <label>Diskon</label>
            <input type="number" class="form-control" id="idiscount" value="<?= $dataprod->qty_disc; ?>" readonly>
            <p>Untuk Minimal 5 Item</p>
          </div>
        </div>
      <?php } else { ?>

      <?php } ?>
      <div class="form-row">
        <div class="form-group col-md-7">
        </div>
        <div class="form-group col-md-4">
          <label>Total Biaya</label>
          <input type="number" class="form-control" id="igrand_total" readonly>
        </div>
      </div>
      <div class="card-footer text-right">
        <a class="btn btn-light" href="<?php echo base_url(); ?>product">Batal</a> &nbsp;
        <button class="btn btn-primary" type="submit" name="btn">Simpan</button>
      </div>
    </div>
  </div>
</div>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
 $(document).ready(function(){
  //hitung total
  sumtotal();
  function sumtotal()
  {
    $('#iqty').keyup(function(){ 
      var qty      = $('#iqty').val()-0;
      var price    = $('#iprice').val()-0;
      var subtotal = $('#isubtotal').val();
      var diskon   = $('#idiscount').val()-0;
      $('#isubtotal').val(qty*price);
      if (diskon) {
        if (qty >= 5) {
          $('#igrand_total').val(qty*price-diskon)
        } else {
          $('#igrand_total').val(qty*price)
        }
      } else {
        $('#igrand_total').val(qty*price)
      }
    });
  }  
});
</script>


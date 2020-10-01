<section class="section">
  <div class="section-header">
    <h1>Daftar Produk</h1>
  </div>
  <div class="row">
    <?php foreach ($product_list as $data): ?>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <article class="article">
          <div class="article-header">
            <div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/img08.jpg">
            </div>
            <div class="article-title">
              <h2 style="color: white;"><a href="#"></a><?= $data['product_name']; ?></h2>
            </div>
          </div>
          <div class="article-details">
            <p>Rp. <?= $data['price']; ?></p>
            <?php if (!empty($data['id_disc'])): ?>
              <p class="badge badge-info">Potongan Rp. <?= $data['qty_disc']; ?></p>
              <p>Untuk pembelian Min. <?= $data['minimal_product'] ?> item </p>
            <?php endif ?>
            <div class="article-cta">
              <a href="<?php echo base_url() ?>product/transaksi/<?php echo $data['id_product']; ?>" class="btn btn-primary">Pilih</a>
            </div>
          </div>
        </article>
      </div>
    <?php endforeach; ?>    
  </div>
</section>
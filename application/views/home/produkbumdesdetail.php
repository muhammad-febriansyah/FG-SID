<?php 
    $setting = $this->db->get('setting')->row();
    

?>
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Produk BUMDES</h2>
      <ol>
        <li><a href="home/index">Home</a></li>
        <li><a href="home/produkbumdes"> Produk BUMDES  <?php echo $setting->web ?></a></li>
        <li>Produk BUMDES</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
<!-- ======= Detail Akomodasi  Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-8 entries">

        <article class="entry entry-single">

          <div class="entry-img">
        <img src="image/<?php echo $image ?>" alt="" class="img img-fluid img-thumbnail">
            <!-- <img src="" alt="" class="img-fluid"> -->
          </div>

          <h2 class="entry-title">
            <a href="home/detailakomodasi/<?php echo $slug ?>"><?php echo $produk ?></a>
          </h2>

          <div class="entry-content">
            

            
            <p>
            <table class="table table-bordered table-striped">
                <tr>
                  <td>Nama Produk</td>
                  <td colspan="3">
                      <?php echo $produk ?>
                  </td>
                </tr>
                <tr>
                  <td>Kategori Produk</td>
                  <td colspan="3">
                  <?php echo $kategori ?>

                  </td>
                </tr>
                <tr>
                  <td>Harga Produk</td>
                  <td colspan="3">
                  <?php echo number_format($harga,0,',','.') ?>

                  </td>
                </tr>
                <tr>
                  <td>No. Handphone BUMDES</td>
                  <td colspan="3">
                  <?php echo $telp ?>
                  </td>
                </tr>
             

                
              </table>
                <?php echo $desk ?>
            </p>

            <a href="https://wa.me/<?php echo $telp ?>" class="btn btn-info w-100" target="_blank"><i class="fa fa-phone"></i>Hubungi Pemilik</a>   

            <!-- <div class="sharethis-inline-follow-buttons"></div> -->
            <div class="sharethis-inline-reaction-buttons"></div>

          </div>


        </article><!-- End blog entry -->
       

        <div class="blog-comments">

        

        </div><!-- End blog comments -->

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar">
        <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="home/cariProdukbumdes" method="get">
                  <input type="text" name="keyword" autocomplete="off">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Produk BUMDES Yang Populer</h3>
              <div class="sidebar-item recent-posts">
              <?php 
                foreach($populer as $z){
              ?>
                <div class="post-item clearfix">
                  <img src="image/<?php echo $z->gambar ?>" alt="">
                  <h4><a href="home/detailbumdes/<?php echo $z->slug ?>"><?php echo $z->produk ?></a></h4>
                  <time datetime="2020-01-01"><?php echo date("d F Y",strtotime($z->date)) ?></time> 
                </div>
            <?php }  ?>

              </div><!-- End sidebar recent posts-->


        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section><!-- End Detail Akomodasi  Section -->

</main><!-- End #main -->

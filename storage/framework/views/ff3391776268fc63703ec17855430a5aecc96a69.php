

<?php $__env->startSection('title'); ?> Detail Travel <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>
    <section class="section-details-header"></section>

    <!-- details -->
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-label="breadcrumb">
                  Paket Travel
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Nusa Peninda</h1>
              <p>Indonesia</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="frontend/images/pic_featured.png" class="xzoom" id="xzoom-default"
                    xoriginal="frontend/images/pic_featured.png">
                </div>
                <div class="xzoom-thumbs">
                  <a href="frontend/images/pic_featured.png">
                    <img src="frontend/images/pic_featured.png" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/pic_featured.png">
                  </a>
                  <a href="frontend/images/pic_featured.png">
                    <img src="frontend/images/pic_featured.png" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/pic_featured.png">
                  </a>
                  <a href="frontend/images/pic_featured.png">
                    <img src="frontend/images/pic_featured.png" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/pic_featured.png">
                  </a>
                  <a href="frontend/images/pic_featured.png">
                    <img src="frontend/images/pic_featured.png" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/pic_featured.png">
                  </a>
                  <a href="frontend/images/pic_featured.png">
                    <img src="frontend/images/pic_featured.png" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/pic_featured.png">
                  </a>
                </div>
              </div>
              <h2>Tantang Wisata</h2>
              <p>Nusa Penida is an island southeast of Indonesias island Bali and a district of Klungkung
                Regency that includes the neighbouring small island of Nusa Lembongan. The Badung
                Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum
                altitude of 524 metres. It is drier than the nearby island of Bali.</p>
              <p>Bali and a district of Klungkung Regency that includes the neighbouring small island of
                Nusa Lembongan. The Badung Strait separates the island and Bali.</p>
              <div class="features row">
                <div class="col-md-4">
                  <img src="frontend/images/ic_language.png" alt="" class="features-image" />
                  <div class="description">
                    <h3>Featured Event</h3>
                    <p>Tari Kecak</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <img src="frontend/images/ic_language.png" alt="" class="features-image" />
                  <div class="description">
                    <h3>Bahasa</h3>
                    <p>Indonesia</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <img src="frontend/images/ic_language.png" alt="" class="features-image" />
                  <div class="description">
                    <h3>food</h3>
                    <p>Local Food</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col lg-4">
            <div class="card card-details card-right">
              <h2> Member are going</h2>
              <div class="member my-2">
                <img src="frontend/images/Mask Group 3.png" class="member-image mr-1">
                <img src="frontend/images/Mask Group 3.png" class="member-image mr-1">
                <img src="frontend/images/Mask Group 3.png" class="member-image mr-1">
                <img src="frontend/images/Mask Group 3.png" class="member-image mr-1">
                <img src="frontend/images/Mask Group 3.png" class="member-image mr-1">
              </div>
              <hr>
              <h2>Trip Information</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Tanggal Keberangkat </th>
                  <td width="50%" class="text-right">13-14 Juli</td>
                </tr>
                <tr>
                  <th width="50%">Durasi</th>
                  <td width="50%" class="text-right">2 hari</td>
                </tr>
                <tr>
                  <th width="50%">type</th>
                  <td width="50%" class="text-right">Open Trip</td>
                </tr>
                <tr>
                  <th width="50%">Harga</th>
                  <td width="50%" class="text-right">Rp. 300000/Orang</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="Checkout.html" class="btn btn-block btn-join-now mt-3 py-2">join</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('prepend-style'); ?>
    <link rel="stylesheet" href="frontend/libraries/xzoom/xzoom.css">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('addon-script'); ?>
    <script src="<?php echo e(url('frontend/libraries/xzoom/xzoom.min.js')); ?>"></script>
    <script>
        $(document).ready(function () {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\travel\resources\views/pages/detail.blade.php ENDPATH**/ ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <section class="d-flex" style="margin: 50px auto 100px auto">
                <div class="">
                    <p style="font-size: 80px; font-weight: bold; line-height: 77px; color: #19191B; margin: 50px auto 30px auto">
                        Monitoring IoT
                    </p>
                    <p style="font-size: 20px; font-weight: 600; line-height: 30px; color: #696871; font-family: 'Mulish', sans-serif; width:85%; margin-bottom: 50px">
                        Web ini digunakan untuk memonitor perangkat IoT yang ada pada kantor.
                    </p>
                    <a class="btn color" href="/device">Start Now</a>
                </div>
            </section>
        </div>
    </div>
</div>
  
<?= $this->endSection(); ?>
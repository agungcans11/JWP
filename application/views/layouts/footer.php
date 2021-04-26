


    <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/js/owl.carousel.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
    $('#example').DataTable();
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
});
</script>
  </body>
</html>
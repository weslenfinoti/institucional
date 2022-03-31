<div class="row content">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 pb-0 mb-0 my-4 border-top">

    <div class="col-md-4 d-flex align-items-center">
      <a href="/home" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">        
               <img src="https://via.placeholder.com/30x30.png?text=Logo" />
      </a>
      <span class="text-muted">© <?php echo date('Y').' '.$titulocf; ?></span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
    <?php if($facebookcf != ""){ ?>
      <li class="ms-3"><a class="text-muted" href="<?php echo $facebookcf; ?>"><i class="fs-4 bi bi-facebook"></i></a></li>
    <?php }if($instagramcf != ""){ ?>
      <li class="ms-3"><a class="text-muted" href="<?php echo $instagramcf; ?>"><i class="fs-4 bi bi-instagram"></i></a></li>
    <?php } ?> 
    </ul>

    </footer>
</div>
<div class="row content">
    <div class="py-2 d-flex justify-content-center">
<a href="https://quattromani.com.br" target="_blank" title="Quattromani Propaganda">
<img src="<?php echo $pastacf; ?>/img/q-logo.png" width="20">
</a>
</div>
</div>
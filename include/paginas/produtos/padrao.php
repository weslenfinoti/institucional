<?php
//consulta produto interno
$sqlprod = mysqli_query($con,"SELECT * FROM produtos WHERE status = '1' AND slug = '$post' LIMIT 1");
while($lnprod = mysqli_fetch_array($sqlprod)){
    $tituloprod  = $lnprod['titulo'];
}
?>



<div class="content py-4">
    <div class="row m-0">
        <div class="col-12 col-md-4">
            <img src="https://via.placeholder.com/1000x1000/ccc/fff" class="d-block w-100" alt="...">
        </div>
            <div class="col-12 col-md-8">
  <h1><?php echo $tituloprod; ?></h1>
  <h4>Lorem ipsum..</h4>      
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

    </div>
  </div>
</div>
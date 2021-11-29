

    <main role="main">
     

<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Product Description</h1>
   
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
        <?php    $products = R::getAll("SELECT * FROM products WHERE id='$product_id'"); //load products
        foreach($products as $product){ } 
        ?>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <a href=''><img class="card-img-top"  src="http://localhost/RedBean/images/<?php echo $product['image'];?>" alt="<?php echo $product['image'];?>"></a>
         
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-4 box-shadow">
          <div class="card-body">
          <p class="card-text"><?php echo $product['title'];?></p>
            <p class="card-text"><?php echo $product['description'];?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $product['price'];?></button>
              </div>

              <div class="btn-group">
                <a href='http://localhost/RedBean/payment' class="btn btn-sm btn-outline-primary">Buy Now</a>
              </div>

            </div>
          </div>
        </div>
      </div>    
      
     
    </div>
  </div>
</div>

</main>



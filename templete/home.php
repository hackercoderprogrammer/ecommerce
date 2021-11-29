

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Best Products</h1>
        
         
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
              <?php    $products = R::getAll("SELECT * FROM products"); //load products
              foreach($products as $product){
              ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <a href="product_desc/<?php echo $product['id'];?>"><img class="card-img-top"  src="images/<?php echo $product['image'];?>" alt="<?php echo $product['image'];?>"></a>
                <div class="card-body">
                  <p class="card-text"><?php echo $product['title'];?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $product['price'];?></button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
           
          </div>
        </div>
      </div>

    </main>

   

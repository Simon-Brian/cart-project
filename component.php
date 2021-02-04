<?php 
function component($productname,$productprice,$productimage,$productdiscount,$id){
	$element="

	<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
               <form action=\"index.php\" method=\"post\">
                <div class=\"card shadow\">
                    <div>
                        <img src=\"$productimage\" alt=\"burger\" class=\"img-fluid card-img-top\">
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">$productname</h5>
                        <h6>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"far fa-star\"></i>
                        </h6>
                        <p class=\"card-text\">
                            Its mouth licking good,tasty like none other
                        </p>
                        <h5>
                            <small><s class=\"text-secondary\">ksh$productdiscount</s></small>
                            <span class=\"price\">khs$productprice</span>
                        </h5>
                        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                        <input type=\"hidden\" name=\"id\" value=$id>
                    </div>
                    
                </div>
                   
               </form>
           </div>
	";
	echo $element;
}


function cartElement($productimage,$productname,$productprice){
    $element="  <form action=\"cart.php\" method=\"get\" class=\"cart-items\">
                    <div class=\"border rounded\" >
                        <div class=\"row bg-white\" >
                            <div class=\"col-md-3 pl-0\">
                                <img src=\"$productimage\" alt=\"product-sushi\" class=\"img img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\" >$productname</h5>
                                <small class=\"text-secondary\">seller-Mr.Ngigi</small>
                                <h5 class=\"pt-2\" >ksh$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\" >Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger\" name=\"remove\" >Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\" >
                                        <i class=\"fas fa-minus\" ></i>
                                    </button>
                                    <input type=\"text\" value=\"1\" class=\"form-controll w-25 d-inline\" name=\"\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\" >
                                        <i class=\"fas fa-plus\" ></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
";
echo $element;
   
}


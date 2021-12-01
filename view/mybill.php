<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                               
                   
                                
                                <th>MÃ ĐƠN HÀNG</th>
                                <th>NGÀY ĐẶT</th>
                                <th>SỐ LƯỢNG</th>
                                <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            if(isset($listbill) && (is_array($listbill))){
                                foreach($listbill as $bill){
                                    extract($bill);
                                    $ttdh = get_ttdh($bill['bill_status']);
                                    $countsp = loadall_cart_count($bill['id']);
                                    echo'

                                    <tr class="text-center">
      
                                   
                                
                                    <td class="image-prod">
                                        <h3>'.$bill['id'].'</h3>
                                      
                                    </td>
                                    <td class="product-name">
                                        <h3>'.$bill['ngaydathang'].'</h3>
                                      
                                    </td>
                                    <td class="product-name">
                                    <h3>'.$countsp.'</h3>
                                  
                                    </td>
                                    <td class="product-name">
                                    <h3>'.$bill['total'].'</h3>
                                  
                                    </td>
                            
                                    <td class="product-name">
                                        <h3>'.$ttdh.'</h3>
                                      
                                    </td>
                                
                                   
                                </tr>

                                    
                                    
                                    '
                                    
                                    ;
                                }
                            }
						
                                
								
								?>
                          

                           

                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
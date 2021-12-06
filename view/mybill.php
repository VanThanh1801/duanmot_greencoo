<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                               
                   
                                
                                <th>Mã đơn</th>
                                <th>Ngày đặt</th>
                                <th>Số lượng</th>
                                <th>Tổng </th>
                                <th>Chi tiết</th>
                                <th>Tình trạng</th>
                                
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
      
                                   
                                
                                    <td class="product-name">
                                        <h3>MĐH'.$bill['id'].'</h3>
                                      
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
                                    <h3><a href="index.php?act=ctdh&idbill='.$bill['id'].'">Chi tiết </a></h3>
                                  
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
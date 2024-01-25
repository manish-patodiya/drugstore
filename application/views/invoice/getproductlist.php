 <?php $i=0;
  foreach($itemlist as $item){

    ?>
                                                     <div class="col-xs-6 col-sm-4 col-md-2 col-p-3">
                            <div class="panel panel-bd product-panel select_product">
                                <div class="panel-body">
                                    <img src="<?php echo !empty($item->image)?$item->image:'assets/img/icons/default.jpg'; ?>" class="img-responsive pointer" onclick="onselectimage('<?php echo $item->product_id ?>')" alt="<?php echo $item->product_name;?>">
                                    <input type="hidden" name="select_product_id" class="select_product_id" value="<?php echo $item->product_id;?>">
                                </div>
                                 <div class="panel-footer"><?php
 $text=$item->product_name;
$pieces = substr($text, 0, 11);
$ps = substr($pieces, 0, 10)."...";
$cn=strlen($text);
if ($cn>11) {
  echo $ps;
}else
{
echo $text;
}
;
                                ?></div>
                            </div>
                        </div>
                       <?php } ?>                            
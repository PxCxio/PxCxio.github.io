<?php
session_start();
require 'connect.php';
require 'item.php';

if(isset($_GET['id'])){
    $result = mysqli_query($con, 'select * from product where id='.$_GET['id']);
    $product = mysqli_fetch_object($result);
    $item = new Item();
    $item->id = $product->id;
    $item->name = $product->name;
    $item->price = $product->price;
    $item->quantity = 1;
    //check that the product exists in cart.
    $cart = unserialize(serialize($_SESSION['cart'])); 
    $index = -1;
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count(cart);$i++)
        if($cart[$i]->id==$_GET['id'])
        {
            $index = $i;
            break;
        }
    if (index==-1)       
        $_SESSION['cart'][] = $item;
        else
        {
            $cart[$index]->quantity++;
            $_SESSION['cart'][] = $cart;
        }
    }

//Delete product in cart;
if(isset($_GET['action'])){
    $cart = unserialize(serialize($_SESSION['cart']));
    $index = isExisting([$index]);
    unset($cart [$_GET['index']]);
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}
?>

<table cellpadding="2" cellspacing="2" border="1">
  <tr>
    <td>Option</td>
    <th>Id</th>
    <th>Name</th>
  	<th>Price</th>
  	<th>Quantity</th>
  	<th>Subtotal</th>
  </tr>
   <?php 
     $cart = unserialize(serialize($_SESSION['cart']));
     $s = 0;
     $index = 0;
    for($i=0; $i<count ($cart); $i++){  
        $s += $cart[$i]-> price * $cart[$i]->quantity;
        ?>
    	<tr>
    	    <td><a href="cart.php?index=<?php echo $index; ?> " onclick="return confirm('Are you sure?')">Delete</a></td>
    		<td><?php echo $cart[$i]->id;?></td>
    		<td><?php echo $cart[$i]->name;?></td>
    		<td><?php echo $cart[$i]->price;?></td>
    		<td><?php echo $cart[$i]->quantity;?></td>
    		<td><?php echo $cart[$i]->price * $cart[$i]->quantity;?></td>
    	</tr>
	<?php
        $index++;
       } 
    ?>
	<tr>
	   <td colspan="5" align="right">Sum</td>
	   <td align="left"><?php echo $s; ?> </td>
	</tr>
</table>
<br>
<a href="index.php">Continue Shopping</a>


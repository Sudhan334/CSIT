<!--
        form fileds:
            1. Product Category
            2. Product Name
            3.Product Slug
            4.Brand Name
            5.Price
            6.Quantity
            7.availability
            8. special request

-->


<?php
//var_dump(filter_var("apple01-ball.@", FILTER_VALIDATE_REGEXP,["options"=>["regexp"=>"/^[a-z0-9-\.@*#]+$/"]]));
//exit();


if(isset($_POST['submit']))
{
    $err=[];
    //validating product category
    if(!empty($_POST['product_category']))
    {
        $product_category = $_POST['product_category'];
        $product_category = strip_tags($product_category);
        $product_category = filter_var($product_category,FILTER_SANITIZE_STRING);
        echo $product_category;
    }else{
        $err['product_category'] = "plz choose product category";
    }

    //
    if(!empty($_POST['product_name']))
    {
        if(strlen($_POST['product_name']) >=4)
        {
            $product_name = filter_var($_POST['product_name'],FILTER_SANITIZE_STRING);
        }else{
            $err['product_name'] = "product name cannot be less than 4 char";
        }
    }else{
        $err['product_name'] = "product name must be provided";
    }


    //validating product slug
    if(!empty($_POST['product_slug']))
    {
        $product_slug = filter_var($_POST['product_slug'], FILTER_SANITIZE_STRING);
        if(filter_var($product_slug, FILTER_VALIDATE_REGEXP,["options"=>["regexp"=>"/^[a-z0-9-\.@*#]+$/"]]))
        {
            $product_slug = $product_slug;
        }else{
            $err['product_slug'] = "plz enter valid product slug.";
        }
    } else {
        $err['product_slug'] = "product slug filed is required";
    }


    //validating brand name
    if(!empty($_POST['brand_name']))
    {
        if(strlen($_POST['brand_name']) >=4 )
        {
            $brand_name = filter_var($_POST['brand_name'], FILTER_SANITIZE_STRING);
        }else{
            $err['brand_name'] = "brand name cannot be less than 4 character";
        }
    }else{
        $err['brand_name'] = "brand name filed is required";
    }

    //validating product price
    if(!empty($_POST['product_price']))
    {
        if(
            filter_var($_POST['product_price'], FILTER_VALIDATE_INT) ||
            filter_var($_POST['product_price'], FILTER_VALIDATE_FLOAT)
        )
        {
            $product_price = $_POST['product_price'];
        }else{
            $err['product_price'] = "price must be either integer or float vlaue";
        }
    } else {
        $err['product_price'] = "please enter product price";
    }

    //validating product qty
    if(!empty($_POST['product_qty']) && is_numeric($_POST['product_qty']))
    {
        if(filter_var($_POST['product_qty'], FILTER_VALIDATE_INT))
        {
            $product_qty = $_POST['product_qty'];
        }else{
            $err['product_qty'] = "product qty value should be integer";
        }
    }else{
        $err['product_qty'] = "plz enter product quantity";
    }

    //validating availability

    if(filter_var($_POST['availability'],FILTER_VALIDATE_BOOLEAN))
    {
        $availability = $_POST['availability'];
    }else{
        $err['availability'] = "invalid value provided";
    }


    if(count($err) > 0)
    {
        echo "<pre>";
        print_r($err);
        echo "</pre>";
    }else{
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }




}

?>

<style type="text/css">
    .error{
        color:red;
    }
</style>

<table cellspacing="10px" cellpadding="10px;">
    <form method="POST">
    <tr>
        <td>Product Category</td>
        <td><select name="product_category">
                <option value="">----select category----</option>
                <option value="grocery">Grocery</option>
                <option value="bevrage">Bevrage</option>
                <option value="personal_care">Personal Care</option>
            </select> </td>
        <td>Product Name</td>
        <td><input type="text" name="product_name"> </td>
    </tr>
    <tr>
        <?php if(isset($err['product_category'])) { ?>
        <td colspan="2" class="error">*dldklfjlkljljldjf</td>
        <?php } ?>
        <?php if(isset($err['product_name'])) { ?>
        <td colspan="2" class="error">*kkdlkjfdlfj</td>
        <?php } ?>
    </tr>

    <tr>
        <td>Product Slug</td>
        <td><input type="text" name="product_slug"></td>
        <td>Brand Name</td>
        <td><input type="text" name="brand_name"> </td>
    </tr>
    <tr>
        <td colspan="2" class="error">*dldklfjlkljljldjf</td>
        <td colspan="2" class="error">*kkdlkjfdlfj</td>
    </tr>

    <tr>
        <td>Product price</td>
        <td><input type="number" name="product_price" step="0.01"></td>
        <td>Product Quantity</td>
        <td><input type="number" name="product_qty"> </td>
    </tr>
    <tr>
        <td colspan="2" class="error">*dldklfjlkljljldjf</td>
        <td colspan="2" class="error">*kkdlkjfdlfj</td>
    </tr>

    <tr>
        <td>Product Availability</td>
        <td><input type="radio" name="availability" value="1" checked> Available</td>
        <td><input type="radio" name="availability" value="0"> Not Available</td>

    </tr>
    <tr>
        <td colspan="2" class="error">*dldklfjlkljljldjf</td>
    </tr>

        <tr>
            <td colspan="4">
            Special Request
            </td>
        </tr>
    <tr>
        <td colspan="4"><textarea name="special_request" cols="90" rows="10"></textarea></td>
    </tr>
    <tr>
        <td colspan="4" class="error">*dldklfjlkljljldjf</td>
    </tr>
    <tr>
        <td colspan="4" style="text-align: center"><input type="submit" name="submit" value="Save"> </td>
    </tr>
    </form>

</table>

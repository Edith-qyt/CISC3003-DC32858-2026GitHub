<?php
function outputOrderRow($file, $title, $quantity, $price) {
    $amount = $quantity * $price;
    $formattedPrice = number_format($price, 2);
    $formattedAmount = number_format($amount, 2);
    
    echo <<<HTML
    <tr>
        <td><img src="{$file}" alt="{$title}" class="product-cover"></td>
        <td>{$title}</td>
        <td>{$quantity}</td>
        <td>\${$formattedPrice}</td>
        <td class="text-right">\${$formattedAmount}</td>
    </tr>
HTML;
}
?>
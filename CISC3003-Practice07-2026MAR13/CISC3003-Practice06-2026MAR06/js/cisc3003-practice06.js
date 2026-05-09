// 渲染商品行
for (let i = 0; i < cartItems.length; i++) {
    const item = cartItems[i];
    const rowTotal = calculateTotal(item.quantity, item.price);
    outputCartRow(item.file, item.title, item.quantity, item.price, rowTotal);
}

// 计算总计
let subtotal = 0;
for (let i = 0; i < cartItems.length; i++) {
    subtotal += calculateTotal(cartItems[i].quantity, cartItems[i].price);
}

const taxRate = 0.10;
const shippingThreshold = 1000;

const tax = calculateTax(subtotal, taxRate);
const shipping = calculateShipping(subtotal, shippingThreshold);
const grandTotal = calculateGrandTotal(subtotal, tax, shipping);

// 渲染总计行
document.write("<tr class='totals'>");
document.write("<td colspan='4'>Subtotal</td>");
document.write("<td>" + outputCurrency(subtotal) + "</td>");
document.write("</tr>");
document.write("<tr class='totals'>");
document.write("<td colspan='4'>Tax</td>");
document.write("<td>" + outputCurrency(tax) + "</td>");
document.write("</tr>");
document.write("<tr class='totals'>");
document.write("<td colspan='4'>Shipping</td>");
document.write("<td>" + outputCurrency(shipping) + "</td>");
document.write("</tr>");
document.write("<tr class='totals focus'>");
document.write("<td colspan='4'>Grand Total</td>");
document.write("<td>" + outputCurrency(grandTotal) + "</td>");
document.write("</tr>");

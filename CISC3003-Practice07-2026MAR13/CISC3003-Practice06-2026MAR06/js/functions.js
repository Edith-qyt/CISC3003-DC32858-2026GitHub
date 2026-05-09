/**
 * 计算单行商品的总价
 * @param {number} quantity - 商品数量
 * @param {number} price - 商品单价
 * @returns {number} 单行总价
 */
function calculateTotal(quantity, price) {
    return quantity * price;
}

/**
 * 输出购物车单行数据到HTML表格
 * @param {string} file - 商品图片文件名
 * @param {string} title - 商品名称
 * @param {number} quantity - 商品数量
 * @param {number} price - 商品单价
 * @param {number} total - 单行总价
 */
// 1. 输出单行购物车
function outputCartRow(file, title, quantity, price, total) {
    document.write("<tr>");
    document.write("<td><img src='../images/" + file + "' alt='" + title + "'></td>");
    document.write("<td>" + title + "</td>");
    document.write("<td>" + quantity + "</td>");
    document.write("<td>" + outputCurrency(price) + "</td>");
    document.write("<td>" + outputCurrency(total) + "</td>");
    document.write("</tr>");
}

// 2. 计算单行总价
function calculateTotal(quantity, price) {
    return quantity * price;
}

// 3. 计算税费
function calculateTax(subtotal, rate) {
    return subtotal * rate;
}

// 4. 计算运费
function calculateShipping(subtotal, threshold) {
    return subtotal > threshold ? 0 : 40;
}

// 5. 计算总计
function calculateGrandTotal(subtotal, tax, shipping) {
    return subtotal + tax + shipping;
}

// 6. 格式化货币输出
function outputCurrency(num) {
    return "$" + num.toFixed(2);
}
        

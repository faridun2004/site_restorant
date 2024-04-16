<form action="../Addition/checkout.php" method="POST">
    <label for="delivery_method">Выберите способ доставки:</label>
    <select name="delivery_method" id="delivery_method">
        <option value="restaurant">В ресторане</option>
        <option value="delivery">Доставка</option>
    </select>
    <button type="submit" name="place_order">Оформить заказ</button>
</form>
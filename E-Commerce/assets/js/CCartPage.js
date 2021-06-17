import PagesInit from "./CPagesInit.js";

export default class CartPage extends PagesInit {
  static removeItem() {
    const removeBtn = document.querySelectorAll(".removeItem");

    removeBtn.forEach((item) => {
      item.addEventListener("click", (e) => {
        if (confirm("Are you sure you want to remove this item?")) {
          let row = item.closest(".tableRow");
          row.remove();

          let deleteItem = item
            .closest(".tableRow")
            .querySelector(".tableThumbnail")
            .getAttribute("src");

          $.ajax({
            method: "POST",
            url: "logic/cart/modifyCart.php",
            data: { deleteItem },
          });
        }
      });
    });
  }

  static alterQuantity() {
    var quantity = 0;

    document.addEventListener("click", (e) => {
      if (
        $(e.target).hasClass("incrementQuantity") ||
        $(e.target).hasClass("decrementQuantity")
      ) {
        if ($(e.target).hasClass("incrementQuantity")) {
          quantity = e.target.previousElementSibling;
          quantity.value++;
        } else if ($(e.target).hasClass("decrementQuantity")) {
          quantity = e.target.nextElementSibling;
          if (quantity.value > 1) quantity.value--;
        }
        let total = e.target.closest(".tableRow").querySelector(".totalItem");
        let price = e.target.closest(".tableRow").querySelector(".price");

        let thumbnail = e.target
          .closest(".tableRow")
          .querySelector(".tableThumbnail")
          .getAttribute("src");

        quantity.innerHTML = quantity.value;

        if (quantity.value >= 1)
          $.ajax({
            method: "POST",
            url: "logic/cart/modifyCart.php",
            data: { thumbnail: thumbnail, quantity: quantity.value },
          });

        price = price.innerHTML.split(" ")[0];

        total.innerHTML = `${price * quantity.value} $`;
        this.alterTotal();
      }
    });
  }

  static clearCart() {
    const clearAll = document.querySelector(".clearCart");

    clearAll.addEventListener("click", (e) => {
      if (confirm("Are you sure you want to clear your cart?")) {
        let allRows = document.querySelectorAll(".tableRow");
        allRows.forEach((row) => {
          row.remove();
        });
        $.ajax({
          method: "POST",
          url: "logic/cart/modifyCart.php",
          data: { flushCart: true },
        });
        let subtotal = document.querySelector(".subtotal");
        let total = document.querySelector(".total");
        subtotal.innerHTML = total.innerHTML = `0 $`;
      }
    });
  }

  static alterTotal() {
    let totalItem = document.querySelectorAll(".totalItem");

    if (totalItem != undefined) {
      let subtotal = document.querySelector(".subtotal");
      let total = document.querySelector(".total");
      let sum = 0;
      totalItem.forEach((item) => {
        sum += Number(item.innerHTML.split(" ")[0]);
      });
      subtotal.innerHTML = `${sum} $`;
      total.innerHTML = `${sum} $`;
    }
  }

  static init() {
    PagesInit.hideShowModal();
    PagesInit.openLikePage();
    this.removeItem();
    this.alterQuantity();
    this.clearCart();
    this.alterTotal();
  }
}

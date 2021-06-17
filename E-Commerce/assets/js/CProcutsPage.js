import PagesInit from "./CPagesInit.js";

export default class ProdcutsPage extends PagesInit {
  static checkLiked() {
    const likeBtn = document.querySelector(".like");
    const thumbnail = document
      .querySelector(".activeContentImg")
      .getAttribute("src");
    if (this.likedProducts.includes(thumbnail)) {
      likeBtn.children[0].setAttribute("src", "./assets/img/logos/heart.webp");
    }

    likeBtn.addEventListener("click", (e) => {
      if (!localStorage.getItem(thumbnail)) {
        localStorage.setItem(thumbnail, 1);
        likeBtn.children[0].setAttribute(
          "src",
          "./assets/img/logos/heart.webp"
        );
      } else {
        localStorage.removeItem(thumbnail, 1);
        likeBtn.children[0].setAttribute("src", "./assets/img/logos/like.webp");
      }
    });
  }

  static addItemToCart() {
    const addToCart = document.querySelector(".addToCart");

    if(addToCart!=undefined){

      addToCart.addEventListener("click", (e) => {
        const itemThumbnail = document
          .querySelector(".activeContentImg")
          .getAttribute("src");
  
        $.ajax({
          method: "POST",
          url: "logic/cart/importToCart.php",
          data: { itemThumbnail },
        });
      });
    }
  }


  static init() {
    PagesInit.hideShowModal();
    PagesInit.openLikePage();
    PagesInit.toastInit();
    this.checkLiked();
    this.addItemToCart();
  }
}

import * as text from "./view.js";

export default class PagesInit {
  static likedProducts = Object.keys(localStorage);

  static hideShowModal = () => {
    const modalBody = document.querySelector(".modal-body"); // Select modal body

    document.addEventListener("click", (e) => {
      if (e.target.id == "login") {
        modalBody.innerHTML = text.loginModal;
      } else if (e.target.id == "register") {
        modalBody.innerHTML = text.regModal;
      }
    });
  };

  static likedItemsCheck() {
    const likeBtn = document.querySelectorAll(".like");

    let thumbnails = document.querySelectorAll(".thumbnail");

    for (let i = 0; i < this.likedProducts.length; i++) {
      for (let j = 0; j < thumbnails.length; j++) {
        if (thumbnails[j].getAttribute("src") == this.likedProducts[i]) {
          let checkLikedItem = thumbnails[j]
            .closest(".itemContainer")
            .querySelector(".likeImg")
            .setAttribute("src", "./assets/img/logos/heart.webp");
          break;
        }
      }
    }

    likeBtn.forEach((like) => {
      like.addEventListener("click", (e) => {
        let thumbnail = like
          .closest(".itemContainer")
          .querySelector(".thumbnail")
          .getAttribute("src");

        let src = like.closest(".itemContainer").querySelector(".likeImg");

        if (localStorage.getItem(thumbnail)) {
          localStorage.removeItem(thumbnail);
          src.setAttribute("src", "./assets/img/logos/like.webp");
        } else {
          localStorage.setItem(thumbnail, 1);
          src.setAttribute("src", "./assets/img/logos/heart.webp");
        }
      });
    });
  }

  static addItemToCart() {
    function addToCart(e) {
      if ($(e.target).hasClass("addToCart")) {
        let itemThumbnail = e.target
          .closest(".itemContainer")
          .querySelector(".thumbnail")
          .getAttribute("src");

        $.ajax({
          method: "POST",
          url: "logic/cart/importToCart.php",
          data: { itemThumbnail },
        });
      }
    }
    document.addEventListener("click", addToCart);
  }

  static openProductPage() {
    const thumbnails = document.querySelectorAll(".thumbnail");

    thumbnails.forEach((item) => {
      item.addEventListener("click", (e) => {
        item.closest(".productForm").submit();
      });
    });
  }

  static openLikePage() {
    const likeBtn = document.querySelector(".likePage");

    const inp = document.querySelector("#likedPage");
    let storageEmpty = true;

    likeBtn.addEventListener("click", (e) => {
      const likedProducts = Object.keys(localStorage);

      for (const item of likedProducts) {
        if (item[0] == ".") {
          storageEmpty = false;
          break;
        }
      }
      if (!storageEmpty) {
        inp.value = likedProducts;
      } else {
        inp.value = "null";
      }
    });
  }

  static toastInit() {
    const addToCartBtn = document.querySelectorAll(".addToCart");

    addToCartBtn.forEach((button) => {
      button.addEventListener("click", (e) => {
        $(".toast").toast("show");
      });
    });

    const close = document.querySelector(".close");

    close.addEventListener("click", (e) => {
      $(".toast").toast("hide");
    });
  }

  static mainPageLikePageInit() {
    this.hideShowModal();
    this.likedItemsCheck();
    this.addItemToCart();
    this.openProductPage();
    this.openLikePage();
    this.toastInit();
  }
}

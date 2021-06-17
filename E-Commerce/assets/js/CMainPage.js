import PagesInit from "./CPagesInit.js";

export default class MainPage extends PagesInit {
  static carouselInit() {
    const mainCarousel = document.querySelector("#mainCarousel");
    const mCarousel = new mdb.Carousel(mainCarousel);

    mCarousel.nextWhenVisible();
    mCarousel.cycle({
      interval: 10000,
    });
  }

  static hideShowCategories(e) {
    const products = ["samsung", "huawei", "jbl", "apple"];

    let focusedProduct = e.target.getAttribute("alt");

    if (products.includes(focusedProduct)) {
      document.querySelectorAll(`.itemContainer`).forEach((brand) => {
        if (brand.className.includes("hide")) brand.classList.toggle("hide");
        if (!brand.childNodes[1].className.includes(focusedProduct)) {
          brand.classList.toggle("hide");
        }
      });
    } else if (focusedProduct == "allCategories") {
      document.querySelectorAll(`.itemContainer`).forEach((brand) => {
        if (brand.className.includes("hide")) brand.classList.toggle("hide");
      });
    }
  }

  static showHideFocus() {
    document.addEventListener("click", this.hideShowCategories);
    document.addEventListener("touchstart", this.hideShowCategories);
  }

  static commentSend() {
    const commentName = document.querySelector("#commentName");
    const comment = document.querySelector("#comment");
    const sendComment = document.querySelector("#sendComment");

    let time = new Date();
    let date = `${time.getFullYear()}-${time.getMonth()}-${time.getDay()}`;

    let emojis = ["😠", "😦", "😑", "😀", "😍"];

    const emoji = document.querySelector("#reviewEmoji");
    const emojiLabel = document.querySelector(".emoji");

    emoji.addEventListener("input", (e) => {
      emojiLabel.innerHTML = emojis[emoji.value];
    });

    sendComment.addEventListener("click", (e) => {
      if (commentName.value && comment.value) {
        $.ajax({
          method: "POST",
          url: "logic/main/sendReview.php",
          data: {
            commentName: commentName.value,
            comment: comment.value,
            date: date,
            emojiValue: emoji.value,
          },
        });
        alert("Your review is sent!");
      }
    });
  }

  static init() {
    PagesInit.mainPageLikePageInit();
    this.carouselInit();
    this.showHideFocus();
    this.commentSend();
  }
}

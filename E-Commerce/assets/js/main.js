const pathname = window.location.pathname;

import MainPage from "./CMainPage.js";
import PagesInit from "./CPagesInit.js";
import CartPage from "./CCartPage.js";
import ProdcutsPage from "./CProcutsPage.js";

if (pathname == "/E-Commerce/" || pathname == "/E-Commerce/index.php") {
  MainPage.init();
} else if (pathname == "/E-Commerce/like.php") {
  PagesInit.mainPageLikePageInit();
} else if (pathname == "/E-Commerce/cart.php") {
  CartPage.init();
} else if (pathname == "/E-Commerce/product.php") {
  ProdcutsPage.init();
}

document.addEventListener("DOMContentLoaded", function () {
  const humburgerMenu = document.getElementById("humburgerMenu");
  const closeResponsive = document.getElementById("closeHumburgerMenu");

  humburgerMenu.addEventListener("click", function () {
    const navigation = document.getElementById("navigation");
    navigation.classList.remove(
      "md:hidden",
      "md:top-14",
      "sm:hidden",
      "sm:top-14",
      "xsm:hidden",
      "xsm:top-14",
      "xxsm:hidden",
      "xxsm:top-14"
    );
    navigation.classList.add(
      "xsm:opacity-100",
      "xsm:transition-all",
      "xsm:ease-in",
      "xsm:duration-500",
      "xxsm:opacity-100",
      "xxsm:transition-all",
      "xxsm:ease-in",
      "xxsm:duration-500"
    );

    humburgerMenu.classList.add(
      "md:hidden",
      "sm:hidden",
      "xsm:hidden",
      "xxsm:hidden"
    );
    closeResponsive.classList.remove(
      "md:hidden",
      "sm:hidden",
      "xsm:hidden",
      "xxsm:hidden"
    );
  });
  closeResponsive.addEventListener("click", function () {
    const navigation = document.getElementById("navigation");
    navigation.classList.add(
      "md:hidden",
      "sm:hidden",
      "xsm:hidden",
      "xxsm:hidden"
    );
    closeResponsive.classList.add(
      "md:hidden",
      "sm:hidden",
      "xsm:hidden",
      "xxsm:hidden"
    );
    humburgerMenu.classList.remove(
      "md:hidden",
      "sm:hidden",
      "xsm:hidden",
      "xxsm:hidden"
    );
  });
});

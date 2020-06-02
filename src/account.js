"use strict";
(function () {
  let Icons = {
    nice: '<i style="color:#12a339; " class="fa-7x fas fa-check"></i>',
    bad:
      '<i style="color:#b99315;" class="fa-7x fas fa-exclamation-triangle"></i>',
  };

  function rightOrWrong(message, icon) {
    $("#Titel").text(message);
    $("#completed .modal-body").html(icon);
    $("#completed").modal("show");
  }

  // General ajax request
  function Gajax(url, query, P_or_G) {
    // Return the $.ajax promise
    return $.ajax({
      url: url,
      data: query,
      method: P_or_G,
    });
  }

  // returns an array for all the inputs values by select a modal id
  function getUserInput(WhichModal) {
    return $(WhichModal)
      .map(function () {
        if ($(this).val() != "") {
          return $(this).val();
        }
      })
      .get();
  }
  // for logout button
  function logOut() {
    $("#logout").on("click", function () {
      $.ajax({ url: "controller/account/logout.php" }).done(() => {
        window.location.href = "index.php";
      });
    });
  }

  let selected = {
    email: null,
    whereIam: "account",
  };
  function main() {
    logOut();
    $("#add").on("click", function (e) {
      $("#add-account-modal").modal("show");
    });
    $("#add-account-btn").on("click", function (e) {
      e.preventDefault;
      let values = getUserInput("#add-account-modal :input");
      values.pop();
      if (values.length == 4) {
        typeof $("input:checked").val() == "undefined"
          ? values.push(0)
          : values.push(1);

        Gajax(
          "/controller/account/add-account.php",
          { data: values },
          "POST"
        ).done(function (d) {
          if (d == 1) {
            location.reload();
          } else {
            rightOrWrong("There is an account under this email", Icons.bad);
          }
        });
      } else {
        rightOrWrong("Check you input values again", Icons.bad);
      }
    });
    $("#main-content").on("click", ".give-accese-or-lose", function () {
      selected.email = $(this).attr("data-account-email");
      let admin = $(this).attr("data-account-admin");
      let mode = $(this)[0].innerHTML;
      if (admin == "1") {
        admin = 0;
        $(this)[0].innerHTML = "Lose Admin";
      } else {
        admin = 1;
        $(this)[0].innerHTML = "Be an Admin";
      }
      if (mode == "Lose Admin" || mode == "Be an Admin") {
        Gajax(
          "controller/account/update-account.php",
          { email: selected.email, admin: admin },
          "POST"
        ).done(function (d) {
          location.reload();
        });
      }
    });
    $("#main-content").on("click", ".delete-account", function () {
      selected.email = $(this).attr("data-account-email");
      if ($(this)[0].innerHTML != "DELETE") {
        $(this)[0].innerHTML = "DELETE";
      } else {
        Gajax(
          "controller/account/delete-account.php",
          {
            email: selected.email,
          },
          "POST"
        ).done(function () {
          location.reload();
        });
      }
    });
  }
  function loadingAccounts() {
    Gajax("/controller/account/retrun-accounts.php", {}, "GET").done(function (
      d
    ) {
      $("#main-content").html(d);
    });
  }
  function start() {
    loadingAccounts();
    main();
  }

  window.addEventListener("load", start);
})();

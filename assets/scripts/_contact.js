(function($) {
  /*** CONTACT FORM ******/
  $("#contact_form").on("submit", function(ev, frm) {
    ev.preventDefault();

    //alert("elcsipve");

    //get input field values
    var user_name = $("input[name=message_name]").val();
    var user_bname = $("input[name=message_bname]").val();
    var user_email = $("input[name=message_email]").val();
    var user_tel = $("input[name=message_tel]").val();
    var user_msg = $("textarea[name=message_text]").val();
    var user_service = $("select[name=message_service]").val();

    //var btntext = $("#contact_submit").text();

    var proceed = true;

    if (user_name === "") {
      proceed = false;
    }
    if (user_email === "") {
      proceed = false;
    }

    // if (user_tel === "") {
    //     proceed = false;
    // }

    // if ($("input:checkbox[name=accept]:checked").length < 1) {
    //   proceed = false;
    // }

    //everything looks good! proceed...
    if (proceed) {
      //data to be sent to server
      var post_data = {
        userName: user_name,
        userbName: user_bname,
        userEmail: user_email,
        userTel: user_tel,
        userService: user_service,
        userMsg: user_msg
      };
      $("#contact_submit").addClass("disabled");
      $("#contact_submit").attr("disabled", "disabled");
      //$("#contact_submit").text("Sending");

      //Ajax post data to server
      $.post(
        $("#contact_form").attr("action"),
        post_data,
        function(response) {
          var output = "";

          //load json data from server and output message
          if (response.type === "error") {
            output = '<p class="form-error">' + response.text + "</p>";
          } else {
            output = '<p class="form-helper">' + response.text + "</p>";

            var fn = window.gtag;
            if (typeof fn === "function") {
              gtag("event", "sent", {
                event_category: "form"
              });
              console.log("Gtag event fired");
            } else {
              console.log("No global gtag defined");
            }

            //reset values in all input fields
            $("#contact_form input").val("");
            $("#contact_form textarea").val("");
          }
          $("#result")
            .hide()
            .html(output)
            .slideDown();
          $("#contact_submit").removeClass("disabled");
          $("#contact_submit").removeAttr("disabled");
          //$("#contact_submit").text(btntext);
        },
        "json"
      );
    }

    return false;
  });

  //reset previously set border colors and hide all message on .keyup()
  $("#contact_form input, #contact_form textarea, #contact_form #accept").keyup(
    function() {
      //$("#contact_form input, #contact_form textarea").css('border-color', '');
      $("#result").slideUp();
      $("#formerror").slideUp();
    }
  );

  $("#contact_form #accept").on("change", function() {
    $("#result").slideUp();
    $("#formerror").slideUp();
  });
})(jQuery); // Fully reference jQuery after this point.

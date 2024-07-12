let headings = ["first", "second", "third"];

let login__username, login__password;

function displayHeadingsSequentially(index) {
  if (index >= headings.length) {
    displayHeadingsSequentially(0);
    return; // Ensure to return to avoid further execution
  }

  let currentHeading = headings[index];
  let element = document.getElementsByClassName(`${currentHeading}`)[0];

  // Display current heading
  element.style.display = "block";
  element.classList.add("animate__animated", "animate__fadeIn");

  // Wait for the fadeIn animation to complete
  setTimeout(() => {
    // Add delay to keep the element visible
    setTimeout(() => {
      // Trigger fadeOut animation
      element.classList.remove("animate__fadeIn");
      element.classList.add("animate__fadeOut");

      // Wait for fadeOut animation to complete
      setTimeout(() => {
        element.style.display = "none";
        element.classList.remove("animate__animated", "animate__fadeOut");
        // Call recursively to display the next heading
        displayHeadingsSequentially(index + 1);
      }, 1000); // adjust timing as needed based on animate.css animation duration
    }, 2000); // adjust delay before fadeOut based on how long you want to keep it visible
  }, 100); // adjust this timeout to ensure the fadeIn animation has started
}

// Start displaying headings sequentially, starting from index 0
displayHeadingsSequentially(0);
const proceedUser = () => {
  // Add rotation animation to pfp div
  if ($("#login_username").val() == "") {
    $("#login_username").addClass("animate__shakeX");
    $("#login_username").css({
      border: "1px solid red",
    });
    setTimeout(() => {
      $("#login_username").removeClass("animate__shakeX");
    }, 1000);
  } else {
    $("#pfp").addClass("rotate-animation");

    $.ajax({
      url: "system/cch.php",
      type: "POST",
      data: {
        type: 1,
        username: $("#login_username").val(),
      },
      dataType: "json",
      success: function (response) {
        if (response === 0) {
          $("#pfp").removeClass("rotate-animation");
          $("#pfp").addClass("rotate-animation-stop");
          setTimeout(() => {
            $("#pfp").removeClass("rotate-animation-stop");
            $("#login_username").val("");
            $("#login_username").css({
              border: "1px solid red",
            });
          }, 2000);
        } else {
          login__username = $("#login_username").val();
          $("#continue_email").attr("id", "continue_password");
          $("#continue_password").attr("onclick", "proceedPassword()");
          // Delay to simulate loading time (adjust as needed)
          setTimeout(function () {
            // Remove rotation animation from pfp div
            $("#pfp").removeClass("rotate-animation");
            $("#pfp").addClass("rotate-animation-stop");
            if (
              response.user_tumb == "default_male.png" ||
              response.user_tumb == "default_female.png" ||
              response.user_tumb == "default_avatar.png"
            ) {
              // Update pfp background image
              $("#pfp").css({
                "background-image": `url(${document.location.href}default_images/avatar/${response.user_tumb} )`,
              });
            } else {
              $("#pfp").css({
                "background-image": `url(${document.location.href}avatar/${response.user_tumb} )`,
              });
            }
          }, 1000); // Delay in milliseconds (1 second in this example)
          $("#login_username").addClass("animate__fadeOut");
          setTimeout(() => {
            $("#login_username").css({
              display: "none",
            });
          }, 1000);
          $("#login_password").addClass("animate__fadeIn");
          setTimeout(() => {
            $("#login_password").css({
              display: "block",
            });
          }, 1000);
          $("#login_password").removeClass("animate__fadeIn");
        }
      },
      error: function (xhr, status, error) {
        console.error("Error fetching data:", error);
        // Remove rotation animation on error (optional)
        $("#pfp").removeClass("rotate-animation");
      },
    });
  }
};
const proceedPassword = () => {
  let passwordBox = $("#login_password");

  if (passwordBox.val() == "") {
    passwordBox.addClass("animate__shakeX");
    passwordBox.css({
      border: "1px solid red",
    });
    setTimeout(() => {
      passwordBox.removeClass("animate__shakeX");
    }, 1000);
  } else {
    $("#continue_password").html("Please wait...");
    $.ajax({
      url: "system/action/login.php",
      type: "POST",
      data: {
        token: 0,
        cp: "home",
        password: passwordBox.val(),
        username: login__username,
      },
      dataType: "json",
      success: function (response) {
        $("#continue_password").html("Continue");
        if (response === 3) {
          location.reload();
        } else {
          showAlert("error", "Incorrect Password");
        }
      },
    });
  }
};

const showAlert = (type, message) => {
  if (type == "error") {
    Toastify({
      text: message,
      duration: 3000,
      newWindow: true,
      gravity: "top",
      position: "center",
      stopOnFocus: true,
      className: "error-toast", // Apply a custom class for styling
      onClick: function () {},
    }).showToast();
  }
};

const registerNow = () => {
  let username = $("#register__username").val();
  let email = $("#register__email").val();
  let password = $("#register__password").val();
  let age = $("#login_select_age").val();
  let gender = $("#login_select_gender").val();

  if (username == "" || email == "" || password == "" || age == 0) {
    showAlert("error", "All fields are required");
  } else {
    $.ajax({
      url: "system/action/registration.php",
      type: "POST",
      data: {
        token: 0,
        cp: "home",
        password: password,
        username: username,
        email: email,
        age: age,
        gender: gender,
        recaptcha: "disabled",
      },
      dataType: "json",
      success: function (response) {
        if (response == 5) {
          showAlert("error", "Username already taken.");
        } else if (response == 17) {
          showAlert("error", "Password too short.");
        } else if (response == 1) {
          location.reload();
        } else {
          showAlert("error", "An error occured.");
        }
      },
    });
  }
};

const showRegister = () => {
  $("#loginContainer").addClass("animate__fadeOutRight");
  $("#registerButton").css({
    display: "none",
  });
  $("#loginButton").css({
    display: "block",
  });
  setTimeout(() => {
    $("#loginContainer").css({
      display: "none",
    });
    $("#registerContainer").css({
      display: "flex",
    });
    $("#registerContainer").addClass("animate__fadeInLeft");
  }, 800);
  setTimeout(() => {
    $("#loginContainer").removeClass("animate__fadeOutRight");
    $("#registerContainer").removeClass("animate__fadeInLeft");
  }, 1800);
};
const showLogin = () => {
  $("#registerContainer").addClass("animate__fadeOutRight");
  $("#registerButton").css({
    display: "block",
  });
  $("#loginButton").css({
    display: "none",
  });
  setTimeout(() => {
    $("#loginContainer").css({
      display: "flex",
    });
    $("#registerContainer").css({
      display: "none",
    });
    $("#loginContainer").addClass("animate__fadeInLeft");
  }, 800);
  setTimeout(() => {
    $("#registerContainer").removeClass("animate__fadeInLeft");
    $("#registerContainer").removeClass("animate__fadeOutRight");
    $("#loginContainer").removeClass("animate__fadeInLeft");
  }, 1800);
};
